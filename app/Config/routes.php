<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	//Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	// rota personalizada para 'pages' generic
	Router::connect('/pagina/*', array('controller' => 'pages', 'action' => 'display'));
	
	// rota direta para as páginas, sem declaração do controller pages
	Router::connect('/programacao', array('controller' => 'pages', 'action' => 'display', 'programacao'));
	Router::connect('/sobre', array('controller' => 'pages', 'action' => 'display', 'sobre'));
	Router::connect('/local', array('controller' => 'pages', 'action' => 'display', 'local'));
	Router::connect('/local', array('controller' => 'pages', 'action' => 'display', 'sobre')); // mesma rota para '/local' >> conclusão, vale a primeira declaração
	
	// rota para a inscrição
	Router::connect('/inscricao', array('controller' => 'inscricoes', 'action' => 'inscrever'));
	
	// rota para profile
	Router::connect('/profile', array('controller' => 'profiles', 'action' => 'adicionar'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
