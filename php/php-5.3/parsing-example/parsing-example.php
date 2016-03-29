<?php

$myArray = array ("key1" => "value1", "key2" => "value2", "key3" => "value3");

echo "This works {$myArray['key1']} <br/>";

$var = '<i>test this variable</i>';

//Single quote strings will not be pasrsed.
echo '<b>Single quote strings will not be pasrsed :</b> $var<br/>';

//Double quote strings will be pasrsed.
echo "<b>Double quote strings will be pasrsed :</b> $var<br/>";



//nowdoc example.
$testVariable = <<< 'swap'
				<b>nowdoc example.</b>
				These lines are only for testing.
				$var Example of string
				spanning multiple lines
				using nowdoc syntax
swap;
echo $testVariable . "<br/>";

//heredoc example.
$testVariable = <<< "swap"
				<b>heredoc example.</b>
				These lines are only for testing.
				$var Example of string
				spanning multiple lines
				using heredoc syntax
swap;
echo $testVariable . "<br/>";

?>			