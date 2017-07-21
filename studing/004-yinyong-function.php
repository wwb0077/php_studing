<?php
//"Content-Type:text/html; charset=utf-8"
header("Content-Type:text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2017/7/20
 * Time: 23:26
 */
/*
 * 函数参数的 引用赋值
 *      默认情况下，函数的参数是传值赋值
 *      引用赋值的语法：
 *          function 函数名（&形式参数1，&形式参数2）{}
 * 注意：
 *      使用了引用赋值后，传进函数的数据不是数据，是内存地址，在函数内部和外部都可以对该内存地址的数据产生改变
 */
$str="今天星期五";
function show(&$str){//加上&符号就变成引用赋值，就是把地址赋值传入
    $str="明天要上课";
    return $str;
}

echo show($str);
echo '<br />';
echo $str;
