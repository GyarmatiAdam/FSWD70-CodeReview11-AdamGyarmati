<?php
 session_start();
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

    <title>Add Event</title>
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
    <!-- restaurant attributes -->
    <form id="insertForm4">
        <div class="form-group">
            <input type="number" class="form-control" name="fk_loc_id" id="fk_loc_id" placeholder="Lacation ID">
        </div>
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
        <div><button type="submit" value="add4" id="add4" name="add4" class="btn btn-primary">Insert Restaurant</button>
        </form>
        </div>
        <div class="col-sm-2">

        </div>
        </div>
    </div>

<script>
var request;
$("#insertForm4").submit(function(event){
   event.preventDefault();
   if (request) {
       request.abort();
   }
   var $form = $(this);
   var $inputs = $form.find("input, select, button, textarea");
   var serializedData = $form.serialize();
   $inputs.prop("disabled", true);

   request = $.ajax({
       url: "action_res.php",
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