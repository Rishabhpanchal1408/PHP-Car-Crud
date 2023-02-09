<?php require '../Controller/connection.php' ?>
<?php
$type = '';
$typeErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['type'])) {
        $typeErr = "Enter type";
    } else {
        $type = $_POST['type'];
    }
    if (empty($typeErr)) {
        $sql = "INSERT INTO type_tbl (type_name) VALUES ('$type')";
        $result = $conn->query($sql);
        header('Location: viewType.php');
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
                    <h3 class="card-title">Car type</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="type" class="form-label">Enter typeName</label>
                            <input type="text" class="form-control" id="type" placeholder="Type Name" name="type">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($enigneErr) ?
                                    '' : '<p class="invalid-feedback d-block">' . $typeErr . '</p>';
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