<!DOCTYPE html>
<html>
<head>
	
	<title>Rail Track</title>
	<link rel="stylesheet" type="text/css" href="mystyle.css">

<style>
button:hover {
    background-color: pink;
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
    margin: 20px 0px 20px 500px;
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
	<h1 id="hh2">SEARCH THE TRAINS</h1>

		<form method="get" action="sstatus.php">
			<strong style="margin: 20px 0px 20px 328px;font-size: 40px;color:rgb(65,7,7);" >Source Station  :<strong>

			<input style="margin: 20px 0px 20px 100px;" type = "text" placeholder="Source Station" name = "ss"/><br>
			
			<strong style="margin: 20px 0px 20px 251px;font-size: 40px;" >Destination Station  :<strong>
			
			<input style="margin: 20px 0px 20px 100px;" type = "text" placeholder="Destination Station" name = "ds"/><br>
			
			<strong style="margin: 20px 0px 20px 500px;font-size: 40px;" >Date :</strong> 
			
			<input style="margin: 20px 0px 20px 100px;" type = "date" name = "date"/><br>
			<button style="margin: 20px 0px 20px 625px;background-color: #674EDA;" type = "submit"> SEARCH </button>
		</form>
</body>
</html>