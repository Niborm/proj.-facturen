<?php
  session_start();

  $con = mysqli_connect("localhost", "root", "usbw");
  mysqli_select_db($con, "facturen");

if(isset($_POST['inloggen'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = "SELECT * FROM gebruikers WHERE username = '" . $username . "' AND password = '" . $password . "'";
  $result = mysqli_query($con, $query);

  if(mysqli_num_rows($result) == 1) {
    header('Location: admin.php');
    $_SESSION['login'] = true;
  } else {
    echo "Onjuiste gegevens!<br/>";
  }

  echo "<br/>";
}

?>

<form method="post">
<label> for="username">Gebruikersnaam</label>
<input type="text" name="username" placeholder="Gebruikersnaam..">

<label> for="Password">Wachtwoord</label>
<input type="text" name"password" placeholder="Wachtwoord..">

<input type="submit" name="login" value="Inloggen" >
