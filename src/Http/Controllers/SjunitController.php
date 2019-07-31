<?php
namespace Zqeesoom\SjunitLaravel2\Http\Controllers;
//继承laravel的控制器和请求
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class SjunitController extends Controller
{

    public function index() {
        return view('sjunit::index');
    }


    public function store(Request $request) {
            //可以扩展完善，用反射去创建实例类，缓存记录....
            $namespace  = $request->input('namespace');
            $className  = $request->input('className');
            $action     = $request->input('action');
            $param      = $request->input('param');
            $class = ($className == "") ? $namespace : $namespace.'\\'.$className;
            // 要提换的值  需要的结果
            $class = str_replace("/", "\\", $class);
            $object = new $class();
            $param = ($param == "") ? [] : explode('|', $param) ;
            $data = call_user_func_array([$object, $action], $param);
            return (is_array($data)) ? json_encode($data) : dd($data);

    }

}