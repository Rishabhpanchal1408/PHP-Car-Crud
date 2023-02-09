<?php require "header.php" ?>
<?php require "../Controller/sql_fun.php" ?>

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-5">
            <table class="table table-bordered table-stripped w-50 mx-auto">
                <thead>
                    <tr class="bg-secondary">
                        <th>Engine_Id</th>
                        <th>Engine_Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = get_all_engine();
                    while ($row = $result->fetch_assoc()) {
                        $data = '<tr>';

                        $data .= '<td>' . $row['engine_id'] . '</td>';
                        $data .= '<td>' . $row['engine_name'] . '</td>';
                        $data .= '<td class="d-flex justify-content-around">';
                        $data .= '<a href="editEngine.php?id=' . $row['engine_id'] . '" class="btn btn-primary ">Edit</a>';
                        $data .= '<a href="deleteEngine.php?id=' . $row['engine_id'] . '" class="btn btn-danger">Delete</a>';
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