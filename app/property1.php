<?php

// 创建一个类先
class  responde {
	
public static function getHomeData($code, $messgese='', $data = array()){

	if (is_numeric($code)){
		
		return "";
	}
	
	$result = array(
		
			'code' => $code,
			'messeges' => $messgese,
			'data' => $data
	);
		return $result; 
		exit;
}	
}

?>

