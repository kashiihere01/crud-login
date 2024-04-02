<?php

include("config.php");
$id = $_GET["id"];
if(!empty($id)){

    $inactive_status = "UPDATE students SET student_status = 0 WHERE id = '$id'";
    $inactive_status_run = mysqli_query($db_con,$inactive_status);
    if($inactive_status_run){
        header("Location:showdata.php");
    }

}

?>