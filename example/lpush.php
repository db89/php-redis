<?php

/*
 * 	函数：lpush
 *	描述：由列表头部添加字符串值。
 *	      如果不存在该键则创建该列表。
 *	      如果该键存在，而且不是一个列表，返回FALSE。
 *	参数：key value
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

	var_dump($redis->lpush('name', "DuBin"));	//结果: int(1)
	var_dump($redis->lpush('name', "LWP"));		//结果: int(2)
	var_dump($redis->lpush('name', "DJM"));		//结果: int(3)
	
?>
