<?php
$mysqli=new Mysqli("localhost","root","root","test");
if($mysqli->connect_error)
{
	die( $mysqli->connect_error);
}
$sql='select *from user';
$res=$mysqli->query($sql);

if($row=$res->fetch_assoc())
{
	foreach ($row as $key => $value) {
		echo "$value";
	}
}
exit;
?>123
