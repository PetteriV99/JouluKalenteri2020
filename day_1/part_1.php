<?php

function sum_of_two ($list) {

    $len = count($list);

    for ($i=0; $i < $len; $i++) { ;    

        for ($k=1; $k < $len - 1 ; $k++) { 
           
            $sum = $list[$i] + $list[$k];

            if ($sum == 2020) {

                $multip = $list[$i] * $list[$k];
                return $multip;

            }
            
        }

    }

}

function main () {

    $myfile = fopen("input.txt", "r") or die("Unable to open file!");

    $i = 0;
    while(!feof($myfile)) {

        $expenses[$i]= (int) fgets($myfile);
        $i++;

        }
       
    fclose($myfile);    
    $multi = sum_of_two($expenses);
    echo $multi;
        
}

main();

?>