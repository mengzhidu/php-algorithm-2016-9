<?php
/**
 * 文件作用:用PHP去实现归并排序算法
 * 文件日期:2016-9-23
 * 文件作者:梦之都--辛星
 * 更多内容，请登录我们的官方网站:www.mengzhidu.com
 * 梦之都，自由开放的编程学习基地
 */

/**
 * 执行归并
 * 它是对两个数组进行升序排序后组合成一个新的数组
 * 这里的$arr1和$arr2都是按照升序排列的
 * @param  [array] $arr1  待合并的数组1
 * @param  unknown $arr2  待合并的数组2
 * @return [array]        合并后的排序数组
 */
function  merge($arr1,$arr2)
{
    //用来暂存较小数的数组
    $arr3 = array();
    //直到有一个数组为空
    while (count($arr1) && count($arr2)) {
        //获取最小的那个
        if($arr1[0] < $arr2[0]){
            $arr3[] = $arr1[0];
            array_shift($arr1);
        }else{
            $arr3[] = $arr2[0];
            array_shift($arr2);
        }
    }
    
    return array_merge($arr3, $arr1, $arr2);
}

/**
 * 归并程序主程序
 * @param  [array] $arr  待排序的数组
 * @return [array]       升序排序的数组
 */
function main($arr)
{  
    //获取数组长度
    $len=count($arr);
    //长度为1时，排序完成
    if($len <= 1){
        return $arr;
    }
    
    //按长度拆分
    $mid = intval($len/2);
    //左侧的数组
    $left  = array_slice($arr, 0, $mid);
    //右侧的数组
    $right = array_slice($arr, $mid);
    //对左侧的进行排序
    $left  = main($left);
    //对右侧的进行排序
    $right = main($right);
    //合并左侧和右侧，排序完毕
    $arr   = merge($left, $right);
    
    return $arr;
}

//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = main($arr);
//输出其内容
print_r($arr);
