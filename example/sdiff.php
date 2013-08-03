<?php

/*
 * 	函数: sdiff
 *	描述: 返回第一个集合中存在并在其他所有集合中不存在的结果.
 *	参数: Keys: key1, key2, … , keyN: 
 *	      Any number of keys corresponding to sets in redis.
 *	返回值: 成功:返回数组 失败:False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis -> delete('name_1');
	$redis -> delete('name_2');

	$redis->sadd('name_1', "11111");
	$redis->sadd('name_1', "22222");
	$redis->sadd('name_1', "33333");
	$redis->sadd('name_2', "11111");
	$redis->sadd('name_2', "22222");
	$redis->sadd('name_2', "44444");

	var_dump($redis->sdiff('name_1','name_2'));

?>
