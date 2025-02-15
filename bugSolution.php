```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_numeric($value)) {
      $data[$key] = $value * 2; // Example operation, only for numeric values
    } else {
      // Handle non-numeric values appropriately
      // For instance, you could skip non-numeric values or throw an exception
      // $data[$key] = $value; // Keep non-numeric values as they are
    }
  }
  return $data;
}

$data = [1, 2, [3, 4, [5, 6, 'a']]];
$result = processData($data);
print_r($result);
```