<html>
<head><title><?php echo $_POST['className']; ?> </title>
</head>
<body>

<?php
//This file should actually handle the button push, inserting into the table.
//Currently broken.

$db="newdb";
$link = mysql_connect('localhost', 'root', '');
$className = $_POST['className'];

if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

//Grabs the keywords string for this class.
$result = mysql_query( "SELECT keywords FROM classes WHERE className = ".$className)
          or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);

//The string comes as an array so we first convert it to an string. So that we can split it the way we want.	
$keywords = str_replace(' ', '', mysql_fetch_row($result));

//splits the string into its components.
$keywordArray = explode(",", $keywords);

//We build up the query piece by piece, because the keywords have to be handled.
$Query = "INSERT INTO ". $className. "(" . $keywords;

//Add all of the keywords as separate columns.
foreach($keywordArray as $value)
{
	$Query.=$Value.",";
}
$Query = substr($Query, 0, -1); //Removes very last comma.

$Query.=" VALUES (";

//Add all of the keywords as separate columns.
foreach($keywordArray as $value)
{
	$Query.="'$value',";
}
$Query = substr($Query, 0, -1); //Removes very last comma.
$Query .= ")";

	$result=mysql_query($Query) or die("Insert Error: ".mysql_error());
}
mysql_close($link);
?>

<br>
<form method="POST" action="Button_Push.php">
<pre>
Enter Id Number to Edit: <input type="text" name="id" size="5">
<input type="submit" value="Submit"><input type="reset">
</pre>
</form>

</body>
</html>