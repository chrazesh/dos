<?php
//  Connection to the database 
// include('../introductiondetails.php');
 include('../db_connection.php'); 
  $id = $_GET['id'];
    // $conn = connectMyDB();
   if(isset($_POST['update'])){
    $rName = $_POST ['name'];
    $rNameCapital = $_POST['nameCapital'];
    $rDOB = $_POST['dob'];
    $rEdate = $_POST['eDate'];
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
    $sql ="UPDATE `introductiondetails` SET `rName`='$rName',`rNameCapital`='$rNameCapital',`rDOB`='$rDOB',`eDate`='$rEdate',`rNational`='$Nationality',`rEducation`='$Qualification',`rProfession`='$Profession',`rGender`='$Gender',`rSpecialAbility`='$SpecialAbility',`rMarital`='$MarriedStatus',`rMotherToungue`='$MotherToungue',`rCitizenshipNo`='$CitizenshipNo',`rIssuedDate`='$IssuedDate',`rIssuedLocation`='$issuedLocation' WHERE id='$id'";
    $conn = connectMyDB();
   $result = mysqli_query($conn,$sql);
   if(isset($result)){
    echo"<script>alert('Sure you want to update your data now'); 
    window.location.href='../dosReport/dos_report.php';
    </script>
    ";
  } else{
    echo "Data has not been updated";
  }
  
}
?>
<!-- Start Introduction section from here  -->

