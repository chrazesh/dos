<?php 
//session part
//session part
session_start();
if (isset($_SESSION['username'])) {
    //   echo $_SESSION['username'];
}
 else if ($_SESSION['username'] == '') {
     echo "no sesssion";
    echo"<script>window.location.href='index.php';</script>";
 }
 //session part
 //session part
 
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
   <link rel="stylesheet" href="style.css">
   <title>Report Filter</title>
</head>
<body>
<nav class="navigationbar" style="background-color:#e1e1e1;">
      <div class="p-4 fs-5">
       <label for="all">ALL</label>
       <input type="checkbox" name="" class="checkbox_check" id="allDetails" onclick="GetReport('allRecords','allrec')">
      </div>
      <!-- data-bs-toggle="collapse" href="#collapseExample" -->
      <!-- multilevel dropdown starts -->
      <div class="dropdown" id="myDropdown">
      <a class="dropdown-toggle fs-5" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color:black; text-decoration:none">Select Filter Option</a>
  <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" id="all" onclick="GetReport('allRecords','allrec')">All</a></li>
    <li><a class="dropdown-item">District &raquo;</a>
      <ul class="dropdown-menu dropdown-submenu submenu1">
         <?php
         $selectQuery="SELECT DISTINCT `District` FROM `center_list` order by `District`";
         $con = connectMyDB();
         $queryPass=mysqli_query($con,$selectQuery);
         while( $result = mysqli_fetch_assoc($queryPass)){
          ?>
        <li><a class="dropdown-item showing" id="result"  onclick="GetReport('district','<?php echo $result['District']?>');"><?php echo $result["District"] ?></a> </li>
        <?php
         }
        ?>
      </ul>
    </li>
    <li><a class="dropdown-item" href="#">Education &raquo;</a>
        <ul class="dropdown-menu dropdown-submenu submenu2">
        <?php
       
         $selectQuery1="SELECT DISTINCT `education` FROM `education`";
         $con = connectMyDB();
         $queryPass1=mysqli_query($con,$selectQuery1);
         while( $result = mysqli_fetch_assoc($queryPass1)){
          ?>
        <li><a class="dropdown-item showing" id="byEducation" onclick="GetReport('Education','<?php echo $result['education']?>');"><?php echo $result["education"] ?></a> </li>
        <?php
         }
        ?>
        </ul>
    </li>
    <li><a class="dropdown-item" href="#">Department &raquo;</a>
    
      <ul class="dropdown-menu dropdown-submenu submenu2">
        <?php
       
         $selectQuery1="SELECT DISTINCT `department` FROM `department` order by department";
         $con = connectMyDB();
         $queryPass1=mysqli_query($con,$selectQuery1);
         while( $result = mysqli_fetch_assoc($queryPass1)){
          ?>
        <li><a class="dropdown-item showing" id="byEducation" onclick="GetReport('Department','<?php echo $result['department']?>');"><?php echo $result["department"] ?></a> </li>
        <?php
         }
        ?>
        </ul>
    
    
    </li>
    <a class="dropdown-item" href="#" id="showRange">Age Group</a>
    <li><a class="dropdown-item" href="#">Experience &raquo;</a>
    <ul class="dropdown-menu dropdown-submenu submenu2">
        <?php
        $con = connectMyDB();
         $selectQuery1="SELECT DISTINCT `department_name` FROM `servicedepartment` where experience='1'";
         $queryPass1=mysqli_query($con,$selectQuery1);
         while( $result = mysqli_fetch_assoc($queryPass1)){
          ?>
        <li><a class="dropdown-item showing" id="byEducation" onclick="GetReport('Experience','<?php echo $result['department_name']?>');"><?php echo $result["department_name"] ?></a> </li>
        <?php
         }
        ?>
        </ul>
    </li>
    <li><a class="dropdown-item" href="#">Interest &raquo;</a>
    <ul class="dropdown-menu dropdown-submenu submenu2">
        <?php
       
        //  $selectQuery1="SELECT DISTINCT `experience` FROM `experience`";
        $selectQuery1="SELECT DISTINCT `department_name` FROM `servicedepartment` where interest='1'";
         $con = connectMyDB();
         $queryPass1=mysqli_query($con,$selectQuery1);
         while( $result = mysqli_fetch_assoc($queryPass1)){
          ?>
        <li><a class="dropdown-item showing" id="byEducation" onclick="GetReport('Interest','<?php echo $result['department_name']?>');"><?php echo $result["department_name"]?></a></li>
        <?php
         }
        ?>
        </ul>
  
  </li>
    <li><a class="dropdown-item">Center(AGPS) &raquo;</a>
       <ul class="dropdown-menu dropdown-submenu submenu2">
       <?php
      
         $selectQuery2="SELECT DISTINCT `center` FROM `center_list` order by `center`";
         $con = connectMyDB();
         $queryPass2=mysqli_query($con,$selectQuery2);
         while( $result = mysqli_fetch_assoc($queryPass2)){
          ?>
        <li><a class="dropdown-item showing" id="byEducation" onclick="GetReport('Center','<?php echo $result['center']?>');"><?php echo $result["center"] ?></a> </li>
        <?php
         }
        ?>
       </ul>
  </li>
    
  </ul>
</div>   <!-- multilevel dropdown ended -->
<div class="age-grp">
 <label for="" class="fs-5">From:</label>
 <input type="text" name="from" id="from_range">
 <label for="" class="fs-5">To:</label>
 <input type="text" name="to" id="to_range">
 <input type="submit" value="Submit" onclick="GetReportBy('ageGrp')"> 
