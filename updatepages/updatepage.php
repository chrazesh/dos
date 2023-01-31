<?php
// Connection to the database 
// include('db_connection.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="ISO-8859-1">
  <title>Update</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="custom.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font.min.css">
  <link href="../image_upload/css/style.css" rel="stylesheet">
  <link rel="stylesheet€" href=”https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css”>
  <link rel="stylesheet" href="css/nepali.datepicker.v4.0.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <!-- <script src="customjquery.js"></script> -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <style>
    .panel-heading {
      padding: 5px 15px;
    }

    .panel-title {
      font-weight: bold;
    }

    .InputStyle {
      /* height: 22px; */
      height: 28px;
    }

    .Language {
      height: 28px;
      /* outline: hidden; */
      /* border-color: transparent; */
      /* border-bottom: 4px dotted #a7a7a7; */
      /* background-color: #f2f2f2; */
    }

    #ContainerStyle {

      border-radius: 10px;
    }

    #rowStyle {
      margin: 10px 10px 10px 10px;
      padding: 10px;
    }

    .col {
      padding: 5px;

    }

    label {
      font-size: 12px;
      font-weight: 12px;
      font-family: 'Times New Roman', Times, serif;
    }

    .SpanStyle {
      display: flex;
      flex-direction: row;
      margin: 5px;
      align-items: center;
    }

    #SewaDetails {
      width: 97%;
      height: 300px;
      border: 2px solid black;
      padding: 10px;

    }

    .YesNo {
      display: flex;
      flex-direction: column;
    }

    .CheckBoxStyle {
      display: flex;
      flex-direction: row;
    }

    .icon {
      outline: none;
      border: none;
      background: transparent;

    }

    .save {
      background-color: #a7a7a7;
      border-radius: 5px;
      color: white;
    }

    .SaveIcon {
      height: 15px;
      width: 15px;
    }


    /* start css code for report button from  here   */
    #ReportStyle {
      text-decoration: none;
      color: white;
    }

    #BlockOpen {
      display: none;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <!-- class="was-validated" -->
    <form action="" method="POST">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">परिचय विवरण</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">

              <!-- start line Included Introduction details section from here  -->
              <?php
              include('../update/introductiondetailsupdate.php');
              ?>
              <!-- end line Included Introduction details section from here  -->

            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">हालको ठेगाना</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">

              <!-- start current address line from here  -->
              <?php
              include('../update/currentaddressupdate.php');
              ?>
              <!-- start current address line from here  -->

            </div>
          </div>
        </div>
        </div><!--add this div for space-->

        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">स्थायी ठेगाना</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
              <!-- start parmanent address line from here  -->
              <?php
              include('../update/permanentaddressupdate.php');
              ?>
              <!-- start parmanent address line from here  -->
            </div>
          </div>
        </div>
        </div> <!--add this div for space-->

        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
            <h4 class="panel-title CollapseButton">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">AGPS सँगको विवरण</a>
              <!-- #collapse2 -->
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse"> <!--collapse-->
            <div class="panel-body">
              <!-- start  description with AGPS  code line from here   -->
              <?php
              include('../update/agpsupdate.php');
              ?>
              <!-- End  description with AGPS  code line from here   -->
            </div>
          </div>
        </div>
        </div><!--add this div for space-->

        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
            <h4 class="panel-title CollapseButton1">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">भाषा विवरण</a>
              <!-- #collapse2 -->
            </h4>
          </div>
          <div id="collapse5" class="panel-collapse collapse"> <!--collapse-->
            <div class="panel-body">
              <!-- Start Language Description code line from here  -->
              <?php
              include('../update/languagedetailsupdate.php');
              ?>
              <!-- Start Language Description code line from here  -->
            </div>
          </div>
        </div>
        </div><!--add this div for space-->

        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
            <h4 class="panel-title CollapseButton2">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">स्वास्थ्य विवरण</a>
              <!-- #collapse2 -->
            </h4>
          </div>
          <div id="collapse6" class="panel-collapse collapse"> <!--collapse-->
            <div class="panel-body">
              <!-- Start Health Details code line from here  -->
              <?php
              include('../update/healthdetailsupdate.php');
              ?>
              <!-- End Health Details code line from here  -->
            </div>
          </div>
        </div>
        </div><!--add this div for space-->

        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
            <h4 class="panel-title CollapseButton3">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">सेवामा संलग्न विवरण</a>
              <!-- #collapse2 -->
            </h4>
          </div>
          <div id="collapse7" class="panel-collapse collapse"> <!--collapse-->
            <div class="panel-body">
              <!-- Start Service Attached Details Code Line From Here  -->
              <?php
              include('../update/serviceattacheddetailsupdate.php');
              ?>
              <!-- End Service Attached Details Code Line From Here  -->

            </div>
          </div>
        </div>
        </div><!--add this div for space-->
        <!-- </div> -->
        <!-- </div>  -->
        <!--Bikesh kumar gupta collapesed-->

        <!-- Start सेवा समय अवधी विवरण section from here  -->
        <div class="panel panel-default">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">सेवा समय अवधी विवरण</a>
              <!-- #collapse2 -->
            </h4>
          </div>
          <div id="collapse8" class="panel-collapse collapse"> <!--collapse-->
            <div class="panel-body">
              <!-- Start Service Time Details Code Line From Here  -->
              <?php
              include('../update/servicetimedetailsupdate.php');
              ?>
              <!-- End Service Time Details Code Line From Here  -->
            </div>
          </div>
        </div>
        </div><!--add this div for space-->
      </div>
  </div>
  <!-- </div> -->
  <!-- </div> -->
  <!-- start button section from here -->
  <div class="form-group" style="padding: 10px 10px 10px 10px;">
    <label for="" class="col-md-9 control-label"></label>
    <div class="col-md-1">
      <button class="button icon save" id="btnReport"><span><a href="../dosReport/dos_report.php" id="ReportStyle"><i
              class="fa fa-file SaveIcon" aria-hidden="true"></i>&nbsp;Report</a></span> </button>
      <!-- <button class="button icon back" id="btnCancel" type="button"><span><i class="fa-solid fa-xmark"></i>&nbsp;Cancel</span></button> -->
    </div>

    <div class="col-md-2">
      <button class="button icon save" id="btnSave" type="submit" name="update"><span><i
            class="fa-solid fa-floppy-disk SaveIcon"></i>&nbsp;update</span></button>
      <!-- <button class="button icon back" id="btnCancel" type="button"><span><i class="fa-solid fa-xmark"></i>&nbsp;Cancel</span></button> -->
    </div>
  </div>
  <!-- </div> --> <!---today comment-->
  <!-- End button section from here  -->
  </form>
  <!-- </div> -->
  <!-- </div> -->
  <!-- </div> -->
  <!-- font awesome js  -->
  <script src="../js/font.min.js"></script>
  <!-- jquery js  -->
  <script src="../js/jquery.min.js"></script>
  <script src="../image_upload/js/jquery.min.js"></script>
  <script src="../image_upload/js/jquery.form.js"></script> 
  <!-- bootstrap js  -->
  <script src="../js/bootstrap.min.js"></script>
  <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v4.0.min.js" type="text/javascript"></script>
  <!-- bootstrap popper js  -->
  <!-- <script src="js/popper.min.js"></script> -->
  <script>

window.onload = function() {
                var mainInput = document.getElementById("miti");
                mainInput.nepaliDatePicker();
            }; 
            
    $(document).ready(function () {

      //  3rd collapse button 
      // $(".CollapseButton").click(function () {
      //   $(".CollapseText").slideToggle("slow").slideUp;
      //   console.log('Bikesh Kumar Gupta');
      // });

      // jquery code of gender here 
      $(".clsgender").on("click", function () {
        var id = $(this).data("rdb");
        $("#" + id).prop("checked", "checked");
        // alert("checked");
      });

      //  jQuery code of Married Status

      $(".clsMaritalStatus").on("click", function () {
        var id = $(this).data('rdb');
        $("#" + id).prop("checked", "checked");
        //  alert("you clicked me");
      });


      n = new Date();
     y = n.getFullYear();
     m = String(n.getMonth() + 1).padStart(2,"0");
     d = String(n.getDate()).padStart(2, "0");
     document.getElementById("defaultdate").value = y+ "-" + m + "-" + d;
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
    });
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>

</html>