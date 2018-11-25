<!DOCTYPE html>
<html>
<head>

	<title>Railway Service</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
a:link, a:visited {
    background-color: green;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    padding: 20px;
    margin: 50px 50px 50px 175px;
    text-shadow: 6px 6px 12px red;
}


a:hover, a:active {
    background-color: violet;
    padding: 20px;
    margin: 50px 50px 50px 175px;
    text-shadow: 6px 6px 12px red;

</style>

<button type="button"
onclick="document.getElementById('time').innerHTML = Date()">
Click here to display Date and Time.</button>
<p id="time"></p>

</head>
<body>
	<marquee><h1 id="hh1">WELCOME TO INDIAN RAILWAYS<h1></marquee>
	<h1 id="hh2">TRACK YOUR RAIL</h1>

	<a href="https://indiarailinfo.com/" target="_blank">Search Your Train</a>
		<a href="train.php" target="_blank">Check TRAIN Status</a>
				<a href="pnr.php" target="_blank">Check PNR Status</a>



	
</body>
</html>