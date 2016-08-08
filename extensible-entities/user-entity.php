<?php

/**
 * Interface UserEntity describes what it means to be a user.
 */
interface UserEntity extends IdentifiableEntity
{
    /**
     * @return string
     */
    public function getUsername();
    /**
     * @return string
     */
    public function getEmailAddress();
    /**
     * @return string
     */
    public function getPasswordHash();
}

/**
 * Class UserEntityTrait provides all you need to be a user.
 */
trait UserEntityTrait
{
    use IdentifiableEntityTrait;

    protected $username;
    protected $emailAddress;
    protected $passwordHash;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }
}

///**
// * Class UserEntityImplementation is the standard implementation for a user.
// */
//class UserEntityImplementation implements UserEntity
//{
//    use IdentifiableEntityTrait, UserEntityTrait;
//}