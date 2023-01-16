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
        <form action="lag_ny_bruker.php" method="post">
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
                <button type="submit" id="blueknapp">SignIn</button>
            </div>
            
        </form>
    </div>
<script src="signup.js"></script>

</body>
</html>