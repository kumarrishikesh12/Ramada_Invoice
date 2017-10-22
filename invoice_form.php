<?php session_start(); ?>

<!-- Connection File -->
<?php require 'database_conn.php'; ?>
<!-- Connection File -->


<?php 
                    
/* If Session Not Active */

if(!isset($_SESSION['username']) && !isset($_SESSION['email']) && !isset($_SESSION['password']) ){

header("Location: index.php");

}

?>

<?php 
      
/* If Session Active */                  

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password']) )

 {   
         /*
          echo $_SESSION['username'];
          echo '<br>';
          echo $_SESSION['email'];
          echo '<br>';
          echo $_SESSION['password'];
          header("Location: http://localhost/Demo/invoice_form.php");
          header("Location: invoice_form.php");
          */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ramada Tax Invoice </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Include Bootstrap Time picker -->
  <script type="text/javascript" src="js/bootstrap-timepicker.js"></script>
  <!-- Include Bootstrap Datepicker -->


<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
  

  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> Ramada Tax Invoice </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
       <!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
      </ul>
      <?php
        // if user login
      	if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password']) ){

      	 echo "<ul class='nav navbar-nav navbar-right'>
               <li><a href='#'><span class='glyphicon glyphicon-user'></span> {$_SESSION['username']}  </a></li>
               <li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout </a></li>
        	  </ul>";
      	 }
      	 else{

      	 echo '<ul class="nav navbar-nav navbar-right">
               <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
               </ul>';

      	 }
       ?>
    </div>
  </div>
</nav>


<!-- Start Insert Code -->

<?php
/*
if(isset($_POST['submit']) && !empty($_POST['fp_no']) && !empty($_POST['serial_no']) && !empty($_POST['function_date']) && !empty($_POST['function_name']) && !empty($_POST['start_time']) && !empty($_POST['end_time']) && !empty($_POST['payment_mode']) && !empty($_POST['hall_type']) && !empty($_POST['status']) && !empty($_POST['sessions']) && !empty($_POST['pax']) && !empty($_POST['rate_per_pax']) && !empty($_POST['ammount'])  && !empty($_POST['guest_name']) && !empty($_POST['guest_phone_no'])  && !empty($_POST['guest_email'])  && !empty($_POST['guest_city'])   && !empty($_POST['guest_company_name'])   && !empty($_POST['guest_gst_no'])  && !empty($_POST['guest_address']) 
  && isset($_POST['decoration_charge']) && isset($_POST['tv_dvd_charge'])  && isset($_POST['computer_system'])  && isset($_POST['food_charges']) && isset($_POST['beverage_charges']) && isset($_POST['service_charges'])  && isset($_POST['cgst_charges'])  && isset($_POST['sound_sytem_charge'])  && isset($_POST['lcd_projector'])  && isset($_POST['screen']) && isset($_POST['other_charges']) && isset($_POST['advance_ammount']) && isset($_POST['hall_charges']) && isset($_POST['sgst_charges']) && isset($_POST['grant_amount']) ){

echo $_POST['fp_no']; echo '<br>';

echo $_POST['serial_no']; echo '<br>';

echo $_POST['function_date']; echo '<br>';

echo $_POST['function_name']; echo '<br>';

echo $_POST['start_time']; echo '<br>';

echo $_POST['end_time']; echo '<br>';

echo $_POST['payment_mode']; echo '<br>';

echo $_POST['hall_type']; echo '<br>';

echo $_POST['status']; echo '<br>';

echo $_POST['sessions']; echo '<br>';

echo $_POST['pax']; echo '<br>';

echo $_POST['rate_per_pax']; echo '<br>';

echo $_POST['ammount']; echo '<br>';

echo " -------  Guest Details --------- <br><br><br>";

echo $_POST['guest_name']; echo '<br>';

echo $_POST['guest_phone_no']; echo '<br>';

echo $_POST['guest_email']; echo '<br>';

echo $_POST['guest_city']; echo '<br>';

echo $_POST['guest_company_name']; echo '<br>';

echo $_POST['guest_gst_no']; echo '<br>';

echo $_POST['guest_address']; echo '<br>';

echo " ------- EXtra Charges --------- <br><br><br>";

echo $_POST['decoration_charge']; echo '<br>';

echo $_POST['tv_dvd_charge']; echo '<br>';

echo $_POST['computer_system']; echo '<br>';

echo $_POST['food_charges']; echo '<br>';

echo $_POST['beverage_charges']; echo '<br>';

echo $_POST['service_charges']; echo '<br>';

echo $_POST['cgst_charges']; echo '<br>';

echo $_POST['sound_sytem_charge']; echo '<br>';

echo $_POST['lcd_projector']; echo '<br>';

echo $_POST['screen']; echo '<br>';

echo $_POST['other_charges']; echo '<br>';

echo $_POST['advance_ammount']; echo '<br>';

echo $_POST['hall_charges']; echo '<br>';

echo $_POST['sgst_charges']; echo '<br>';

echo $_POST['grant_amount']; echo '<br>';


*/


