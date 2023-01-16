<?php 

include('connection.php');

    if(isset($_GET['id'])){

        $id = $_GET['id'];




        $sql = "DELETE FROM atardecer WHERE id=$id";

        $res = mysqli_query($conn, $sql);

        if(!$res){
            die("SQL error");
        }

        session_start();

        $_SESSION['message'] = 'atardecer removed succesfully';


        header('Location: index.php'); 


    }



?>