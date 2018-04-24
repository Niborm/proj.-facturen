<?php
session_start();

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
<a href="admin.php">Terug naar de admin pagina</a>
