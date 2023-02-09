<?php require '../Controller/connection.php' ?>
<?php
$brand = '';
$brandErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['brand'])) {
        $brandErr = "Enter Brand";
    } else {
        $brand = $_POST['brand'];
    }
    if (empty($brandErr)) {
        $sql = "INSERT INTO brand_tbl (brand_name) VALUES ('$brand')";
        $result = $conn->query($sql);
        header('Location: viewCarDetails.php');
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
                            <label for="brand" class="form-label">Enter BrandName</label>
                            <input type="text" class="form-control" id="brand" placeholder="Brand Name" name="brand">
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