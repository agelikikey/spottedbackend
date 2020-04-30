<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Wipe extends BasePostType{
     public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['brand'] = get_field( 'brand', $object->ID );
        $arrayObject['price'] = get_field( 'price', $object->ID );
        $arrayObject['location'] = get_field( 'location', $object->ID );
        $arrayObject['date'] = get_field( 'date', $object->ID );
        return $arrayObject;
        
    }
}

?>