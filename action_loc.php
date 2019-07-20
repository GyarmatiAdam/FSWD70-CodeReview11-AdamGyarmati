<?php 
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
        header("Location: index.php");
      }
      
$city = isset($_POST['city']) ? $_POST['city'] : null;
$zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : null;
$addr = isset($_POST['addr']) ? $_POST['addr'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="cr11_adam_gyarmati_travelmatic";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query= "INSERT INTO locations (city, zip_code, addr)
          VALUES(
          '$city',
          '$zip_code',
          '$addr');";


if(mysqli_query($conn,$query)){
        echo "insert success";
}
?>