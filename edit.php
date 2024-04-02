<?php
include("config.php");

$id = $_GET['id'];
if(!empty($id)){

$sql = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($db_con , $sql);

if ($row= mysqli_fetch_assoc($result)) {
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
}
    // echo "<pre>"; print_r($result); echo "</pre>";
} else {
    header( "Location:update.php");
}
?>
   <!-- Form code start -->

   <form class="container" action="update.php"  method="post">
        <h3 class="container-fluid mt-4 text-center bg-warning" style=" color:white; ">Registration Form</h2>
            <div class="container-fluid mt-3">
                <div class="row">
                    <!-- -------Name----- -->
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    <div class="col-lg-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" class="form-control border border-warning shadow-none" id="email" placeholder="Enter name" name="student_name" value="<?php echo $student_name;?>">
                        </div>
                    </div>
                    <!-- -----Father_name------ -->
                    <div class="col-lg-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Username Name</label>
                            <input type="text" class="form-control border border-warning shadow-none" id="email" placeholder="Enter User name" name="student_username" value="<?php echo $student_username;?>">
                        </div>
                    </div>
                    <!-- -------Cnic------ -->
                    <div class="col-lg-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">City:</label>
                            <input type="text" required class="form-control border border-warning shadow-none" id="email"  placeholder="Enter City" name="student_city" value="<?php echo $student_city;?>">
                        </div>
                    </div>
                 
                    <!-- -------Gender------ -->
                    <div class="row">
                         <!-- -------Mobile------ -->
                    <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">zip:</label>
                            <input type="number" required class="form-control border border-warning shadow-none" id="email" placeholder="Enter ZIP" name="student_zip" value="<?php echo $student_zip;?>">
                        </div>
                    </div>
                           <!-- -------Mobile------ -->
                           <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Passward:</label>
                            <input type="passward" required class="form-control border border-warning shadow-none" id="email"  placeholder="Enter Passward" name="student_passward" value="<?php echo $student_passward;?>">
                        </div>
                    </div>
                           <!-- -------Mobile------ -->
                           <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">CNIC:</label>
                            <input type="text" required class="form-control border border-warning shadow-none" id="email" data-inputmask="'mask':'9999-99999999-9'" placeholder="XXXX-XXXXXXX-x" name="student_cnic" value="<?php echo $student_cnic;?>">
                        </div>
                    </div>
                           <!-- -------Mobile------ -->
                           <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">mobile:</label>
                            <input type="text" required class="form-control border border-warning shadow-none" id="email" data-inputmask="'mask':'9999-99999999'" placeholder="XXXX-XXXXXXX" name="student_mobile" value="<?php echo $student_mobile;?>">
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Gender</label>
                            <select name="student_gender" id="" class="form-control border border-warning shadow-none" value="<?php echo $student_gender;?>">
                                <option value="-1" disabled selected>Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <!-- --------Address------ -->
                    <div class="col-lg-9">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Address</label>
                            <input type="text" class="form-control border border-warning shadow-none " id="email" placeholder="Enter your address" name="student_address" value="<?php echo $student_address;?>">
                        </div>
                    </div>
                    <!-- -------Button------- -->
                    &nbsp;&nbsp;&nbsp; <button type="submit" name="submit" class="btn btn-warning mt-3 " style="width: 15%; color:white;">Submit</button>

                </div>
            </div>
    </form>

    <!-- Form code end -->

    
    <!-- masking files and function start -->

    <script src="./masking/jquery.min.js"></script>
    <script src="./masking/jquery.inputmask.bundle.js"></script>

    <script>
        $(":input").inputmask();
    </script>

    <!-- masking files and function end -->

