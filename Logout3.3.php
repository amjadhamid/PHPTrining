<?php
//final thing is /
session_start();
//CLEAR ths ession
session_unset();
//destroy its
session_destroy();

print_r($_SESSION);-