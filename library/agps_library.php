<?php
include "db_conn.php";
if (isset($_POST['give_agps_district_from_server'])) {
  $reason = $_POST['give_agps_district_from_server'];
  $check_exist = "SELECT IF (EXISTS(SELECT * FROM `center_list` WHERE `Region`='$reason'),1,0) as result;";
  $result = check_if_exist($check_exist);
  if ($result == 1) {
    $sql = "SELECT DISTINCT `District` FROM `center_list` WHERE `Region` ='$reason';";
    $data = get_Table_Data($sql);
    $response = array(
      "message" => "success",
      "status_code" => '200',
      "districtAgps" => $data
    );
    echo json_encode($response);
  } else {
    $response = get_response(501);
    echo json_encode($response);
  }
}


if (isset($_POST['give_agps_center_from_server'])) {
  $district = $_POST['give_agps_center_from_server'];
  $check_exist = "SELECT IF (EXISTS(SELECT * FROM `center_list` WHERE `District`='$district'),1,0) as result;";
  $result = check_if_exist($check_exist);
  if ($result == 1) {
    $sql = "SELECT  `Center` FROM `center_list` WHERE `District` ='$district';";
    $data = get_Table_Data($sql);
    $response = array(
      "message" => "success",
      "status_code" => '200',
      "centerAgps" => $data
    );
    echo json_encode($response);
  } else {
    $response = get_response(501);
    echo json_encode($response);
  }
}
?>