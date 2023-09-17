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

    $data = mysqli_query($conn, "SELECT * FROM blogs WHERE id_user = '$id_user' AND id='$id_page' ");
    while ($result = mysqli_fetch_array($data)) { ?>

        <div class="wrapper">
            <div class="heading">
                Edit the Post
            </div>
            <div class="content">
                <div class="box">
                    <form class="addform" action="../controller/edit.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                        <label for="">Name</label>
                        <input type="text" class="form" name="name" value="<?php echo $result['name'] ?>" autocomplete="off" required>
                        <label for="">Blog</label>
                        <textarea class="blog" name="blog" required><?php echo $result['article'] ?></textarea>
                        <div class="bmenu">
                            <a href="dashboard.php">
                                <button type="button" class="btn input-btn">
                                    Back
                                </button>
                            </a>

                            <input type="submit" class="btn input-btn btn-add" value="Edit">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- <div class="wrapper">
            <h1 class="title">Page Edit</h1>
            <form action="../controller/edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
                <label for="">Name</label>
                <input type="text" class="form" name="name" value="<?php echo $result['name'] ?>" autocomplete="off" required>
                <label for="">Blog</label>
                <textarea class="blog" name="blog" required>
                    <?php echo $result['article'] ?>
                </textarea>
                <table>
                    <tr>
                        <th><button class="btn"><a href="dashboard.php">Back</a></button></th>
                        <th><input type="submit" class="input-btn green" value="Edit"></th>
                    </tr>
                </table>
            </form>
        </div> -->
    <?php }
    ?>
</body>

</html>