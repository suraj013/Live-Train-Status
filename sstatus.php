<body style="background-color: orange;">
</body>
<?php
	$ss = $_GET['ss'];
	$ds = $_GET['ds'];
	$date = $_GET['date'];
	
	//MySql ss Connection
	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'rail');
	$u="Select CODE from stations where name like '".$ss."%'";
	$res=mysqli_query($con,$u);
	$num=mysqli_num_rows($res);
	for($i=1;$i<=$num;$i++)
	{
		$w=mysqli_fetch_array($res);
		$v= $w['CODE'];
		echo "Source Station Code :".$v."<br>";
	}
	mysqli_close($con);
	//MySql ss Connection Ends

	//MySql ds Connection
	$con2 = mysqli_connect('localhost','root');
	mysqli_select_db($con2,'rail');
	$u2="Select CODE from stations where name like '".$ds."%'";
	$res2=mysqli_query($con2,$u2);
	$num2=mysqli_num_rows($res2);
	for($j=1;$j<=$num2;$j++)
	{
		$w2=mysqli_fetch_array($res2);
		$v2= $w2['CODE'];
		echo "Destination Station Code :".$v2."<br>";
	}
	mysqli_close($con2);
	//MySql ds Connection Ends

	echo "Source Station : ".$ss."<br>";
	echo "Destination Station : ".$ds."<br>";
	$y = substr($date, 0,4);
	$m = substr($date, 5,2);
	$d = substr($date, 8,2);
	$nd= $d."-".$m."-".$y;
	echo "Date : ".$nd."<br>";
	$url = "https://api.railwayapi.com/v2/between/source/".$v."/dest/".$v2."/date/".$nd."/apikey/9goopts6gm/";
	$data = file_get_contents($url);
	$json = json_decode($data,true);

	/*
	echo "<br> Train Name : ".$json['train']['name'];
	echo "<br> Current Position : ".$json['position'];
	echo "<br> Current Station  : ".$json['current_station']['name']; 
	*/
?>