<?php

include '../connect.php';
$name = $_POST['name'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['pass2'];

if($pass1!=$pass2){
    echo '<script type="text/javascript">
    alert("Passwords do not match!")
    window.location="../../register.php"
    </script>';

    return false;
}

$result = mysqli_query($conn, "SELECT username FROM user WHERE username='$name'");

if(mysqli_fetch_assoc($result)){
    echo '<script type="text/javascript">
    alert("Username already exists")
    window.location="../../register.php"
    </script>';

    return false;
}

mysqli_query($conn, "INSERT INTO user VALUES('','$name','$pass1')");

echo '<script type="text/javascript">
    alert("Register Success!")
    window.location="../../register.php"
    </script>';
