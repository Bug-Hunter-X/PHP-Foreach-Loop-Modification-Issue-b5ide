function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'bar';
  });
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This uses array_filter to create a new array containing only the elements that satisfy the condition
//This avoids the issue of modifying the array during iteration.
