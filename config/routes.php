<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
    
    Router::mapResources('users');
    Router::parseExtensions();
    
   /**
    * RESTful HTTP Method table  
    * ------------------------------------------------------------------
    * HTTP Method 	| URL.method 	        | Controller action invoked
    * --------------+-----------------------+---------------------------
    * GET 	        | /recipes.method       | RecipesController::index()
    * GET 	        | /recipes/123.method   | RecipesController::view(123)
    * POST 	        | /recipes.method       | RecipesController::add()
    * PUT 	        | /recipes/123.method   | RecipesController::edit(123)
    * DELETE        | /recipes/123.method   | RecipesController::delete(123)
    * POST 	        | /recipes/123.method   | RecipesController::edit(123)
    */ 
    /**
     *  Controller::index()
     */
//    Router::connect(
//        '/:controller',
//        array('action' => 'index', '[method]' => 'GET')
//    );
//
//    /**
//     *  Controller::view(id)
//     */
//    Router::connect(
//        '/:controller/:id',
//        array('action' => 'view', '[method]' => 'GET'),
//        array('id' => '[\d]+')
//    );
//
//    /**
//     *  Controller::edit(id)
//     */
//    Router::connect(
//        '/:controller/:id',
//        array('action' => 'edit', '[method]' => 'POST'),
//        array('id' => '[0-9]+')
//    );
//
//    /**
//     *  Controller::add()
//     */
//    Router::connect(
//        '/:controller',
//        array('action' => 'add', '[method]' => 'POST')
//    );
//
//    /**
//     *  Controller::edit(id)
//     */
//    Router::connect(
//        '/:controller/:id',
//        array('action' => 'edit', '[method]' => 'PUT'),
//        array('id' => '[0-9]+')
//    );
//
//    /**
//     *  Controller::delete(id)
//     */
//    Router::connect(
//        '/:controller/:id',
//        array('action' => 'delete', '[method]' => 'DELETE'),
//        array('id' => '[0-9]+')
//    );
//
//    Router::parseExtensions('json');
