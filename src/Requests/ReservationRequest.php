<?php


namespace Bee2Pay\Requests;


use Bee2Pay\Entities\Service;
use Bee2Pay\Entities\Traveller;
use Bee2Pay\Entities\Vcn;

/**
 * Class ReservationRequest
 * @package Bee2Pay\Requests
 */
class ReservationRequest
{
    /**
     * @var string
     */
    public $locator;
    /**
     * @var string
     */
    public $refCode;
    /**
     * @var array
     */
    public $tags;
    /**
     * @var string
     */
    public $createdBy;
    /**
     * @var string
     */
    public $createdByName;
    /**
     * @var Vcn
     */
    public $vcn;
    /**
     * @var Traveller
     */
    public $traveller;
    /**
     * @var Service
     */
    public $service;

    /**
     * ReservationRequest constructor.
     */
    public function __construct()
    {
        $this->setVcn(new Vcn());
        $this->setService(new Service());
        $this->setTraveller(new Traveller());
    }

    /**
     * @return mixed
     */
    public function getLocator()
    {
        return $this->locator;
    }

    /**
     * @param mixed $locator
     */
    public function setLocator($locator)
    {
        $this->locator = $locator;
    }

    /**
     * @return mixed
     */
    public function getRefCode()
    {
        return $this->refCode;
    }

    /**
     * @param mixed $refCode
     */
    public function setRefCode($refCode)
    {
        $this->refCode = $refCode;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getCreatedByName()
    {
        return $this->createdByName;
    }

    /**
     * @param mixed $createdByName
     */
    public function setCreatedByName($createdByName)
    {
        $this->createdByName = $createdByName;
    }

    /**
     * @return mixed
     */
    public function getVcn()
    {
        return $this->vcn;
    }

    /**
     * @param mixed $vcn
     */
    public function setVcn($vcn)
    {
        $this->vcn = $vcn;
    }

    /**
     * @return mixed
     */
    public function getTraveller()
    {
        return $this->traveller;
    }

    /**
     * @param mixed $traveller
     */
    public function setTraveller($traveller)
    {
        $this->traveller = $traveller;
    }

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param mixed $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }


}