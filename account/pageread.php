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
    <?php
    $id_user = $_SESSION['id_u'];
    $id_page = $_GET['id'];

    include '../controller/connect.php';

    // $data = mysqli_query($conn, "SELECT * FROM blogs WHERE id_user = '$id_user' AND id='$id_page' ");
    $data = mysqli_query($conn, "SELECT * FROM blogs WHERE id='$id_page' ");
    // $userdata = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user' ");
    // $user = mysqli_fetch_array($userdata);
    $data_all = mysqli_query($conn, "SELECT * FROM blogs JOIN user ON blogs.id_user=user.id_user");
    $check = mysqli_fetch_array($data_all);

    while ($result = mysqli_fetch_array($data)) { ?>


        <div class="wrapper">
            <div class="heading">
                <h4 class="readtitle"><?php echo $result['name'] ?></h4>
            </div>
            <div class="content">
                <div class="box">
                    <!-- <h4 class="blogtitle"><?php echo $result['name'] ?></h4> -->
                    <div class="theblog">
                        <p class="blogover pageread">
                            <?php echo $result['article']; ?>
                        </p>
                        <p class="blogid">
                            Blog ID: <?php echo $result['id']; ?>
                        </p>
                        <p class="blogid">
                            Author: <?php echo $check['username']; ?>
                        </p>
                        <a href="dashboard.php">
                            <button class="btn input-btn">
                                Back
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
            </div>
        </div>

    <?php
    }
    ?>
</body>

</html>