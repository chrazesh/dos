<?php
 include('../db_connection.php');
 $id =$_GET['id'];
 $conn = connectMyDB();
 $sql = "DELETE FROM `healthdetails` WHERE id = '$id'";
 $result = mysqli_query($conn,$sql);
 if($result){
echo"<script>alert('deleted successfully'); 
window.location.href='../dosReport/dos_report.php';
</script>
";
 }else{
    echo"<script>alert('not deleted successfully');</script>"; 
 }
//  if($result){
//      echo "Deleted Successfully";
//  }else{
//      echo"Not Deleted Successfully";
//  }
?>
