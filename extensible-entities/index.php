<?php
/**
 * Created by PhpStorm.
 * User: jgeerts
 * Date: 7-8-16
 * Time: 11:28
 */

// Get our entity descreiptions.
require 'identifiable-entity.php';
require 'user-entity.php';
require 'user-entity-birthday-extension.php';

//  Setup the entity extension manager
require 'entity-extension-manager.php';
$eem = new EntityExtensionManager();

// See if things work. :)
$eem->registerEntity(UserEntity::class, UserEntityTrait::class);
$eem->registerExtension(UserEntity::class, BirthdayModule\UserWithBirthdayEntity::class, BirthdayModule\UserWithBirthdayEntityTrait::class);

$extendedUser = $eem->getExtendedEntity(UserEntity::class);

var_dump($extendedUser);


