<?php


namespace Bee2Pay\Entities;


use Bee2Pay\Enum\VcnOutput;

/**
 * Class Vcn
 * @package Bee2Pay\Entities
 */
class Vcn
{
    /**
     * @var string
     */
    public $output;
    /**
     * @var Price
     */
    public $total;
    /**
     * @var string
     */
    public $activationDate;
    /**
     * @var string
     */
    public $expirationDate;
    /**
     * @var string
     */
    public $description;

    /**
     * Vcn constructor.
     */
    public function __construct()
    {
        $this->setTotal(new Price());
        $this->setOutput(VcnOutput::TOKEN_OUTPUT);
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->total->value;
    }

    /**
     * @param mixed
     * $this->total->value
     */
    public function setValue($value)
    {
        $this->total->value = $value;
    }


    public function getCurrency()
    {
        return $this->total->currency;
    }

    /**
     * @param mixed
     * $this->total->value
     */
    public function setCurrency($currency)
    {
        $this->total->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param mixed $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    /**
     * @param mixed $activationDate
     */
    public function setActivationDate($activationDate)
    {
        $this->activationDate = $activationDate;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param mixed $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}