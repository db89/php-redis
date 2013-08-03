<?php

/*
 * 	函数: lget
 *	描述: 返回指定键存储在列表中指定的元素.
 *  0第一个元素，1第二个… -1最后一个元素，-2的倒数第二...
 *  错误的索引或键不指向列表则返回FALSE.
 *	参数: key index
 *	返回值: 成功:返回指定元素的值; 失败:False
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

?>
