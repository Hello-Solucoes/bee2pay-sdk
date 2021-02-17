<?php


namespace Bee2Pay\Api;


use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
use Bee2Pay\Constants\Endpoints;
use Bee2Pay\Exceptions\Bee2PayException;

class ApiClient
{
    private $client;
    private $production;
    private $headers;
    private $baseUri = Endpoints::BASE_URI;

    public function __construct($token, $production)
    {
        $this->client = new \GuzzleHttp\Client(['base_uri' => $this->baseUri]);
        $this->production = $production;
        $this->headers = [
            'Accept' => 'application/json',
            'Authorization' => "Bearer {$token}",
        ];
    }

    public function makeRequest($method, $endpoint, $body)
    {
        $enviroment = $this->production ? Endpoints::PROD_ENVIROMENT : Endpoints::DEV_ENVIROMENT;

        return new Request($method, "{$this->baseUri}{$enviroment}{$endpoint}", $this->headers, $body);
    }

    public function send(Request $request)
    {
        try {

            $response = $this->client->send($request);
            return json_decode($response->getBody());

        } catch (ClientException $e) {
            throw new Bee2PayException($e->getMessage(), $e->getCode());
        }
    }
}