<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="./index.php">CMF-FS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="myaccount.php?item=newcase">NEW CASE</a></li>
        <li><a href="myaccount.php">PREVIOUS CASES</a></li>
        <li><a href="myaccount.php?item=settings">ACCOUNT</a></li>
        <li><a href="template/logout.php">SIGN OUT</a></li>
      </ul>
    </div>
  </div>
</nav>

  <div class="jumbotron text-center">
  
  <h1>CMF-FS</h1> 
   <p>Welcome, <?php echo $_SESSION['USERNAME'];?></p> 
    
             
   </div>