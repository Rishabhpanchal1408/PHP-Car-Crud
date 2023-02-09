<?php require "../Controller/sql_fun.php" ?>
<?php require "header.php" ?>
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-5">

            <?php
            $result = get_all_car();
            if (isset($result) && !is_null($result)) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="container-fluid">
                            <div class="card">
                                <div class="row p-0">
                                    <div class="col-9"> 
                                        <img src="../uploads/' . $row['car_img'] . '" width="900" height="500" />
                                    </div>
                                    <div class="col-3">
                                        <div>
                                            <h3 class="py-2 pr-4"><b>CAR NO. ' . $row['car_id'] . '</b></h3>
                                        </div>
                                        <div>
                                            <h5><b>Car Brand - </b>' . get_single_brand($row['car_brand']) . '</h5>
                                            <h5><b>Car Model - </b>' . $row['car_model'] . '</h5>
                                            <h5><b>Car Engine - </b>' . get_single_engine($row['car_engine']) . '</h5>
                                            <h5><b>Car Color - </b>' . get_single_color($row['car_color']) . '</h5>
                                            <h5><b>Car Type - </b>' . get_single_type($row['car_type']) . '</h5>
                                            <h5><b>Car Price - </b>' . $row['car_price'] . '</h5>
                                            <a href="editCarDetails.php?id=' . $row['car_id'] . '" class="btn btn-primary ">Edit</a>
                                            <a href="deleteCarDetails.php?id=' . $row['car_id'] . '" class="btn btn-danger ">delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
            }
            ?>
        </div>
    </div>
</div>

<?php require "footer.php" ?>