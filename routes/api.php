<?php

use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\Registrar as RouteContract;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers\Api\V1'], function($api) {
    $api->get('/me', 'ProfileController@test');

});

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

// 测试接口访问
//Route::get('hello',function(Request $request) {
//	echo $request->ip();
//});
/*
Route::group(['prefix' => 'v2'], function(RouteContract $api) {

    // Demo
    $api->get('ip', function (Request $request) {
        echo $request->ip();
    });

    // 用户设置
    $api->group(['prefix' => 'user/settings'], function (RouteContract $api) {
        // 设置简介
        $api->post('/present', 'SettingController@present');
        // 设置性别
        $api->post('/sex', 'SettingController@sex');
        // 设置生日
        $api->post('/birthday', 'SettingController@birthday');
        // 设置兴趣
        $api->post('/interest', 'SettingController@interest');

    });

    // 用户组
    $api->group(['prefix' => 'user'], function(RouteContract $api) {
        // 用户页面
        $api->get('/{id}', 'UserController@profile');
        // 用户简介
        $api->get('/{id}/profile', 'UserController@profile');
        // 用户关注
        $api->post('/{id}/follow', 'UserController@follow');
        // 取消用户关注
        $api->post('/{id}/unfollow', 'UserController@unfollow');
        // 正在关注
        $api->get('/{id}/following', 'UserController@following');
        // 我的粉丝
        $api->get('/{id}/follower', 'UserController@follower');
        // 我关注的标签
    	$api->post('/{id}/tag', 'TagController@following');
        

    });

    // 文章模块
    $api->group(['prefix' => 'post'], function(RouteContract $api) {
    	// 文章喜欢
    	$api->post('/{id}/like', 'PostController@like');
    	// 取消文章喜欢
    	$api->post('/{id}/unlike', 'PostController@unlike');
    	// 文章收藏
    	$api->post('/{id}/collection', 'PostController@collection');
    	// 取消文章收藏
    	$api->get('/{id}/uncollection', 'PostController@uncollection');
    });

    // 评论组模块
    $api->group(['prefix' => 'comment'],function(RouteContract $api) {
    	// 评论喜欢模块
    	$api->post('/{id}/like', 'CommentController@like');
    	// 取消评论喜欢模块
    	$api->post('/{id}/unlike', 'CommentController@unlike');
    });

    // 标签模块
    $api->group(['prefix' => 'tag'],function(RouteContract $api) {
        // 标签首页
        $api->get('/index', 'TagController@index');
    	// 标签关注
    	$api->post('/{id}/follow', 'TagController@follow');
    	// 取消标签关注
    	$api->post('/{id}/unfollow', 'TagController@unfollow');
        
    });


});*/










