 <?php
/**
 * @var \Core\Router
 */

$router->get('', 'PagesController@index');
$router->get('refresh', 'PagesController@refresh');
$router->get('all-paths', 'PagesController@paths');

$router->get('search', 'SearchController@index');
$router->post('search', 'SearchController@search');
