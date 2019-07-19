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
  <div style="margin-top: 1rem; margin-bottom: 3rem" class="container">
  <div class="row">
    <div class="col-sm-1">

    </div>
    <div class="col-sm-10">
  
    <div>
    <!-- restaurants, events and concerts are displayed here -->
    

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
      <th scope="col">City</th>
      <th scope="col">Restaurant Name</th>
      </tr>
      <tr>
      <td scope="row">'.$row['city'] .'</td>
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
      <th scope="col">Description</th>
      </tr>
      <tr>
      <td colspan="7">'.$row['rest_descript'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Website</th>
      </tr>
      <tr>
      <td colspan="7"><a target="_blank" href="">'.$row['rest_url'] .'</a></td>
      </tr>';

      if (isset($_SESSION['admin'])){
        echo "<button type='submit' value=delete id='delete' name='delete' class='btn btn-primary'>Delete</button>";
        echo '<button type="submit" value="update" id="update" name="update" class="btn btn-primary">Update</button></div>';
      }
      
    }
  } else  {
      echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
  }

      //retrive datas from db
      $sql = "SELECT * FROM locations 
      RIGHT JOIN concert
      ON locations.loc_id = concert.fk_loc_id;" ;

      $result = $connect->query($sql);

          if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
      //cocerts
      echo '<table class="table">
      <tr>
      <th scope="col">City</th>
      <th scope="col">Concert Name</th>
      </tr>
      <tr>
      <td scope="row">'.$row['city'] .'</td>
      <td>'.$row['con_name'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Date and Time</th>
      </tr>
      <tr>
      <td colspan="7">'.$row['con_datetime'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Price</th>
      </tr>
      <tr>
      <td colspan="7">'.$row['price'] .'</td>
      </tr>';

      if (isset($_SESSION['admin'])){
        echo "<button type='submit' value=delete id='delete' name='delete' class='btn btn-primary'>Delete</button>";
        echo '<button type="submit" value="update" id="update" name="update" class="btn btn-primary">Update</button></div>';
      }
      
    }
  } else  {
      echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
  }

      //retrive datas from db
      $sql = "SELECT * FROM locations 
      RIGHT JOIN events
      ON locations.loc_id = events.fk_loc_id;" ;

      $result = $connect->query($sql);

          if($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
      //Place to GO
      echo '<table class="table">
      <tr>
      <th scope="col">City</th>
      <th scope="col">Place to GO</th>
      </tr>
      <tr>
      <td scope="row">'.$row['city'] .'</td>
      <td>'.$row['ev_name'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Address</th>
      <th scope="col">Type</th>
      </tr>
      <tr>
      <td scope="row">'.$row['zip_code'] .', '.$row['addr'] .'</td>
      <td>'.$row['ev_type'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Description</th>
      </tr>
      <tr>
      <td colspan="7">'.$row['ev_descript'] .'</td>
      </tr><br>

      <tr>
      <th scope="col">Website</th>
      </tr>
      <tr>
      <td colspan="7"><a target="_blank" href="">'.$row['ev_url'] .'</a></td>
      </tr>';

      if (isset($_SESSION['admin'])){
        echo "<button type='submit' value=delete id='delete' name='delete' class='btn btn-primary'>Delete</button>";
        echo '<button type="submit" value="update" id="update" name="update" class="btn btn-primary">Update</button></div>';
      }

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