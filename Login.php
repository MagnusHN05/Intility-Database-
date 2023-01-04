<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="loginside">
        <h1>Login</h1>
        <form action="intility.php" method="post">
            <div id="brukernavn-loggin">
            <p>Brukernavn</p>
            <input type="text" name="Bruker" placeholder="Brukernavn">
            </div>
            <div id="passord-loggin">
            <p>Passord</p>
            <input type="text" name="passord" placeholder="Passord"><br>
            </div>
            <div id="knapper">
                <form action="legg_til_elever.php">
                    <button type="submit">SignUp</button>
                </form>
                 <button type="submit" id="blueknapp">Login</button>
            </div>
            
        </form>
    </div>
<script src="loggin.js"></script>
</body>
</html>