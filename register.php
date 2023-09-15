<?php
    session_start();
    if(!isset($_SESSION['id_u'])){
        // header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Register Form</title>
</head>
<body>
    <div class="wrapper">
        <div class="main">
        <h1 class="title">Register</h1>
        <form action="controller/loginregister/regp.php" method="post">
            <label for="">Username</label>
            <input placeholder="username" type="text" class="form" name="name" autocomplete="off" required>
            <label for="">Password</label>
            <input placeholder="password" type="password" class="form" name="pass" required>
            <label for="">Confirm Password</label>
            <input placeholder="confirm password" type="password" class="form" name="pass2" required>
            <table>
                <tr>
                    <h4>Have an Account? Click Here <a class="highlight" href="index.php">Login</a></h4>
                    <th><input type="submit" class="input-btn green" value="SUBMIT"></th>
                </tr>
            </table>
        </form>
        </div>
    </div>
</body>
</html>