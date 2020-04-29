<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\User;
use Rigo\Types\Toiletpaper;
use Rigo\Types\Soap;
use Rigo\Types\Wipe;
use Rigo\Types\Mask;
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
    public function addUser( WP_REST_Request $request ) {
        
        $json = json_decode( $request->get_body() );
        
        $id = wp_insert_post([
            'post_author' => '1', 
            'post_type'=>'user',
            'post_title' => $json->post_title,
            'post_status' => 'publish',
        ]);
        update_post_meta( $id, 'firstname', $json->firstname );
       
        
        return 'Post created';

    }
}
?>