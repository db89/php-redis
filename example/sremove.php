<?php

/*
 * 	函数: sremove
 *	描述: 删除Key中指定的value值
 *	参数: key member
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

	var_dump($redis->sremove('name',"123"));

	print_r($redis->sort('name'));


?>
