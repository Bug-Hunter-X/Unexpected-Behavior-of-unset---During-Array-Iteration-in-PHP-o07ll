```php
function processDataSafe(array $data): array {
  // Filter out null values using array_filter
  return array_filter($data, fn($value) => $value !== null);
}

$data = ['a' => 1, 'b' => null, 'c' => 3];
$processedData = processDataSafe($data);
print_r($processedData); // Output: Array ( [a] => 1 [c] => 3 )

$data2 = ['a' => 1, 'b' => 0, 'c' => 3];
$processedData2 = processDataSafe($data2); 
print_r($processedData2); // Output: Array ( [a] => 1 [b] => 0 [c] => 3 )
```