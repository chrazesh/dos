<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="../css/bootstrap.min.css">  -->
    <link rel="stylesheet" href="../css/font.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.css" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <title>dosReport</title>
    <style>
/* start new css code line  here  */
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

  /* start css code for report button from  here   */
    #ReportStyle {
      text-decoration: none;
      color: white;
    }

    #BlockOpen {
      display: none;
    }
/* end new css code line  here  */


    /* start table css  */
      table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  text-align: center;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
} */

th{
   font-size: 12px;
}
/* end table css  */

/* start search query from here  */
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
padding: 10px;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the "active" element to highlight the current page */
.topnav a.active {
  background-color: #2196F3;
  color: white;
}



.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
/* end search query from  here  */

    </style>
   </head>
  <body>
    <div class="container-fluid" style="margin: 10px;">
    <!-- <script>
		function printPage() {
			$("#print_btn").css("display", "none");
      $(".abc").css("display","none");
			window.print();
		}
		$("#print_btn").css("display", "block");
	</script> -->
   <!-- start search queary code line from here   -->
   <!-- <div class="topnav" style="margin-bottom: 2px;">
   <a class="btn button-primary" id="print_btn" onclick="printPage();">Print</a>
  <div class="search-container">
    <form action="" method="GET">
      <input type="text" placeholder="Search.." name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="abc">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div> -->
<!-- end search queary code line from here  -->
<!-- start first report code line from here  -->
    <div class="row">
        <div class="col-md-12"  style="display: flex; width: 100%; justify-content: center; background-color: #f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
          <h4>परिचय विवरण</h4>
        </div>
      </div>
      <div class="row" style="padding: 10px;"> 
        <div class="col-md-12">
        <table id="display">
        <!-- id="table_id" -->
        <thead>
            <tr>
              <th style="width: 10px;">S.No</th>
              <th>फोटो</th>
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
         include('../db_connection.php');
        $conn = connectMyDB();
        $id = $_GET['id'];
        $sql = "SELECT * FROM introductiondetails where id = $id";
        $result = mysqli_query($conn, $sql);

        // if (isset($_GET['search'])) {
        //   $filtervalues = $_GET['search'];
        //   $sql = "SELECT * FROM introductiondetails WHERE CONCAT(rName,rNameCapital,rDOB,eDate,rNational,rEducation,rProfession,rGender,rSpecialAbility,rMarital,rMotherToungue,rCitizenshipNo,rIssuedDate,rIssuedLocation) LIKE '%$filtervalues%'";
          // $result = mysqli_query($conn,$sql,);
          // if (mysqli_num_rows($result) > 0) {
            $i = 1;
              $row = mysqli_fetch_assoc($result)
                
                ?>
            <tr>
              <td style="width: 10px;">
                <?php echo $i ?>
              </td>
              <td class="col-1">
                <?php echo $row['image']; ?>
              </td>
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
            <?php
            $i++;
              // }
            
          // }
        // }
?> 
  </tbody>
    </table>
      </div>
      </div>
       <!-- start first report code line from here  -->
       <!-- second table start code line from here  -->
<div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>हालको ठेगाना</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table class="display" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th >S.No</th>
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
          //  include('../db_connection.php');
        $conn = connectMyDB();
        $id = $_GET['id'];
        $sql = "SELECT * FROM currentaddress where intro_id = $id";
        $result = mysqli_query($conn, $sql);
      
        $i=1;
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td>
                <?php echo $i ?>
              </td>
              <td class="border border-dark ">
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
              <!-- <td><a href="../updatepages/currentaddressupdatepage.php?id=<?php echo $row['id'];?>"  type="submit"  class="bnone abc"  style="padding: 2px;"><i class="fas fa-edit"></i></a>
            <a href="../delete/currentaddressdelete.php?id=<?php echo $row['id'];?>" type="submit" class="bnone abc"  style="padding: 2px;"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
            </tr>
            <?php 
 $i++;           
?> 
</table>
</div>
</div>

    </div>
    
  <!--end  second table start code line from here  -->

  <!--start third table code line from here  -->
