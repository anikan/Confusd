
<html><head><title>New Class Form</title>
<style type="text/css">
td {font-family: tahoma, arial, verdana; font-size: .875em }
</style>
</head>
<body>
<table width="300" cellpadding="5" cellspacing="0" border="2">
<tr align="center" valign="top">
<td align="left" colspan="1" rowspan="1" bgcolor="64b1ff">
<h3>Insert Record</h3>
<form method="POST" action="class_insert_record.php">
<?

//This is the form that the teacher will use to create a new class. 
//Work delegated to class_insert_record
print "Class Name: <input type=text name=className size=30><br>\n";
print "Alert Threshold: <input type=text name=threshold size=30><br>\n";
print "Keywords  : <input type=text name=keywords size=100><br>\n";
print "<br>\n";
print "<input type=submit value=Submit><input type=reset>\n";
?>
</form>
</td></tr></table>
</body>
</html>