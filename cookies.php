The Life  cycle of cookies 

// setcookie(name , expire , path , domain ,secure , httponly)
<!-- Name :The Name of cookies
Value
Expire : Expiretion DAte Is important the time of this cookies
path: the page that you want to create the cookie in it
domain : The (sub)domain that the cookie is available to. 
secure : false default
httponly :  false default 
http://localhost:8080/php_cource/cookies/cookies.php
-->
<?php 

// first thing is checking if the cookies is enable
//second set cookies 
setcookie("amjad","Test",time() + 3600 , "/");
 if (count($_COOKIE) > 0) {
     ECHO "Good the cookies are enable for this website";

 }else {
     
    echo" Sorry The Cookies are not enable please enable it if for best browsing";
 }

?>
 //third modify , delete 
 <!DOCTYPE html>
 <html>
