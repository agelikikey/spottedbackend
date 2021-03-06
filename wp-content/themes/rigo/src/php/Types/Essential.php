<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Essential extends BasePostType{
     public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['itemname'] = get_field( 'itemname', $object->ID );
        $arrayObject['price'] = get_field( 'price', $object->ID );
        $arrayObject['zip'] = get_field( 'zip', $object->ID );
        $arrayObject['img'] = get_field( 'img', $object->ID );
        return $arrayObject;
        
    }
}

?>