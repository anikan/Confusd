<html>
<head><title>
	<?php 
	//Handle refreshing, deleting old elements, graphs. deleting class.
	
	//This file is the standard page a teacher will look at.
	$className = $_POST['className'];
	echo $className; ?> 
</title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <style>
      body {
        font-family: 'Roboto', serif;
        font-size: 48px;
	  }
</style>


<style type ="text/css">
input[type="submit"] {
	-moz-box-shadow:inset 0px -3px 7px 0px #29bbff;
	-webkit-box-shadow:inset 0px -3px 7px 0px #29bbff;
	box-shadow:inset 0px -3px 7px 0px #29bbff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #2dabf9), color-stop(1, #0688fa));
	background:-moz-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-webkit-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-o-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:-ms-linear-gradient(top, #2dabf9 5%, #0688fa 100%);
	background:linear-gradient(to bottom, #2dabf9 5%, #0688fa 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#2dabf9', endColorstr='#0688fa',GradientType=0);
	background-color:#2dabf9;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #0b0e07;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	padding:9px 23px;
	text-decoration:none;
	text-shadow:0px 1px 0px #263666;
}
#submit:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0688fa), color-stop(1, #2dabf9));
	background:-moz-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:-webkit-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:-o-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:-ms-linear-gradient(top, #0688fa 5%, #2dabf9 100%);
	background:linear-gradient(to bottom, #0688fa 5%, #2dabf9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0688fa', endColorstr='#2dabf9',GradientType=0);
	background-color:#0688fa;
}
#submit:active {
	position:relative;
	top:1px;
}

/* Checkbox */
.box {
	width: 28px;
	height: 28px;
	background: #fcfff4;

	background: -webkit-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -moz-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -o-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: -ms-linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcfff4', endColorstr='#b3bead',GradientType=0 );
	margin: 20px auto;
	-webkit-box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
	box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
	position: relative;
}

.box label {
	cursor: pointer;
	position: absolute;
	width: 20px;
	height: 20px;
	left: 4px;
	top: 4px;

	-webkit-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
	-moz-box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
	box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);

	background: -webkit-linear-gradient(top, #222 0%, #45484d 100%);
	background: -moz-linear-gradient(top, #222 0%, #45484d 100%);
	background: -o-linear-gradient(top, #222 0%, #45484d 100%);
	background: -ms-linear-gradient(top, #222 0%, #45484d 100%);
	background: linear-gradient(top, #222 0%, #45484d 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#222', endColorstr='#45484d',GradientType=0 );
}

.box label:after {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	opacity: 0;
	content: '';
	position: absolute;
	width: 16px;
	height: 16px;
	background: #00bf00;

	background: -webkit-linear-gradient(top, #00bf00 0%, #009400 100%);
	background: -moz-linear-gradient(top, #00bf00 0%, #009400 100%);
	background: -o-linear-gradient(top, #00bf00 0%, #009400 100%);
	background: -ms-linear-gradient(top, #00bf00 0%, #009400 100%);
	background: linear-gradient(top, #00bf00 0%, #009400 100%);

	top: 2px;
	left: 2px;

	-webkit-box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
	box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
}

.box label:hover::after {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=30)";
	filter: alpha(opacity=30);
	opacity: 0.3;
}

.box input[type=checkbox]:checked + label:after {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	opacity: 1;
}
</style>

</head>
<body>

<!--
<button id="homeButton" class="float-right submit-button" ><img src="back.png"></button>
<script type="text/javascript">
    document.getElementById("homeButton").onclick = function () {
        location.href = "Main_Page.php";
    };
</script>
-->

<div style="text-align:center">

<?php echo $className ?>

<form method="POST" action="Standard_Teacher_Class.php">
<pre>
<?php

$buttonDelayMins = 5;
$db="newdb";
$link = mysql_connect('localhost', 'root', '');

if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

//Delete old entries.
$result = mysql_query("DELETE FROM'". $className ."'  WHERE `time` < (NOW() - INTERVAL '".$buttonDelayMins."' MINUTE");

//Grabs the threshold for this class.
$result = mysql_query( "SELECT keywords FROM classes WHERE className = '".$className. "'")
		  or die("SELECT Error: ".mysql_error());

$threshold= mysql_fetch_row($result);

//Grabs the confused students data for this class.
$result = mysql_query( "SELECT * FROM'".$className"'")
		  or die("SELECT Error: ".mysql_error());
		  
$num_rows = mysql_num_rows($result);

echo "'".$num_rows."' students confused."
echo "'".$threshold ."' is threshold."

/*
//Grabs the keywords string for this class.
$resultKeywords = mysql_query( "SELECT keywords FROM classes WHERE className = '".$className. "'")
		  or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$keywords = str_replace(' ', '', mysql_fetch_row($result));

//The string comes as an array so we first convert it to an string. So that we can split it the way we want.	
$keywordString = implode($keywords);

//splits the string into its components.
$keywordArray = explode(",", $keywordString);

//Allows the button to know which class to add this entry to.
echo '<input type="hidden" name="className" value="'.$className.'">';

//Add all of the keywords as separate checkboxes.
foreach($keywordArray as $value)
{

	/*echo '<div class="box">';
		echo '<input type="checkbox" value="1" id="box" name="' .$value. '"/>';
		echo '<label for="box"></label>'.$value;
	echo '</div>';
	*/
	
	/*echo '<input type="checkbox" name='.$value. ' value="1">'.$value;
	
	echo '<br>';
}

mysql_close($link);

if ($_POST["successful"] == "1")
{
	echo 'Submitted, please wait '. $buttonDelayMins . ' minutes before submitting again.';
}

//Already submitted, failed.
else if($_POST["successful"] == "0")
{
	$timeRemaining = ($buttonDelayMins - ((time() - $_POST["time"]) / 60))	;
	//$timeRemaining = (5 - ((time() - 5) / 60))	;
	echo 'Please wait ' . $timeRemaining . ' minutes'; 
}

//If it is empty, then this is the first visit.
mysql_query("DELETE FROM'". $Class. "'WHERE time < (NOW() - INTERVAL 10 MINUTE))";
*/

?>

<input type="submit" name="submit" value="I'm Confused." id="submit">
</pre>
</form>
</div>

</body>
</html>
