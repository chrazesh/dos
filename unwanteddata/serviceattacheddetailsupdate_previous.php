<?php
// include('../db_connection.php');
$id = $_GET['id'];
if(isset($_POST['update'])){
$rPublicity = $_POST['1p_yes'];
$rKatrine = $_POST['1k_yes'];
$rPublicity1 = $_POST['2p_yes'];
$rKatrine1 = $_POST['2k_yes'];
$rPublicity2 = $_POST['3p_yes'];
$rKatrine2 = $_POST['3k_yes'];
$rPublicity3 = $_POST['p_yes'];
$rMc = $_POST['ac_yes'];
$rPublication = $_POST['pra_yes'];
$rIt = $_POST['it_yes'];
$rMobileTent = $_POST['mo_yes'];
$rLoverWelcome = $_POST['pre_yes'];
$rMustardCleaning = $_POST['sir_yes'];
$rVideoGraphy = $_POST['vi_yes'];
$rVijuli = $_POST['bi_yes'];
$rSecurity = $_POST['su_yes'];
$rAsring = $_POST['aa_yes'];
$rPhotographer = $_POST['pho_yes'];
$rCoach = $_POST['prashi_yes'];
$rMedical = $_POST['medi_yes'];
$rRegistration = $_POST['regis_yes'];
$rVideoEditor = $_POST['video_yes'];
$rPublicRelations = $_POST['jan_yes'];
$rBuyingAndSelling = $_POST['kharid_yes'];
$rComputerOperator = $_POST['computer_yes'];
$rAdiyeEditor = $_POST['audio_yes'];
$rTranslation = $_POST['trans_yes'];
$rCook = $_POST['cock_yes'];
$rTypist = $_POST['typist_yes'];
$rAdiyaRecorded = $_POST['audioRec_yes'];
$rDepartmentOfServices = $_POST['sewa_yes'];
$rKatrinHelper = $_POST['kyatrin_yes'];
$rCultural = $_POST['sans_yes'];
$rLaw = $_POST['kanun_yes'];
$rProduction = $_POST['pro_yes'];
$rAccommodation = $_POST['awas_yes'];
$rSmartCard = $_POST['smart_yes'];
$rConstruction = $_POST['nirman_yes'];
$rOfficeAssistant = $_POST['office_yes'];
$rAdiya = $_POST['audioVideo_yes'];
$rWorkShop = $_POST['workshop_yes'];
$rGeneralService = $_POST['jenral_yes'];
$sql = "UPDATE `serviceattacheddetails` SET `rPublicity`='$rPublicity',`rKatrine`='$rKatrine',`rPublicity1`='$rPublicity1',`rKatrine1`='$rKatrine1',`rPublicity2`='$rPublicity2',`rKatrine2`='$rKatrine2',`rPublicity3`='$rPublicity3',`rMc`='$rMc',`rPublication`='$rPublication',`rIt`='$rIt',`rMobileTent`='$rMobileTent',`rLoverWelcome`='$rLoverWelcome',`rMustardCleaning`='$rMustardCleaning',`rVideoGraphy`='$rVideoGraphy',`rVijuli`='$rVijuli',`rSecurity`='$rSecurity',`rAsring`='$rAsring',`rPhotographer`='$rPhotographer',`rCoach`='$rCoach',`rMedical`='$rMedical',`rRegistration`='$rRegistration',`rVideoEditor`='$rVideoEditor',`rPublicRelations`='$rPublicRelations',`rBuyingAndSelling`='$rBuyingAndSelling',`rComputerOperator`='$rComputerOperator',`rAdiyeEditor`='$rAdiyeEditor',`rTranslation`='$rTranslation',`rCook`='$rCook',`rTypist`='$rTypist',`rAdiyaRecorded`='$rAdiyaRecorded',`rDepartmentOfServices`='$rDepartmentOfServices',`rKatrinHelper`='$rKatrinHelper',`rCultural`='$rCultural',`rLaw`='$rLaw',`rProduction`='$rProduction',`rAccommodation`='$rAccommodation',`rSmartCard`='$rSmartCard',`rConstruction`='$rConstruction',`rOfficeAssistant`='$rOfficeAssistant',`rAdiya`='$rAdiya',`rWorkShop`='$rWorkShop',`rGeneralService`='$rGeneralService' WHERE id = '$id'";
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
    <!-- start first AGPS सँगको विवरण form section from here  -->
    <div class="row">
        <?php
        $conn = connectMyDB();
        $id = $_GET['id'];
        $sql = "select * from serviceattacheddetails where intro_id = '$id'";
        $result = mysqli_query($conn, $sql);
         while($row=mysqli_fetch_assoc($result)){
        ?>
      <div class="col-md-12 col-sm-12 mt-2">
        <h4>कृप्या तलको निर्देशिका हेरेर मात्र चिन्ह लगाउनु होस । ( नोट: अ = त्यसविभागमा सेवको अनुभव
          भएको/
          ई=त्यसविभागमा सेवा गर्नइच्छा भएको । )</h4>
        <!-- start first section from here  -->
        <div id="SewaDetails">
          <h5>निर्देशिका १: निम्न मध्ये कुनै विभागमा सेवाको अनुभव भएको र फेरि पनि त्यसै विभागमा सेवा
            गर्न
            चाहेमा देखाएको बमोजिम चिन्ह लगाउनुहोस् ।</h5>
          <div class="row">
            <div class="col-md-1">
              <label for="">प्रचार</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
               
                <input type="checkbox" name="1p_yes" value="प्रचार (अ)"  <?php if ($row['rPublicity'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
          
                <input type="checkbox" name="1p_yes" value="प्रचार (ई)" <?php if ($row['rPublicity_1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                
                <input type="checkbox" name="1k_yes" value="याट्रिन (अ)" <?php if ($row['rKatrine'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
              
                <input type="checkbox" name="1k_yes" value="याट्रिन (ई)" <?php if ($row['rKatrine_1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
            </div>
          </div>

          <!-- end first section here  -->

          <!-- start second section from here  -->
          <h5>निर्देशिका २: निम्न मध्ये कुनै विभागमा सेवाको अनुभव भएको तर अन्य विभागमा सेवा गर्न चाहेमा
            देखाएको बमोजिम चिन्ह लगाउनुहोस् ।</h5>
          <div class="row">
            <div class="col-md-1">
              <label for="">प्रचार</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                <input type="checkbox" name="2p_yes" value="प्रचार (अ)" <?php if ($row['rPublicity1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="2p_yes" value="प्रचार (ई)" <?php if ($row['rPublicity1_1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                <input type="checkbox" name="2k_yes" value="क्याट्रिन (अ)" <?php if ($row['rKatrine1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="2k_yes" value="क्याट्रिन (ई)" <?php if ($row['rKatrine1_1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
            </div>
          </div>
          <!-- End second section from here  -->

          <!-- start third section from here  -->
          <h5>निर्देशिका ३: निम्न मध्ये कुनै पनि विभागमा सेवाको अनुभव नभएको र सेवा गर्न चाहेमा इच्छाएको
            विभागमा देखाएको बमोजिम चिन्ह लगाउनुहोस् ।</h5>
          <div class="row">
            <div class="col-md-1">
              <label for="">प्रचार</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                
                <input type="checkbox" name="3p_yes" value="प्रचार (अ)" <?php if ($row['rPublicity2'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="3p_yes" value="प्रचार (ई)" <?php if ($row['rPublicity2_1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                <input type="checkbox" name="3k_yes" value="क्याट्रिन (अ)" <?php if ($row['rKatrine2'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="3k_yes" value="क्याट्रिन (ई)" <?php if ($row['rKatrine2_1'] == 'प्रचार (अ)') {echo "checked"; } ?>>
              </span>
            </div>
          </div>
          <!-- end third section from here  -->
        </div>

        <!-- Start Checkbox file included here  -->
        <?php
                        include('../Checkbox.php');
                        ?>
        <!-- End Checkbox file included here  -->

      </div>
    </div>
    <!-- end second checkbox section from here  -->
    <?php
}
?>
  </div>
</div>
</div>