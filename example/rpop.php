<?php

/*
 * 	函数: rpop
 *	描述: 返回和移除列表的最后一个元素
 *	参数: key
 *	返回值: 成功返回最后一个元素的值 ，失败返回false.
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

	var_dump($redis->rpop('name'));	//返回：CLL

?>
