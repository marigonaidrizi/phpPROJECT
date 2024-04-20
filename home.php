<?php
require('config.php');

$sql="SELECT * FROM users";
$seletUsers=$conn->prepare($sql);
$seletUsers->execute();
$users_data=$seletUsers->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>GYM </title>
  <link href="https://uploads-ssl.webflow.com/63d50bcdf7e09b2e8323c38e/css/solomons-beautiful-site-03091b.webflow.c9c0d0fd3.css" rel="stylesheet" type="text/css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com" rel="preconnect"/>
 <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
        <style type="text/css">
          .h1-text{
            margin: 20px;
            padding: 20px;
            text-align: center;
          }

       
    .member{
      width: 100%;
      height: 100%;
    }
    #carouselExampleIndicators{
      width: 100%;
      padding: 0px;
      height: 100%;

      
      }  
        </style>
    


  
  


	
</head>
<body>
 <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  
  
  <div class="container-fluid" style="float: left">
    
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="image/gym.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      GYM
    </a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="float: right">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
       
        <a class="nav-link active" href="home.php">Home</a>
        
        <a class="nav-link " href="dashboard.php">Dashboard</a>
        <a class="nav-link" href="dashboardmember.php">Dashboard Member</a>
        
       
      </div>
    </div>
  </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/image1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/image2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/logo.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="member">
<h1 class="h1-text">Choose your Membership</h1>

                        <div class="card-price-wrapper">
                    <div class="card-price">
                        <div class="headline">Online Coaching</div>
                        <p class="paragraph small">
                            Our mission is to provide you, yes YOU with the <strong>UK &#x27;s highest quality Online Personal Training service</strong>
                            and transform both your body and mind in the quickest possible way!
                        </p>
                        <div class="headline price">
                            £30.00 <span class="month">/month</span>
                        </div>
                        <ul role="list" class="list">
                            <li class="list-item">
                                <div class="text-block-146">Bespoke Training Plan</div>
                            </li>
                            <li class="list-item">
                                <div class="text-block-146">Weekly, in-depth video feedback – a truly personal way to help you reach your goals</div>
                            </li>
                            <li class="list-item">
                                <div class="text-block-146">Unlimited support</div>
                            </li>
                            <li>
                                <div class="text-block-146">Weekly check-ins</div>
                            </li>
                        </ul>
                        <a href="addmember.php" class="button-black right-margin _100 w-button">Lets begin</a>
                    </div>
                    <div class="card-price">
                        <div class="headline">Nutrition Plan</div>
                        <p class="paragraph small">
                            Our mission is to provide you, yes YOU with the <strong>UK &#x27;s highest quality Online Personal Training service</strong>
                            and transform both your body and mind in the quickest possible way!
                        </p>
                        <div class="headline price">
                            £30.00 <span class="month">/month</span>
                        </div>
                        <ul role="list" class="list">
                            <li class="list-item">
                                <div class="text-block-146">Bespoke Training Plan</div>
                            </li>
                            <li class="list-item">
                                <div class="text-block-146">Weekly, in-depth video feedback – a truly personal way to help you reach your goals</div>
                            </li>
                            <li class="list-item">
                                <div class="text-block-146">Unlimited support</div>
                            </li>
                            <li>
                                <div class="text-block-146">Weekly check-ins</div>
                            </li>
                        </ul>
                        <a href="addmember.php" class="button-black right-margin _100 w-button">Lets begin</a>
                    </div>
                    <div class="card-price popular">
                        <div class="close-wrapper popular">
                            <div data-w-id="b1e4a768-2ea1-9403-e76c-134037efb952" class="text-block-141 popular">Popular</div>
                        </div>
                        <div class="headline">Focal Point Package</div>
                        <p class="paragraph small">
                            Our mission is to provide you, yes YOU with the <strong>UK &#x27;s highest quality Online Personal Training service</strong>
                            and transform both your body and mind in the quickest possible way!
                        </p>
                        <div class="headline price">
                            £45.00 <span class="month">/month</span>
                        </div>
                        <ul role="list" class="list">
                            <li class="list-item">
                                <div class="text-block-146">Bespoke Training &amp;Nutrition Plan</div>
                            </li>
                            <li class="list-item">
                                <div class="text-block-146">Weekly, in-depth video feedback – a truly personal way to help you reach your goals</div>
                            </li>
                            <li class="list-item">
                                <div class="text-block-146">Unlimited support</div>
                            </li>
                            <li>
                                <div class="text-block-146">Weekly check-ins</div>
                            </li>
                        </ul>
                        <a href="addmember.php" class="button-black right-margin _100 w-button">Lets begin</a>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="text-block-147">
                    <h3 class="heading-3">FAQs</h3>
                    <p class="p-coaching centre">Below are some frequently asked questions, if you are still unsure please contact us. We help everyone achieve their goals whether you are beginner or a proffesional athlete. </p>
                </div>
   </div>             
        <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63d50bcdf7e09b2e8323c38e" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://uploads-ssl.webflow.com/63d50bcdf7e09b2e8323c38e/js/webflow.e034ecd21.js" type="text/javascript"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>