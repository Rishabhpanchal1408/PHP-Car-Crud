<?php require "../Controller/sql_fun.php" ?>
<?php require "header.php" ?>
<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-5">
            <table class="table table-bordered table-stripped w-75 mx-auto">
                <thead>
                    <tr class="bg-secondary">
                        <th>Car_id</th>
                        <th>Car_Model</th>
                        <th>Car_Brand</th>
                        <th>Car_Type</th>
                        <th>Car_Engine</th>
                        <th>Car_Color</th>
                        <th>Car_Price</th>
                        <th>Car_IMG</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = get_all_car();
                    if (isset($result) && !is_null($result)) {
                        while ($row = $result->fetch_assoc()) {
                            $data = '<tr>';

                            $data .= '<td>' . $row['car_id'] . '</td>';
                            $data .= '<td>' . $row['car_model'] . '</td>';
                            $data .= '<td>' . get_single_brand($row['car_brand']) . '</td>';
                            $data .= '<td>' . get_single_type($row['car_type']) . '</td>';
                            $data .= '<td>' . get_single_engine($row['car_engine']) . '</td>';
                            $data .= '<td>' . get_single_color($row['car_color']) . '</td>';
                            $data .= '<td>' . $row['car_price'] . '</td>';
                            $data .= '<td><img class="w-100" src="../uploads/' . $row['car_img'] . '" /></td>';
                            $data .= '<td class="d-flex justify-content-around">';
                            $data .= '<a href="editCarDetails.php?id=' . $row['car_id'] . '" class="btn btn-primary ">Edit</a>';
                            $data .= '<a href="deleteCarDetails.php?id=' . $row['car_id'] . '" class="btn btn-danger">Delete</a>';
                            $data .= '</td>';

                            $data .= '<tr>';

                            echo $data;
                        }
                    } else {
                        echo "<tr><th colspan='9' class='text-center'>No Data Available</th></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require "footer.php" ?>
<!-- 
<div class="col-3">
    <div class="hover hover-1 text-white rounded"><img src="../uploads/' . $row['car_img'] . '" alt="">
        <div class="hover-overlay"></div>
        <div class="hover-1-content px-5 py-4">
            <h3 class="hover-1-title text-uppercase font-weight-bold mb-0"> <span class="font-weight-light">Image </span>Caption</h3>
            <p class="hover-1-description font-weight-light mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
</div> -->