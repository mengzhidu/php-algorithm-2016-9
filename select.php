<?php
/**
 * 文件作用:用PHP去实现选择排序算法
 * 文件日期:2016-9-23
 * 文件作者:梦之都--辛星
 * 更多内容，请登录我们的官方网站:www.mengzhidu.com
 * 梦之都，自由开放的编程学习基地
 */

/**
 * 选择排序的实现机制
 * @param  [array] $arr  待排序的整数数组
 * @return [array]       升序排序的整数数组
 */
function select($arr)
{
    //获取数组长度
    $len = count($arr);
    for ($i = 0;$i < $len;$i++) {
        
        $min=$i;
       
        for ($j=$i+1;$j<$len;$j++) {
            //由小到大排列
            if ($arr[$min]>$arr[$j]) {
                //表明当前最小的还比当前的元素大
                $min = $j;
                //赋值新的最小的
            }
        }
        //若二者不等，则执行交换
        if ($min != $i) {
            $tmp       = $arr[$min];
            $arr[$min] = $arr[$i];
            $arr[$i]   = $tmp;
        }
    }
    return$arr;
}

//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = select($arr);
//输出其内容
print_r($arr);







