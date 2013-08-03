<?php

/*
 * 	函数: lsize, llen
 *	描述: 返回的列表的长度。如果列表不存在或为空，该命令返回0。
 *	      如果该键不是列表，该命令返回FALSE。
 *	参数: key
 *	返回值：成功：返回数组长度 ；失败：False
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
	$redis->lpush('name', "DJM");		

	var_dump($redis->lsize('name'));

	echo "<br>";

	var_dump($redis->llen('name'));

?>
