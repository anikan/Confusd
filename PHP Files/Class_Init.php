<?
//This sets up the classes table, which simply stores data about how to access the classes.
$db="newdb";
$link = mysql_connect("localhost", "root", "");
if (! $link) die("Couldn't connect to MySQL");
mysql_select_db($db , $link) or die("Select DB Error: ".mysql_error());
/* create table */
mysql_query(
//A table of classes. Use this to get to the specific class.
"CREATE TABLE classes(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
className VARCHAR(30),
threshold VARCHAR(30),
keywords VARCHAR(100))") or die(mysql_error());
mysql_close($link);
?>