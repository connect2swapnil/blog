<?php

require_once 'exceptionClass.php';

$email = "swapnil.chaudhari@sts..in";

try {
	if (! filter_var($email, FILTER_VALIDATE_EMAIL))
		throw new CustomException($email);
} catch (CustomException $ex) {
	echo $ex->errorMessage();
}

