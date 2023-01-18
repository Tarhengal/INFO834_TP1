<?php


/*Connection à la BD*/ 
$conn = @mysqli_connect("tp-epua:3308", "simonett", "");

if (mysqli_connect_errno()) {
    $msg = "erreur ". mysqli_connect_error();
} else {  
    $msg = "connecté au serveur " . mysqli_get_host_info($conn);
    mysqli_select_db($conn, "richaval");

    /*Encodage UTF8 pour les échanges avec la BD*/
    mysqli_query($conn, "SET NAMES UTF8");
}

include("connection.php");
$connection = $_POST['connection'];
if(isset($connection)){
    $utilisateurs = $conn -> query('SELECT * FROM `utilisateurs`');
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    while($utilisateurs = $utilisateurs -> fetch()){
        if($utilisateurs['email'] == $email && $utilisateurs['mdp'] == sha1($mdp)){
            echo 'Connected !';
        }
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="login.css" media="screen" type="text/css" />
        <title>Login</title>
    </head>
    <body>
        <div id='container'>

            <h1>Bienvenue !</h1>
            <form method="POST">
                <input type='text' name='email' placeholder='Entrez vptre email'/>
                <input type='password' name='mdp' placeholder='Entrez votre mot de passe'/>
                <button type='submit' name='connection'>Se Connecter</button>
            </from>

        </div>

    </body>
</html>