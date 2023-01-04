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
            <div id="bruker-input">
                <p>brukernavn</p>
                <input type="text" name="Bruker" placeholder="Brukernavn">
            </div>
            <div id="passord-input">
                <p>passord</p>
                <input type="text" name="passord" placeholder="Passord"><br>
                <i class="fa fa-eye">
                <i class="fa fa-eye-slash">
            </div>
            <div id="knapper">
                <form action="legg_til_elever.php">
                    <button type="submit">SignUp</button>
                </form>
                 <button type="submit" id="blueknapp">Login</button>
            </div>
            
        </form>
    </div>

</body>
</html>