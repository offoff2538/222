<?php
	if ((isset($_POST['textbox']))&($_POST['textbox']!=""))
	{
		$fp = fopen('set.txt','w');
		fwrite ($fp,$_POST['textbox']);
		fclose($fp);
	}
	$frp = fopen('set.txt','r');
	$rdata = fgets($frp);
	fclose($frp);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtm  l1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>MonitorSET</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.24.1" />
	<script language="JavaScript" type="text/javascript">
	var rFile;
	function Call()
	{
		if (rFile.readyState == 4)
		{
			if (rFile.status == 200)
			{
				var allText = rFile.responseText;
				if (allText !="")
				{
					document.getElementById("myDiv").innerHTML = allText;
				}
				setTimeout("readTextFile()",1000);
			}
		}
	}
	function readTextFile()
	{
		rFile = new XMLHttpRequest();
		rFile.open("GET","BH17500.txt",true);
		rFile.onreadystatechange = Call;
		rFile.send(null);
	};	
	</script>
</head>

<body onload = "readTextFile()">
	<form method="post">
		<div id = "myDiv"></div>
		<?php echo "Set ALarm = ".$rdata."  lx  <br> " ?>
		<tr>
			Set Alarm:
			<td><input type = "text" name = "textbox" ></td>
			<td><button name = "OK">OK</button> </td>
		</tr>
	</form>
</body>
</html>
