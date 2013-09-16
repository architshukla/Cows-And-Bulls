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

<!-- About Modal -->
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     <h4 class="modal-title">About - Cows and Bulls</h4>
   </div>
   <div class="modal-body">
    <div class='well'>
    <p><strong>Cows and Bulls</strong> is a game where a player guesses a word (usually, a 4-letter word without repeating letters) given by another player. Each word is qualified as follows:</p>
    <ol>
      <li> A <strong> "Bull" </strong> is a letter in the guessed word which appears in the same positon as it appears in the original word.</li>
      <li> A <strong> "Cow" </strong> is a letter in the guessed word which appears in a different posiiton as it appeats in the original word.</li>
    </ol>
    <br><p>Proper nouns, abbreviations and acronyms are not allowed.</p>
    <p>The game continues until the player guesses the word correctly, that is, gets "4 Bulls" on a word. Then the opponent gets to play.</p>
    </div>

    <h3 class='text-info'>Examples</h3>
    <div class='well'>
    <ol>
      <li> If the original word is <strong>"GAME"</strong>, and the player guesses the word to be <strong>"FAKE"</strong>, the word is said to have <strong>"2 Bulls"</strong> as the letters A and E appear in GAME and FAKE in the same places</li>
      <li> If the original word is <strong>"GAME"</strong>, and the player guesses the word to be <strong>"HOAX"</strong>, the word is said to have <strong>"1 Cow"</strong> as the letter A appears in both GAME and HOAX but in different places.</li>
      <li> If the original word is <strong>"GAME"</strong>, and the player guesses the word to be <strong>"EATS"</strong>, the word is said to have <strong>"1 Bull and 1 Cow"</strong> where E is the "Cow" and A is the "Bull".</li>
    </ol>
</div>

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!--Ratings-->
<div class="modal fade" id="ratingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
     <button type="button" onclick='clearRatings()' class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
     <h4 class="modal-title">Rate Us!</h4>
   </div>
   <div class="modal-body" align='center'>
     <form>
       <table class="table table-bordered table-striped table-hover" style='width:75%;'>
        <tr>
          <th style='width=34%'></th>
          <th style='width=33%' align="center">Stars</th>
          <th style='width=33%' align="center">Ratings</th>
        </tr>
        <!--1 Star -->
        <tr>
          <td>
          <a class='btn btn-warning btn-sm'>
          <span class='glyphicon glyphicon-star'></span>
          </a>
          </td>
          <td align="center" >1</td>
          <td align="center"><input type="radio" id="1" name="ratings" value="1"></td>
        </tr>
        <!-- 2 Stars -->
        <tr>
         <td>
         <a class='btn btn-warning btn-sm'>
         <span class='glyphicon glyphicon-star'></span>
         <span class='glyphicon glyphicon-star'></span>
         </a>
         </td>
         <td align="center" >2</td>
         <td align="center"><input type="radio" id="2" name="ratings" value="2"></td>
       </tr>
       <!-- 3 Stars -->
       <tr>
        <td>
        <a class='btn btn-warning btn-sm'>
          <span class='glyphicon glyphicon-star'></span>
          <span class='glyphicon glyphicon-star'></span>
          <span class='glyphicon glyphicon-star'></span>
          </a>
        </td>
        <td align="center" >3</td>
        <td align="center"><input type="radio" id="3" name="ratings" value="3"></td>
      </tr>
      <!-- 4 Stars -->
      <tr>
       <td>
       <a class='btn btn-warning btn-sm'>
        <span class='glyphicon glyphicon-star'></span>
        <span class='glyphicon glyphicon-star'></span>
        <span class='glyphicon glyphicon-star'></span>
        <span class='glyphicon glyphicon-star'></span>
        </a>
      </td>
       <td align="center" >4</td>
       <td align="center"><input type="radio" id="4" name="ratings" value="4"></td>
     </tr>
     <!-- 5 Stars -->
     <tr>
       <td>
       <a class='btn btn-warning btn-sm'>
       <span class='glyphicon glyphicon-star'></span>
       <span class='glyphicon glyphicon-star'></span>
       <span class='glyphicon glyphicon-star'></span>
       <span class='glyphicon glyphicon-star'></span>
       <span class='glyphicon glyphicon-star'></span>
       </a>
       </td>
       <td align="center" >5</td>
       <td align="center"><input type="radio" id="5" name="ratings" value="5"></td>
     </tr>

   </table>
   <table class=" table table-bordered table-striped table-hover">
   <tr>
	<p>Feedback</p>
	<div><textarea name="feedback" id= "feedback" class="form-control" rows="4"></textarea></div>
	</tr>
	</table>
   <input type="button" class='btn btn-info' value='Submit Ratings' onclick='validateRatings()'>
   <input type="reset" class='btn btn-default' value='Clear' onclick='hideAlert("ratingErrorDiv")'> 
 </form>
 <div id='ratingErrorDiv' style='display:none;' align="left">
  <br><br>
  <div class="alert alert-danger">
    <strong>Oops!</strong> <p id='ratingErrorMessage'>Please Rate!</p>
  </div> 
  </div>
  <div id='ratingSuccessDiv' style='display:none;' align="left">
    <br><br>
    <div  class='alert alert-success' >
      <strong>Success!</strong> Your ratings and feedback are noted </div>
 
  </div>
  
</div>
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

<script>
  $('.carousel').carousel({interval: 3000});
      // document.getElementById('carousel-example-generic').style.width=screen.width+"px";
      document.getElementById('carousel-example-generic').style.height=screen.height+"px";
      // var existingHeight = document.getElementById('carouselImage1').height;
      // var newHeight = window.innerHeight-0.18*window.innerHeight;
      // var diff = 1 - existingHeight/newHeight;

      // var existingWidth = document.getElementById('carouselImage1').width;
      // var newWidth = (int)existingWidth + existingWidth*diff;

      // document.getElementById('carouselImage1').style.height=(window.innerHeight-0.18*window.innerHeight)+"px";
      // document.getElementById('carouselImage1').style.width=newWidth+"px";

      // document.getElementById('carouselImage2').style.height=(window.innerHeight-0.18*window.innerHeight)+"px";
      // document.getElementById('carouselImage2').style.width=newWidth+"px";

      // document.getElementById('carouselImage3').style.height=(window.innerHeight-0.18*window.innerHeight)+"px";
      // document.getElementById('carouselImage3').style.width=newWidth+"px";
    </script>
  </body>
  </html>