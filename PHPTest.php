
<?php

class father {

public $height = 180;
public $wight = 20;

 function __construct($height = 180, $wight = 120){

 	$this->height = height;
 	$this->wight = wight;
 }

 public function craftsmanship(){

 	echo "拿手好菜: 山西刀削面皮";

 }

}


$func = new father();

$func -> craftsmanship();






/*
class person{	

public $age;
public $money;

}

$girl =new person;
$girl->age = 100;
$girl->money = 250;

echo"'$girl->age'<br>";

interface testInterface{
function testInterfacdFunc();	
}

interface testInterface2{
	function testInterdace2();
}


class newPerson implements testInterface, testInterface2{
	public function testInterfacdFunc(){
		echo"this test interface<br>";
	}
	
	public function testInterdace2(){
		echo"this test interface 2<br>";
	}
}

$newPerson1 = new newPerson;
$newPerson1->testInterfacdFunc();
$newPerson1->testInterdace2();


$strTxt = readfile('.\testStr.txt');

echo $strTxt.'<br/>readfile_openFalse';

var_dump($strTxt);



$str = fopen('/Applications/MAMP/htdocs/testStr.txt','r');

if($str){	
	echo'<br/>打开文件 open success';
}else{
	
	echo'<br/>fopen_file open fales';
}
*/