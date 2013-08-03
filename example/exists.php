<?php

/*
 * 	函数: exists
 *	描述: 验证指定的键是否存在
 *	参数: key
 *	返回值: BOOL 成功：Ture ；失败：False
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
	
	$result = $redis->exists($redis_key);

	var_dump($result);

?>
