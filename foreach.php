<?php
header("Content-Type:text/html; charset=utf-8");
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2017/7/21
 * Time: 2:16
 */
/*
 * 数组的遍历：
 *  1.使用传统的for 循环遍历数组
 *      语法：
 *          for($i=0;$i<count(数组名);$i++){}
 *      注意：
 *          只能遍历索引的数组，并且下班必须是系统自动生成的连续的数值下标
 *  2. 使用专用的遍历语句：foreach
 *      完整语法：
 *          foreach($数组名 as 赋值键名的变量 => 赋值键名的变量){}
 *      简洁写法：
 *          foreach(函数名 as 赋值的变量){}
 *      支持 break 【跳出】 和continue 【跳过】！！！
 */
$list = ['胡老师','无相','江红'];
//使用传统的for进行数组的遍历
for($i=0;$i<count($list);$i++){
    echo $list[$i];
    echo '--';
}

echo '<br />';
$list_a = ['bo'=>'胡老师','无相','江红'];
foreach ($list_a as $value){
    echo $value;
}
//数组遍历的方式