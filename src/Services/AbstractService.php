<?php


namespace Bee2Pay\Services;


use Bee2Pay\Api\ApiClient;
use Bee2Pay\Constants\Endpoints;
use Bee2Pay\Constants\Methods;

abstract class AbstractService
{
    private $api;

    public function __construct($token, $production)
    {
        $this->api = new ApiClient($token, $production);
    }

    public function test()
    {
        return $this->sendRequest(Methods::POST, Endpoints::TEST_ENDPOINT, '');
    }

    protected function sendRequest($method, $endpoint, $body)
    {
        $request = $this->api->makeRequest($method, $endpoint, $body);
        return $this->api->send($request);
    }
}
