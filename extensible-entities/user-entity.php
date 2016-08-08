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

    /**
     * @param string $username
     * @return void
     */
    public function setUsername($username);

    /**
     * @param string $emailAddress
     * @return void
     */
    public function setEmailAddress($emailAddress);

    /**
     * @param string $passwordHash
     * @return void
     */
    public function setPasswordHash($passwordHash);
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

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @param string $passwordHash
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;
    }
}