<!DOCTYPE html>
<head><title>Gavin_Farina_Project5</title></head>
<body>
<?php
    $count = 20;
    $num1 = 1;
    $num2 = 1;
    if ($num1 = 0)
        $num = 1;
    for ($i = 1; $i <= $count; ++$i){
        
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
?>
    <p>The Fibonacci Number at position <?= $i ?> is <?= $num1 ?></p>



<?php
}
?>       
</body>
</html>