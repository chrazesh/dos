<?php
include "db_conn.php";
if (isset($_POST['give_district_from_servers'])) {
  $give_district_from_server = $_POST['give_district_from_servers'];
  $check_exist = "SELECT IF (EXISTS(SELECT * FROM `address_1` WHERE `COL 3`='$give_district_from_server'),1,0) as result;";
  $result = check_if_exist($check_exist);
  if ($result == 1) {
    $sql = "SELECT distinct `col 4` as district FROM `address_1` WHERE `col 3` = '$give_district_from_server';";
    $data = get_Table_Data($sql);
    $response = array(
      "message" => "success",
      "status_code" => '200',
      "address" => $data
    );
    echo json_encode($response);
  } else {
    $response = get_response(501);
    echo json_encode($response);
  }
}

if (isset($_POST['give_municipality_from_servers'])) {
    $give_municipality_from_server = $_POST['give_municipality_from_servers'];
    $check_exist = "SELECT IF (EXISTS(SELECT * FROM `address_1` WHERE `col 4`='$give_municipality_from_server'),1,0) as result;";
    $result = check_if_exist($check_exist);
    if ($result == 1) {
      $sql = "SELECT DISTINCT `col 5` as municipality FROM `address_1` WHERE `col 4` = '$give_municipality_from_server';";
      $data = get_Table_Data($sql);
      $response = array(
        "message" => "success",
        "status_code" => '200',
        "address" => $data
      );
      echo json_encode($response);
    } else {
      $response = get_response(501);
      echo json_encode($response);
    }
  }
?>