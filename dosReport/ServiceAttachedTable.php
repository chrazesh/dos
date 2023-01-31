    <!-- start view code service attached  -->
  <div class="container mt-4 mb-4" style="background-color: #f2f2f2;" id="ContainerStyle">
  <div class="row" id="rowStyle">
    <!-- start first AGPS सँगको विवरण form section from here  -->
    <div class="row">
    <?php
        $conn = connectMyDB();
        $sql = "SELECT * FROM serviceattacheddetails";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
          $i=1;
        while($row = mysqli_fetch_assoc($result)){
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
    // $i++
        }   
}
?>
  </div>
</div>
<!-- </div> -->