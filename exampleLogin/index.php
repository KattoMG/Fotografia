<?php
session_start();

include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="../exampleLogin/css/login2.0.css" rel="stylesheet" type="text/css">

    <script src="js/bootstrap.min.js"></script>
    <title>example CRUD</title>

</head>
<body>
<?php 
include('navbar.php'); ?>

    <div class="container pt-4">
       <div class="row">
        <div class="col-md-4">

        <?php if(isset($_SESSION['message'])){

?>
<div class="alert fade show alert-dissmisible alert-success" role="alert">

<?= $_SESSION['message'];?>

<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
<?php session_unset(); 

}?>


        <form action="save.php" method="POST">
            <div>
                <input type="text" name="atardecerName" placeholder="atardecer name" autofocus>
            </div>
            <div>
                <textarea rows="2"name="atardecerDescription" placeholder="atardecer description" autofocus></textarea>
            </div>
            <div>
                <input type="submit" name="save" value="Send">
            </div>
        </form>
    </div>
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>atardecer</th>
                    <th>Description</th>
                    <th>Release date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM atardecer";
                $get_movies = mysqli_query($conn, $sql);


                while($row = mysqli_fetch_array($get_movies)){ ?>
                <tr>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['description']?></td>
                    <td><?php echo $row['realase_date']?></td>

                    <td>
                    <a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                    
                    <a href="delete.php?id=<?php echo $row['id']?>">Delete</a>

                    </td>
                </tr>
                <?php } ?>

                
            </tbody>
        </table>
    </div>
       </div>
    </div>
    
</body>
</html>