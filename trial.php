<html>
<head>
<title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
   /* .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    .sidenav {
      padding-top: 40px;
      background-color: #f1f1f1;
      height: 80%;
     width: 20%;
    }
    footer {
      background-color: #f2f2f2;
      padding: 15px;
    } */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 25px;
      background:black;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background:black;
        padding:25px
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
          background:black; 
        padding: 20px;
      }
      .row.content {height:auto;} 
    }
    .carousel-item{
    height: 200px;
} 
.carousel-item img{
    height: 200px;
}
     body, html {
height: 100%;
}
      .bg { 
/* The image used */
background-color: black;
          
/* Full height */


/* Center and scale the image nicely */

}
h4
 {
   color: white;
     font-family: "Georgia", Times, serif;
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
        <a class="navbar-brand" href="#">   <i class="fas fa-dragon" style="font-size:24px;color:white;"></i></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home1.html">Home</a></li>
        <li><a href="page4.html">About</a></li>
      </ul>
    </div>
  </div>
</nav> 
 <div class="container-fluid text-center">    
  <div class="row content">
<?php
    $pid=$_POST['pid'];
     $cid=$_POST['cid'];
    
    if(!empty($pid)){
        include_once 'connection.php';
if(mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
        else{
//echo "Welcome: ". $_GET['pid']. "<br />";>
$sql="select prodname,brand,style,size,gender,colour,quantity,amount from product where pid=$pid";
$result = $conn->query($sql);
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
      
   
     
        echo'  <div class="col-sm-2 sidenav">';
         echo '<br>';
       echo' <p class="text-info">';
         echo "<h4>PRODUCT NAME:" . $row["prodname"]."</h4><br>";
        echo "<h4>BRAND: " . $row["brand"]. "</h4><br>";
        echo "<h4>STYLE: " . $row["style"]. "</h4><br>";
        echo "<h4>SIZE: " . $row["size"]. "</h4><br>";
        echo "<h4>GENDER: " . $row["gender"]. "</h4><br>";
        echo "<h4>COLOUR: " . $row["colour"]. "</h4><br>";
        echo "<h4>QUANTITY: " . $row["quantity"]. "</h4><br>";
        echo "<h4>AMOUNT: " . $row["amount"]. "</h4><br>";
      echo '  </p>';
       echo '<a href="http://localhost/corder.html"><button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">confirm order</button></a>';
       echo '</div>';
       
    }
} else {
    echo "0 results";
}                             
 }
        $sql1="INSERT INTO payment(cid,paydate,paymode,amount,pid) VALUES((SELECT cid FROM customer WHERE cid=$cid),NOW(),'COD',(SELECT 
    amount FROM product WHERE pid=$pid),(SELECT pid FROM product WHERE pid=$pid))";
    if(mysqli_query($conn,$sql1))
    {
        echo '<script language="javascript">';
echo 'alert("Your details have been successfully submitted!!")';
echo '</script>';
    }
    else
    {
        echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
        // $sql2="SELECT max(payid) FROM payment";
   //$sql2="SELECT MAX(payid) FROM payment";
     // $result=mysqli_query($conn,$sql2);
     //  echo '<button type="submit" class="btn btn-info" data-toggle="collapse" data-target="#demo">cancel order</button>';   
    //echo ' <input type="submit" id="submit" value="cancel order">';
        
      //if(isset($_POST['submit']))
     // {
         // $sql2="SELECT max(payid) FROM payment";
         // if(mysqli_query($conn,$sql2))
         // {
         //  $sql3="DELETE FROM payment WHERE payid=$result";
             // if(mysqli_query($conn, $sql3)){ 
    //echo "Record was deleted successfully."; 
//}  
//else{ 
   // echo "ERROR: Could not able to execute $sql. "  
                                  // . mysqli_error($link); 
//} 
          
    //  }
}
?>
      <div class="col-sm-8 text-left"> 
          <br>
          <br>
          
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="	
http://itrend.es/wp-content/uploads/2018/04/lauren-roberts-469994-unsplash.jpg">
    </div>

    <div class="item">
      <img src="	
https://art8amby.files.wordpress.com/2010/02/lacoste-ss-2010-taylor-fuchs-lasse-pedersen-by-ellen-von-unwerth.jpg" alt="Chicago" >
    </div>

    <div class="item">
      <img src="	
https://images.unsplash.com/photo-1490481651871-ab68de25d43d?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bea145e75de8fd2251f2b6480bad06a2&w=1000&q=80" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 
          </div>
       <div class="col-sm-2 sidenav">
           <img src="https://thumbs.gfycat.com/JuicyFearlessAzurewingedmagpie-small.gif" width="200" height="240">
           <br>
           <img src="	https://i.pinimg.com/originals/1e/3f/1c/1e3f1cff3b0382e6e94d1d8b41087207.gif
" width="200" height="240"  >
           <br>
           
<img src="	
	
https://about.easil.com/wp-content/uploads/flash_sale_gif_template_with_text_glow_web_a.gif"  width="200" height="240">
            </div>
  </div>
</div>
  <!--  <footer class="container-fluid text-center">
    <a href="http://localhost/corder.html"><input type="button" value="Confirm Order"></a>
    </footer> -->
    
   <!-- <footer class="container-fluid text-center">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">confirm order</button>
  
</footer>
--><br>
     <br>
     <br>
    
     <div class="container-fluid text-center"><a href="cancel.php">
  <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">cancel order</button>
    </a>
     </div>
     <br>
     <br>
     <br>
    <footer class="container-fluid text-center">
  </footer> 
   </div>
   
</body>
</html>