<?php
session_start();
if($_SESSION['login'] == true && $_SESSION['admin'] != false){
  echo " ";
}else{
  header('Location: index.php');
}
  $con = mysqli_connect("localhost", "root", "usbw");
         mysqli_select_db($con, "facturen");

if(isset($_POST['verzenden'])) {
  $voornaam = $_POST['voornaam'];
  $tussenvoegsel = $_POST['tussenvoegsel'];
  $achternaam = $_POST['achternaam'];
  $aanhef = $_POST['aanhef'];
  $postadres = $_POST['postadres'];
  $huisnr = $_POST['huisnr'];
  $postcode = $_POST['postcode'];
  $plaats = $_POST['plaats'];
  $tel = $_POST['tel'];
  $mobiel = $_POST['mobiel'];
  $mail = $_POST['mail'];
  $slid = $_POST['soortlid'];
  $betaald = $_POST['betaald'];
  $query = "INSERT INTO gebruikers(voornaam, tussenvoegsel, achternaam, aanhef, postadres, huisnr, postcode, plaats, tel, mobiel, mail, soortlid, betaald)
  VALUES('$voornaam', '$tussenvoegsel', '$achternaam', '$aanhef', '$postadres', '$huisnr', '$postcode', '$plaats', '$tel', '$mobiel', '$mail', '$slid', '$betaald')";
  if(mysqli_query($con, $query)){
    echo "Nieuwe lid is toegevoegd.<br/>";
  }else{
    echo "Er is een fout opgetreden tijdens het toevoegen van de gegevens!<br/>";
    echo mysqli_error();
  }
  echo "<br/>";
}
//test
?>

<style type="text/css">
        label {
          float: left;
          display: block;
          width: 150px;
        }
        .verzenden {
          margin-left: 150px;
        }
    </style>
<form method="post" action"">
    <label>Voornaam</label>
    <input type="text" name="voornaam"/><br/>

    <label>Tussenvoegsel</label>
    <input type="text" name="tussenvoegsel"/><br/>

    <label>Achternaam</label>
    <input type="text" name="achternaam"/><br/>

    <label>Aanhef</label>
    <input type="text" name="aanhef"/><br/>

    <label>Postadres</label>
    <input type="text" name="postadres"/><br/>

    <label>Huisnr</label>
    <input type="text" name="huisnr"/><br/>

    <label>Postcode</label>
    <input type="text" name="postcode"/><br/>

    <label>Plaats</label>
    <input type="text" name="plaats"/><br/>

    <label>Telefoonnr</label>
    <input type="text" name="tel"/><br/>

    <label>Mobiel</label>
    <input type="text" name="mobiel"/><br/>

    <label>E-mail</label>
    <input type="text" name="mail"/><br/>

    <label>Soort Lid</label>
    <input type="text" name="soortlid"/><br/>

    <label>Betaald</label>
    <input type="text" name="betaald"/><br/>
    <br><br>
    <input type="submit" name="verzenden" value="Opslaan"/>
</form>

<a href="index.php">Terug naar het overzicht</a>
