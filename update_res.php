<?php 
 ob_start();
 session_start();

require_once 'dbconnection.php';

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
  header("Location: index.php");
}
if ($_GET['rest_id']) {
    $id = $_GET['rest_id'];
     
        $sql = "SELECT * FROM restaurant WHERE rest_id = {$id}" ;
        $result = $connect->query($sql);
     
        $data = $result->fetch_assoc();
     
        $connect->close();
     
     ?>
     
     <!DOCTYPE html>
     <html>
     <head>
        <title>Update</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     </head>
     <body>
    <?php 
        require_once 'inc/navbar.php';
    ?> 
<div style="margin-top: 3rem; margin-bottom: 3rem" class="container">

        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">


        <form action="inc/action_update.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="rest_name" value="<?php echo $data['rest_name'] ?>"/>
                </div>     
                <div class="form-group">
                    <input type= "text" class="form-control" name="phone" value ="<?php echo $data['phone'] ?>"/>
                </div>
                <div class="form-group">
                    <input type= "text" class="form-control" name="rest_type" value ="<?php echo $data['rest_type'] ?>"/>
                </div>
                <div class="form-group">
                <textarea name="rest_descript" class="form-control" cols="30" rows="10">
                    <?php echo $data['rest_descript'] ?> 
                </textarea>
                </div> 
                <div class="form-group">
                    <input type="text" class="form-control" name="rest_url" value="<?php echo $data['rest_url'] ?>"/>
                </div>
                <div class="form-group">
                    <input type="hidden" name="rest_id" value="<?php echo $data['rest_id']?>"/>
                    <button type="submit">Save Changes</button>
                    <a href="home.php"><button  type="button">Back</button></a>
                </div>
        </form>
        </div>
            <div class="col-sm-2">

            </div>
        </div>
        </div>
     
     </body>
     </html>
     
     <?php 
     }
     ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>