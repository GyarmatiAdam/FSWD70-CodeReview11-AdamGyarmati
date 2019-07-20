<?php 
 ob_start();
 session_start();
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
        header("Location: index.php");
      }

$fk_loc_id = isset($_POST['fk_loc_id']) ? $_POST['fk_loc_id'] : null;
$con_name = isset($_POST['con_name']) ? $_POST['con_name'] : null;
$con_datetime = isset($_POST['con_datetime']) ? $_POST['con_datetime'] : null;
$con_price = isset($_POST['price']) ? $_POST['price'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="cr11_adam_gyarmati_travelmatic";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query3 = "INSERT INTO concert (fk_loc_id, con_name, con_datetime, price)
VALUES(
$fk_loc_id,
'$con_name',
'$con_datetime',
'$con_price');";

if(mysqli_query($conn,$query3)){
        echo "insert success";
}

ob_end_flush();
?>