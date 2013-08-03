<?php

/*
 * 	函数: sunion
 *	描述: 返回一个所有指定键的并集.
 *	参数: key1 key2 keyN
 *	返回值: 成功:成功返回合并后的集 失败:False
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

	var_dump($redis->sunion('name_1','name_2'));

?>
