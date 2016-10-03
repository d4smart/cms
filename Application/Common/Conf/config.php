<?php
return array(
	//'配置项'=>'配置值'
    'URL_MODEL' => 2,       // rewrite模式，去掉URL中的index.php

    // 数据库连接信息
    'DB_TYPE' => 'mysql',   // 数据库类型
    'DB_HOST' => '127.0.0.1',   // 服务器地址
    'DB_NAME' => 'blog',    // 数据库名
    'DB_USER' => 'root',    // 用户名
    'DB_PWD' => '',         // 密码
    'DB_PORT' => 3306,      // 端口
    'DB_PREFIX' => 'bg_',   // 数据库表前缀
    'DB_CHARSET'=> 'utf8',  // 字符集

    // 开启URL路由
    'URL_ROUTER_ON'   => true,
);