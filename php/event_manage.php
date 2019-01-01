<?php require('login_check.php'); ?>
<?php session_start(); ?>
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
    <title>Add Event</title>
  </head>
  <body>
      <?php require('../modules/header.php');?>
      <div class="mainbody">
      <div class="card">
        <div class="card-content p-4 shadow bg-white rounded ">
        <h3>Add Event</h3>
        <form class="event_add" action="event_add.php" method="post">
        Name <input type="text" name="event_name" required> <br>
        Brief Description <br> <textarea name="event_desc" rows="8" cols="80"  required></textarea> <br>
        Start At <input type="time" name="start_at" required> <br>
        End At <input type="time" name="end_at" required> <br>
        Date <input type="date" name="date" required> <br>
        Venue <input type="text" name="venue" required> <br>
        For <input type="text" name="for_people" required> <br>
        Contact <input type="text" name="contact" required> <br>
        Authorized By <input type="text" name="auth" required> <br>
        Resources <input type="text" name="resources" required> <br>
        <input type="submit" name="submit" value="submit">         <input type="button" name="cancel" value="cancel">
        </form>
      </div>
      </div>
      <div class="card">
        <div class="card-content p-4 shadow bg-white rounded ">
        <h3>Edit Event</h3>
        <?php include('event_list_organizer.php');   ?>
        </div>
      </div>
        <script>
        let r=<?php echo json_encode($_SESSION[msg_event]); ?>;
        if(r)
        alert(r);
        </script>
        <?php $_SESSION[msg_event]=""; ?>
      </div>
  </body>
</html>
