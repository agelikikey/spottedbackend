<?php
namespace Rigo\Controller;

use Rigo\Types\Course;
use Rigo\Types\User;

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
    
}
?>