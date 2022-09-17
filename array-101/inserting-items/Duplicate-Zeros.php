<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return NULL
     */
    function duplicateZeros(&$arr) {
        $extraArr = [];
        
        for($i = 0; $i < sizeof($arr); $i++) {
            $extraArr[] = $arr[$i];
            if($arr[$i] == 0) {
                $extraArr[] = 0;
            }
        }
        
        for($i = 0; $i < sizeof($arr); $i++)
        {
            $arr[$i] = $extraArr[$i];
        }
        
        return $arr;
    }
}
