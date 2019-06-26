<?php require('login_check.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="/dist/css/index.css" type="text/css" rel="stylesheet" />
  <link href="/dist/css/header.css" type="text/css" rel="stylesheet" />
  <link href="/dist/css/timeline.min.css" rel="stylesheet">

  <link rel="stylesheet" href="/dist/css/vertical_timeline.css">
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />

  <title>Account Settings</title>
</head>

<body>

  <?php require('../modules/header.php');
  include('conn.php');
  $r = $conn->query("select * from users where username='$_SESSION[username]'");
  $r = $r->fetch_assoc();
  ?>

  <div class="mainbody">
    <div class="card">
      <div class="card-content p-5 shadow">
        <h1>Edit Account</h1>
        <a href='#' id="edit_account">Edit Account Settings</a>
        <form action="account_edit.php" method="post">
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" disabled="true" class="form-control-plaintext" name="name" value="<?php echo $r[name]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" disabled="true" class="form-control-plaintext" name="password" id="p" value="<?php echo $r[password]; ?>" onkeyup="pass_check()">
            </div>
          </div>
          <div class="form-group row">
            <label id='password_length_check_result' class="col col-form-label text-center"></label>
          </div>
          <div class="form-group row" hidden="true" id="confirm_password">
            <label class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
              <input type="password" disabled="true" class="form-control-plaintext" id="p2" value="<?php echo $r[password]; ?>" onkeyup="pass_check()">
            </div>
          </div>
          <div class="form-group row">
            <label id='pass' class="col col-form-label text-center"></label>
          </div>
          <script type="text/javascript">
            function pass_check() {
              var p = document.getElementById('p').value;
              var p2 = document.getElementById('p2').value;
              if (p2) {
                if (p != p2) {
                  var msg = "<div class='alert alert-danger' role='alert'>Passwords Dont Match!</div>";
                  document.getElementById('pass').innerHTML = msg;
                } else {
                  var msg = "<div class='alert alert-success' role='alert'>Passwords Match</div>";
                  document.getElementById('pass').innerHTML = msg;
                }
              }
            }
          </script>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" disabled="true" class="form-control-plaintext" name="email" value="<?php echo $r[email]; ?>" id="account_edit_email">
            </div>
          </div>
          <div class="form-group row">
            <label id='account_edit_email_result' class="col col-form-label text-center"></label>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
              <input type="text" disabled="true" class="form-control-plaintext" name="username" value="<?php echo $r[username]; ?>" id="account_edit_username">
            </div>
          </div>
          <div class="form-group row">
            <label id='account_edit_username_result' class="col col-form-label text-center"></label>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" disabled="true" name="gender" id="inlineRadio1" <?php if ($r[gender] == m) echo "checked"; ?> value="m">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" disabled="true" name="gender" id="inlineRadio2" <?php if ($r[gender] == y) echo "checked"; ?> value="f">
                <label class="form-check-label" for="inlineRadio2">Female</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" disabled="true" name="mobile" value="<?php echo $r[mobile]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Enrollment No.</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" disabled="true" name="enroll" value="<?php echo $r[enroll]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Branch</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" disabled="true" name="branch" value="<?php echo $r[branch]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Year</label>
            <div class="col-sm-10">
              <input type="text" class="form-control-plaintext" disabled="true" name="year" value="<?php echo $r[year]; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Organizer</label>
            <div class="col-sm-10">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" disabled="true" name="organizer" <?php if ($r[organizer] == y) echo "checked"; ?> value="y">
                <label class="form-check-label" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" disabled="true" name="organizer" <?php if ($r[organizer] == n) echo "checked"; ?> value="n">
                <label class="form-check-label" for="inlineRadio2">No</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Security Question</label>
            <div class="col-sm-10">
              <select disabled="true" class="form-control-plaintext" name="security_ques">
                <option>Choose any one...</option>
                <option <?php if (strcmp($r[security_ques], "In which city you were born?") == 0) echo "selected"; ?>>In which city you were born?</option>
                <option <?php if (strcmp($r[security_ques], "What is your mother's maiden name?") == 0) echo "selected"; ?>>What is your mother's maiden name?</option>
                <option <?php if (strcmp($r[security_ques], "What is your pet's name?") == 0) echo "selected" ?>>What is your pet's name?</option>
                <option <?php if (strcmp($r[security_ques], "What was the name of your first teacher?") == 0) echo "selected"; ?>>What was the name of your first teacher?</option>
                <option <?php if (strcmp($r[security_ques], "What is your vehicle's registration number?") == 0) echo "selected"; ?>>What is your vehicle's registration number?</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Security Answer</label>
            <div class="col-sm-10">
              <input type="password" disabled="true" class="form-control-plaintext" id='security_ans' name="security_ans" value="<?php echo $r[security_ans]; ?>">
            </div>
          </div>
          <div class="form-group row" id="submit" hidden="true">
            <div class="col-sm-10">
              <input type="text" name="id" value="<?php echo $r[id]; ?>" hidden>
              <input type="submit" value="Submit"></input> <input type="button" value="Cancel" id="cancel"></input>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <script>
    let r = <?php echo json_encode($_SESSION[msg_account]); ?>;
    if (r)
      alert(r);
    $("#p").keyup(function(event) {
      event.preventDefault();
      if ($("#p").val().length < 8)
        $("#password_length_check_result").html("<div class='alert alert-danger' role='alert'>Password Length Too Small</div>");
      else
        $("#password_length_check_result").html("<div class='alert alert-success' role='alert'>Password Length Good</div>");
    });
    $("#edit_account").click(function(event) {
      event.preventDefault();
      var edit_account = confirm("Are You Sure");
      if (edit_account) {
        $("input").removeAttr("disabled");
        $("select").removeAttr("disabled");
        $("#security_ans").attr("type", "text");
        $("#confirm_password").removeAttr("hidden", "hidden");
        $("#submit").removeAttr("hidden", "hidden");
      }
    });

    $("#account_edit_email").keyup(function(event) {
      event.preventDefault();
      var email_input = $("#account_edit_email").val();
      var id_logged_in = "<?php echo $_SESSION[id]; ?>";
      $.ajax({
        type: "post",
        url: "/php/check_email_signup.php",
        data: {
          email: email_input,
          id: id_logged_in
        },
        success: function(response) {

          if (response == "false") {
            $("#account_edit_email_result").html("<div class='alert alert-danger' role='alert'>Email Already Exists</div>");
          } else if (response == "true")
            $("#account_edit_email_result").empty();
        }
      });

    });
    $("#account_edit_username").keyup(function(event) {
      event.preventDefault();
      var username_input = $("#account_edit_username").val();
      var id_logged_in = "<?php echo $_SESSION[id]; ?>";
      $.ajax({
        type: "post",
        url: "/php/check_username_signup.php",
        data: {
          username: username_input,
          id: id_logged_in
        },
        success: function(response) {

          if (response == "false") {
            $("#account_edit_username_result").html("<div class='alert alert-danger' role='alert'>Username Already Exists</div>");
          } else if (response == "true")
            $("#account_edit_username_result").empty();
        }
      });

    });
    $("#cancel").click(function(event) {
      event.preventDefault();
      window.location.replace("/php/account.php");
    });
  </script>
  <?php $_SESSION[msg_account] = ""; ?>
</body>

</html>