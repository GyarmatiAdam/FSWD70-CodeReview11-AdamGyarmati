<?php 
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
        header("Location: index.php");
      }
      
$fk_loc_id = isset($_POST['fk_loc_id']) ? $_POST['fk_loc_id'] : null;
$ev_name = isset($_POST['ev_name']) ? $_POST['ev_name'] : null;
$ev_type = isset($_POST['ev_type']) ? $_POST['ev_type'] : null;
$ev_descript = isset($_POST['ev_descript']) ? $_POST['ev_descript'] : null;
$ev_url = isset($_POST['ev_url']) ? $_POST['ev_url'] : null;

$host= "localhost";
$username="root";
$password="";
$dbname="cr11_adam_gyarmati_travelmatic";

$conn = mysqli_connect($host,$username,$password,$dbname);

if($conn){
        echo "success";
}

$query2 = "INSERT INTO events (fk_loc_id, ev_name, ev_type, ev_descript, ev_url)
VALUES(
$fk_loc_id,
'$ev_name',
'$ev_type',
'$ev_descript',
'$ev_url');";

if(mysqli_query($conn,$query2)){
        echo "insert success";
}
?>