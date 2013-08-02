<?php

/*
 *	描述：删除指定的值
 *	参数：一个键，或者多个参数，key1,key2,key3,keyN
 *	返回值：删除的项数
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

	$redis -> set($redis_key, $redis_value);
	echo $redis -> get($redis_key);

	$redis -> delete($redis_key);

	var_dump($redis -> get($redis_key));

?>
