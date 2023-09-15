<?php
    session_start();
    if(!isset($_SESSION['id_u'])){
        // header("Location: register.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Bull & Bear</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="main">
            <h1 class="title">Login</h1>
            <form action="controller/loginregister/loginp.php" method="post">
                <label for="">Username</label>
                <input placeholder="username" type="text" class="form" name="name" autocomplete="off" required>
                <br/>
                <label for="">Password</label>
                <input placeholder="password" type="password" class="form" name="pass" required>
                <table>
                    <tr>
                        <h4>Don't Have an Account? Click Here <a class="highlight" href="register.php">Register</a></h4>
                        <th><input type="submit" class="input-btn green" value="SUBMIT"></th>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </body>
</html>