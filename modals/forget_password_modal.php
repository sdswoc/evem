<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;  color: #0d0d0d;
    font-size: 25px;
    border-bottom: 3px solid #5fbae9;
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
  color: #BD0D00;

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
.activate{
  display: block;
}
.inactivate{
  display: none;
}

#create_new_password_msg, #security_question_answer_enter_msg,#enter_email_msg{
  margin-bottom: 30px;
}

    </style>
  </head>
  <body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <ul class="tab-group">
 				<li class="tab">Forget Passowrd</li>

  </ul>
      <div class="tab-content">

      <div class="activate" id='enter_email' >
                 <div class="fadeIn first">
                   <h1>Enter Email</h1>
                 </div>
               <input type="email" id="email" class="fadeIn second" name="email" placeholder="Enter Email">
               <input type="button" class="fadeIn third" value="Submit" id="check_email" href='#security_question_answer_enter'>

               <div id='enter_email_msg'>

               </div>
               <div id="formFooter" >
                    <a href="#" class="underlineHover" id="enter_email_back">Back</a>

               </div>


      </div>

      <div class="inactivate" id='security_question_answer_enter' >
      <h1 class="fadeIn first">Security Answer Validation </h1>
        <h4 class="fadeIn first"id='security_ques_display'></h4>
           <input type="text" id="security_ans_input" class="fadeIn second" name="security_ans_input" placeholder="Answer" autocomplete="off">
              <input type="button" class="fadeIn third" value="Submit" id="check_security_ans" href='#create_new_password'>
        <div id='security_question_answer_enter_msg'>

        </div>
       <div id="formFooter" >
         <a href="#" class="underlineHover back" id="security_question_answer_enter_back"></a>
       </div>

       </div>

       <div class="inactivate" id='create_new_password' >
       <h1 class="fadeIn first">Enter Passowrd </h1>
            <input type="password" id="new_password" class="fadeIn second" name="new_password" placeholder="Passowrd" autocomplete="new-password" onkeyup="pass_check()">
            <input type="password" id="confirm_new_password" class="fadeIn second" name="confirn_new_password" placeholder="Confirm Passowrd" autocomplete="new-password" onkeyup="pass_check()">
           <input type="button" class="fadeIn third" value="Submit" id="change_password" href='#change_password'>

         <div id='create_new_password_msg'>

         </div>
        <div id="formFooter" >
          <a href="#" class="underlineHover back" id="create_new_password_back"></a>
        </div>

        </div>



		</div>
 </div>
</div>
<script>
var security_ans;
var flag=0;
var email;
$(function(){
    $("#check_email").click(function(event){
      var email_input=$("#email").val();
      email=email_input;
        event.preventDefault();
        $.ajax({
            type:"post",
            url:"/evem/php/check_email.php",
            data:{email:email_input },
            success:function(response){
                var email_match=JSON.parse(response);

              if (email_match.email_check=="false") {
                  $("#enter_email_msg").html("NO RECORD FOUND");
              }
              else {
                      $("#enter_email_msg").empty();
                      target = $('#check_email').attr('href');
                      $('.tab-content > div').not(target).addClass('inactivate');
                        $('.tab-content > div').not(target).removeClass('activate');
                        $(target).addClass('activate');
                        $(target).removeClass('inactivate');
                      $("#security_ques_display").html(email_match.security_ques);
                      $("#security_question_answer_enter_back").html('Back');
                      $(target).fadeIn(600);
                      security_ans=email_match.security_ans;
              }
            }
        });

    });
});
$(".back").click(function(event){
    event.preventDefault();

    var t="#enter_email";
    $(t).removeClass('inactivate');
        $(t).addClass('activate');
  $('.tab-content > div').not(t).addClass('inactivate');
    $('.tab-content > div').not(t).removeClass('activate');
  
      $(t).fadeIn(600);
});

$("#enter_email_back").click(function(event){
    event.preventDefault();

    window.location.replace('/evem/modals/login_modal.php');
});
$("#check_security_ans").click(function(event){

    event.preventDefault();
    var security_ans_input=document.getElementById('security_ans_input').value;
  if(security_ans==security_ans_input)
  {
    $("#msg").empty();
  target = $('#check_security_ans').attr('href');
  $('.tab-content > div').not(target).addClass('inactivate');
    $('.tab-content > div').not(target).removeClass('activate');
    $(target).addClass('activate');
    $(target).removeClass('inactivate');
    $("#create_new_password_back").html('Back');
    $(target).fadeIn(600);
  }

  else
    $("#msg").html("WRONG ANSWER");
});

$("#change_password").click(function(event){

event.preventDefault();
if(flag)
{
  var password=$('#new_password').val();
  $.ajax({
      type:"post",
      url:"/evem/php/change_password.php",
      data:{new_password:password ,email:email},
      success:function(response){
      alert(response);
      window.location.replace('/evem/modals/login_modal.php');
      }
  });
}

});

function pass_check() {
  var p=document.getElementById('new_password').value;
  var p2=document.getElementById('confirm_new_password').value;
  if(p && p2){
  if (p!=p2) {
    var msg="PASSWORDS DON'T MATCH".fontcolor("red");
    document.getElementById('create_new_password_msg').innerHTML=msg;
    flag=0;
  }
  else {
    var msg="PASSWORDSD MATCH".fontcolor("green");
      document.getElementById('create_new_password_msg').innerHTML=msg;
      flag=1;
  }
}
}





</script>
</body>
</html>
