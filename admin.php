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

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    <div class="col-sm-1">
    
    </div>
    <div class="col-sm-10">
<form id="insertForm" method="POST">
      <div class="form-group">
        <select class="form-control" name="eventType" id="eventType">
          <option value="">Select Type</option>
          <option value="1">Place to GO</option>
          <option value="2">Concert</option>
          <option value="3">Restaurant</option>

        </select>
      </div>
    <!-- location attributes -->
      <div class="form-group">
        <input type="text" class="form-control" name="city" id="city" placeholder="City">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="ZIP code">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="addr" id="addr" placeholder="Addresse">
      </div>
    <!-- event attributes -->
      <div class="form-group">
        <input type="text" class="form-control" name="ev_name" id="ev_name" placeholder="Event Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="ev_type" id="ev_type" placeholder="Event Type">
      </div>
      <div class="form-group">
        <textarea type="text" cols="30" rows="10" class="form-control" name="ev_descript" id="ev_descript" placeholder="Event Description"></textarea>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="ev_url" id="ev_url" placeholder="Event Website">
      </div>
    <!-- concert attributes -->
      <div class="form-group">
        <input type="text" class="form-control" name="con_name" id="con_name" placeholder="Concert Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="con_datetime" id="con_datetime" placeholder="Date and Time YYYY-MM-DD 23:59:59">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="price" id="price" placeholder="Price">
      </div>
    <!-- restaurant attributes -->
      <div class="form-group">
        <input type="text" class="form-control" name="rest_name" id="rest_name" placeholder="Restaurant Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="rest_type" id="rest_type" placeholder="Restaurant Type">
      </div>
      <div class="form-group">
        <textarea type="text" cols="30" rows="10" class="form-control" name="rest_descript" id="rest_descript" placeholder="Restaurant Description"></textarea>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="rest_url" id="rest_url" placeholder="Restaurant Website">
      </div>
<?php  
 // if (isset($_SESSION['admin'])){}
?>
    <div><button type="submit" value="add" id="add" name="add" class="btn btn-primary">Insert</button>
    </form><br>

    <?php
      $msg = "";

      if (isset($_POST['upload'])) {

        $image = $_FILES['image']['name'];

        $target = "images/".basename($image);

        $sql = "INSERT INTO locations (images) VALUES ('$image')";
        mysqli_query($connect, $sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
        }
      }
      $sql2 = "SELECT images FROM locations";
      $result = mysqli_query($connect, $sql2);
    ?>
          <div id="content">
        <?php
          // while ($row = mysqli_fetch_array($result)) {
          //   echo "<div id='img_div'>";
          //   	echo "<img src='images/".$row['images']."' >";
          //   echo "</div>";
          // }
        ?>
          <form method="POST" action="admin.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
              <input type="file" name="image">
            </div>
            <div>
              <button class="btn btn-secondary" type="submit" name="upload">Upload</button>
            </div>
          </form>
        </div>

        </div>
        <div class="col-sm-1">

        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="inc/script-ajax.js" type="text/javascript"></script>
    <script src="inc/input.js" type="text/javascript"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
 ob_end_flush(); 
 ?> 