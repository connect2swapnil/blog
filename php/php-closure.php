<?php
$message = 'hello';

// No "use"
$example = function () {
    var_dump($message);echo "<br/>";
};
// $example();

// Inherit $message
$example = function ($msg) use ($message) {
    echo $msg." :- ";
    var_dump($message);echo "<br/>";
};
$example("Inherit $message ");

// Inherited variable's value is from when the function
// is defined, not when called
$message = 'world';
$example("Inherited variable's value is from when the function is defined, not when called ");

// Reset message
$message = 'hello';

// Inherit by-reference
$example = function ($msg) use (&$message) {
	echo $msg." :- ";
    var_dump($message);echo "<br/>";
};
$example("Inherit by-reference");

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world';
$example("The changed value in the parent scope is reflected inside the function call");

// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
	var_dump($arg . ' ' . $message);
};
$example("hello");
?>