//=====[COOKIES]===================================================================================

//===[CREATING A COOKIE]===========================================================================

setcookie(name, value, expire, path, domain, secure, httponly);

- ONLY THE NAME PARAMETER IS REQUIRED 
- ALL OTHER PARAMETERS ARE OPTIONAL 
- THE VALUE OF A COOKIE IS AUTOMATICALLY 
URLENCODED WHEN IT IS SENT AND AUTOMATICALLY 
DECODED WHEN IT IS RECEIVED

- NOTE: THE SETCOOKIE() FUNCTION MUST BE 
USED BEFORE <HTML> TAGS

- $_COOKIE => GLOBAL PHP VARIABLE FOR COOKIE

<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

// 86400 = 1 DAY
// THE "/" MEANS THE COOKIE IS AVAILABLE ON 
// THE WHOLE WEBSITE

?>

<html>
    <body>

    <?php
    if(!isset($_COOKIE[$cookie_name])) {
    echo "THE COOKIE: " . $cookie_name . " IS NOT SET!";
    } else {
    echo "THE COOKIE: " . $cookie_name . " IS SET!<br>";
    echo "VALUE IS: " . $_COOKIE[$cookie_name];
    }
    ?>

    </body>
</html>


//===[MODIFYING A COOKIE]===========================================================================

- THE SETCOOKIE() FUNCTION IS SIMPLY USED AGAIN 
TO MODIFY AN EXISTING COOKIE


//===[DELETING A COOKIE]===========================================================================

- TO DELETE A COOKIE, THE SETCOOKIE() FUNCTION 
IS USED WITH AN EXPIRATION DATE IN THE PAST

- SETTING THE EXPIRATION DATE TO AN HOUR AGO
setcookie("user", "", time() - 3600); 



