//=====[PHP FILE SYSTEM]=================================================================================

//===[PHP INCLUDE AND REQUIRE]=================================================================================

// REQUIRE WILL PRODUCE A FATAL ERROR AND 
// STOP THE SCRIPT
<?php require "FILE_PATH"; ?>
<?php require_once "FILE_PATH"; ?>

// INCLUDE WILL ONLY PRODUCE A WARNING AND 
// THE SCRIPT WILL CONTINUE
<?php include "FILE_PATH"; ?>
<?php include_once "FILE_PATH"; ?>


- include_once => MOST IDEAL FOR INCLUDING FILES THAT MAY CONTAIN HTML MARKUP FOR PAGE COMPONENTS SUCH AS NAVBARS AND FOOTERS

- require_once => MOST IDEAL FOR INCLUDING FILES FOR THE PURPOSE OF ACCESSING FUNCTIONS OR VARIABLES THAT ARE DECLARED WITHIN THEM






