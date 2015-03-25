<html><head><title>Class Insert Record</title></head>
<body>

<?
/*
	This file is used to set up a new class.
	When a teacher creates a class, they input a name, a threshold before an alert, and certain keywords for the students.
	
	We first add the name, threshold, and keywords to an entry in the classes table.
	Then we create a new table for this class.
	
*/

$className=$_POST['className'];
$threshold=$_POST['threshold'];
$keywords=$_POST['keywords'];
$db="newdb";
$link = mysql_connect("localhost", "root", "");
if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Select Error: ".mysql_error());
$result=mysql_query(

//Add the general class info into the general table.
"INSERT INTO classes (
className,
threshold,
keywords) VALUES (
'$className',
'$threshold',
'$keywords')") or die("Insert Error: ".mysql_error());

$result=mysql_query(
//The table specific to the class.
"CREATE TABLE `" . $className . "` (
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
time INT,
ipAdd VARCHAR(30))") or die(mysql_error());

//First strip spaces in the string.
$keywords = str_replace(' ', '', $keywords);

//splits the string into its components.
$keywordArray = explode(",", $keywords);

//Add all of the keywords as separate columns.
foreach($keywordArray as $value)
{
	$result=mysql_query(
	
	"ALTER TABLE `" . $className . "` ADD `" . $value . "` BIT") or die(mysql_error());
	
}

mysql_close($link);
print "Record added\n";
?>

<form method="POST" action="New_Class_Form.php">
<input type="submit" value="Create Another Class">
</form>
<br>

<form method="POST" action="bday_dbase_interface.php">
<input type="submit" value="Dbase Interface">
</form>
</body>
</html>	