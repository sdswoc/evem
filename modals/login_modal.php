
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login/Signup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/evem/css/bootstrap.min.css" >
    <style media="screen">


@import 'https://fonts.googleapis.com/css?family=Raleway';

body {
  font-family: "Raleway", sans-serif;
  height: 100vh;
  background-color: #56baed;
}
.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 35px 0;
}
li {

  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px;

}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}
a:hover{
  text-decoration: none;
}
a#tab{
    text-decoration: none;

}
a#tab:hover{
  color: #0d0d0d;
    text-decoration: none;
}

li.inactive a {
  color: #cccccc;
}
li.active a{
  color: #0d0d0d;
  font-size: 25px;
  border-bottom: 3px solid #5fbae9;
}

.tab-content > div:last-child {
  display: none;
}

/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 650px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}




/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
background-color: #56baed;
border: none;
color: white;
padding: 15px 40px;
text-align: center;
text-decoration: none;
display: inline-block;
text-transform: uppercase;
font-size: 13px;
-webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
-webkit-border-radius: 5px 5px 5px 5px;
border-radius: 5px 5px 5px 5px;
margin: 15px 20px 40px 20px;
-webkit-transition: all 0.3s ease-in-out;
-moz-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
-moz-transform: scale(0.95);
-webkit-transform: scale(0.95);
-o-transform: scale(0.95);
-ms-transform: scale(0.95);
transform: scale(0.95);
}

input[type=text], input[type=password],input[type=email] {
background-color: #f6f6f6;
border: none;
color: #0d0d0d;
padding: 15px 32px;

text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 5px;
width: 85%;
border: 2px solid #f6f6f6;
-webkit-transition: all 0.5s ease-in-out;
-moz-transition: all 0.5s ease-in-out;
-ms-transition: all 0.5s ease-in-out;
-o-transition: all 0.5s ease-in-out;
transition: all 0.5s ease-in-out;
-webkit-border-radius: 5px 5px 5px 5px;
border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus, input[type=password]:focus,input[type=email]:focus {
background-color: #fff;
border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder, input[type=password]:placeholder,input[type=email]:placeholder  {
color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
-webkit-animation-name: fadeInDown;
animation-name: fadeInDown;
-webkit-animation-duration: 1s;
animation-duration: 1s;
-webkit-animation-fill-mode: both;
animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
0% {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
}

@keyframes fadeInDown {
0% {
  opacity: 0;
  -webkit-transform: translate3d(0, -100%, 0);
  transform: translate3d(0, -100%, 0);
}
100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
}
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:0.4s;
  -moz-animation-duration:0.4s;
  animation-duration:0.4s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.1s;
  -moz-animation-delay: 0.1s;
  animation-delay: 0.1s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.2s;
  -moz-animation-delay: 0.2s;
  animation-delay: 0.2s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.3s;
  -moz-animation-delay: 0.3s;
  animation-delay: 0.3s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
}

#icon {
  width:60%;
}

* {
  box-sizing: border-box;
}
#login_modal_msg{
    margin-bottom: 30px;
}

    </style>
  </head>
  <body>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <ul class="tab-group">
 				<li class="tab active"> <a id='tab' href="#login"> Log In </li></a>
   	    <li class="tab inactive underlineHover"><a id='tab' href="#signup">Sign Up </li></a>
  </ul>
    <!-- Icon -->
    <div class="fadeIn first">
      <img src='/evem/images/user.png' id="icon" alt="User Icon" style="width:300px" />
    </div>

    <!-- Login Form -->
    <div class="tab-content">
      <div id='login'>
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Username/Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" autocomplete="new-password">
  <div id='button'>
  <input type="submit" class="fadeIn fourth" value="Log In" id='login_button'><input type="button" class="fadeIn fourth" value="Cancel" onclick="go_index()">
    </div>

  <div id='login_modal_msg'>

  </div>
  <!-- Remind Passowrd -->
  <div id="formFooter">
    <a class="underlineHover" href="/evem/modals/forget_password_modal.php">Forgot Password?</a>
  </div>
  </div>
  <div id='signup'>
	    <p>*All fields are required</p>
      <form action="/evem/php/signup.php" method="post">
      <input type="text"  name="name" placeholder="Name" required="required"> <br>
      <input type="password" name="password" id="p" placeholder="Password" required="required" onkeyup="pass_check()"> <br><label id="password_length_check_result"></label> <br>
      <input type="password" name="password2" id="p2" placeholder="Confirm Passowrd" required="required" onkeyup="pass_check()"> <br><label id="pass"></label> <br>
      <script type="text/javascript">
      var check_password=0;
      function pass_check() {
        var p=document.getElementById('p').value;
        var p2=document.getElementById('p2').value;
        if(p2){
        if (p!=p2) {
          var msg="Passwords dont match".fontcolor("red");
          document.getElementById('pass').innerHTML=msg;
          check_password=0;
        }
        else {
          var msg="Passwords match".fontcolor("green");
            document.getElementById('pass').innerHTML=msg;
            check_password=1;
        }
      }
      }

      </script>
       <input type="email" id="signup_email" name="email" placeholder="Email" required="required"> <br><label class="text-danger" id="signup_email_result"></label> <br>
       <input type="text" id="username"name="username" placeholder="Username" required="required"><br><label class="text-danger" id="username_result"></label> <br>
      Gender: <input type="radio" name="gender" value="m" required="required">Male <input type="radio" name="gender" value="f" required="required">Female <br>
       <input type="text" name="mobile" placeholder="Mobile" required="required"> <br>
       <input type="text" name="enroll" placeholder="Enroll No." required="required"> <br>
       <input type="text" name="branch" placeholder="Branch" required="required"> <br>
      <input type="text" name="year" placeholder="Year" required="required"> <br>
      Are You An Organizer? <input type="radio" name="organizer" value="y" required="required">Yes <input type="radio" name="organizer" value="n" required="required">No <br>
      Security question : <select name="security_ques" >
        <option value="0">Choose any one...</option>
    <option>In which city you were born?</option>
    <option>What is your mother's maiden name?</option>
    <option>What is your pet's name?</option>
    <option>What was the name of your first teacher?</option>
    <option>What is your vehicle's registration number?</option>
  </select>
   <input type="text" name="security_ans" placeholder="Answer" required="required"> <br>
   <input  hidden="true" name="check_password" id="check_password" value="">
   <input  hidden="true" name="check_email" id="check_email" value="">
  <input type="submit" class="fadeIn fourth" value="Submit" id="submit">
  </form>
  <div id='login_modal_msg'>

  </div>
  <!-- Remind Passowrd -->
  <div id="formFooter">
    <a class="underlineHover" href="/evem/index.php">Return To Homepage</a>
  </div>
