<?php

/**
 * To create new API calls, you have to instanciate the API controller and start adding endpoints
*/
$api = new \WPAS\Controller\WPASAPIController([ 
    'version' => '1', 
    'application_name' => 'sample_api', 
    'namespace' => 'Rigo\\Controller\\' 
]);


/**
 * Then you can start adding each endpoint one by one
*/
$api->get([ 'path' => '/courses', 'controller' => 'SampleController:getDraftCourses' ]); 
$api->get([ 'path' => '/users', 'controller' => 'SampleController:getDraftUsers' ]); 
$api->get([ 'path' => '/toiletpapers', 'controller' => 'SampleController:getDraftToiletpapers' ]); 
$api->get([ 'path' => '/soaps', 'controller' => 'SampleController:getDraftSoaps' ]);
$api->get([ 'path' => '/wipes', 'controller' => 'SampleController:getDraftWipes' ]);
$api->get([ 'path' => '/masks', 'controller' => 'SampleController:getDraftMasks' ]);
$api->get([ 'path' => '/essentials', 'controller' => 'SampleController:getDraftEssentials' ]);
$api->post([ 'path' => '/createuser', 'controller' => 'SampleController:addUser' ]); 
$api->post([ 'path' => '/createessential', 'controller' => 'SampleController:addEssential' ]); 

