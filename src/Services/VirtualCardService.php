<?php

namespace Bee2Pay\Services;

use Bee2Pay\Constants\Methods;
use Bee2Pay\Helpers\ApiUtils;
use Bee2Pay\Constants\Endpoints;
use Bee2Pay\Requests\VcnRequest;

class VirtualCardService extends AbstractService
{

    public function create(VcnRequest $request)
    {
        return $this->sendRequest(Methods::POST, Endpoints::VCN_ENDPOINT, ApiUtils::encodeRequest($request));
    }

    public function update($virtualCardId, VcnRequest $request)
    {

        return $this->sendRequest(Methods::PATCH, ApiUtils::getVcnEndpoint($virtualCardId), ApiUtils::encodeRequest($request));
    }

    public function cancel($virtualCardId)
    {
        return $this->sendRequest(Methods::DELETE, ApiUtils::getVcnEndpoint($virtualCardId), '');
    }

    public function get($virtualCardId)
    {
        return $this->sendRequest(Methods::GET, ApiUtils::getVcnEndpoint($virtualCardId), '');
    }
}
