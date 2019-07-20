<?php 
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
        header("Location: index.php");
      }
      
$fk_loc_id = isset($_POST['fk_loc_id']) ? $_POST['fk_loc_id'] : null;
$rest_name = isset($_POST['rest_name']) ? $_POST['rest_name'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$rest_type = isset($_POST['rest_type']) ? $_POST['rest_type'] : null;
$rest_descript = isset($_POST['rest_descript']) ? $_POST['rest_descript'] : null;
$rest_url = isset($_POST['rest_url']) ? $_POST['rest_url'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="cr11_adam_gyarmati_travelmatic";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query4 = "INSERT INTO restaurant (fk_loc_id, rest_name, phone, rest_type, rest_descript, rest_url)
VALUES(
$fk_loc_id,
'$rest_name',
'$phone',
'$rest_type',
'$rest_descript',
'$rest_url');";

if(mysqli_query($conn,$query4)){
        echo "insert success";
}
?>