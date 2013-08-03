<?php

/*
 * 	函数: scontains
 *	描述: 检查集合中是否存在指定的值.
 *	参数: key value
 *	返回值: 成功:True 失败:False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis -> delete('name');

	var_dump($redis->sadd('name', "11111"));
	var_dump($redis->sadd('name', "22222"));
	var_dump($redis->sadd('name', "33333"));
	var_dump($redis->sadd('name', "44444"));
	echo "<br>";
	var_dump($redis->scontains('name', "11111"));
	echo "<br>";
	print_r($redis->sort('name'));

?>
