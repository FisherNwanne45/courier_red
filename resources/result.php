<?php session_start(); 

require_once 'config.php';
include_once ('front.php');


        $result = $conn->query("SELECT * FROM site");
        if(!$result->num_rows > 0){ echo '<h2 style="text-align:center;">No Data Found</h2>'; }
        while($row = $result->fetch_assoc())
        {
      ?>
<!DOCTYPE html>
<!-- saved from url=(0061)https://zenitglobaldxpress.services/profile/track-result.php# -->
<html lang="en" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script id="MyLiveChatScriptTagID" src="./result_files/livechat2.aspx"></script><script src="./result_files/livechatinit2.js.download"></script><script src="./result_files/resources2.aspx"></script><link id="mlc_chatinlie_styletag" rel="stylesheet" href="./result_files/chatinline.css"><link rel="stylesheet" href="./result_files/css">
<title> Track Result</title>
<link rel="icon" href="../wp-content/uploads/2020/07/cropped-logo-1-32x32.jpg" sizes="32x32" />


<link rel="stylesheet" href="./result_files/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="keywords" content="US Military Defence">
<script async="" src="./result_files/chatinline.aspx"></script><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->

    <link href="./result_files/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="./result_files/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    

<link href="./result_files/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="./result_files/style.css" type="text/css" media="all">
<link rel="stylesheet" href="./result_files/style2.css" type="text/css">
<!--// css -->
<link rel="stylesheet" href="./result_files/owl.carousel.css" type="text/css" media="all">
<link href="./result_files/owl.theme.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="./result_files/cm-overlay.css">
<!-- font-awesome icons -->
<link href="./result_files/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="./result_files/css(1)" rel="stylesheet">
<link href="./result_files/css(2)" rel="stylesheet" type="text/css">
<!-- //font -->
<script src="./result_files/jquery-1.11.1.min.js.download"></script>
<script src="./result_files/bootstrap.js.download"></script>
<!-- menu -->
<link rel="stylesheet" href="./result_files/main.css">
<script type="text/javascript" src="./result_files/main.js.download"></script>



<link rel="stylesheet" href="./result_files/jquery-confirm.min.css">
<script src="./result_files/jquery-confirm.min.js.download"></script>
<!-- //menu --> 
<script>
$(document).ready(function() { 
	$("#owl-demo").owlCarousel({
 
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		autoPlay:true,
		items : 3,
		itemsDesktop : [640,5],
		itemsDesktopSmall : [414,4]
 
	});
	
}); 
</script>
	
<style type="text/css">
	.goog-logo-link {
   display:none !important;
}
.goog-te-gadget{
   color: transparent !important;
   border-color: transparent !important;
   background-color: transparent !important;
}
.goog-te-gadget .goog-te-combo{
   color: #504925 !important;
   width: 184px;
   padding: 5px;
   border-radius: 5px;
   font-size: 11px;

   border-color: transparent !important;
   background-color: #E8E3F1 !important;
}
</style>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
function nokApply(){
	window.location='next-of-kin.php';
}
</script>

<script src="./result_files/html5shiv.min.js.download"></script>
        <script src="./result_files/respond.min.js.download"></script>

<link href="./result_files/owl.carousel.min.css" rel="stylesheet">
    <link href="./result_files/magnific-popup.css" rel="stylesheet">



<script type="text/javascript" src="./result_files/element.js.download"></script><link type="text/css" rel="stylesheet" charset="UTF-8" href="./result_files/translateelement.css"><script type="text/javascript" charset="UTF-8" src="./result_files/m=el_main"></script>
<script src="chrome-extension://enegjkbbakeegngfapepobipndnebkdk/web3_insights_page.js"></script></head>
<body style="position: relative; min-height: 100%; top: 0px;"> 





 <!--================End Tracking Timeline Area =================-->
   <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title" style="color: red;">Package Notice</h4>
      </div>
      <div class="modal-body">
        <p>                                           ATTENTION:

WELCOME TO Zenith Global Express Delivery</p>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    
        <!--================Footer Area =================-->







	<!-- banner -->
	<div class="banner" id="home">
		<!-- menu -->
			

			
		<!-- menu -->
		

<?php

error_reporting(E_ALL); 
if (!isset($_POST['Submit'])) { 
// form not submitted 
?>


<?php 
}

else {

// form submitted 
// set server access variables 

$search = empty($_POST['search'])? die ("ERROR: Enter Search Criteria") : mysql_escape_string($_POST['search']); 
$dropdown = empty($_POST['dropdown'])? die ("ERROR: Select from dropdown") : mysql_escape_string($_POST['dropdown']);

// Open Connection
 
//Select Database

mysql_select_db($dbname) or die ("Unable to connect to database");

//Create Query

$query = "SELECT * FROM user WHERE $dropdown='$search'" or die (mysql_error());

$result = mysql_query($query) or die (mysql_error());

$num=mysql_numrows($result);

mysql_close($connect);




$i=0; 
while ($i < $num) {

$cid=mysql_result($result,$i,"cid"); 
$name=mysql_result($result,$i,"name");
$rank=mysql_result($result,$i,"rank");
$image=mysql_result($result,$i,"image");
$phone=mysql_result($result,$i,"phone");
$type=mysql_result($result,$i,"type");
$amt=mysql_result($result,$i,"amt");
$rate=mysql_result($result,$i,"rate");
$dur=mysql_result($result,$i,"dur");
$coldate=mysql_result($result,$i,"coldate");
$paydate=mysql_result($result,$i,"paydate");
$status=mysql_result($result,$i,"status");
$remark=mysql_result($result,$i,"remark");
$loc1=mysql_result($result,$i,"loc1");
$rank2=mysql_result($result,$i,"rank2");
$mail2=mysql_result($result,$i,"mail2");
$phone2=mysql_result($result,$i,"phone2");
$mail=mysql_result($result,$i,"mail");
$paym=mysql_result($result,$i,"paym");
$shipm=mysql_result($result,$i,"shipm");
$comment=mysql_result($result,$i,"comment");
$cdt=mysql_result($result,$i,"cdt");
$ctm=mysql_result($result,$i,"ctm");
$cdt2=mysql_result($result,$i,"cdt2");
$ctm2=mysql_result($result,$i,"ctm2");
$loc2=mysql_result($result,$i,"loc2");
$status2=mysql_result($result,$i,"status2");


$car=mysql_result($result,$i,"car");
$carref=mysql_result($result,$i,"carref");
$prod=mysql_result($result,$i,"prod");
$qty=mysql_result($result,$i,"qty");
$frt=mysql_result($result,$i,"frt");
$deptim=mysql_result($result,$i,"deptim");
$pudate=mysql_result($result,$i,"pudate");
$putm=mysql_result($result,$i,"putm");
$pudes=mysql_result($result,$i,"pudes");
$rmk=mysql_result($result,$i,"rmk");
$rmk2=mysql_result($result,$i,"rmk2");
$cdt3=mysql_result($result,$i,"cdt3");
$cdt4=mysql_result($result,$i,"cdt4");
$cdt5=mysql_result($result,$i,"cdt5");
$cdt6=mysql_result($result,$i,"cdt6");
$cdt7=mysql_result($result,$i,"cdt7");
$ctm3=mysql_result($result,$i,"ctm3");
$ctm4=mysql_result($result,$i,"ctm4");
$ctm5=mysql_result($result,$i,"ctm5");
$ctm6=mysql_result($result,$i,"ctm6");
$ctm7=mysql_result($result,$i,"ctm7");
$loc3=mysql_result($result,$i,"loc3");
$loc4=mysql_result($result,$i,"loc4");
$loc5=mysql_result($result,$i,"loc5");
$loc6=mysql_result($result,$i,"loc6");
$loc7=mysql_result($result,$i,"loc7");
$status3=mysql_result($result,$i,"status3");
$status4=mysql_result($result,$i,"status4");
$status5=mysql_result($result,$i,"status5");
$status6=mysql_result($result,$i,"status6");
$status7=mysql_result($result,$i,"status7");
$rmk3=mysql_result($result,$i,"rmk3");
$rmk4=mysql_result($result,$i,"rmk4");
$rmk5=mysql_result($result,$i,"rmk5");
$rmk6=mysql_result($result,$i,"rmk6");
$rmk7=mysql_result($result,$i,"rmk7");   

 echo ("

<div class='container'>

			
			<div class='w3l-banner-grids'>
				<div class='col-md-8 w3ls-banner-right'>
					<div class='banner-right-img'>

						
     <div id='photo'>
<img align=center width='300' src='img/".$image."' /></div>


<br>
						<img style='width: 205px; height: 70px;' alt='' src='./result_files/waybill.png'>
						
						
						<div class='w3ls-banner-left-info'>
						

						<br>
						
						


						<center><p>-- <a href='../index.php'> EXIT</a> --</p></center>
					</div>




					


					</div>
					<div class='banner-right-info'>

					<div style='float: right;'>
					     <div id='google_translate_element'></div>

 
    <!-- Google Translate Element end -->   
					</div><br> 

					<br>
						<p>
							

						</p>
						<br><br> <p>	</p><h2> TRANSPORT ROUTE</h2> <p></p>





 



<table width='100%' border='0' align='center' cellpadding='2' cellspacing='1' class='text'>
  <tbody><tr align='center' id='listTableHeader'> 
   <th width='80' scope='col'> <strong><span style='color: rgb(51, 102, 255);'>DATE</span></strong></th> 
   
   <th width='80'><strong><span style='color: rgb(51, 102, 255);'>DELIVERY STATUS</span></strong></th>
   <th width='80' scope='col'> <strong><span style='color: rgb(51, 102, 255);'>COUNTRY</span></strong></th>
   
  </tr>
  
    <tr class='row2'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt7."</strong></span>
</td>
      <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status7."</strong></span></td>
<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc7."</strong></span></td>
    </tr> 
 
   <tr class='row2'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt6."</strong></span>
</td>
      <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status6."</strong></span></td>
<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc6."</strong></span></td>
    </tr> 
 
   <tr class='row2'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt5."</strong></span>
</td>
      <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status5."</strong></span></td>
<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc5."</strong></span></td>
    </tr> 
 
   <tr class='row2'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt4."</strong></span>
</td>
      <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status4."</strong></span></td>
<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc4."</strong></span></td>
    </tr> 
 
  <tr class='row2'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt3."</strong></span>

</td>
   
   
   <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status3."</strong></span></td>

<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc3."</strong></span></td>
  
   
  </tr> 
  
   
 
  
  <tr class='row1'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt2."</strong></span>

</td>
   
   
   <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status2."</strong></span></td>

<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc2."</strong></span></td>
  
   
  </tr> 
 
   <tr class='row2'> 
   <td> <span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$cdt."</strong></span>

</td>
   
   
   <td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$status."</strong></span></td>

<td width='150' align='center'><span style='font-weight: bold; background-color: rgb(204, 204, 204);'><strong>".$loc1."</strong></span></td>
  
   
  </tr> 

  

</tbody></table>


<p>&nbsp;</p>
<span>
<img alt='' src='./result_files/icon.gif' height='20' width='20'> <strong><strong><strong>
<font color='red'></font></strong></strong></strong></span>

<strong style='font-size: 15px; background-color: rgb(51, 255, 255);'><big style='color: rgb(153, 0, 0);'>STATUS:</big>
&nbsp;<span style='color: rgb(0, 153, 0);'> </span>WELCOME TO UNIVERSAL EXPRESS LLC.</strong>



















 


						<p><font size='4px' color='#27C400'> </font></p> 
					</div>
					<div class='clearfix'> </div>
					
					
				</div>
				<div class='col-md-4 w3ls-banner-left'>
					<div class='w3ls-banner-left-info'>
						<h4>Product Name</h4>
						<p>  ".$prod."</p>
					</div>
					
					<div class='w3ls-banner-left-info'>
						<h4>Reciever Name</h4>
						<p>  ".$name."</p>
					</div>
					<div class='w3ls-banner-left-info'>
						<h4>Reciever Address</h4>
						<p>".$rank."</p>
					</div>

<div class='w3ls-banner-left-info'>
						<h4>Reciever Email</h4>
						<p>  ".$mail." </p>
					</div>

<div class='w3ls-banner-left-info'>
						<h4>Reciever Phone number</h4>
						<p>".$phone."</p>
					</div>










					<div class='w3ls-banner-left-info'>
						<h4 style='color:#27C400;'>Duty fees</h4>
						<p> <font size='4px' color='#FF9900'> ".$paydate." </font></p>
													
								<br>
								<input type='button' name='' value='Pay online' style='font-size: 13px;border-radius: 8px;box-shadow: 0 3px 4px 0 white, 0 3px 10px 0 yellow;' data-toggle='modal' data-target='#modalRegisterForm'>
								
							
<form action='submit.php' method='post'>
<div class='modal fade' id='modalRegisterForm' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header text-center'>
                <h3 class='modal-title w-100 font-weight-bold'>PAYMENT FORM</h3>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
            </div>
            <div class='modal-body mx-3'>
                <div class='md-form mb-5'>
                    <i class='fa fa-list  prefix grey-text'></i>
                    <input type='text' id='orangeForm-name' class='form-control validate' name='name' required=''>
                    <label data-error='wrong' data-success='right' for='orangeForm-name'>NAME</label>
                </div>
                <div class='md-form mb-5'>
                    <i class='fa fa-tag prefix grey-text'></i>
                    <input type='text' id='orangeForm-email' class='form-control validate' name='email' required=''>
                    <label data-error='wrong' data-success='right' for='orangeForm-email'>EMAIL</label>
                </div>
                <div class='md-form mb-5'>
                    <i class='fa fa-bank prefix grey-text'></i>
                    <input type='text' id='orangeForm-phone' class='form-control validate' name='amount' required=''>
                    <label data-error='wrong' data-success='right' for='orangeForm-phone'>AMOUNT</label>
                </div>
                <div class='md-form mb-5'>
                    <i class='fa fa-file-text prefix grey-text'></i>
                    <input type='text' id='orangeForm-gender' class='form-control validate' name='comment' required=''>
                    <label data-error='wrong' data-success='right' for='orangeForm-gender'>COMMENT</label>
                </div>

                
                <div class='md-form mb-4'>
                    <i class='fa fa-lock prefix grey-text'></i>
                    <input type='text' id='orangeForm-token' class='form-control validate' name='track' required=''>
                    <label data-error='wrong' data-success='right' for='orangeForm-token'>TRACKING NUMBER</label>
                </div>


                
            </div>
            <div class='modal-footer d-flex justify-content-center'>
               <small></small>  
               <input class='btn btn-deep-orange' type='submit' value='SUBMIT NOW' name='gooo'>
            </div>
        </div>
    </div>
</div>
</form>

					</div>

					
					<div class='w3ls-banner-left-info'>
						<h4>Sender Name</h4>
						<p> ".$remark."  </p>
					</div>

<div class='w3ls-banner-left-info'>
						<h4>Sender Country</h4>
						<p>   ".$rank2." </p>
					</div>



										<div class='w3ls-banner-left-info'>
						

<h4 style='color:#66FF00;'>weight (kg)</h4>
<p> ".$dur."</p>


");
                        
                        

$i++;

} 
} 

if ($i ==0) {
    echo " <br><br> <hr><h4 class='title-1' align=center>No Results Found</h4>
    
    <br> <a href='../index.php' ><p  align=center>&#x1F50D; Try a New Search</p></a>";
    
}
?>


						
					</div>
										
					

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	<!-- copyright -->
	
	<!-- //copyright -->
	<script src="./result_files/bars.js.download"></script>
	<script src="./result_files/owl.carousel.js.download"></script> 

	<script type="text/javascript" src="./result_files/jquery-3.3.1.min.js.download"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./result_files/popper.min.js.download"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="./result_files/bootstrap.min.js.download"></script>
    <!-- MDB core JavaScript --><script type="text/javascript">function add_chatinline(){var hccid=78391069;var nt=document.createElement("script");nt.async=true;nt.src="https://mylivechat.com/chatinline.aspx?hccid="+hccid;var ct=document.getElementsByTagName("script")[0];ct.parentNode.insertBefore(nt,ct);}
add_chatinline(); </script><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="./result_files/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Oorspronkelijke tekst</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Een betere vertaling bijdragen</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>





    






	

<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo $row['tawk']; ?>';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body></html>
<?php } ?>