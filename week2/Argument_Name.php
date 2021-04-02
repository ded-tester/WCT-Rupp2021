 <!-- Name argument in php 8.0 -->
 <?php
    $num =[1,2,3,4,5,6];
    //Using name argument
    $evens = array_filter(array: $num, callback: function($n){//callback fuction
        return $n % 2 === 0;
    });
    //using name argumnet 
    $square = array_map(array: $num, callback: function($n){
        return $n * $n;
    });   
    echo'<pre>';
    var_dump ( $evens, $square);
    echo '</pre>';
?> 
