# PHPで簡単なアプリケーションを作る時のテンプレート

## 概要

2,3ページからなる簡単なアプリケーションを作るときに使うテンプレート

## Dependency

* Slim（軽量アプリケーションフレームワーク）
* Smarty（テンプレートエンジン）
* idiorm（データベースORマッパー）

## 使い方

* PHP, Apache, composerをインストール
* 以下の各所の `sampleapp` をURLのPATHの名前に変更
  * `.htaccess`
  * `templates/index.tpl` のstylesheetなどのPATH
* 以下の各所の `SampleApp` をアプリケーション名に変更
  * `composer.json`
  * `index.php`
  * `app/controller/AppController.php`
* `composer install`
