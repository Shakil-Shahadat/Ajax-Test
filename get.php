<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ajax Test</title>
</head>
<body>
<script>
	var http = new XMLHttpRequest();
	http.onreadystatechange = function()
	{
		if ( http.readyState == 4 && http.status == 200 )
		{
			console.log( http.responseText );
			var parsedJSON = JSON.parse( http.responseText );
			console.log( parsedJSON );
		}
	}
	http.open( "GET", "get-reply.php", true );
	http.send();
</script>
</body>
</html>