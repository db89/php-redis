<?php

/*
 * 	函数: getMultiple
 *	描述: 取得所有指定键的值，如果一个或多个键不存在，该数组中该键的值为假
 *	参数: 其中包含键值的列表数组
 *	返回值: 返回包含所有键的值的数组
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$redis -> connect('127.0.0.1', 6379);
	
	$redis->set('name_1', "DuBin");
	$redis->set('name_2', "LWP");
	$redis->set('name_3', "DJM");

	$result = ($redis->getMultiple(array('name_1', 'name_2', 'name_3')));

	print_r($result);  //输出结果：Array ( [0] => DuBin [1] => LWP [2] => DJM )

?>
