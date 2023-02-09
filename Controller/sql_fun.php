<?php require '../Controller/connection.php' ?>
<?php

// BRAND
function get_all_brand()
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM brand_tbl ORDER BY brand_id ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function get_single_brand($id)
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM brand_tbl WHERE brand_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['brand_name'];
    }
}

function edit_brand($id)
{
    $conn = $GLOBALS['conn'];
    $brand = $GLOBALS['brand'];
    $sql = "UPDATE brand_tbl SET brand_name = '$brand' WHERE brand_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function delete_brand($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM brand_tbl WHERE brand_id = $id";
    $result = $conn->query($sql);
    header('Location: viewBrand.php');
}
?>

<!-- ENGINE -->
<?php
function get_all_engine()
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM engine_tbl ORDER BY engine_id ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function get_single_engine($id)
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM engine_tbl WHERE engine_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['engine_name'];
    }
}

function edit_engine($id)
{
    $conn = $GLOBALS['conn'];
    $engine = $GLOBALS['engine'];
    $sql = "UPDATE engine_tbl SET engine_name = '$engine' WHERE engine_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function delete_engine($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM engine_tbl WHERE engine_id = $id";
    $result = $conn->query($sql);
    header('Location: viewEngine.php');
}
?>

<!-- COLOR -->
<?php
function get_all_color()
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM color_tbl ORDER BY color_id ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function get_single_color($id)
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM color_tbl WHERE color_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['color_name'];
    }
}


function edit_color($id)
{
    $conn = $GLOBALS['conn'];
    $color = $GLOBALS['color'];
    $sql = "UPDATE color_tbl SET color_name = '$color' WHERE color_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function delete_color($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM color_tbl WHERE color_id = $id";
    $result = $conn->query($sql);
    header('Location: viewColor.php');
}
?>

<!-- TYPE -->
<?php
function get_all_type()
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM type_tbl ORDER BY type_id ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function get_single_type($id)
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM type_tbl WHERE type_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['type_name'];
    }
}

function edit_type($id)
{
    $conn = $GLOBALS['conn'];
    $type = $GLOBALS['type'];
    $sql = "UPDATE type_tbl SET type_name = '$type' WHERE type_id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function delete_type($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM type_tbl WHERE type_id = $id";
    $result = $conn->query($sql);
    header('Location: viewType.php');
}
?>
<!-- Car Details -->
<?php
function get_all_car()
{
    $conn = $GLOBALS['conn'];
    $sql  = "SELECT * FROM car_tbl ORDER BY car_id ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function delete_car($id)
{

    $conn = $GLOBALS['conn'];
    $sql = "DELETE FROM car_tbl WHERE car_id = " . $id;
    $result = $conn->query($sql);

    header("Location: viewCarDetails.php");
}

function get_single_car($id)
{

    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM car_tbl WHERE car_id = $id ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }
}

function get_all_same_color_Car($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM car_tbl WHERE car_color = $id ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function get_all_same_brand_Car($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM car_tbl WHERE car_brand = $id ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}
function get_all_same_type_Car($id)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM car_tbl WHERE car_type = $id ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return $result;
    }
}

function get_filtered_cars($carBrand, $carType, $carEngine, $carColor, $minCarPrice, $maxCarPrice)
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT * FROM car_tbl WHERE ";
    $sql .= $carBrand == 'all' ? '' : "car_brand IN ($carBrand) AND ";
    $sql .= $carType == 'all' ? '' : "car_type IN ($carType) AND ";
    $sql .= $carEngine == 'all' ? '' : "car_engine IN ($carEngine) AND ";
    $sql .= $carColor == 'all' ? '' : "car_color IN ($carColor) AND ";
    $sql .=  " car_price BETWEEN $minCarPrice AND $maxCarPrice";
    $result = $conn->query($sql);
    echo $sql;
    if ($result->num_rows > 0) {
        return $result;
    }
}


function get_min_car_price()
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT MIN(car_price) FROM `car_tbl`";
    $result = $conn->query($sql);
    return $result->fetch_assoc()['MIN(car_price)'];
}

function get_max_car_price()
{
    $conn = $GLOBALS['conn'];
    $sql = "SELECT MAX(car_price) FROM `car_tbl`";
    $result = $conn->query($sql);
    return $result->fetch_assoc()['MAX(car_price)'];
}
