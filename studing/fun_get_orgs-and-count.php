<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2017/7/20
 * Time: 23:09
 */
/*
 * 函数实际参数获取 func_get_args()
 *      获取函数的所有实际参数，以数组形式返回！只能在函数内部使用
 * 通常用于传入参数值数量不确定时的情况，形式参数不设置，实际参数可以任意设置
 */
//案例 求一个任意个数的和
function add_any(){
    $str=func_get_args();
    $result=0;
    for($i=0;$i<count($str);$i++){
        $result+=$str[$i];
    }
    return $result;
}
echo add_any(1,2,3,4,5,5);


