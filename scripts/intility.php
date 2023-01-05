<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

     $brukernavn = $_POST["Bruker"];
     $passord = $_POST["passord"];

     // Med linjeskift for 1 tabell     

    $sql = "SELECT * FROM User"; //Skriv din sql kode her 

    $resultat = $kobling->query($sql); 

 
    $loggetinn = false;
    while($rad = $resultat->fetch_assoc()) { 

        $br = $rad["brukernavn"]; //Skriv ditt kolonnenavn her 

        $po = $rad["Passord"]; 

 
        if($br == $brukernavn && $po == $passord) {
            $loggetinn = true;
        }

    } 


    if($loggetinn) {
        echo "Du har logget inn";
        header('Location: /Main.html');
    }
    else {
        echo "Finner ikke brukernavn og passord";
    }
    ?>
</body>
</html>