<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Receiving Input </title>
    </head>
    <body>
        <font size="5">Thank You. Got Your Input.</font>
        <?php
            $username = $_POST['username'];
            $class = $_POST['class'];
            $university = $_POST['university'];
            $hobbies = $_POST['hobbies'];
            print "<br>Hello, $username";
            print "<br>You are studing at $class, $university";
            print "<br>Your hobbies are $hobbies";
        ?>
    </body>
</html>