<?php
include("config.php");
if (isset($_POST['submit'])) {

    $student_name = filter_input(INPUT_POST, 'student_name', FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($student_name)) {
      echo "<div class='btn btn-danger alert alert-danger alert-dismissible '>
      <button type='button' class='btn-close' 'data-bs-dismiss='alert'></button>
      <strong>Error!</strong> Name is required.
    </div>";
      exit();
  }



    $student_username = $_POST['student_username'];
    if (empty($student_username)) {
      echo "<div class='btn btn-danger alert alert-danger alert-dismissible '>
      <button type='button' class='btn-close' 'data-bs-dismiss='alert'></button>
      <strong>Error!</strong> Username is required.
    </div>";
      exit();
  }

    $student_cnic = $_POST['student_cnic'];

   // Already Exist Record Query //

    $already_exist = "SELECT student_cnic FROM students WHERE student_cnic = '$student_cnic'";
    $already_exist = mysqli_query($db_con , $already_exist );
    $get_num_of_rows = mysqli_num_rows($already_exist);
    if($get_num_of_rows > 0){
        echo "<div class='btn btn-danger alert alert-danger alert-dismissible '>
        <button type='button' class='btn-close' 'data-bs-dismiss='alert'></button>
        <strong>Error!</strong> This Cnic is already exsit.
      </div>";
        exit();


    }

    $student_passward = $_POST['student_passward'];
    $student_mobile = $_POST['student_mobile'];
    $student_address = $_POST['student_address'];
    $student_city = $_POST['student_city'];
    $student_gender = $_POST['student_gender'];
    $student_zip = $_POST['student_zip'];
    $student_status = '1';
   
   $sql = "INSERT INTO students (`student_name`, `student_cnic`,`student_username`,`student_passward`, `student_mobile`,`student_address`,`student_city`,`student_gender`,`student_zip`,`student_status`) 
        VALUES('$student_name', '$student_cnic','$student_username' ,'$student_passward' , '$student_mobile','$student_address' ,'$student_city' ,'$student_gender','$student_zip' ,'$student_status')";

    $result = mysqli_query($db_con, $sql);
    if ($result) {
        echo "data insert";

        header("location:showdata.php");
    } else {
        ("not insert");
    }
}


?>