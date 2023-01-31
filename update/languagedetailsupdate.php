<?php
// connection to the database 
// include('../db_connection.php');
$id = $_GET['id'];
if(isset($_POST['update'])){
$rFirst_Language = $_POST['first_Language'];
$rSecond_Language = $_POST['second_Language'];
$rThird_Language = $_POST['third_Language'];
$rForth_Language = $_POST['forth_Language'];

  $sql = "UPDATE `languagedetails` SET `rFirstLanguage`='$rFirst_Language',`rSecondLanguage`='$rSecond_Language',`rThirdLanguage`='$rThird_Language',`rForthLanguage`='$rForth_Language' WHERE id ='$id'";
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



<!-- start new update for languagedetails query from here  -->

<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
                <div class="row" id="rowStyle">
                  <!-- start second AGPS सँगको विवरण form section from here  -->
                  <div class="row">
                  <?php 
    $conn = connectMyDB();
   $id = $_GET['id'];
   $sql = "select * from languagedetails where intro_id ='$id'";
   $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-12 col-sm-12 mt-2">
                      <span class="SpanStyle">
                        <label for="inputZip" class="form-label" style="width: 8%;">प्रथम भाषा :</label>
                        <input type="text" name="first_Language" class="form-control Language" id="inputZip" value="<?php echo $row['rFirstLanguage']; ?>">
                      </span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 col-sm-12 mt-2">
                      <span class="SpanStyle">
                        <label for="inputZip" class="form-label" style="width: 8%;">दोस्रो भाषा :</label>
                        <input type="text" name="second_Language" class="form-control Language" id="inputZip" value="<?php echo $row['rSecondLanguage']; ?>">
                      </span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 col-sm-12 mt-2">
                      <span class="SpanStyle">
                        <label for="inputZip" class="form-label" style="width: 8%;">तेस्रो भाषा :</label>
                        <input type="text" name="third_Language" class="form-control Language" id="inputZip" value="<?php echo $row['rThirdLanguage']; ?>">
                      </span>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 col-sm-12 mt-2">
                      <span class="SpanStyle">
                        <label for="inputZip" class="form-label" style="width: 8%;">चौथो भाषा :</label>
                        <input type="text" name="forth_Language" class="form-control Language" id="inputZip" value="<?php echo $row['rForthLanguage']; ?>">
                      </span>
                    </div>
                  </div>
                  <?php
                  }
                  ?>
                  <!-- end second AGPS सँगको विवरण form section from here  -->
                </div>
              <!-- </div> -->
<!-- end new update for languagedetails query from here  -->
