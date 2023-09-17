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
            DASHBOARD
        </div>
        <div class="content">
            <div class="box">

                <div class="theblog addblog">
                    <div class="innerb">
                        <h4>Add blogs</h4>
                        <a href="pageadd.php">
                            <button class="input-btn btn">
                                ADD
                            </button>
                        </a>
                    </div>
                    <a href="../controller/loginregister/logout.php">
                        <button class="btn input-btn">
                            Logout
                        </button>
                    </a>
                </div>
            </div>
            <?php

            $id_user = $_SESSION['id_u'];

            include '../controller/connect.php';

            // $data = mysqli_query($conn, "SELECT * FROM blogs WHERE id_user = '$id_user' ");
            $data = mysqli_query($conn, "SELECT * FROM blogs JOIN user ON blogs.id_user=user.id_user");
            // $userdata = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user' ");
            // $user = mysqli_fetch_array($userdata);

            while ($result = mysqli_fetch_array($data)) { ?>
                <div class="box">
                    <h4 class="blogtitle"><?php echo $result['name'] ?></h4>
                    <div class="theblog">
                        <p class="blogover">
                            <?php echo $result['article']; ?>
                        </p>
                        <p class="blogid">
                            Blog ID: <?php echo $result['id']; ?>
                        </p>
                        <p class="blogid">
                            Author: <?php echo $result['username']; ?>
                        </p>
                        <a href="pageread.php?id=<?php echo $result['id'] ?> ">
                            <button class="btn input-btn">
                                Read
                            </button>
                        </a>
                        <?php if ($result['id_user'] == $id_user) {
                        ?>
                            <a href="pageedit.php?id=<?php echo $result['id'] ?> ">
                                <button class="btn input-btn">
                                    Edit
                                </button>
                            </a>
                            <a href="../controller/delete.php?id=<?php echo $result['id'] ?>">
                                <button class="btn input-btn">
                                    Delete
                                </button>
                            </a>
                        <?php
                        }
                        ?>

                    </div>
                </div>

            <?php
            }
            ?>


            <!-- </div> -->
        </div>
</body>

</html>