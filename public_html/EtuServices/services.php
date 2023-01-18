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

?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services</title>
    </head>
    <body>
        <div id='container'>

            <h1>Services</h1>

        </div>

    </body>
</html>