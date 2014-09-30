<?php
/**
 * Created by PhpStorm.
 * User: Pam
 * Date: 9/28/14
 * Time: 2:34 PM
 */
$words = file('wordlist.txt', FILE_IGNORE_NEW_LINES);

$symbols = Array('~','!','@','#','$','%','^','&','*','(',')','+','{','}',
                '[',']','<','>','?','/');
<<<<<<< HEAD
if (isset($_GET['numword'])) {
for ($i=1;$i <= $_GET['numword']; $i++){
    $newword = $words[rand(0, count($words)-1)];

    if ($_GET['case'] == 'camel') {
        $newword = ucfirst($newword);
    }
    elseif ($_GET['case'] == "snake") {
        if ($i < $_GET['numword']) {
=======

$case = $_GET["case"];

for ($i=1;$i <= $_GET["numword"]; $i++){
    $newword = $words[rand(0, count($words)-1)];

    if ($case == 'camel') {
        $newword = ucfirst($newword);
    }
    elseif ($case == "snake") {
        if ($i < $_GET["numword"]) {
>>>>>>> 256893cd479a0fd3f0f3c1aee50f1e2e5484494c
            $newword = strtolower($newword)."-";
        }
        else $newword = strtolower($newword);
    }
<<<<<<< HEAD
    else {
        $newword = strtolower($newword).'&nbsp';
    }
=======
>>>>>>> 256893cd479a0fd3f0f3c1aee50f1e2e5484494c
    echo $newword;
}
if (isset($_GET["symbol"])) {

    echo $symbols[rand(0, count($symbols)-1)];
}
if (isset($_GET["num"])) {
<<<<<<< HEAD
    echo rand(10,99);
}
}
=======
    echo rand(1,100);
}
>>>>>>> 256893cd479a0fd3f0f3c1aee50f1e2e5484494c