if( isset($_POST['submit']) && !empty($_POST['fp_no']) && !empty($_POST['serial_no']) && !empty($_POST['pax']) && !empty($_POST['rate_per_pax']) && !empty($_POST['ammount']) && isset($_POST['service_charges']) &&
isset($_POST['cgst_charges']) && isset($_POST['sgst_charges']) && isset($_POST['grant_amount']) ){


$fp_no = $_POST['fp_no'];
$serial_no = $_POST['serial_no'];
$function_date = $_POST['function_date'];
$function_name = $_POST['function_name'];
$start_time = $_POST['start_time'];
$end_time =  $_POST['end_time'];
$payment_mode = $_POST['payment_mode'];
$hall_type = $_POST['hall_type'];
$status = $_POST['status'];
$sessions = $_POST['sessions'];
$pax = $_POST['pax'];
$rate_per_pax = $_POST['rate_per_pax'];
$ammount = $_POST['ammount'];

$guest_name = $_POST['guest_name'];
$guest_phone_no = $_POST['guest_phone_no'];
$guest_email = $_POST['guest_email'];
$guest_city = $_POST['guest_city'];
$guest_company_name = $_POST['guest_company_name'];
$guest_gst_no = $_POST['guest_gst_no'];
$guest_address = $_POST['guest_address'];

$decoration_charge = $_POST['decoration_charge'];
$tv_dvd_charge = $_POST['tv_dvd_charge'];
$computer_system = $_POST['computer_system'];
$food_charges = $_POST['food_charges'];
$beverage_charges = $_POST['beverage_charges'];
$service_charges = $_POST['service_charges'];
$sound_sytem_charge = $_POST['sound_sytem_charge'];
$lcd_projector = $_POST['lcd_projector'];
$screen = $_POST['screen'];
$other_charges = $_POST['other_charges'];
$advance_ammount = $_POST['advance_ammount'];
$hall_charges = $_POST['hall_charges'];

$cgst_charges = $_POST['cgst_charges'];
$sgst_charges = $_POST['sgst_charges'];
$grant_amount = $_POST['grant_amount'];

/*
$sql = "INSERT INTO user(serial_no,function_date,function_name,start_time,end_time,payment_mode,hall_type,status,sessions,pax,rate_per_pax,ammount,guest_name,guest_phone_no,guest_email,guest_city,guest_company_name,guest_gst_no,guest_address,decoration_charge,tv_dvd_charge,computer_system,food_charges,beverage_charges,service_charges,cgst_charges,sound_sytem_charge,lcd_projector,screen,other_charges,advance_ammount,hall_charges,sgst_charges,grant_amount) VALUES (:serial_no,:function_date,:function_name,:start_time,:end_time,:payment_mode,:hall_type,:status,:sessions,:pax,:rate_per_pax,:ammount,:guest_name,:guest_phone_no,:guest_email,:guest_city,:guest_company_name,:guest_gst_no,:guest_address,:decoration_charge,:tv_dvd_charge,:computer_system,:food_charges,:beverage_charges,:service_charges,:cgst_charges,:sound_sytem_charge,:lcd_projector,:screen,:other_charges,:advance_ammount,:hall_charges,:sgst_charges,:grant_amount) Where fp_no = $fp_no ";  */


 $sql = "UPDATE user SET serial_no = '$serial_no',function_date = '$function_date',function_name = '$function_name',start_time = '$start_time' ,end_time = '$end_time' ,payment_mode = '$payment_mode' ,hall_type = '$hall_type' ,status = '$status' ,sessions = '$sessions' ,pax = '$pax' ,rate_per_pax = '$rate_per_pax' ,ammount = '$ammount' ,guest_name = '$guest_name' ,guest_phone_no = '$guest_phone_no' ,guest_email = '$guest_email' ,guest_city = '$guest_city' ,guest_company_name = '$guest_company_name' ,guest_gst_no = '$guest_gst_no' ,guest_address = '$guest_address',decoration_charge = '$decoration_charge',tv_dvd_charge = '$tv_dvd_charge' ,computer_system = '$computer_system' ,food_charges = '$food_charges' ,beverage_charges = '$beverage_charges' ,service_charges = '$service_charges' ,cgst_charges = '$cgst_charges' ,sound_sytem_charge = '$sound_sytem_charge' ,lcd_projector = '$lcd_projector',screen = '$screen',other_charges = '$other_charges', advance_ammount = '$advance_ammount', hall_charges = '$hall_charges', sgst_charges = '$sgst_charges', grant_amount = '$grant_amount' WHERE fp_no = $fp_no";



$stmt= $conn->prepare($sql);
/*
$stmt->bindParam(':fp_no',$fp_no);
$stmt->bindParam(':serial_no',$serial_no);
$stmt->bindParam(':function_date',$function_date);
$stmt->bindParam(':function_name',$function_name);
$stmt->bindParam(':start_time',$start_time);
$stmt->bindParam(':end_time',$end_time);
$stmt->bindParam(':payment_mode',$payment_mode);
$stmt->bindParam(':hall_type',$hall_type);
$stmt->bindParam(':status',$status);
$stmt->bindParam(':sessions',$sessions);
$stmt->bindParam(':pax',$pax);
$stmt->bindParam(':rate_per_pax',$rate_per_pax);
$stmt->bindParam(':ammount',$ammount);
$stmt->bindParam(':guest_name',$guest_name);
$stmt->bindParam(':guest_phone_no',$guest_phone_no);
$stmt->bindParam(':guest_email',$guest_email);
$stmt->bindParam(':guest_city',$guest_city);
$stmt->bindParam(':guest_company_name',$guest_company_name);
$stmt->bindParam(':guest_gst_no',$guest_gst_no);
$stmt->bindParam(':guest_address',$guest_address);
$stmt->bindParam(':decoration_charge',$decoration_charge);
$stmt->bindParam(':tv_dvd_charge',$tv_dvd_charge);
$stmt->bindParam(':computer_system',$computer_system);
$stmt->bindParam(':food_charges',$food_charges);
$stmt->bindParam(':beverage_charges',$beverage_charges);
$stmt->bindParam(':service_charges',$service_charges);
$stmt->bindParam(':cgst_charges',$cgst_charges);
$stmt->bindParam(':sound_sytem_charge',$sound_sytem_charge);
$stmt->bindParam(':lcd_projector',$lcd_projector);
$stmt->bindParam(':screen',$screen);
$stmt->bindParam(':other_charges',$other_charges);
$stmt->bindParam(':advance_ammount',$advance_ammount);
$stmt->bindParam(':hall_charges',$hall_charges);
$stmt->bindParam(':sgst_charges',$sgst_charges);
$stmt->bindParam(':grant_amount',$grant_amount);

*/



if($stmt->execute()){

$success = "Your Tax Invoice Details was Submited Successfully.";

}                             
else{

$error = "There was a Problem in Your uploading Tax Invoice Details, Please Try Again.";

}



}
else{

    if( isset($_POST['submit']) ){
      
     $error = "Please Fill All The Details Before Sumbit."; 
    
    }
}


