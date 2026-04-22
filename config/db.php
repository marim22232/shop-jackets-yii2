<?php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;port=5432;dbname=shop_db',
    'username' => 'postgres',  // ваш пользователь
    'password' => '123',
    'charset' => 'utf8',
    
    // PostgreSQL специфичные настройки
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',
            'defaultSchema' => 'public'
        ],
    ],
];


