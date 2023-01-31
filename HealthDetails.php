
<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
    <div class="row">
      <div class="col-md-4 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-3">
          <label for="inputState" class="form-label">रक्त समुह:</label>
          </div>
          <div class="col-md-9">
          <select name="blood_Group" id="blood_Group" class="InputStyle form-select" aria-label="Default select example" style="font-weight: bold; font-size: 12px;">
            <option>Select...&nbsp;&nbsp;</option>
            <?php
            $qry = "SELECT DISTINCT `COL 1` as bloodgroup FROM `bloodgroup`";
            $con = connectMyDB();
            $req = mysqli_query($conn,$qry);
            if(mysqli_num_rows($req) > 0){
              while($data = mysqli_fetch_assoc($req)){
            ?>
            <option value="<?php echo $data['bloodgroup'] ?>"><?php echo $data['bloodgroup'] ?></option>
            <?php 
            }}
            ?>
          </select>
          </div>
        </div>
      
      </div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h4 style="width: 100%;">तपाईलाई स्वास्थ्य सम्बन्धी केही समस्या छ ? <span><input type="checkbox" name="Yes_No"
                value="छ" class="FocusOn HealthChecked"><label for="" class="FocusOn">&nbsp;छ</label></span>&nbsp;<span><input type="checkbox" name="Yes_No"
                value="छैन" class="FocusOn1 HealthChecked"><label for="" class="FocusOn1">&nbsp;छैन</label></span>&nbsp; ( यदी भए उल्लेख गर्नुहोस । )</h4>
        </div>
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-12 col-sm-12 mt-2">
        <span class="SpanStyle">
          <input type="text" name="text_Field" class="form-control InputStyle" id="BlockOpen">
        </span>
      </div>
    </div>
  </div>
</div>

  <!-- javascript code here  -->
  <Script>
 
$(document).ready(function(){
    $(document).ready(function(){
                        // checkbox validation  js code 
      // $('input[type="checkbox"]').on('change', function () {
      //   $('input[name="' + this.name + '"]').not(this).prop('checked', false);
      //          });

            // checkbox validation  js code 
            $('.HealthChecked').on('change', function () {
        $('input[name="' + this.name + '"]').not(this).prop('checked', false);
                    });
                });
            
  $(".FocusOn").click(function(){
    $("#BlockOpen").css("display", "block");
    // $("#FocusOn").css("display","none");
  });

  $(".FocusOn1").click(function(){
    $("#BlockOpen").css("display", "none");
    // $("#FocusOn").css("display","none");
  });
});
          </Script>