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

/**** API ****/
$router->group(["prefix" => "api"], function () use ($router) {
  $router->group(["prefix" => "auth"], function () use ($router) {
    $router->post("/login", "Api\AuthController@login");
  });

  $router->group(["middleware" => "auth"], function () use ($router) {
    $router->group(["prefix" => "properties"], function () use ($router) {
      $router->get("/", "Api\PropertyController@index");
      $router->get("/property-types", "Api\PropertyController@propertyTypes");
      $router->get("/{mask}", "Api\PropertyController@show");
      $router->post("/", "Api\PropertyController@store");
      $router->post("/{mask}", "Api\PropertyController@update");
      $router->delete("/{mask}", "Api\PropertyController@destroy");
    });

    $router->put("/photo/set-cover/{id}", "Api\FileController@setCover");
    $router->delete("/photo/{id}", "Api\FileController@destroy");
  });
});

$router->get("/", "MainController@index");
$router->get("/properties", "PropertyController@properties");
$router->get("/property/{property}", "PropertyController@show");

$router->get('/admin{path:.*}', "MainController@admin");
