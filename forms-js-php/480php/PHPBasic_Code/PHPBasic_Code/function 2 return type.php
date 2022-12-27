<?php
function square($num)     // return value
{
    return $num * $num;
}
echo square(4);   // outputs '16'.
?>

<br><br><br><br><br><br>

<?php
function small_numbers()     // Returning an array to get multiple values
{
    return array (0, 1, 2);
}
list ($zero, $one, $two) = small_numbers();

echo $zero . " " . $one . " " .  $two;

?>

<br><br><br><br><br><br>


<?php
function sum($a, $b): float {     // Basic return type declaration
    return $a + $b;
}

// Note that a float will be returned.
var_dump(sum(1, 2));
?>