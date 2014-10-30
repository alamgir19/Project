<?php

namespace Project\bundle\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUsers
 */
class AdminUsers
{
    /**
     * @var boolean
     */
    private $adtypeId;

    /**
     * @var string
     */
    private $aduserName;

    /**
     * @var string
     */
    private $aduserPass;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $aduserDate;

    /**
     * @var \DateTime
     */
    private $aduserTime;

    /**
     * @var string
     */
    private $candelete;

    /**
     * @var boolean
     */
    private $aduserId;


    /**
     * Set adtypeId
     *
     * @param boolean $adtypeId
     * @return AdminUsers
     */
    public function setAdtypeId($adtypeId)
    {
        $this->adtypeId = $adtypeId;

        return $this;
    }

    /**
     * Get adtypeId
     *
     * @return boolean 
     */
    public function getAdtypeId()
    {
        return $this->adtypeId;
    }

    /**
     * Set aduserName
     *
     * @param string $aduserName
     * @return AdminUsers
     */
    public function setAduserName($aduserName)
    {
        $this->aduserName = $aduserName;

        return $this;
    }

    /**
     * Get aduserName
     *
     * @return string 
     */
    public function getAduserName()
    {
        return $this->aduserName;
    }

    /**
     * Set aduserPass
     *
     * @param string $aduserPass
     * @return AdminUsers
     */
    public function setAduserPass($aduserPass)
    {
        $this->aduserPass = $aduserPass;

        return $this;
    }

    /**
     * Get aduserPass
     *
     * @return string 
     */
    public function getAduserPass()
    {
        return $this->aduserPass;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return AdminUsers
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set aduserDate
     *
     * @param \DateTime $aduserDate
     * @return AdminUsers
     */
    public function setAduserDate($aduserDate)
    {
        $this->aduserDate = $aduserDate;

        return $this;
    }

    /**
     * Get aduserDate
     *
     * @return \DateTime 
     */
    public function getAduserDate()
    {
        return $this->aduserDate;
    }

    /**
     * Set aduserTime
     *
     * @param \DateTime $aduserTime
     * @return AdminUsers
     */
    public function setAduserTime($aduserTime)
    {
        $this->aduserTime = $aduserTime;

        return $this;
    }

    /**
     * Get aduserTime
     *
     * @return \DateTime 
     */
    public function getAduserTime()
    {
        return $this->aduserTime;
    }

    /**
     * Set candelete
     *
     * @param string $candelete
     * @return AdminUsers
     */
    public function setCandelete($candelete)
    {
        $this->candelete = $candelete;

        return $this;
    }

    /**
     * Get candelete
     *
     * @return string 
     */
    public function getCandelete()
    {
        return $this->candelete;
    }

    /**
     * Get aduserId
     *
     * @return boolean 
     */
    public function getAduserId()
    {
        return $this->aduserId;
    }
}
