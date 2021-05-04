<?php

namespace Bee2Pay;

use Bee2Pay\Requests\ReservationRequest;
use Bee2Pay\Requests\VcnRequest;
use Bee2Pay\Services\VirtualCardService;

class VirtualCardSDK
{
    private $vcnService;

    public function __construct($token, $production = true)
    {
        $this->vcnService = new VirtualCardService($token, $production);
    }

    public function test()
    {
        return $this->vcnService->test();
    }


    public function create(VcnRequest $request)
    {
        return $this->vcnService->create($request);

    }

    public function cancel($virtualCardId)
    {
        return $this->vcnService->cancel($virtualCardId);
    }

    public function get($virtualCardId)
    {
        return $this->vcnService->get($virtualCardId);

    }

    public function update($virtualCardId, VcnRequest $request)
    {
        return $this->vcnService->update($virtualCardId, $request);

    }
}
