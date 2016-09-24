<?php
/**
 * 文件作用:用PHP去实现希尔算法
 * 文件日期:2016-9-23
 * 文件作者:梦之都--辛星
 * 更多内容，请登录我们的官方网站:www.mengzhidu.com
 * 梦之都，自由开放的编程学习基地
 */

/**
 * 希尔排序的实现机制
 * @param  [array]  $arr  待排序的整数数组
 * @return [array]        升序排列的整数数组
 */
function shell($arr) 
{
    //获取数组长度
    $len = count($arr);
    
    //选择增量，增量依次模2取整
	for($gap = intval($len / 2);$gap > 0;$gap = intval($gap /= 2)){
        //根据一定的间隔进行循环
		for($i = $gap;$i < $len;$i++){
			//对内层执行
			for($j = $i - $gap;$j >= 0 && $arr[$j+$gap] < $arr[$j];$j -= $gap){
				$tmp         =  $arr[$j];
				$arr[$j]      =  $arr[$j+$gap];
				$arr[$j+$gap] = $tmp;
			}
		}
	}
	
	return $arr;
}


//排序之前数组
$arr = array(1,33,5,16,9,7,8);
//排序之后数组
$arr = shell($arr);
//输出其内容
print_r($arr);









