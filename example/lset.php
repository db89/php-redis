<?php

/*
 * 	函数: lset
 *	描述: 为列表指定的索引赋新的值,若不存在该索引返回false.
 *	参数: key index value
 *	返回值: 成功:True 失败:False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);

	$redis -> delete('name');

	$redis->lpush('name', "DuBin");	
	$redis->lpush('name', "LWP");
	$redis->rpush('name', "DJM");		
	$redis->rpush('name', "CLL");

	var_dump($redis->lget('name', 2));	//返回: DJM
	var_dump($redis->lset('name', 2, "DXY")); //返回: true
	var_dump($redis->lget('name', 2));	//返回: DXY

?>
