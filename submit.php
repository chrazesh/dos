
<?php
//  Connection to the database 
//  include('db_connection.php');
    $conn = connectMyDB();
if (isset($_POST['Save'])) {
    $get_id = "SELECT case when isnull(max(id))then 1 else  (max(id))+1 end as id FROM introductiondetails;";
    $new_id = mysqli_query($conn, $get_id);
    $intro_id = '';
    if ($new_id) {
      $id = mysqli_fetch_assoc($new_id);
      // echo "my new id. ".$id['id'];
      $intro_id = $id['id'];
    } else {
      $intro_id = 1;
    }
    //for service Department Id
    $get_id_from = "SELECT case when isnull(max(id))then 1 else  (max(id))+1 end as id FROM servicedepartment;";
    $new_id_from = mysqli_query($conn, $get_id_from);
    $new_id_is = '';
    if ($new_id) {
      $id = mysqli_fetch_assoc($new_id_from);
      // echo "my new id. ".$id['id'];
      $new_id_is = $id['id'];
    } else {
      $new_id_is = 1;
    }
    // echo "Submit Clicked";
  $path = "image_upload/profilPicture/";
  $image = basename($_FILES["image_upload_file"]["name"]);
//   echo "image aayo".$image;
  $rName = $_POST['name'];
  $rNameCapital = $_POST['nameCapital'];
  $rDOB = $_POST['dob'];
  $rEdate = $_POST['eDate'];
  $rAge = $_POST['age'];
  $Nationality = $_POST['nationality'];
  $Qualification = $_POST['qualification'];
  $Profession = $_POST['profession'];
  $Gender = $_POST['gender'];
  $SpecialAbility = $_POST['specialAbility'];
  $MarriedStatus = $_POST['maritalStatus'];
  $MotherToungue = $_POST['motherToungue'];
  $CitizenshipNo = $_POST['citizenshipNo'];
  $IssuedDate = $_POST['issuedDate'];
  $issuedLocation = $_POST['issuedLocation'];
  // $intro_id = $_POST['id'];

  // current address part 2
  $r_c_Ward = $_POST['wardNo'];
  $rProvince = $_POST['cprovince'];
  $r_c_District = $_POST['cdistrict'];
  $rMunicipality = $_POST['cmunicipality'];
  $rTelephone = $_POST['ctelephoneNo'];
  $rMobile = $_POST['cmobileNo'];
  $rEmail = $_POST['cemail'];

  //  permanent address part 3
  $r_Ward = $_POST['pWardNo'];
  $r_Province = $_POST['pprovince'];
  $r_District = $_POST['district'];
  $r_Municipality = $_POST['municipality'];
  $r_Telephone = $_POST['pTelephoneNo'];
  $r_Mobile = $_POST['pMobileNo'];
  $r_Email = $_POST['pEmail'];

  //  agps details part 4
  $rison = $_POST['rison'];
  $rDistrict = $_POST['agpsDistrict'];
  $rCenter = $_POST['agpscenter'];
  $rEducation = $_POST['d_QualificationYears'];
  $rSmartCardNo = $_POST['d_SmartCardNo'];

  //   language details part 5
  $rFirst_Language = $_POST['first_Language'];
  $rSecond_Language = $_POST['second_Language'];
  $rThird_Language = $_POST['third_Language'];
  $rForth_Language = $_POST['forth_Language'];

  //   Health details part 6
  $rBloodGroup = $_POST['blood_Group'];
  $rYesNo = $_POST['Yes_No'];
  $rtextField = $_POST['text_Field'];

  //   service attached details part 7
$ServiceDepartmentinsQuery='';

  function assign_if_exist($department,$name1,$name2)
  {
      global $intro_id;
      global $new_id_is;
      static $individual_id = 0;
      if($individual_id==0){
      $individual_id = $new_id_is;}
      if(isset($_POST['' . $name1 . '']) || isset($_POST['' . $name2 . ''])){
      $value1=0;
      $value2=0;
    if (isset($_POST['' . $name1 . ''])) {
      $value1= 1;
    }
    if (isset($_POST['' . $name2 . ''])){
      $value2= 1;
    }
    $sql = "INSERT INTO `servicedepartment` (`id`,`intro_id`, `department_name`, `experience`, `interest`) VALUES ('$individual_id',$intro_id,'$department',$value1,$value2);";// echo $sql."<br>";
    $individual_id++;
    return $sql;
      }
      else{
          return '';
      }
}

$ServiceDepartmentinsQuery .= assign_if_exist('प्रचार','p_yes','p_yes_1');
$ServiceDepartmentinsQuery .= assign_if_exist('एम्. सि.','ac_yes','ac_yes_1');
$ServiceDepartmentinsQuery .= assign_if_exist('प्रकाशन','pra_yes','pra_yes_1');
$ServiceDepartmentinsQuery .= assign_if_exist('आइ. टि','it_yes','it_yes_1');
$ServiceDepartmentinsQuery .= assign_if_exist('मोवाइल टेन्ट','mo_yes','mo_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('प्रेमी स्वागत','pre_yes','pre_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('सरसफाइ','sir_yes','sir_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('भिडियोग्रफी','vi_yes','vi_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('विजुली','bi_yes','bi_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('सुरक्षा','su_yes','su_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('अस्रिङ','aa_yes','aa_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('फोटोग्राफर','pho_yes','pho_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('प्रशिक्षक','prashi_yes','prashi_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('मेडिकल','medi_yes','medi_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('रजिष्ट्रेशन','regis_yes','regis_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('भिडियाे एडिटर','video_yes','video_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('जन सम्पर्क','jan_yes','jan_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('खरिद बिक्री','kharid_yes','kharid_yes');
$ServiceDepartmentinsQuery .=assign_if_exist('कम्प्यटर अप्रेटर','computer_yes','computer_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('अडियाे एडिटर','audio_yes','audio_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('ट्रान्सलेसन','trans_yes','trans_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('कुक','cock_yes','cock_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('टाइपिस्ट','typist_yes','typist_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('अडियाे रेकर्डिष्ट','audioRec_yes','audioRec_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('सेवा विभाग (DoS)','sewa_yes','sewa_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('क्याट्रिन हेल्पर','kyatrin_yes','kyatrin_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('सांस्कृतिक','sans_yes','sans_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('कानुन','kanun_yes','kanun_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('प्राेडक्शन','pro_yes','pro_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('आवास','awas_yes','awas_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('स्मार्ट कार्ड','smart_yes','smart_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('निर्माण','nirman_yes','nirman_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('अफिस असिस्टेन्ट','office_yes','office_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('अडियाे/भिडियाे अपरेटर','audioVideo_yes','audioVideo_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('वर्कशप (फलाम/काठ)','workshop_yes','workshop_yes_1');
$ServiceDepartmentinsQuery .=assign_if_exist('जनरल सेवा','jenral_yes','jenral_yes_1');
// echo "<hr><hr>Ham yeha hai.<hr>".$ServiceDepartmentinsQuery."<hr>";
function insert_serviceDepartment($long_sql){
    global $conn;
$sqls = explode(';',$long_sql);// echo "<hr>count array length :".count($sqls)."<br>".var_dump($sqls);
$executed_status = 0;
    foreach($sqls as $sql){
        // echo $sql.";<br>";
        if($sql!=''){
        if($conn->query($sql) == TRUE){
            $executed_status = 1;
        }else{
            echo "Problem is ".mysqli_error($conn);
            $executed_status = 0;
        }}
    }
    // echo "<hr>Execute status : ".$executed_status;
return $executed_status;
}
// print ();

  // service time details part 8
  $rLimitedTime = $_POST['limited_Time'];
  $rDuration = $_POST['duration'];
  $rCountry = $_POST['country'];
  $rInventSewa = $_POST['invent_Sewa'];
  $rEveryWeek = $_POST['every_Week'];
  $rOwnCountry1 = $_POST['own_Country1'];
  $rMoodDescription = $_POST['mood_Description'];

    // introduction part 1 
    $intro_sql = "INSERT INTO `introductiondetails`(`id`,`imagepath`,`image`,`rName`, `rNameCapital`, `rDOB`,`eDate`,`rAge`, `rNational`, `rEducation`, `rProfession`, `rGender`, `rSpecialAbility`, `rMarital`, `rMotherToungue`, `rCitizenshipNo`, `rIssuedDate`, `rIssuedLocation`) VALUES ($intro_id,'$path','$image','$rName','$rNameCapital','$rDOB','$rEdate','$rAge','$Nationality','$Qualification','$Profession','$Gender','$SpecialAbility','$MarriedStatus','$MotherToungue','$CitizenshipNo','$IssuedDate','$issuedLocation');";
    // echo $intro_sql;

    //   current address part 2 
    $current_add_sql = "INSERT INTO `currentaddress`(`intro_id`, `rWard`, `rProvince`, `rDistrict`, `rMunici`, `rTelephoneNo`, `rMobileNo`, `rEmail`) VALUES ('$intro_id','$r_c_Ward','$rProvince','$r_c_District','$rMunicipality','$rTelephone','$rMobile','$rEmail');";
    // echo $current_add_sql;
    //  permanent address part 3
    $Permanent_add_sql = " INSERT INTO `permanentaddress`(`intro_id`,`rWard`, `rProvince`, `rDistrict`, `rMunici`, `rTelephoneNo`, `rMobileNo`, `rEmail`) VALUES ('$intro_id','$r_Ward','$r_Province','$r_District','$r_Municipality','$r_Telephone','$r_Mobile','$r_Email');";

    //   agps details part 4
    // $agps_details_sql = " INSERT INTO `agps`(`intro_id`, `rDistrict`, `rCenter`, `rQualificationYears`, `rSmartCardNo`) VALUES ('$intro_id','$rDistrict','$rCenter ','$rEducation',5);";
    $agps_details_sql = "INSERT INTO `agps`(`intro_id`, `reason`, `rDistrict`, `rCenter`, `rQualificationYears`, `rSmartCardNo`) VALUES ('$intro_id','$rison','$rDistrict','$rCenter','$rEducation','$rSmartCardNo');";
// echo $agps_details_sql."<hr>";
    //   language details part 5
    $language_sql = " INSERT INTO `languagedetails`(`intro_id`,`rFirstLanguage`, `rSecondLanguage`, `rThirdLanguage`, `rForthLanguage`) VALUES ('$intro_id','$rFirst_Language','$rSecond_Language','$rThird_Language','$rForth_Language');";

    //    health details part 6
    $healthdetails_sql = " INSERT INTO `healthdetails`(`intro_id`,`rBloodGroup`, `rChecked`, `rWrite`) VALUES ('$intro_id','$rBloodGroup','$rYesNo','$rtextField');";

    //    service attached details part 7 
    // echo "<hr><hr>Ham yeha hai.<hr>".$ServiceDepartmentinsQuery."<hr>";
    //  service time details part 8
    $service_time_sql = "INSERT INTO `servicetimedetails`(`intro_id`,`rCertainTime`, `rCertainDays`, `rCertainArea`, `rInvestmentTime`, `rInvestmentDays`, `rPlace`, `rDescription`) VALUES ('$intro_id','$rLimitedTime','$rDuration','$rCountry ','$rInventSewa','$rEveryWeek ','$rOwnCountry1','$rMoodDescription');";
// echo "<hr><hr><hr>".$service_time_sql."<hr><hr>";
   
    // echo $sql; 
    if ($conn->query($intro_sql) == TRUE) {
        // echo "<br>Executed 1 : ".$intro_sql;
      if ($conn->query($current_add_sql) == TRUE) {
        // echo "<br>Executed 2: ".$current_add_sql;
        if ($conn->query($Permanent_add_sql) == TRUE) {
        // echo "<br>Executed 3: ".$Permanent_add_sql;
          if ($conn->query($agps_details_sql) == TRUE) {
        // echo "<br>Executed 4: ".$agps_details_sql;
            if ($conn->query($language_sql) == TRUE) {
        // echo "<br>Executed 5: ".$language_sql;
              if ($conn->query($healthdetails_sql) == TRUE) {
        // echo "<br>Executed 6: ".$healthdetails_sql;
                if (insert_serviceDepartment($ServiceDepartmentinsQuery)) {
        // echo "<br>Executed 7: ".$ServiceDepartmentinsQuery;
                  if ($conn->query($service_time_sql) == TRUE) {
        // echo "<br>Executed 8: ".$service_time_sql;

                    $regmsg = '<div class="alert alert-success" role="alert">
          Data inserted successfully !!!
      </div>';
                  } else {
                    echo mysqli_error($conn);
                    $regmsg = '<div class="alert alert-danger" role="alert">
        Data has not been inserted successfully !!!
      </div>';
                  }
                }
                else{
                    echo mysqli_error($conn);
                }
              } else {
                $regmsg = '<div class="alert alert-danger" role="alert">
      Data has not been inserted successfully !!!
     </div>';
              }
            }

          }
        }
      }
    }else{
        echo "Not executed";
    }
  }

 ?>