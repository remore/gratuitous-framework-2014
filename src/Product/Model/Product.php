<?php
 
namespace Product\Model;

use Symfony\Component\Yaml\Yaml;
 
class Product
{
    public function get($category_id, $product_id)
    {
        $ret = false;
        $path = sprintf("%s\\..\\Data\\%s.yml", __DIR__, $category_id);
        if(file_exists($path)){
            $yaml = Yaml::parse(file_get_contents($path));
            if (array_key_exists($product_id, $yaml)){
                $ret = $yaml[$product_id];
            }
        }
        return $ret;
    }
}
