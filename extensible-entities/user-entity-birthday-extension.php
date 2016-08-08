<?php
/**
 * Created by PhpStorm.
 * User: jgeerts
 * Date: 7-8-16
 * Time: 11:41
 */

namespace BirthdayModule;

/**
 * Interface UserWithBirthdayEntity describes what it means to have a birthday
 */
interface UserWithBirthdayEntity extends \UserEntity
{
    /**
     * @return DateTime
     */
    public function getBirthday();
}

/**
 * Class UserWithBirthdayEntityTrait provides what is needed to have a birthday.
 */
trait UserWithBirthdayEntityTrait
{
    /**
     * @var DateTime
     */
    protected $birthday;

    /**
     * @return DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }
}