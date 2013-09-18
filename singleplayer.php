<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php  
    session_start(); 
    $_SESSION['attempts']=0;
    $_SESSION['random'] = shell_exec('python scripts/randomwordgenerator.py');
?>
  <head>
    <title>Single Player Mode | Cows And Bulls</title>
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <?php
    require_once('navbar.php');
    require_once('modules.php');      
  ?>
  <div class="container">
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3 sidebar-offcanvas" id="sidebar" data-toggle="collapse" role="navigation">
      <div class="well sidebar-nav">
        <section>
        <img src="prfpics/ravikiran.jpg" class="img-responsive" alt="Responsive image">
        <br>
        <p>Ravi Kiran<b>[Newbie]</b></p>
        </section>
        <ul class="nav">
          <li>Achievments</li>
          <li><a href="#">Number of Wins</a></li>
          <li><a href="#">Number of Words found</a></li>
          <li><a href="#">Challenges</a></li>
        </ul>
      </div><!--/.well -->
    </div><!--/span-->
    <div class="col-xs-6 col-sm-3 col-md-9 pull-right">
    <div class="container-fixed">
    <div class="jumbotron">
   <form onsubmit="processword(); return false;" id="wordform">
     <div id="resultset">
      </div>
    <input type="text" maxlength="4" size="4" id='word' class="form-control" placeholder='Guess' /><p id="message"></p>
     <br>
   </form>
      </div>
      </div>
    </div>
    </div>
   </div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>