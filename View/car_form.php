<?php require '../Controller/connection.php' ?>
<?php require '../Controller/sql_fun.php' ?>
<?php
$carModel = $carBrand = $carType = $carEngine = $carColor = $carPrice = $carImg =  '';
$carModelErr = $carBrandErr = $carTypeErr = $carEngineErr = $carColorErr = $carPriceErr = $carImgErr =  '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['carModel'])) {
        $carModelErr = "Enter Model!";
    } else {
        $carModel = $_POST['carModel'];
    }
    if (empty($_POST['carBrand'])) {
        $carBrandErr = "Enter Brand!";
    } else {
        $carBrand = $_POST['carBrand'];
    }
    if (empty($_POST['carType'])) {
        $carTypeErr = "Enter Type!";
    } else {
        $carType = $_POST['carType'];
    }
    if (empty($_POST['carEngine'])) {
        $carEngineErr = "Enter Engine!";
    } else {
        $carEngine = $_POST['carEngine'];
    }
    if (empty($_POST['carColor'])) {
        $carColorErr = "Enter Color!";
    } else {
        $carColor = $_POST['carColor'];
    }
    if (empty($_POST['carPrice'])) {
        $carPriceErr = "Enter Price!";
    } else {
        $carPrice = $_POST['carPrice'];
    }

    $target_dir = "F:/AMPPS SOFTWARE/Ampps/www/php_basic/dashboardTemplating/AdminLTE/uploads/";
    $target_file = $target_dir . basename($_FILES["carImg"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["carImg"]["tmp_name"]);
        if ($check !== false) {
            // echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            // echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        // echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["carImg"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["carImg"]["name"])) . " has been uploaded.";
        } else {
            // echo "Sorry, there was an error uploading your file.";
        }
    }

    $carImg = htmlspecialchars(basename($_FILES["carImg"]["name"]));

    if (empty($carModelErr) && empty($carBrandErr) && empty($carTypeErr) && empty($carEngineErr) && empty($carColorErr) && empty($carPriceErr)) {
        $sql = "INSERT INTO car_tbl (car_model,car_brand,car_type,car_engine,car_color,car_price,car_img) VALUES ('$carModel','$carBrand','$carType','$carEngine ','$carColor','$carPrice','$carImg')";
        $result = $conn->query($sql);
        header('Location: viewCarDetails.php');
    }
}
?>



<?php require "header.php" ?>
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content w-75 mx-auto">
        <div class="container-fluid pt-5">
            <!-- general form elements disabled -->

            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Car Detail</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group col-6 col-sm-6">
                                <label for="carModel">ENTER CAR MODEL</label>
                                <input type="text" class="form-control" placeholder="Car Name" name="carModel">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    echo empty($carModelErr) ?
                                        '' : '<p class="invalid-feedback d-block">' . $carModelErr . '</p>';
                                }
                                ?>
                            </div>
                            <div class="form-group col-6 col-sm-6">
                                <label for="carBrand">ENTER CAR BRAND</label>
                                <select class="form-control" name="carBrand">
                                    <?php
                                    $result = get_all_brand();
                                    while ($row = $result->fetch_assoc()) {
                                        $data = '<option value="' . $row['brand_id'] . '">';
                                        $data .= $row['brand_name'];
                                        $data .= '</option>';
                                        echo $data;
                                    }

                                    ?>
                                </select>
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    echo empty($carBrandErr) ?
                                        '' : '<p class="invalid-feedback d-block">' . $carBrandErr . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6 col-sm-6">
                                <label for="carType">ENTER CAR TYPE</label>
                                <select class="form-control" name="carType">
                                    <?php
                                    $result = get_all_type();
                                    while ($row = $result->fetch_assoc()) {
                                        $data = '<option value="' . $row['type_id'] . '">';
                                        $data .= $row['type_name'];
                                        $data .= '</option>';
                                        echo $data;
                                    }

                                    ?>
                                </select>
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    echo empty($carTypeErr) ?
                                        '' : '<p class="invalid-feedback d-block">' . $carTypeErr . '</p>';
                                }
                                ?>
                            </div>
                            <div class="form-group col-6 col-sm-6">
                                <label for="carEngine">ENTER CAR ENGINE</label>
                                <select class="form-control" name="carEngine">
                                    <?php
                                    $result = get_all_engine();
                                    while ($row = $result->fetch_assoc()) {
                                        $data = '<option value="' . $row['engine_id'] . '">';
                                        $data .= $row['engine_name'];
                                        $data .= '</option>';
                                        echo $data;
                                    }

                                    ?>
                                </select><?php
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                echo empty($carEngineErr) ?
                                                    '' : '<p class="invalid-feedback d-block">' . $carEngineErr . '</p>';
                                            }
                                            ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6 col-sm-6">
                                <label for="carColor">ENTER CAR COLOR</label>
                                <select class="form-control" name="carColor">
                                    <?php
                                    $result = get_all_color();
                                    while ($row = $result->fetch_assoc()) {
                                        $data = '<option value="' . $row['color_id'] . '">';
                                        $data .= $row['color_name'];
                                        $data .= '</option>';
                                        echo $data;
                                    }

                                    ?>
                                </select><?php
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                echo empty($carColorErr) ?
                                                    '' : '<p class="invalid-feedback d-block">' . $carColorErr . '</p>';
                                            }
                                            ?>
                            </div>
                            <div class="form-group col-6 col-sm-6">
                                <label for="carPrice">ENTER CAR PRICE</label>
                                <input type="text" class="form-control" placeholder="Car Price" name="carPrice">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    echo empty($carPriceErr) ?
                                        '' : '<p class="invalid-feedback d-block">' . $carPriceErr . '</p>';
                                }
                                ?>
                            </div>
                            <div class="form-group col-6 col-sm-6">
                                <label for="carImg">ENTER CAR IMG</label>
                                <input type="file" class="form-control" placeholder="Car File" name="carImg">
                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    echo empty($carImgErr) ?
                                        '' : '<p class="invalid-feedback d-block">' . $carImgErr . '</p>';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-6 col-sm-6">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php" ?>