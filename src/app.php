<?php
 
use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

$routes = new Routing\RouteCollection();

// /{page}
// /index
// /about

$routes->add(
  'company_page',
  new Routing\Route('/{page}', array( '_controller' => 'Company\\Controller\\CompanyController::indexAction' ) )
);

// /{category}/
// /product_series_A/
// /product_series_B/

$routes->add(
  'product_list',
  new Routing\Route('/{category_id}/', array( '_controller' => 'Product\\Controller\\ProductListController::indexAction' ))
);

// /{category}/{id}
// /product_series_A/item_foo
// /product_series_B/item_bar

$routes->add(
  'product_detail',
  new Routing\Route('/{category_id}/{product_id}', array( '_controller' => 'Product\\Controller\\ProductDetailController::indexAction' ))
);

return $routes;
