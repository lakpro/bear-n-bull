<?php
session_start();
if (!isset($_SESSION['id_u'])) {
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Bull & Bear</title>
</head>

<body>
    <div class="wrapper">
        <div class="heading">
            Lets publish a blog!
        </div>
        <div class="content">
            <div class="box">
                <form class="addform" action="../controller/add.php" method="post">
                    <label for="">Name</label>
                    <input type="text" class="form" name="name" autocomplete="off" required>
                    <label for="">Blog</label>
                    <textarea class="blog" name="blog" required></textarea>
                    <div class="bmenu">
                        <a href="dashboard.php">
                            <button type="button" class="btn input-btn">
                                Back
                            </button>
                        </a>

                        <input type="submit" class="btn input-btn btn-add" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>