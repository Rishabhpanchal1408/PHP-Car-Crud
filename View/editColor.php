<?php require '../Controller/connection.php' ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM color_tbl WHERE color_id = $id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $car = $result->fetch_assoc();
}
?>
<?php
$color = '';
$colorErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    if (empty($_POST['color'])) {
        $colorErr = "Enter color";
    } else {
        $color = $_POST['color'];
    }
    if (empty($colorErr)) {
        $sql = "UPDATE color_tbl SET color_name = '$color' WHERE color_id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewColor.php");
        }
    }
}
?>
<?php require "header.php" ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-5">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Car color</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $car['color_id'] ?>" name="id" />
                            <label for="color" class="form-label">Enter colorName</label>
                            <input type="text" class="form-control" id="color" placeholder="color Name" name="color" value="<?php echo $car['color_name'] ?>">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($colorErr) ?
                                    '' : '<p class="invalid-feedback d-block">' . $colorErr . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php" ?>