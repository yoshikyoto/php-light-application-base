<?php

namespace SampleApp;

require __DIR__ . '/vendor/autoload.php';

// Slimフレームワークの設定
$app = new \Slim\Slim([
    'debug' => true,
    'template.path' => __DIR__ . '/templates',
    'view' => new \Slim\Views\Smarty(),
]);

$view = $app->view();
$view->parserDirectory = __DIR__  . '/smarty';
$view->parserCompileDirectory = __DIR__ . '/compiled';
$view->parserCacheDirectory = __DIR__ . '/cache';

// ルーティング
$app->get('/', function() use($app) {
        $controller = new app\controller\AppController($app);
        $controller->index();
});

$app->run();