?>

<!-- End Insert Code -->


<div class="col-md-12">
    <?php
     if( isset($success) && isset($_POST['submit']) ){
         echo "<div class='alert alert-success alert-dismissable'>";
         echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>";
         echo "<strong> $success </strong>";
         echo "</div>";
     } 
    elseif(isset($error) && isset($_POST['submit']) ){

         echo "<div class='alert alert-danger alert-dismissable'>"; 
         echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>×</a>"; 
         echo "<strong> $error </strong>"; 
         echo "</div>"; 
    } 
    ?> 
</div>




<form action="invoice_form.php" method="post" name="invoice_Form">

 <!-- FORM -->

<div class="container text-center" style="margin-top: 50px;">    
  <h3 class="alert alert-info">Invoice Form </h3>
  <br>
<hr>
<section class="container">
   <div class="container-page">
   	<div class="row">
    <div class="col-md-6">	

 <?php
  
  $stmt = $conn->prepare(" SELECT * FROM user Where email ='{$_SESSION['email']}' "); 
  $stmt->execute();
  for($i=0; $result = $stmt->fetch(); $i++){                                           
  ?>

	<div class="form-group col-lg-6">
		<label>FP No :</label>
		<input type="number" name="fp_no" class="form-control" id="fp_no" value="<?php echo $result['fp_no']; ?>" required="required" readonly>
	</div> <!-- disabled="disabled" -->
		
  <?php } ?>



	<div class="form-group col-lg-6">
		<label> Serial No:</label>
		<input type="number" name="serial_no" class="form-control" placeholder="Serial No" id="serial_no" value="<?php echo mt_rand(100000, 999999); ?>" required="required">
	</div>

				
	<div class="form-group col-lg-6">
		<label>Function Date</label>
		<!-- <input type="date" name="function_date" class="form-control" id="function_date" value=""> -->

		<div class="input-group input-append date" id="datePicker">
            <input type="text" class="form-control" placeholder="Select Function Date" name="function_date" required="required" />
            <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>

