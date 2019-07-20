<?php 
  ob_start();
 session_start();

require_once '../dbconnection.php';

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <title>The Big </title>

</head>
<body style="margin-top: 5rem">
<?php 
    require_once 'navbar.php';
?> 

<div style="margin-top: 3rem; margin-bottom: 3rem" class="container">
  <div class="row">
    <div class="col-sm-2">
        <?php
            echo "<a href='../home.php'><button class='btn btn-dark' type='button'>Back</button></a>";
        ?>
    </div>
    <div class="col-sm-8">
<?php
if ($_POST) {
   $id = $_POST['rest_id'];

   $sql = "DELETE FROM restaurant WHERE rest_id = {$id};";
    if($connect->query($sql) === TRUE) {
       echo "<p class='alert alert-success' role='alert'>The media was successfully deleted!!</p>";

   } else {
       echo "Error deletingrecord : " . $connect->error;
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
<?php ob_end_flush(); ?>
