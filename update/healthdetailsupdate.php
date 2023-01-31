<?php
// connection to the database 
// include('../db_connection.php');
$id = $_GET['id'];
if (isset($_POST['update'])) {
  $rBloodGroup = $_POST['blood_Group'];
  $rYesNo = $_POST['YesNo'];
  $rtextField = $_POST['text_Field'];
  $sql = "UPDATE `healthdetails` SET `rBloodGroup`='$rBloodGroup',`rChecked`=' $rYesNo',`rWrite`='$rtextField' WHERE id='$id'";
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


<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
    <div class="row">
        <?php
        $conn = connectMyDB();
        $id = $_GET['id'];
        $sql = "select * from healthdetails where intro_id = '$id'";
        $result = mysqli_query($conn,$sql);
         if($row=mysqli_fetch_assoc($result)){
        ?>
      <div class="col-md-4 col-sm-12 mt-2">
        <span class="SpanStyle">
          <label for="inputState" class="form-label" style="width: 30%;">रक्त समुह:</label>
          <input type="text" name="blood_Group" class="form-control InputStyle" id="inputCity" value="<?php echo $row['rBloodGroup'];?>">
        </span>
      </div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <h4 style="width: 100%;">तपाईलाई स्वास्थ्य सम्बन्धी केही समस्या छ ? <span><input type="checkbox" name="YesNo"
                value="छ" <?php if ($row['rChecked'] == 'छ') {echo "checked"; } ?>><label for="">&nbsp;छ</label></span>&nbsp;<span><input type="checkbox" name="YesNo"
                value="छैन" <?php if ($row['rChecked'] == 'छैन') {echo "checked"; } ?>><label for="">&nbsp;छैन</label></span>&nbsp; ( यदी भए उल्लेख गर्नुहोस । )</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 mt-2">
        <span class="SpanStyle">
          <input type="text" name="text_Field" class="form-control InputStyle" id="inputCity" value="<?php echo $row['rWrite'];?>">
        </span>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
<!-- </div> -->