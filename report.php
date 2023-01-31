<?php
include 'db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script src="https://kit.fontawesome.com/9a86d78b3d.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid" >
    <div class="row"  style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>परिचय विवरण</h4>
        </div>
      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col-md-12">
        <table class="table">
        <thead style="background-color:#f8f9fa;">
            <tr>
           
              <th>नाम थर</th>
              <th>Name (In Block Letter)</th>
              <th>जन्म मिति बि.सं.</th>
              <th>ई.सं.</th>
               <th>उमेर</th> 
              <th>राष्ट्रियता</th>
              <th >शैक्षिक याेग्यता</th>
              <th >पेशा</th>
              <th >लिङ्ग</th>
              <th >विशेष याेग्यता</th>
              <th >वेवाहिक अवस्था</th>
              <th >मातृ भाषा</th>
              <th >नागरिकता नं</th>
              <th >जरी गरेको मिति</th>
              <th >जरी गरेको स्थान</th>
             <!-- <th>Action</th> -->
            </tr>
        </thead>
        <tbody>
        <?php
        $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM introductiondetails where id = $ids";
        $result = mysqli_query($con, $sql);
          
              $row = mysqli_fetch_assoc($result)
                
                ?>

            <tr>
            
              <td class="col-1">
                <?php echo $row['rName']; ?>
              </td>
              <td class="col-1">
                <?php echo $row['rNameCapital']; ?>
              </td>
              <td class="col-1">
                <?php echo $row['rDOB']; ?>
              </td>
              <td >
                <?php echo $row['eDate']; ?>
              </td>
               <td >
                <?php echo $row['rAge']; ?>
              </td>
              <td >
                <?php echo $row['rNational']; ?>
              </td>
              <td >
                <?php echo $row['rEducation']; ?>
              </td>
              <td >
                <?php echo $row['rProfession']; ?>
              </td>
              <td >
                <?php echo $row['rGender']; ?>
              </td>
              <td >
                <?php echo $row['rSpecialAbility']; ?>
              </td>
              <td >
                <?php echo $row['rMarital']; ?>
              </td>
              <td >
                <?php echo $row['rMotherToungue']; ?>
              </td>
              <td >
                <?php echo $row['rCitizenshipNo']; ?>
              </td>
              <td >
                <?php echo $row['rIssuedDate']; ?>
              </td>
              <td >
                <?php echo $row['rIssuedLocation']; ?>
              </td>
            </tr>
    
  </tbody>
    </table>
      </div>
      </div>

     <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
       

        <div class="col-md-12 "  style="display: flex; width: 100%; justify-content: center; background-color: #dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>हालको ठेगाना</h4>
        </div>

      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col col-md-12">
         <table class="table" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr>
            
              <th >प्रदेश</th>
              <th >जिल्ला</th>
              <th >न.पा/गा.पा.</th>
              <th >वाड नं.</th>
              <th >टेलिफोन नं.</th>
              <th  class="text-center">माेबाईल नं.</th>
              <th >इमेल</th>
              <!-- <th  style="text-center" class="abc">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
         
        $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM currentaddress where intro_id = $ids";
        $result = mysqli_query($con, $sql);
      
    
        $row = mysqli_fetch_assoc($result);
       ?>
          
            <tr>
              <td >
                <?php echo $row['rProvince']; ?>
              </td>
              <td >
                <?php echo $row['rDistrict']; ?>
              </td>
              <td >
                <?php echo $row['rMunici']; ?>
              </td>
              <td >
                <?php echo $row['rWard']; ?>
              </td>
              <td >
                <?php echo $row['rTelephoneNo']; ?>
              </td>
              <td >
                <?php echo $row['rMobileNo']; ?>
              </td>
              <td >
                <?php echo $row['rEmail']; ?>
              </td>
              </td>
              
            </tr>
        </tbody>
</table>
</div>
</div>

   
    </div>
    
  <!--end  second table start code line from here  -->

   <!--start third table code line from here  -->
