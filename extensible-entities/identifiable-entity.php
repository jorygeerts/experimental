<?php
/**
 * Created by PhpStorm.
 * User: jgeerts
 * Date: 7-8-16
 * Time: 11:36
 */

/**
 * Interface IdentifiableEntity describes what is needed to "have  an identity".
 */
interface IdentifiableEntity
{
    /**
     * @return integer
     */
    public function getId();
}

/**
 * Class IdentifiableEntityTrait provides all the things needed to become identifiable.
 */
trait IdentifiableEntityTrait
{
    protected $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}