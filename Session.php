<?php
// 1 Start or resume session 

// note :modify is Depends on the order خب حشلثس

 session_start();
 $_SESSION['username'] =  "amjad";
 
 $_SESSION['favfood'] =  "bizza";

 echo '<a href="Session2.php">Room Number 2 </a>';
 print_r($_SESSION);