<div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
      

        <div class="col-md-12 "  style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>स्थायी ठेगाना</h4>
        </div>

      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col col-md-12">
         <table class="table" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr >
            
              <th >प्रदेश</th>
              <th >जिल्ला</th>
              <th >न.पा/गा.पा.</th>
              <th >वाड नं.</th>
              <th >टेलिफोन नं.</th>
              <th  class="text-center">माेबाईल नं.</th>
              <th >इमेल</th>
          
            </tr>
          </thead>
          <tbody>
            <?php
    // include('../db_connection.php');
       $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM permanentaddress where intro_id = $ids";
        $result = mysqli_query($con, $sql);
    
    
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr>
              <td >
                <?php echo $row['rProvince']; ?>
              </td>
              <td >
                <?php echo $row['rDistrict']; ?>
              </td>
              <td >
                <?php echo $row['rMunici']; ?>
              </td>
              <td >
                <?php echo $row['rWard']; ?>
              </td>
              <td >
                <?php echo $row['rTelephoneNo']; ?>
              </td>
              <td >
                <?php echo $row['rMobileNo']; ?>
              </td>
              <td >
                <?php echo $row['rEmail']; ?>
              </td>
              </td>
              
            </tr>
</tbody>            
</table>
</div>
</div>
</div>
   <!--End third table code line from here  -->

   <!--start fourth table code line from here  -->
   <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">

        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color: #dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>AGPS सँगको विवरण</h4>
        </div>

      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col col-md-12">
         <table class="table" style="width:100%">
       
         <thead style="background-color:#f8f9fa;">
            <tr>
              
              <th >वाड नं.</th>
              <th >जिल्ला</th>
              <th >केन्द्र</th>
              <th >ज्ञान प्राप्त साल</th>
              <th >स्मार्ट कार्ड नं</th>
             
            </tr>
          </thead>
          <tbody>
            <?php
  
    $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM agps where intro_id = $ids";
        $result = mysqli_query($con, $sql);
       
    
        $row = mysqli_fetch_assoc($result);
       ?>
           
            <tr >
    
              <td>
                <?php echo $row['rWard']; ?>
              </td>
              <td >
                <?php echo $row['rDistrict']; ?>
              </td>
              <td >
                <?php echo $row['rCenter']; ?>
              </td>
              <td >
                <?php echo $row['rQualificationYears']; ?>
              </td> 
              <td >
                <?php echo $row['rSmartCardNo']; ?>
              </td> 
         
            </tr>
</tbody>        
</table> 
</div>
</div>
</div>
  
    <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb;black; margin: 0px; paddind:0px; margin-bottom: 4px;">
      
        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color: #dbdbdb;black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>भाषा विवरण</h4>
        </div>
      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col col-md-12">
         <table class="table" style="width:100%">
        
         <thead style="background-color:#f8f9fa;">
            <tr>
              
              <th >प्रथम भाषा </th>
              <th >दोस्रो भाषा</th>
              <th >तेस्रो भाषा</th>
              <th >चौथो भाषा</th>
        
            </tr>
          </thead>
          <tbody>
            <?php
   
    $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM `languagedetails` where intro_id = $ids";
        $result = mysqli_query($con, $sql);
    
       
        $row = mysqli_fetch_assoc($result);
       ?>
           
            <tr >
             
              <td>
                <?php echo $row['rFirstLanguage']; ?>
              </td>
              <td >
                <?php echo $row['rSecondLanguage']; ?>
              </td>
              <td >
                <?php echo $row['rThirdLanguage']; ?>
              </td>
              <td >
                <?php echo $row['rForthLanguage']; ?>
              </td> 
            
            </tr>
