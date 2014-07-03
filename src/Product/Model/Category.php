<?php
 
namespace Product\Model;

use Symfony\Component\Yaml\Yaml;
 
class Category
{
    public function get($category_id)
    {
        $ret = false;
        $path = sprintf("%s\\..\\Data\\%s.yml", __DIR__, $category_id);
        if(file_exists($path)){
            $ret = Yaml::parse(file_get_contents($path));
        }
 
        return $ret;
    }
}
