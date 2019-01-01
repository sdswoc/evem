<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="../css/index.css" type="text/css" rel="stylesheet"/>
    <title>Welcome</title>
  </head>
  <body>
    <h1 class="logo">evem</h1>
    <div class="nav">
        <ul>
          <li><a href="#">Events</a></li>
          <li><a href="#">Search</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </div>
      <div class="edit_event">
        <h2>Edit Event</h2>
        <?php
          include('conn.php');
          $id=$_GET['id'];
        $sql="select * from events where id='$id';";
        $result=$conn->query($sql);
        $h=$result->fetch_assoc();
         ?>
         <?php echo "$id";?>
        <form class="event_add" action="event_add.php" method="post">
        Name <input type="text" name="event_name" class="event_manage" value=" <?php   echo "$h[name]"; ?> "> <br>
        Brief Description <br> <textarea name="event_desc" rows="8" cols="80"  class="event_manage" ><?php echo "$h[description]"; ?></textarea> <br>
        Start At <input type="time" name="start_at" class="event_manage" value="<?php  echo "$h[start_at]";?>"> <br>
        End At <input type="time" name="end_at" class="event_manage" value="<?php  echo "$h[end_at]";?>"> <br>
        Date <input type="date" name="date" class="event_manage" value="<?php echo "$h[date]" ?>"> <br>
        Venue <input type="text" name="venue" class="event_manage" value=" <?php echo "$h[venue]"; ?> "> <br>
        For <input type="text" name="for_people" class="event_manage" value=" <?php echo "$h[for_people]"; ?> "> <br>
        Contact <input type="text" name="contact" class="event_manage" value=" <?php echo "$h[contact]" ?> "> <br>
        Authorized By <input type="text" name="auth" class="event_manage" value=" <?php echo "$h[auth]"; ?> "> <br>
        Resources <input type="text" name="resources" class="event_manage" value=" <?php echo "$h[resources]"; ?> "> <br>
        <input type='hidden' name='id' value="<?php echo "$id";?>"/>
        <input type="submit" name="submit" value="submit">  <input type="submit" name="submit" value="cancel">
        </form>

      </div>
  </body>
</html>
