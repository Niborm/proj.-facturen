<?php
  session_start();

  $con = mysqli_connect("localhost", "root", "usbw");
  mysqli_select_db($con, "facturen");
  echo "<a href='add.php'>Lid toevoegen</a>";

  $result = mysqli_query($con, "SELECT * FROM gebruikers");

echo "<table>";
echo "<th>" . "Lidnr" . "<th>" . "Voornaam" . "<th>" . "Tussenvoegsel" . "<th>" . "Achternaam" . "<th>" . "Aanhef"
. "<th>" . "Postadres" . "<th>" . "Huisnr" . "<th>" . "Postcode" . "<th>" . "Plaats" . "<th>" . "Tel" .
"<th>" . "Mobiel" . "<th>" . "E-mail" . "<th>" . "Soort lid" . "<th>" . "Betaald" . "<th>" . "Bewerken" . "<th>" . "Verwijderen";
  while ($data = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $data['id'] . "</td>";
    echo "<td>" . $data['voornaam'] . "</td>";
    echo "<td>" . $data['tussenvoegsel'] . "</td>";
    echo "<td>" . $data['achternaam'] . "</td>";
    echo "<td>" . $data['aanhef'] . "</td>";
    echo "<td>" . $data['postadres'] . "</td>";
    echo "<td>" . $data['huisnr'] . "</td>";
    echo "<td>" . $data['postcode'] . "</td>";
    echo "<td>" . $data['plaats'] . "</td>";
    echo "<td>" . $data['tel'] . "</td>";
    echo "<td>" . $data['mobiel'] . "</td>";
    echo "<td>" . $data['mail'] . "</td>";
    echo "<td>" . $data['soortlid'] . "</td>";
    echo "<td>" . $data['betaald'] . "</td>";
    echo "<td>" . "<a href='edit.php?id=" . $data['id'] ."'>" . "Bewerken" . "</td>";
    echo "<td>" . "<a href='delete.php?id=" . $data['id'] ."'>" . "Verwijderen" . "</td>";

    echo "</a>";
      echo "</tr>";
}
echo "</table>";
?>
<style>
table {
  border-collapse: collapse;
  border: 1px solid black;
  margin: auto;
}
td {
  border: 1px solid black;
  width: 300px;
  text-align: center;
}
