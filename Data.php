<?php
//   It's just tow step Make the formate 
// then add the timme you wanted to the current time
// date(formate , timestamp)


$nextMonth =  time() +( 30 *24*60*60) ;
//list of time zone in php
// يجب ان تغيره من اعدادات السيرفر الخاصة
 date_default_timezone_set('Asia/Riyadh');
//you can change the formate of date
echo date ('Y-m-d:i:s' , $nextMonth). '<br>' ;
//
echo 'Copyright To Amjad $copy; 2010-' .date ('Y'). '<br>' ;
//
echo 'Copyright To Amjad $copy; 2010-' .date ('m'). '<br>' ;
//
echo 'Copyright To Amjad $copy; 2010-' .date ('m-d'). '<br>' ;
//
echo 'Copyright To Amjad $copy; 2010-' .date ('Y-m-d:/ of h:i:s'). '<br>' ;
//
echo 'Copyright To Amjad $copy; 2010-' .date ('Y'). '<br>' ;
echo 

// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

 echo date("F j, Y, g:i a")            .'<br>';    // March 10, 2001, 5:16 pm
echo date("m.d.y").'<br>' ;  // 03.10.01
echo date("j, n, Y")                   .'<br>'  ; // 10, 3, 2001
echo date("Ymd")                      .'<br>'  ; // 20010310
echo date('h-i-s, j-m-y, it is w Day') .'<br>' ;  // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
echo date('\i\t \i\s \t\h\e jS \d\a\y.').'<br>';   // it is the 10th day.
echo date("D M j G:i:s T Y")           .'<br>' ;  // Sat Mar 10 17:16:18 MST 2001
echo date('H:m:s \m \i\s\ \m\o\n\t\h') .'<br>';   // 17:03:18 m is month
echo date("H:i:s")                     .'<br>' ;  // 17:16:18
echo date("Y-m-d H:i:s")              .'<br>' ;  // 2001-03-10 17:16:18 (the MySQL DATETIME format)


$sixMonthLater = time() + (60*60*24*30*6);//you can use useful function that caled stetotime

echo date('l jS \of F Y h;i;s a' , $sixMonthLater) .'<br>'.'<br>';



//functions for time
// strtotime (date, timestamp[now])
$time = strtotime('now');

$time2 = strtotime('+1 month');
$time4 = strtotime('+2 day');
$time5 = strtotime('+1 day 2 week 6hours');

$time22 = strtotime('next Monday');

$time44 = strtotime('next Thursday');
echo date('Y-m-d h:i:s' , $time4 ).'<br>' ;  