<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'dd-mm-yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'function_date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});
</script>

	</div>

				


<!--
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" name="function_name" type="button" required="required" data-toggle="dropdown">
    	Function Name
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Birthdate</a></li>
      <li><a class="dropdown-item" href="#">Anniversary</a></li>
      <li><a class="dropdown-item" href="#">Conference</a></li>
      <li><a class="dropdown-item" href="#">Conference &amp; Dinner</a></li>
      <li><a class="dropdown-item" href="#">Conference &amp; Lunch</a></li>
      <li><a class="dropdown-item" href="#">Party</a></li>
      <li><a class="dropdown-item" href="#">Weeding</a></li>
      <li><a class="dropdown-item" href="#">Other</a></li>
    </ul>
    </div>  -->
<div class="form-group col-lg-6">
  <label>Function Name</label>
      <div class="dropdown">
          
           <select class="form-control" id="function_name" required="required" name="function_name">
            <ul class="dropdown-menu">
              <option value="Birthdate">Birthdate</option>
              <option value="Anniversary">Anniversary</option>
              <option value="Conference">Conference</option>
              <option value="Conference &amp; Dinner">Conference &amp; Dinner</option>
              <option value="Conference &amp; Lunch">Conference &amp; Lunch</option>
              <option value="Party">Party</option>
              <option value="Weeding">Weeding</option>
              <option value="Other">Other</option>
            </ul>
          </select>
     
     </div>
</div>






	<div class="form-group col-lg-6">
		<label>Function Start Time :</label>
	<!--	<input type="time" name="start_time" class="form-control" id="start_time" value=""> -->

	    <div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker1" type="text" name="start_time" placeholder="Function Start Time" class="form-control input-small" required="required">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
 
        <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>

	</div>
				
	<div class="form-group col-lg-6">
		<label> Function End Time:</label>
		<!-- <input type="time" name="end_time" class="form-control" id="end_time" value=""> -->

		<div class="input-group bootstrap-timepicker timepicker">
            <input id="timepicker2" type="text" name="end_time" placeholder="Function End Time" class="form-control input-small" required="required">
            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
        </div>
 
        <script type="text/javascript">
            $('#timepicker2').timepicker();
        </script>
	</div>


<div class="form-group col-lg-6">
	 <label>Payment Mode</label>
     <div class="dropdown">

    <select class="form-control" id="payment_mode" required="required" name="payment_mode">
            <ul class="dropdown-menu">
              <option value="Cash">Cash</option>
              <option value="Bitcoin">Bitcoin</option>
              <option value="Credit Card">Credit Card</option>
              <option value="NEFT">NEFT</option>
              <option value="RTGS">RTGS</option>
            </ul>
    </select>
  </div>
