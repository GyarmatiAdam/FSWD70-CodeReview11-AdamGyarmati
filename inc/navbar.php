<?php
 ob_start();

if(!isset($_SESSION["admin"]) && !isset($_SESSION["user"])){
  header("Location: index.php");
}
?>
<!doctype html>
<html lang="en">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="home.php">Home<span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Features</a>
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