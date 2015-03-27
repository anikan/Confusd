<html>
<head>
<title><?php echo $_POST['className']; ?> </title>

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

<?php
//This file should actually handle the button push, inserting into the table and redirecting back to the Standard_Student_Class_Page


$db="newdb";
$link = mysql_connect('localhost', 'root', '');
$className = $_POST['className'];


if (! $link) die(mysql_error());
mysql_select_db($db , $link) or die("Couldn't open $db: ".mysql_error());

//Check if the user didn't already push the button.
file_put_contents ( "C:\indigoampp\apache-2.2.15\htdocs\somethingWrong", "SELECT time FROM '".$className. "'  WHERE ipAdd = '".$_SERVER['REMOTE_ADDR']. "'");
$result = mysql_query( "SELECT time FROM `".$className. "`  WHERE ipAdd = '".$_SERVER['REMOTE_ADDR']. "'")
		  or die("SELECT Error: ".mysql_error());
	
//If not empty, then post back to standard page without inserting.	
if (mysql_num_rows($result))
{
	echo ("<form method=POST action=Standard_Student_Class_Page.php id=backToPage>
	<pre>
	<input type=hidden name=submitTime value='".mysql_fetch_row($result)."'>
	<input type=hidden name=className value='".$className."'>
	<input type=hidden name=successful value=0>
	</form>");
	
	file_put_contents ( "C:\indigoampp\apache-2.2.15\htdocs\somethingWrong", "No dupes", FILE_APPEND); 
}

//If not then insert stuff and set up the form.
else
{
	//Otherwise successful.
	//Grabs the keywords string for this class.
	$result = mysql_query( "SELECT keywords FROM classes WHERE className = '".$className. "'")
			  or die("SELECT Error: ".mysql_error());
	$num_rows = mysql_num_rows($result);

	$keywords = str_replace(' ', '', mysql_fetch_row($result));

	//The string comes as an array so we first convert it to an string. So that we can split it the way we want.	
	$keywordString = implode($keywords);

	//splits the string into its components.
	$keywordArray = explode(",", $keywordString);


	//We build up the query piece by piece, because the keywords have to be handled.
	$Query = "INSERT INTO `". strtolower($className). "`(";

	$Query.= "`time`,`ipAdd`,";

	//Add all of the keywords as separate columns.
	foreach($keywordArray as $value)
	{
		$Query.="`".$value . "`,";
	}
	$Query = substr($Query, 0, -1); //Removes very last comma.

	$Query.=") VALUES ('".time()."','".$_SERVER['REMOTE_ADDR']."',";

	//Add whether 1 or 0 for checkboxes.
	foreach($keywordArray as $value)
	{
		//If on
		if ($_POST[$value] == "1")
		{
			$Query.= "1,";
		}
		
		//If off
		else
		{
			$Query.="0,";
			
		}
	}
	$Query = substr($Query, 0, -1); //Removes very last comma.
	$Query .= ")";

	file_put_contents ( "C:\indigoampp\apache-2.2.15\htdocs\somethingWrong", $Query, FILE_APPEND); 

	$result=mysql_query($Query) or die("Insert Error: ".mysql_error());
	mysql_close($link);


	echo ("<form method=POST action=Standard_Student_Class_Page.php id=backToPage>
	<pre>
	<input type=hidden name=submitTime value='".time()."'>
	<input type=hidden name=className value='".$className."'>
	<input type=hidden name=successful value=1>
	</form>");
}
?>

<script type="text/javascript">
    document.getElementById('backToPage').submit(); // SUBMIT FORM
</script>
</body>
</html>