</div>
		</div>


</div>
</div>
<script src="/evem/jquery/jquery-2.1.1.min.js">

</script>


<script type="text/javascript">
$("#p").keyup(function(event){
  event.preventDefault();
  if($("#p").val().length<8)
    $("#password_length_check_result").html("<div class='text-danger'>Password Length Too Small</div>");
  else
  $("#password_length_check_result").html("<div class='text-success'>Password Length Good</div>");
});
        $('#login_modal_msg').empty();
$('#login_button').on('click', function (e) {
  e.preventDefault();
 var email_input=$("#email").val();
 var password_input=$("#password").val();

  $.ajax({
      type:"post",
      url:"/evem/php/login.php",
      data:{email:email_input,password:password_input },
      success:function(response){
        if (response=="true") {
            $('#login_modal_msg').empty();
            window.location.replace('/evem/welcome.php');
        }
         else if(response=="false")
          $('#login_modal_msg').html("INVALID USERNAME OR PASSWORD");

      }
  });
});

  function go_index(){
    window.location.assign("/evem/index.php")
  }


	$('.tab a').on('click', function (e) {
	  e.preventDefault();

	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
		$(this).parent().removeClass('underlineHover');
		$(this).parent().siblings().addClass('underlineHover');

	  target = $(this).attr('href');

	  $('.tab-content > div').not(target).hide();

	  $(target).fadeIn(600);

	});
$("#signup_email").keyup(function(event) {
  event.preventDefault();
  var email_input=$("#signup_email").val();

  $.ajax({
      type:"post",
      url:"/evem/php/check_email_signup.php",
      data:{email:email_input},
      success:function(response){

        if (response=="false") {
          $("#signup_email_result").html("Email Already Exists");
        }
         else if(response=="true")
          $("#signup_email_result").empty();
      }
  });

});
$("#username").keyup(function(event) {
  event.preventDefault();
  var username_input=$("#username").val();

  $.ajax({
      type:"post",
      url:"/evem/php/check_username_signup.php",
      data:{username:username_input},
      success:function(response){

        if (response=="false") {
          $("#username_result").html("Username Already Exists");
        }
         else if(response=="true")
          $("#username_result").empty();
      }
  });

});
	</script>

  </body>
</html>
