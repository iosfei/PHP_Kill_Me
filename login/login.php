
<?php


$connect = mysql_connect('localhost','root','abc654321');



if($connect){
	echo '数据库链接connect success';
}else{
	die('Could not connect: ' . mysql_error());
}


/*
$sql="select name,brief from oileafly_tables";
$result=mysql_query($sql)
while( $row = $result -> odbc_fetch_object() )
{
echo $row->name;
echo $row->brief;
}
*/


?>

