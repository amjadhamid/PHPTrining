<?php
//Resume the seesion
session_start();

echo 'Hello' . '  ' .$_SESSION['username'] . 'How Are you?' ;

echo 'food' . $_SESSION['favfood'] ;

echo '<a href="Session3.php">Room Number 3 </a>';