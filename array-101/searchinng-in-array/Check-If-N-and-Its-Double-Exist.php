<?php

class Solution {
    /**
     * O(N) time
     * O(N) memory
     *
     * @param Integer[] $arr
     * @return Boolean
     */
    function checkIfExist($arr) {
        $hashTable = [];
        // count for case has number 0
        $count = 0;
        
        for($i = 0; $i < sizeof($arr); $i++) {
            $hashTable[$arr[$i]] = true;
        }
        
        for($j = 0; $j < sizeof($arr); $j++) {
            if($arr[$j] == 0) {
                if(++$count == 2) 
                    return true;
            } elseif ($hashTable[$arr[$j] * 2]) {
                return true;
            }
        }
        
        return false;
    }
}
