<?php
/**
 * Created by PhpStorm.
 * User: jibba
 * Date: 16-05-2018
 * Time: 11:27
 */

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("jib090994@gmail.com", "HI", $msg)){
    echo ("<p> Email succesfully send</p>");
} else{
    echo ("<p> Email delivery failed</p>");
}

mail("jib090994@gmail.com","My subject",$msg);


