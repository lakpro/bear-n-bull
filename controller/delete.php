<?php

session_start();
            $id_user=$_SESSION['id_u'];
            $id_page=$_GET['id'];

            include '../controller/connect.php';

            $data = mysqli_query($conn, "DELETE FROM blogs WHERE id_user = '$id_user' AND id='$id_page' ");

if($data){
    echo '<script type="text/javascript">
    alert("Successfully deleted!!")
    window.location="../account/dashboard.php"
    </script>';
}else{
    echo '<script type="text/javascript">
    alert("Failed to delete")
    window.location="../account/dashboard.php"
    </script>';
}


?>