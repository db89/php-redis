<?php

/*
 * 	函数: smove
 *	描述: 将Key1中的value移动到Key2中
 *	参数: srcKey dstKey member
 *	返回值: 成功:True 失败:False
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

	var_dump($redis->sadd('name_1', "11111"));
	var_dump($redis->sadd('name_1', "22222"));
	var_dump($redis->sadd('name_2', "33333"));
	var_dump($redis->sadd('name_2', "44444"));
	echo "<br>";
	var_dump($redis->smove('name_1', 'name_2', "11111"));
	echo "<br>";
	print_r($redis->sort('name_1'));
	echo "<br>";
	print_r($redis->sort('name_2'));

?>
