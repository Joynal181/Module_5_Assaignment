<?php
function fahToCel($fahrenheit) {
    $celsius = ($fahrenheit - 32)* 5 / 9;
    return $celsius;
}
$fahrenheit = 98.6;
$celsius = fahToCel($fahrenheit);
echo "{$fahrenheit}F is {$celsius}C";