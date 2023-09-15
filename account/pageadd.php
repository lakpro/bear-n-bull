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
    <div class="wrapper">
            <h1 class="title">Page ADD</h1>
            <form action="../controller/add.php" method="post">
                <label for="">Name</label>
                <input type="text" class="form" name="name" autocomplete="off" required>
                <label for="">Blog</label>
                <textarea class="blog" name="blog" required></textarea>
                <table>
                    <tr>
                        <th><button class ="btn"><a href="dasboard.php">Back</a></button></th>
                        <th><input type="submit" class="input-btn green" value="Add"></th>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>