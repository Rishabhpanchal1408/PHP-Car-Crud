<?php require '../Controller/connection.php' ?>
<?php
$color = '';
$colorErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['color'])) {
        $colorErr = "Enter color";
    } else {
        $color = $_POST['color'];
    }
    if (empty($colorErr)) {
        $sql = "INSERT INTO color_tbl (color_name) VALUES ('$color')";
        $result = $conn->query($sql);
        header('Location: viewColor.php');
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
                            <label for="color" class="form-label">Enter ColorName</label>
                            <input type="text" class="form-control" id="color" placeholder="Color Name" name="color">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($enigneErr) ?
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