<body style="background-color: orange;">
</body>
<?php
	$t_no = $_GET['t_no'];
	$date = $_GET['date'];
	echo "Train Number : ".$t_no."<br>";
	$y = substr($date, 0,4);
	$m = substr($date, 5,2);
	$d = substr($date, 8,2);
	$nd= $d."-".$m."-".$y;
	echo "Date : ".$nd."<br>";
	$url = "https://api.railwayapi.com/v2/live/train/".$t_no."/date/".$nd."/apikey/ho4rrofgtu/";
	$data = file_get_contents($url);
	$json = json_decode($data,true);
	echo "<br> Train Name : ".$json['train']['name'];
	echo "<br> Current Position : ".$json['position'];
	echo "<br> Current Station  : ".$json['current_station']['name']; 

	$i=0;
	echo "<table border = 2>
			<tr>
				<th> S.No. </th>
				<th> Station Name </th>
				<th> Late </th>
				<th> Arrived/Not Arrived </th>
			<tr>";
	while (isset($json['route'][$i]['station']['name']))
	{
		$num = $i + 1;
		echo "<tr><td>".$num."</td>";
		echo "<td>".$json['route'][$i]['station']['name']."</td>";
		echo "<td>".$json['route'][$i]['latemin']."</td>";
			if($json['route'][$i]['has_arrived'])
				echo "<td> Arrived </td>";
			else
				echo "<td> Not Arrived </td>";

		$i++;
	}
	echo "</table>";
?>