<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/9a86d78b3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="curmonthinstallation.php">globalTech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link text-dark" aria-current="page" href="record.php">Master</a>
        <a class="nav-link text-dark" href="record3.php">Inquiry</a>
        <a class="nav-link text-dark" href="record4.php">Demo</a>
        <a class="nav-link text-light" href="record1.php">Installation Information</a>
        <div class="dropdown bg-success">
          <button class="btn btn-success dropdown-toggle text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false"> Report</button>
            <ul class="dropdown-menu dropdown-menu-dark ">
            <li><a class="dropdown-item" href="currentinstallation.php">Current Month Installation</a></li>
             <li><a class="dropdown-item" href="currentexpiry.php">Current Month Expiry</a></li>
            </ul>
        </div>
        <!-- <a class="nav-link text-dark" href="report.php">Report</a> -->
        <a class="nav-link text-dark" href="record2.php">Support</a>
      </div>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-body">
      <h2 class="text-center rounded-3">Add Installation</h2>
      <div class="installationmain">

<form action="" method="POST" class="row needs-validation installationform" novalidate>

<div class="col-4">
<label class="form-label" >Company Name:</label>
    <div  class="input-group mb-3">
        <input type="text" name="companyname"  class="form-control special" id="installationCompany" placeholder="Enter Company Name" disabled>
        <i class="fa-solid fa-magnifying-glass input-group-text btnSearchCustomer" ></i>
    </div>

</div>
<div  class="col-4 mb-3">
        <label class="form-label" >Company Email:</label>
        <input type="email" name="cemail"  class="form-control" id="installationCemail" placeholder="Enter Company Email" required>
    </div>
<div  class="col-4 mb-3">
        <label class="form-label" >Contact Person:</label>
        <input type="text" name="cname1"  class="form-control special" id="installationPerson" placeholder="Enter Contact Person" required>
    </div>


<div  class="col-4 mb-3">
        <label class="form-label" >Contact Person Email:</label>
        <input type="email" name="cpemail"  class="form-control" id="installationPemail" placeholder="Enter Company Email" required>
    </div>

<div  class="col-4 mb-3">
        <label class="form-label" >Pan No:</label> 
        <input type="text" name="pan"  class="form-control special4" id="installationPan" placeholder="Enter Pan" required>
    </div>

<div  class="col-4 mb-3">
        <label class="form-label" >Address:</label>
        <input type="text" name="address"  class="form-control special1" id="installationAddress" placeholder="Enter Address" required>
    </div>



<div  class="col-4 mb-3">
        <label class="form-label" >City:</label>
        <input type="text" name="city"  class="form-control special" id="installationCity"  placeholder="Enter City" required>
    </div>

    <div  class="col-4 mb-3class">
        <label class="form-label">Phone:</label>
        <input type="text" name="phone"  class="form-control special2" id="installationPhone" placeholder="Enter Phone" required>
    </div>
<div  class="col-4 mb-3">
        <label class="form-label" >Mobile:</label>
        <input type="text" name="mobile"  class="form-control special3" id="installationMobile" placeholder="Enter Mobile" required>
    </div>
   

     <div class="col-4">
        <label class="form-label">Type:</label>
       <select name="type"  class="form-control" id="installationType" placeholder="Enter Type"  required>
        <option value="New">New</option>
        <option value="Renew">Renew</option>
       </select>
    </div>

    <div  class="col-4 mb-3" >
        <label class="form-label" >No of Users:</label>
        <input type="text" name="users"  class="form-control special4" id="installationUsers" placeholder="Enter No. of Users" required>
    </div>

   <div  class="col-4 mb-3">
        <label class="form-label">Installation Date:</label>
        <input type="date" name="idate"  class="form-control" id="defaultdate" placeholder="Enter Installation Date" required>
    </div>

 

   
   <div  class="col-4 mb-3">
        <label class="form-label" >Expiry Date:</label>
        <input type="date" name="exp"  class="form-control" id="installationExpiry" placeholder="Enter Expiry Date" required>
    </div>

    <div  class="col-4 mb-3" >
         <label class="form-label">Support Officer:</label>
        <input type="text" name="installed"  class="form-control special" id="installationSupport" placeholder="Enter Support Officer" required>
    </div>
   <div  class="col-4 mb-3" >
         <label class="form-label">Referenced By:</label>
        <input type="text" name="reference"  class="form-control special" id="installationReference" placeholder="Enter Referenced By" required>
    </div>
   

   <div class="installationbutton">
   <button  type="submit" name="add1">SUBMIT</button>
 
   </div>

