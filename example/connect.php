<?php

/*
 *	主题: 测试php与redis的链接
 *	描述：链接到Redis
 *	参数：host:string, port:int
 *	返回值：BOOL 成功：Ture ；失败：False
 *
 *	author: DuBin
 *	mail: db89@163.com
 *	blog: http://blog.db89.org
 *
 */

	$redis = new redis();
	$result = $redis -> connect('127.0.0.1', 6379);
	var_dump($result);

?>
