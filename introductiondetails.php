 <div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
  
<!-- end passport size photo code line from here  -->
 <div class="row">
    <div class="col-md-10" style="top: 82px;">
        <div class="row">
          <div class="col-md-12 col-sm-12 mt-2" id="Name">
            <div class="row">
              <div class="col-md-3">
                <label for="rName">नाम थर: </label>
              </div>
              <div class="col-md-9">
                <input type="text" name="name" id="rName"  style="margin-left: -7%;" class="form-control InputStyle Language" required> 
              </div>
            </div>
        
          </div>
        </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 mt-2">
           <div class="row">
                <div class="col-md-3">
                    <label for="inputEmail4" class="form-label">Name (In Block Letter):</label>
                </div>
                <div class="col-md-9">
                    <input type="text" class="form-control InputStyle" name="nameCapital" id="inputEmail4" style="margin-left: -7%;" oninput="this.value = this.value.toUpperCase()" required>
                </div>
           </div>  
    
        </div>
    </div>
    </div>
    <!-- start image section from here   -->
    <div class="col-md-2" style="padding: 0px;">
        <div id="imgArea"><img id="blah" src="image_upload/img/default.jpg" alt="your image" width="100" height="119" />
          <div class="progressBar">
                <div class="bar"></div> 
                <div class="percent">0%</div>
          </div>
          <div id="imgChange"><span>Change Photo</span>
                <input type="file" accept="image/png, image/jpeg" name="image_upload_file" id="image_upload_file" onchange="uploadFile()">
                <span id="spnMessage" class="error" style="display: none;"></span>
          </div>
        </div>
    </div>
    <!-- end image section from here   -->
</div>

    <div class="row">
      <div class="col-md-4 col-sm-12 mt-2">
       <div class="row">
        <div class="col-md-6">
        <label for="inputCity" class="form-label">जन्म मिति: बि.सं.</label>
        </div>
        <div class="col-md-6">
         
            <script>
   
                  $("#defaultdate").on("blur",function(){
           
                var year = new Date().getFullYear();
            
            var newDate = $("#defaultdate").val();
          
            var nwyear = new Date(newDate).getFullYear();
          
          var ages =year-nwyear;
        //   alert(ages);
          //$("#getmiti").val(ages);
        });
            </script>
        <input type="text" class="form-control InputStyle" type="text" id="miti" placeholder="Date Of Birth" name="dob" required>
        </div>
       </div>
       
      </div>
      <div class="col-md-2 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-2" style="padding: 0px;">
          <label for="inputState" class="form-label">ई.सं.</label>
          </div>
          <div class="col-md-10">
          <input type="text" class="form-control InputStyle" id="defaultdate" name="eDate">
          </div>
        </div>
        
      </div>

      <div class="col-md-2 col-sm-12 mt-2">
        <div class="row">
          <div class="col-md-2" style="padding: 0px;">
          <label for="inputState" class="form-label">उमेर:</label>
          </div>
          <div class="col-md-10">
          <input type="text" class="form-control InputStyle" id="age" name="age" >
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
            <option>Select...&nbsp;&nbsp;</option>
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
        <?php
        $qry = "SELECT `education` FROM `education` WHERE 1";
            $con = connectMyDB();
            $req = mysqli_query($conn,$qry);
            if(mysqli_num_rows($req) > 0){
              while($data = mysqli_fetch_assoc($req)){
            ?>
            <option value="<?php echo $data['education'] ?>"><?php echo $data['education'] ?></option>
            <?php 
            }}
            ?>
            <option value="Other अन्य Specify....." class="otherField" id="Other">Other अन्य Specify.....</option>   
        </select>
            <input type="text" name="qualification" class="form-control InputStyle" id="otherEducation" style="width:145px;" placeholder="Other Education">

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
            <option>Select...&nbsp;&nbsp;</option>
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
         <input type="radio" name="gender" id="Male" class="checked" value="पुरुष">
         <label for="पुरुष" id="lblMale" class="clsgender" data-rdb="Male">पुरुष</label>  
         <input type="radio" name="gender" id="Female" class="checked" value="महिला">
          <label for="महिला" id="lblFemale" class="clsgender" data-rdb="Female">महिला</label>
          <input type="radio" name="gender" id="Other" class="checked" value="अन्य">
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
          <input type="text" class="form-control InputStyle" id="inputZip" name="specialAbility">
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
          <input type="radio" name="maritalStatus" id="Married" value="विवाहित">
          <label for="विवाहित" class="clsMaritalStatus" data-rdb="Married">विवाहित</label> 
          <input type="radio" name="maritalStatus" id="Unmarried" value="अविवाहित">
          <label for="अविवाहित" class="clsMaritalStatus" data-rdb="Unmarried">अविवाहित</label> 
          <input type="radio" name="maritalStatus" id="Other1" value="अन्य">
          <label for="अन्य" class="clsMaritalStatus" data-rdb="Other1">अन्य</label>
          </div>
          </div>
        </div>
     

      <div class="col-md-6 mt-2">
        <div class="col-md-2">
        <label for="inputZip" class="form-label">मातृ भाषा:</label>
        </div>
          <div class="col-md-10" style="padding: 0px;">
          <input type="text" class="form-control InputStyle" id="inputZip" name="motherToungue">
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
        <input type="text" class="form-control CitizenhipNo  InputStyle" id="inputCity" name="citizenshipNo">
        </div>
      </div>
     
      </div>
      <div class="col-md-4 mt-2">
       <div class="row">
        <div class="col-md-4">
        <label for="inputState" class="form-label">जारी गरेको मिति:</label>
        </div>
        <div class="col-md-8">
        <input type="text" class="form-control InputStyle" id="jariMiti" name="issuedDate" placeholder="Date of Issue">
        </div>
       </div>
        
      </div>
      <div class="col-md-4 mt-2">
         <div class="row">
          <div class="col-md-4" style="padding:0px;">
          <label for="inputZip" class="form-label">जारी गरेको स्थान:</label>
          </div>
          <div class="col-md-8">
          <input type="text" class="form-control InputStyle" id="inputZip" name="issuedLocation">
          </div>
         </div>
        
      </div>
<!-- </form> -->
    </div>
  </div>
</div>
<!-- end introduction details section from here  -->

<script>
  $(document).ready(function(){
     $(document).on("click",".otherField",function(){
     $("#education").hide();
     $("#otherEducation").show();
    });
    
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

 

  });


  
</script>