</form>
</div>
      </div>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
             <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Lists of Companies</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
              
               <table class="display" >
             

               <thead>
                 <tr>
                   <th>SN</th>
                   <th>Company Name</th>
                   <th>Contact Person</th>
                   <th>Phone</th>
                   <th>Mobile</th>
                   <th>Email</th>
                   <th>Pan No.</th>
                   <th>Address</th>
                   <th>City</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php 
            $con=mysqli_connect('localhost','root','','info');
            $select="select * from customer";
            $query=mysqli_query($con, $select);
            $i=1;
            while( $result = mysqli_fetch_assoc($query)){
              ?>
           
           <tr class="clstrInstallation" data-company="<?php echo $result['company_name']?>" data-person="<?php echo $result['contact_person']?>"  data-phone="<?php echo $result['phone_no']?>" data-mobile="<?php echo $result['mobile']?>" data-email="<?php echo $result['email']?>" data-pan="<?php echo $result['pan_no']?>" data-address="<?php echo $result['address']?>" data-city="<?php echo $result['city']?>" data-phone="<?php echo $result['country']?>">
           
           
             <td> <?php echo $i?></td>
             <td><?php echo $result['company_name'] ?></td>
             <td><?php echo $result['contact_person'] ?></td>
             <td><?php echo $result['phone_no'] ?></td>
             <td><?php echo $result['mobile'] ?></td>
             <td><?php echo $result['email'] ?></td>
             <td><?php echo $result['pan_no'] ?></td>
             <td><?php echo $result['address'] ?></td>
             <td><?php echo $result['city'] ?></td>
            </tr>
            
            <?php
             $i++; 
             
            }
            //  echo"</ol>";
            ?>
            </tbody>
        
            
               </table>
            
               
               
          
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
             </div>
          </div>
        </div>
    </div>




<div class="mx-4 heading">
  <h2>Installation Information</h2>
  <button type="button" class="btn btn-primary mx-2 btnAdd">ADD</button>
  
  
</div>

  <div class="mx-4">
    
    <table class="display"> 
      <thead>

        <tr>
          <th>Company Name</th>
            <th>Company Email</th>
            <th>Contact Person</th>
            <th>Cotact Person Email</th>
            <th>Pan No</th>
            <th>Address</th>
            <th>City</th>
            <th>Phone</th>
            <th>Mobile</th>
            <th>Type</th>
            <th>No of Users</th>
            <th>Installation Date</th>
            <th>Expiry Date</th>
            <th>Installed By</th>
            <th>Action</th>
            
          </tr>
        </thead>
          <tbody>

            <?php 

        $con=mysqli_connect('localhost','root','','info');
        $select="select * from installation";
        $query=mysqli_query($con, $select);
        
        while($result = mysqli_fetch_assoc($query)){
          ?>

          <tr>
            <td><?php echo $result['company_name'] ?></td>
            <td><?php echo $result['company_email'] ?></td>
            <td><?php echo $result['client_name'] ?></td>
            <td><?php echo $result['person_email'] ?></td>
            <td><?php echo $result['pan_no'] ?></td>
            <td><?php echo $result['address'] ?></td>
            <td><?php echo $result['city'] ?></td>
            <td><?php echo $result['phone'] ?></td>
            <td><?php echo $result['mobile'] ?></td>
            <td><?php echo $result['type'] ?></td>
            <td><?php echo $result['no_of_users'] ?></td>
            <td><?php echo $result['installation_date'] ?></td>
            <td><?php echo $result['exp_date'] ?></td>
            <td><?php echo $result['installed_by'] ?></td>
            <td><a href="update1.php?id=<?php echo $result['id'] ?>"  type="submit"  class="bnone"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="delete1.php?ids=<?php echo $result['id'] ?>" type="submit" class="bnone"><i class="fa-solid fa-trash" ></i></a></td>
            
          </tr>
        <?php
        }
        ?>

</tbody>
    </table>

  </div>
  <script>
