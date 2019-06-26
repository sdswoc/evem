<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forget confirm_new_password</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/dist/css/forget_password.css">
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
            url:"/php/check_email.php",
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

    window.location.replace('/modals/login_modal.php');
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
      url:"/php/change_password.php",
      data:{new_password:password ,email:email},
      success:function(response){
      alert(response);
      window.location.replace('/modals/login_modal.php');
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
