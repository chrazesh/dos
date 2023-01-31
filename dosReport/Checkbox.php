
                  <!-- start second checkbox section from here  -->
                 <div class="row">
                        <div class="col-md-12 col-sm-12"> 
                          <div class="row" style="margin-top: 20px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">प्रचार</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <label for="">अ.</label>
                                  <input type="checkbox" name="p_yes" value="प्रचार (अ)" <?php if ($row['rPublicity3'] == 'प्रचार (अ)') {echo "checked"; } ?>
                                  ></span>
                                &nbsp;&nbsp;
                                <span>
                                  <label for="">ई.</label>
                                  <input type="checkbox" name="p_yes_1" value="प्रचार (ई)" <?php if ($row['rPublicity3_1'] == 'प्रचार (ई)') {echo "checked"; } ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">एम्. सि.</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <label for="">अ.</label>
                                  <input type="checkbox" name="ac_yes" value="एम्. सि. (अ)" <?php if ($row['rMc'] == 'एम्. सि. (अ)') {echo "checked"; } ?>>
                                </span>
                                &nbsp;&nbsp;
                                <span>
                                  <label for="">ई.</label>
                                  <input type="checkbox" name="ac_yes_1" value="एम्. सि. (ई)" <?php if ($row['rMc_1'] == 'एम्. सि. (ई)') {echo "checked"; } ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">प्रकाशन</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <label for="">अ.</label>
                                  <input type="checkbox" name="pra_yes" value="प्रकाशन (अ)" <?php if ($row['rPublication'] == 'प्रकाशन (अ)') {echo "checked"; } ?>>
                                </span>
                                &nbsp;&nbsp;
                                <span>
                                  <label for="">ई.</label>
                                  <input type="checkbox" name="pra_yes_1" value="प्रकाशन (ई)" <?php if ($row['rPublication_1'] == 'प्रकाशन (ई)') {echo "checked"; } ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">आइ. टि</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <label for="">अ.</label>
                                  <input type="checkbox" name="it_yes" value="आइ. टि (अ)" <?php if ($row['rIt'] == 'आइ. टि (अ)') {echo "checked"; } ?>>
                                </span>
                                &nbsp;&nbsp;
                                <span>
                                  <label for="">ई.</label>
                                  <input type="checkbox" name="it_yes_1" value="आइ. टि (ई)" <?php if ($row['rIt_1'] == 'आइ. टि (ई)') {echo "checked"; } ?>>
                                </span>
                              </div>
                            </div>
                          </div>

                          <!-- start second row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">मोवाइल टेन्ट</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="mo_yes" value="मोवाइल टेन्ट (अ)" <?php if($row['rMobileTent'] == 'मोवाइल टेन्ट (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="mo_yes_1" value="मोवाइल टेन्ट (ई)"  <?php if($row['rMobileTent_1'] == 'मोवाइल टेन्ट (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">प्रेमी स्वागत</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="pre_yes" value=" प्रेमी स्वागत (अ)" <?php if($row['rLoverWelcome'] == 'प्रेमी स्वागत (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="pre_yes_1" value="प्रेमी स्वागत (ई)" <?php if($row['rLoverWelcome_1'] == 'प्रेमी स्वागत (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">सरसफाइ</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="sir_yes" value="सरसफाइ (अ)" <?php if($row['rMustardCleaning'] == 'सरसफाइ (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="sir_yes_1" value="सरसफाइ (ई)" <?php if($row['rMustardCleaning_1'] == 'सरसफाइ (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">भिडियोग्रफी</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="vi_yes" value="भिडियोग्रफी (अ)" <?php if($row['rVideoGraphy'] == 'भिडियोग्रफी (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="vi_yes_1" value=" भिडियोग्रफी (ई)" <?php if($row['rVideoGraphy_1'] == 'भिडियोग्रफी (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- end second row from here  -->

                          <!-- start second row from here -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">विजुली</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="bi_yes" value="विजुली (अ)" <?php if($row['rVijuli'] == 'विजुली (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="bi_yes_1" value=" विजुली (ई)" <?php if($row['rVijuli_1'] == 'विजुली (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">सुरक्षा</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="su_yes" value="सुरक्षा (अ)" <?php if($row['rSecurity'] == 'सुरक्षा (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="su_yes_1" value="सुरक्षा (ई)" <?php if($row['rSecurity_1'] == 'सुरक्षा (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">अस्रिङ</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="aa_yes" value="अस्रिङ (अ)" <?php if($row['rAsring'] == 'अस्रिङ (अ)') { echo "checked";} ?>> 
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="aa_yes_1" value="अस्रिङ (ई)" <?php if($row['rAsring_1'] == 'अस्रिङ (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">फोटोग्राफर</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="pho_yes" value="फोटोग्राफर (अ)" <?php if($row['rPhotographer'] == 'फोटोग्राफर (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="pho_yes_1" value="फोटोग्राफर (ई)" <?php if($row['rPhotographer_1'] == 'फोटोग्राफर (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- end second row from here -->

                          <!-- start third row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">प्रशिक्षक</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="prashi_yes" value=" प्रशिक्षक(अ)" <?php if($row['rCoach'] == 'प्रशिक्षक (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="prashi_yes_1" value="प्रशिक्षक (ई)" <?php if($row['rCoach_1'] == 'प्रशिक्षक (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">मेडिकल</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="medi_yes" value="मेडिकल (अ)" <?php if($row['rMedical'] == 'मेडिकल (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="medi_yes_1" value="मेडिकल (ई)" <?php if($row['rMedical_1'] == 'मेडिकल (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">रजिष्ट्रेशन</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="regis_yes" value="रजिष्ट्रेशन (अ)" <?php if($row['rRegistration'] == 'रजिष्ट्रेशन (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="regis_yes_1" value="रजिष्ट्रेशन (ई)" <?php if($row['rRegistration_1'] == 'रजिष्ट्रेशन (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">भिडियाे एडिटर</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="video_yes" value="भिडियाे एडिटर (अ)" <?php if($row['rVideoEditor'] == 'भिडियाे एडिटर (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="video_yes_1" value="भिडियाे एडिटर (ई)" <?php if($row['rVideoEditor_1'] == 'भिडियाे एडिटर (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- end thir row from here  -->

                          <!-- start forth row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">जन सम्पर्क</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="jan_yes" value="जन सम्पर्क (अ)" <?php if($row['rPublicRelations'] == 'जन सम्पर्क (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="jan_yes_1" value="जन सम्पर्क (ई)" <?php if($row['rPublicRelations_1'] == 'जन सम्पर्क (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">खरिद बिक्री</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="kharid_yes" value="खरिद बिक्री (अ)" <?php if($row['rBuyingAndSelling'] == 'खरिद बिक्री (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="kharid_yes_1" value="खरिद बिक्री (ई)" <?php if($row['rBuyingAndSelling_1'] == 'खरिद बिक्री (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">कम्प्यटर अप्रेटर</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="computer_yes" value="कम्प्यटर अप्रेटर (अ)" <?php if($row['rComputerOperator'] == 'कम्प्यटर अप्रेटर (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="computer_yes_1" value=" कम्प्यटर अप्रेटर (ई)" <?php if($row['rComputerOperator_1'] == 'कम्प्यटर अप्रेटर (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">अडियाे एडिटर</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="audio_yes" value="अडियाे एडिटर (अ)" <?php if($row['rAdiyeEditor'] == 'अडियाे एडिटर (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="audio_yes_1" value="अडियाे एडिटर (ई)" <?php if($row['rAdiyeEditor_1'] == 'अडियाे एडिटर (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- end forth row from here  -->
                          <!-- start fifth row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">ट्रान्सलेसन</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="trans_yes" value="ट्रान्सलेसन (अ)" <?php if($row['rTranslation'] == 'ट्रान्सलेसन (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="trans_yes_1" value="ट्रान्सलेसन (ई)" <?php if($row['rTranslation_1'] == 'ट्रान्सलेसन (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">कुक</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="cock_yes" value="कुक (अ)" <?php if($row['rCook'] == 'कुक (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="cock_yes_1" value="(ई)" <?php if($row['rCook_1'] == 'कुक (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">टाइपिस्ट</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="typist_yes" value="टाइपिस्ट (अ)" <?php if($row['rTypist'] == 'टाइपिस्ट (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="typist_yes_1" value="टाइपिस्ट (ई)" <?php if($row['rTypist_1'] == 'टाइपिस्ट (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">अडियाे रेकर्डिष्ट</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="audioRec_yes" value="अडियाे रेकर्डिष्ट (अ)" <?php if($row['rAdiyaRecorded'] == 'अडियाे रेकर्डिष्ट (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="audioRec_yes_1" value="अडियाे रेकर्डिष्ट (ई)" <?php if($row['rAdiyaRecorded_1'] == 'अडियाे रेकर्डिष्ट (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- end fifth row from here  -->
                          <!-- start sixth row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">सेवा विभाग (DoS)</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="sewa_yes" value="सेवा विभाग (DoS) (अ)" <?php if($row['rDepartmentOfServices'] == 'सेवा विभाग (DoS) (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="sewa_yes_1" value="सेवा विभाग (DoS) (ई)" <?php if($row['rDepartmentOfServices_1'] == 'सेवा विभाग (DoS) (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">क्याट्रिन हेल्पर</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="kyatrin_yes" value="क्याट्रिन हेल्पर (अ)" <?php if($row['rKatrinHelper'] == 'क्याट्रिन हेल्पर (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="kyatrin_yes_1" value="क्याट्रिन हेल्पर (ई)" <?php if($row['rKatrinHelper_1'] == 'क्याट्रिन हेल्पर (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">सांस्कृतिक</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="sans_yes" value="सांस्कृतिक (अ)" <?php if($row['rCultural'] == 'सांस्कृतिक (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="sans_yes_1" value="सांस्कृतिक (ई)" <?php if($row['rCultural_1'] == 'सांस्कृतिक (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">कानुन</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="kanun_yes" value="कानुन (अ)" <?php if($row['rLaw'] == 'कानुन (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="kanun_yes_1" value="कानुन (ई)" <?php if($row['rLaw_1'] == 'कानुन (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- end sixth row from here  -->

                          <!-- Start seventh row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">प्राेडक्शन</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="pro_yes" value="प्राेडक्शन (अ)" <?php if($row['rProduction'] == 'प्राेडक्शन (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="pro_yes_1" value="प्राेडक्शन (ई)" <?php if($row['rProduction_1'] == 'प्राेडक्शन (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">आवास</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="awas_yes" value="आवास (अ)" <?php if($row['rAccommodation'] == 'आवास (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="awes_yes_12" value="आवास (ई)" <?php if($row['rAccommodation_1'] == 'आवास (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">स्मार्ट कार्ड</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="smart_yes" value="स्मार्ट कार्ड (अ)" <?php if($row['rSmartCard'] == 'स्मार्ट कार्ड (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="smart_yes_1" value="स्मार्ट कार्ड (ई)" <?php if($row['rSmartCard_1'] == 'स्मार्ट कार्ड (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">निर्माण</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="nirman_yes" value="निर्माण (अ)" <?php if($row['rConstruction'] == 'निर्माण (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="nirman_yes_1" value="निर्माण (ई)" <?php if($row['rConstruction'] == 'निर्माण (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- End Seventh row from here  -->

                          <!-- Start Eight row from here  -->
                          <div class="row" style="margin-top: 5px;"><!--padding: 10px-->
                            <div class="col-md-12">
                              <div class="col-md-2">
                                <label for="">अफिस असिस्टेन्ट</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="office_yes" value="अफिस असिस्टेन्ट (अ)" <?php if($row['rOfficeAssistant'] == 'अफिस असिस्टेन्ट (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="office_yes_1" value="अफिस असिस्टेन्ट (ई)" <?php if($row['rOfficeAssistant_1'] == 'अफिस असिस्टेन्ट (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                              <div class="col-md-2">
                                <label for="">अडियाे/भिडियाे अपरेटर</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="audioVideo_yes" value="अडियाे/भिडियाे अपरेटर (अ)" <?php if($row['rAdiya'] == 'अडियाे/भिडियाे अपरेटर (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="audioVideo_yes_1" value="अडियाे/भिडियाे अपरेटर (ई)" <?php if($row['rAdiya_1'] == 'अडियाे/भिडियाे अपरेटर (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">वर्कशप (फलाम/काठ)</label>
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="workshop_yes" value="वर्कशप (फलाम/काठ) (अ)" <?php if($row['rWorkShop'] == 'वर्कशप (फलाम/काठ) (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="workshop_yes_1" value="वर्कशप (फलाम/काठ) (ई)" <?php if($row['rWorkShop_1'] == 'वर्कशप (फलाम/काठ) (ई)') { echo "checked";} ?>>
                                </span>
                              </div>

                              <div class="col-md-2">
                                <label for="">जनरल सेवा</label> <!--(शारीरिक कार्य, बगैँबचा आदी)-->
                              </div>
                              <div class="col-md-1 CheckBoxStyle">
                                <span>
                                  <!-- <label for="">अ.</label> -->
                                  <input type="checkbox" name="jenral_yes" value="जनरल सेवा (अ)" <?php if($row['rGeneralService'] == 'जनरल सेवा (अ)') { echo "checked";} ?>>
                                </span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <span>
                                  <!-- <label for="">ई.</label> -->
                                  <input type="checkbox" name="jenral_yes_1" value="जनरल सेवा (ई)" <?php if($row['rGeneralService_1'] == 'जनरल सेवा (ई)') { echo "checked";} ?>>
                                </span>
                              </div>
                            </div>
                          </div>
                          <!-- End Eight row from here  -->