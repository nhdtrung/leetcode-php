<?php

class Solution {

    /**
     * @param Integer[] $heights
     * @return Integer
     */
    function heightChecker($heights) {
        $sort = $heights;
        sort($sort);
        $count = 0;
        
        for($i=0; $i<count($heights); $i++){
            if($heights[$i] !== $sort[$i]) $count++;
        }
        
        return $count;
    }
}
