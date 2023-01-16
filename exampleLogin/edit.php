<?php 

include('connection.php');

    if(isset($_GET['id'])){

        $id = $_GET['id'];


        $sql = "SELECT * FROM atardecer WHERE id=$id";
        
        $res = mysqli_query($conn, $sql);


        if(mysqli_num_rows($res) == 1){
            
            $row = mysqli_fetch_array($res);

            $name = $row['name'];
            $description = $row['description'];

        }

        if(isset($_POST['update'])){

            $id = $_GET['id'];


            $name = $_POST['name'];
            $description = $_POST['description'];

            $sql2 = "UPDATE atardecer SET name = '$name', description = '$description' WHERE id=$id";

        mysqli_query($conn, $sql2);

            
        session_start();

        $_SESSION['message'] = 'atardecer updated succesfully';


        header('Location: index.php'); 
        }
    }
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
    <title>Edit</title>
</head>
<body>
    <?php include('navbar.php');?>
    
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div>
                    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div>
                        <input type="text" name="name" placeholder="Update atardecer name" autofocus value="<?php echo $name; ?>">
                    </div>
                    <div>
                        <textarea name="description" placeholder="Update atardecer description" autofocus><?php echo $description; ?></textarea>
                    </div>
                    <button name="update">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>