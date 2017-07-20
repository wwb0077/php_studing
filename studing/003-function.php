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
    return $sum;//返回值 返回值需要多个时，可以利用数组的形式返回[$a,$b]
}
echo sums(1001);
