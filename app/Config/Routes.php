<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/user/add', 'UserController::addUser');
 $routes->get('/user/delete', 'UserController::deleteUser');
 $routes->get('/user/edit', 'UserController::editUser');
 $routes->get('/user/view', 'UserController::viewUser');
 $routes->get('/user/list', 'UserController::listUser');