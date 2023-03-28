<?php
$num = 5; 

echo "<h2>Multiplication Table for $num</h2>";

for ($i = 1; $i <= 10; $i++) {
    $result = $num * $i;
    echo "$num x $i = $result <br><br>";
}

?>
