<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\User;
use Rigo\Types\Toiletpaper;
use Rigo\Types\Soap;
use Rigo\Types\Wipe;
use Rigo\Types\Mask;
use Rigo\Types\Essential;
use WP_REST_Request;


class SampleController{
    
    public function getHomeData(){
        return [
            'name' => 'Rigoberto'
        ];
    }
    
    public function getDraftCourses(){
        $query = Course::all([ 'status' => 'draft' ]);
        return $query->posts;
    }

     public function getDraftUsers(){
        $query = User::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $user) {
            $lst[] = User::serialize($user);
        }
        return $lst;
    }

     public function getDraftToiletpapers(){
        $query = Toiletpaper::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $toiletpaper) {
            $lst[] = Toiletpaper::serialize($toiletpaper);
        }
        return $lst;
    }
     public function getDraftSoaps(){
        $query = Soap::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $soap) {
            $lst[] = Soap::serialize($soap);
        }
        return $lst;
    }
      public function getDraftWipes(){
        $query = Wipe::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $wipe) {
            $lst[] = Wipe::serialize($wipe);
        }
        return $lst;
    }
      public function getDraftMasks(){
        $query = Mask::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $mask) {
            $lst[] = Mask::serialize($mask);
        }
        return $lst;
    }
    public function getDraftEssentials(){
        $query = Essential::all([ 'status' => 'draft' ]);
        $lst = [];
        forEach($query->posts as $essential) {
            $lst[] = Essential::serialize($essential);
        }
        return $lst;
    }
    public function addUser( WP_REST_Request $request ) {
        
        $json = json_decode( $request->get_body() );
        
        $id = wp_insert_post([
            'post_author' => '1', 
            'post_type'=>'user',
            'post_title' => $json->post_title,
            'post_status' => 'publish',
        ]);
        update_post_meta( $id, 'firstname', $json->firstname );
        update_post_meta( $id, 'lastname', $json->lastname );
        update_post_meta( $id, 'phonenumber', $json->phonenumber );
        update_post_meta( $id, 'password', $json->password );
        update_post_meta( $id, 'city', $json->city );
        update_post_meta( $id, 'state', $json->state );
        update_post_meta( $id, 'zip', $json->zip );




        
        return 'Post created';

    }
    public function addEssential( WP_REST_Request $request ) {
        
        $json = json_decode( $request->get_body() );
        
        $id = wp_insert_post([
            'post_author' => '1', 
            'post_type'=>'essential',
            'post_title' => $json->post_title,
            'post_status' => 'publish',
        ]);
        update_post_meta( $id, 'itemname', $json->itemname );
        update_post_meta( $id, 'price', $json->price );
        update_post_meta( $id, 'zip', $json->zip );




       
        
        return 'Post created';

    }
}
?>