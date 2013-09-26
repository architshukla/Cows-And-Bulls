<div class="navbar-wrapper">
  <div class="container">

   <div class="navbar navbar-inverse ">
     <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="javascript:void(0);">Cows and Bulls</a>
       </div>
       <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
           <li class="active"><a href="index.php">Home</a></li>
           <li><a href="#aboutModal" data-toggle="modal">About</a></li>
           <li><a href="#ratingModal" data-toggle="modal">Rate Us!</a></li>
           <li><a href="https://github.com/architshukla/Cows-And-Bulls">Fork Us!</a></li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
          <?php 
          if(!isset($_SESSION['username']))
          {
            echo "&nbsp;
            <button class='btn btn-info navbar-btn' onclick='signUpModalBringUp()'>Sign Up!</button>
            &nbsp;
            <button class='btn btn-success navbar-btn' onclick='signInModalBringUp()'>Sign In</button>";        
          }
          else
          {
            echo "&nbsp;<button class='btn btn-success navbar-btn' onclick=''>Hi there, ".$_SESSION['username']."!</button>";
            echo "&nbsp;<button class='btn btn-danger navbar-btn' onclick='signOut()'>Sign Out</button>";
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<?php
  // Ratings
require_once("ratings.php");
  // About
require_once("about.php");
?>

