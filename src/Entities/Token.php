<?php


namespace Bee2Pay\Entities;


/**
 * Class Token
 * @package Bee2Pay\Entities
 */
class Token
{
    /**
     * @var
     */
    public $token;

    /**
     * Token constructor.
     * @param null $token
     */
    public function __construct($token = null)
    {
        if ($token) {
            $this->setToken($token);
        }
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

}