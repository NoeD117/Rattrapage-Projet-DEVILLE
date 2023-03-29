<?php
    session_start();
    if(!isset($_SESSION['user']))
        header('Location:index.php');
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title> Bonjour !</title>
    </head>

    <body>
        <h1> Bonjour ! <?php echo $_SESSION['user']; ?></h1>
        <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
    </body>
    </html>