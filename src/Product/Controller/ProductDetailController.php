<?php
 
namespace Product\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Product\Model\Product;
use Product\Model\Category;

class ProductDetailController
{
    public function indexAction(Request $request, $category_id, $product_id)
    {
        $category = new Category();
        $product = new Product();
        $raw = $product->get($category_id, $product_id);
        if ($raw!==false) {
            $loader = new \Twig_Loader_String();
            $twig = new \Twig_Environment($loader);
            $raw['page_title'] = $raw['name'];
            $raw['page_content'] = $twig->render(file_get_contents(__DIR__.'/../View/detail_template.php'), $raw);
            return new Response($twig->render(file_get_contents(__DIR__.'/../../template.php'), $raw));
        }
        
        return new Response('Specified Production Name is undefined in this site.');
    }
}