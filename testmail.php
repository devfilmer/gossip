<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
	

</head>

<body>
	
	
	<a href="mailto:onecooldude@gmail.com?subject=Spoiled Pickle Link.&body=<html><head><title>Spoiled Pickle Article</title></head><body>You know what</body></html>">onecooldude@gmail.com</a>
</body>
	
	<script>
	var link = document.getElementById('email');

link.onclick = function() {
    var name = "you";
    var domain = "yourdomain.com";
    var linker = "mailto:" + name + '@' + domain + "?subject=Data&body=";
    linker += getBody();
    alert(linker);
    document.location(linker);
};

function getBody() {
    return 'HelloWorld';
}
	
</script>
</html>