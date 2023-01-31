<?php
$Region = [];
   $qry = "SELECT DISTINCT `Region` FROM `center_list` ";
   $conn = connectMyDB();
   $req = mysqli_query($conn,$qry);
   if(mysqli_num_rows($req) > 0){
    $i = 0;
    while($data = mysqli_fetch_assoc($req)){
    $Region[$i] = $data['Region'];
    $i++;
   }}
 ?>

<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">

    <!-- start first AGPS सँगको विवरण form section from here  -->
    <div class="row" style="width: auto;">
        
    <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4" style="padding: 0px 5px;">
          <label for="district" class="form-label">क्षेत्र :</label>
          </div>
          <div class="col-md-8" style="padding: 0px;">
          <select name="rison" id="rison" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value="">Select..</option>
            <?php
            foreach ($Region as $a) {
              ?>
            <option value="<?php echo $a ?>"><?php echo $a ?></option>
            <?php }
            ?>
          </select>
          </div>
        </div>
    
      </div>

      <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="inputState" class="form-label">जिल्ला:</label>
          </div>
          <div class="col-md-8">
          <select name="agpsDistrict" id="agpsdistrict" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value>Select&nbsp;&nbsp;</option>
          </select>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-4">
          <label for="d_center" class="form-label">केन्द्र:</label>
          </div>
          <div class="col-md-8">
          <!--<input type="text" name="d_Center" class="form-control centerAddress1 centerAddress2 InputStyle"  id="d_center">        -->
          <select name="agpscenter" id="d_center" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option value>Select&nbsp;&nbsp;</option>
          </select>
          </div>
        </div>
      
      </div>
      
      <div class="col-md-3 col-sm-12 mt-2">
       <div class="row">
        <div class="col-md-4" style="padding: 0px 5px;">
        <label for="inputZip" class="form-label">ज्ञान प्राप्त साल:</label>
        </div>
        <div class="col-md-8">
        <input type="text" name="d_QualificationYears" class="form-control Years Years1 special2 InputStyle" id="inputZip">
        </div>
      </div>
      </div>
      
       <!-- start second AGPS सँगको विवरण form section from here  -->
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-3" style="padding:0px;">
          <label for="inputZip" class="form-label">स्मार्ट कार्ड नं:</label>
          </div>
          <div class="col-md-6" style="padding:0px;">
          <input type="text" name="d_SmartCardNo" class="form-control SmartCardNo SmartCardNo1 InputStyle" id="inputZip">
          </div>
        </div>
    </div>
    <!-- end second AGPS सँगको विवरण form section from here  -->
    </div>
    
    <!-- end first AGPS सँगको विवरण form section from here  -->
  </div>
</div>

<!-- vayo -->
<!-- no i have one also now  -->
<script>
  $(document).ready(function(){
    $("#rison").change(function(){
          var agpsreason=$(this).val();
        //   alert(agpsreason);
          $.ajax({
                type: 'POST',
                url: 'library/agps_library.php',
                data: { give_agps_district_from_server: agpsreason },
                success: function (data) {
                    console.log(data);
                    var da = JSON.parse(data);
                    if (da.status_code == '200') {
                        $("#agpsdistrict").empty();
                        $("#agpsdistrict").append('<option value="">Choose..</option>');
                        jQuery.each(da.districtAgps, function (i, District) {
                            var dis = District.District;
                            dis = dis.toUpperCase();
                            $("#agpsdistrict").append('<option value="' + dis + '" >' + dis + '</option>');
                        });
                    }
                    else {
                        $("#agpsdistrict").empty();
                        $("#agpsdistrict").append('<option value="">Choose..</option>');
                    }
                }
            });
        });
        
        
        
        $("#agpsdistrict").change(function(){
          var agpsdist=$(this).val();
        //   alert(agpsdist);
          $.ajax({
                type: 'POST',
                url: 'library/agps_library.php',
                data: { give_agps_center_from_server: agpsdist },
                success: function (data) {
                    console.log(data);
                    var da = JSON.parse(data);
                    if (da.status_code == '200') {
                        $("#d_center").empty();
                        $("#d_center").append('<option value="">Choose..</option>');
                        jQuery.each(da.centerAgps, function (i, center_list) {
                            var center = center_list.Center;
                            center = center.toUpperCase();
                            $("#d_center").append('<option value="' + center + '" >' + center + '</option>');
                        });
                    }
                    else {
                        $("#d_center").empty();
                        $("#d_center").append('<option value="">Choose..</option>');
                    }
                }
            });
        });
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
