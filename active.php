<?php

include("config.php");
$id = $_GET["id"];

if(!empty($id)){

    $active_status = "UPDATE students SET `student_status` = 1 WHERE id = '$id'";
    $active_status_run = mysqli_query($db_con,$active_status);

    if($active_status_run){
        header("Location:showdata.php");
    }

}

?>