<!-- start new update code for introduction part -->
<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
  <!-- <form action="" method="POST"> -->
    <!-- start passport size photo code line from here  -->
          <div class="row">

          <?php 
    $conn = connectMyDB();
   $id = $_GET['id'];
   $sql = "select * from introductiondetails where id='$id'";
   $result = mysqli_query($conn, $sql);
   while($row=mysqli_fetch_assoc($result)){
   ?>

            <div class="col-md-2" style="font-size: 12px; font-weight: bolder;">(Passport Size photo)</div>
          <div class="mb-3 col-md-10">
  <!-- <label for="formFile" class="form-label">Default file input example</label> -->
  <input class="form-control" type="file" id="formFile">
</div>
          </div>
<!-- end passport size photo code line from here  -->
    <div class="row">
      <div class="col-md-12 col-sm-12 mt-2" id="Name">

        <div class="row">
          <div class="col-md-2">
          <label for="rName">नाम थर: </label>
          </div>
          <div class="col-md-10">
          <input type="text" name="name" id="rName" class="form-control InputStyle Language" value="<?php echo $row['rName']; ?>" required> 
          </div>
        </div>
    
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 mt-2">
       <div class="row">
        <div class="col-md-2">
        <label for="inputEmail4" class="form-label">Name (In Block Letter):</label>
        </div>
        <div class="col-md-10">
        <input type="text" class="form-control InputStyle" name="nameCapital" id="inputEmail4" oninput="this.value = this.value.toUpperCase()" value="<?php echo $row['rNameCapital']; ?>" required>
        </div>
       </div>  

      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-12 mt-2">
       <div class="row">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">जन्म मिति: बि.सं.</label>
        </div>
        <div class="col-md-6">
        <input type="date" class="form-control InputStyle" id="miti" name="dob" value="<?php echo $row['rDOB']; ?>" required>
        </div>
       </div>
       
      </div>
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-1" style="padding: 0px;">
          <label for="inputState" class="form-label">ई.सं.</label>
          </div>
          <div class="col-md-11">
          <input type="date" class="form-control InputStyle" id="defaultdate" name="eDate" value="<?php echo $row['eDate']; ?>" required>
          </div>
        </div>
        
      </div>
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-2">
          <label for="inputZip" class="form-label">राष्ट्रियता:</label>
          </div>
          <div class="col-md-10">
          <!-- <input type="text" class="form-control InputStyle" id="inputZip" name="nationality" required> -->
          <select name="nationality" id="nationality" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value="<?php echo $row['rNational']; ?>"><?php echo $row['rNational']; ?>&nbsp;&nbsp;</option>
            <?php
            $qry = "SELECT DISTINCT `COL 1` as country FROM `country`";
            $con = connectMyDB();
            $req = mysqli_query($conn,$qry);
            if(mysqli_num_rows($req) > 0){
              while($data = mysqli_fetch_assoc($req)){
            ?>
            <option value="<?php echo $data['country'] ?>"><?php echo $data['country'] ?></option>
            <?php 
            }}
            ?>
          </select>
          </div>
        </div>
        
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-6">
          <label for="inputState" class="form-label">शैक्षिक याेग्यता:</label>
          </div>
          <div class="col-md-6">

          <!-- start selector option code line from here  -->
          <select id="education" name="qualification" class="form-select" style="font-weight: bold; font-size: 12px;">
  <option value="<?php echo $row['rEducation']; ?>"><?php echo $row['rEducation']; ?></option>
  <option value="SEE Clear">SEE Clear</option>
  <option value="volvo">SEE Running</option>
  <option value="SEE Running">+2 Clear</option>
  <option value="+2 Running">+2 Running</option>
  <option value="Bachelor Degree">Bachelor Degree</option>
  <option value="Bachelor Running">Bachelor Running</option>
  <option value="Master Degree">Master Degree</option>
  <option value="Master Running">Master Running</option>
  <option value="PHD Clear">PHD Clear</option>
  <option value="Other" id="Other">Other</option>   
  <!-- <p id="OtherEducation"><input type="text" value=""></p>    -->
</select>
            <!-- end selector option code line  from here -->
    </div>
       
      </div>
  </div>
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-1" style="padding:0px;">
          <label for="inputCity" class="form-label">पेशा:</label>
        </div>
        <div class="col-md-11">
     
            <!--  <input type="text" class="form-control InputStyle" id="inputCity" name="profession" required> -->
          <select name="profession" id="profession" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value="<?php echo $row['rProfession']; ?>"><?php echo $row['rProfession']; ?>&nbsp;&nbsp;</option>
            <?php
            $qry = "SELECT DISTINCT `COL 1` as profession FROM `profession`";
            $con = connectMyDB();
            $req = mysqli_query($conn,$qry);
            if(mysqli_num_rows($req) > 0){
              while($data = mysqli_fetch_assoc($req)){
            ?>
            <option value="<?php echo $data['profession'] ?>"><?php echo $data['profession'] ?></option>
            <?php 
            }}
            ?>
          </select>
          </div>
        </div>
       </div>
      <!-- </div> -->

      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-2">
          <label for="inputCity" class="form-label">लिङ्ग:</label>      
          </div>
          <div class="col-md-10">
         <input type="radio" name="gender" id="Male" class="checked" value="पुरुष" <?php if ($row['rGender'] == 'पुरुष') {
          echo "checked";} ?>>
         <label for="पुरुष" id="lblMale" class="clsgender" data-rdb="Male">पुरुष</label>  
         <input type="radio" name="gender" id="Female" class="checked" value="महिला" <?php if ($row['rGender'] == 'महिला') {echo "checked";} ?>>
          <label for="महिला" id="lblFemale" class="clsgender" data-rdb="Female">महिला</label>
          <input type="radio" name="gender" id="Other" class="checked" value="अन्य" <?php if($row['rGender']=='other'){
          echo "checked";
          } ?>>
          <label for="" id="lblOther" class="clsgender" data-rdb="Other">अन्य</label>
          </div>
        </div>
       
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 mt-2">
        <div class="row">
          <div class="col-md-2">
          <label for="inputState" class="form-label">विशेष याेग्यता:</label>
          </div>
          <div class="col-md-10">
          <input type="text" class="form-control InputStyle" id="inputZip" name="specialAbility" value="<?php echo $row['rSpecialAbility']; ?>" required>
          </div>
        </div>
          
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="inputCity" class="form-label">वेवाहिक अवस्था:</label>
          </div>
          <div class="col-md-8">
          <input type="radio" name="maritalStatus" id="Married" value="विवाहित" <?php if ($row['rMarital'] == 'विवाहित') {echo "checked";} ?>>
          <label for="विवाहित" class="clsMaritalStatus" data-rdb="Married">विवाहित</label> 
          <input type="radio" name="maritalStatus" id="Unmarried" value="अविवाहित" <?php if ($row['rMarital'] == 'अविवाहित') {echo "checked";} ?>>
          <label for="अविवाहित" class="clsMaritalStatus" data-rdb="Unmarried">अविवाहित</label> 
          <input type="radio" name="maritalStatus" id="Other1" value="अन्य" <?php if ($row['rMarital'] == 'अन्य') {echo "checked";} ?>>
          <label for="अन्य" class="clsMaritalStatus" data-rdb="Other1">अन्य</label>
          </div>
          </div>
        </div>
     

      <div class="col-md-6 mt-2">
        <div class="col-md-2">
        <label for="inputZip" class="form-label">मातृ भाषा:</label>
        </div>
          <div class="col-md-10" style="padding: 0px;">
          <input type="text" class="form-control InputStyle" id="inputZip" name="motherToungue" value="<?php echo $row['rMotherToungue']; ?>" required>
          </div>
      
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 mt-2">

      <div class="row">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">नागरिकता नं:</label>
        </div>
        <div class="col-md-6">
        <input type="text" class="form-control CitizenhipNo  InputStyle" id="inputCity" name="citizenshipNo" value="<?php echo $row['rCitizenshipNo']; ?>" required>
        </div>
      </div>
     
      </div>
      <div class="col-md-4 mt-2">
       <div class="row">
        <div class="col-md-4">
        <label for="inputState" class="form-label">जारी गरेको मिति:</label>
        </div>
        <div class="col-md-8">
        <input type="date" class="form-control InputStyle" id="inputCity" name="issuedDate" value="<?php echo $row['rIssuedDate']; ?>" required>
        </div>
       </div>
        
      </div>
      <div class="col-md-4 mt-2">
         <div class="row">
          <div class="col-md-4">
          <label for="inputZip" class="form-label">जारी गरेको स्थान:</label>
          </div>
          <div class="col-md-8">
          <input type="text" class="form-control InputStyle" id="inputZip" name="issuedLocation" value="<?php echo $row['rIssuedLocation']; ?>" required>
          </div>
         </div>
        
      </div>
<!-- </form> -->
    </div>
    <?php
  }
                        ?>
  </div>
