<?php

namespace Bee2Pay\Responses;


class ReservationResponse extends BaseResponse
{
    public $reservationId;
    public $locator;
    public $refCode;
    public $status;
    public $service;
    public $creditCard;

    /**
     * @return mixed
     */
    public function getReservationId()
    {
        return $this->reservationId;
    }

    /**
     * @param mixed $reservationId
     */
    public function setReservationId($reservationId)
    {
        $this->reservationId = $reservationId;
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return mixed
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * @param mixed $creditCard
     */
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
    }


}