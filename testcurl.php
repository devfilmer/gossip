<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>TestCurl</title>
</head>

<body>
	
	<?php
//The url you wish to send the POST request to
$url = 'http://www.spoiledpickle.com/picklesignup2a.php';

//The data you want to send via POST
$fields = array(
    'firstname'      => 'Barney',
    'lastname' => 'Rubble',
	'email' => 'barney@gmail.com',
    'submit'         => 'submit'
);
	
$postData = array(
  'firstName' => 'Lady',
  'lastName'  => 'Gaga',
  'submit'    => 'ok'
);

//url-ify the data for the POST
$fields_string = http_build_query($fields);

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
echo $result;
?>
</body>
</html>