<?php

test();
main();

function check($list) {

    $count = 0;

    for ($i=0; $i < count($list); $i++) { 
        
        $cred = explode(" ", $list[$i]);
        $minmax= explode("-", $cred[0]);   
        $letter = substr($cred[1],0,1);   
        $number = substr_count($cred[2],$letter);          
        
        if (($number >= $minmax[0]) and ($number <= $minmax[1])) {

            $count++;

        }

    }

    return $count;

}

function test() {

    $list = ["1-3 a: abcde","1-3 b: cdefg","2-9 c: ccccccccc"];
    assert(check($list) == 2);

}

function main() {

    $myfile = file_get_contents('input.txt') or die("Unable to open file!");
    
    $passwords = explode("\n", $myfile);

    echo check($passwords);

}

?>