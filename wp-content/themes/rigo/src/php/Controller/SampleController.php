<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\User;
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