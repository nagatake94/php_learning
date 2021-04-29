<?php
//可変引数

function combine(string ...$name): string 
{
    $combineName = '';
    for($i = 0; $i<count($name); $i++){
        $combineName .= $name[$i];
        if($i != count($name)-1){
            $combineName .= '・';
        }
    }

    return $combineName;
}


$fName = '名前';
$lName = '苗字';
$name1 = combine($lName, $fName);