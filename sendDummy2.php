<?php
//if "email" variable is filled out, send email
if (isset($_REQUEST['email']))  {

    //Email information
    $admin_email = "someone@example.com";
    $email = $_REQUEST['jib090994@gmail.com'];
    $subject = $_REQUEST['test'];
    $comment = $_REQUEST['testing'];

    //send email
    mail($admin_email, "$subject", $comment, "From:" . $email);

    //Email response
    echo "Thank you for contacting us!";
}

//if "email" variable is not filled out, display the form
else  {
    ?>

    <form method="post">

        Email: <input name="email" type="text" />

        Subject: <input name="subject" type="text" />

        Message:

        <textarea name="comment" rows="15" cols="40"></textarea>

        <input type="submit" value="Submit" />
    </form>

    <?php
}
?>

