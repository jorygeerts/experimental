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

    /**
     * @param integer $id
     * @return void
     */
    public function setId($id);
}

/**
 * Class IdentifiableEntityTrait provides all the things needed to become identifiable.
 */
trait IdentifiableEntityTrait
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}