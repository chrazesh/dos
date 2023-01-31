<?php
 include('../db_connection.php');
 $id =$_GET['intro_id'];
 $conn = connectMyDB();
 $sql = "UPDATE introductiondetails SET active_state=0 WHERE id = '$id'";
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
