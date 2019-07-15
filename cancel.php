<?php
include_once 'connection.php';
if(mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
 else
 { 
 //$sql = "DELETE FROM payment WHERE payid=(SELECT MAX(payid) FROM payment)"; 
  $sql="delete from payment
order by payid desc limit 1" ;
if(mysqli_query($conn, $sql)){ 
   echo "<script>
alert('Your order has been cancelled successfully');
    window.location.href = 'home1.html';
</script>"; 
}  
else{ 
    echo "ERROR: Could not able to execute $sql. "  
                                   . mysqli_error($conn); 
} 
 }














?>