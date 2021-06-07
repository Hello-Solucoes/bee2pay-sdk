<?php


namespace Bee2Pay\Helpers;


use Bee2Pay\Constants\Endpoints;

class ApiUtils
{
    public static function getReservationEndpoint($reservationId)
    {
        return Endpoints::RESERVATIONS_ENDPOINT . self::forwardSlash($reservationId);
    }

    public static function getVcnEndpoint($reservationId)
    {
        return Endpoints::VCN_ENDPOINT . self::forwardSlash($reservationId);
    }

    public static function getReservationVcnEndpoint($reservationId)
    {
        return Endpoints::RESERVATIONS_ENDPOINT . self::forwardSlash($reservationId) . Endpoints::VCN_ENDPOINT;
    }

    public static function getReservationExtrasEndpoint($reservationId, $vcnId = null)
    {
        return Endpoints::RESERVATIONS_ENDPOINT . self::forwardSlash($reservationId) . Endpoints::EXTRAS_VCN_ENDPOINT . self::forwardSlash($vcnId);
    }

    private static function forwardSlash($value)
    {
        return $value ? '/' . $value : '';
    }

    public static function removeNullFields($object)
    {
        $vars = get_object_vars($object);
        foreach ($vars as $key => $value) {
            if (empty($object->$key) && $object->$key != '0') {
                unset($object->$key);
            } else if (is_object($object->$key)) {
                $object->$key = self::removeNullFields($object->$key);
            }
        }
        return $object;
    }

    public static function parseJsonResponseToClass($jsonResponse, $class){
        if(!class_exists($class, false)){
            return;
        }

        $object = new $class();
        $vars = get_object_vars($object);


    }

    public static function encodeRequest($request)
    {
        return json_encode(ApiUtils::removeNullFields($request), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }
}
