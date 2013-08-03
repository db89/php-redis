<?php

/*
 * 	函数: sinterstore
 *	描述: 执行sinter命令并把结果储存到新建的变量中。
 *	参数:
 *		Key: dstkey, the key to store the diff into.
 *  	Keys: key1, key2… keyN. key1..keyN are intersected as in sinter. 
 *	返回值: 成功:交集的个数 失败:False
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
	$redis -> delete('name_3');

	$redis->sadd('name_1', "11111");
	$redis->sadd('name_1', "22222");
	$redis->sadd('name_1', "33333");
	$redis->sadd('name_2', "11111");
	$redis->sadd('name_2', "22222");
	$redis->sadd('name_2', "44444");

	var_dump($redis->sinterstore('name_3','name_1','name_2'));

?>
