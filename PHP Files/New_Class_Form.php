
<html><head><title>New Class Form</title>
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

<div style="text-align:center">

<table width="300" cellpadding="5" cellspacing="0" border="2">
<tr align="center" valign="top">
<td align="center" colspan="1" rowspan="1" bgcolor="64b1ff">
<h3>Create a New Class</h3>

<div style="text-align:center">

<form method="POST" action="class_insert_record.php">

<?

//This is the form that the teacher will use to create a new class. 
//Work delegated to class_insert_record
print "Class Name: <input type=text name=className size=30><br>\n";
print "Alert Threshold: <input type=text value=10 name=threshold size=30><br>\n";
print "Keywords: <input type=text name=keywords size=100><br>\n";
print "<br>\n";
print "<input type=submit name=submit value=Submit id=submit>\n";
?>

</form>
</td></tr></table>

</div>

</body>
</html>