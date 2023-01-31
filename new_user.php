<?php
 include('db_connection.php');
 $conn = connectMyDB();
 if(isset($_POST['Submit'])){
    $UserName =$_POST['User_Name'];
    $userPass =$_POST['User_Password'];
    if($UserName=="" || $userPass==""){
      $regmsg = '<div class="alert alert-danger" role="alert" style="padding:0px; margin:0px;">
                  Username and Password must be filled out !!!
           </div>';;
    }else{
       $new_userQRY = "SELECT `username` FROM `login_det` WHERE username = '".$_POST['User_Name']."'";
        $result = $conn->query($new_userQRY);
        if($result->num_rows==1){
          $regmsg = '<div class="alert alert-danger" role="alert" style="padding:0px; margin:0px;">
                  User id already existed. Enter another user id !!!
           </div>';
        }
        else{
    $new_userQRY ="INSERT INTO `login_det`(`username`, `password`) VALUES ('$UserName','$userPass')";
       if($conn->query($new_userQRY)==TRUE){
            $regmsg = '<div class="alert alert-success" role="alert" style="padding:0px; margin:0px;">
                New User Created Successfully !
           </div>';
           }else{
            $regmsg = '<div class="alert alert-danger" role="alert" style="padding:0px; margin:0px;">
               New user has not been created successfully !
           </div>';
           }
    }
 }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login_Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
 <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://kit.fontawesome.com/9a86d78b3d.js" crossorigin="anonymous"></script>
</head>

<body style="overflow-x:hidden" >
    <nav class="navbar navbar-expand-lg" style="background-color: #e1e1e1;">
  <div class="container-fluid">
    <a class="navbar-brand text-dark fw-bold fs-2" href="index_dashboard.php">DOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      </div>
    </div>
          <div style="display:flex; justify-content: center;">
              <a href="logout.php" style="color:black; text-decoration:none;">Logout &nbsp; <i class="fa-solid fa-right-from-bracket mt-2"></i></a>
      </div>
  </div>
</nav> 
<?php 
 if(isset($regmsg)){echo $regmsg;}
?>
    <div class="row">
        <div class="col">
            <img src="img/login_account.gif" class="w-75">
        </div>
        <div class="col loginmain mt-5">
          <form action="" method="POST"  class="loginform" style="border-radius: 10px;box-shadow: 0px 0px 10px black; margin:auto 5%" >
                <div class="text-center pt-4"><span class="fw-bold fs-1">New Admin</span> <br></div>
                <div class="p-2">
            <div class="container form-floating mb-3 mt-2 w-100">
              <input type="text" class="form-control ps-4"  name="User_Name" placeholder="Username">
              <label class="ms-4" for="floatingInput">Username</label>
            </div>

            <div class="container form-floating w-100">
              <input type="password" class="form-control ps-4" name="User_Password" placeholder="Password">
              <label class="ms-4" for="floatingPassword">Password</label>
            </div>
                </div>
            <div class="mt-3 container text-center">
              <button type="submit" class="btn col-4 mb-5"  name="Submit"
                style="background:red; color:white">Submit</button>
            </div>
          </form>
        </div>
    </div>
        <!-- jquery code line from here  -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script> 
       $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    },3000).slideUp(3000);
});
</script>
</body>
</html>