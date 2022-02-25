//=====[PHP SESSIONS]==============================================================

- A SESSION IS A METHOD BY WHICH INFORMATION 
IS STORED IN VARIABLES SO THAT THEY CAN BE 
ACCESSED AND USED ACROSS MULTIPLE WEB PAGES

<?php

// STARTING A SESSION
session_start();

// SETTING SESSION VARIABLES
// USING THE GLOBAL VARIABLE: $_SESSION
$_SESSION["username"] = "John Doe";
$_SESSION["age"] = "35";

// GETTING THE SESSION VARIABLES
echo session_id();


session_unset();
session_destroy();

?>





