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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/users',['uses' => 'UserController@index']);                    //get all users
$router->post('/users',['uses' => 'UserController@add']);                     //add  users
$router->get('/users/{id}',['uses' => 'UserController@show']);                //get users by id
$router->put('/update/users/{id}',['uses' => 'UserController@updateUser']);   //UPDATE users by id
$router->patch('/users/{id}',['uses' => 'UserController@update']);            //get all users
$router->delete('/users/{id}',['uses' => 'UserController@deleteUser']);           //delete user record


