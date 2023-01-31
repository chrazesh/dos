<?php
// include('../db_connection.php');
$id = $_GET['id'];
if(isset($_POST['update'])){
$rProvince = $_POST['province'];
$rDistrict = $_POST['district'];
$rMunicipality = $_POST['municipality'];
$rWardNo = $_POST['wardNo'];
$rTelephone = $_POST['telephoneNo'];
$rMobileNo = $_POST['mobileNo'];
$rEmail = $_POST['email'];
$sql ="UPDATE `currentaddress` SET `rWard`='$rWardNo',`rMunici`='$rMunicipality',`rProvince`='$rProvince',`rDistrict`='$rDistrict',`rTelephoneNo`='$rTelephone',`rMobileNo`='$rMobileNo',`rEmail`='$rEmail' WHERE id='$id'";
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

<!-- start new update page for currentaddressupdate code line  -->
<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
    <div class="row">
    <?php 
    $conn = connectMyDB();
   $id = $_GET['id'];
   $sql = "select * from currentaddress where intro_id='$id'";
   $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="col-md-3 col-sm-12 mt-2">

      <div class="row">
        <div class="col-md-5">
        <label for="province" class="form-label">प्रदेश :</label>
        </div>
        <div class="col-md-7">
        <select  name="province" id="province" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;" required>
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
          <select name="district" id="district" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;" required>
            <option value="<?php echo $row['rDistrict'] ?>"><?php echo $row['rDistrict'] ?>&nbsp;&nbsp;</option>
          </select>
          </div>
        </div>
    
      </div>
      <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4" style="padding:0px 5px;">
          <label for="municipality" class="form-label">न.पा/गा.पा. :</label>
          </div>
          <div class="col-md-8">
          <select name="municipality" id="municipality" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;"required>
            <option value="<?php echo $row['rMunici'] ?>"><?php echo $row['rMunici'] ?>&nbsp;&nbsp;</option>
           </select>
          </div>
        </div>
      
      </div>
      <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="wardNo" class="form-label">वाड नं. :</label>
          </div>
          <div class="col-md-8">
          <input type="text" class="form-control cWardNo cWardNo1 InputStyle" id="inputCity" name="wardNo" value="<?php echo $row['rWard'] ?>">
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
          <input type="text" name="telephoneNo" class="form-control  phoneNo phoneNo1 InputStyle" id="phoneUS" pattern="[0-9\-\(\)\s]+"  value="<?php echo $row['rTelephoneNo'] ?>">
          </div>
        </div>
      
      </div>
      <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4" style="padding: 0px 5px;">
          <label for="mobile" class="form-label">माेबाईल नं.:</label>
          </div>
          <div class="col-md-8">
          <input type="text" name="mobileNo" class="form-control MobileNo MobileNo1" id="InputStyle" value="<?php echo $row['rMobileNo'] ?>" required>
          </div>
        </div>
      
      </div>
      <div class="col-md-6 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-2" >
          <label for="email" class="form-label">इमेल:</label>
          </div>
          <div class="col-md-10">
          <input type="email" name="email" class="form-control EmailValidation EmailValidation1 InputStyle" id="EmailValidation"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,3}$" value ="<?php echo $row['rEmail'] ?>" required>
          </div>
        </div>
    
      </div>
    </div>
    <?php
    }
    ?>
  </div>
<!-- </div> -->

<!-- get district chosing province -->
<script>
 $(document).ready(function(){

  // start form validation code line in jquery from here 
  $(".cWardNo").on("keypress", function (e) {
    console.log(e.which);
    if($('.cWardNo1').val().length >1 ){
      alert("not more than 2");
      return false;  
    } else if(e.which >= 48 && e.which <=57 ){
       return true;

    }else{
      alert("Only Numbers are allowed");
      return false;   
    }
  });
  // end form validation code line in jquery from here 

 
  $("#province").change(function () {
            var province = $(this).val();
            // alert (province);
            $.ajax({
                type: 'POST',
                url: 'library/currentaddress_library.php',
                data: { give_district_from_server: province },
                success: function (data) {
                    console.log(data);
                    var da = JSON.parse(data);
                    if (da.status_code == '200') {
                        $("#district").empty();
                        $("#district").append('<option value="">Choose..</option>');
                        jQuery.each(da.address, function (i, district) {
                            var dis = district.district;
                            dis = dis.toUpperCase();
                            $("#district").append('<option value="' + dis + '" >' + dis + '</option>');
                        });
                    }
                    else {
                        $("#district").empty();
                        $("#district").append('<option value="">Choose..</option>');
                    }
                }
            });
        });


        $("#district").change(function () {
            var district = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'library/currentaddress_library.php',
                data: { give_municipality_from_server: district },
                success: function (data) {
                    console.log(data);
                    var da = JSON.parse(data);
                    if (da.status_code == '200') {
                        $("#municipality").empty();
                        $("#municipality").append('<option value="">Choose..</option>');
                        jQuery.each(da.address, function (i, municipality) {
                            var muni = municipality.municipality;
                            muni = muni.toUpperCase();
                            $("#municipality").append('<option value="' + muni + '" >' + muni + '</option>');
                        });
                    }
                    else {
                        $("#municipality").empty();
                        $("#municipality").append('<option value="">Choose..</option>');
                    }
                }
            });
        });
      });
</script>

<!-- end new update page for currentaddressupdate code line  -->
