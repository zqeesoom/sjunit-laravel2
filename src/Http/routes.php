<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/28 0028
 * Time: 下午 1:34
 */
Route::get('/', 'SjunitController@index');
//注意路由名，对应模板<form action="{{route('sjunit.store')}}" method="post">
Route::post('/', 'SjunitController@store')->name('sjunit.store');