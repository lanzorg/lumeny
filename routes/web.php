<?php

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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('customers', 'CustomerController@getAll');
    $router->get('customers/{customerId}', 'CustomerController@getOne');
    $router->get('customers/{customerId}/contracts', 'CustomerController@getContracts');
    $router->patch('contracts/{contractId}', 'ContractController@update');
});
