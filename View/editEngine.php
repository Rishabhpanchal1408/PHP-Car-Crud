<?php require '../Controller/connection.php' ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM engine_tbl WHERE engine_id = $id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $car = $result->fetch_assoc();
}
?>
<?php
$engine = '';
$engineErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    if (empty($_POST['engine'])) {
        $engineErr = "Enter engine";
    } else {
        $engine = $_POST['engine'];
    }
    if (empty($engineErr)) {
        $sql = "UPDATE engine_tbl SET engine_name = '$engine' WHERE engine_id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewEngine.php");
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
                    <h3 class="card-title">Car engine</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $car['engine_id'] ?>" name="id" />
                            <label for="engine" class="form-label">Enter engineName</label>
                            <input type="text" class="form-control" id="engine" placeholder="engine Name" name="engine"  value="<?php echo $car['engine_nameS'] ?>">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($engineErr) ?
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