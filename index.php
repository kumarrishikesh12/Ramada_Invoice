<?php session_start(); ?>

<!-- Connection File -->
<?php require 'database_conn.php'; ?>
<!-- Connection File -->


<?php 
                    
if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password']) ){

// echo $_SESSION['username'];
// echo $_SESSION['email'];
// echo $_SESSION['password'];

//header("Location: http://localhost/Demo/invoice_form.php");

header("Location: invoice_form.php");

}

?>


<html lang="en">
<head>
  <title> Login | Tax Invoice </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="margin-top:10%">

 <div class="container">
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
            
            <img class="img-responsive" style="margin-bottom: 20px;" src="logo.png" alt="Ramada logo" /> 

    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center">Login </h3>
			 	</div>

			 		  <?php
                        if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])){

                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $records=$conn->prepare("Select username,email,password from User where email ='".$email."' and password ='".$password."' ");
                        
                            $records->bindParam('".$email."',$email,PDO::PARAM_STR);
                            $records->bindParam('".$password."',$password,PDO::PARAM_STR);
                            $records->EXECUTE();
                            if($result = $records->fetch(PDO::FETCH_ASSOC)){

                                    foreach($result as $k=>$v)
                                    {

                                        if(!isset($_SESSION['username'])){
                                         $_SESSION['username']=$v;
                                         continue;
                                         }
                            
                                        if(!isset($_SESSION['email'])){
                                        $_SESSION['email']=$v;
                                        continue;
                                         }

                                        if(!isset($_SESSION['password'])){
                                        $_SESSION['password']=$v;
                                        continue;
                                         }

                                        
                                    }   
                                     
                                     //$success = ' You Are Successfully Login !! ';
                                     //header("Location: http://localhost/Demo/invoice_form.php");
                                     header("Location: invoice_form.php");
                            }  
                            else{
                                
                                echo "<div class='col-md-12' style='margin-top:20px'>
                              
                                    <span class='alert alert-warning'> Please Enter Valid Email and Password </span>
                                    </div>
                                    ";

                                }
                            }

                    ?>

			  	<div class="panel-body" style="margin-top: 40px">

			    	<form accept-charset="UTF-8" name="user_login" method="post" action="index.php" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="email" type="email" required="required">
			    		</div>

			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="text" required="required">
			    		</div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Login">
			    	</fieldset>
			      	</form>

			    </div>


			</div>
		</div>
	</div>
</div>  

</body>
</html>