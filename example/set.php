<?php

/*
 *	描述：设置key和value的值
 *	参数：key value
 *	返回值：BOOL 成功：Ture ；失败：False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);
		
	$redis_key = "name";
	$redis_value = "DuBin";
	
	$result = $redis->set($redis_key, $redis_value);

	var_dump($result);

?>
