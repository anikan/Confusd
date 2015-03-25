<html>
<head><title>Confusd</title>
</head>
<body>

<br>

<form method="POST" action="Standard_Student_Class_Page.php">
<?
//This is the home page, the user can directly type the name of a class
//or click a button to go to it.

//Direct name input.
print "Enter Classname: <input type=text name=className size=30><br>\n";
print "<br>\n";
print "<input type=submit value=Submit><input type=reset>\n";
?>
</form>


<?php
/* Two main options for input, directly inputting the name, or clicking the appropriate row in the table.*/
$db="newdb";
$link = mysql_connect('localhost', 'root', '');

if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

$result = mysql_query( "SELECT className FROM classes" )
          or die("SELECT Error: ".mysql_error());
		  
$num_rows = mysql_num_rows($result);

print "Or select an active class. <br> <br>";
print "There are $num_rows active classes.<br>";

print "<table width=600 border=1>\n";
while ($get_info = mysql_fetch_row($result)){
	print "<tr>\n";
	
	//Somewhat ugly, buttons in a table, try to expand the button to fit the table.
	foreach ($get_info as $field)	
	
		echo "<td><form method='POST' action='Standard_Student_Class_Page.php'>
		<input type='hidden' name='className' value= '" . $field . "'>
		<input type='submit' value='". $field . "'>
		</form></td>";
		
	print "</tr>\n";
}
print "</table>\n";
mysql_close($link);
?>

<br>

<form method="POST" action="bday_dbase_interface.php">
<input type="submit" value="Dbase Interface">
</form>

</body>
</html>