<?php require 'php/login_check.php'; ?>
<?php session_start();
$_SESSION[index] = 0; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="dist/css/index.css" type="text/css" rel="stylesheet" />
  <link href="dist/css/header.css" type="text/css" rel="stylesheet" />
  <link href="dist/css/timeline.min.css" rel="stylesheet">

  <link rel="stylesheet" href="dist/css/vertical_timeline.css">
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="dist/css/switch.css" />
  <meta charset="utf-8">
  <style media="screen">
    .header {
      color: #000957;
    }

    .tagline {
      color: grey;
    }

    img {
      width: 130px;
    }
  </style>
  <title>
    evem - Event Management System
  </title>
</head>

<body>
    <?php require 'modules/header.php'; ?>
  <div class="mainbody">

    <div class="card ">
      <div class="card-body shadow-lg p-4  bg-white rounded ">
        <div class="icon text-center">
          <img src="dist/images/evem.jpg" class="img-fluid" alt="">
        </div>
        <div class="display-1 text-center header">
          evem
        </div>
        <div class="text-center tagline">
          <h3>EVENT MANAGEMENT SYSTEM</h3>
        </div>
        <div class="text-center " style="color:grey">
          <h5>A simple materialistsic designed website to reduce your hassle and provide you brain candies for your diverse interests.</h5>
        </div>
      </div>
    </div>
    <div class="card ">
      <div class="card-body shadow-lg p-4  bg-white rounded ">
        <div class="card-body shadow-lg-lg p-4 bg-yellow rounded ">
          <h2 id="t" class="text-center display-4">All Events</h2>
        </div>
        <div class="card-body shadow-lg-lg p-4 bg-yellow rounded ">
          <div class="timeline" data-visible-items="<?php require '/php/visible';
                                                    echo "$v"; ?>">
            <div class="timeline__wrap">
              <div class="timeline__items">

                <?php require '/php/event_timeline.php'; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="/dist/js/timeline.min.js"></script>
  <script>
    timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',

    });
  </script>
</body>

</html>