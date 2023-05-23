<?php

$columnSumStored=[0,0,0];
$rowSum=0;
$rowSumStored=[];
for($i=1;$i<=3;$i++){

    for($j=1;$j<=3;$j++){
        if($i==1) {
            echo " " . $j * 3;
             $rowSum += $j * 3;
             $columnSumStored[$j-1]+=$j*3;
        }
         if($i==2){
            echo  " ".$j*5;
             $rowSum += $j * 5;
             $columnSumStored[$j-1]+=$j*5;
        }
         if($i==3){
            echo " ". $j*10 ;
             $rowSum += $j * 10;
             $columnSumStored[$j-1]+=$j*10;
        }
    }
   $rowSumStored[]=$rowSum;
    $rowSum=0;
    echo "\n";
};
echo "sum of row:", print_r($rowSumStored);
echo "sum of column:",print_r($columnSumStored);

//=========== left diagonal array=========

$left_diagonal_sum=0;

for($i=1;$i<=3;$i++) {
    for ($j = 1; $j <= 3; $j++) {
        if ($i != $j) {
            echo " ";
        } else {
            if ($j== 1) {
                echo $j * 3;
                $left_diagonal_sum+=$j*3;
            }
            if ($j == 2) {
                echo $j * 5;
                $left_diagonal_sum+=$j*5;
            }
            if ($j == 3) {
                echo $j * 10;
                $left_diagonal_sum+=$j*10;
            }
        }

    }
    echo "\n";
}
echo "left diagonal sum is:",$left_diagonal_sum."\n";

//=========== right diagonal array=========

$right_diagonal_sum=0;

for($i=1;$i<=3;$i++) {

    for ($j = 1; $j <= 3; $j++) {

        if($i==1 && $j==3){
            echo $j*3;
            $right_diagonal_sum+=$j*3;
        }
        if($i==2 && $j==2){
            echo $j*5;
            $right_diagonal_sum+=$j*5;
        }
        if($i==3 && $j==1){
            echo $j*10;
            $right_diagonal_sum+=$j*10;
        }
        else{
            echo " ";
        }
    }
    echo "\n";
    }
echo "right diagonal sum is:$right_diagonal_sum"."\n";

