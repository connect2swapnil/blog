<?php

class A {
	public $var = "class var";

	public function myMethod ()
	{
		 $test = function () {
				return $this->var; 
			  };
		return $test; 
	}
			
}

$obj = new A;
$c = $obj->myMethod();
var_dump($c);
 echo $c();

exit;
$val = "Swapnil";
$var = function () use ($val) {
	echo  $val;
};
$var();
exit;
 
function fruit () {
  return array('a' => 'apple', 'b' => 'banana');
}
 
echo "<pre/>";
echo "Call this function : {fruit()['a']}"; // apple
 
?>