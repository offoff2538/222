<?php
/*
 * Control_LED.php
 * 
 * Copyright 2018  <pi@raspberrypi>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Control_LED</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.29" />
</head>

<body>
	<?php
	if(isset($_GET["st_GPIO16"]))
	{	
		system("gpio -g mode 16 out");
		system("gpio -g write 16 ".$_GET["st_GPIO16"]);
		exec("gpio -g read 16",$st_LED1);
		echo ("LED1=".$st_LED1[0]."<br>");
	}
	if(isset($_GET["st_GPIO26"]))
	{	
		system("gpio -g mode 26 out");
		system("gpio -g write 26 ".$_GET["st_GPIO26"]);
		exec("gpio -g read 26",$st_LED2);
		echo ("LED2=".$st_LED2[0]."<br>");
	}
  ?>
</body>

</html>
