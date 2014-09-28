<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
/**
 * User: Pamela Lim
 * Date: 9/28/14
 * Time: 2:27 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Project 2</title>
</head>
<body>

<h1>xkcd Password Generator</h1>
<img src="http://imgs.xkcd.com/comics/password_strength.png">

<form method='GET' action='index.php'>
    <div>Number of words
    <select name="numword">
        <option value="3">3</option>
        <option value="4" selected>4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>
    </div>
    <div>
        <input type='checkbox' name='symbol'>Add a special symbol<br>
        Case:<br>
        <input type='radio' name='case' value="snake" checked>Snake<br>
        <input type='radio' name='case' value="camel">Camel<br>
        <input type='checkbox' name='num'>Add a number<br>

    <input type='submit' value='Generate a password!'>
    </div>
</form>
<?php require 'logic.php'; ?>

</body>
</html>