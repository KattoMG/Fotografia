<?php 

    session_start();

    if(!isset($_SESSION['firstname'])){

        header("location:login.php");
        die();
    }else{
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link href="../exampleLogin/css/login2.0.css" rel="stylesheet" type="text/css">


            <title>Example admin</title>
        </head>
        <body>
        <section class="form-login">
             <h1>Hello Admin</h1>
             <h2> Your user name is: '.$_SESSION['firstname'].'</h2>
             <a href="logout.php" class="adminbutton">Log out</a> 
             <a href="index.php" class="adminbutton">Manage</a>
        </section>
        </body> 
        </html>';
        
    }

?>