<?php 
for ($i = 1; $i <= 100; $i++) {
    $result = ($i % 3 === 0 ? "foo" : "") . ($i % 5 === 0 ? "bar" : "");

    echo $result ? $result : $i;
    echo ", ";
}
?>

