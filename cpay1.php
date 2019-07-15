
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
   
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    body, html {
height: 100%;
}
      .bg { 
/* The image used */
background-image: url("	https://housemethod.com/wp-content/nmc-images/2018/06/priscilla-du-preez-638199-unsplash-width2400height1600.jpg");
          
/* Full height */
height: 1010px; 

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
      
      table {
     border: 1px solid black;
   /* border-collapse: collapse;*/
    width: 100%;
          
}
    #table-4 #r1 {color: white;
        background-color:#000000;}

    #head1 { 
        text-align: center;
background-color: yellow;
font-family: arial, sans-serif;
        
font-weight: bold;
margin-top: 0px;
        margin-bottom: 1px;}
 th,td {
     
    padding: 10px;
    text-align: center;
    border-bottom: 1px solid black;
     font-weight: bold;
}
    td {
        color: #8694A3 ;
  font-size: 16px;
}

tr:hover {background-color:black;}
      
      input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
h4
      {
           color: black;
      }
      h1{
          color: #FFFAFA;
      }
  </style>
</head>
<body>
<div class="bg">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><i class="fas fa-dragon" style="font-size:24px;color:white;"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-center">  
    <h1>Enter Your Details</h1>
      </div>
    <div class="col-sm-8 text-left">
      
      <form action="trial.php" method="post" class="form-inline" >
       <!--Date:
       <script language="javascript">
        //    var today= new Date();
          //  document.write(today);
         </script> <br>
        -->
          <div class="form-group">
            <h4>  <label for="date">Date:</label>
         <script language="javascript">
           var today= new Date();
            document.write(today);
         </script> </h4>  
          
           </div>
   <br>
          <div class="form-group">
     <h4> <label for="pid">Product Id:</label>
      <input type="text" class="form-control" name="pid" placeholder="Enter product id"></h4>
    </div>
          
       <!-- Product Id: <input type="text" name="pid" required><br>-->
<div class="form-group">
    <h4>  <label for="cid">Customer Id:</label>
      <input type="text" class="form-control" name="cid" placeholder="Enter customer id"></h4>
    </div>
          <br>
          <br>
          <br>
      <!--  Customer Id: <input type="text" name="cid" required><br>-->
          <button type="submit" class="btn btn-default">Confirm Payment</button>
       <!-- <input type="submit" value="confirm payment"> -->
   <!-- <table>
    <tr>
        <td>Date:</td>
       <td><script language="javascript">
            var today= new Date();
            document.write(today);
           </script></td>
    </tr>
    <tr>
    <td>Product Id:</td>
    <td><input type="text" name="pid" required></td>
    </tr>
        <tr>
    <td>Customer Id:</td>
    <td><input type="text" name="cid" required></td>
    </tr>
    <tr>
    <td><input type="submit" value="confirm payment"></td>
    </tr>
    </table>
-->
    </form>
    
    <?php 
include_once 'connection.php';
    if(mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
 else
 {
     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
$y="CALL getProduct();";
$result=$conn->query($y);
if($result->num_rows>0){
     echo "<br><br>";
        echo "<table id='table-4' border='1'>";
        echo "<tr id ='r1'><td><strong>PRODUCT ID</strong></td><td><strong>PRODUCT NAME</strong></td><td><strong>AMOUNT</strong></td><td><strong>SIZE</strong></td><td><strong>BRAND</strong></td><td><strong>COLOUR</strong></td></tr>";
while($row=$result->fetch_assoc())
{
//echo "productid:".$row["pid"]." "."productname:".$row["prodname"]." "."amount:".$row["amount"]."Size:".$row["size"]." "."Brand:".$row["brand"]." "."Colour:".$row["colour"]." "."<br>";
    echo"<tr><td>{$row["pid"]}</td><td>{$row["prodname"]}</td><td>{$row["amount"]}</td><td>{$row["size"]}</td><td>{$row["brand"]}</td><td>{$row["colour"]}</td></tr>";
}
echo"</table>";}
else
{
echo "0 results";
}
  }
?>
    </div>
    <div class="col-sm-2 sidenav">
      
    </div>
  </div>
</div>
 </div>  
</body>
</html>

