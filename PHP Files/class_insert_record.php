<html><head><title>Class Insert Record</title>

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
</style>

</head>
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
//print "Record added\n";


echo ('<form method="POST" action="Standard_Teacher_Class_Page.php" id="nextPage">
	<input type="hidden" name="className" value="'.$className.'">
	echo </form>');

?>

<script type="text/javascript">
    document.getElementById('nextPage').submit(); // SUBMIT FORM
</script>

</body>
</html>	