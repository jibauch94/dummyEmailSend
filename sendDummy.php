<?php
/**
 * Created by PhpStorm.
 * User: jibba
 * Date: 16-05-2018
 * Time: 11:15
 */


$sender = "me@example.com";
$to = "me@example.com";  //to is the email address to the receiver
$subject = "Hi!";  //subject is whatever your mail should be about
$body = "Hi, How are you?";  //body is "the email" what the email says - \n adds a new line to the message

if(mail($to, $subject, $body, "From" .$sender)){
    echo ("<p> Email succesfully sent!</p>");
} else{
    echo("<p>Email delivery failed..</p>");
}

//print phpinfo();

