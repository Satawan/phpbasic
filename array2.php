<?php

$height=['john'=>178,'rebert'=>189,'joly'=>186];
print_r($height);
echo '<hr>';
echo $height['john'];

foreach ($height as $key=>$value) {
    echo $key.' : '.$value.'<hr>';
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

