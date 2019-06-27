<?php require('php/login_check.php'); ?>
<?php session_start(); ?>
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
  <style media="screen">

  </style>
    <title>Welcome</title>
  </head>
  <body>
    <?php require('modules/header.php');?>
<div class="mainbody">
  <div class="card ">
    <div class="card-body shadow-lg p-4  bg-white rounded ">
      <h2 class="text-center display-4">Welcome! <?php echo "$_SESSION[name]"; ?></h2>
      <hr/>
      <div class="card ">
        <div id="t" class="card-body shadow-lg bg-yellow p-4  rounded ">
      <h1 class="text-center">Your Timeline</h1>
    </div>
    </div>
      <div class="card ">
        <div class="card-body shadow-lg-lg bg-yellow p-4  rounded ">
      <div class="timeline rounded" data-visible-items="  <?php include('php/visible.php'); echo $v;?>">
        <div class="timeline__wrap">
          <div class="timeline__items">

            <?php include('php/event_timeline.php'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
      <div class="card ">
          <div class="card-body shadow-lg p-4 align-middle bg-white rounded">
            <div class="table">
            <div class="row">
              <div class="col-xl d-inline">
                <h1>Subscribed Events</h1>
              </div>
              <div class="col-sm d-inline text-right">
                <?php if($_SESSION[organizer]=='y')  echo "<h1><a href='php/event_manage.php'>Add/Edit Event</a></h1>";?>
              </div>
            </div>
          </div>

    <?php include('php/rating.php');?>
  </div>
    </div>
    <div class="card ">
        <div class="card-body shadow-lg p-0 bg-white rounded ">

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
