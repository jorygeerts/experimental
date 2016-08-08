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
     * @return \DateTime
     */
    public function getBirthday();

    /**
     * @param \DateTime $birthday
     * @return void
     */
    public function setBirthday(\DateTime $birthday);

    /**
     * @param \DateTime $currentDay
     * @return string
     */
    public function getBirthdayGreeting(\DateTime $currentDay);
}

/**
 * Class UserWithBirthdayEntityTrait provides what is needed to have a birthday.
 */
trait UserWithBirthdayEntityTrait
{
    /**
     * @var \DateTime
     */
    protected $birthday;

    /**
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param \DateTime $birthday
     */
    public function setBirthday(\DateTime $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @param \DateTime $currentDay
     * @return string
     */
    public function getBirthdayGreeting(\DateTime $currentDay)
    {
        if ($this->birthday->format('m-d') == $currentDay->format('m-d')) {
            return "Go " . $this->getUsername() . ", its your birthday! We gon' party like its your birthday!";
        }

        return "To bad, " . $this->getUsername() . " their birthday is on " . $this->getBirthday()->format('m-d') . ". :(";
    }
}