<?php

/*
 * 	函数: smembers, sgetmembers
 *	描述: 返回集合的内容.
 *	参数: key 
 *	返回值: 成功:数组 失败:False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis -> delete('name');
	$redis -> delete('name');

	$redis->sadd('name', "11111");
	$redis->sadd('name', "22222");
	$redis->sadd('name', "33333");

	var_dump($redis->smembers('name'));
	echo "<br>";
	var_dump($redis->sgetmembers('name'));

?>
