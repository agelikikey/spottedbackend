<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class User extends BasePostType{
     public static function serialize($object){
        
        $arrayObject = (array) $object;
        $arrayObject['firstname'] = get_field( 'firstname', $object->ID );
        $arrayObject['lastname'] = get_field( 'lastname', $object->ID );
        $arrayObject['phonenumber'] = get_field( 'phonenumber', $object->ID );
        $arrayObject['password'] = get_field( 'password', $object->ID );
        $arrayObject['city'] = get_field( 'city', $object->ID );
        $arrayObject['state'] = get_field( 'state', $object->ID );
        $arrayObject['zip'] = get_field( 'zip', $object->ID );
        return $arrayObject;
        
    }
}

?>