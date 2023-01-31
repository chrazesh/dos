
<?php
include 'db_connection.php';
?>

 <div class="row">  
         <div class="col col-md-12"> 
         <table class="table text-center" style="width:100%">

         <thead> 
            <tr>
           
          
            <th scope="col">अ.</th>
            <th scope="col">ई.</th>
           
            </tr>
          </thead>
          <tbody>
            <?php
       $conn = connectMyDB();
        $ids=$_GET['ids'];
        $sql = "SELECT * FROM serviceattacheddetails where intro_id=$ids";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result)
       ?>
           
            <tr>
             
              <td >
                <?php echo $row['rKatrine']; ?></br>
                <?php echo $row['rPublicity1']; ?>
              </td>
              <td >
                
              </td>
        
            </tr>
           
</tbody>
</table>
 </div> 
 </div> 
