<?php
/**
 * 文件作用:用PHP去实现二分插入算法
* 文件日期:2016-9-23
* 文件作者:梦之都--辛星
* 更多内容，请登录我们的官方网站:www.mengzhidu.com
* 梦之都，自由开放的编程学习基地
*/

/**
 * 二分插入排序的实现机制
 * @param  [array] $arr  待排序的整数数组
 * @return [array]       升序排列的整数数组
 */
function insert($arr)
{
    //获取数组长度
    $len = count($arr);

    //外层循环
    for ($i = 1;$i < $len;$i++) {
        //待插入的数据
        $tmp=$arr[$i];
        //二分的右边界
        $right =$i - 1;
        //二分的左边界
        $left = 0;
        while ($right >= $left) {
            //二分的中间点
            $middle = intval(($left + $right)/2);
            //确定新一轮的边界
            if ($tmp < $arr[$middle]) {
                $right = $middle -1;
            }else{
                $left = $middle + 1;
            }
        }
        //依次向前移动一位
        for ($j = $i - 1;$j >= $left;$j--) {
            $arr[$j+1] = $arr[$j];
        }
        //插入到合适位置
        $arr[$left] = $tmp;
       
    }
    return $arr;
}


//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = insert($arr);
//输出其内容
print_r($arr);