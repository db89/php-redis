<?php

/*
 * 	函数: ssize
 *	描述: 返回集合中存储值的数量
 *	参数: key
 *	返回值: 成功:返回数组个数 失败:0
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis -> delete('name');

	$redis->sadd('name', "11111");
	$redis->sadd('name', "22222");
	$redis->sadd('name', "33333");
	$redis->sadd('name', "44444");

	var_dump($redis->ssize('name'));
	echo "<br>";
	var_dump($redis->ssize('DDD'));

?>
