<html>
<head><title>Confusd</title>

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto">
    <style>
      body {
        font-family: 'Open Sans', serif;
        font-size: 24px;
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
	font-family:'Roboto';
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

<br>

<div style="text-align:center">

<img src="ConfusdLogo.png">

<button id="newClassButton" class="float-right submit-button" >Creating a Class?</button>
<script type="text/javascript">
    document.getElementById("newClassButton").onclick = function () {
        location.href = "New_Class_Form.php";
    };
	
</script>

<form method="POST" action="Standard_Student_Class_Page.php">
<?
//This is the home page, the user can directly type the name of a class
//or click a button to go to it.

//Direct name input.
print "Enter Classname: <input type=text name=className size=30><br>\n";
print "<br>\n";
print "<input type=submit name = submit value=Submit id='submit'>\n";
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

print "Or select one of $num_rows active classes. <br> <br>";

while ($get_info = mysql_fetch_row($result)){
	
	//Somewhat ugly, buttons in a table, try to expand the button to fit the table.
	foreach ($get_info as $field)	

	
	echo "<form method='POST' action='Standard_Student_Class_Page.php'>
		<input type='hidden' name='className' value= '" . $field . "'>
		<input type='submit' value='". $field . "'>
		</form>";
	
}
mysql_close($link);
?>

<br>

</div>


</body>
</html>