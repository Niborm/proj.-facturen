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

<form method="post" action"">
      <label>Username</label>
      <input type="text" name="username" /><br/>

      <label>Password</label>
      <input type="password" name="password"/><br/>

      <input type="submit" name="inloggen" value="Inloggen"/>
</form>
<style type="text/css">
        label {
          float: left;
          display: block;
          width: 90px;
        }
        .verzenden {
          margin-left: 150px;
        }
    </style>
