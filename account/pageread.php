<?php
    session_start();
    if(!isset($_SESSION['id_u'])){
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Bull & Bear</title>
    </head>
    <body>
    <?php
            $id_user=$_SESSION['id_u'];
            $id_page=$_GET['id'];

            include '../controller/connect.php';

            $data = mysqli_query($conn, "SELECT * FROM blogs WHERE id_user = '$id_user' AND id='$id_page' ");

            while($result = mysqli_fetch_array($data)){ ?>
                <div class="box">
                    <h4>Blogs of <?php echo $result['name']?></h4>
                    <div class = "theblog">
                        <p>
                            <?php echo $result['article'];?>
                        </p>
                        <p>
                            ID Bio: <?php echo $result['id']; ?>
                        </p>
                        <button class="btn">
                            <a href="dashboard.php" >Back</a>
                        </button>
                        <!-- <button class="btn">
                            <a href="../controller/delete.php?id=<?php echo $result['id']?>" >Delete</a>
                        </button> -->
                    </div>
                </div>
            
            <?php
            }
            ?>
    </body>
</html>