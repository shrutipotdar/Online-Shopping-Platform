
<?php
  include_once 'connection.php';
    if(mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
 else
 {
 $cpid=test_input($_POST['pid']); 
  function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
   
     
 if($cpid=="1")
 {
  $sql="select prodname,amount from product where pid=1;";
  $result=$conn->query($sql);
  if($result->num_rows>0){
  while($row=$result->fetch_assoc())
  {
  echo "productname:".$row["prodname"]." "."productamount:".$row["amount"]."<br>";
  }
  }
     $conn->close();
 }
     else if($cpid=="2")
     {
        $sql="select prodname,amount from product where pid=2;";
  $result=$conn->query($sql);
  if($result->num_rows>0){
  while($row=$result->fetch_assoc())
  {
  echo "productname:".$row["prodname"]." "."productamount:".$row["amount"]."<br>";
  }
  } $conn->close();
     }
     else
     {
         $sql="select prodnameaount from product where pid=3;";
  $result=$conn->query($sql);
  if($result->num_rows>0){
  while($row=$result->fetch_assoc())
  {
  echo "productname:".$row["prodname"]." "."productamount:".$row["amount"]."<br>";
  }
  }$conn->close(); 
     }
     
 }
$stmt->close();
        $conn->close();
?>