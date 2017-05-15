<?php

// $date = date('M d Y');

$todayPage = file_get_contents('https://en.wikipedia.org/wiki/Wikipedia:Selected_anniversaries/today');

$todayDate = explode('<div id="mw-content-text" lang="en" dir="ltr" class="mw-content-ltr"><p><b>', $todayPage);

$endTodayDate = explode('<div class="thumbinner mp-thumb" style="background: transparent; border: none; padding: 0;', $todayDate[1]);

$todayListOne = explode('</span></i></div>
</div>
</div>
<ul>', $todayPage);

$todayListOneEnd = explode('</ul>
<p><b><a href="', $todayListOne[1]);

// $todayListTwo = explode('</li>
// <li>', $todayPage);
//
// $todayListThree = explode('</li>
// <li>', $todayPage);


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
        <?php
        echo $endTodayDate[0];
        ?>

        <p><?php
        echo $todayListOneEnd[0];

        // echo $todayListTwo[1];
      ?><p>
      </section>

      <footer>

      </footer>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/script.js" charset="utf-8"></script>
  </body>
</html>
