<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$emailHeader = "From:".$name."<".$email.">/r/n";

$recipient = "cctinlone@gmail.com";

mail($recipient, "",$message,$emailHeader)
or die("There's an error...");

echo'
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Message Submission Page</title>
</head>
<body>

<h2> Thanks for messaging me, will get back to you as soon as I can</h2>
</body>
</html>

'


?>