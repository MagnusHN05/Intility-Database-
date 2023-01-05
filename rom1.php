<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/dfb1016c8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="rom.css">
    <title>rom1</title>
</head>
<body>
<div class="iconer">
    <i id="smiley" class="far fa-face-smile" onclick="changeIconSmiley()"></i>
    <i id="heart" class="far fa-heart" onclick="changeIconHeart()"></i>
    <i id="tommelopp" class="far fa-thumbs-up" onclick="changeIconTommelopp()"></i>
    <i id="tommelned" class="far fa-thumbs-down" onclick="changeIconTommelned()"></i>
</div>

<?php 

 // Tilkoblingsinformasjon 

 $tjener = "localhost"; 

 $brukernavn = "root"; 

 $passord = "root"; 

 $database = "mydb"; //Endre på denne til din database 



 // Opprette en kobling 

 $kobling = new mysqli($tjener, $brukernavn, $passord, $database); 



 // Sjekk om koblingen virker 

 if($kobling->connect_error) { 

     die("Noe gikk galt: " . $kobling->connect_error); 

 } else { 

     echo "Koblingen virker.<br>"; 

 } 



 // Angi UTF-8 som tegnsett 

 $kobling->set_charset("utf8"); 

// Med linjeskift for 1 tabell     

$sql = "SELECT * FROM Reactions"; //Skriv din sql kode her 

$resultat = $kobling->query($sql); 



while($rad = $resultat->fetch_assoc()) { 

    $reaksjon = $rad["reaksjon"]; //Skriv ditt kolonnenavn her 
    $nummer = $rad["nummer"];





    echo "$reaksjon $nummer<br>"; 

} 

?>
<script src="script.js"></script>

</body>
</html>
