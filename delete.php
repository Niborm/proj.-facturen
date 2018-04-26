<?php
session_start();
if($_SESSION['login'] == true && $_SESSION['admin'] != false){
  echo " ";
}else{
  header('Location: index.php');
} 
$con = mysqli_connect("localhost", "root", "usbw");
       mysqli_select_db($con, "facturen");

if(isset($_GET['id'])) {
  $query = "DELETE FROM gebruikers WHERE id = '" . $_GET['id'] . "'";

  if(mysqli_query($con, $query)){
    echo "Lid is verwijderd. <br/>";
  } else {
    echo "Het er is een fout opgetreden tijdens het verwijderen van het item!<br/>";
    echo mysqli_error();
  }

  echo "<br/>";
}

?>
<br>
<a href="index.php">Terug naar het overzicht</a>
