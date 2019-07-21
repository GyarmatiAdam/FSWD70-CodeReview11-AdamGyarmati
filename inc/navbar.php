<?php
 ob_start();

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
  header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
  
<nav class="fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home<span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="restaurant.php">Restaurant</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="events.php">Events</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="api.php">APIs</a>
    </li>
    <!-- hidden button for amin only -->
    <?php
    if (isset($_SESSION['admin'])){
    ?>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="admin_loc.php">Insert Location</a>
      <a class="dropdown-item" href="admin_ev.php">Insert Place to GO</a>
      <a class="dropdown-item" href="admin_con.php">Insert Concert</a>
      <a class="dropdown-item" href="admin_res.php">Insert Restaurant</a>
      <a class="dropdown-item" href="admin_user.php">Add new admin</a>
    </div>
</div>
    <?php
    }
    ?>
  </ul>
</div>
<a  href="logout.php?logout">Sign Out</a>
</nav>
</html>
<?php
 ob_end_flush(); 
 ?> 