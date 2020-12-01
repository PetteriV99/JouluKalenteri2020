<?php

function sum_of_three ($list) {

    $len = count($list);

    for ($i=0; $i < $len; $i++) { ;    

        for ($k=1; $k < $len - 1 ; $k++) { 
           
            for ($m=1; $m < $len - 1 ; $m++) { 

                $sum = $list[$i] + $list[$k] + $list[$m];

                if ($sum == 2020) {

                    $multip = $list[$i] * $list[$k] * $list[$m];
                    return $multip;

                }
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