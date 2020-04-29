<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Toiletpaper extends BasePostType{
     public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['brand'] = get_field( 'brand', $object->ID );
        $arrayObject['price'] = get_field( 'price', $object->ID );
        $arrayObject['location'] = get_field( 'location', $object->ID );
        $arrayObject['image'] = get_field( 'image', $object->ID );
        return $arrayObject;
        
    }
}

?>