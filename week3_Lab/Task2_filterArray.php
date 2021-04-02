<?php
    $arr = [2, 3, 4, 6, 7, 9, 11, 20];
    /* use callback fucntiion*/
    // $even = array_filter(array:$arr , callback: function($n){ 
    //     return $n % 2 ===0;
    // });
    // echo'<pre>';
    // var_dump ( $even);
    // echo '</pre>'

    /*arrow fucntion */
    $evenNum = array_filter($arr, fn($num) => $num %2 ===0); 
      echo'<pre>';
         var_dump ( $evenNum);
      echo '</pre>'
?>