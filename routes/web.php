<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->group(['prefix' => 'tree'], function () use ($router) {
    $router->post('reConstructBinaryTree', 'TreeController@reConstructBinaryTree');
    $router->post('hasSubtree', 'TreeController@hasSubtree');
});
