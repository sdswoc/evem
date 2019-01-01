<?php require('login_check.php'); ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="/evem/css/bootstrap.min.css" >
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
      Search
    </title>
  </head>
  <body>
    <?php require('../modules/header.php');?>
    <div class="mainbody">
      <div class="card main">
        <div class="card-body shadow p-4  shadow ">
          <h2>Search</h2>
            Search By <br>
            <form class="search" action="search.php" method="post">
            <select class="search" name="choice">
              <option value="name">Name</option>
              <option value="start_at">Start At</option>
              <option value="end_at">End At</option>
              <option value="date">Date</option>
              <option value="venue">Venue</option>
              <option value="for_people">For</option>
            </select>
          <input type="text" name="search_input" >
          <input type="submit" name="submit" value="Go">
          </form>
        </div>
        </div>

      <div class="card">

      <div class="card-body p-0 shadow ">
        <h3 class='p-4'>Search Results</h3> <br>
        <?php
        include('conn.php');
        $choice=$_POST[choice];
        $search_input=$_POST[search_input];

        if(isset($_POST[search_input])){
        $sql="select * from events where lower($choice) like '%$search_input%';";

        $result=$conn->query($sql);
        if ($result->num_rows>0) {
        echo "<table class='table'>
        <tr>
            <td>Date</td>
            <td> Name </td>
            <td> Description</td>
            <td>Start At</td>
            <td>End At</td>
            <td>Venue</td>
            <td>For</td>
            <td>Contact</td>
            <td>Rating</td>
            <td>Feedback</td>
        </tr>
          ";

          while ($r=$result->fetch_assoc()) {
            echo "    <tr>
                        <td>$r[date]</td>
                        <td>$r[name]</td>
                        <td>$r[description]</td>
                        <td>$r[start_at]</td>
                        <td>$r[end_at]</td>
                        <td>$r[venue]</td>
                        <td>$r[for_people]</td>
                        <td>$r[contact]</td>
                        <td>$r[rating]</td>
                        <td><a href='http://localhost/evem/php/feedback.php?i=$r[id]'>Feedback</a></td>
                        </tr>
                        ";

          }
        }
        else {
          echo "No Event Found";
        }
}
else {
  echo "No Event Found";
}
unset($_POST[search_input]);
         ?>

      </div>
    </div>
  </div>
  </body>

</html>
