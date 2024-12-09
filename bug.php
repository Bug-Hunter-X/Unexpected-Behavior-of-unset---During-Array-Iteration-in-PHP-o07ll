```php
function processData(array $data): array {
  // ... some code to process the data ...
  foreach ($data as $key => $value) {
    if ($value === null) {
      unset($data[$key]); // Removing null values
    }
  }
  return $data;
}

$data = ['a' => 1, 'b' => null, 'c' => 3];
$processedData = processData($data);
print_r($processedData); // Output: Array ( [a] => 1 [c] => 3 )

$data2 = ['a' => 1, 'b' => 0, 'c' => 3];
$processedData2 = processData($data2); 
print_r($processedData2); // Output: Array ( [a] => 1 [b] => 0 [c] => 3 )
```