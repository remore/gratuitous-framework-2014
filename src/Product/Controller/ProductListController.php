<?php
 
namespace Product\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Product\Model\Category;

class ProductListController
{
    public function indexAction(Request $request, $category_id)
    {
        $category = new Category();
        $raw = $category->get($category_id);
        if ($raw!==false) {
            $loader = new \Twig_Loader_String();
            $twig = new \Twig_Environment($loader);
            $raw['page_title'] = $raw['name'];
            $raw['page_content'] = $twig->render(file_get_contents(__DIR__.'/../View/list_template.php'), array( 'entries' => $raw ));
            return new Response($twig->render(file_get_contents(__DIR__.'/../../template.php'), $raw));
        }
        
        return new Response('There is no such category defined.');
    }
}