<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlightwatchInfo
 */
class FlightwatchInfo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pointType;

    /**
     * @var string
     */
    private $pointName;

    /**
     * @var \DateTime
     */
    private $eto;

    /**
     * @var float
     */
    private $ebo;

    /**
     * @var string
     */
    private $airports;

    /**
     * @var \AppBundle\Entity\Flightwatch
     */
    private $flight;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pointType
     *
     * @param string $pointType
     * @return FlightwatchInfo
     */
    public function setPointType($pointType)
    {
        $this->pointType = $pointType;

        return $this;
    }

    /**
     * Get pointType
     *
     * @return string 
     */
    public function getPointType()
    {
        return $this->pointType;
    }

    /**
     * Set pointName
     *
     * @param string $pointName
     * @return FlightwatchInfo
     */
    public function setPointName($pointName)
    {
        $this->pointName = $pointName;

        return $this;
    }

    /**
     * Get pointName
     *
     * @return string 
     */
    public function getPointName()
    {
        return $this->pointName;
    }

    /**
     * Set eto
     *
     * @param \DateTime $eto
     * @return FlightwatchInfo
     */
    public function setEto($eto)
    {
        $this->eto = $eto;

        return $this;
    }

    /**
     * Get eto
     *
     * @return \DateTime 
     */
    public function getEto()
    {
        return $this->eto;
    }

    /**
     * Set ebo
     *
     * @param float $ebo
     * @return FlightwatchInfo
     */
    public function setEbo($ebo)
    {
        $this->ebo = $ebo;

        return $this;
    }

    /**
     * Get ebo
     *
     * @return float 
     */
    public function getEbo()
    {
        return $this->ebo;
    }

    /**
     * Set airports
     *
     * @param string $airports
     * @return FlightwatchInfo
     */
    public function setAirports($airports)
    {
        $this->airports = $airports;

        return $this;
    }

    /**
     * Get airports
     *
     * @return string 
     */
    public function getAirports()
    {
        return $this->airports;
    }

    /**
     * Set flight
     *
     * @param \AppBundle\Entity\Flightwatch $flight
     * @return FlightwatchInfo
     */
    public function setFlight(\AppBundle\Entity\Flightwatch $flight = null)
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Get flight
     *
     * @return \AppBundle\Entity\Flightwatch 
     */
    public function getFlight()
    {
        return $this->flight;
    }
    /**
     * @var boolean
     */
    private $completed;


    /**
     * Set completed
     *
     * @param boolean $completed
     * @return FlightwatchInfo
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return boolean 
     */
    public function getCompleted()
    {
        return $this->completed;
    }
    /**
     * @var \DateTime
     */
    private $completed_on;


    /**
     * Set completed_on
     *
     * @param \DateTime $completedOn
     * @return FlightwatchInfo
     */
    public function setCompletedOn($completedOn)
    {
        $this->completed_on = $completedOn;

        return $this;
    }

    /**
     * Get completed_on
     *
     * @return \DateTime 
     */
    public function getCompletedOn()
    {
        return $this->completed_on;
    }
}