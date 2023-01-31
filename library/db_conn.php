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
function get_Table_Data($sql)
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
function get_response($code){
    //some Imp responses
    $success = array(
    'message'=>'success',
    'status_code'=>'200',
    'data'=>'array()'
    );
    $failure = array(
    'message'=>'failure',
    'status_code'=>'201',
    'data'=>'array()'
    );
    $errore = array(
    'message'=>'errore',
    'status_code'=>'502',
    'data'=>'array()'
    );
    $response = array(
    'message'=>'unknown',
    'status_code'=>'501',
    'data'=>'array()'
    );
    //some Imp responses
    switch ($code) {
        case '200':
            return $success;
            break;
        case '201':
            return $failure;
            break;
        case '501':
            return $response;
            break;
        case '502':
            return $errore;
            break;
        case '200':
            return $success;
            break;
        default:
            return $response;
            break;
    }
}
?>
