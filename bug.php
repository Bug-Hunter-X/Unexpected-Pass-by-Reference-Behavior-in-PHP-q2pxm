```php
<?php
function doubleIt(int &$num): int {
  $num *= 2;
  return $num;
}

$number = 10;
doubleIt($number);
echo $number; // Output: 20

$number = 10;
$result = doubleIt($number);
echo "\n";
echo $number; // Output: 20
echo " ";
echo $result; //Output: 20
?>
```