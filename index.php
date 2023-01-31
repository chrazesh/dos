<?php
include('db_connection.php');
session_start();
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
    <div class="text-center fw-bold pb-2" style="background-color:#e1e1e1">
        <span class="fs-4">आत्मज्ञान प्रचार संघ</span><br>
        <span class="fs-4">Department of Sewa(DoS)</span><br>
         <span>केन्द्रीय कार्यालय, सामाखुसी, काठमाडौं</span>
    </div>
    <div class="row">
        <div class="col">
            <img src="img/63787-secure-login.gif" class="w-75">
        </div>
        <div class="col loginmain mt-5">
          <form action="" method="POST"  class="loginform" style="border-radius: 10px;box-shadow: 0px 0px 10px black; margin:auto 5%" >
                <div class="text-center pt-4"><span class="fw-bold fs-1">Login</span> <br> <span>Please enter your valid Username and Password:</span></div>
                <div class="p-2">
            <div class="container form-floating mb-3 mt-2 w-100">
              <input type="text" class="form-control ps-4"  name="uname" placeholder="Username">
              <label class="ms-4" for="floatingInput">Username</label>
            </div>

            <div class="container form-floating w-100">
              <input type="password" class="form-control ps-4" name="pass" placeholder="Password">
              <label class="ms-4" for="floatingPassword">Password</label>
            </div>
                </div>
            <div class="mt-3 container text-center">
              <button type="submit" class="btn col-4 mb-5"  name="login"
                style="background:red; color:white">Login</button>
            </div>
          </form>
        </div>
    </div>
</body>
</html>

<?php 
 $conn = connectMyDB();
if(isset($_POST['login'])){
$username=$_POST['uname'];
$password=$_POST['pass'];
$select_query="SELECT * FROM login_det WHERE username='$username'";
$query=mysqli_query($conn,$select_query);
$username_search=mysqli_num_rows($query);
if($username_search){
    $username_pass=mysqli_fetch_assoc($query);
    $pass1= $username_pass['password'];
      
      if($password==$pass1)
      {
      $_SESSION['username']=$username;
        echo"
        <script>
        window.location.href='index_dashboard.php';
        </script>
        ";
     
      }else
      {
        echo"
        <script>
        alert('wrong password');
        window.location.href='index.php';
        </script>
        ";
        

      }
}
else
{
  echo"
  <script>
  alert('invalid username');
  window.location.href='index.php';
  </script>
  ";
}

}

?>
