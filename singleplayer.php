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
    <link href="assets/css/stylesF.css" rel="stylesheet" media="screen">

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
        <img src="prfpics/pic.png" class="img-responsive" alt="Responsive image">
        <br>
        <p>Username<b> [Userclass]</b></p>
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
     <table class='table table-striped table-hover' style='width:75%;' id="resultset" align='center'>
      </table>
    <div align='center' id="worddiv">
      <input type="text" maxlength="4" style='width:75%;' class='form-control' id='word' placeholder='Guess' autofocus>
    <br>
        <input type="button" id="giveup" style='width:37.5%;' class='btn btn-danger' value='Give Up' onclick="giveUp();"/>
        <input type="submit" id="submit" style='width:37.5%;' class='btn btn-success' value='Submit' />
    <br><br>
    </div>
    <div id='messageDiv' style='display:none;' class='alert alert-warning'>
    <h4><strong> Uh-Oh! </strong></h4>
    <p id="message"></p>
    </div>
     <br>
   </form>
      </div>
      </div>
    </div>
    </div>
   </div>
</body>
</html>
