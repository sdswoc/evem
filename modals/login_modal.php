
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login/Signup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="/dist/css/login.css">
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
      <img src='/dist/images/user.png' id="icon" alt="User Icon" style="width:300px" />
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
    <a class="underlineHover" href="/modals/forget_password_modal.php">Forgot Password?</a>
  </div>
  </div>
  <div id='signup'>
	    <p>*All fields are required</p>
      <form action="/php/signup.php" method="post">
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
    <a class="underlineHover" href="/index.php">Return To Homepage</a>
  </div>
</div>
		</div>


</div>
</div>
<script src="/dist/jquery/jquery-2.1.1.min.js">

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
      url:"/php/login.php",
      data:{email:email_input,password:password_input },
      success:function(response){
        if (response=="true") {
            $('#login_modal_msg').empty();
            window.location.replace('/welcome.php');
        }
         else if(response=="false")
          $('#login_modal_msg').html("INVALID USERNAME OR PASSWORD");

      }
  });
});

  function go_index(){
    window.location.assign("/index.php")
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
      url:"/php/check_email_signup.php",
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
      url:"/php/check_username_signup.php",
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
var m="<?php echo $_SESSION[msg_signup]; ?>";
if(m)
  alert(m);
<?php $_SESSION[msg_signup]=""; ?>
	</script>

  </body>
</html>
