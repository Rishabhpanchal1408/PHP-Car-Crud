<?php require '../Controller/connection.php' ?>
<?php
$engine = '';
$engineErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['engine'])) {
        $engineErr = "Enter Engine";
    } else {
        $engine = $_POST['engine'];
    }
    if (empty($engineErr)) {
        $sql = "INSERT INTO engine_tbl (engine_name) VALUES ('$engine')";
        $result = $conn->query($sql);
        header('Location: viewEngine.php');
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
                    <h3 class="card-title">Car Engine</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="engine" class="form-label">Enter EngineName</label>
                            <input type="text" class="form-control" id="engine" placeholder="Enigne Name" name="engine">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($enigneErr) ?
                                    '' : '<p class="invalid-feedback d-block">' . $engineErr . '</p>';
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