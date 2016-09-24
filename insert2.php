<?php
/**
 * 文件作用:用PHP去实现直接插入算法
 * 文件日期:2016-9-23
 * 文件作者:梦之都--辛星
 * 更多内容，请登录我们的官方网站:www.mengzhidu.com
 * 梦之都，自由开放的编程学习基地
 */

/**
 * 直接插入排序的实现机制
 * @param  [array] $arr  待排序的整数数组
 * @return [array]       升序排列的整数数组
 */
function insert($arr)
{
    //获取数组长度
    $len = count($arr);

    //外层循环
    for ($i = 0;$i < $len;$i++) {
        //带插入的数据
        $tmp=$arr[$i];
        //前面已经排好的元素个数
        $key=$i - 1;
        //找到自己合适的位置
        while(($key>=0) && ($tmp<$arr[$key])){
            //依次向右移位
            $arr[$key+1]=$arr[$key];
            $key--;
        }
        //插入指定的位置
        if(($key+1)!=$i){
            $arr[$key+1]=$tmp;
        }
                
    }
    return $arr;
}


//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = insert($arr);
//输出其内容
print_r($arr);