<div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>स्थायी ठेगाना</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table class="display" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th >S.No</th>
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
    // include('../db_connection.php');
        $conn = connectMyDB();
        $id=$_GET['id'];
        $sql = "SELECT * FROM permanentaddress where intro_id = $id";
        $result = mysqli_query($conn, $sql);
    
        $i=1;
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td >
                <?php echo $i ?>
              </td>
              <td class="border border-dark ">
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
              <!-- <td><a href="../updatepages/permanentaddressupdatepage.php?id=<?php echo $row['id'];?>"  type="submit"  class="bnone abc"  style="padding: 2px;"><i class="fas fa-edit"></i></a>
            <a href="../delete/permanentaddressdelete.php?id=<?php echo $row['id'];?>" type="submit" class="bnone abc"  style="padding: 2px;"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
            </tr>
            <?php 
 $i++;         
                                  

      
?> 
</table>
</div>
</div>
</div>
   <!--End third table code line from here  -->

   <!--start fourth table code line from here  -->
   <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>AGPS सँगको विवरण</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table class="display" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th >S.No</th>
              <th >वाड नं.</th>
              <th >जिल्ला</th>
              <th >केन्द्र</th>
              <th >ज्ञान प्राप्त साल</th>
              <th >स्मार्ट कार्ड नं</th>
              <!-- <th style="text-center" class="abc">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
    // include('../db_connection.php');
        $conn = connectMyDB();
        $id=$_GET['id'];
        $sql = "SELECT * FROM agps where intro_id = $id";
        $result = mysqli_query($conn, $sql);
       
        $i=1;
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td >
                <?php echo $i ?>
              </td>
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
              <!-- <td><a href="../updatepages/agpsupdatepage.php?id=<?php echo $row['id'] ?>"  type="submit"  class="bnone abc"  style="padding: 2px;"><i class="fas fa-edit"></i></a>
            <a href="../delete/agpsdelete.php?id=<?php echo $row['id'];?>" type="submit" class="bnone abc"  style="padding: 2px;"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
            </tr>
            <?php 
 $i++;         
                                  
 
        
?> 
</table> 
</div>
</div>
</div>
   <!--end fourth table code line from here  -->

    <!--start fifth table code line from here  -->
    <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>भाषा विवरण</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table class="display" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th >S.No</th>
              <th >प्रथम भाषा </th>
              <th >दोस्रो भाषा</th>
              <th >तेस्रो भाषा</th>
              <th >चौथो भाषा</th>
              <!-- <th  style="text-center" class="abc">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
    // include('../db_connection.php');
        $conn = connectMyDB();
        $id=$_GET['id'];
        $sql = "SELECT * FROM `languagedetails` where intro_id = $id";
        $result = mysqli_query($conn, $sql);
    
        $i=1;
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td >
                <?php echo $i ?>
              </td>
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
              <!-- <td><a href="../updatepages/languagedetailsupdatepage.php?id=<?php echo $row['id']; ?>"  type="submit"  class="bnone abc"  style="padding: 2px;"><i class="fas fa-edit"></i></a>
            <a href="../delete/languagedetailsdelete.php?id=<?php echo $row['id'];?>" type="submit" class="bnone abc"  style="padding: 2px;"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
            </tr>
            <?php 
 $i++;         
                                  

        
?> 
</table>
</div>
</div>
</div>
     <!--end fifth table code line from here  -->

        <!--start sixth table code line from here  -->
        <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>स्वास्थ्य विवरण</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table class="display" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th >S.No</th>
              <th >रक्त समुह </th>
              <th >तपाईलाई स्वास्थ्य सम्बन्धी केही समस्या छ ?</th>
              <th >यदी भए उल्लेख गर्नुहोस</th>
              
              <!-- <th  style="text-center" class="abc">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
    // include('../db_connection.php');
        $conn = connectMyDB();
        $id = $_GET['id'];
        $sql = "SELECT * FROM `healthdetails` where intro_id = $id";
        $result = mysqli_query($conn, $sql);
    
        $i=1;
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td >
                <?php echo $i; ?>
              </td>
              <td>
                <?php echo $row['rBloodGroup']; ?>
              </td>
              <td >
                <?php echo $row['rChecked']; ?>
              </td>
              <td >  
                <?php echo $row['rWrite']; ?>
              </td>
              <!-- <td><a href="../updatepages/healthdetailsupdatepage.php?id=<?php echo $row['id'];?>"  type="submit"  class="bnone abc"  style="padding: 2px;"><i class="fas fa-edit"></i></a>
            <a href="../delete/healthdetailsdelete.php?id=<?php echo $row['id'];?>" type="submit" class="bnone abc"  style="padding: 2px;"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
            </tr>
            <?php 
 $i++;         
                                  

