<?php
 ob_start();
 session_start();
require_once 'dbconnection.php';

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
  header("Location: index.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Home</title>
  </head>
  <body>
  <?php
  include_once "inc/navbar.php";
  ?>
  <div style="margin-top: 5rem" class="container">
  <div class="row">
    <div class="col-sm-2">
      <h1>Welcome</h1>
    </div>
    <div class="col-sm-8">
    <?php
  if (isset($_SESSION['admin'])){
  echo'<form id="insertForm">
      <div class="form-group">
        <input type="text" class="form-control" name="" id="" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="number" class="form-control" name="" id="" placeholder="Price">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="" id="" placeholder="Category">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="" id="" placeholder="Details">
      </div>';

// if session is admin those buttons are visible 

    echo '<div><button type="submit" value="add" id="add" name="add" class="btn btn-primary">Insert</button>';
    echo "<button type='submit' value=delete id='delete' name='delete' class='btn btn-primary'>Delete</button>";
    echo '<button type="submit" value="update" id="update" name="update" class="btn btn-primary">Update</button></div>';
  }
  ?>
    </form><br>
        </div>
        <div class="col-sm-2">

        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="script-ajax.js" type="text/javascript"></script>

  </body>
</html>
<?php
 ob_end_flush(); 
 ?> 