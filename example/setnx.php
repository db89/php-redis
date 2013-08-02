<?php

/*
 * 	函数：setnx
 *	描述：如果数据库中不存在该键，设置关键值参数
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
	$redis_value_2 = "LWP";
	
	$redis->set($redis_key, $redis_value);
	$redis->setnx($redis_key, $redis_value_2);

	echo $redis->get($redis_key);

	$redis->delete($redis_key);
	$redis->setnx($redis_key, $redis_value_2);

	echo $redis->get($redis_key);

?>
