<!DOCTYPE html>
<html>
<head>
	
	<title>PNR Status</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
button{
    background-color: #CD9973;
    color: white;
    padding: 14px 25px;
    text-align: center;
    font-weight: 1000;
    text-decoration: none;
    display: inline-block;
    padding: 15px;
    margin: 20px 0px 20px 520px;
    text-shadow: 6px 6px 12px red;
}
button:hover {
    background-color: pink;
    padding: 20px;
    text-shadow: 6px 6px 12px red;
    }
p{
    font-weight: 1000;
    margin: 0px 25px 10px 450px;
}
strong
{
	margin: 10px 0px 10px 480px;
	font-size: 40px;
	color:rgb(65,7,7);
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
    <h1 id="hh2">CHECK PNR STATUS</h1>
		<form method="get" action="pstatus.php">
			<strong>Enter the PNR Number :<strong> <br>
			<input style="margin: 20px 0px 20px 100px;" type = "text" placeholder="Your PNR" name = "p_no"/><br>
			<button style="margin: 20px 0px 20px 625px;background-color: #674EDA;" type = "submit"> CHECK </button>
		</form>
</body>
</html>
