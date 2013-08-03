<?php

/*
 * 	函数: lremove
 *	描述: 从列表中从头部开始移除count个匹配的值.
 *	      如果count为零，所有匹配的元素都被删除.
 *	      如果count是负数，内容从尾部开始删除。
 *	参数: key value count
 *	返回值: 成功:删除的个数 失败:False
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
	$redis->rpush('name', "DuBin");

	print_r($redis->lgetrange('name', 0, -1));
	//输出: 数组类型的 LWP DuBin DJM DuBin
	echo "<br>";
	var_dump($redis->lremove('name',"DuBin",2));
	echo "<br>";
	print_r($redis->lgetrange('name', 0, -1));
	echo "<br>";

?>
