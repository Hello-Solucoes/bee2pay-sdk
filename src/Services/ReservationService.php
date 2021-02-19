<?php


namespace Bee2Pay\Services;


use Bee2Pay\Api\ApiClient;
use Bee2Pay\Constants\Endpoints;
use Bee2Pay\Constants\Methods;
use Bee2Pay\Entities\Reservation\Token;
use Bee2Pay\Entities\Reservation\Vcn;
use Bee2Pay\Helpers\ApiUtils;
use Bee2Pay\Requests\ReservationRequest;

class ReservationService
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

    public function getByReservationId($reservationId)
    {
        return $this->sendRequest(Methods::GET, ApiUtils::getReservationEndpoint($reservationId), '');
    }

    public function cancelByReservationId($reservationId)
    {
        return $this->sendRequest(Methods::DELETE, ApiUtils::getReservationEndpoint($reservationId), '');
    }

    public function cancelVcnExtra($reservationId, $vcnId)
    {
        return $this->sendRequest(Methods::DELETE, ApiUtils::getReservationExtrasEndpoint($reservationId, $vcnId), '');
    }

    public function getVcnByToken($reservationId, Token $token)
    {
        return $this->sendRequest(Methods::POST, ApiUtils::getReservationVcnEndpoint($reservationId), ApiUtils::encodeRequest($token));

    }

    public function createReservation(ReservationRequest $request)
    {

        return $this->sendRequest(Methods::POST, Endpoints::RESERVATIONS_ENDPOINT, ApiUtils::encodeRequest($request));
    }

    public function updateReservation($reservationId, ReservationRequest $request)
    {

        return $this->sendRequest(Methods::PATCH, ApiUtils::getReservationEndpoint($reservationId), ApiUtils::encodeRequest($request));
    }

    public function getExtrasVcn($reservationId, $vcnId, Token $token)
    {

        return $this->sendRequest(Methods::POST, ApiUtils::getReservationExtrasEndpoint($reservationId, $vcnId), ApiUtils::encodeRequest($token));
    }


    public function newExtrasVcn($reservationId, Vcn $vcn)
    {
        return $this->sendRequest(Methods::POST, ApiUtils::getReservationExtrasEndpoint($reservationId), ApiUtils::encodeRequest($vcn));
    }


    private function sendRequest($method, $endpoint, $body)
    {
        $request = $this->api->makeRequest($method, $endpoint, $body);
        return $this->api->send($request);
    }
}