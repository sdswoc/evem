<?php require('login_check.php'); ?>
<?php session_start(); $_SESSION[id]=$_GET[i]; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/evem/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="/evem/css/index.css" type="text/css" rel="stylesheet"/>
      <link href="/evem/css/header.css" type="text/css" rel="stylesheet"/>
    <link href="/evem/dist/css/timeline.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/evem/css/vertical_timeline.css" >
  <link rel="stylesheet" type="text/css" href="/evem/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
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
            Rating (out of 5) <input type="text" name="rating" class="feedback_add"> <br>
            Feedback <br> <textarea name="feedback" class="feedback_add" rows="8" cols="80"></textarea> <br>
            <input type="hidden" name="id" value="<?php echo "$_SESSION[id]"; ?>">
            <input type="submit" name="submit" value="Submit"> <input type=button onClick="location.href='/evem/welcome.php'" value='Cancel'>
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
