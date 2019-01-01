<?php session_start();
$_SESSION[index]=0; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

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
      <meta charset="utf-8">
    <title>
      evem - Event Management System
    </title>
  </head>
  <body>
    <?php require('modules/header.php');?>
<div class="mainbody">


  <div class="timeline" data-visible-items="<?php include('visible'); echo "$v"; ?>">
    <div class="timeline__wrap">
      <div class="timeline__items">

        <?php include('php/event_timeline.php'); ?>
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript" src="dist/js/timeline.min.js"></script>
  <script>
  timeline(document.querySelectorAll('.timeline'), {
  forceVerticalMode: 700,
  mode: 'horizontal',
  verticalStartPosition: 'left',

  });
  </script>
  </body>
</html>
