  <script type="text/javascript">
   function signInModalBringUp()
   {
    $('#signInModal').modal('toggle');
  }

  function signUpModalBringUp()
  {
    $('#signUpModal').modal('toggle');
  }
  function clearRatings()
  {
  
	document.getElementById("1").checked = false;
   document.getElementById("2").checked = false;
   document.getElementById("3").checked = false;
   document.getElementById("4").checked = false;
   document.getElementById("5").checked = false;
   document.getElementById('feedback').value="";
  }
  function validateRatings()

  {
	var flag=0;
	for(var i=1;i<=5;i++)
		{
			if(document.getElementById(i.toString()).checked)
				{
					flag=1;
					break;
				}
			
		}
	if(flag==1)
     {
	 //document.getElementById('ratingErrorDiv').style.display="";
	 //var feedback = document.getElementById('feedback');
	 var feedback = document.getElementById('feedback').value;
	 var ratings=i.toString();
	//document.getElementById('ratingErrorMessage').innerHTML=i.toString()+feedback;
	$.post("recordFeedback.php", { ratings: ratings, feedback: feedback })
	.done(function(data)
 {	
   if(data == 'success')
   {
	document.getElementById("1").checked = false;
   document.getElementById("2").checked = false;
   document.getElementById("3").checked = false;
   document.getElementById("4").checked = false;
   document.getElementById("5").checked = false;
   document.getElementById('feedback').value="";
   
    document.getElementById('ratingSuccessDiv').style.display="";
	//document.getElementById('ratingErrorMessage').innerHTML='Success.'
  }
  else
  {
    document.getElementById('ratingErrorMessage').innerHTML='Ratings failed.'+data;
    document.getElementById('ratingErrorDiv').style.display="";
   document.getElementById("1").checked = false;
   document.getElementById("2").checked = false;
   document.getElementById("3").checked = false;
   document.getElementById("4").checked = false;
   document.getElementById("5").checked = false;
   document.getElementById('feedback').value="";
  }
});
    }else 
    {
	 document.getElementById('ratingErrorDiv').style.display="";
      //document.getElementById('ratingErrorMessage').innerHTML='Failed!';

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
function processword()
{
  var word = document.getElementById('word').value;
  if(word == "")
  {
   return false;
 }

 $.post("executemain.php", { userword: word})
 .done(function(data)
 {
  if(data=="invalid") {
    document.getElementById('result').innerHTML='Enter a valid word';
  } else {
    var result=document.createElement("p");
    var textnode=document.createTextNode(data);
    result.appendChild(textnode);

    var element=document.getElementById("resultset");
    element.appendChild(result);

  }
 });
}
</script>
