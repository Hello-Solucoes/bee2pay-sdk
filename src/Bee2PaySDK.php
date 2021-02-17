<?php


namespace Bee2Pay;


use Bee2Pay\Entities\Token;
use Bee2Pay\Requests\ReservationRequest;
use Bee2Pay\Services\VCNService;

class Bee2PaySDK
{
    private $vcnService;

    public function __construct($token, $production = true)
    {
        $this->vcnService = new VCNService($token, $production);
    }

    public function test()
    {
        return $this->vcnService->test();
    }

    public function create(ReservationRequest $request)
    {
        return $this->vcnService->createReservation($request);

    }

    public function cancelByReservationId($reservationId)
    {
        return $this->vcnService->cancelByReservationId($reservationId);
    }

    public function getReservationById($reservationId)
    {
        return $this->vcnService->getByReservationId($reservationId);

    }

    public function updateReservationData($reservationId, $request)
    {
        return $this->vcnService->updateReservation($reservationId, $request);

    }

    public function getVcnByToken($reservationId, $token)
    {
        if(!$token instanceof Token){
            $token = new Token($token);
        }
        return $this->vcnService->getVcnByToken($reservationId, $token);

    }

    public function newExtrasVcn($reservationId, $vcn)
    {
        return $this->vcnService->newExtrasVcn($reservationId, $vcn);

    }
    public function cancelExtrasVcn($reservationId, $vcnId)
    {
        return $this->vcnService->cancelVcnExtra($reservationId, $vcnId);

    }
    public function getExtrasVcn($reservationId, $vcnId, $token)
    {
        return $this->vcnService->getExtrasVcn($reservationId,$vcnId,$token);

    }
}