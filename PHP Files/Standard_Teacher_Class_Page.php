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

<script type="text/javascript" src='chart.min.js'></script>

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

<?php 
echo $className . "<br>";

$buttonDelayMins = 5;
$refreshDelay = 30000; //30 seconds

$db="newdb";
$link = mysql_connect('localhost', 'root', '');

if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

//Delete old entries.
$result = mysql_query("DELETE FROM `". $className ."` WHERE `time` < (".(time() - $buttonDelayMins * 60). ")");

//Grabs the threshold for this class.
$result = mysql_query( "SELECT threshold FROM `classes` WHERE className = '".$className. "'")
		  or die("SELECT Error: ".mysql_error());

$threshold= mysql_fetch_row($result);

//Grabs the keywords for this class.
$result = mysql_query( "SELECT * FROM `".$className ."`")
		  or die("SELECT Error: ".mysql_error()); 
		 
$num_rows = mysql_num_rows($result);

$confusedRatio = (intval($num_rows)/intval($threshold[0]));

if ($confusedRatio >= 1)
{
	$refreshDelay = 180000;
	
	?>
	<audio id="audiotag1" src="confused.wav" preload="auto"></audio>
	<script type="text/javascript">
		document.getElementById('audiotag1').play();
</script>

	
<?php

	//For the colors, setting it to 1.
	$confusedRatio = 1;
}

	/*
	$Green = 0x288028;
	$Red = 0xA03333;
	
	$redA = $Green & 0xFF0000;
	$greenA = $Green & 0x00FF00;
	$blueA = $Green & 0x0000FF;
	$redB = $Red & 0xFF0000;
	$greenB = $Red & 0x00FF00;
	$blueB = $Red & 0x0000FF;

	$redC = $redA + (($redB - $redA) * $confusedRatio) & 0xFF0000;
	$greenC = $greenA + (($greenB - $greenA) * $confusedRatio) & 0x00FF00;
	$blueC = $blueA + (($blueB - $blueA) * $confusedRatio) & 0x0000FF;
	
	$color = $redC | $greenC | $blueC;
*/
?>

<style>
	background-color: #<?php echo $color?>
</style>


<?php
//Grabs the keywords for this class.
$result = mysql_query( "SELECT keywords FROM `classes` WHERE className = '".$className. "'")
		  or die("SELECT Error: ".mysql_error()); 

echo $num_rows." students confused. <br>";
echo $threshold[0] ." is threshold. <br>";

$keywords = mysql_fetch_row($result);

if (!($keywords[0] == ''))
{
	$keywordsString = str_replace(' ', '', $keywords);

	//The string comes as an array so we first convert it to an string. So that we can split it the way we want.	
	$keywordString = implode($keywordsString);

	//splits the string into its components.
	$keywordArray = explode(",", $keywordString);
	
	$keywordString = ("'" . $keywordString);

	$keywordString = str_replace(",", "', '", $keywordString);

	$keywordString .= "'";

	//If there are keywords, then draw a bar graph..
	//$result = mysql_query( "SELECT * FROM`".$className."`")
	//	  or die("SELECT Error: ".mysql_error());
	?>
	
	<canvas id="myChart" width="400" height="400"></canvas>

	<script type="text/javascript">
	// Get the context of the canvas element we want to select
	var ctx = document.getElementById("myChart").getContext("2d");

	var data = {
		labels: [<?php echo $keywordString?>],
		datasets: 
		[
			{
				label: "Student data",
				fillColor: "rgba(151,187,205,0.5)",
				strokeColor: "rgba(151,187,205,0.8)",
				highlightFill: "rgba(151,187,205,0.75)",
				highlightStroke: "rgba(151,187,205,1)",
				data: [<?php
				$dataQuery='';
				
				foreach($keywordArray as $value)
				{
					//Grabs the confused students data for this class.
					$result = mysql_query( "SELECT id FROM`".$className."` WHERE " .$value ." = 1")
					or die("SELECT Error: ".mysql_error());
			  
					$num_rows = mysql_num_rows($result);
					$dataQuery .= $num_rows. ", ";
				}
				
					$dataQuery = substr($dataQuery, 0, -2); //Removes very last comma.
					echo $dataQuery;
				
				?>]
			},
		]
	};

	var myBarChart = new Chart(ctx).Bar(data);
	
	</script>
	<?php
}

echo ("<form method=POST action=Standard_Teacher_Class_Page.php id=backToPage>
<input type=hidden name=className value='". $className."'> </form>");

?>

<!--Blank target opens new tab for deleting. For closing tab.-->
<form method=POST action=Delete_Class.php id=deleteClassTab target="_blank">
<input type=hidden name=className value="<?php echo $className?>">
</form>

<!--Changes to delete page, showing thanks for using Confusd. -->
<form method=POST action=Delete_Class.php id=deleteClassButton>
<input type=hidden name=className value="<?php echo $className?>">
<input type=submit name=submit value="End Class." id=submit>
</form>

<script type="text/javascript">
	var needToDelete = true;
	setTimeout(function(){
		needToUnload = false;
        document.getElementById('backToPage').submit(); // SUBMIT FORM
      
	  }, <?php echo $refreshDelay?>);

  /*timeoutID = window.setTimeout(refresh, <?php echo $refreshDelay?>);
  
  function refresh()
	      document.getElementById('samePage').submit(); // SUBMIT FORM
  }*/
  
	window.onbeforeunload=function(e){
		
		if (needToDelete)
		{
			document.getElementById('deleteClassTab').submit(); // SUBMIT FORM
		}		
	}; // no return string --> user will leave as normal but data is send to server
</script>

</div>

</body>
</html>