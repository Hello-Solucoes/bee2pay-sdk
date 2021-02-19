<?php


namespace Bee2Pay\Entities\Reservation;


class CreditCard
{
    public $cardTypeCode;
    public $expireDate;
    public $cardHolderName;
    public $cardNumber;
    public $cvv;


    /**
     * @return mixed
     */
    public function getCardTypeCode()
    {
        return $this->cardTypeCode;
    }

    /**
     * @param mixed $cardTypeCode
     */
    public function setCardTypeCode($cardTypeCode)
    {
        $this->cardTypeCode = $cardTypeCode;
    }

    /**
     * @return mixed
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * @param mixed $expireDate
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return mixed
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * @param mixed $cardHolderName
     */
    public function setCardHolderName($cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param mixed $cardNumber
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * @return mixed
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param mixed $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }


}