</tbody>           
</table>
</div>
</div>
</div>
    
        <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
       
        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>स्वास्थ्य विवरण</h4>
        </div>
      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col col-md-12">
         <table class="table" style="width:100%">
      
         <thead style="background-color:#f8f9fa;">
            <tr >
             
              <th >रक्त समुह </th>
              <th >तपाईलाई स्वास्थ्य सम्बन्धी केही समस्या छ ?</th>
              <th >यदी भए उल्लेख गर्नुहोस</th>
   
            </tr>
          </thead>
          <tbody>
            <?php
    
    $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM `healthdetails` where intro_id = $ids";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
       ?>
            
            <tr >
              <td>
                <?php echo $row['rBloodGroup']; ?>
              </td>
              <td >
                <?php echo $row['rChecked']; ?>
              </td>
              <td >  
                <?php echo $row['rWrite']; ?>
              </td>
            </tr>
            </tbody>
</table>
</div>
</div>
</div>
       
      <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; padding:0px; margin-bottom: 4px;">
        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>सेवामा संलग्न विवरण</h4>
        </div>
       </div>
       <div class="row" style="margin-bottom:40px;">  
         <div class="col col-12"> 
       
         <table class="table" style="width:100%">
         <thead style="background-color:#f8f9fa;"> 
            <tr>
            <th scope="col">अ.</th>
            <th scope="col">ई.</th>
           
            </tr>
          </thead>
          <tbody>
            <?php
       $conn = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT department_name,experience,interest FROM servicedepartment  where intro_id='$ids'";
        $result = mysqli_query($conn, $sql);
        $experiences = '';
        $intrest = '';
        while($data = mysqli_fetch_assoc($result)){
            if($data['experience']=='1'){
                $experiences .= $data['department_name']."<br>";
            }
            if($data['interest']=='1'){
                $intrest .= $data['department_name']."<br>";
            }
        }
       ?>
           
            <tr>
             
              <td ><?php
              if($experiences!=''){
              echo $experiences;}
              else{
                  echo "Nothing";
              }
                ?></td>
                
              <td>
               <?php
              if($intrest!=''){
              echo $intrest;}
              else{
                  echo "Nothing";
              }
                ?>
              </td>
        
            </tr>
           
</tbody>
</table>
</div>
</div>
     </div> 
   


     
        <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color:#dbdbdb; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>सेवा समय अवधी विवरण</h4>
        </div>
      </div>
      <div class="row" style="margin-bottom:40px;"> 
        <div class="col col-md-12">
         <table class="table" style="width:100%">
       
         <thead style="background-color:#f8f9fa;">
            <tr >
             
              <th >नियमित सेवका लागि दिन सक्ने समय</th>
              <th >प्रति हप्ता | अर्थ मासिक | महिना </th>
              <th >आफ्नो सहरमा मात्रै | आफ्नो क्षेत्रमा मात्रै | देशभरि जहाँसुकै | देश बाहिर </th>
              <th >इभेन्ट सेवका लागि दिन सक्ने समय</th>
              <th >प्रति हप्ता | अर्थ मासिक | महिना </th>
              <th >आफ्नो सहरमा मात्रै | आफ्नो क्षेत्रमा मात्रै | देशभरि जहाँसुकै | देश बाहिर</th>
              <th >कैफियत</th>
             
            </tr>
          </thead>
          <tbody>
            <?php
   
   $con = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM `servicetimedetails` where intro_id =$ids";
        $result = mysqli_query($con, $sql);
       
        $row = mysqli_fetch_assoc($result);
       ?>
          
            <tr >
           
              <td>
                <?php echo $row['rCertainTime']; ?>
              </td>
              <td >
                <?php echo $row['rCertainDays']; ?>
              </td>
              <td >
                <?php echo $row['rCertainArea']; ?>
              </td>
              <td >
                <?php echo $row['rInvestmentTime']; ?>
              </td> 
              <td >
                <?php echo $row['rInvestmentDays']; ?>
              </td> 
              <td >
                <?php echo $row['rPlace']; ?>
              </td> 
              <td >
                <?php echo $row['rDescription']; ?>
              </td> 
              
            </tr>
 </tbody>      
                    
</table>
</div>
</div>
</div>
</body>
</html>