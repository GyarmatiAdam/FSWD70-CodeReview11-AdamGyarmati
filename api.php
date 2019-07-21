<?php
ob_start();
session_start();
require_once 'inc/RESTful.php';

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
  header("Location: index.php");
}
//Sunset and sunrise times
$url = 'https://api.sunrise-sunset.org/json?lat=48.2437725&lng=16.2950406&date=today';
$response = curl_get($url); 
$json = json_decode($response);

//The open movie database
$url = 'http://www.omdbapi.com/?i=tt3896198&apikey=51fef794';
$response = curl_get($url); 
$jsonomd = json_decode($response);

//NASA
$url = 'https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY';
$response = curl_get($url); 
$jsonnasa = json_decode($response);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>APIs:</title>
  </head>
  <body style="margin-top: 4rem; margin-bottom: 4rem">
    <?php 
     require_once 'inc/navbar.php';
    ?>
    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <h3>Sunset and sunrise times API</h3>
                <p>Sunrise and sunset above my flat today: </p><br>
                    
                <?php echo $json->results->sunrise;?><br>
                <?php echo $json->results->sunset;?><br><br>
                <p>Today is <?php echo $json->results->day_length;?> long.</p><hr><br>

                <h3>The Open Movie Database</h3>
                <p>Title: <?php echo $jsonomd->Title ?></p>
               
                <p>Length: <?php echo $jsonomd->Runtime ?></p>
               
                <p>Type: <?php echo $jsonomd->Genre ?></p>
                
                <p>Director: <?php echo $jsonomd->Director ?></p>
               
                <p>Awards: <?php echo $jsonomd->Awards ?></p>
               
                <p>Ratings: <?php foreach($jsonomd->Ratings as $value){
                      echo $value->Source. ": ";
                      echo $value->Value. "<br>";
                }?></p>
                
                  
                  <p>IMDB Rating: <?php echo $jsonomd->imdbRating ?></p>
                
                <p>Total Gross: <?php echo $jsonomd->BoxOffice ?></p>
                
            </div>

            <div class="col-sm-8">
            <h3>NASA API:</h3>
                <?php 
                echo $jsonnasa->date."<br><br>";
                echo $jsonnasa->explanation."<br><br>";
                echo '<img src=" '.$jsonnasa->hdurl.'" style="width:500px"><br>';
                echo $jsonnasa->media_type."<br>";
                echo $jsonnasa->service_version."<br>";
                echo $jsonnasa->title."<br>";
                echo '<img src=" '.$jsonnasa->url.'" style="width:500px"><br>';
                  ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php ob_end_flush(); ?>