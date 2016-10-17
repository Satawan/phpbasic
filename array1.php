<?php

//$car=array("toyota","honda","isuzu");
//5.4 use is short no "array"
$car=["toyota","honda","isuzu"];
print_r($car);
echo '<hr>';

$count_car=count($car);

echo $count_car;
echo '<hr>';

//for($x=0; $x<count($count_car); $x++)  {

for($x=0; $x<$count_car; $x++) {
    echo $car[$x];
    echo '<br>';
//    echo $car{$z].'<br>;
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

