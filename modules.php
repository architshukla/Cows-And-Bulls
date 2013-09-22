<script src='assets/js/jquery.js' type="text/javascript"></script>
<script src='assets/js/bootstrap.min.js' type="text/javascript"></script>
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
function giveUp()
{
  var word = document.getElementById('word').value;
  document.getElementById('messageDiv').style.display="none";
  $.post("giveup.php", { simplyforthesakeofgiving: word} )
 .done(function(data)
 {

    var element=document.getElementById("resultset");
    element.innerHTML += "<tr><td align='center' style='width:50%;'>"+data+"</td><td align='center'>4B</td></tr>";
    document.getElementById("message").innerHTML="";

    var button = document.getElementById("giveup");
    button.value ='You Gave Up! :( Better Luck Next Time';

    var wordform = document.getElementById("worddiv");
    var textbox = document.getElementById("word");
     wordform.removeChild(textbox);
  });
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
  document.getElementById("messageDiv").style.display="none";
  if(data=="invalid") {
    document.getElementById("message").innerHTML="Enter a valid word";
    if(document.getElementById("messageDiv").className == 'alert alert-warning')
      document.getElementById("messageDiv").className = 'alert alert-danger';
    else
      document.getElementById("messageDiv").className = 'alert alert-warning';
    document.getElementById("messageDiv").style.display="";
  } else if(data=="4B0C"||data=="4B") {

    //result.innerHTML = "<tr><td align='center' style='width:50%;'>"+word+"</td><td align='center'>4B</td></tr>";
    // var textnode=document.createTextNode("<table><tr><td>"+word+'</td> : <td>4B</td></table>');
    // result.appendChild(textnode);

    var element=document.getElementById("resultset");
    element.innerHTML += "<tr><td align='center' style='width:50%;'>"+word+"</td><td align='center'>4B</td></tr>";
    document.getElementById("message").innerHTML="";

    var wordiv = document.getElementById("worddiv");
    var textbox = document.getElementById("word");
     worddiv.removeChild(textbox);

    var wordform = document.getElementById("wordform");
    var giveup = document.getElementById("giveup");

    
    wordform.removeChild(giveup);
  } else {
    // var result=document.createElement("table");
    // result.className='table table-striped table-hover';
    // result.style.width='50%';
    // result.innerHTML = "<tr><td align='center' style='width:;50%;'>"+word+"</td><td align='center'>"+data+"</td></tr>";
    // var textnode=document.createTextNode("<table><tr><td>"+word+'</td><td>'+data+"</td></table>");
    // result.appendChild(textnode);

    var element=document.getElementById("resultset");
    element.innerHTML += "<tr><td align='center' style='width:50%;'>"+word+"</td><td align='center'>"+data+"</td></tr>";
    // element.appendChild(result);
    document.getElementById("word").value="";
  }
 });
}

function shiftFocus(myid, nextId)
{
  document.getElementById(nextId).value="";
  document.getElementById(nextId).focus();
}
$("#word").keyup(function(event){
    if(event.keyCode == 13){
        $("#submitword").click();
    }
});
</script>
