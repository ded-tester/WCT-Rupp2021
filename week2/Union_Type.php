<?php
// class union_type{
//     private int|float $help;
//     public function squareAndadd(float|int $hi): int|float{
//         return $hi ** 2 + $help;
//     }
     
// }
// //    echo'<pre>';
//    //  echo (squareAndadd);
// //     echo '</pre>';
//declare(strict_types=1);

function sum(int|float $a, int|float $b) {
    return $a + $b;
}

//echo'<pr>';
// var_dump(sum(1, 2));
// echo '<br>';
// var_dump(sum(1.5, 2.5));
//echo '</pre>';
echo(sum(1, 2));
echo '<br>';
echo(sum(1.5, 2.5));

?>

