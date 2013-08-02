<?php

/*
 *	描述: 获取有关指定的值
 *	参数：key
 *	返回值：String或者BOOL 成功：key所对应的value值 ；失败：False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis_key = "name";
	$result = $redis -> get($redis_key);
	
	var_dump($result);

?>
