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
  <body>
    <main>
      <header>
        <h1>Today in History</h1>
        <h2><?php echo $date ?></h2>
      </header>

      <section>


        <p><?php
        switch ($r) {
          case 1:
            echo $todayListArray[1];
            break;
          case 2:
            echo $todayListArray[2];
            break;
          case 3:
            echo $todayListArray[3];
            break;
          case 4:
            echo $todayListArray[4];
            break;
          case 5:
            $todayLast = explode('<p><b><a href',$todayListArray[5]);
            echo $todayLast[0];
            break;
          default:
            echo 'Code Broke Needs to be fixed!';
            break;
        }
      ?><p>
      </section>

      <footer>

      </footer>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
