<?php
//模块index的个性设置
define('ROOT_SITE', '/chatroom');
return [
    // 视图输出字符串内容替换
    'view_replace_str'       => [
    	'__LAYUI__'=>ROOT_SITE.'/public/layui',
    	'__PUBLIC__'=>ROOT_SITE.'/public',
		'__IMAGES__'=>ROOT_SITE.'/public/static/images',
		'__JS__'=>ROOT_SITE.'/public/static/js',
		'__CSS__'=>ROOT_SITE.'/public/static/css',
    ],


];
