<html>
<head>
<meta charset="UTF-8">
<title>connectTitle</title>
</head>

<body>

<?php



$connect = mysqli_connect($host = 'localhost',$user = 'admin', $password = '');

if($connect){
	echo 'connect success-----<br>';
	
}else{
	echo 'connect____faile+++++<br>';
}

$connect -> close();



define('constVar', 'this is const Value<br>');

echo constVar;

$sName = "localhost";
$uName = "Any";
$psw = "";
$dbName = "myfirst";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$dbName", $uName, $psw);	

	$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$sql = "CREATE DATABASE $dbName";
	
	$conn -> exec($sql);

} catch (Exception $e) {
	echo $sql . "<br>" . $e -> getMessage();

}

// creat table

$sql = "CREATE TABLE mytable(
	id INT(6) AUTO_INCREMENT PRIMARY KEY,
	firtName VARCHAR(30) NOT NULL,
	lastName VARCHAR(30) NOT NULL,
	email VARCHAT(50),
	reg_date TIMESTAMP
)";

if ($conn -> query($sql) === TURE) {
	
 	echo "TABLE mytable created successfully";	

}else{
	
	echo "Error creating table: " . $conn -> error;
}

$conn -> close();











?>

</body>
</html>
