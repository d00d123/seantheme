<!--Navigation-->    
<script>div.force-down {
    height: 500px;
    width: 100%;
    color:black;
    display: block;
}</script>
<div class="force-down"></div>
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#siteNav" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
     </button>
     
      <a class="navbar-brand" href="index.php">
        Matt Anderson
      </a>
    </div>
    
    <div class="collapse navbar-collapse" id="siteNav">
        <ul class="nav navbar-nav">
            <li <?php if ($currentPage === 'Home') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
            <li <?php if ($currentPage === 'About') {echo 'class="active"';} ?>><a href="aboutme.php">About me</a></li>
            <li <?php if ($currentPage === 'Skills') {echo 'class="active"';} ?>><a href="skills.php">Skills</a></li>
            <li <?php if ($currentPage === 'Work History') {echo 'class="active"';} ?>><a href="workhistory.php">Work history</a></li>
            <li <?php if ($currentPage === 'Projects') {echo 'class="active"';} ?>><a href="projects.php">Projects</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="https://twitter.com/matt_anderson0" target="_blank"><img src="images/twitglyph-01-01.png" alt="" height="18px;"></a></li>
        </ul>
    </div>
  </div>
</nav> 
<!--/Navigation-->