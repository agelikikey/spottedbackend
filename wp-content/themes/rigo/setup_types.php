<?php

/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new \WPAS\Types\PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
$typeManager->newType(['type' => 'course', 'class' => 'Course'])->register();
$typeManager->newType(['type' => 'user', 'class' => 'User'])->register();
$typeManager->newType(['type' => 'toiletpaper', 'class' => 'Toiletpaper'])->register();
$typeManager->newType(['type' => 'soap', 'class' => 'Soap'])->register();
$typeManager->newType(['type' => 'wipe', 'class' => 'Wipe'])->register();
$typeManager->newType(['type' => 'mask', 'class' => 'Mask'])->register();
$typeManager->newType(['type' => 'essential', 'class' => 'Essential'])->register();