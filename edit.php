<?php
session_start();

$con = mysqli_connect("localhost", "root", "usbw");
       mysqli_select_db($con, "facturen");

       if(isset($_POST['verzenden'])){
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

        $query = "UPDATE gebruikers SET voornaam='$voornaam',
                                        tussenvoegsel='$tussenvoegsel',
                                        achternaam='$achternaam',
                                        aanhef='$aanhef',
                                        postadres='$postadres',
                                        huisnr='$huisnr',
                                        postcode='$postcode',
                                        plaats='$plaats',
                                        tel='$tel',
                                        mobiel='$mobiel',
                                        mail='$mail',
                                        soortlid='$slid',
                                        betaald='$betaald'
                                        WHERE id = '" . $_GET['id'] . "'";

        if(mysqli_query($con, $query)){
          echo "Het bewerken is gelukt.<br/>";
        }else{
          echo "Er is een fout opgetreden tijdens het bewerken van de gegevens!<br/>";
          echo mysqli_error();
        }

        echo "<br/>";
       }
       else {
         $result = mysqli_query($con, "SELECT * FROM gebruikers WHERE id = '". $_GET['id'] . "'");
         while($data = mysqli_fetch_assoc($result)){
           $voornaam = $data['voornaam'];
           $tussenvoegsel = $data['tussenvoegsel'];
           $achternaam = $data['achternaam'];
           $aanhef = $data['aanhef'];
           $postadres = $data['postadres'];
           $huisnr = $data['huisnr'];
           $postcode = $data['postcode'];
           $plaats = $data['plaats'];
           $tel = $data['tel'];
           $mobiel = $data['mobiel'];
           $mail = $data['mail'];
           $slid = $data['soortlid'];
           $betaald = $data['betaald'];
         }
       }
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
     <input type="text" name="voornaam" value="<?php echo $voornaam; ?>"/><br/>

     <label>Tussenvoegsel</label>
     <input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel; ?>"/><br/>

     <label>Achternaam</label>
     <input type="text" name="achternaam" value="<?php echo $achternaam; ?>"/><br/>

     <label>Aanhef</label>
     <input type="text" name="aanhef" value="<?php echo $aanhef; ?>"/><br/>

     <label>Postadres</label>
     <input type="text" name="postadres" value="<?php echo $postadres; ?>"/><br/>

     <label>Huisnr</label>
     <input type="text" name="huisnr" value="<?php echo $huisnr; ?>"/><br/>

     <label>Postcode</label>
     <input type="text" name="postcode" value="<?php echo $postcode; ?>"/><br/>

     <label>Plaats</label>
     <input type="text" name="plaats" value="<?php echo $plaats; ?>"/><br/>

     <label>Telefoonnr</label>
     <input type="text" name="tel" value="<?php echo $tel; ?>"/><br/>

     <label>Mobiel</label>
     <input type="text" name="mobiel" value="<?php echo $mobiel; ?>"/><br/>

     <label>E-mail</label>
     <input type="text" name="mail" value="<?php echo $mail; ?>"/><br/>

     <label>Soort Lid</label>
     <input type="text" name="soortlid" value="<?php echo $slid; ?>"/><br/>

     <label>Betaald</label>
     <input type="text" name="betaald" value="<?php echo $betaald; ?>"/><br/>

     <input type="submit" name="verzenden" value="Opslaan"/>
 </form>

 <a href="admin.php">Terug naar admin pagina</a>
