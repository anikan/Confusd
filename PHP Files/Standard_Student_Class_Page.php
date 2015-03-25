<html>
<head><title>
	<?php 
	
	//This file is the standard page a student will look at, the button, and
	//keyword checkboxes.
	$className = $_POST['className'];
	echo $className; ?> 
</title>
</head>
<body>

<br>
<form method="POST" action="Button_Push.php">
<pre>
<?php

$db="newdb";
$link = mysql_connect('localhost', 'root', '');

if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

//Grabs the keywords string for this class.
$result = mysql_query( "SELECT keywords FROM classes WHERE className = '".$className. "'")
		  or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

$keywords = str_replace(' ', '', mysql_fetch_row($result));

//The string comes as an array so we first convert it to an string. So that we can split it the way we want.	
$keywordString = implode($keywords);

//splits the string into its components.
$keywordArray = explode(",", $keywordString);

//Allows the button to know which class to add this entry to.
echo '<input type="hidden" name="className" value='.$className.'>';

//Add all of the keywords as separate checkboxes.
foreach($keywordArray as $value)
{
	echo '<input type="checkbox" name='.$value. 'value="1">'.$value;
}

mysql_close($link);
?>

<input type="submit" value="I'm Confused."><input type="reset">
</pre>
</form>

</body>
</html>