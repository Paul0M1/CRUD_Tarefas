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
    return 'Deu certo^^!';
});


$router->group(['prefix' => 'api'], function () use($router){
    $router->group(['prefix' => 'tarefas'], function () use($router){
        $router->post('/', 'TarefasController@store');
        $router->get('/', 'TarefasController@list');
        $router->get('/{id}', 'TarefasController@index');
        $router->put('/{id}', 'TarefasController@update');
        $router->delete('/{id}', 'TarefasController@delete');
    });
});

/*
POST /api/tarefas: Para criar uma nova tarefa.
GET /api/tarefas: Para listar todas as tarefas.
GET /api/tarefas/{id}: Para obter detalhes de uma tarefa específica.
PUT /api/tarefas/{id}: Para atualizar uma tarefa existente.
DELETE /api/tarefas/{id}: Para excluir uma tarefa existente.
*/