<h1 align="center"> sjunit-laravel2 </h1>

<p align="center"> A simplified version of the laravel framework unit test.</p>


## Installing

```shell
$ composer require zqeesoom/sjunit-laravel2 -vvv
```

## Usage

TODO

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zqeesoom/sjunit-laravel2/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zqeesoom/sjunit-laravel2/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT

简单的单元测试

内容 :
#对于框架要求：
1.laravel版本大于 >= 5.5
2.php版本>7.1.3

#安装的方式
---标识
composer require 'zqeesoom/sjunit-laravel2'
---

#配置方式
5.8的话基本上不用配置
5.5手动配置sjunit服务config/app.php中的providers数组中
//注册服务提供者：
Zqeesoom\SjunitLaravel2\Providers\SjunitServiceProvider::class

#解释路由
---php
<?php
Route::get('/', 'SjunitController@index');//在服务提供者那里定义了路由前缀：sjunit
Route::post('/', 'SjunitController@store')->name('sjunit.store');
---