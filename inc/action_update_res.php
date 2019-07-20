<?php 

ob_start();
session_start();
require_once '../dbconnection.php';

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
 header("Location: index.php");
}

if ($_POST) {
    $rest_name = $_POST['rest_name'];
    $phone = $_POST['phone'];
    $rest_type = $_POST[ 'rest_type'];
    $rest_descript = $_POST['rest_descript'];
    $rest_url = $_POST[ 'rest_url'];
    $id = $_POST['rest_id'];
?> 
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div style="margin-top: 3rem; margin-bottom: 3rem" class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">

<?php
    $sql = "UPDATE restaurant SET rest_name = '$rest_name', phone = '$phone', rest_type = '$rest_type', rest_descript = '$rest_descript', rest_url = '$rest_url' WHERE rest_id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo  "<p>Successfully Updated</p>";
        echo "<a href='../update_res.php?rest_id=" .$id."'><button type='button'>Back</button></a>";
        echo  "<a href='../home.php'><button type='button'>Home</button></a>";
    } else {
         echo "Error while updating record : ". $connect->error;
    }
 
    $connect->close();
 
 }   
 ?>

            </div>
            <div class="col-sm-2">

            </div>
        </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>