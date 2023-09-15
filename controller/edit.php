<?php
session_start();
$id_user=$_SESSION['id_u'];
$id_page=$_POST['id'];
$name  = $_POST['name'];
$blog = $_POST['blog'];
include '../controller/connect.php';

$data = mysqli_query($conn, "UPDATE `blogs` SET `id`='$id_page', `name`='$name', `article`='$blog', `id_user`='$id_user' WHERE `id_user`='$id_user' AND `id`='$id_page'");


if($data){
    echo '<script type="text/javascript">
    alert("Edit Success")
    window.location="../account/dashboard.php"
    </script>';
}else{
    echo '<script type="text/javascript">
    alert("Edit Failure")
    window.location="../account/dashboard.php"
    </script>';
}
