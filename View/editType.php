<?php require '../Controller/connection.php' ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM type_tbl WHERE type_id = $id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $car = $result->fetch_assoc();
}
?>
<?php
$type = '';
$typeErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    if (empty($_POST['type'])) {
        $typeErr = "Enter type";
    } else {
        $type = $_POST['type'];
    }
    if (empty($typeErr)) {
        $sql = "UPDATE type_tbl SET type_name = '$type' WHERE type_id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewType.php");
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
                    <h3 class="card-title">Car type</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $car['type_id'] ?>" name="id" />
                            <label for="type" class="form-label">Enter typeName</label>
                            <input type="text" class="form-control" id="type" placeholder="type Name" name="type" value="<?php echo $car['type_name'] ?>" >
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($typeErr) ?
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