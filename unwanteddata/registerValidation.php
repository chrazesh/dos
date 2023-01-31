<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap icon cdn -->
    <!-- bootstrap icon cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- bootstrap icon cdn -->
    <!-- bootstrap icon cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Register</title>
    <link rel="icon" href="assets/images/Favicon/faviconblack.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background:black">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo/ultima-logo.png" class="w-50"></a>
        </div>
        </div>
    </nav>
    <form action="#" method="post">
        <div class="row  row-cols-1 row-cols-md-2 m-3 p-3">
            <div class="col">
                <div class="col-12 text-center">
                    <img src="img/Account/112454-form-registration.gif" class="w-75"><br>
                </div>
            </div>
            <div class="col">
                <div class="col-12 me-3">
                    <div class="col-9 text-center mt-3 m-auto"
                        style="padding: 1rem;border-radius: 10px;box-shadow: 0px 0px 10px black;">
                        <div class="col-12 fw-bold text-center p-1">
                            <span class="fs-1">Register</span><br>
                            <span>Please fill in the fields below:</span>
                        </div>
                        <div class=" container form-floating mb-3 w-75">
                            <input type="text" class="form-control ps-4" placeholder="First Name" name="fname"
                                minlength="2">
                            <label class="ms-4" for="floatingUsername">Username</label>
                        </div>
                        <div class=" container form-floating mb-3 w-75">
                            <input type="phone" class="form-control ps-4" placeholder="phone" name="phone"
                                minlength="10" maxlength="10"
                                onkeypress="return event.charCode>=48 && event.charCode<=57" ondrop="return false"
                                pattern="[9]{1}[6-8]{1}[0-2,4-8]{1}[0-9]{7}">
                            <label class="ms-4" for="floatingInput">Phone</label>
                        </div>
                        <div class=" container form-floating mb-3 w-75">
                            <input type="email" class="form-control ps-4" name="email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$">
                            <label class="ms-4" for="floatingInput">E-mail</label>
                        </div>
                        <div class="container form-floating w-75">
                            <input type="password" class="form-control ps-4" placeholder="Password" name="password"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8">
                            <!-- <i class="bi bi-eye-slash fs-3"  id="togglePassword" style="position: relative; bottom: 50px; left: 229px;"></i> -->
                            <label class="ms-4" for="floatingPassword">Password</label>
                        </div>
                        <div class="mt-3"><button type="submit" name="req_submit" class="btn col-5"
                                style="background:red; color:white;">Save</button></div>
                        <div class="text-center mt-3 pb-3">
                            <span>Already have an account? <a class="fw-bold" href="login.php">Login</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    include 'library/dbConnect.php';
    if (isset($_POST['req_submit'])) {
        $userfname = $_POST['fname'];
        $userphone = $_POST['phone'];
        $useremail = trim($_POST['email']);
        $userpassword = $_POST['password'];
        $encrypted_pwd = md5($userpassword); // to encrypt the password
    
        if ($userfname == "" || $userphone == "" || $useremail == "" || $encrypted_pwd == "") {
            popMsg("Input filled are empty!! Please fill the form properly.");
        } else {
            $myquery = "SELECT `email`,`phone` FROM `users` WHERE email='$useremail' or phone = '$userphone';";
            $conn = connecdataB();
            $getdata = mysqli_query($conn, $myquery) or die(mysqli_error($conn));
            if (mysqli_num_rows($getdata) > 0) {
                popMsg("Email or Phone already exists. Please try with another detail. Thank you!!");

            } else {
                // popMsg("i am in");
                $id = get_primary_id("users");
                $query = "INSERT INTO `users`( `id`,`username`, `phone`, `email`, `pass`) VALUES ($id,'$userfname','$userphone','$useremail','$encrypted_pwd ');";
                $conn = connecdataB();
                $req = mysqli_query($conn, $query) or die(mysqli_error($conn));
                echo $query;
                if ($req) {
                    popMsg("Register Success. please proceed to login.");
    ?>
    <script>window.location.href = 'login.php';</script>
    <?php
                    // header('location:login.php');
                } else if (!$req) {
                    echo mysqli_error($conn);
                    popMsg("Register Failed. Please try again.");
    ?>
    <script>window.location.href = 'register.php';</script>
    <?php
                } else {
                    echo "Something went wrong, please retry Thank you!";
                    header('location:nopage.php');
                }
            }
        }
    }

    ?>

    <!-- bootstrap cdn -->
    <!-- bootstrap cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- bootstrap cdn -->
    <!-- bootstrap cdn -->
</body>

</html>