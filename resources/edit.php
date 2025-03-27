<?php
include('session.php');

if ($row['amt'] == 'user') {
    header('Location: vault.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tracking</title>
    <link href="../images/favicon.png" rel="shortcut icon">
    <link type="text/css" href="edmin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="edmin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="edmin/css/theme.css" rel="stylesheet">
    <link type="text/css" href="edmin/images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>

<body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Welcome :
                    <i><?php echo $login_session; ?> </a>

                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">
                        <ul class="widget widget-menu unstyled">
                            <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                            <li><a href="identity.php"><i class="menu-icon icon-bullhorn"></i>Create New Tracking
                                </a>
                            </li>
                            <li><a href="users.php"><i class="menu-icon icon-user"></i>Vault Users </a>
                            </li>
                            <li><a href="create_user.php"><i class="menu-icon icon-user"></i>Create New Vault User
                                </a>
                            </li>
                            <li><a href="change_password.php"><i class="menu-icon icon-inbox"></i>Change Password
                                </a></li>
                            <li><a href="logout.php"><i class="menu-icon icon-tasks"></i>Logout </a></li>
                        </ul>
                        <!--/.widget-nav-->



                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->
                <div class="span9">
                    <div class="content">

                        <?php
                        error_reporting(E_ALL);
                        ini_set('display_errors', 0);

                        include_once 'config.php';
                        if (count($_POST) > 0) {
                            mysqli_query($conn, "UPDATE user set car='" . $_POST['car'] . "', carref='" . $_POST['carref'] . "', prod='" . $_POST['prod'] . "', qty='" . $_POST['qty'] . "', frt='" . $_POST['frt'] . "', deptim='" . $_POST['deptim'] . "', pudate='" . $_POST['pudate'] . "', putm='" . $_POST['putm'] . "', pudes='" . $_POST['pudes'] . "', rmk='" . $_POST['rmk'] . "', rmk2='" . $_POST['rmk2'] . "', rmk3='" . $_POST['rmk3'] . "', rmk4='" . $_POST['rmk4'] . "', rmk5='" . $_POST['rmk5'] . "', rmk6='" . $_POST['rmk6'] . "', rmk7='" . $_POST['rmk7'] . "', cdt3='" . $_POST['cdt3'] . "', cdt4='" . $_POST['cdt4'] . "', cdt5='" . $_POST['cdt5'] . "', cdt6='" . $_POST['cdt6'] . "', cdt7='" . $_POST['cdt7'] . "', ctm3='" . $_POST['ctm3'] . "', ctm4='" . $_POST['ctm4'] . "', ctm5='" . $_POST['ctm5'] . "', ctm6='" . $_POST['ctm6'] . "', ctm7='" . $_POST['ctm7'] . "', loc3='" . $_POST['loc3'] . "', loc4='" . $_POST['loc4'] . "', loc5='" . $_POST['loc5'] . "', loc6='" . $_POST['loc6'] . "', loc7='" . $_POST['loc7'] . "', status3='" . $_POST['status3'] . "', status4='" . $_POST['status4'] . "', status5='" . $_POST['status5'] . "', status6='" . $_POST['status6'] . "', status7='" . $_POST['status7'] . "', rank2='" . $_POST['rank2'] . "', mail2='" . $_POST['mail2'] . "', mail='" . $_POST['mail'] . "', phone2='" . $_POST['phone2'] . "', paym='" . $_POST['paym'] . "', shipm='" . $_POST['shipm'] . "', comment='" . $_POST['comment'] . "', status2='" . $_POST['status2'] . "', cdt='" . $_POST['cdt'] . "', ctm='" . $_POST['ctm'] . "', cdt2='" . $_POST['cdt2'] . "', ctm2='" . $_POST['ctm2'] . "', coldate='" . $_POST['coldate'] . "', loc1='" . $_POST['loc1'] . "', loc2='" . $_POST['loc2'] . "', amt='" . $_POST['amt'] . "', type='" . $_POST['type'] . "', dur='" . $_POST['dur'] . "', rate='" . $_POST['rate'] . "', phone='" . $_POST['phone'] . "', name='" . $_POST['name'] . "', rank='" . $_POST['rank'] . "', cid='" . $_POST['cid'] . "' ,status='" . $_POST['status'] . "',rrr='" . $_POST['rrr'] . "',remark='" . $_POST['remark'] . "' WHERE id='" . $_POST['id'] . "'");
                            $message = '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Record Modified Successfully!
									</div>';

                            $name = $_POST['name'];
                            $mail = $_POST['mail'];
                            $cid = $_POST['cid'];
                            $type = $_POST['type'];
                            $rmk = $_POST['rmk'];
                            $rrr = $_POST['rrr'];
                            $loc1 = $_POST['loc1'];
                            $cdt = $_POST['cdt'];
                            $status = $_POST['status'];
                            $loc2 = $_POST['loc2'];
                            $cdt2 = $_POST['cdt2'];
                            $status2 = $_POST['status2'];
                            $loc3 = $_POST['loc3'];
                            $cdt3 = $_POST['cdt3'];
                            $status3 = $_POST['status3'];
                            $loc4 = $_POST['loc4'];
                            $cdt4 = $_POST['cdt4'];
                            $status4 = $_POST['status4'];
                            $loc5 = $_POST['loc5'];
                            $cdt5 = $_POST['cdt5'];
                            $status5 = $_POST['status5'];
                            $loc6 = $_POST['loc6'];
                            $cdt6 = $_POST['cdt6'];
                            $status6 = $_POST['status6'];
                            $loc7 = $_POST['loc7'];
                            $cdt7 = $_POST['cdt7'];
                            $status7 = $_POST['status7'];
                            $site = $rows['name'];
                            $email2 = $rows['email'];
                            $url = $rows['url'];


                            $messag = "<html><body>
	<img src='$url/wp-content/uploads/2020/11/omni_logistics_logo_tagline-1.png' align='center' width='150px' alt='$site Logo' />
	<h3>Dear $name,  Welcome to $site </h3>
	<p>
The Status of your Courier Package  has been updated, find new information below
</p>
<h2> Current Status:   $rmk </h2> <p>
<b>Tracking Number: </b> $cid <br>
<b>Parcel Information: </b>  $type <br>
<b>Remarks: </b>  $rrr
<br><br></p>
<div align='center'><h5><b> SHIPMENT HISTORY</b></h5>
<table style='width:60%'>
  <tr>
   <th>LOCATION</th>
    <th>DATE</th>
    <th style='color:red'>DELIVERY STATUS</th>
   
  </tr>
  <tr>
    <td style='text-align:center'>$loc1</td>
    <td style='text-align:center'>$cdt</td>
    <td style='text-align:center'>$status</td>
  </tr>
  <tr>
    <td style='text-align:center'>$loc2</td>
    <td style='text-align:center'>$cdt2</td>
    <td style='text-align:center'>$status2</td>
  </tr>
  <tr>
    <td style='text-align:center'>$loc3</td>
    <td style='text-align:center'>$cdt3</td>
    <td style='text-align:center'>$status3</td>
  </tr>
  <tr>
    <td style='text-align:center'>$loc4</td>
    <td style='text-align:center'>$cdt4</td>
    <td style='text-align:center'>$status4</td>
  </tr>
  <tr>
    <td style='text-align:center'>$loc5</td>
    <td style='text-align:center'>$cdt5</td>
    <td style='text-align:center'>$status5</td>
  </tr>
  <tr>
    <td style='text-align:center'>$loc6</td>
    <td style='text-align:center'>$cdt6</td>
    <td style='text-align:center'>$status6</td>
  </tr>
  <tr>
    <td style='text-align:center'>$loc7</td>
    <td style='text-align:center'>$cdt7</td>
    <td style='text-align:center'>$status7</td>
  </tr>
</table>

</div>
Remember to track your parcel using your tracking number in our portal - $url. <br>

Endeavour to contact us in case of any complaints or further inquiries. 
<br>
Thanks.<br><br>
$site Team. <br><br><hr> <p><i>The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future</i></p>  </body>
  </html>";
                            $sub = "$site - $name, New Status of Shipment -  $cid. ";

                            $header  = 'MIME-Version: 1.0' . "\r\n";
                            $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            //$header .= 'From: $site <$email2>' . "\r\n";
                            $header .= 'From: ' . $site . ' <' . $email2 . '>' . "\r\n";

                            mail($mail, $sub, $messag, $header);
                        }
                        $result = mysqli_query($conn, "SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
                        $row = mysqli_fetch_array($result);
                        ?>

                        <div class="module">
                            <div class="module-head">
                                <h3>Edit Tracking Details of <?php echo $row['name']; ?></h3>
                            </div>
                            <div class="module-body">



                                <form class="form-horizontal row-fluid" method="post" action="">

                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <div><?php if (isset($message)) {
                                                echo $message;
                                            } ?>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Tracking Number</label>
                                        <div class="controls">
                                            <input type="text" name="cid" value="<?php echo $row['cid']; ?>"
                                                id="cid" class="span8">

                                        </div>
                                    </div>
                                    <br>
                                    <h5>Sender Information
                                        <hr>
                                    </h5>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Sender Name</label>
                                        <div class="controls">
                                            <input type="text" name="remark" id="remark"
                                                value="<?php echo $row['remark']; ?>" class="span8">

                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Sender Address</label>
                                        <div class="controls">
                                            <input type="text" name="rank2" id="rank2"
                                                value="<?php echo $row['rank2']; ?>" class="span8">

                                        </div>
                                    </div>


                                    <br>
                                    <h5>Receiver Information
                                        <hr>
                                    </h5>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Receiver Name</label>
                                        <div class="controls">
                                            <input type="text" name="name" id="name"
                                                value="<?php echo $row['name']; ?>" class="span8">

                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Receiver Address:</label>
                                        <div class="controls">
                                            <input type="text" name="rank" id="rank"
                                                value="<?php echo $row['rank']; ?>" class="span8">

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Receiver Phone</label>
                                        <div class="controls">
                                            <input type="text" name="phone" id="phone"
                                                value="<?php echo $row['phone']; ?>" class="span8">

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Receiver Email</label>
                                        <div class="controls">
                                            <input type="text" name="mail" id="mail"
                                                value="<?php echo $row['mail']; ?>" class="span8">

                                        </div>
                                    </div>
                                    <br>
                                    <h5>Parcel Information
                                        <hr>
                                    </h5>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Parcel Content</label>
                                        <div class="controls">
                                            <input type="text" name="type" id="type"
                                                value="<?php echo $row['type']; ?>" class="span8">

                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Weight (KG)</label>
                                        <div class="controls">
                                            <input type="text" name="dur" id="dur"
                                                value="<?php echo $row['dur']; ?>" class="span8">

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Duty Fees</label>
                                        <div class="controls">
                                            <input type="text" name="paydate" id="paydate"
                                                value="<?php echo $row['paydate']; ?>" class="span8">

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput"><img
                                                src="result_files/icon.gif " height='20' width='20'> STATUS</label>
                                        <div class="controls">

                                            <select name="rmk" id="rmk">

                                                <option value="Order Confirmed"
                                                    <?php if ($row['rmk'] == 'Order Confirmed') {
                                                        echo 'selected';
                                                    } ?>>
                                                    Order Confirmed</option>

                                                <option value="Picked by Courier"
                                                    <?php if ($row['rmk'] == 'Picked by Courier') {
                                                        echo 'selected';
                                                    } ?>>
                                                    Picked by Courier</option>

                                                <option value="On The Way"
                                                    <?php if ($row['rmk'] == 'On The Way') {
                                                        echo 'selected';
                                                    } ?>>
                                                    On The Way</option>

                                                <option value="Ready for Pickup"
                                                    <?php if ($row['rmk'] == 'Ready for Pickup') {
                                                        echo 'selected';
                                                    } ?>>
                                                    Ready for Pickup</option>

                                                <option value="Custom Hold"
                                                    <?php if ($row['rmk'] == 'Custom Hold') {
                                                        echo 'selected';
                                                    } ?>>
                                                    Custom Hold</option>

                                                <option value="Arrived"
                                                    <?php if ($row['rmk'] == 'Arrived') {
                                                        echo 'selected';
                                                    } ?>>
                                                    Arrived</option>

                                                <option value="Delivered"
                                                    <?php if ($row['rmk'] == 'Delivered') {
                                                        echo 'selected';
                                                    } ?>>
                                                    Delivered</option>
                                            </select>


                                        </div>
                                    </div>

                                    <br>
                                    <h5>Shipping History Information
                                        <hr>
                                    </h5>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput" style="color:#FF0000">
                                            Location</label>
                                        <div class="controls">
                                            <input type="text" name="loc1" id="loc1"
                                                value="<?php echo $row['loc1']; ?>" class="span8">

                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="basicinput" style="color:#FF0000">
                                            Date</label>
                                        <div class="controls">
                                            <input type="text" name="cdt" id="cdt"
                                                value="<?php echo $row['cdt']; ?>" class="span8"
                                                placeholder="Leave Empty if not necessary">

                                        </div>
                                    </div>



                                    <div class="control-group">
                                        <label class="control-label" for="basicinput"> Status</label>
                                        <div class="controls">
                                            <input type="text" name="status" id="status"
                                                value="<?php echo $row['status']; ?>" class="span8"
                                                placeholder="Leave Empty if not necessary">


                                        </div>
                                    </div> <br>

                                    <div class="clicker btn" id="loc1" onClick="$('#locA').toggle();"><i
                                            class="menu-icon icon-plus"></i> Add New History </div>

                                    <style>
                                        .clicker {
                                            outline: none;
                                            cursor: pointer;
                                        }
                                    </style>
                                    <script>
                                        $(document).ready(function() {
                                            $('#loc1').click(function() {
                                                $('#locA').toggle();
                                            });
                                        });
                                        $(document).ready(function() {
                                            $('#loc2').click(function() {
                                                $('#locB').toggle();
                                            });
                                        });
                                        $(document).ready(function() {
                                            $('#loc3').click(function() {
                                                $('#locC').toggle();
                                            });
                                        });
                                        $(document).ready(function() {
                                            $('#loc4').click(function() {
                                                $('#locD').toggle();
                                            });
                                        });
                                        $(document).ready(function() {
                                            $('#loc5').click(function() {
                                                $('#locE').toggle();
                                            });
                                        });
                                        $(document).ready(function() {
                                            $('#loc6').click(function() {
                                                $('#locF').toggle();
                                            });
                                        });
                                    </script>




                                    <span style="display:none;" id="locA">
                                        <div class="control-group">
                                            <hr>
                                            <label class="control-label" for="basicinput" style="color:#0433db">New
                                                Location 1</label>
                                            <div class="controls">
                                                <input type="text" name="loc2" id="loc2"
                                                    value="<?php echo $row['loc2']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:#0433db">New
                                                Date 1</label>
                                            <div class="controls">
                                                <input type="text" name="cdt2" id="cdt2"
                                                    value="<?php echo $row['cdt2']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Status 1</label>
                                            <div class="controls">
                                                <input type="text" name="status2" id="status2"
                                                    value="<?php echo $row['status2']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">



                                            </div>
                                        </div><br>
                                        <div class="clicker btn" id="loc2" onClick="$('#locB').toggle();"><i
                                                class="menu-icon icon-plus"></i> Add New History </div>
                                    </span>

                                    <span style="display:none;" id="locB">
                                        <hr>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:green">New
                                                Location 2</label>
                                            <div class="controls">
                                                <input type="text" name="loc3" id="loc3"
                                                    value="<?php echo $row['loc3']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:green">New
                                                Date 2</label>
                                            <div class="controls">
                                                <input type="text" name="cdt3" id="cdt3"
                                                    value="<?php echo $row['cdt3']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>




                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Status 2</label>
                                            <div class="controls">
                                                <input type="text" name="status3" id="status3"
                                                    value="<?php echo $row['status3']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">


                                            </div>
                                        </div>

                                        <br>
                                        <div class="clicker btn" id="loc3" onClick="$('#locC').toggle();"><i
                                                class="menu-icon icon-plus"></i> Add New History </div>
                                    </span>

                                    <span style="display:none;" id="locC">

                                        <hr>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:brown">New
                                                Location 3</label>
                                            <div class="controls">
                                                <input type="text" name="loc4" id="loc4"
                                                    value="<?php echo $row['loc4']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:brown">New
                                                Date 3</label>
                                            <div class="controls">
                                                <input type="text" name="cdt4" id="cdt4"
                                                    value="<?php echo $row['cdt4']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>




                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Status 3</label>
                                            <div class="controls">
                                                <input type="text" name="status4" id="status4"
                                                    value="<?php echo $row['status4']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">


                                            </div>
                                        </div>

                                        <br>
                                        <div class="clicker btn" id="loc4" onClick="$('#locD').toggle();"><i
                                                class="menu-icon icon-plus"></i> Add New History </div>
                                    </span>

                                    <span style="display:none;" id="locD">

                                        <hr>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:#0433db">New
                                                Location 4</label>
                                            <div class="controls">
                                                <input type="text" name="loc5" id="loc5"
                                                    value="<?php echo $row['loc5']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:#0433db">New
                                                Date 4</label>
                                            <div class="controls">
                                                <input type="text" name="cdt5" id="cdt5"
                                                    value="<?php echo $row['cdt5']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>




                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Status 4</label>
                                            <div class="controls">
                                                <input type="text" name="status5" id="status5"
                                                    value="<?php echo $row['status5']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">


                                            </div>
                                        </div>

                                        <br>
                                        <div class="clicker btn" id="loc5" onClick="$('#locE').toggle();"><i
                                                class="menu-icon icon-plus"></i> Add New History </div>
                                    </span>

                                    <span style="display:none;" id="locE">


                                        <hr>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:green">New
                                                Location 5</label>
                                            <div class="controls">
                                                <input type="text" name="loc6" id="loc6"
                                                    value="<?php echo $row['loc6']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:green">New
                                                Date 5</label>
                                            <div class="controls">
                                                <input type="text" name="cdt6" id="cdt6"
                                                    value="<?php echo $row['cdt6']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Status 5</label>
                                            <div class="controls">
                                                <input type="text" name="status6" id="status6"
                                                    value="<?php echo $row['status6']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">


                                            </div>
                                        </div>

                                        <br>
                                        <div class="clicker btn" id="loc6" onClick="$('#locF').toggle();"><i
                                                class="menu-icon icon-plus"></i> Add New History </div>
                                    </span>

                                    <span style="display:none;" id="locF">

                                        <hr>
                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:red">New
                                                Location 6</label>
                                            <div class="controls">
                                                <input type="text" name="loc7" id="loc7"
                                                    value="<?php echo $row['loc7']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="basicinput" style="color:red">New Date
                                                6</label>
                                            <div class="controls">
                                                <input type="text" name="cdt7" id="cdt7"
                                                    value="<?php echo $row['cdt7']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">

                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label" for="basicinput">New Status 6</label>
                                            <div class="controls">
                                                <input type="text" name="status7" id="status7"
                                                    value="<?php echo $row['status7']; ?>" class="span8"
                                                    placeholder="Leave Empty if not necessary">


                                            </div>
                                        </div>
                                    </span>

                                    <hr>
                                    <div class="control-group">
                                        <label class="control-label" for="basicinput">Remarks/Comment</label>
                                        <div class="controls">


                                            <textarea name="rrr" id="rrr" value="<?php echo $row['rrr']; ?>"
                                                class="span8"
                                                placeholder="Enter Remarks"><?php echo $row['rrr']; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <div class="controls">
                                            <button type="submit" name="submit" value="Submit"
                                                class="btn btn-success">Submit Form</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; <?php echo date("Y"); ?> Fisher Designs </b>All rights reserved.
        </div>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="edmin/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="edmin/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="edmin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="edmin/scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="edmin/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="edmin/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="edmin/scripts/common.js" type="text/javascript"></script>

</body>