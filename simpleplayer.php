<?php  
    session_start(); 
    $_SESSION['attempts']=0;
    $_SESSION['random'] = shell_exec('python scripts/randomwordgenerator.py');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <title><? echo $_SESSION['random'] ?>Single Player Mode | Cows And Bulls</title>
    <meta content="text/html; charset=utf-8" http-equiv="content-type" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
 <?php  require_once('modules.php') ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <div class="container">
   <form onsubmit="processword(); return false;">
     <div id="resultset">
      </div>
    <input type="text" maxlength="4" size="4" id='word' class="form-control" placeholder='Guess' />
    <input type="button" id="submitword" class='btn btn-success' value='Enter' onclick="processword();"/>
     <br>
   </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
</div>
</body>
</html>