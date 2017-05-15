//Makes sure document is loaded before
//doing anything
$(document).ready(function() {
  //Gets the current date
  var d = new Date();
  //Returns a int between 0-6 to Say what Day it is
  var day = d.getDay();
  //############# jQuery DOM var ########

  var $body = $('body');

  var $time = $('time');

  //############# jQuery DOM var END ####
  // ##########################
  switch (day) {
    case 0:
      console.log('Today is Sunday');
      break;
    case 1:
      console.log('Today is Monday');
      break;
    case 2:
      console.log('Today is Tuesday');
      break;
    case 3:
      console.log('Today is Wensday!');
      break;
    case 4:
      console.log('Today is Thusday');
      break;
    case 5:
      console.log('Today is Friday');
      break;
    case 6:
      console.log('Today is Saturday');
      break;
    default:
      $body.css('background', 'yellow');

  }
  //###############################

  //#########JS Clock that auto updates#########

  function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    if (h <= 12) {
      if (m <= 9) {
        m = "0" + m;
      }
      $time.html(h + " : " + m + " am");
    } else if (h > 12) {
      if (m <= 9) {
        m = "0" + m;
      }
      $time.html((h - 12) + " : " + m + " pm");
    } else {
      if (m <= 9) {
        m = "0" + m;
      }
      $time.html((h + 1) + " : " + m + " am");
    }
    var t = setTimeout(startTime, 1000);
  }

  startTime();

  //########JS Clock that auto updates end##########

});