$(document).ready(function(){
 $('.clstrInstallation').click(function(){
 $("#installationCompany").prop('disabled', false);
 $("#installationCompany").attr('required', true);
 $("#installationCompany").val($(this).attr("data-company"));
 $("#installationCemail").val($(this).attr("data-email"));
 $("#installationPerson").val($(this).attr("data-person"));
 $("#installationPan").val($(this).attr("data-pan"));
 $("#installationAddress").val($(this).attr("data-address"));
 $("#installationCity").val($(this).attr("data-city"));
 $("#installationPhone").val($(this).attr("data-phone"));
 $("#installationMobile").val($(this).attr("data-mobile"));
 $("#exampleModal").modal('hide');
     });
    });
</script>

  <script src="script.js"></script>
</body>
</html>




<?php
$con=mysqli_connect('localhost','root','','info');

if(isset($_POST['add1'])){
    $companyname=$_POST['companyname'];
    $cemail=$_POST['cemail'];
    $cname1=$_POST['cname1'];
    $cpemail=$_POST['cpemail'];
    $pan=$_POST['pan'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $phone=$_POST['phone'];
    $mobile=$_POST['mobile'];
    $type=$_POST['type'];
    $users=$_POST['users'];
    $idate=$_POST['idate'];
    $exp=$_POST['exp'];
    $installed=$_POST['installed'];
    $reference=$_POST['reference'];
    $selectquery="select * from installation where company_name='$companyname'";
    $query=mysqli_query($con, $selectquery); 
    if(mysqli_num_rows($query)>0){
    echo"<script>alert('Company name already exsists')</script>";

    }else{
      $insertquery="INSERT INTO installation(company_name,company_email,client_name,person_email,pan_no,address,city,phone,mobile,type,no_of_users, installation_date, exp_date,installed_by, referenced_by) VALUES('$companyname','$cemail','$cname1','$cpemail','$pan','$address','$city','$phone','$mobile','$type','$users','$idate','$exp','$installed','$reference')";
    $query1=mysqli_query($con,$insertquery);
    if($query1){
      echo"<script>alert('Data inserted successfully'); location.href='reecord1.php';</script>";
    }else{
      echo $insertquery;
    }
}
}
?>












<!-- Bikesh code  -->
<div class="container-fluid">
      <div class="row" style="display: flex; width: 100%; justify-content: center; background-color:#f5f5f5; color: black; margin: 0px; paddind:0px; margin-bottom: 4px;">
        <div class="col-md-12">
          <h4>हालको ठेगाना</h4>
        </div>
      </div>
      <div class="row"> 
        <div class="col col-md-12">
         <table id="example" class="display" style="width:100%">
         <thead style="background-color:#f8f9fa;">
            <tr class="bg-dark text-white text-center">
              <th scope="col">S.No</th>
              <th scope="col">प्रदेश</th>
              <th scope="col">जिल्ला</th>
              <th scope="col">न.पा/गा.पा.</th>
              <th scope="col">वाड नं.</th>
              <th scope="col">टेलिफोन नं.</th>
              <th scope="col" class="text-center">माेबाईल नं.</th>
              <th scope="col">इमेल</th>
            </tr>

            
          </thead>
          <tbody>
            <?php
// include('../db_connection.php');
        $conn = connectMyDB();
    $sql = "SELECT * FROM currentaddress";
    $result = mysqli_query($conn, $sql);
$i=1;
while($row = mysqli_fetch_assoc($result)){
  ?>
            <!-- $sno = $sno + 1; -->
            <tr class="text-center border border-dark">
              <td class="border border-dark" rowspan="20">
                <?php echo $i ?>
              </td>
              <td class="border border-dark ">
                <?php echo $row['rProvince']; ?>
              </td>
              <td class="border border-dark">
                <?php echo $row['rDistrict']; ?>
              </td>
              <td class="border border-dark">
                <?php echo $row['rMunici']; ?>
              </td>
              <td class="border border-dark">
                <?php echo $row['rWard']; ?>
              </td>
              <td class="border border-dark">
                <?php echo $row['rTelephoneNo']; ?>
              </td>
              <td class="border border-dark">
                <?php echo $row['rMobileNo']; ?>
              </td>
              <td class="border border-dark">
                <?php echo $row['rEmail']; ?>
              </td>
            </tr>
            <?php 
 $i++;         
                                  
} 
?> 
</table>
</div>
</div>

   
    </div>
    </div>   
