<?php
// connection to the database 
// include('../db_connection.php');
// $conn = connectMyDB();
$id = $_GET['id'];
if(isset($_POST['update'])){
$rWard = $_POST['d_WardNo'];
$rDistrict = $_POST['d_District'];
$rCenter = $_POST['d_Center'];
$rEducation = $_POST['d_QualificationYears'];
$rSmartCardNo = $_POST['d_SmartCardNo'];
  $sql = "UPDATE `agps` SET `rWard`='$rWard',`rDistrict`='$rDistrict',`rCenter`='$rCenter',`rQualificationYears`='$rEducation',`rSmartCardNo`='$rSmartCardNo' WHERE id = '$id'";
  $conn = connectMyDB();
  $result = mysqli_query($conn, $sql);
  if(isset($result)){
    echo"<script>alert('Sure you want to update your data now'); 
    window.location.href='../dosReport/dos_report.php';
    </script>
    ";
  } else{
    echo"Data has not been updated";
  }
   }
?>
<!-- start new update query for agpsupdate  -->

<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">

    <!-- start first AGPS सँगको विवरण form section from here  -->
    <div class="row" style="width: auto;">
    <?php 
    $conn = connectMyDB();
   $id = $_GET['id'];
   $sql = "select * from agps where intro_id='$id'";
   $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="inputState" class="form-label">जिल्ला:</label>
          </div>
          <div class="col-md-8">
          <select name="d_District" id="cars" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value="<?php echo $row['rDistrict']; ?>"><?php echo $row['rDistrict']; ?>&nbsp;&nbsp;</option>
            <?php
            $qry = "SELECT DISTINCT `COL 4` as district FROM `address_1`";
            $con = connectMyDB();
            $req = mysqli_query($conn, $qry);
            if (mysqli_num_rows($req) > 0) {
              while ($data = mysqli_fetch_assoc($req)) {
                ?>
            <option value="<?php echo $data['district'] ?>"><?php echo $data['district'] ?></option>
            <?php
              }
            }
            ?>
          </select>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-12 mt-2">
         <div class="row">
          <div class="col-md-4" style="padding: 0px 5px;">
          <label for="inputCity" class="form-label">वाड नं.:</label>
          </div>
          <div class="col-md-8" style="padding: 0px;">
          <input type="text" name="d_WardNo" class="form-control dWardNo dWardNo1 InputStyle" id="" value="<?php echo $row['rWard'] ?>">
          <!-- pattern="[9]{1}[6-8]{1}[0-2,4-8]{1}[0-9]{7}" -->
          </div>
         </div>
      </div>
      <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="inputZip" class="form-label">केन्द्र:</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="d_Center" class="form-control centerAddress1 centerAddress2 InputStyle" id="inputZip" value="<?php echo $row['rCenter']; ?>">
          </div>
        </div>
      
      </div>
      <div class="col-md-3 col-sm-12 mt-2">

      <div class="row">
        <div class="col-md-4" style="padding: 0px 5px;">
        <label for="inputZip" class="form-label">ज्ञान प्राप्त साल:</label>
        </div>
        <div class="col-md-8">
        <input type="text"name="d_QualificationYears" class="form-control Years Years1 special2 InputStyle" id="inputZip" value="<?php echo $row['rQualificationYears']; ?>">
        </div>
      </div>
      </div>
    </div>
    <!-- end first AGPS सँगको विवरण form section from here  -->

    <!-- start second AGPS सँगको विवरण form section from here  -->
    <div class="row">
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="inputZip" class="form-label">स्मार्ट कार्ड नं:</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="d_SmartCardNo" class="form-control SmartCardNo SmartCardNo1 InputStyle" id="inputZip" value="<?php echo $row['rSmartCardNo'];?>">
          </div>
        </div>
      </div>
    </div>
    <?php
    }    
    ?>
    <!-- end second AGPS सँगको विवरण form section from here  -->
  </div>
<!-- </div> -->

<!-- vayo -->
<!-- no i have one also now  -->
<script>
  $(document).ready(function(){
      // number validation with jquery code line here 
      $(".Years").on("keypress", function (e) {
    console.log(e.which);
    if($('.Years1').val().length >9 ){
      alert("not more than 10");
      return false;  
    } else if(e.which >= 48 && e.which <=57 ){
       return true;

    }else{
      alert("Only Numbers are allowed");
      return false;   
    }
  });


  $(".SmartCardNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.SmartCardNo1').val().length >11 ){
      alert("not more than 12");
      return false;  
    } else if(e.which >= 48 && e.which <=57 ){
       return true;

    }else{
      alert("Only Numbers are allowed");
      return false;   
    }
  });

  $(".dWardNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.dWardNo1').val().length >1 ){
      alert("not more than 2");
      return false;  
    } else if(e.which >= 48 && e.which <=57 ){
       return true;

    }else{
      alert("Only Numbers are allowed");
      return false;   
    }
  });

  $(".centerAddress1").on("keypress", function (e) {
    // console.log(e.which);
    if($('.centerAddress2').val().length >20 ){
      alert("not more than 20");
      return false;  
    } else if((e.which >= 65 && e.which <= 90) ||
    (e.which >= 97 && e.which <= 122) ||
    e.which == 32 ||
    e.which == 45 ||
    (e.which >= 40 && e.which <= 41)){
     
       return true;
    }else{
      alert("Numbers and Special Characters not allowed");
      return false;   
    }
  });

  $(".phoneNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.phoneNo1').val().length >9 ){
      alert("not more than 10");
      return false;  
    } else if(e.which >= 45 && e.which <=57 && e.which != 47 && e.which != 46){
       return true;

    }else{
      alert("Only Numbers and dash (-) are allowed");
      return false;   
    }
  });


  $(".MobileNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.MobileNo1').val().length >13 ){
      alert("not more than 14");
      return false;  
    } else if(e.which >= 43 && e.which <=57 && e.which != 44 && e.which != 45 && e.which != 46 && e.which != 46 && e.which != 47 ){
       return true;

    }else{
      alert("Only Numbers and plus (+) are allowed");
      return false;   
    }
  });

  });

  
</script>

<!-- end new update query for agpsupdate  -->
