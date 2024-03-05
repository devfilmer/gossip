<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pig Farm Life</title>
<div style="display:none">
<?php
/***************************************************\
 * PHP 4.1.0+ version of email script. For more
 * information on the mail() function for PHP, see
 * http://www.php.net/manual/en/function.mail.php
\***************************************************/


// First, set up some variables to serve you in
// getting an email.  This includes the email this is
// sent to (yours) and what the subject of this email
// should be.  It's a good idea to choose your own
// subject instead of allowing the user to.  This will
// help prevent spam filters from snatching this email
// out from under your nose when something unusual is put.

$sendTo = "spoiledpickle357@gmail.com;";
$subject = "New Pig Farm Life Contact";

// variables are sent to this PHP page through
// the POST method.  $_POST is a global associative array
// of variables passed through this method.  From that, we
// can get the values sent to this page from Flash and
// assign them to appropriate variables which can be used
// in the PHP mail() function.

/*if ($_POST["email"] ==""){
		   $_POST["email"] = "no_email_given";
		   }
		   */
// header information not including sendTo and Subject
// these all go in one variable.  First, include From:
//$headers = "From: " . $_POST["firstname"] ." ". $_POST["lastname"] ."\r\n";
$headers = "From: "  . "<" . $_POST["email"] .">\r\n";
// next include a replyto
//$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
// often email servers won't allow emails to be sent to
// domains other than their own.  The return path here will
// often lift that restriction so, for instance, you could send
// email to a hotmail account. (hosting provider settings may vary)
// technically bounced email is supposed to go to the return-path email
//$headers .= "Return-path: " . $_POST["email"];

// now we can add the content of the message to a body variable
//$message = $_POST["message"];
$message = " You have a new follower for Pig Farm Life.\r\n\n";

$message .= "Email: ". $_POST["email"]. "\r\n";



// once the variables have been defined, they can be included
// in the mail function call which will send you an email
mail($sendTo, $subject, $message, $headers);
?>


</div>


<style type="text/css">
<!--

-->
</style>

<script>
function goHome()
{
  window.location = "index.htm";
}

function showAbout()
{
  window.location = "about.htm";
}

function showSignUp()
{
  window.location = "signup.htm";
}


</script>

</head>

<body>

<div align="center">

<table width= 800>

<tr>

<td>







<a href = "#"><h1>Pig Farm Life</h1></a><br>
<!--
<a href = "index.html"><img src = "homebutton.png"/></a>
<a href = "products.html"><img src = "productsbutton.png"/></a>

<a href = "blog.html"><img src = "blogbutton.png"/></a>

<a href = "word.html"><img src = "wordbutton.png"/></a>

<a href = "#"><img src = "contactbutton.png"/></a><br>
-->
</td>
</tr>
<tr>
<td align="center">

</td>
</tr>
<tr>
<td style="font-size: 1.8vw">

<div style="text-align:center">
<table style="width:100%;font-size:30;height:50%">
<tr>

<td width = "32%" height="100%">

<img src = "images/pigfarmlifepromo.png" width="80%" valign="top"/>
</td>
</tr>
</table>
</div>


<br><br>

We thank you for opting in on getting up to date information with regards to Pig Farm Life.  Your email will never be shared for any reason.  Opt out at any time.<br>

<hr color = blue>

</td>
</tr>


</table>

</div>

</body>
</html>