?> 
</table>
</div>
</div>
</div>
        <!--end sixth table code line from here  -->


      <!--start seventh table code line from here  -->
      <!-- सेवामा संलग्न विवरण -->
      <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>सेवामा संलग्न विवरण</h4>
        </div>
      </div>
        <!-- start code line service attached details table here -->
             <?php
            //  include('ServiceAttachedTable.php');
             ?>
        <!-- start code line service attached details table here -->
   
    </div>
       <!--end seventh table code line from here  -->


       <!--start eight table code line from here  -->
        <div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>सेवा समय अवधी विवरण</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table class="display" style="width:100%">
         <!-- id="table_id_1" -->
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th >S.No</th>
              <th >नियमित सेवका लागि दिन सक्ने समय</th>
              <th >प्रति हप्ता | अर्थ मासिक | महिना </th>
              <th >आफ्नो सहरमा मात्रै | आफ्नो क्षेत्रमा मात्रै | देशभरि जहाँसुकै | देश बाहिर </th>
              <th >इभेन्ट सेवका लागि दिन सक्ने समय</th>
              <th >प्रति हप्ता | अर्थ मासिक | महिना </th>
              <th >आफ्नो सहरमा मात्रै | आफ्नो क्षेत्रमा मात्रै | देशभरि जहाँसुकै | देश बाहिर</th>
              <th >कैफियत</th>
              <!-- <th  style="text-center" class="abc">Action</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
    // include('../db_connection.php');
        $conn = connectMyDB();
        $id=$_GET['id'];
        $sql = "SELECT * FROM `servicetimedetails` where intro_id =$id";
        $result = mysqli_query($conn, $sql);
        $i=1;
        $row = mysqli_fetch_assoc($result);
       ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td >
                <?php echo $i; ?>
              </td>
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
              <!-- <td><a href="../updatepages/servicetimedetailsupdatepage.php?id=<?php echo $row['id'];?>"  type="submit"  class="bnone abc"  style="padding: 2px;"><i class="fas fa-edit"></i></a>
            <a href="../delete/servicetimedetailsdelete.php?id=<?php echo $row['id'];?>" type="submit" class="bnone abc"  style="padding: 2px;"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
            </tr>
            <?php       
   $i++;                               
   
?> 
</table>
</div>
</div>
</div>
       <!--end eight table code line from here  -->

    </div>
    <script type="text/javascript">
     $(document).ready(function () {
    $('#table_id').DataTable();
});

        $(document).ready(function () {
            var printCounter = 0;

            // Append a caption to the table before the DataTables initialisation
            $('#table_id').append('<caption style="caption-side: bottom">All your Detail\'s appear here.</caption>');
            $('#table_id').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    // 'copy',
                    // {
                    //     extend: 'excel',
                    //     messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
                    // },
                    // {
                    //     extend: 'pdf',
                    //     messageBottom: null
                    // },
                    {
                        extend: 'print',
                        messageTop: function () {
                            printCounter++;

                            if (printCounter === 1) {
                                return 'This is the first time you have printed this document.';
                            }
                            else {
                                return 'You have printed this document ' + printCounter + ' times';
                            }
                        },
                        messageBottom: null
                    }
                ]
            });
        });

    </script>
     <!-- <script src="../js/font.min.js"></script> -->
     <!-- jquery js  -->
     <!-- <script src="../js/jquery.min.js"></script> -->
     <!-- bootstrap js  -->
     <!-- <script src="../js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.js"></script>

    <!-- bootstrap js link here  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    
  </body>
</html>