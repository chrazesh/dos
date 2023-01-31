<?php
// include('../db_connection.php');
$id = $_GET['id'];
if(isset($_POST['update'])){$rPublicity = $_POST['1p_yes'];
  $rPublicity_1 = $_POST['1p_yes_1'];
  $rKatrine = $_POST['1k_yes'];
  $rKatrine_1 = $_POST['1k_yes_1'];
  $rPublicity1 = $_POST['2p_yes'];
  $rPublicity1_1 = $_POST['2p_yes_1'];
  $rKatrine1 = $_POST['2k_yes'];
  $rKatrine1_1 = $_POST['2k_yes_1'];
  $rPublicity2 = $_POST['3p_yes'];
  $rPublicity2_1 = $_POST['3p_yes_1'];
  $rKatrine2 = $_POST['3k_yes'];
  $rKatrine2_1 = $_POST['3k_yes_1'];
  $rPublicity3 = $_POST['p_yes'];
  $rPublicity3_1 = $_POST['p_yes_1'];
  $rMc = $_POST['ac_yes'];
  $rMc_1 = $_POST['ac_yes_1'];
  $rPublication = $_POST['pra_yes'];
  $rPublication_1 = $_POST['pra_yes_1'];
  $rIt = $_POST['it_yes'];
  $rIt_1 = $_POST['it_yes_1'];
  $rMobileTent = $_POST['mo_yes'];
  $rMobileTent_1 = $_POST['mo_yes_1'];
  $rLoverWelcome = $_POST['pre_yes'];
  $rLoverWelcome_1 = $_POST['pre_yes_1'];
  $rMustardCleaning = $_POST['sir_yes'];
  $rMustardCleaning_1 = $_POST['sir_yes_1'];
  $rVideoGraphy = $_POST['vi_yes'];
  $rVideoGraphy_1 = $_POST['vi_yes_1'];
  $rVijuli = $_POST['bi_yes'];
  $rVijuli_1 = $_POST['bi_yes_1'];
  $rSecurity = $_POST['su_yes'];
  $rSecurity_1 = $_POST['su_yes_1'];
  $rAsring = $_POST['aa_yes'];
  $rAsring_1 = $_POST['aa_yes_1'];
  $rPhotographer = $_POST['pho_yes'];
  $rPhotographer_1 = $_POST['pho_yes_1'];
  $rCoach = $_POST['prashi_yes'];
  $rCoach_1 = $_POST['prashi_yes_1'];
  $rMedical = $_POST['medi_yes'];
  $rMedical_1 = $_POST['medi_yes_1'];
  $rRegistration = $_POST['regis_yes'];
  $rRegistration_1 = $_POST['regis_yes_1'];
  $rVideoEditor = $_POST['video_yes'];
  $rVideoEditor_1 = $_POST['video_yes_1'];
  $rPublicRelations = $_POST['jan_yes'];
  $rPublicRelations_1 = $_POST['jan_yes_1'];
  $rBuyingAndSelling = $_POST['kharid_yes'];
  $rBuyingAndSelling_1 = $_POST['kharid_yes_1'];
  $rComputerOperator = $_POST['computer_yes'];
  $rComputerOperator_1 = $_POST['computer_yes_1'];
  $rAdiyeEditor = $_POST['audio_yes'];
  $rAdiyeEditor_1 = $_POST['audio_yes_1'];
  $rTranslation = $_POST['trans_yes'];
  $rTranslation_1 = $_POST['trans_yes_1'];
  $rCook = $_POST['cock_yes'];
  $rCook_1 = $_POST['cock_yes_1'];
  $rTypist = $_POST['typist_yes'];
  $rTypist_1 = $_POST['typist_yes_1'];
  $rAdiyaRecorded = $_POST['audioRec_yes'];
  $rAdiyaRecorded_1 = $_POST['audioRec_yes_1'];
  $rDepartmentOfServices = $_POST['sewa_yes'];
  $rDepartmentOfServices_1 = $_POST['sewa_yes_1'];
  $rKatrinHelper = $_POST['kyatrin_yes'];
  $rKatrinHelper_1 = $_POST['kyatrin_yes_1'];
  $rCultural = $_POST['sans_yes'];
  $rCultural_1 = $_POST['sans_yes_1'];
  $rLaw = $_POST['kanun_yes'];
  $rLaw_1 = $_POST['kanun_yes_1'];
  $rProduction = $_POST['pro_yes'];
  $rProduction_1 = $_POST['pro_yes_1'];
  $rAccommodation = $_POST['awas_yes'];
  $rAccommodation_1 = $_POST['awas_yes_12'];
  $rSmartCard = $_POST['smart_yes'];
  $rSmartCard_1 = $_POST['smart_yes_1'];
  $rConstruction = $_POST['nirman_yes'];
  $rConstruction_1 = $_POST['nirman_yes_1'];
  $rOfficeAssistant = $_POST['office_yes'];
  $rOfficeAssistant_1 = $_POST['office_yes_1'];
  $rAdiya = $_POST['audioVideo_yes'];
  $rAdiya_1 = $_POST['audioVideo_yes_1'];
  $rWorkShop = $_POST['workshop_yes'];
  $rWorkShop_1 = $_POST['workshop_yes_1'];
  $rGeneralService = $_POST['jenral_yes'];
  $rGeneralService_1 = $_POST['jenral_yes_1'];
  
  $sql = "UPDATE `serviceattacheddetails` SET `rPublicity`='$rPublicity',`rPublicity_1`='$rPublicity_1',`rKatrine`='$rKatrine',`rKatrine_1`='$rKatrine_1',`rPublicity1`='$rPublicity1',`rPublicity1_1`='$rPublicity1_1',`rKatrine1`='$rKatrine1',`rKatrine1_1`='$rKatrine1_1',`rPublicity2`='$rPublicity2',`rPublicity2_1`='$rPublicity2_1',`rKatrine2`='$rKatrine2',`rKatrine2_1`='$rKatrine2_1',`rPublicity3`='$rPublicity3',`rPublicity3_1`='$rPublicity3_1',`rMc`='$rMc',`rMc_1`='$rMc_1',`rPublication`='$rPublication',`rPublication_1`='$rPublication_1',`rIt`='$rIt',`rIt_1`='$rIt_1',`rMobileTent`='$rMobileTent',`rMobileTent_1`='$rMobileTent_1',`rLoverWelcome`='$rLoverWelcome',`rLoverWelcome_1`='$rLoverWelcome_1',`rMustardCleaning`='$rMustardCleaning',`rMustardCleaning_1`='$rMustardCleaning_1',`rVideoGraphy`='$rVideoGraphy',`rVideoGraphy_1`='$rVideoGraphy_1',`rVijuli`='$rVijuli',`rVijuli_1`='$rVijuli_1',`rSecurity`='$rSecurity',`rSecurity_1`='$rSecurity_1',`rAsring`='$rAsring',`rAsring_1`='$rAsring_1',`rPhotographer`='$rPhotographer',`rPhotographer_1`='$rPhotographer_1',`rCoach`='$rCoach',`rCoach_1`='$rCoach_1',`rMedical`='$rMedical',`rMedical_1`='$rMedical_1',`rRegistration`='$rRegistration',`rRegistration_1`='$rRegistration_1',`rVideoEditor`='$rVideoEditor',`rVideoEditor_1`='$rVideoEditor_1',`rPublicRelations`='$rPublicRelations',`rPublicRelations_1`='$rPublicRelations_1',`rBuyingAndSelling`='$rBuyingAndSelling',`rBuyingAndSelling_1`='$rBuyingAndSelling_1',`rComputerOperator`='$rComputerOperator',`rComputerOperator_1`='$rComputerOperator_1',`rAdiyeEditor`='$rAdiyeEditor',`rAdiyeEditor_1`='$rAdiyeEditor_1',`rTranslation`='$rTranslation',`rTranslation_1`='$rTranslation_1',`rCook`='$rCook',`rCook_1`='$rCook_1',`rTypist`='$rTypist',`rTypist_1`='$rTypist_1',`rAdiyaRecorded`='$rAdiyaRecorded',`rAdiyaRecorded_1`='$rAdiyaRecorded_1',`rDepartmentOfServices`='$rDepartmentOfServices',`rDepartmentOfServices_1`='$rDepartmentOfServices_1',`rKatrinHelper`='$rKatrinHelper',`rKatrinHelper_1`='$rKatrinHelper_1',`rCultural`='$rCultural',`rCultural_1`='$rCultural_1',`rLaw`='$rLaw',`rLaw_1`='$rLaw_1',`rProduction`='$rProduction',`rProduction_1`='$rProduction_1',`rAccommodation`='$rAccommodation',`rAccommodation_1`='$rAccommodation_1',`rSmartCard`='$rSmartCard',`rSmartCard_1`='$rSmartCard_1',`rConstruction`='$rConstruction',`rConstruction_1`='$rConstruction_1',`rOfficeAssistant`='$rOfficeAssistant',`rOfficeAssistant_1`='$rOfficeAssistant_1',`rAdiya`='$rAdiya',`rAdiya_1`='$rAdiya_1',`rWorkShop`='$rWorkShop',`rWorkShop_1`='$rWorkShop_1',`rGeneralService`='$rGeneralService',`rGeneralService_1`='$rGeneralService_1' WHERE id = '$id'";
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
         while ($row=mysqli_fetch_assoc($result)){
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
          
                <input type="checkbox" name="1p_yes" value="प्रचार (ई)" <?php if ($row['rPublicity_1'] == 'प्रचार (ई)') {echo "checked"; } ?>>
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                
                <input type="checkbox" name="1k_yes" value="क्याट्रिन (अ)" <?php if ($row['rKatrine'] == 'क्याट्रिन (अ)') {echo "checked"; } ?>>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
              
                <input type="checkbox" name="1k_yes" value="क्याट्रिन (ई)" <?php if ($row['rKatrine_1'] == 'क्याट्रिन (अ)') {echo "checked"; } ?>>
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
                        include('Checkbox.php');
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