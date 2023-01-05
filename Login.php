<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/dfb1016c8c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="loginside">
        <h1>Login</h1>
        <form action="intility.php" method="post">
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