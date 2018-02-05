<?php
/**
 * Created by PhpStorm.
 * User: Michael Porten
 * Date: 2/5/2018
 * Time: 10:53 AM
 */
require_once('classes/Users.class.php');
require_once('classes/regUser.class.php');
require_once('classes/adminUser.class.php');

//registered user
$rUser = new regUser(1,12345);
$rUser->setUser("J. Michael", "Porten", "jmporten@iupui.edu");

//admin user
$aUser = new adminUser(2, 54321);
$aUser->setUser("John", "Doe", "JDoe@gmail.com");

?>

<html>
    <head>
        <title>CIT313 - Spring 2015 - Exercise 2 - J. Michael Porten</title>
    </head>
    <body>
    User Level:<?php echo $rUser->getUserLevel(); ?><br>
    Registered User ID: <?php echo $rUser->getUserID(); ?><br>
    Registered User Type: <?php echo $rUser->getUserType(); ?><br>
    Registered First Name: <?php echo $rUser->getFirstName(); ?><br>
    Registered Last Name: <?php echo $rUser->getLastName(); ?><br>
    Registered Email: <?php echo $rUser->getEmailAddress(); ?><br>
    <hr>
    User Level: <?php echo $aUser->getUserLevel(); ?><br>
    Admin User ID: <?php echo $aUser->getUserID(); ?><br>
    Admin User Type: <?php echo $aUser->getUserType(); ?><br>
    Admin First Name: <?php echo $aUser->getFirstName(); ?><br>
    Admin Last Name: <?php echo $aUser->getLastName(); ?><br>
    Admin Email: <?php echo $aUser->getEmailAddress(); ?><br>

    </body>
</html>
<?php
