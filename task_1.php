<?php


function evenNumbers($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

evenNumbers(2, 20, 2);

echo PHP_EOL;
function evenNumberswhileloop($start,$end,$step){
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}
evenNumberswhileloop(2,20,2);

echo PHP_EOL;

function evenNumberdowhileloop($start,$end,$step){
    do {
        echo $start . " ";
        $start += $step;
    } while ($start <= $end);
}
evenNumberdowhileloop(2,20,2);




