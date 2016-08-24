<?php
function fibonacci($number){	
	if($number === 0) return 0;
	if($number === 1) return 1;
	
	$result = fibonacci($number - 1) + fibonacci($number - 2);
	return $result;
}

function isPrime($n){  
	for($x=2; $x<$n; $x++){  
		if($n % $x == 0 ){  
			return 0;  
		}  
	}  
	return 1;  
}  

for($i = 0; $i <= $_POST['numbers']; $i++){
	$result = fibonacci($i);
	if($result === 0){
		echo "f(".$i.") = 0"."<br>";
	}else if($result % 15 === 0){
		echo "f(".$i.") = FizzBuzz"."<br>";
	}else if($result % 3 === 0){
		echo "f(".$i.") = Buzz"."<br>";
	}else if($result % 5 === 0){
		echo "f(".$i.") = Fizz"."<br>";
	}else if(isPrime($result)){
		echo "f(".$i.") = BuzzFizz"."<br>";
	}else{
		echo "f(".$i.") = ".$result."<br>";	
	}	
}


?>