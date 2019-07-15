
<?php

 include_once 'connection.php';
    if(mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }

$sql = "SELECT cid, amount FROM customer,product where cid=$cid";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> ". $row["cid"]. " - Name: ". $row["amount"]. " . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

