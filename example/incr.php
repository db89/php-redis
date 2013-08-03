<?php

/*
 * 	函数: incr
 *	描述: 数字递增存储键值键。
 *	参数: key value：将被添加到键的值
 *	返回值: int the new value
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);
		
	$redis_key = "date";
	$redis_value = "123";

	$redis->set($redis_key, $redis_value);
	
	var_dump($redis->incr($redis_key)); //输出: 124

	var_dump($redis->incr($redis_key, 5)); //输出: 129

?>
