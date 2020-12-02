<?php

test();
main();

function check($list) {

    $count = 0;

    for ($i=0; $i < count($list); $i++) { 
        
        $cred = explode(" ", $list[$i]);
        $positions = explode("-", $cred[0]);   
        $pos1 = $positions[0] - 1;
        $pos2 = $positions[1] - 1 ;
        $letter = substr($cred[1],0,1); 
        $password = str_split($cred[2]);    
        
        if (($letter == $password[$pos1]) xor ($letter == $password[$pos2])) {

            $count++;

        }

    }

    return $count;

}

function test() {

    $list = ["1-3 a: abcde","1-3 b: cdefg","2-9 c: ccccccccc"];
    assert(check($list) == 1);

}

function main() {

    $myfile = file_get_contents('input.txt') or die("Unable to open file!");
    
    $passwords = explode("\n", $myfile);

    echo check($passwords);

}

?>