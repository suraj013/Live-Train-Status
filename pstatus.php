<body style="background-color: orange;">
</body>
<?php
	$p_no = $_GET['p_no'];
	echo "PNR Number : ".$p_no."<br>";
	
	$url = "https://api.railwayapi.com/v2/pnr-status/pnr/".$p_no."/apikey/9goopts6gm/";
	$data = file_get_contents($url);
	$json = json_decode($data,true);
	$tna = "<br> Train Name : ".$json['train']['name'];
	echo $tna;
	$tnu = "<br> Train Number : ".$json['train']['number'];
	echo $tnu;
	$doj = "<br> Date Of Journey : ".$json['doj'];
	echo $doj;
	$tp = "<br> Total Passengers : ".$json['total_passengers'];
	echo $tp;
	$jc = "<br> Journey Class : ".$json['journey_class']['code'];
	echo $jc;
	$bp = "<br> Boarding Point: ".$json['boarding_point']['name'];
	echo $bp;
	$ru = "<br> Reserved Upto: ".$json['reservation_upto']['name'];
	echo $ru;

	$con = mysqli_connect('localhost','root');
	if(!$con)
		echo "Connection Failed";
	else
		echo "Connection Done";
	mysqli_select_db($con,'db2');
	$q="insert into pnr (pid,pnr,tname,tno,doj,tp,jc,bp,ru) values($pid, $p_no, '$tname', '$tno', '$doj' '$tp' '$jc' '$bp' '$ru')";
	mysqli_query($con,$q);

	mysqli_close($con);
?>
