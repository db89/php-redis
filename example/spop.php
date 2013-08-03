<?php

/*
 * 	函数: spop
 *	描述: 随机移除并返回key中的一个值.
 *	参数: key
 *	返回值: 成功:返回删除的值 失败:False
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

	var_dump($redis->spop('name'));
	echo "<br>";
	print_r($redis->sort('name'));
?>
