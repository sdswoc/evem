<?php
session_start();
include('conn.php');
include('check_event_user.php');
include('rating.php');
$id=$_GET[i];
$r=$conn->query("select *,DATE_FORMAT(date, '%D %b %y') 'da',TIME_FORMAT(start_at, '%h:%i %p') 'sti',TIME_FORMAT(end_at, '%h:%i %p') 'eti' from events where id=$id")->fetch_assoc();
  $check_value=check_event($r['id']);
  $_SESSION[id]=$r[id];
 ?>

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
      <title><?php echo $r[name]; ?></title>
      <style media="screen">
        .vl{
          width: 35px;
          border-left: 6px solid brown;
        }
        .heading{
          color: brown;
        }
        .body{
          color:grey;
        }

      </style>
  </head>

  <body>
  <?php require('../modules/header.php');?>
  <div class="mainbody">
    <div class="card p-4  bg-white rounded table ">
      <div class="card-body shadow p-4  bg-white rounded table container">
            <div class="row">
            <div class="display-1 heading col-xl d-inline"><?php echo $r[name]; ?></div>
            <div class="col-2 d-inline  text-right"> <h4>Going?</h4><?php echo "<label><input type='checkbox' class='ios-switch bigswitch' id='toggle$r[id]' onclick='go$r[id]()'/><div><div></div></div></label>
            <script>
            document.getElementById('toggle$r[id]').checked =$check_value;
              function go$r[id](){
                let v=document.getElementById('toggle$r[id]').checked;
                $.post('interested_user.php', {checked_value: v,id:'$r[id]'});
              }
              $('#event_desc$r[id]').click(function(event){
                event.preventDefault();
                    window.location.replace('/php/event_desc.php?i=$r[id]');
              });
            </script><br>"; ?>
            <a href="<?php echo "/php/feedback.php?i=$r[id]"; ?>">Give Feedback</a>
            </div>
              </div>
      </div>
        <div class="card-body shadow p-4  bg-white rounded table ">
            <h1>Description</h1>
            <div >
              <h3 class="body"><?php echo $r[description]; ?></h3>
            </div>
      </div>
      <div class="container card-body shadow p-4  bg-white rounded table ">
        <div class="row">

          <div class="col-4 ">
          <h2><?php echo $r[sti]." - ".$r[eti]; ?></h2>
          </div>
          <div class=" vl">

          </div>
          <div class="col ">
          <h2><?php echo $r[da]; ?></h2>
          </div>
        </div>

      </div>
      <div class="card-body shadow p-4  bg-white rounded table ">
              <h1 class="d-inline ">Venue : <div class="heading d-inline "><?php echo $r[venue]; ?></div></h1>
      </div>
      <div class="card-body shadow p-4  bg-white rounded table ">
              <h2>For : <?php echo $r[for_people]; ?></h2>
      </div>
      <div class="card-body shadow p-4  bg-white rounded table ">
              <h3 class="d-inline ">Contact : <div class="heading d-inline"><?php echo $r[contact]; ?></div></h3>
      </div>
        <div class="card-body shadow p-4  bg-white rounded table ">
      <h3>Feedbacks</h3>
        <?php include('feedback_list.php') ?>
        </div>
      </div>
    </div>


</div>

  </body>
</html>
