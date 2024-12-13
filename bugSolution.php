```php
<?php
function doubleIt(int $num): int {
  $num *= 2;
  return $num; //Return the new doubled value without altering the original
}

$number = 10;
$result = doubleIt($number);
echo $number; // Output: 10
echo " ";
echo $result; // Output: 20
?>
```