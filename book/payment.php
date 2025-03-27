<?php 
    include('header.php');
include 'admin/db_connect.php'; 
if($_SERVER['REQUEST_METHOD'] == "POST"){
	foreach($_POST as $k => $v){
		$$k = $v;
	}
}


	$airport = $conn->query("SELECT * FROM airport_list ");
				while($row = $airport->fetch_assoc()){
					$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
				}
				$where = " where date(f.departure_datetime) > '".date("Y-m-d")."' ";
				if($_SERVER['REQUEST_METHOD'] == "POST" )
				$where .= " and f.departure_airport_id ='$departure_airport_id' and f.arrival_airport_id = '$arrival_airport_id' and date(f.departure_datetime) = '".date('Y-m-d',strtotime($date))."'  ";
				$flight = $conn->query("SELECT f.*,a.airlines,a.logo_path FROM flight_list f inner join airlines_list a on f.airline_id = a.id $where order by rand()");
				if($flight->num_rows > 0):
				while($row=$flight->fetch_assoc()):
					$booked = $conn->query("SELECT * FROM booked_flight where flight_id = ".$row['id'])->num_rows;
$email      = $_GET['email']; //Notice string in brackets is JSON key
$name       = $_GET['name'];
$contact    = $_GET['contact'];
$address  = $_GET['address'];
$logo =  $row['logo_path'];
$depart = $aname[$row['departure_airport_id']];
$arrival = $aname[$row['arrival_airport_id']];
$airlines = $row['airlines'];
$dpt = $row['departure_datetime'];
$avt = $row['arrival_datetime'];
$price = $row['price'];
if(!empty($_GET["email"]))
{
$message = "<html><body> 	<img src='https://shipglobalplc.com/images/logo.png' align='center' width='150px' alt='ShipGlobal Logo' />	<section class='page-section' id='flight' >
        <div class='container'>
        	<div class='card'>
        		<div class='card-body'>
        			<div class='col-lg-12'>
						<div class='row'>
							<div class='col-md-12 text-center'>
								<h2><b><?php echo isset($trip) && $trip == 2 ? 'Departure Searched Flight results...' : ( !isset($trip)? ' Your Booking Details' :'Searched Flight results...')  ?></b></h2><br> 
						<p>Name: <?php echo $name ?></p>
						<p>Email: <?php echo $email ?> </p>
						<p>Phone: <?php echo $contact ?></p>
						<p>Address: <?php echo $address ?> </p>
							</div>
						</div>
						<hr class='divider'>
			 
				<div class='row align-items-center'>
					<div class='col-md-3'>
						<img src='assets/img/$logo' alt=''>
					</div>
					<div class='col-md-6'>
						 <p><b><?php echo $depart.' - '.$arrival ?></b></p>
						 <p><small>Airline: <b><?php echo $airlines ?></b></small></p>
						 <p><small>Departure: <b><?php echo date('h:i A',strtotime($dpt)) ?></b></small></p>
						 <p><small>Arrival: <b><?php echo (date('M d,Y',strtotime($dpt)) == date('M d,Y',strtotime($avt))) ? date('h:i A',strtotime($avt)) : date('M d,Y h:i A',strtotime($avt)) ?></b></small></p>
					 
					</div>
					<div class='col-md-3 text-center align-self-end-sm'>
						<h4 class='text-right'><b><?php echo number_format($price,2) ?></b></h4>
					 
					</div>
				</div>
				<hr class='divider' style='max-width: 60vw'>
				<?php endwhile; ?>
				<?php else: ?>
					<div class='row align-items-center'>
						<h5 class='text-center'><b>No result.</b></h5>
					</div>
				<?php endif; ?>
					
				<?php if(isset($trip) && $trip ==2): ?>
					<hr>
					<div class='row'>
						<div class='col-md-12 text-center'>
							<h2><b><?php echo isset($trip) && $trip == 2 ? 'Arrival Searched Flight results...' : ( !isset($trip)? ' Flights Available ' :'Searched Flight results...')  ?></b></h2>
						</div>
					</div>
						<hr class='divider'>";
						
						
						 $sub = "ShipGlobal - $name, New Status of Shipment -  $cid. ";
                
                $header  = 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'From: ShipGlobal Logistics <info@shipglobalplc.com>' . "\r\n";
mail($mail,$sub,$message,$header);

}
?>
    
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
					<div class="col-md-3">
						<img src="assets/img/<?php echo $row['logo_path'] ?>" alt="">
					</div>
					<div class="col-md-6">
						 <p><b><?php echo $aname[$row['departure_airport_id']].' - '.$aname[$row['arrival_airport_id']] ?></b></p>
						 <p><small>Airline: <b><?php echo $row['airlines'] ?></b></small></p>
						 <p><small>Departure: <b><?php echo date('h:i A',strtotime($row['departure_datetime'])) ?></b></small></p>
						 <p><small>Arrival: <b><?php echo (date('M d,Y',strtotime($row['departure_datetime'])) == date('M d,Y',strtotime($row['arrival_datetime']))) ? date('h:i A',strtotime($row['arrival_datetime'])) : date('M d,Y h:i A',strtotime($row['arrival_datetime'])) ?></b></small></p>
					 
					</div>
					<div class="col-md-3 text-center align-self-end-sm">
						<h4 class="text-right"><b><?php echo number_format($row['price'],2) ?></b></h4>
					 
					</div>
				</div>
				<hr class="divider" style="max-width: 60vw">
				<?php endwhile; ?>
				<?php else: ?>
					<div class="row align-items-center">
						<h5 class="text-center"><b>No result.</b></h5>
					</div>
				<?php endif; ?>
					
				<?php if(isset($trip) && $trip ==2): ?>
					<hr>
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b><?php echo isset($trip) && $trip == 2 ? "Arrival Searched Flight results..." : ( !isset($trip)? " Flights Available " :"Searched Flight results...")  ?></b></h2>
						</div>
					</div>
						<hr class="divider">
				<?php 
				$airport = $conn->query("SELECT * FROM airport_list ");
				while($row = $airport->fetch_assoc()){
					$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
				}
				$where = " where date(f.departure_datetime) > '".date("Y-m-d")."' ";
				if($_SERVER['REQUEST_METHOD'] == "POST" )
				$where .= " and f.departure_airport_id ='$arrival_airport_id' and f.arrival_airport_id = '$departure_airport_id' and date(f.departure_datetime) = '".date('Y-m-d',strtotime($date_return))."'  ";
				$flight = $conn->query("SELECT f.*,a.airlines,a.logo_path FROM flight_list f inner join airlines_list a on f.airline_id = a.id $where order by rand()");
				if($flight->num_rows > 0):
				while($row=$flight->fetch_assoc()):
					$booked = $conn->query("SELECT * FROM booked_flight where flight_id = ".$row['id'])->num_rows;

				?>
				<div class="row align-items-center">
					<div class="col-md-3">
						<img src="assets/img/<?php echo $row['logo_path'] ?>" alt="">
					</div>
					<div class="col-md-6">
						 <p><b><?php echo $aname[$row['departure_airport_id']].' - '.$aname[$row['arrival_airport_id']] ?></b></p>
						 <p><small>Airline: <b><?php echo $row['airlines'] ?></b></small></p>
						 <p><small>Departure: <b><?php echo date('h:i A',strtotime($row['departure_datetime'])) ?></b></small></p>
						 <p><small>Arrival: <b><?php echo (date('M d,Y',strtotime($row['departure_datetime'])) == date('M d,Y',strtotime($row['arrival_datetime']))) ? date('h:i A',strtotime($row['arrival_datetime'])) : date('M d,Y h:i A',strtotime($row['arrival_datetime'])) ?></b></small></p>
						 
					</div>
					<div class="col-md-3 text-center align-self-end-sm">
						<h4 class="text-right"><b><?php echo number_format($row['price'],2) ?></b></h4>
						 
					</div>
				</div>
				<hr class="divider" style="max-width: 60vw">
				<?php endwhile; ?>
				<?php else: ?>
					<div class="row align-items-center">
						<h5 class="text-center"><b>No result.</b></h5>
					</div>
				<?php endif; ?>
				<?php endif; ?>
				</div>
				</div>
        	</div><form method="post" action="finish.php">
        
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <input type="hidden" name="email" value="<?php echo $email ?>">
        <input type="hidden" name="contact" value="<?php echo $contact ?>">
        <input type="hidden" name="address" value="<?php echo $address ?>">
        
        <input type="hidden" name="depart" value="<?php echo $depart.' - '.$arrival ?>">
        <input type="hidden" name="airlines" value="<?php echo $airlines ?>">
        
          <input type="hidden" name="dpt" value="<?php echo date('h:i A',strtotime($dpt)) ?>">
          
          <input type="hidden" name="avt" value="<?php echo (date('M d,Y',strtotime($dpt)) == date('M d,Y',strtotime($avt))) ? date('h:i A',strtotime($avt)) : date('M d,Y h:i A',strtotime($avt)) ?>">
          
          <input type="hidden" name="price" value="<?php echo number_format($price,2) ?>">
          
          <input type="hidden" name="logo" value="<?php echo $row['logo_path'] ?>">
        
          
           	<button class="btn btn-primary btn-block" type="submit" name="submit" id="submit">Proceed to Payment</button>
					 
    </form>
        </div>
    </section>
    
    <style>
    	#flight img{
    		max-height: 300px;
    		max-width: 200px; 
    	}
    	#flight p{
    		margin: unset
      	}
    </style>
    <script>
        
       $('.view_schedule').click(function(){
			uni_modal($(this).attr('data-name')+" - Schedule","view_doctor_schedule.php?id="+$(this).attr('data-id'))
		})
       $('.book_flight').click(function(){
       	if($(this).attr('data-max') <= 0){
       		alert("There is no Available Seats for the selected flight");
       		return false;
       	}
			uni_modal($(this).attr('data-name'),"book_flight.php?id="+$(this).attr('data-id')+"&max="+$(this).attr('data-max'),'mid-large')
		})
        $('[name="trip"]').on("keypress change keyup",function(){
            if($(this).val() == 1){
                $('#rdate').hide()
            }else{
                $('#rdate').show()
            }
        })
    </script>
	
