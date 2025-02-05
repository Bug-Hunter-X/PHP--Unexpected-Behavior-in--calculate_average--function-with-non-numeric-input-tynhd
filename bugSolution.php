```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }

  // Validate input: check if all elements are numeric
  if (!allNumeric($numbers)) {
    return 'Error: Array contains non-numeric values.';
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count; 
}

function allNumeric($arr) {
  foreach ($arr as $value) {
    if (!is_numeric($value)) {
      return false;
    }
  }
  return true;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Average: 15

$numbers = [10, 20, 30, 0, 'a']; //Introducing a non-numeric value
$average = calculate_average($numbers);
echo "Average: " . $average; //Output: Error: Array contains non-numeric values.
```