</div>	



	<div class="form-group col-lg-6">
	 <label>Hall Type</label>
   <div class="dropdown">
    <select class="form-control" id="hall_type" required="required" name="hall_type">
            <ul class="dropdown-menu">
              <option value="Saffire">Saffire</option>
              <option value="Vilvey">Vilvey</option>
              <option value="Board Room">Board Room</option>
              <option value="Other">Other</option>
            </ul>
    </select>

    </div>
	</div>	


	<div class="form-group col-lg-6">
	  <label>Status </label>	

	<label class="radio-inline">
      <input type="radio" checked="checked" value="Confirm" name="status"> Confirm
    </label>
    
    <label class="radio-inline">
      <input type="radio" value="Waitlisted" name="status"> Waitlisted
    </label>

	</div>

	<div class="form-group col-lg-6">
	 <label>Session</label>
    <div class="dropdown">
  <select class="form-control" id="sessions" required="required" name="sessions">
            <ul class="dropdown-menu">
              <option value="Morning">Morning</option>
              <option value="Noon">Noon</option>
              <option value="Evening">Evening</option>
              <option value="Night">Night</option>
            </ul>
  </select>


    </div>
	</div>	


	<hr>

	<div class="form-group col-lg-6">
		<label>Pax:</label>
		<input type="number" oninput="calculate(); Extra_Charges(); Service_Charges(); gst_charges(); charges_apply();" placeholder="Pax Ammount" name="pax" step="any" class="form-control" id="pax" value="" required="required">
	</div>
				
	<div class="form-group col-lg-6">
		<label>Rate Per Pax :</label>
		<input type="number" step="any" oninput="calculate(); Extra_Charges(); Service_Charges(); gst_charges(); charges_apply();" name="rate_per_pax" placeholder="Rate Per Pax" class="form-control" id="rate_per_pax" value="" required="required">
	</div>	

	<div class="form-group col-lg-6">
		<label> Amount :</label>
		<input type="number" step="any" placeholder="Total Ammount" name="ammount" class="form-control" id="ammount" value="" required="required" readonly>
	</div>
	<script type="text/javascript">

	function calculate() {
		var pax = document.getElementById('pax').value;	
		var rate_per_pax = document.getElementById('rate_per_pax').value;
		var tot_ammount = document.getElementById('ammount');	
		var myResult = pax * rate_per_pax;
		ammount.value = myResult;
		total_ammount.value = myResult;
      
		
	}

	</script>


		
   </div>


   	<div class="col-md-6">
          <h2 class="alert alert-info">Guest Details </h2>
	 	<!-- <h3 class="dark-grey"> Guest Name </h3> -->

		<div class="form-group col-lg-6">
		   <label>Guest Name :</label>
		   <input type="text" name="guest_name" class="form-control" placeholder="Guest Name" id="guest_name" value="" required="required">
	    </div>
				
	    <div class="form-group col-lg-6">
		  <label> Phone No:</label>
		  <input type="text" name="guest_phone_no" class="form-control" placeholder="Guest Phone No" id="phone_no" value="" required="required">
	    </div>

	    <div class="form-group col-lg-6">
		  <label> Email ID :</label>
		  <input type="email" name="guest_email" class="form-control" placeholder="Guest Email ID" id="guest_email" value="" required="required">
	    </div>

	    <div class="form-group col-lg-6">
		  <label> City :</label>
		  <input type="text" name="guest_city" class="form-control" placeholder="City Name" id="guest_city" value="" required="required">
	    </div>

	    <div class="form-group col-lg-6">
		  <label> Company Name :</label>
		  <input type="text" name="guest_company_name" class="form-control" placeholder="Comapny Name" id="guest_company_name" value="" required="required">
	    </div>

	    <div class="form-group col-lg-6">
		  <label> GST No :</label>
		  <input type="text" name="guest_gst_no" class="form-control" placeholder="GST No" id="guest_gst_no" value="" required="required">
	    </div>

	    <div class="form-group col-lg-12">
		  <label> Address :</label>
		  <!-- <input type="text" name="guest_city" class="form-control" placeholder="City Name" id="guest_city" value=""> -->
		  <textarea class="form-control" name="guest_address" placeholder="Guest Address" rows="5" id="guest_address" required="required"></textarea>

	    </div>

	  
			<!-- <button type="submit" class="btn btn-primary">Register</button> -->
  

       </div>

  
     </div>

   </div>

</section>

</div>


<div class="container text-center">    
  <h3 class="alert alert-info"> Extra Charges </h3>
  <br>
