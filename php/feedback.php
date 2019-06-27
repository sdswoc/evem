<?php require('login_check.php'); ?>
<?php session_start(); $_SESSION[id]=$_GET[i]; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="/dist/css/index.css" type="text/css" rel="stylesheet"/>
    <link href="/dist/css/header.css" type="text/css" rel="stylesheet"/>
    <link href="/dist/css/timeline.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/dist/css/vertical_timeline.css" >
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/dist/css/switch.css" />
<title>Feedback</title>
  </head>
  <body>
  <?php require('../modules/header.php');?>
  <div class="mainbody">
    <div class="card ">
      <div class="card-body shadow p-4  bg-white rounded ">
      <h1>Feedback</h1>
      <h3>Add Feedback</h3>
        <form class="feedback_add" action="feedback_add.php" method="post">
          <div class="row form-group">
            <div class="col-2 ">
            Rating (out of 5) </div> <div class="col-1"><input type="text" name="rating" class="feedback_add"> </div>
            </div>
            <div class="row form-group">
              <div class="col-2 ">
            Feedback</div> <div class="col-1"><textarea name="feedback" class="feedback_add" rows="8" cols="80"></textarea> </div>
          </div>
          <div class="text-center">
            <input type="hidden" name="id" value="<?php echo "$_SESSION[id]"; ?>">
            <input type="submit" name="submit" value="Submit"> <input type=button onClick="location.href='/welcome.php'" value='Cancel'>

          </div>
      </form>
      </div>
      </div>
<div class="card">
    <div class="card-body shadow p-4  bg-white rounded ">
  <h3>Feedbacks</h3>
    <?php include('feedback_list.php') ?>
    </div>
</div>
</div>

  </body>
</html>
