<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A 5star exquisite restaurant situated at lekki close to the Beach, wining and dining at its peak">
    <meta name="author" content="BAXX">
	<link rel="icon" href="img/fav.png"
    <!-- core cdn External Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <!-- custom Styles -->
    <link rel="stylesheet" href="css/custom.css"
	
    
    <!-- External Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <!-- Internal Scripts -->
	<script type="text/javascript" src="">
	</script>
    

    <title>Big Belly Chow</title>
   


	
</head>

<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
           <div class="container">

       
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html"><img src="img/newlogo.jpg" class="img-fluid" alt="">
</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chows</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order</a>
                </li>
                
                </ul>
            <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
            
        </div>
    </div>
    </nav>
    
    
 <div id="carouselFull" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselIndicators" data-slide-to="1"></li>
           <li data-target="#carouselIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block w-100" src="img/f4.jpg" alt="First slide">
               <div class="carousel-caption d-none d-md-block">
                   <h1 style="color: hotpink">Big Belly Chow</h1>
                   <p>Welcome to Big Belly</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="img/s2.jpg" alt="Second slide">
               <div class="carousel-caption d-none d-md-block">
                   <h1 style="color: hotpink">Chow Finesse</h1>
                   <p>Second caption</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block w-100" src="img/s3.jpg" alt="Third slide">
               <div class="carousel-caption d-none d-md-block">
                   <h1 style="color: hotpink">Big Belly Chow</h1>
                   <p>Third caption</p>
               </div>
           </div>
       </div>
       <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>
    <div id="about" class="container">
    <div class="starter-template">
        <h1>Big Belly's Food, Wines and Bar</h1>
        <p>Order, Eat, drink and play. Finger-lickin good Chow. We got the best of best food and drinks... I can guarantee that for you. Try and be hungry for more Finnesse food.</p>
        </div>
    </div>

    <div><img src="img/c1.jpg" width="50%"  alt="cash on d"><img src="img/c2.jpg"></div>




  <div style="background-color: hotpink">




<?php
$dbname ="bigbelly";
$host = "localhost";
$user ="root";
$password ="";
$conn = mysql_connect($host,$user,$password) or die(mysql_error());
mysql_select_db($dbname,$conn);
if (isset($_POST['submit'])) {
    extract($_POST);


    $sql = "INSERT INTO delivery_details (name,emailAddress,phone,city,da) VALUES ('$name','$emailAddress','$phone','$city','$da')";
    $query = mysql_query($sql) or die(mysql_error());
    echo '<div class="alert alert-success"><h1>THANKS FOR CHOOSING BIG BELLY CHOW <BR> YOUR FOOD WILL BE DELIVERED SHORTLY <br> <a href="index.html">GO BACK HOME TO ORDER FOR YOUR BIG BELLY CHOW</a></h1></div>';

}
?>

</div>
</body>
</html>
