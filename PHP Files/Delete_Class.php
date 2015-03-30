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

Thank you for using Confusd.
<pre>
<?php

$db="newdb";
$link = mysql_connect('localhost', 'root', '');

if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

//Delete old entries.
$result = mysql_query("DELETE FROM `classes` WHERE className = '".$className."'");

//Drop the old class table.
$result = mysql_query("DROP TABLE `". $className. "`");

?>

</div>

<!--If closing tab, this works.-->
<script type="text/javascript">
	setTimeout("window.close()", 100);
</script>


</body>
</html>