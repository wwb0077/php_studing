<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2017/7/20
 * Time: 22:20
 */
header("Content-Type:text/html; charset=utf-8");

function sums($any){
    $sum =0;
    for($i=0;$i<=$any;$i++){
        $sum += $i;
    }
    return $sum;
}
echo sums(1001);