</div>
<!-- end introduction details section from here  -->

<script>
  $(document).ready(function(){
    $(".CitizenhipNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.CitizenhipNo').val().length >13 ){
      alert("not more than 14");
      return false;  
    } else if(e.which >= 45 && e.which <=57 && e.which != 47 && e.which != 46){
       return true;

    }else{
      alert("Only Numbers and dash (-) are allowed");
      return false;   
    }
  });
//  start date control code line in jquery from here 
  $("#miti").nepaliDatePicker({
    ndpYear: true,
    ndpMonth: true,
    ndpYearCount: 50,
    dateFormat: "YYYY-MM-DD",
    onChange: function () {
      var datestring = $("#miti").val();
      var nepDate = NepaliFunctions.BS2AD(datestring, "YYYY-MM-DD");
        $("#defaultdate").val(nepDate);
   
    }
  });

$("#defaultdate").focus(function () {
    var datestring1 = $("#defaultdate").val();
    var nepDate1 = NepaliFunctions.AD2BS(datestring1, "yy-mm-dd");
    $("#miti").val(nepDate1);
    
  });

  $(function () {
  $("#defaultdate").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: "yy-mm-dd",
    onSelect: function () {
      var datestring2 = $("#defaultdate").val();
      var nepDate2 = NepaliFunctions.AD2BS(datestring2, "yy-mm-dd");
      $("#miti").val(nepDate2);
    },
  });
  $( "#defaultdate" ).datepicker( "input", "showAnim", $( this ).val() );

});

//  end date control code line in jquery from here 
  });
</script>
<!-- end new update code for introduction part -->





