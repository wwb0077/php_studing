<?php
/**
 * Created by PhpStorm.
 * User: wwb
 * Date: 2017/7/20
 * Time: 16:45
 */
//输出1到1000能被3整除的数的和
$sum=0;
for($i=0;$i<=1000;$i++){
    if($i%3===0){
        $sum+=$i;
    }
}
echo $sum;

//封装一个函数，输出任意函数的星星踏
function star($line){
    echo '<pre>';
    for($a=0;$a<=$line;$a++){
        for ($c=0;$c<$line-$a;$c++){
            echo " ";
        }
        for ($b=0;$b<$a*2-1;$b++){
            echo "*";
        }
        echo "<br/>";
    }
    echo '<pre>';
}
star(5);star(15);star(25);