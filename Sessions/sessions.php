//=====[PHP SESSIONS]============================================================================

- A SESSION IS A METHOD BY WHICH DATA IS 
STORED IN VARIABLES ON THE SERVER SO THAT 
THEY CAN BE ACCESSED AND USED ACROSS MULTIPLE 
WEB PAGES

<?php

// STARTING A SESSION
// THE SESSION MUST BE STARTED ON THE SCRIPT
// FOR EACH WEB PAGE BEFORE ANYTHING ELSE
session_start();

// SETTING SESSION VARIABLES
// USING THE GLOBAL VARIABLE: $_SESSION
$_SESSION["username"] = "John Doe";
$_SESSION["age"] = "35";

// GETTING THE SESSION VARIABLES
echo session_id();

// THIS WILL UNSET THE VALUES OF ALL SESSION VARIABLES
session_unset();

// THIS WILL DESTROY THE SESSION
session_destroy();

?>


RESOURCE: https://code.tutsplus.com/tutorials/how-to-use-sessions-and-session-variables-in-php--cms-31839


