<?php
/**
 * 文件作用:用PHP去实现冒泡算法
 * 文件日期:2016-9-23
 * 文件作者:梦之都--辛星
 * 更多内容，请登录我们的官方网站:www.mengzhidu.com
 * 梦之都，自由开放的编程学习基地
 */

/**
 * 冒泡排序的实现机制
 * @param  [array] $arr  待排序的整数数组
 * @return [array]       升序排序的整数数组
 */
function bubble($arr)
{
    //获取数组长度
    $len = count($arr);
    
    //外层循环
    for ($i = 0;$i < $len;$i ++) {
        for ($j = $i+1;$j < $len;$j ++) {
            //这里等于的情况不要交换，避免无意义操作
            if($arr[$i] > $arr[$j]){
                //交换两者的位置
                $tmp     =  $arr[$i];
                $arr[$i] =  $arr[$j];
                $arr[$j] =  $tmp;
            }
        }
    }
    
    return $arr;
}

//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = bubble($arr);
//输出其内容
print_r($arr);
