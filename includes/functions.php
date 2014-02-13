<?php 
function aggregate($semone,$semtwo,$semthree,$semfour,$semfive,$semsix,$semseven,$semeight){

	@$array = array($semone,$semtwo,$semthree,$semfour,$semfive,$semsix,$semseven,$semeight);
	
	$count = 0;
	$totalmarks = 0;
	foreach($array as $id => $value){
	if($value != 0){
		$count++;
		$totalmarks += $value;
		}
	}
	if($count == 0 ){
		echo "Please enter valid detail \n";
		
	}else{
		return $aggregate = $totalmarks/$count;
	}
	
	
}



?>