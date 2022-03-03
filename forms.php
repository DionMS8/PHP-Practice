//=====[USING PHP WITH FORMS]=================================================================================

//=====[GET VS POST]=================================================================================

- GET USES THE HTTP GET METHOD TO PASS VARIABLE
NAMES AND THEIR VALUES INTO THE URL ADDRESS FOR 
THE WEB PAGE, MAKING IT VISIBLE TO EVERYONE

- GET IS NOT SUITABLE FOR SENSITIVE DATA

- GET IS MORE SUITABLE FOR A SEARCH FORM

- GET LIMITS THE DATA THAT CAN BE SENT TO 
2000 CHARACTERS

- POST USES THE HTTP POST METHOD TO STORE THE 
VARIABLE NAMES AND THEIR VALUES IN THE BODY OF 
THE HTTP REQUEST, MAKING THEM INVISIBLE TO USERS 
AND THIRD-PARTIES

- WITH POST, THERE IS NO LIMIT TO THE AMOUNT OF 
INFORMATION THAT CAN BE SENT


//===[EXTRACTING INFORMATION FROM THE FORM]=================================================================================

$_POST["FieldName"]
$_GET["FieldName"]


//===[OTHER FEATURES]=================================================================================

- INPUT FIELDS CAN BE SET AS REQUIRED SO THAT 
USERS MUST FILL THEM OUT BEFORE THE FORM CAN 
BE SUBMITTED

- DATA VALIDATION
- ERROR MESSAGES


//===[FORM SECURITY]=================================================================================

- htmlspecialchars()
- trim()
- stripslashes()


//===[DEALING WITH EMAIL ADDRESSES]================================================================================

FILTER_VALIDATE_EMAIL => MAKES SURE THAT THE 
SUBMITTED EMAIL ADDRESS IS IN THE CORRECT FORMAT

FILTER_SANITIZE_EMAIL => REMOVES ALL ILLEGAL 
CHARACTERS FROM THE SUBMITTED EMAIL ADDRESS



