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

     </head>
     <body>
        <form action="inc/action_update.php" method="post">
            <table>
                <tr>
                    <td><input type="text"  name="rest_name" placeholder ="" value="<?php echo $data['rest_name'] ?>"/></td>
                </tr>     
                <tr>
                    <td><input type= "text" name="phone" placeholder="" value ="<?php echo $data['phone'] ?>"/></td>
                </tr>
                <tr>
                    <td><input type= "text" name="rest_type" placeholder="" value ="<?php echo $data['rest_type'] ?>"/></td>
                </tr>
                <tr>
                    <td><input type= "text" name="rest_descript" placeholder="" value ="<?php echo $data['rest_descript'] ?>"/></td>
                </tr>
                <tr>
                    <td><input type="text" name="rest_url" placeholder="" value="<?php echo $data['rest_url'] ?>"/></td>
                </tr> 
                <tr>
                    <input type="hidden" name="rest_id" value="<?php echo $data['rest_id']?>"/>
                    <td><button type="submit">Save Changes</button></td>
                    <td><a href="home.php"><button  type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    
     
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