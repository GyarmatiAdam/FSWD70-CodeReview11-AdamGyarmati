<?php 
 ob_start();
 session_start();
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
        header("Location: index.php");
      }
      
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : null;
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$pass = isset($_POST['pass']) ? $_POST['pass'] : null;
$privilege = isset($_POST['privilege']) ? $_POST['privilege'] : null;


$host= "localhost";
$username="root";
$password="";
$dbname="cr11_adam_gyarmati_travelmatic";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

// pass hashing for security
$passhash = hash('sha256', $pass);


$query5 = "INSERT INTO users (firstName, lastName, email, pass, privilege)
VALUES(
'$firstName',
'$lastName',
'$email',
'$passhash',
1);";

if(mysqli_query($conn,$query5)){
        echo "insert success";
}

ob_end_flush();
?>