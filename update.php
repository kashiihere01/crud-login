<?php
// database connection
include("./config.php");
if (isset($_POST['submit'])) {

    // if(!isset($_POST['student_name']) || empty($_POST['student_name'])) {
    //     die("Name filed is required");
    // }

    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $student_username = $_POST['student_username'];
    $student_cnic = $_POST['student_cnic'];
    $student_mobile = $_POST['student_mobile'];
    $student_passward = $_POST['student_passward'];
    $student_city = $_POST['student_city'];
    $student_gender = $_POST['student_gender'];
    $student_zip = $_POST['student_zip'];
    $student_address = $_POST['student_address'];

    // update query
    // update query

    $sql = "UPDATE students SET student_name='$student_name', 
    student_username='$student_username', student_cnic='$student_cnic',student_passward='$student_passward', `student_city`='$student_city',
    student_mobile='$student_mobile', student_gender='$student_gender',student_zip='$student_zip',
     student_address='$student_address'  WHERE id=$id";
    $result = mysqli_query($db_con, $sql);
    if ($result) {
        header("Location:showdata.php");
    }
}
