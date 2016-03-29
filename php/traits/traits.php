<?php

trait myTrait {
	public static $foo = "FOO";
	public function myMethod() 
	{
		echo self::$foo;	
	}
}

class myClass
{
	use myTrait;	
}

$obj = new myClass();
$obj->myMethod();

?>