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
		}
	}
	http.open( "POST", "post-reply.php", true );
	http.setRequestHeader( "Content-Type", "application/x-www-form-urlencoded" );
	http.send( "data1=Lorem Ipsum");
	// Sending more than one data is not working
	// http.send( "data1=Lorem Ipsum;data2=Dolores");
</script>
</body>
</html>