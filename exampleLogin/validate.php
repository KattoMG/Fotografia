<?php 

    $username=$_POST['firstname'];
    $password=$_POST['password'];

    
    $conn = mysqli_connect("localhost", "root", "", "examplelogin3e");

    $sql = "SELECT * FROM users WHERE firstname = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if($row['id_user_level']==1){
        session_start();
        $_SESSION['firstname'] = $row['firstname'];
        header("location: admin.php");
    }else if($row['id_user_level']==2){
        session_start();
        $_SESSION['firstname'] = $row['firstname'];
        header("location: customer.php");
    }else{
        ?>
        <h1 class="p-5 bg-info">Authentication error, try again</h1>
        <?php 
        include("login.php");
        ?>
        <?php
    }


    mysqli_free_result($result);
    mysqli_close($conn);





?>