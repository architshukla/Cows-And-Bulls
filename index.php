<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Cows And Bulls</title>
  <meta content="text/html; charset=utf-8" http-equiv="content-type" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- Custom Styles -->
  <link href="assets/css/styles.css" rel="stylesheet" media="screen">
  <!-- Java Script Functions -->
  <?php  require_once('modules.php') ?>

</head>
<body>
  <!-- Carousel -->
  <div id="carousel-example-generic" class="carousel slide">
    <!-- Navbar -->
    <?php  require_once('navbar.php') ?>

    <!-- Indicators -->
    <?php  require_once('indicators.php') ?>


    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" align='center'>
        <img id='carouselImage1' src="assets/img/1.jpg" alt="Practice" height="600" width="545">
        <div class="carousel-caption">
          <h2 class='text-primary'><strong>Hone Your Skills!</strong></h2>
          <h3>Practice against the computer.</h3>
          <input type='button' class='btn btn-primary btn-lg' value='Start Now!'>
          <br>
        </div>
      </div>
      <div class="item" align='center'>
        <img id='carouselImage2' src="assets/img/2.jpg" alt="Double1" height="600" width="545">
        <div class="carousel-caption">
          <h2 class='text-primary'><strong>Play With a Friend!</strong></h2>
          <h3>Challenge your friends to a game.</h3>
          <input type='button' class='btn btn-primary btn-lg' value='Start Now!'>
          <br>
        </div>
      </div>
      <div class="item" align='center'>
        <img id='carouselImage3' src="assets/img/3.jpg" alt="Double2" height="600" width="545">
        <div class="carousel-caption">
          <h2 class='text-primary'><strong>Fastest Guesser First!</strong></h2>
          <h3 >Guess the word in lesser tries than your opponent.</h3>
          <input type='button' class='btn btn-primary btn-lg' value='Start Now!'>
          <br>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </div>

  <!-- Sign In Modal -->
  <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Sign In Form</h4>
        </div>
        <div class="modal-body">
          <form>
            <input type="text" id='signInUsername' class="form-control" placeholder='Enter Your Username' autofocus>
            <br>
            <input type="password" id='signInPassword' class="form-control" placeholder='Enter Your Password'>
            <br>
            <input type="button" class='btn btn-success' value='Log In!' onclick="validateSignIn()">
            <input type="reset" class='btn btn-default' value='Clear' onclick='hideAlert("signInErrorDiv")'>
          </form>
          <div id='signInErrorDiv' style='display:none;'>
            <br><br>
            <div class="alert alert-danger">
              <strong>Opps!</strong> <p id='signInErrorMessage'>Sign In failed.</p>
            </div>
          </div>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Sign Up Modal -->
  <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Sign Up Form</h4>
        </div>
        <div class="modal-body">
          <form>
            <input type="text" id='signUpUsername' class="form-control" placeholder='Enter A Username'>
            <br>
            <input type="password" id='signUpPass1' class="form-control" placeholder='Enter A Password'>
            <br>
            <input type="password" id='signUpPass2' class="form-control" placeholder='Re-enter Password'>
            <br>
            <input type="button" class='btn btn-info' value='Register' onclick='validateSignUp()'>
            <input type="reset" class='btn btn-default' value='Clear' onclick='hideAlert("signUpErrorDiv")'>
          </form>
          <div id='signUpErrorDiv' style='display:none;'>
            <br><br>
            <div class="alert alert-danger">
              <strong>Opps!</strong> <p id='signUpErrorMessage'>Something went wrong!</p>
            </div>
          </div>

          <div id='signUpSuccessDiv' style='display:none;'>
            <br><br>
            <div  class='alert alert-success' >
              <strong>Success!</strong> You have been registered. <a class='alert-link' href=''>Click here</a> to start! <!-- TODO -->
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <script>
    $('.carousel').carousel({interval: 3000});
    document.getElementById('carousel-example-generic').style.height=screen.height+"px";
  </script>
</body>
</html>