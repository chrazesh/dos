<?php
// include('../db_connection.php');
$id = $_GET['id'];
if(isset($_POST['update'])){
$rProvince = $_POST['province'];
$rDistrict = $_POST['district'];
$rMunicipality = $_POST['municipality'];
$rWardNo = $_POST['WardNo'];
$rTelephone = $_POST['TelephoneNo'];
$rMobileNo = $_POST['mobileNo'];
$rEmail = $_POST['email'];
$sql ="UPDATE `currentaddress` SET `rWard`='$rWardNo',`rMunici`='$rMunicipality',`rProvince`='$rProvince',`rDistrict`='$rDistrict',`rTelephoneNo`='$rTelephone',`rMobileNo`='$rMobileNo',`rEmail`='$rEmail' WHERE id = '$id'";
$conn = connectMyDB();
 $result = mysqli_query($conn, $sql);
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
<!-- start new update query for permanentaddress code line from here  -->
<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">

    <div class="row">
    <?php 
  $conn = connectMyDB();
   $id = $_GET['id'];
   $sql = "select * from permanentaddress where intro_id ='$id'";
   $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
    <!-- bikes -->
      <div class="col-md-3 col-sm-12 mt-2">
        
      <div class="row">
        <div class="col-md-5">
        <label for="province" class="form-label">प्रदेश :</label>
        </div>
        <div class="col-md-7">
        <select  name="province" id="perProvince" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;" required>
            <option value="<?php echo $row['rProvince'] ?>"><?php echo $row['rProvince'] ?>&nbsp;&nbsp;</option>
            <?php
            $qry = "SELECT DISTINCT `COL 3`as province FROM `address_1`;";
            $con = connectMyDB();
            $req = mysqli_query($conn, $qry);
            if (mysqli_num_rows($req) > 0) {
              while ($data = mysqli_fetch_assoc($req)) {
                ?>
            <option value="<?php echo $data['province']; ?>"><?php echo $data['province']; ?></option>
            <?php
              }
            }
            ?>
          </select>
        </div>
      </div>
       
      </div>

      <div class="col-md-3 col-sm-12 mt-2">
         <div class="row">
          <div class="col-md-4" style="padding: 0px 5px;">
          <label for="district" class="form-label">जिल्ला :</label>
          </div>
          <div class="col-md-8">
          <select name="district" id="perDistrict" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value="<?php echo $row['rDistrict'] ?>"><?php echo $row['rDistrict'] ?>&nbsp;&nbsp;</option>
          </select>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-12 mt-2">
      <div class="row">
          <div class="col-md-3" style="padding:0px 5px;">
          <label for="municipality" class="form-label">न.पा/गा.पा.:</label>
          </div>
          <div class="col-md-9">
          <select name="municipality" id="perMunicipality" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value="<?php echo $row['rMunici']?>"><?php echo $row['rMunici']?>&nbsp;&nbsp;</option>
           </select>
          </div>
        </div>
      </div>

      <div class="col-md-2 col-sm-12 mt-2">
      <div class="row">
          <div class="col-md-4" style="padding: 0px 5px;">
          <label for="wardNo" class="form-label">वाड नं. :</label>
          </div>
          <div class="col-md-8">
          <input type="text" class="form-control WardNo1 WardNo2 InputStyle" id="inputCity" name="pWardNo" value="<?php echo $row['rWard'] ?>" required>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-3 col-sm-12 mt-2">
      <div class="row">
          <div class="col-md-5">
          <label for="telephone" class="form-label">टेलिफोन नं.:</label>
          </div>
          <div class="col-md-7">
          <input type="text" name="pTelephoneNo" class="form-control pPhoneNo2 pPhoneNo3 InputStyle" id="TelephoneNo" value="<?php echo $row['rTelephoneNo'] ?>">
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 mt-2">
      <div class="row">
          <div class="col-md-4" style="padding: 0px 5px;">
          <label for="mobile" class="form-label">माेबाईल नं.:</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="mobileNo" class="form-control pMobileNo pMobileNo1 InputStyle" id="MobileNo" value="<?php echo $row['rMobileNo'] ?>" required>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 mt-2">
      <div class="row">
          <div class="col-md-2">
          <label for="email" class="form-label">इमेल:</label>
          </div>
          <div class="col-md-10">
          <input type="email" name="email" class="form-control InputStyle" id="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$" value ="<?php echo $row['rEmail'] ?>" required>
          </div> 
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
<!-- </div> -->

<script>
  $(document).ready(function(){
// start validation code line in jquery from here 
$(".pMobileNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.pMobileNo1').val().length >13 ){
      alert("not more than 14");
      return false;  
    } else if(e.which >= 43 && e.which <=57 && e.which != 44 && e.which != 45 && e.which != 46 && e.which != 46 && e.which != 47 ){
       return true;

    }else{
      alert("Only Numbers and plus (+) are allowed");
      return false;   
    }
  });



  $(".pPhoneNo2").on("keypress", function (e) {
    console.log(e.which);
    if($('.pPhoneNo3').val().length >9 ){
      alert("not more than 10");
      return false;  
    } else if(e.which >= 45 && e.which <=57 && e.which != 47 && e.which != 46){
       return true;

    }else{
      alert("Only Numbers and dash (-) are allowed");
      return false;   
    }
  });
  // end validation code line in jquery from here 
  // $(".pPhoneNo").on("keypress", function (e) {
  //   console.log(e.which);
  //   if($('.pPhoneNo1').val().length >9 ){
  //     alert("not more than 10");
  //     return false;  
  //   } else if(e.which >= 48 && e.which <=57 ){
  //      return true;

  //   }else{
  //     alert("Only Numbers are allowed");
  //     return false;   
  //   }
  // });

// end validation code line in jquery from here 


  
  $("#perProvince").change(function () {
            var province = $(this).val();
            // alert (province);
            $.ajax({
                type: 'POST',
                url: 'library/permanentaddress_library.php',
                data: { give_district_from_servers: province },
                success: function (data) {
                    console.log(data);
                    var da = JSON.parse(data);
                    if (da.status_code == '200') {
                        $("#perDistrict").empty();
                        $("#perDistrict").append('<option value="">Choose..</option>');
                        var html = '';
                        jQuery.each(da.address, function (i, district) {
                            var dis = district.district;
                            dis = dis.toUpperCase();
                            html+='<option value="' + dis + '" >' + dis + '</option>';
                        });
                        $("#perDistrict").append(html);
                    }
                    else {
                        $("#perDistrict").empty();
                        $("#perDistrict").append('<option value="">Choose..</option>');
                    }
                }
            });
        });


        $("#perDistrict").change(function () {
            var district = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'library/permanentaddress_library.php',
                data: { give_municipality_from_servers: district },
                success: function (data) {
                    console.log(data);
                    var da = JSON.parse(data);
                    if (da.status_code == '200') {
                        $("#perMunicipality").empty();
                        $("#perMunicipality").append('<option value="">Choose..</option>');
                        jQuery.each(da.address, function (i, municipality) {
                            var muni = municipality.municipality;
                            muni = muni.toUpperCase();
                            $("#perMunicipality").append('<option value="' + muni + '" >' + muni + '</option>');
                        });
                    }
                    else {
                        $("#perMunicipality").empty();
                        $("#perMunicipality").append('<option value="">Choose..</option>');
                    }
                }
            });
        });  
       
      });
</script>

<!-- end new update query for permanentaddress code line from here  -->

