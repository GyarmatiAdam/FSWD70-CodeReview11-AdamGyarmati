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

    <title>Restaurants</title>
  </head>
  <body>
  <?php
  include_once "inc/navbar.php";
  ?>
  <div style="margin-top: 1rem; margin-bottom: 3rem" class="container">
  <div class="row">
    <div class="col-sm-1">

    </div>
    <div class="col-sm-10">
  
    <div>
    <!-- restaurants displayed here -->
    

    <?php
    //retrive datas from db
      $sql = "SELECT * FROM locations 
      RIGHT JOIN restaurant
      ON locations.loc_id = restaurant.fk_loc_id;" ;

      $result = $connect->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    //restaurants
      echo '<table class="table">
      <tr>
      <th colspan="2" scope="col">City</th>
      <th scope="col">Restaurant Name</th>
      </tr>
      <tr>
      <td colspan="2" scope="row">'.$row['city'] .'</td>
      <td>'.$row['rest_name'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Type</th>
      </tr>
      <tr>
      <td scope="row">'.$row['zip_code'] .', '.$row['addr'] .'</td>
      <td>'.$row['phone'] .'</td>
      <td>'.$row['rest_type'] .'</td>
      </tr><br>

      <tr>
      <th colspan="7" scope="col">Description</th>
      </tr>
      <tr>
      <td colspan="7">'.$row['rest_descript'] .'</td>
      </tr><br>

      <tr>
      <th colspan="7" scope="col">Website</th>
      </tr>
      <tr>
      <td colspan="7"><a target="_blank" href="">'.$row['rest_url'] .'</a></td>
      </tr>';
      
    }
  } else  {
      echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
  }
?>
      </table><br>
        </div>
        </div>
        <div class="col-sm-1">

        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="inc/script-ajax.js" type="text/javascript"></script>

  </body>
</html>
<?php
 ob_end_flush(); 
 ?> 