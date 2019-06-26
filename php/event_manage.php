<?php require('login_check.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="/dist/css/index.css" type="text/css" rel="stylesheet"/>
      <link href="/dist/css/header.css" type="text/css" rel="stylesheet"/>
    <link href="/dist/css/timeline.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/dist/css/vertical_timeline.css" >
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
    <title>Add Event</title>
  </head>
  <body>
      <?php require('../modules/header.php');?>
      <div class="mainbody">
      <div class="card">
        <div class="card-content p-4 shadow bg-white rounded ">
        <h3>Add Event</h3>
        <div class="container">


        <form class="event_add" action="event_add.php" method="post">
        <div class="row">
          <div class="col-3 ">
          Name
          </div>
          <div class="col form-group row">
            <input type="text" name="event_name" class="form-control" required>
          </div>

          </div>
          <div class="row">
              <div class="col-3 ">
                Brief Description
              </div>
              <div class="col form-group row">
                <textarea name="event_desc" rows="5" cols="auto" class="form-control" required></textarea>
              </div>
          </div>
          <div class="row">
              <div class="col-3 ">
                Start At

              </div>
              <div class="col form-group row">
                <input type="time" name="start_at"  required>
              </div>
          </div>
          <div class="row">
              <div class="col-3 ">
End At
              </div>
              <div class="col form-group row">
<input type="time" name="end_at"  required>
              </div>
          </div>
          <div class="row ">
              <div class="col-3 ">
    Date
              </div>
              <div class="col form-group row">
<input type="date" name="date" required>
              </div>
          </div>
          <div class="row ">
              <div class="col-3 ">
  Venue
              </div>
              <div class="col form-group row">
<input type="text" name="venue" class="form-control" required>
              </div>
          </div>
          <div class="row">
              <div class="col-3 ">
      For
              </div>
              <div class="col form-group row">
<input type="text" name="for_people" class="form-control" required>
              </div>
          </div>
          <div class="row ">
              <div class="col-3 ">
  Contact
              </div>
              <div class="col form-group row">
<input type="text" name="contact" class="form-control" required>
              </div>
          </div>
          <div class="row">
              <div class="col-3 ">
  Authorized By
              </div>
              <div class="col form-group row">
<input type="text" name="auth" class="form-control" required>
              </div>
          </div>
<div class="row">
  <div class="col-3 ">
      Resources
  </div>
  <div class="col form-group row">
      <input type="text" name="resources" class="form-control" required>
  </div>
</div>


<div class="row" >
    <div class="col text-center" >
      <input type="submit" name="submit" value="Submit">

      <input type="button" name="cancel" value="Cancel" id="cancel_welcome">
    </div>
</div>
        </form>
          </div>
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
          $("#cancel_welcome").click(function(event) {
            event.preventDefault();
              window.location.replace('/welcome.php');
          });


        </script>
        <?php $_SESSION[msg_event]=""; ?>
      </div>
  </body>
</html>
