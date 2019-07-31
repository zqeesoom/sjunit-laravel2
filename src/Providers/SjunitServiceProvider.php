<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/28 0028
 * Time: 下午 1:50
 */
namespace Zqeesoom\SjunitLaravel2\Providers;
//继承laravel服务提供者
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SjunitServiceProvider extends ServiceProvider
{

    public function register()
    {
         //echo '这是一个Sjunit服务提供者';exit();
        //注册路由
        $this->registerRoutes();

        //可以通过在框架路由处，打印dd（app('view')）
        //第二个参数代表,该组件的名称，自定义的资源目录地址在那
        $this->loadViewsFrom( __DIR__.'/../../resources/views', 'sjunit');
    }

    public function boot()
    {

    }
    private function routeConfiguration()
    {
        return [
            //定义访问路由的域名
           // 'domain' => config('telescope.domain',null),
            //定义路由的命名空间
            'namespace' => 'Zqeesoom\SjunitLaravel2\Http\Controllers',
            //这是路由前缀,自己定义
            'prefix' => 'sjunit',
            //中间件
            'middleware'=> 'web'
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });//../这里路由可能会报错。
    }
}