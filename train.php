<!DOCTYPE html>
<html>
<head>
	
	<title>Rail Track</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">

<button type="button"
onclick="document.getElementById('time').innerHTML = Date()">
Click here to display Date and Time.</button>
<p id="time"></p>

	
</head>
<body>
	<marquee><h1 id="hh1">WELCOME TO INDIAN RAILWAYS<h1></marquee>
	<h1 id="hh2">TRACK YOUR TRAIN</h1>

		<form method="get" action="tstatus.php">
			<strong>Enter the TRAIN Number :<strong> <input type = "text" name = "t_no"/><br>
			Date : <input type = "date" name = "date"/>
			<button type = "submit"> Track </button>
		</form>
</body>
</html>