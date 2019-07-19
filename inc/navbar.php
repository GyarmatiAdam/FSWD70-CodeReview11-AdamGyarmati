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
    <!-- hidden button for amin only -->
    <?php
    if (isset($_SESSION['admin'])){
    ?>
    <li class="nav-item">
      <a class="nav-link" href="admin.php">Admin</a>
    </li>
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