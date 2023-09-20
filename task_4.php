
<?php
function FibonacciSeries($numTerms) {
    $fibonacciSeries = [];

    
    $fibonacciSeries[] = 0;
    $fibonacciSeries[] = 1;

    for ($i = 2; $i < $numTerms; $i++) {
     
        $nextFibonacci = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        $fibonacciSeries[] = $nextFibonacci;
    }


    for ($i = 0; $i < $numTerms; $i++) {
        echo $fibonacciSeries[$i] . " ";
    }
}

FibonacciSeries(15);
?>

