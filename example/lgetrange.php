<?php

/*
 * 	函数: lgetrange
 *	描述: 返回在该区域中的指定键列表中开始到结束存储的指定元素，
 *	      lGetRange(key, start, end)。0第一个元素，1第二个元素… 
 *	      -1最后一个元素，-2的倒数第二…
 *	参数: key start end
 *	返回值: 成功:返回查找到的值 失败:False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis -> delete('name');

	$redis->lpush('name', "DuBin");	
	$redis->lpush('name', "LWP");
	$redis->rpush('name', "DJM");		
	$redis->rpush('name', "CLL");

	var_dump($redis->lgetrange('name', 1, -2));
	//输出: 数组类型的 DuBin DJM

?>
