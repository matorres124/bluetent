<?php

/**
 * Michael Torres
 */


/**
 * 
 * Write a function that outputs the numbers from 1 to 100. 
 * For multiples of three output “Fizz” instead of the number, and for the multiples of five output “Buzz”.
 * For numbers which are multiples of both three and five output “FizzBuzz”. 
 * @param int $start
 * @param int $end
 */

function fizzbuzz($start, $end){

    for($i = $start; $i <= $end; $i++){
        
        if($i % 3 == 0 && $i % 5 == 0){
            echo "FizzBuzz" . "<br />";
        }
        else if($i % 3 == 0){
            echo "Fizz" . "<br />";
        }
        else if($i % 5 == 0){
            echo "Buzz" . "<br />";
        }
        else{
            echo $i . "<br />";
        }        
    }
}

//fizzbuzz(1,100);


/**
 * Write a function that takes two arguments; an amount, and a tax percentage.
 * Return an array with the amount of tax in cents.
 * @param mixed $amount
 * @param mixed $percentage
 */
function taxes($amount, $percentage){
    
    $floatPercentStr =  $percentage / 100;
    $pennies = (int)(100 * number_format($amount * $floatPercentStr, 2));
    
    $result = array();
    for($i = 1; $i<= $pennies; $i++){
        array_push($result, '.01');
    }
    
    var_dump($result);
    
}

//taxes(103.45, 1.2435);

/**
 * 
 * Write a function that takes two words as its arguments and returns true if they are anagrams (contain the exact same letters) and false otherwise.
 * @param string $word1
 * @param string $word2
 */
function anagram($word1, $word2){
    $word1Array = str_split(strtolower($word1));
    $word2Array = str_split(strtolower($word2));
    
    if(count($word1Array) != count($word2Array)){
        echo "False";
    }
    else{
        $compare1 = array();
        
        foreach($word1Array as $letter){
            
            if(!array_key_exists($letter, $compare1)){
                $compare1[$letter] =substr_count(strtolower($word1), $letter);
            }
        }
        
        $compare2 = array();
        
        foreach($word2Array as $letter){
            
            if(!array_key_exists($letter, $compare2)){
                $compare2[$letter] =substr_count(strtolower($word2), $letter);
            }
        }
        
        ksort($compare1);
        ksort($compare2);
        
        echo$compare1 === $compare2 ? "True" : "False";
        
    }    
}



anagram('Dad', 'add');