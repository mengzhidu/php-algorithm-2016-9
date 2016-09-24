<?php
/**
 * 文件作用:用PHP去实现快速排序算法
 * 文件日期:2016-9-23
 * 文件作者:梦之都--辛星
 * 更多内容，请登录我们的官方网站:www.mengzhidu.com
 * 梦之都，自由开放的编程学习基地
 */

/**
 * 快速排序的实现机制
 * @param  [array] $arr   待排序的数组
 * @return [array]        升序排序的数组
 */
function quick($arr)
{
    //获取数组长度
    $len = count($arr);
    //无法分拆，直接返回
    if ($len < 1) {
        return $arr;
    }
 
    //选取基数元素
    $pivot = $arr[0];
    //左侧的部分
    $left  = array();
    //右侧的部分
    $right = array();
    
    //填充左侧和右侧的数组
    for ($i = 1;$i < $len;$i++) {
        //根据基准进行比较
        if ($arr[$i] < $pivot) {
            $left[]  = $arr[$i];
        } else {
            $right[] = $arr[$i];
        }
    }
    
    //对左侧进行排序
    $left  = quick($left);
    //对右侧进行排序
    $right = quick($right);
    //返回合并后的结果
    return array_merge($left,[$pivot],$right);
    
}

//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = quick($arr);
//输出其内容
print_r($arr);