</div>
<div class="text-end ms-3" style="position:absolute; right:1rem;"><a href="index_dashboard.php" style="text-decoration:none;color:black"><i class="fa-solid fa-house-user"></i> Dashboard</a></div>
</nav>

<div class="" id="collapseExample" style="display:none;">
<table class="display">
   <thead>
      <tr>
         <th>Nepali Name</th>
         <th>English Name</th>
         <th style="width:92px;">Date Of Birth in B.S</th>
         <th style="width:92px;">Date Of Birth in A.D</th>
         <th>Gender</th> 
         <th>Nationality</th>
         <th>Education</th>
         <th>Profession</th>
         <th>Marital Status</th>
         <th>Matri Bhasa</th>
         <th>Nagrikta No.</th>
         <th>Permanent Address</th>
         <th>Temporary Address</th>
         <th>Telephone</th>
         <th>Mobile</th>
         <th>Email</th>
         <th>View</th>
      </tr>
   </thead>
   <tbody class="showByFilter" id="tbody_1">
      <?php 
     
      $selectQuery="SELECT introductiondetails.id,introductiondetails.rName,introductiondetails.rNameCapital,introductiondetails.rDOB,introductiondetails.eDate,introductiondetails.rGender,introductiondetails.rNational,introductiondetails.rEducation,introductiondetails.rProfession,introductiondetails.rMarital,introductiondetails.rMotherToungue,introductiondetails.rCitizenshipNo,permanentaddress.rDistrict as pd,currentaddress.rDistrict as cd,currentaddress.rTelephoneNo,currentaddress.rMobileNo,currentaddress.rEmail FROM((introductiondetails INNER JOIN permanentaddress ON introductiondetails.id=permanentaddress.intro_id)INNER JOIN currentaddress on introductiondetails.id=currentaddress.intro_id);";
      $con = connectMyDB();
      $queryPass=mysqli_query($con,$selectQuery);
      $i=1;
      while( $result = mysqli_fetch_assoc($queryPass)){
         ?>
      <tr>
         <td><?php echo $result['rName']; ?></td>
         <td><?php echo $result['rNameCapital']; ?></td>
         <td><?php echo $result['rDOB']; ?> </td>
         <td><?php echo $result['eDate']; ?></td>
         <td><?php echo $result['rGender']; ?></td>
         <td><?php echo $result['rNational']; ?></td>
         <td><?php echo $result['rEducation']; ?></td>
         <td><?php echo $result['rProfession']; ?></td>
         <td><?php echo $result['rMarital']; ?></td>
         <td><?php echo $result['rMotherToungue']; ?></td>
         <td><?php echo $result['rCitizenshipNo']; ?></td>
         <td><?php echo $result['pd']; ?></td>
         <td><?php echo $result['cd']; ?></td>
         <td><?php echo $result['rTelephoneNo']; ?></td>
         <td><?php echo $result['rMobileNo']; ?></td>
         <td><?php echo $result['rEmail']; ?></td>
         <td><a href="report.php?ids=<?php echo $result['id'] ?>"><i class="fa-solid fa-eye"></i></a></td>


      </tr>
      <?php
        }
        $i++;
      ?>
   </tbody>
 </table> 
</div>
 <script>
  
  function GetReport(ReportBy,Value){
    $.ajax({
               url:"reportGen.php",
               method:"POST",
               data:{reportBy:ReportBy,param:Value},
               success: function (data) {
                   $("#tbody_1").empty();
                   var da = JSON.parse(data);
                   if(da.status_code == 200) {
                   $("#tbody_1").append(da.data);
                   }else if(da.status_code == 404) {
                     var html = '<tr><td class="text-center" colspan="17">'+da.message+'</td></tr>';
                     $("#tbody_1").append(html);
                   }
                 
                   }
               });
             
  }
  function GetReportBy(ReportBy){
    var from = $("#from_range").val();
    var to = $("#to_range").val();
    $.ajax({
               url:"reportGen.php",
               method:"POST",
               data:{reportBy:ReportBy,from:from,to:to},
               success: function (data) {
                   $("#tbody_1").empty();
                   var da = JSON.parse(data);
                   if(da.status_code == 200) {
                   $("#tbody_1").append(da.data);
                   }else if(da.status_code == 404) {
                     var html = '<tr><td class="text-center" colspan="17">'+da.message+'</td></tr>';
                     $("#tbody_1").append(html);
                   }
                 
                   }
               });
 $('#collapseExample').css("display","block");
  }


   $(document).ready( function () {
    $('.display').DataTable({
       //     sorting: false,
    // ordering: false,
    // scrollY: 450,   
    // scrollX: false,  
    paging: false,
    // order:[[5,'desc']],
    // searching: false,
    dom: "Bfrtip",
   });

 $('#all').click(function () {
  $('#collapseExample').css("display","block");
  $('input[name="' + this.name + '"]').not(this).prop('checked', true);
  $(".age-grp").css("display", "none");
 });


$("#showRange").click(function() {
  $(".age-grp").css("display", "block");
});

$('.showing').click(function() {
  $('#collapseExample').css("display","block");
  $(".age-grp").css("display", "none");
});

$("#allDetails").click(function() {
  if ($('.checkbox_check').prop('checked')==true){
    $('#collapseExample').css("display","block");
    $(".age-grp").css("display", "none");

  }else{
    $('#collapseExample').css("display","none");
    $(".age-grp").css("display", "none");
  }

})



$("#dropdownMenuButton").click(function() {
  $('input[name="' + this.name + '"]').not(this).prop('checked', false);
  $('.showByFilter').attr('id', 'tbody_1');
});



});
 </script>
</body>
</html>

