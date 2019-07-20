<?php
 session_start();

 if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Add new admin</title>
  </head>
  <body>
  <?php
  include_once "inc/navbar.php";
  ?>
  <div style="margin-top:4rem" class="container">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8">

        <form id="insertForm5">
    <!-- admin attributes -->
            <div class="form-group">
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="pass" id="pass" placeholder="Password">
            </div>
            <div><button type="submit" value="add" id="add" name="add" class="btn btn-primary">Add new admin</button>
        </form>
    </div>
    <div class="col-sm-2">

    </div>
    </div>
</div>

<script>
var request;
$("#insertForm5").submit(function(event){
   event.preventDefault();
   if (request) {
       request.abort();
   }
   var $form = $(this);
   var $inputs = $form.find("input, select, button, input");
   var serializedData = $form.serialize();
   $inputs.prop("disabled", true);

   request = $.ajax({
       url: "action_user.php",
       type: "post",
       data: serializedData
   });

   request.done(function (response, textStatus, jqXHR){
       console.log("Hooray, it worked!");
   });
   request.fail(function (jqXHR, textStatus, errorThrown){
       console.error(
           "The following error occurred: "+
           textStatus, errorThrown
       );
   });

   request.always(function () {
       $inputs.prop("disabled", false);
   });
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>