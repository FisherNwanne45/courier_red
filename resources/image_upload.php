<?php
require_once('config.php');
session_start();
if(isset($_POST['save']))
{
   
  $cid = $_POST['cid'];
  $name = $_POST['name'];
  $rank = $_POST['rank'];
$phone = $_POST['phone'];
$type = $_POST['type'];
$amt = $_POST['amt'];
$rate = $_POST['rate'];
$dur = $_POST['dur'];
$coldate = $_POST['coldate'];
$paydate = $_POST['paydate'];
$status = $_POST['status'];
$remark = $_POST['remark'];
$image = $_POST['image'];
$scr = $_POST['scr'];
$dtt = $_POST['dtt'];
$sigb = $_POST['sigb'];
$lsa = $_POST['lsa'];



$sql_u = "SELECT * FROM user WHERE cid='$cid'";
  	
  	$res_u = mysqli_query($conn, $sql_u);
  	

  	if (mysqli_num_rows($res_u) > 0) {
  	 echo 'Sorry... AWB already taken!'; 	
   	
  	}else{
            
  
      $conn->query("INSERT INTO user (image, cid, name, rank, phone, type, amt, rate, dur, coldate, paydate, status, remark, scr, dtt, sigb, lsa)VALUES ('$image','$cid','$name','$rank','$phone','$type','$amt','$rate','$dur','$coldate','$paydate','$status','$remark','$scr','$dtt','$sigb','$lsa')");
      $_SESSION['"Success"']='Upload Success...';
      echo 'Saved!';
      
      exit();
  	}
  }
   
   
    
 
 

   
    
  
