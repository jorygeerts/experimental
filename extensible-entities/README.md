# extensible entity manager
The basic idea is simple: I want to have entities, and I want to have modules. Oh, and those modules should be able to extend the entities in other modules.

The goal of this project is to make it possible to dynamically build entities (though this would work for every class) based on some kind of (programmed) configuration.
The result is a method to throw together a bunch of interfaces with an implementation (in the form of a trait) and turn that into a class.

The following code sets things up so that we have a *UserEntity* which gets extended with some methods from a *UserEntityBirthdayExtension*

```php
$eem = new EntityExtensionManager();

// See if things work. :)
$eem->registerEntity(UserEntity::class, UserEntityTrait::class);
$eem->registerExtension(UserEntity::class, BirthdayModule\UserWithBirthdayEntity::class, BirthdayModule\UserWithBirthdayEntityTrait::class);

$extendedUser = $eem->getExtendedEntity(UserEntity::class);
```