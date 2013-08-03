<?php

/*
 * 	函数: sadd
 *	描述: 为一个Key添加一个值,如果这个值已经在这个Key中,则返回FALSE.
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

	var_dump($redis->sadd('name', "123"));
	var_dump($redis->sadd('name', "345"));
	var_dump($redis->sadd('name', "234"));

	print_r($redis->sort('name'));


?>
