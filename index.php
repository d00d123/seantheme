<!DOCTYPE html>
<html lang="en">

<?php $currentPage = 'Home'; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    
    <!--Google Fonts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,400italic,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,700italic,400italic' rel='stylesheet' type='text/css'>
    
    <!--My links-->
    <link rel="stylesheet" href="css/stylesheet.css">
    
    <title>Matt Anderson's Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/carousel.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<!--Navigation-->    
<!--test dynamic nav
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#siteNav" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
     </button>
     
      <a class="navbar-brand" href="index.html">
        Matt Anderson
      </a>
    </div>
    
    <div class="collapse navbar-collapse" id="siteNav">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="aboutme.html">About me</a></li>
            <li><a href="skills.html">Skills</a></li>
            <li><a href="workhistory.html">Work history</a></li>
            <li><a href="projects.html">Projects</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="https://twitter.com/matt_anderson0" target="_blank"><img src="images/twitglyph-01-01.png" alt="" height="18px;"></a></li>
        </ul>
    </div>
  </div>
</nav> -->

<?php include ('navbar.php'); ?>
<!--/Navigation-->

<!--Jumbotron-->

<div class="jumbotron" style="background-image: url(images/BC%20Bridge.jpg);">
    <div class="container">
        <h1 class="jumbotron-heading">Thanks for stopping by!</h1>
        <p class="jumbotron-text">I want to take a moment to introduce myself and show you some of my work.<br/>My name is Matt, and I like working on digital content.<br/>Websites? No problem. JQuery? Let me at it. Just organizing a bunch of content? I'm your guy.</p>
        <p><a href="projects.html" class="btn btn-primary btn-lg">Check out my work</a></p>
    </div>
</div>

<!--/Jumbotron-->
  
   
<!--Container to centre the rest of the page-->
  <div class="container marketing">
      <!--Columns-->
<div class="row">
  <div class="col-lg-4"><img src="images/Headshot-Square.jpg" alt="" class="img-circle" width="140px" height="140px">
  <h2>Who am I?</h2>
  <p class="columnText">As I said above, my name is Matt. That's just a brief introduction, though. As we all know, personality is more than a name. I like building sites and organizing web content (and talking endlessly about space). On second thought, head over to About Me to get a better idea of who I am.</p>
  <p><a href="aboutme.html" class="btn btn-info" href="aboutme.html">Go on, learn about me.</a></p>
 </div>
  <div class="col-lg-4"><img src="images/Code-Square2.jpg" alt="" class="img-circle" width="140px" height="140px">
  <h2>What can I do?</h2>
      <p class="columnText">I've been working on my digital skill set since I started my career and I always look for ways to help me learn something new that will support the work I'm passionate about. Over on my skills page I outline just why I think I'm an asset to any web team.</p>
  <p><a href="skills.html" class="btn btn-info">Visit the skills page.</a></p>
  </div>
  <div class="col-lg-4"><img src="images/civic-centre.jpg" alt="" class="img-circle" width="140px" height="140px">
  <h2>Where have I worked?</h2>
  <p class="columnText">I think it was Johnny Cash who said "I've been everywhere, man." Well, good for Johnny but I haven't been everywhere. However, the places I have worked have all given me unique skills that I use every day - from customer service to writing. I'm always building my skills.</p>
  <p><a href="aboutme.html" class="btn btn-info">Check out my work history.</a></p>
  </div>



</div>
        
</div>
<!--/container-->  
<!--/Columns-->

    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
