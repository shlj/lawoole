<?php

/*
|--------------------------------------------------------------------------
| 路由规则
|--------------------------------------------------------------------------
*/

$router->get('', 'HomeController@index');

$router->get('task', [
    'uses' => 'HomeController@asyncTask'
]);
