 <!-- $sql = "INSERT INTO `serviceattacheddetails`(`rPublicity`, `rKatrine`, `rPublicity1`, `rKatrine1`, `rPublicity2`, `rKatrine2`, `rPublicity3`, `rMc`, `rPublication`, `rIt`, `rMobileTent`, `rLoverWelcome`, `rMustardCleaning`, `rVideoGraphy`, `rVijuli`, `rSecurity`, `rAsring`, `rPhotographer`, `rCoach`, `rMedical`, `rRegistration`, `rVideoEditor`, `rPublicRelations`, `rBuyingAndSelling`, `rComputerOperator`, `rAdiyeEditor`, `rTranslation`, `rCook`, `rTypist`, `rAdiyaRecorded`, `rDepartmentOfServices`, `rKatrinHelper`, `rCultural`, `rLaw`, `rProduction`, `rAccommodation`, `rSmartCard`, `rConstruction`, `rOfficeAssistant`, `rAdiya`, `rWorkShop`, `rGeneralService`) VALUES ('$rPublicity','$rKatrine','$rPublicity1','$rKatrine1','$rPublicity2','$rKatrine2','$rPublicity3','$rMc','$rPublication','$rIt','$rMobileTent','$rLoverWelcome','$rMustardCleaning','$rVideoGraphy','$rVijuli','$rSecurity','$rAsring','$rPhotographer','$rCoach','$rMedical','$rRegistration','$rVideoEditor ','$rPublicRelations','$rBuyingAndSelling','$rComputerOperator','$rAdiyeEditor','$rTranslation','$rCook','$rTypist','$rAdiyaRecorded','$rDepartmentOfServices','$rKatrinHelper','$rCultural','$rLaw','$rProduction','$rAccommodation','$rSmartCard','$rConstruction','$rOfficeAssistant','$rAdiya','$rWorkShop ','$rGeneralService')"; -->

<div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
    <!-- start first AGPS सँगको विवरण form section from here  -->
    <div class="row">
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
                <input type="checkbox" name="" value="प्रचार (अ)" checked onclick="return false">
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="" value="प्रचार (ई)" checked onclick="return false">
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                <input type="checkbox" name="" value="क्याट्रिन (अ)" checked onclick="return false">
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="" value="क्याट्रिन (ई)" checked onclick="return false">
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
                <input type="checkbox" name="" value="प्रचार (अ)"checked onclick="return false">
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="" value="प्रचार (ई)" disabled>
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                <input type="checkbox" name="" value="क्याट्रिन (अ)" disabled>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="" value="क्याट्रिन (ई)" checked onclick="return false">
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
                <input type="checkbox" name="" value="प्रचार (अ)" disabled>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="" value="प्रचार (ई)" checked onclick="return false">
              </span>
            </div>

            <div class="col-md-1">
              <label for="">क्याट्रिन</label>
            </div>
            <div class="col-md-2">
              <span class="col-md-1">
                <label for="">अ.</label>
                <input type="checkbox" name="" value="क्याट्रिन (अ)" disabled>
              </span>
              &nbsp;&nbsp;
              <span class="col-md-1">
                <label for="">ई.</label>
                <input type="checkbox" name="" value="क्याट्रिन (ई)" checked onclick="return false">
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

  </div>
</div>
