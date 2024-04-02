

<link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>

<?php
// DATA BASE CONNECTION AND INSERT QUERY START //

$db_con = mysqli_connect("localhost", "root", "", "php_crud");

if (!$db_con) {
    die("connected to database");
}


// DATA BASE CONNECTION AND INSERT QUERY CLOSE //

?>