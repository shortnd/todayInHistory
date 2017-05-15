//Makes sure document is loaded before
//doing anything
$(document).ready(function(){
//Gets the current date
var d = new Date();
//Returns a int between 0-6 to Say what Day it is
var day = d.getDay();


// d.setUTCFullYear();
// d.setUTCMonth();
// d.setUTCDate();
// d.setUTCHours();
// d.setUTCMinutes();
// d.setUTCSeconds();
//
// console.log(d);                        // -> Sat Feb 28 2004 23:45:26 GMT-0300 (BRT)
// console.log(d.toLocaleString());       // -> Sat Feb 28 23:45:26 2004
// console.log(d.toLocaleDateString());   // -> 02/28/2004
// console.log(d.toLocaleTimeString());
//
// alert(time);
//Switch statement that will log what day it is and then
//change the background according to what day it is.

// console.log(d.toLocaleTimeString());
//############# jQuery DOM var ########

var $body = $('body');

var $time = $('.time');

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

//##################

// function startTime(){
//   let today = new Date();
//   let h = today.getHours();
//   let m = today.getMinutes();
//   let s = today.getSeconds();
//   m = checkTime(m);
//   s = checkTime(s);
//   console.log(h + " : " + m + " : " + s);
//   var t = setTimeout(startTime, 500);
// }

//##################

// function display_c(){
// var refresh=1000; // Refresh rate in milli seconds
// mytime=setTimeout('display_ct()',refresh)
// }
//
// function display_ct() {
// var strcount
// var x = new Date()
// $time.html(x);
// tt=display_c();
// }

});

function startTime(){
  let today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  // m = checkTime(m);
  // s = checkTime(s);
  $('.time').html(h + " : " + m + " : " + s);
  var t = setTimeout(startTime, 1000);
}
