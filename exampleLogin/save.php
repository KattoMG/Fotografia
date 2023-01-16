<?php 

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "examplelogin3e";

    $conn = mysqli_connect($server, $user, $password, $database) or die ("Connection error: ". mysql_error());

    if(isset($_POST['save'])){

        $name = $_POST['atardecerName'];
        $description = $_POST['atardecerDescription'];

        $sql = "INSERT INTO atardecer(name, description) VALUES ('$name', '$description')";

        $res = mysqli_query($conn, $sql);

        if(!$res){
            die("SQL error");
        }

        session_start();

        $_SESSION['message'] = 'atardecer saved succesfully';


        header('Location: index.php'); 


    }



?>