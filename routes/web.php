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

$router->post('/v1/vagas', 'VagasController@create_vaga');
$router->post('/v1/pessoas', 'CandidatosController@create_candidato');
$router->post('/v1/candidaturas', 'CandidaturasController@create_candidatura');

$router->get('/v1/vagas', 'VagasController@show');
$router->get('/v1/pessoas', 'CandidatosController@show');
$router->get('/v1/vagas/{id}/candidaturas/ranking', 'CandidaturasController@ranking');