<hr>
<div class="form-group col-lg-12">
<div class="checkbox">
  <label><input type="checkbox" checked name="service_charges_apply" onclick="charges_apply(); gst_charges(); Extra_Charges();" id="service_charges_apply" value=""> Check the Box To Apply Service Charges </label>
</div>
</div>

<script type="text/javascript">
  
function charges_apply() {

//var total_amount = document.getElementById('ammount').value;
//var total_service_amount = document.getElementById('service_charges').value;
//var service_charges_apply = document.getElementById('service_charges_apply');

 if (service_charges_apply.checked){

    Service_Charges();

    //alert('Checked');
 }
 else{

  var sc_grant_amount = document.getElementById('grant_amount').value;
  var sc_charge = document.getElementById('service_charges').value;

   //var remove_sc_charges = parseInt(document.getElementById('grant_amount').value) - parseInt(document.getElementById('service_charges').value);

     var filter_ammount = parseInt(sc_grant_amount) - parseInt(service_charges);

    //alert('UnChecked');
    sc_grant_amount.value = filter_ammount;
    service_charges.value = 0;
   
   }
}
</script>




<hr>
<section class="container">
    <div class="container-page">
   	<div class="row">


    <div class="col-md-6">	

	<div class="form-group col-lg-6">
		<label> Total Amount :</label>
		<input type="number" step="any" name="total_ammount" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="total_ammount" value="" disabled="disabled">
	</div>

	<div class="form-group col-lg-6">
		<label> Decoraton Charge :</label>
		<input type="number" step="any" name="decoration_charge"  oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="decoration_charge" value="" >
	</div>

	<div class="form-group col-lg-6">
		<label> TV / DVD Set :</label>
		<input type="number" step="any" name="tv_dvd_charge" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="tv_dvd_charge" value="">
	</div>


	<div class="form-group col-lg-6">
		<label> Computer System </label>
		<input type="number" step="any" name="computer_system" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="computer_system" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Food Charges </label>
		<input type="number" step="any" name="food_charges" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="food_charges" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Beverage Charges </label>
		<input type="number" step="any" name="beverage_charges" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="beverage_charges" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Service Charges </label>
		<input type="number" name="service_charges" oninput="Extra_Charges(); gst_charges(); charges_apply();" step="any" class="form-control" id="service_charges" value="" readonly>
	</div>
	

<!--  Start Count Service Charges  -->

	<script type="text/javascript">
	
	function Service_Charges() {

		var pax1 = document.getElementById('pax').value;	
		var rate_per_pax1 = document.getElementById('rate_per_pax').value;
		var tot_ammount1 = document.getElementById('ammount');	
		var myResult1 = pax1 * rate_per_pax1;
		var sc = 3;

		var mysc = myResult1 * sc/100;
		service_charges.value = mysc;
		
		
	}

	</script>



<!--  Start Count Service Charges  -->



	<div class="form-group col-lg-6">
		<label>  CGST ( 9% ) </label>
		<input type="number" step="any" name="cgst_charges" onprogress="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="cgst_charges" value="" readonly>
	</div>



</div>




   <div class="col-md-6">

	<div class="form-group col-lg-6">
		<label> Sound System Charge </label>
		<input type="number" step="any" name="sound_sytem_charge" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="sound_sytem_charge" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> LCD + Projector </label>
		<input type="number" step="any" name="lcd_projector"  oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="lcd_projector" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Screen </label>
		<input type="number" step="any" name="screen" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="screen" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Other Charges </label>
		<input type="number" step="any" name="other_charges" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="other_charges" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Advance Pay Ammount </label>
		<input type="number" step="any" name="advance_ammount" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="advance_ammount" value="">
	</div>

	<div class="form-group col-lg-6">
		<label> Hall Charges </label>
		<input type="number" step="any" name="hall_charges" oninput="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="hall_charges" value="">
	</div>

	<div class="form-group col-lg-6">
		<label>  SGST ( 9% ) </label>
		<input type="number" step="any" name="sgst_charges" onprogress="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="sgst_charges" value="" readonly>
	</div>

	<div class="form-group col-lg-6">
		<label>  Grant Amount </label>
		<input type="number" step="any" name="grant_amount" onprogress="Extra_Charges(); gst_charges(); charges_apply();" class="form-control" id="grant_amount" value="" readonly>
	</div>


  </div>
