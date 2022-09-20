<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function validMountainArray($arr) {
        $size = sizeof($arr);

        if($size < 3) 
            return false;
        
        $valey = 0;
        for($i = 0; $i < $size - 1; $i++) {
            if($arr[$i] == $arr[$i+1])
                return false;
            
            if($arr[$i] > $arr[$i+1]) {
                $valey = $i;
                break;
            }
        }
        
        // case do not have top of mountain
        if($valey == 0 || $valey == $size - 1) return false;
        
        for($j = $valey; $j < $size - 1; $j++) {
            if($arr[$j] == $arr[$j+1] || $arr[$j] < $arr[$j+1]) {
                return false;
            }
        }
        
        return true;
    }
}
