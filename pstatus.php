<body style="background-color: orange;">
</body>
<?php
	$p_no = $_GET['p_no'];
	echo "PNR Number : ".$p_no."<br>";
	
	$url = "https://api.railwayapi.com/v2/pnr-status/pnr/".$p_no."/apikey/ho4rrofgtu/";
	$data = file_get_contents($url);
	$json = json_decode($data,true);
	echo "<br> Train Name : ".$json['train']['name'];
	echo "<br> Train Number : ".$json['train']['number'];
	echo "<br> Date Of Journey : ".$json['doj'];
	echo "<br> Total Passengers : ".$json['total_passengers'];
	echo "<br> Journey Class : ".$json['journey_class']['code'];
	echo "<br> Boarding Point: ".$json['boarding_point']['name'];
	echo "<br> Reserved Upto: ".$json['reservation_upto']['name'];

?>