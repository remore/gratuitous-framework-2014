<?php
 
namespace Company\Controller;
 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyController
{
    public function indexAction(Request $request, $page)
    {
        if ($page==='index') {
            $loader = new \Twig_Loader_String();
            $twig = new \Twig_Environment($loader);
            return new Response( $twig->render(file_get_contents(__DIR__.'/../../template.php'), array(
                'page_title'=>'hello from CompanyController', 
                'page_content'=> file_get_contents(__DIR__.'/../View/'.$page.'.html')
            )) );
        }

        return new Response('Undefined Action in Company Controller');
    }
}