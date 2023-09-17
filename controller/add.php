<?php

include 'connect.php';

session_start();
if (!isset($_SESSION['id_u'])) {
    header("Location: ../index.php");
}

$id_user = $_SESSION['id_u'];
$name = $_POST['name'];
$blog = $_POST['blog'];

// $query = mysqli_query($conn, "INSERT INTO blogs VALUES ('','$name','$blog','$id_user');");


// if ($query) {
//     echo '<script type="text/javascript">
//         alert("Blog successfully added")
//         window.location="../account/dashboard.php"
//         </script>';
// }


// Create a prepared statement
$stmt = mysqli_prepare($conn, "INSERT INTO blogs (name, article, id_user) VALUES (?, ?, ?)");

// Bind parameters to the prepared statement
mysqli_stmt_bind_param($stmt, "ssi", $name, $blog, $id_user);

// Execute the prepared statement
if (mysqli_stmt_execute($stmt)) {
    echo '<script type="text/javascript">
        alert("Blog successfully added");
        window.location="../account/dashboard.php";
        </script>';
} else {
    echo '<script type="text/javascript">
        alert("Error adding the blog");
        window.location="../account/dashboard.php";
        </script>';
}
