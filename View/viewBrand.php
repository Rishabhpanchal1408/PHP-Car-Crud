<?php require "header.php" ?>
<?php require "../Controller/sql_fun.php" ?>

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-5">
            <table class="table table-bordered table-stripped w-50 mx-auto">
                <thead>
                    <tr class="bg-secondary">
                        <th>Brand_Id</th>
                        <th>Brand_Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = get_all_brand();
                    while ($row = $result->fetch_assoc()) {
                        $data = '<tr>';

                        $data .= '<td>' . $row['brand_id'] . '</td>';
                        $data .= '<td>' . $row['brand_name'] . '</td>';
                        $data .= '<td class="d-flex justify-content-around">';
                        $data .= '<a href="editBrand.php?id=' . $row['brand_id'] . '" class="btn btn-primary ">Edit</a>';
                        $data .= '<a href="deleteBrand.php?id=' . $row['brand_id'] . '" class="btn btn-danger">Delete</a>';
                        $data .= '</td>';

                        $data .= '<tr>';

                        echo $data;
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require "footer.php" ?>