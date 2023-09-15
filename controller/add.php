<?php

    include 'connect.php';

    session_start();
    if(!isset($_SESSION['id_u'])){
        header("Location: ../index.php");
    }

    $id_user = $_SESSION['id_u'];
    $name = $_POST['name'];
    $blog = $_POST['blog'];

    $query = mysqli_query($conn, "INSERT INTO blogs VALUES ('','$name','$blog','$id_user')");

    if($query){
        echo '<script type="text/javascript">
        alert("Blog successfully added")
        window.location="../account/dashboard.php"
        </script>';
    }
?>
