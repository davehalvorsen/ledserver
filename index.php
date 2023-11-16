<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" />
<script src="http://code.jquery.com/jquery-latest.js"></script>
<title>Dave Rulez! </title>
</head>
	<style>
	body 
	{
		background-color: rgb(212,250,252);
		font-family: 'Arial';
		
	}
	.red {
		background-color: red;
		width: 11em; height: 2em;
		font-size: 10px;
	}
	.yellow {
		background-color: yellow;
		width: 11em; height: 2em;
		font-size: 10px;
	}
	.green { 
		background-color: green;
		width: 11em; height: 2em;
		font-size: 10px;
	}
	.blue{
		background-color: blue;
		width: 11em; height: 2em;
		font-size: 10px;
}
.rainbow {
background: linear-gradient(90deg, rgba(255,0,0,1) 0%, rgba(255,154,0,1) 10%, rgba(208,222,33,1) 20%, rgba(79,220,74,1) 30%, rgba(63,218,216,1) 40%, rgba(47,201,226,1) 50%, rgba(28,127,238,1) 60%, rgba(95,21,242,1) 70%, rgba(186,12,248,1) 80%, rgba(251,7,217,1) 90%, rgba(255,0,0,1) 100%);
    width: 11em;
    height: 2em;
font-size: 10px;
    background: linear-gradient(
        90deg,
        rgba(255, 0, 0, 1) 0%,
        rgba(255, 154, 0, 1) 10%,
        rgba(208, 222, 33, 1) 20%,
        rgba(79, 220, 74, 1) 30%,
        rgba(63, 218, 216, 1) 40%,
        rgba(47, 201, 226, 1) 50%,
        rgba(28, 127, 238, 1) 60%,
        rgba(95, 21, 242, 1) 70%,
        rgba(186, 12, 248, 1) 80%,
        rgba(251, 7, 217, 1) 90%,
        rgba(255, 0, 0, 1) 100%
    );



	</style>

       <body>
       <center><h1>Dave Rulez!</h1>
	<IMG SRC="HTTP://103.211.181.50:8081/" ALT="HTTP:/103.211.181.50:8081/" WIDTH="497" HEIGHT="373" CLASS="SHRINKTOFIT">
        <form method="get" action="index.php">
 
<input type="button" class="red" onclick="TurnRedOn();" value="Turn Red LED On" />
<input type="button" class="red" onclick="TurnRedOff();" value="Turn Red LED Off" />
<br /><br />
<input type="button" class="yellow" onclick="TurnYellowOn();" value="Turn Yellow LED On" />
<input type="button" class="yellow" onclick="TurnYellowOff();" value="Turn Yellow LED Off" />
<br /><br />
<input type="button" class="green" onclick="TurnGreenOn();" value="Turn Green LED On" />
<input type="button" class="green" onclick="TurnGreenOff();" value="Turn Green LED Off" />
<br /><br />
<input type="button" class="blue" onclick="TurnBlueOn();" value="Turn Blue LED On" />
<input type="button" class="blue" onclick="TurnBlueOff();" value="Turn Blue LED Off" />
<br /><br />
<input type="button" class="rainbow" onclick="TurnRainbowOn();" value="Turn Rainbow LED On" />
<input type="button" class="rainbow" onclick="TurnRainbowOff();" value="Turn Rainbow LED Off" />

</form>

                         </center>
<script>
function TurnRedOn() {
	$.post("TurnRedOn.php");
}
function TurnRedOff() {
	$.post("TurnRedOff.php");
}
function TurnYellowOn() {
	$.post("TurnYellowOn.php");
}
function TurnYellowOff() {
	$.post("TurnYellowOff.php");
}

function TurnGreenOn() {
	$.post("TurnGreenOn.php");
}
function TurnGreenOff() {
	$.post("TurnGreenOff.php");
}

function TurnBlueOn() {
	$.post("TurnBlueOn.php");
}
function TurnBlueOff() {
	$.post("TurnBlueOff.php");
}

function TurnRainbowOn() {
	$.post("TurnRainbowOn.php");
}
function TurnRainbowOff() {
	$.post("TurnRainbowOff.php");
}
</script>




<?php
// red LED, GPIO17, pin 11
shell_exec("gpio -g mode 17 out");
// blue LED, GPIO18, pin12
shell_exec("gpio -g mode 18 out");
// green LED GPIO22, pin 15
shell_exec("gpio -g mode 22 out");
// yellow LED, GPIO27, pin 13
shell_exec("gpio -g mode 27 out");
// rainbow LED, GPIO4, pin 7
shell_exec("gpio -g mode 4 out");

// red LED off
if(isset($_GET['roff']))
{
	shell_exec("gpio -g write 17 0");
}
// red LED on
else if(isset($_GET['ron']))
{
	shell_exec("gpio -g write 17 1");
	}
	// yellow LED on
	else if(isset($_GET['yon']))
	{
		shell_exec("gpio -g write 27 1");
	}
	// yellow LED off
	else if(isset($_GET['yoff']))
	{
		shell_exec("gpio -g write 27 0");
	}
	// green LED on
	else if(isset($_GET['gon']))
	{
		shell_exec("gpio -g write 22 1");
	}
	// green LED off
	else if(isset($_GET['goff']))
	{
		shell_exec("gpio -g write 22 0");
	}
	// blue LED on
	else if(isset($_GET['bon']))
	{
		shell_exec("gpio -g write 18 1");
	}
	// blue LED off
	else if(isset($_GET['boff']))
	{
		shell_exec("gpio -g write 18 0");
	}
	// rainbow LED on
	else if(isset($_GET['rainbowon']))
	{
		shell_exec("gpio -g write 4 1");
	}
	// rainbow LED off
	else if(isset($_GET['rainbowoff']))
	{
		shell_exec("gpio -g write 4 0");
	}
?>
   </body>
</html>
