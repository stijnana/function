<?php


function writeHello(){
    echo 'Hello!';
}

function writeMsg($msg){
    echo $msg;
}

function writeMsgTo($name, $smg='Default'){
    echo 'msg from '.$name.' the msg = '.$smg;
}

function cal($val1,$val2){
    $outcome = $val1 + $val2;
    echo 'The outcome of ' .$val1 .' + '. $val2. '= ' .$outcome;
}

function cal2($val1,$val2){
    $outcome = $val1 * $val2;
    echo 'The outcome of ' .$val1 .'*'. $val2. '= ' .$outcome;
}

function best($val1,$val2,$sort){
    $outcome = $val1. $sort. $val2;
    echo 'The outcome of ' .$val1 .$sort. $val2. '= ' .$outcome;
}

function body(){
    include 'lib/form.html';
    $lengt = $_POST['lengt'];
    $gewicht = $_POST['gewicht'];
    
    $outcome = $gewicht / ($lengt * $lengt);

    echo $outcome;


}

