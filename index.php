<?php

$r = rand(1, 5);

$todayPage = file_get_contents('https://en.wikipedia.org/wiki/Wikipedia:Selected_anniversaries/today');

$todayDate = explode('<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p><b>', $todayPage);

$endTodayDate = explode('<div class="thumbinner mp-thumb" style="background: transparent; border: none; padding: 0;', $todayDate[1]);



$todayList = explode('</span></i></div>
</div>
</div>
<ul>', $todayPage);

$todayListEnd = explode('</ul>
<p><b><a href="', $todayList[1]);

$todayListArray = explode('<li>', $todayList[1]);


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Today in History</title>
  </head>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <body>
    <main>
      <header>
        <h1>Today in History</h1>
        <h2><?php echo strip_tags($endTodayDate[0]) ?></h2>
      </header>

      <section>


        <h5><?php
        switch ($r) {
          case 1:
            echo strip_tags($todayListArray[1]);
            break;
          case 2:
            echo strip_tags($todayListArray[2]);
            break;
          case 3:
            echo strip_tags($todayListArray[3]);
            break;
          case 4:
            echo strip_tags($todayListArray[4]);
            break;
          case 5:
            $todayLast = explode('<p><b><a href', $todayListArray[5]);
            echo strip_tags($todayLast[0]);
            break;
          default:
            echo '<span class="error">Code Broke Needs to be fixed!</span>';
            break;
        }
      ?>
    </h5>
    <time></time>
        <!-- <h3>Find out more Info <a href="https://en.wikipedia.org/wiki/Wikipedia:On_this_day/Today" target="_blank">HERE</a> about the events that happened</h3> -->
      </section>
      </main>
      <footer>
        <h3>Find out more Info <a href="https://en.wikipedia.org/wiki/Wikipedia:On_this_day/Today" target="_blank">HERE</a> about the events that happened</h3>
        <h4>Created by Collin OConnell - <a href="http://shortnd.design" target="_blank">shortnd.design</a></h4>

      </footer>
    <!-- </main> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
