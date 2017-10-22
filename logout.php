<?php

session_start();

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['password']) ){

unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);


session_unset();
session_destroy();

//header("location: http://localhost/Demo/index.php/");

header("location: index.php");

}


if(!isset($_SESSION['username']) && !isset($_SESSION['email']) && !isset($_SESSION['password']) ){

unset($_SESSION["username"]);
unset($_SESSION["email"]);
unset($_SESSION["password"]);

session_unset();
session_destroy();

//header("location: http://localhost/Demo/index.php/");

header("location: index.php");
}


?>