</div>
</div>
</section>
<br><br>

<button type="submit" name="submit" id="submit" class="btn btn-primary"> Submit </button>
<!-- END FORM -->


</div>
</form>




<br><br>


<!-- <label>  without_cgst_sgst : </label> -->
<input type="hidden" name="without_cgst_sgst" id="without_cgst_sgst" value="">


<!--  Start Count CGST and SGST   -->

<script type="text/javascript">

  function gst_charges(){

  var total_without_cgst_sgst = document.getElementById('without_cgst_sgst').value; 

  var s_charges = document.getElementById('service_charges').value; 

  var sgst_cgst = 9;

  var mycgst_cal = total_without_cgst_sgst * sgst_cgst/100;
  
     cgst_charges.value = mycgst_cal;



  var mysgst_cal = total_without_cgst_sgst * sgst_cgst/100;

     sgst_charges.value = mysgst_cal;


  //var grant_amount = document.getElementById('grant_amount');

  var grant_amount_total = parseInt(s_charges) + parseInt(mycgst_cal) + parseInt(mysgst_cal) + parseInt(total_without_cgst_sgst);
    grant_amount.value = grant_amount_total;

}

</script>

<!--  End Count CGST and SGST   -->





<!--  Start Count Extra Charges  -->


<script type="text/javascript">
	
  function Extra_Charges() {

     var mytotal_amount = document.getElementById('total_ammount').value;  
      if (mytotal_amount == "")
         mytotal_amount = 0;

     var myservice_charges = document.getElementById('service_charges').value;
     if (myservice_charges == "")
         myservice_charges = 0;

     var mydecoration_charge = document.getElementById('decoration_charge').value;
     if (mydecoration_charge == "")
         mydecoration_charge = 0;

     var mytv_dvd_charge = document.getElementById('tv_dvd_charge').value;
     if (mytv_dvd_charge == "")
         mytv_dvd_charge = 0;

     var mycomputer_system = document.getElementById('computer_system').value;
     if (mycomputer_system == "")
         mycomputer_system = 0;

     var myfood_charges = document.getElementById('food_charges').value;
     if (myfood_charges == "")
         myfood_charges = 0;

     var mybeverage_charges = document.getElementById('beverage_charges').value;
     if (mybeverage_charges == "")
         mybeverage_charges = 0;

     var mysound_sytem_charge = document.getElementById('sound_sytem_charge').value;
     if (mysound_sytem_charge == "")
         mysound_sytem_charge = 0;

     var mylcd_projector = document.getElementById('lcd_projector').value;
     if (mylcd_projector == "")
         mylcd_projector = 0;

     var myscreen = document.getElementById('screen').value;
     if (myscreen == "")
         myscreen = 0;

     var myother_charges = document.getElementById('other_charges').value;
     if (myother_charges == "")
         myother_charges = 0;

     var myhall_charges = document.getElementById('hall_charges').value;
     if (myhall_charges == "")
         myhall_charges = 0;

     var myadvance_ammount = document.getElementById('advance_ammount').value;
     if (myadvance_ammount == "")
         myadvance_ammount = 0;

     //var mysgst_charges = document.getElementById('sgst_charges').value;
     //var mycgst_charges = document.getElementById('cgst_charges').value;
    
    var tot_ammount1 = document.getElementById('without_cgst_sgst'); 


    var total_Without_Cgst_Sgst = parseInt(mytotal_amount)  /*+ parseInt(myservice_charges) */ + parseInt(mydecoration_charge) + parseInt(mytv_dvd_charge) + parseInt(mycomputer_system) + parseInt(myfood_charges) + parseInt(mybeverage_charges) + parseInt(mysound_sytem_charge) + parseInt(mylcd_projector) + parseInt(myscreen) + parseInt(myother_charges) + parseInt(myhall_charges) + parseInt(myadvance_ammount);


    //var mysc = myResult1 * sc/100;
    tot_ammount1.value = total_Without_Cgst_Sgst;
    
    
 }

</script>


<!--  End Count Extra Charges  -->

<br>
<footer class="container-fluid text-center">
  <p> &copy; 2014 - <?php echo date("Y");?> Mpiric Software </p>
</footer>

</body>
</html>

<?php

}

?>