<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
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
  <?php  require_once('navbar.php') ?>
  <div class="container">
    <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-3 sidebar-offcanvas" id="sidebar" data-toggle="collapse" role="navigation">
      <div class="well sidebar-nav">
        <section>
        <img src="prfpics/ravikiran.jpg" class="img-responsive" alt="Responsive image">
        <br>
        <p>Ravi Kiran<b>[New Bie]</b></p>
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
      <div class="row">
        <input type="text" size="1" maxlength="1" name="w1">
        <input type="text" size="1" maxlength="1" name="w2">
        <input type="text" size="1" maxlength="1" name="w3">
        <input type="text" size="1" maxlength="1" name="w4">
      </div>
      <br>
      <div class="row">
        <input type="text" size="1" maxlength="1" name="w1">
        <input type="text" size="1" maxlength="1" name="w2">
        <input type="text" size="1" maxlength="1" name="w3">
        <input type="text" size="1" maxlength="1" name="w4">
      </div>
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