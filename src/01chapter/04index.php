<?php

$globalVariable = 'グローバル変数です。';

function checkScope(){
    $localVariable = 'ローカル変数です。';
    //echo $localVariables;
    //echo $globalVariable; 使えない

    global $globalVariable;
    echo $globalVariable;
}

echo $globalVariable;
//echo $localVariables;

checkScope();