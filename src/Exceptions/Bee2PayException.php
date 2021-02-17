<?php


namespace Bee2Pay\Exceptions;


class Bee2PayException extends \Exception
{
    public function __construct($message = null, $code = 0)
    {
        parent::__construct($message, $code);
    }
}