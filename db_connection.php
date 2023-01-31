<?php
function connectMyDB(){
$db_host = "localhost";
$db_user = "globaltechcom_dosAdmin";
$db_password = "XtT,?abF7ase";
$db_name = "globaltechcom_dos";
 
// Create connection to the database 
 $conn = new mysqli ($db_host, $db_user, $db_password, $db_name);
//   Checking Connection 
if($conn->connect_error){
     die("Connection failed");

} 
else{
          return $conn;
     // echo "Connection Successfully To The Database";
}
}
// connectDB();
connectMyDB();

function check_if_exist($sql)
{
    $conn = connectMyDB();
    $req = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($req);
    $val = $result['result'];
    if ($val == 1) {
        return 1;
    } else if ($val == 0) {
        return 0;
    } else {
        return mysqli_error($conn);
    }
   mysqli_close($conn);
}

function get_my_Table_Data($sql)
{
  $conn = connectMyDB();
  $req = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if (!$req) {
    return 0;
  } else if (mysqli_num_rows($req) != 0) {
    $list = [];
    $i = 1;
    while ($data = mysqli_fetch_assoc($req)) {
      $list[$i] = $data;
      $i = $i + 1;
    }
    return $list;
  } else {
    return 0;
  }
}
?>
