<?php

session_start();

session_unset();   // remove all session variables

session_destroy();  // destroy the session

echo " Log out success " ;

header('Location: login.html');   //Redirect to login page

?>
