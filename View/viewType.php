<?php require "header.php" ?>
<?php require "../Controller/sql_fun.php" ?>

<div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid pt-5">
            <table class="table table-bordered table-stripped w-50 mx-auto">
                <thead>
                    <tr class="bg-secondary">
                        <th>Type_Id</th>
                        <th>Type_Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = get_all_type();
                    while ($row = $result->fetch_assoc()) {
                        $data = '<tr>';

                        $data .= '<td>' . $row['type_id'] . '</td>';
                        $data .= '<td>' . $row['type_name'] . '</td>';
                        $data .= '<td class="d-flex justify-content-around">';
                        $data .= '<a href="editType.php?id=' . $row['type_id'] . '" class="btn btn-primary ">Edit</a>';
                        $data .= '<a href="deleteType.php?id=' . $row['type_id'] . '" class="btn btn-danger">Delete</a>';
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