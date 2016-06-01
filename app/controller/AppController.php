<?php

namespace SampleApp\app\controller;

use \Slim\Slim;

class AppController {
    private $app;

    /**
     * @param Slim $app
     */
    function __construct(Slim $app) {
        $this->app = $app;
    }

    public function index() {
        $this->app->render(
            'index.tpl',
            [
                'appName' => 'サンプルアプリケーション',
            ]);
    }
}
