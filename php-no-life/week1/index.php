
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method ="GET">
        <input type="text" name = "person">
        <button>Submit</button>
    </form> -->
<?php
//Variable
//variable are containers for storing information
//create variable start with $ sign
//use . to combine string with php code
    //$name = $_GET['person'];
    //echo $name." is a lovely guys";

    //*There are three variable scope:local, globle, static
    //variable with globle scope
   
//      $x = 5; // global scope

//     function myTest() {
//   // using x inside this function will generate an error
//       echo "<p>Variable x inside function is: $x</p>";
//     }
//        myTest();
//       echo "<p>Variable x outside function is: $x</p>";

//*Variable with local

function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
?>  

</body>
</html>