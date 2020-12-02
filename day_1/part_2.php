<?php

function sum_of_three ($list) {

    $len = count($list);

    for ($i=0; $i < $len; $i++) { ;    

        for ($k=1; $k < $len - 1 ; $k++) { 
           
            $sum = $list[$i] + $list[$k];

            if ($sum < 2020) {

                $under = $list[$i] + $list[$k];
                $multi =  $list[$i] * $list[$k];
            }
            
        }

        for ($n=1; $n < $len - 2 ; $n++) { 

            if (($under + $list[$n]) == 2020) {

                $multip = $multi * $list[$n];
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
    $multi = sum_of_three($expenses);
    echo $multi;
        
}

main();

?>