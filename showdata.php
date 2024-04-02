<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- table code start -->
     <div class="container">
        <button class="btn btn-danger mt-3  fl-end text-decoration-none"><a href="./register.php">Add Students</a></button>
     </div>
<div class="bg-danger mt-3 container">
    <h1 class="text-align-center d-flex p-3 justify-content-center">
        Student Record
    </h1>
</div>
     <table class="table mt-4 container table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">User_name</th>
            <th scope="col">Cnic</th>
            <th scope="col">Mobile</th>
            <th scope="col">passward</th>
            <th scope="col">city</th>
            <th scope="col">Gender</th>
            <th scope="col">zip</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        // Connect to the database
        include("config.php");

        // Query to fetch data from the database
        $sql = "SELECT * FROM `students`";
        $result = mysqli_query($db_con, $sql);
$sr=0;
        // Loop through the query results and display the data in the table
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $sr++;
                $id = $row['id'];
                $student_name = $row['student_name'];
                $student_username = $row['student_username'];
                $student_cnic = $row['student_cnic'];
                $student_mobile = $row['student_mobile'];
                $student_passward = $row['student_passward'];
                $student_city = $row['student_city'];
                $student_gender = $row['student_gender'];
                $student_zip = $row['student_zip'];
                $student_address = $row['student_address'];
                $student_status = $row['student_status'];

                // Update the line below to show "Active" when the status is 1
                ?>
                <tr>
                    <td><?php echo $sr; ?></td>
                    <td><?php echo $student_name; ?></td>
                    <td><?php echo $student_username; ?></td>
                    <td><?php echo $student_cnic; ?></td>
                    <td><?php echo $student_mobile; ?></td>
                    <td><?php echo $student_passward; ?></td>
                    <td><?php echo $student_city; ?></td>
                    <td><?php echo $student_gender; ?></td>
                    <td><?php echo $student_zip; ?></td>
                    <td><?php echo $student_address; ?></td>
                    <td>
                        <?php if($student_status == 1){
                        echo "<span class='badge bg-success'>Active</span>";
                    }
                    else if($student_status == 0){
                        echo "<span class='badge bg-warning'>Inactive</span>";
                    }
                    else{
                        echo "<span class='badge bg-danger'>removed</span>";
                    }
                     ?></td>
                    <td>


                    <div class="dropdown">
                            <button class="btn btn-light border border-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                --Action--
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="active.php?id=<?= $id?>">Active</a></li>
                            <li><a class="dropdown-item" href="inactive.php?id=<?= $id ?>">Inactive</a></li>
                            <li><a class="dropdown-item" href="edit.php?id=<?= $id?>">Edit</a></li>
                            <li><a class="dropdown-item" href="del.php?id=<?= $id ?>">Remove</a></li>
                            </ul>
                        </div>

                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

?>
</body></html>