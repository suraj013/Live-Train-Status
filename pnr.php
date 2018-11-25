<!DOCTYPE html>
<html>
<head>
	
	<title>PNR Status</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">

<button type="button"
onclick="document.getElementById('time').innerHTML = Date()">
Click here to display Date and Time.</button>
<p id="time"></p>

	
</head>
<body>
	<marquee><h1 id="hh1">WELCOME TO INDIAN RAILWAYS<h1></marquee>
	<h1 id="hh2">CHECK PNR STATUS</h1>

		<form method="get" action="pstatus.php">
			<strong>Enter the PNR Number :<strong> <input type = "text" name = "p_no"/><br>
			<button type = "submit"> CHECK </button>
		</form>
</body>
</html>