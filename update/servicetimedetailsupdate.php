<?php
// include('../db_connection.php');
  $id = $_GET['id'];
  if (isset($_POST['update'])) {
  $rLimitedTime = $_POST['limitedTime'];
  $rCertainDays = $_POST['certaindays'];
  $rCountry = $_POST['country'];
  $rInventSewa = $_POST['invent_Sewa'];
  $rEveryWeek = $_POST['every_Week'];
  $rOwnCountry1 = $_POST['own_Country1'];
  $rMoodDescription = $_POST['mood_Description'];
  $sql = "UPDATE `servicetimedetails` SET `rCertainTime`='$rLimitedTime',`rCertainDays`='$rCertainDays',`rCertainArea`='$rCountry',`rInvestmentTime`='$rInventSewa',`rInvestmentDays`='$rEveryWeek',`rPlace`='$rOwnCountry1',`rDescription`='$rMoodDescription' WHERE id = '$id'";
  $conn = connectMyDB();
  $result = mysqli_query($conn, $sql);
  if (isset($result)) {
    echo "<script>alert('Sure you want to update your data now'); 
    window.location.href='../dosReport/dos_report.php';
    </script>
    ";
  } else {
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
      $sql = "select * from servicetimedetails where intro_id = '$id'";
      $result = mysqli_query($conn, $sql);
      if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-6 col-sm-12 mt-2">
          <span class="SpanStyle">
            <label for="inputState" class="form-label" style="width:80%;">नियमित सेवका लागि दिन सक्ने समय:
            </label>
            <input type="text" class="form-control InputStyle Language" id="inputCity" name="limited_Time"
              class="TimeChecked" value="<?php echo $row['rCertainTime']; ?>">
          </span>
        </div>
        <div class="col-md-6">
          <span class="SpanStyle">
            <label for="">प्रति (हप्ता &nbsp;&nbsp;
              <input type="checkbox" name="duration" value="प्रति हप्ता" class="TimeChecked" <?php if ($row['rCertainDays'] == 'प्रति हप्ता') {
                echo "checked";
              } ?>> / अर्थ मासिक
              &nbsp;&nbsp;
              <input type="checkbox" name="duration" value="अर्थ मासिक" class="TimeChecked" <?php if ($row['rCertainDays'] == 'अर्थ मासिक') {
                echo "checked";
              } ?>> / महिना &nbsp;&nbsp; <input type="checkbox"
                name="duration" value="महिना" class="TimeChecked" <?php if ($row['rCertainDays'] == 'महिना') {
                  echo "checked";
                } ?>>&nbsp;&nbsp;) </label>

          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <span class="SpanStyle">
            <label for="">आफ्नो सहरमा मात्रै &nbsp;&nbsp;
              <input type="checkbox" name="country" value="आफ्नो सहरमा मात्रै" class="TimeChecked" <?php if ($row['rCertainArea'] == 'आफ्नो सहरमा मात्रै') {
                echo "checked";
              } ?>>&nbsp;&nbsp;आफ्नो क्षेत्रमा मात्रै
              &nbsp;&nbsp;<input type="checkbox" name="country" value="आफ्नो क्षेत्रमा मात्रै" class="TimeChecked" <?php if ($row['rCertainArea'] == 'आफ्नो क्षेत्रमा मात्रै') {
                echo "checked";
              } ?>>&nbsp;&nbsp;देशभरि जहाँसुकै
              &nbsp;&nbsp;<input type="checkbox" name="country" value="देशभरि जहाँसुकै" class="TimeChecked" <?php if ($row['rCertainArea'] == 'देशभरि जहाँसुकै') {
                echo "checked";
              } ?>>&nbsp;&nbsp;देश बाहिर <input
                type="checkbox" name="country" value="देश बाहिर" class="TimeChecked" <?php if ($row['rCertainArea'] == 'देश बाहिर') {
                  echo "checked";
                } ?>></label>
          </span>
        </div>
      </div>


      <div class="row">
        <div class="col-md-6 col-sm-12 mt-2">
          <span class="SpanStyle">
            <label for="inputState" class="form-label" style="width:80%;">इभेन्ट सेवका लागि दिन सक्ने
              समय:</label>
            <input type="text" name="invent_Sewa" class="form-control InputStyle Language" id="inputCity"
              class="TimeChecked" value="<?php echo $row['rInvestmentTime']; ?>">
          </span>
        </div>
        <div class="col-md-6">
          <span class="SpanStyle">
            <label for="">प्रति (हप्ता &nbsp;&nbsp;<input type="checkbox" name="every_Week" value="प्रति हप्ता"
                class="TimeChecked" <?php if ($row['rInvestmentDays'] == 'प्रति हप्ता') {
                  echo "checked";
                } ?>> / अर्थ मासिक
              &nbsp;&nbsp;<input type="checkbox" name="every_Week" value="अर्थ मासिक" class="TimeChecked" <?php if ($row['rInvestmentDays'] == 'अर्थ मासिक') {
                echo "checked";
              } ?>> / महिना &nbsp;&nbsp;<input type="checkbox"
                name="ever_yWeek" value="महिना" class="TimeChecked" <?php if ($row['rInvestmentDays'] == 'महिना') {
                  echo "checked";
                } ?>>&nbsp;&nbsp;) </label>
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-sm-12">
          <span class="SpanStyle">
            <label for="">आफ्नो सहरमा मात्रै &nbsp;&nbsp;<input type="checkbox" name="own_Country1"
                value="आफ्नो सहरमा मात्रै" class="TimeChecked" <?php if ($row['rPlace'] == 'आफ्नो सहरमा मात्रै') {
                  echo "checked";
                } ?>>&nbsp;&nbsp;आफ्नो क्षेत्रमा मात्रै &nbsp;&nbsp;<input type="checkbox" name="own_Country1"
                value="आफ्नो क्षेत्रमा मात्रै" class="TimeChecked" <?php if ($row['rPlace'] == 'आफ्नो क्षेत्रमा मात्रै') {
                  echo "checked";
                } ?>>&nbsp;&nbsp;देशभरि जहाँसुकै &nbsp;&nbsp;<input type="checkbox" name="own_Country1"
                value="देशभरि जहाँसुकै" class="TimeChecked" <?php if ($row['rPlace'] == 'देशभरि जहाँसुकै') {
                  echo "checked";
                } ?>>&nbsp;&nbsp;देश बाहिर <input type="checkbox" name="own_Country1" value="देश बाहिर"
                class="TimeChecked" <?php if ($row['rPlace'] == 'देश बाहिर') {
                  echo "checked";
                } ?>></label>
          </span>
        </div>
      </div>
      <div class="row">
        <label for="">कैफियत :</label>
        <div class="col-md-12">
          <textarea name="mood_Description" id="" cols="120" rows="10" <?php echo $row['rDescription']; ?>></textarea>
        </div>
      </div>
      <?php
      }
      ?>
  </div>
</div>

<script>
  $(document).ready(function () {
    // checkbox validation  js code 
    // $('input[type="checkbox"]').on('change', function () {
    //   $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    //          });

    // checkbox validation  js code 
    $('.TimeChecked').on('change', function () {
      $('input[name="' + this.name + '"]').not(this).prop('checked', false);
    });
  });

  $(".clsgender").on("click", function () {
    var id = $(this).data("rdb");
    $("#" + id).prop("checked", "checked");
    // alert("checked");
  });
</script>