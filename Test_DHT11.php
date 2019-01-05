<head>
	<title>Test_DHT11</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.29" />
</head>

<body>
<?php
    #exec("sudo python3 /var/www/yy.py",$DHT11);
	#echo("temperature = ".$DHT11[0] ."*C");
	exec("sudo python3 /var/www/html/DHT11.py",$DDHT11);
	echo("Temp = 28".$DDHT11[1]."*C");
	echo("<br>Humidity = 92".$DDHT11[1]."%");
?>
</body>

</html>
