  <script type="text/javascript">
   function signInModalBringUp()
   {
    $('#signInModal').modal('toggle');
  }

  function signUpModalBringUp()
  {
    $('#signUpModal').modal('toggle');
  }
  function validateRatings()

  {

    if(document.getElementById('ratings').checked) {

    }else 
    {
     document.getElementById('ratingErrorMessage').innerHTML='Failed!';

   }
 }

 function validateSignUp()
 {
  document.getElementById('signInErrorDiv').style.display="none";

  document.getElementById('signUpErrorDiv').style.display="none";
  document.getElementById('signUpSuccessDiv').style.display="none";

  var username = document.getElementById('signUpUsername').value;
  var pass1 = document.getElementById('signUpPass1').value;
  var pass2 = document.getElementById('signUpPass2').value;
  if(username == "" || pass1 == "" || pass2 == "")
  {
   document.getElementById('signUpErrorMessage').innerHTML='Fields cannot be left blank.';
   document.getElementById('signUpErrorDiv').style.display="";
   return false;
 }
 if(pass1 != pass2)
 {
   document.getElementById('signUpErrorMessage').innerHTML='Entered passwords don\'t match.';
   document.getElementById('signUpErrorDiv').style.display="";
   document.getElementById('signUpPass1').value="";
   document.getElementById('signUpPass2').value="";
   return false;
 }

 $.post("signUp.php", { username: username, password: pass1 })
 .done(function(data)
 {	
   if(data == 'success')
   {
    document.getElementById('signUpSuccessDiv').style.display="";
  }
  else
  {
    document.getElementById('signUpErrorMessage').innerHTML='Registration failed.'+data;
    document.getElementById('signUpErrorDiv').style.display="";
    document.getElementById('signUpPass1').value="";
    document.getElementById('signUpPass2').value="";
  }
});
}

function validateSignIn()
{
  document.getElementById('signInErrorDiv').style.display="none";

  document.getElementById('signUpErrorDiv').style.display="none";
  document.getElementById('signUpSuccessDiv').style.display="none";

  var username = document.getElementById('signInUsername').value;
  var pass = document.getElementById('signInPassword').value;
  if(username == "" || pass == "")
  {
   document.getElementById('signInErrorMessage').innerHTML='Fields cannot be left blank.';
   document.getElementById('signInErrorDiv').style.display="";
   return false;
 }
 $.post("signIn.php", { username: username, password: pass })
 .done(function(data)
 {	
   if(data == 'success')
   {
        window.location=""; //TODO
      }
      else
      {
        document.getElementById('signInErrorMessage').innerHTML='Login failed.'+data;
        document.getElementById('signInErrorDiv').style.display="";
        document.getElementById('signInPassword').value="";
      }
    });
}

function hideAlert(id)
{
  document.getElementById(id).style.display="none";
}

function shiftFocus(myid, nextId)
{
  document.getElementById(nextId).value="";
  document.getElementById(nextId).focus();
}
</script>