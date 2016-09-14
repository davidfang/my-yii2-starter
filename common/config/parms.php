<?php
$config = [
    'adminEmail' => env('ADMIN_EMAIL'),
    'robotEmail' => env('ROBOT_EMAIL'),
    'availableLocales'=>[
        'en-US'=>'English (US)',
        'ru-RU'=>'Русский (РФ)',
        'uk-UA'=>'Українська (Україна)',
        'es' => 'Español',
        'zh-CN' => '简体中文',
    ],
    'user.AccessTokenExpire' => 3600 * 24 * 360,
];


return $config;
