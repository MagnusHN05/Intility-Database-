<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <script src="https://kit.fontawesome.com/dfb1016c8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
<div class="signupside">
        <h1>SignUp</h1>
        <form action="login.php" method="post">
            <div id="email-input">
                <p>E-mail</p>
                <input type="text" name="email" placeholder="Email">
            </div>
            <div id="brukernavn-input">
                <p>Brukernavn</p>
                <input type="text" name="Bruker" placeholder="Brukernavn">
            </div>
            <div id="passord-input">
                <p>Passord</p>
                <input type="Password" name="passord" placeholder="Passord" id="password"><br>
                <span>
                    <i id="eye" class="fa fa-eye" aria-hidden="true" onclick="censorFunc()"></i>
                </span>
            </div>
            <div id="knapper">
                <form action="login.php">
                    <button type="submit" id="blueknapp">SignUp</button>
                </form>
            </div>
            
        </form>
    </div>
    <?php

// Connect to the MySQL database
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
     // Construct the MySQL INSERT statement
$sql = "INSERT INTO users (email, username, passord) VALUES ('$email', '$username', '$hashedPassword')";

// Execute the INSERT statement and check for errors
if($kobling->query($sql)) {
    echo "Spørringen $sql ble gjennomført.";
} else {
    echo "Noe gikk galt med spørringen $sql ($kobling->error).";
}	


?>

<script src="signup.js"></script>
</body>
</html>