


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap files -->

      <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <script src="./Bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Register your account</title>
    <style>
        body{
            background-color: lightgray;
        }
    
    </style>
</head>
<body style="font-family:cursive;">
    <!-- navbar code start -->
   
    <!-- Form code start -->

    <form class="container" action="./include.php" method="POST">
        <h3 class="container-fluid mt-4 text-center bg-danger p-3" style=" color:white; ">Registration Form</h2>
            <div class="container-fluid mt-3">
                <div class="row">
                    <!-- -------Name----- -->
                    <div class="col-lg-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" class="form-control border border-danger shadow-none" id="email" placeholder="Enter name" name="student_name">
                        </div>
                    </div>
                    <!-- -----Father_name------ -->
                    <div class="col-lg-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Username Name</label>
                            <input type="text" class="form-control border border-danger shadow-none" id="email" placeholder="Enter User name" name="student_username">
                        </div>
                    </div>
                    <!-- -------Cnic------ -->
                    <div class="col-lg-4">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">City:</label>
                            <input type="text" required class="form-control border border-danger shadow-none" id="email"  placeholder="Enter City" name="student_city">
                        </div>
                    </div>
                 
                    <!-- -------Gender------ -->
                    <div class="row">
                         <!-- -------Mobile------ -->
                    <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">zip:</label>
                            <input type="number" required class="form-control border border-danger shadow-none" id="email" placeholder="Enter ZIP" name="student_zip">
                        </div>
                    </div>
                           <!-- -------Mobile------ -->
                           <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Passward:</label>
                            <input type="passward" required class="form-control border border-danger shadow-none" id="email"  placeholder="Enter Passward" name="student_passward">
                        </div>
                    </div>
                           <!-- -------Mobile------ -->
                           <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">CNIC:</label>
                            <input type="text" required class="form-control border border-danger shadow-none" id="email" data-inputmask="'mask':'9999-99999999-9'" placeholder="XXXX-XXXXXXX-x" name="student_cnic">
                        </div>
                    </div>
                           <!-- -------Mobile------ -->
                           <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">mobile:</label>
                            <input type="text" required class="form-control border border-danger shadow-none" id="email" data-inputmask="'mask':'9999-99999999'" placeholder="XXXX-XXXXXXX" name="student_mobile">
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Gender</label>
                            <select name="student_gender" id="" class="form-control border border-danger shadow-none">
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
                            <input type="text" class="form-control border border-danger shadow-none " id="email" placeholder="Enter your address" name="student_address">
                        </div>
                    </div>
                    <!-- -------Button------- -->
                    &nbsp;&nbsp;&nbsp; <button type="submit" name="submit" class="btn btn-danger mt-3 " style="width: 15%; color:white;">Submit</button>

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
</body></html>