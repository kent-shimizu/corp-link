<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->get('/applicant/recruits', 'ApplicantController@getRecruits');
    $router->get('/recruit/refuse', 'ApplicantController@getRefuse');
    $router->get('/recruit/waiting_subject', 'ApplicantController@getWatingSubject');
    $router->resource('/applicant', 'ApplicantController');


});
