<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <link href="/dist/css/index.css" type="text/css" rel="stylesheet"/>
      <link href="/dist/css/header.css" type="text/css" rel="stylesheet"/>
    <link href="/dist/css/timeline.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/dist/css/vertical_timeline.css" >
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
      <meta charset="utf-8">
    <title>Edit Event</title>
  </head>
  <body>
      <?php require('../modules/header.php');?>
      <div class="mainbody">
        <div class="card main">
          <div class="card-body shadow p-4  shadow ">
        <h2>Edit Event</h2>
        <?php
          include('conn.php');
          $id=$_GET['id'];
        $sql="select * from events where id='$id';";
        $result=$conn->query($sql);
        $h=$result->fetch_assoc();
         ?>

        <form class="event_add" action="event_add.php" method="post">
          <div class="row">
            <div class="col-3 text-right">
            Name
            </div>
            <div class="col form-group row">
              <input type="text" name="event_name" class="form-control" value="<?php   echo "$h[name]"; ?> ">
            </div>

            </div>
            <div class="row">
                <div class="col-3 text-right">
                  Brief Description
                </div>
                <div class="col form-group row">
                  <textarea name="event_desc" rows="5" cols="auto" class="form-control" ><?php echo "$h[description]"; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-3 text-right">
                  Start At

                </div>
                <div class="col form-group row">
                  <input type="time" name="start_at" value="<?php  echo "$h[start_at]";?>">
                </div>
            </div>
            <div class="row">
                <div class="col-3 text-right">
  End At
                </div>
                <div class="col form-group row">
  <input type="time" name="end_at" value="<?php  echo "$h[end_at]";?>">
                </div>
            </div>
            <div class="row ">
                <div class="col-3 text-right">
      Date
                </div>
                <div class="col form-group row">
  <input type="date" name="date" value="<?php echo "$h[date]" ?>" >
                </div>
            </div>
            <div class="row ">
                <div class="col-3 text-right">
    Venue
                </div>
                <div class="col form-group row">
  <input type="text" name="venue" class="form-control" value="<?php echo "$h[venue]"; ?> ">
                </div>
            </div>
            <div class="row">
                <div class="col-3 text-right">
        For
                </div>
                <div class="col form-group row">
  <input type="text" name="for_people" class="form-control" value="<?php echo "$h[for_people]"; ?> ">
                </div>
            </div>
            <div class="row ">
                <div class="col-3 text-right">
    Contact
                </div>
                <div class="col form-group row">
  <input type="text" name="contact" class="form-control" value="<?php echo "$h[contact]" ?> ">
                </div>
            </div>
            <div class="row">
                <div class="col-3 text-right">
    Authorized By
                </div>
                <div class="col form-group row">
  <input type="text" name="auth" class="form-control" value="<?php echo "$h[auth]"; ?> ">
                </div>
            </div>
  <div class="row">
    <div class="col-3 text-right">
        Resources
    </div>
    <div class="col form-group row">
        <input type="text" name="resources" class="form-control" value="<?php echo "$h[resources]"; ?> ">
    </div>
  </div>


  <div class="row" >
      <div class="col text-center" >
        <input type="submit" name="submit" value="Submit">

        <input type="button" name="cancel" value="Cancel" id="cancel">
      </div>
  </div>
<input type='hidden' name='id' class="form-control" value="<?php echo "$id";?>"/>
</form>
      </div>
      </div>
      </div>
      <script>
      $("#cancel").click(function(event) {
        event.preventDefault();
          window.location.replace('/php/event_manage.php');
      });

      </script>
  </body>
</html>
