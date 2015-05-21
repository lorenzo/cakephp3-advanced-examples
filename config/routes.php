<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('Route');

Router::scope('/managers', ['controller' => 'Managers'], function ($routes) {
    $routes->extensions(['json']);
    $options = ['pass' => ['dept', 'employee'], 'employee' => '[0-9]+', 'dept' => 'd[0-9]+'];
    $routes->connect('/', ['action' => 'index']);
    $routes->connect('/female', ['action' => 'female']);
    $routes->connect('/female/ratio', ['action' => 'female_ratio']);
    $routes->connect('/:dept/:employee', ['action' => 'view'], $options);
    $routes->connect('/:dept/:employee/edit', ['action' => 'edit'], $options);
    $routes->connect('/:dept/:employee/delete', ['action' => 'delete'], $options);
});

Router::scope('/salaries', ['controller' => 'Salaries'], function ($routes) {
    $routes->connect('/average', ['action' => 'average']);
    $routes->connect('/average/gender', ['action' => 'gender_average']);
    $routes->connect('/average/yearly', ['action' => 'yearly_average']);
});

Router::scope('/v2/managers', ['controller' => 'Managers'], function ($routes) {
    $routes->extensions(['json']);
    $routes->connect('/', ['action' => 'index', 'version' => 2], ['_name' => 'V2::Managers::index', 'pass' => ['version']]);
});

Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->fallbacks('DashedRoute');
});


/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
