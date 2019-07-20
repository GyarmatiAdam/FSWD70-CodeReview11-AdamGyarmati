<?php
 ob_start();
 session_start();
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
        header("Location: index.php");
      }
      
$city = isset($_POST['city']) ? $_POST['city'] : null;
$zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : null;
$addr = isset($_POST['addr']) ? $_POST['addr'] : null;
$fk_loc_id = isset($_POST['fk_loc_id']) ? $_POST['fk_loc_id'] : null;
$ev_name = isset($_POST['ev_name']) ? $_POST['ev_name'] : null;
$ev_type = isset($_POST['ev_type']) ? $_POST['ev_type'] : null;
$ev_descript = isset($_POST['ev_descript']) ? $_POST['ev_descript'] : null;
$ev_url = isset($_POST['ev_url']) ? $_POST['ev_url'] : null;
// $ = isset($_POST['']) ? $_POST[''] : null;
// $ = isset($_POST['']) ? $_POST[''] : null;
// $ = isset($_POST['']) ? $_POST[''] : null;
include_once "dbconnection.php";
$query= "INSERT INTO locations (city, zip_code, addr)
          VALUES(
          '$city',
          '$zip_code',
          '$addr');
          INSERT INTO events (fk_loc_id, ev_name, ev_type, ev_descript, ev_url)
          VALUES(
          $fk_loc_id,
          '$ev_name',
          '$ev_type',
          '$ev_descript',
          '$ev_url');";


if(mysqli_query($connect,$query)){
        echo "insert success";
}

ob_end_flush();
?>