<?php

/**
* @param Integer[] $nums
* @return Integer
*/
function findNumbers($nums) {
    $result = 0;
    foreach($nums as $num) {
        $count = 0;
        while($num > 1) {
            $num /= 10;
            $count++;
        }

        if($count % 2 == 0) {
            $result++;
        }
    }

    return $result;
}

echo findNumbers([12,345,2,6,7896]);
