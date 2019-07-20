<?php 
 ob_start();
 session_start();

require_once 'dbconnection.php';
if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
  header("Location: index.php");
}
if ($_GET['loc_id']) {
    $id = $_GET['loc_id'];
     
        $sql = "SELECT * FROM restaurant WHERE id = {$id}" ;
        $result = $connect->query($sql);
     
        $data = $result->fetch_assoc();
     
        $connect->close();
     
     ?>
     
     <!DOCTYPE html>
     <html>
     <head>
        <title >Edit User</title>
     
        <style type= "text/css">
            fieldset {
                margin : auto;
                margin-top: 100px;
                 width: 50%;
            }
     
            table  tr th {
                padding-top: 20px;
            }
        </style>
     
     </head>
     <body>
     
     <fieldset>
        <legend>Update user</legend>
     
        <form action="actions/a_update.php"  method="post">
            <table  cellspacing="0" cellpadding= "0">
                <tr>
                    <th>First Name</th>
                    <td><input type="text"  name="first_name" placeholder ="First Name" value="<?php echo $data['first_name'] ?>"  /></td>
                </tr >     
                <tr>
                    <th>Last Name</th>
                    <td><input type= "text" name="last_name"  placeholder="Last Name" value ="<?php echo $data['last_name'] ?>" /></td >
                </tr>
                <tr>
                    <th >Date of birth</th>
                    < td><input type ="text" name= "date_of_birth" placeholder= "Date of birth" value= "<?php echo $data['date_of_birth'] ?>" /></td>
                </tr> 
                <tr>
                    <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
                    <td><button  type= "submit">Save Changes</button ></td>
                    <td><a  href= "index.php">< button  type="button" >Back</button ></a ></td >
                </tr>
            </table>
        </form >
     
     </fieldset >
     
     </body >
     </html >
     
     <?php 
     }
     ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body >
</html >