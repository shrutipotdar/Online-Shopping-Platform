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
background-color: ;
height: 100%;
    }
/* Set black background color, white text and some padding */

/* On small screens, set height to 'auto' for sidenav and grid */
@media screen and (max-width: 767px) {
.sidenav {
height: auto;
padding: 15px;
      }
.row.content {height:auto;} 
    }
  /*  body, html {
height: 100%;
}
.bg { 
 The image used */
/*background-image: url("	https://i.pinimg.com/originals/d6/50/aa/d650aa5a438961872a2028d813a3b875.jpg");

 Full height 
height: 100%; 

Center and scale the image nicely 
background-position: center;
background-repeat: no-repeat;
background-size: cover;
} 
    */ a {
        color: white;
    }
    a:link{
        color: white;
        text-decoration: underline;
    
    } 
    
a:visited {
    text-decoration: none;
}
    
a:hover {
    color: #ADFF2F;
   
        
}
    
a:active {
    text-decoration: underline;
}
    h1 {
        color: white;
    }
/* selected link */


    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* Full height */
  height: 70%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Images used */
.img1 { background-image: url("		https://wallpapercave.com/wp/wp3130197.jpg"); }
.img2 { background-image: url("		https://www.nastygal.com/on/demandware.static/-/Library-Sites-nastygal-content-global/default/dw8a3714db/images/home/Uk_60_AUTO_DESKTOP88.gif"); }
.img3 { background-image: url("https://www.decoratingcentreonline.co.uk/media/wysiwyg/NEW_ARRIVALS_2018_v2.jpg	"); }
.img4 { background-image: url("		https://www.magee1866.com/Images/Content/What-Wear-to-Cheltenham-Races-Page-Banner-Mobile.jpg	"); }
.img5 { background-image: url("	https://hadyswears.com.ng/wp-content/uploads/2018/06/woman-fashion.jpg"); }
.img6 { background-image: url("		http://www.chichiclothing.com/product_images/uploaded_images/summe-sale-home.jpg"); }

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 300px;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>
<!-- <div class="bg"> -->
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
        <li><a href="home.html">Home</a></li>
        <li><a href="page4.html">About</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-image img5"></div>
<div class="bg-image img6"></div>
  
<!-- <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    <br>
        <br>
        <br>
        <br>
        <img src="http://www.bethesdatailors.com/wp-content/uploads/2018/07/a78e5153d2287e7f8c16505e018cdad2.jpg">
      </div>
    <div class="col-sm-8 text-center"> 
   --> 
     <?php 
$cfname=test_input($_POST['fname']);
$clname=test_input($_POST['lname']);
$caddress=test_input($_POST['address']);
$cphoneno=test_input($_POST['phoneno']);
$cemailid=test_input($_POST['emailid']);

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if(!empty($cfname) || !empty($lfname) || !empty($caddress) || !empty($cphoneno) || !empty($cemailid)){
    include_once 'connection.php';
    if(mysqli_connect_error())
    {
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT cphoneno From customer Where cphoneno=? Limit 1";
        $INSERT="INSERT Into customer (cfname,clname,caddress,cphoneno,cemailid) values(?,?,?,?,?)";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("i",$cphoneno);
        $stmt->execute();
        $stmt->bind_result($cphoneno);
        $stmt->store_result();
        $rnum= $stmt->num_rows;
        
        if($rnum==0){
            $stmt->close();
            $stmt= $conn->prepare($INSERT);
            $stmt->bind_param("sssis",$cfname,$clname,$caddress,$cphoneno,$cemailid);
            $stmt->execute();
            
        $mysql="SELECT max(cid) AS number FROM customer";
        $results=mysqli_query($conn,$mysql);

     $row=mysqli_fetch_array($results);
    echo '<script type="text/javascript">';
    echo 'alert("Successful signup your customer number is:' . $row['number'] . '")';
    echo '</script>';
           // echo '<script language="javascript">';
//echo 'alert("Your details have been successfully submitted!! and your customer id is:"'.$result.'"")';
//echo '</script>';
            echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                
             echo  '<div class="bg-text"><h1><i><a href=http://localhost/cpay1.php>Click here for Payment!!!!</a></i></h1></div>';
            
        }else{
            echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
                 echo '<br>';
        $mysql1="SELECT cid AS number FROM customer WHERE cphoneno=$cphoneno";
        $results1=mysqli_query($conn,$mysql1);
        $row1=mysqli_fetch_array($results1);
        echo '<script type="text/javascript">';
             echo 'alert("You have been registered already!!!your customer number is:' . $row1['number'] . '")';
            echo '</script>';   
            echo '<div class="bg-text"><h1><i><a href=http://localhost/cpay1.php>Click here for Payment!!!!</a></i></h1></div>';
             
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "all fields are required";
    die();
}
?>
<!--</div>
<div class="col-sm-2 sidenav">
<img src="https://i.pinimg.com/originals/01/54/8b/01548b8b905721fc90a3f9b298302d40.jpg" height="200" width="200">
<br>
<img src="https://www.shopfittingwarehouse.co.uk/images/sale-now-on-arrow-sign-h24-x-w18-5-inch-p302-466_image.jpg" height="150" width="200">
<br> 
<img src="https://i.pinimg.com/736x/ab/83/34/ab8334bcf32f06e431ce0b930a0db72c.jpg" height="200" width="200">
<br>
</div>
</div>
</div>

</div>-->     
</body>
</html>