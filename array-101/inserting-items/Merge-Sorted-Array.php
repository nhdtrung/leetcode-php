<?php

class Solution {

    /**
     * Two pointers
     *
     * ->...<-
     *
     * ->...
     * ->......
     *
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $size = $m + $n - 1;
        
        while($m > 0 && $n > 0) {
            if($nums1[$m - 1] < $nums2[$n - 1]) {
                $nums1[$size] = $nums2[$n - 1];
                $n--;
            } else {
                $nums1[$size] = $nums1[$m - 1];
                $m--;
            }
            $size--;
        }
        
        while ($n > 0) {
            $nums1[$size] = $nums2[$n - 1];
            $n--;
            $size--;
        }
        
        return $nums1;
    }
}

