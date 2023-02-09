<?php require '../Controller/connection.php' ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM brand_tbl WHERE brand_id = $id ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $car = $result->fetch_assoc();
}
?>
<?php
$brand = '';
$brandErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    if (empty($_POST['brand'])) {
        $brandErr = "Enter Brand";
    } else {
        $brand = $_POST['brand'];
    }
    if (empty($brandErr)) {
        $sql = "UPDATE brand_tbl SET brand_name = '$brand' WHERE brand_id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: viewBrand.php");
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
                    <h3 class="card-title">Car Brand</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" value="<?php echo $car['brand_id'] ?>" name="id" />
                            <label for="brand" class="form-label">Enter BrandName</label>
                            <input type="text" class="form-control" id="brand" placeholder="Brand Name" name="brand" value="<?php echo $car['brand_name'] ?>">
                            <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                echo empty($brandErr) ?
                                    '' : '<p class="invalid-feedback d-block">' . $brandErr . '</p>';
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