<!DOCTYPE html>
<html>
<head>

	<title>Railway Service</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">

<style>
a:link, a:visited {
    background-color: green;
    color: white;
    padding: 14px 25px;
    text-align: center;
    font-weight: 1000;
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
}
button:hover {
    background-color: violet;
    padding: 20px;
    text-shadow: 6px 6px 12px red;
}
button{
    background-color: #CD9973;
    color: white;
    padding: 14px 25px;
    text-align: center;
    font-weight: 1000;
    text-decoration: none;
    display: inline-block;
    padding: 15px;
    margin: 50px 25px 50px 520px;
    text-shadow: 6px 6px 12px red;
}
p{
    font-weight: 1000;
    margin: 0px 25px 10px 450px;
}
</style>
<script>
    function f1()
    {
        var x=document.getElementById("time").innerHTML = Date();
    }
</script>
</head>
<body>
<marquee><h1 id="hh1">WELCOME TO INDIAN RAILWAYS<h1></marquee>

<button type="button" onclick="f1()"> Click here to display Date and Time.</button>

<p id="time"></p>
	
	<h1 id="hh2">TRACK YOUR RAIL INFORMATION</h1>

	<a href="station.php" target="_blank">Search Your Train</a>
	<a href="train.php" target="_blank">Check TRAIN Status</a>
	<a href="pnr.php" target="_blank">Check PNR Status</a>

</body>
</html>
