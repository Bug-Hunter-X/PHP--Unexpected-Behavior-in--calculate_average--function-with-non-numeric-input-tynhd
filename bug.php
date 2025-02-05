```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count; 
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 15

$numbers = [10, 20, 30, 0, 'a']; //Introducing a non-numeric value
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Warning: Division by zero
```