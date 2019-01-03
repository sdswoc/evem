<?php require('php/login_check.php'); ?>
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
    <title>Welcome</title>
  </head>
  <body>
    <?php require('modules/header.php');?>
<div class="mainbody">
  <div class="card ">
    <div class="card-body shadow p-4  bg-white rounded ">
      <h2>Welcome <?php echo "$_SESSION[name]"; ?></h2>

      <h3>Your Timeline</h3>

      <div class="timeline" data-visible-items="  <?php include('php/visible.php'); echo $v;?>">
        <div class="timeline__wrap">
          <div class="timeline__items">

            <?php include('php/event_timeline.php'); ?>
          </div>
        </div>
      </div>
    </div>
      </div>
      <div class="card ">
          <div class="card-body shadow p-4  bg-white rounded">
        <h3>Subscribed Events</h3>

    <?php if($_SESSION[organizer]=='y')  echo ' <a href="php/event_manage.php">Add/Edit Event</a> ';?>
    <?php include('php/rating.php');?>
  </div>
    </div>
    <div class="card ">
        <div class="card-body shadow p-0 bg-white rounded ">

    <div id="ed">
      <div class='time'>
      <?php  include('php/event_list_people.php');?>
    </div>
  </div>
     <script type="text/javascript" src="dist/js/timeline.min.js"></script>
      <script>
      timeline(document.querySelectorAll('.timeline'), {
  
      mode: 'horizontal',
      verticalStartPosition: 'left',

      });
      </script>
    </div>
      </div>
    </div>
      </body>
</html>
