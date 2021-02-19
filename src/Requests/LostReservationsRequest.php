<?php


namespace Bee2Pay\Requests;


class LostReservationsRequest
{
    public  $sessionUrl;
    public  $sessionId;
    public  $sessionDate;
    public  $sessionIP;
    public  $sessionDeviceType;
    public  $sessionSource;
    public  $hotelId;
    public  $hotelName;
    public  $hotelChainName;
    public  $buyerId;
    public  $buyerEmail;
    public  $buyerPhone;
    public  $buyerLanguage;
    public  $buyerRemarketingEnabled;
    public  $buyerRemarketingExpirationDate;
    public  $buyerRemarketingCookiesDenied;
    public  $buyerPurchased;
    public  $hotelReservationLocator;
    public  $hotelReservationStartDate;
    public  $hotelReservationEndDate;
    public  $hotelTotalPriceValue;
    public  $hotelTotalPriceCurrencyCode;
    public  $hotelRoomCount;
    public  $hotelOccupancyAdultsCount;
    public  $hotelOccupancyChildrenCount;
    public  $hotelOccupancyChildrenAges;
    public  $hotelGuestFirstName;
    public  $hotelGuestLastName;
    public  $hotelGuestPhone;
    public  $hotelGuestEmail;
    public  $hotelGuestAddress;
    public  $hotelGuestZipCode;
    public  $hotelGuestDistrict;
    public  $hotelGuestCity;
    public  $hotelGuestState;
    public  $hotelGuestCountryCode;
    public  $hotelRooms;
    public  $hotelExtras;
    public  $hotelPolicies;
    public  $hotelPaymentOptionId;
    public  $hotelPaymentOptionName;
    public  $hotelSpecialRequests;
    public  $hotelTransfers;
    public  $loyaltyCard;

    /**
     * @return mixed
     */
    public function getSessionUrl()
    {
        return $this->sessionUrl;
    }

    /**
     * @param mixed $sessionUrl
     */
    public function setSessionUrl($sessionUrl)
    {
        $this->sessionUrl = $sessionUrl;
    }

    /**
     * @return mixed
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param mixed $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    /**
     * @return mixed
     */
    public function getSessionDate()
    {
        return $this->sessionDate;
    }

    /**
     * @param mixed $sessionDate
     */
    public function setSessionDate($sessionDate)
    {
        $this->sessionDate = $sessionDate;
    }

    /**
     * @return mixed
     */
    public function getSessionIP()
    {
        return $this->sessionIP;
    }

    /**
     * @param mixed $sessionIP
     */
    public function setSessionIP($sessionIP)
    {
        $this->sessionIP = $sessionIP;
    }

    /**
     * @return mixed
     */
    public function getSessionDeviceType()
    {
        return $this->sessionDeviceType;
    }

    /**
     * @param mixed $sessionDeviceType
     */
    public function setSessionDeviceType($sessionDeviceType)
    {
        $this->sessionDeviceType = $sessionDeviceType;
    }

    /**
     * @return mixed
     */
    public function getSessionSource()
    {
        return $this->sessionSource;
    }

    /**
     * @param mixed $sessionSource
     */
    public function setSessionSource($sessionSource)
    {
        $this->sessionSource = $sessionSource;
    }

    /**
     * @return mixed
     */
    public function getHotelId()
    {
        return $this->hotelId;
    }

    /**
     * @param mixed $hotelId
     */
    public function setHotelId($hotelId)
    {
        $this->hotelId = $hotelId;
    }

    /**
     * @return mixed
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * @param mixed $hotelName
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
    }

    /**
     * @return mixed
     */
    public function getHotelChainName()
    {
        return $this->hotelChainName;
    }

    /**
     * @param mixed $hotelChainName
     */
    public function setHotelChainName($hotelChainName)
    {
        $this->hotelChainName = $hotelChainName;
    }

    /**
     * @return mixed
     */
    public function getBuyerId()
    {
        return $this->buyerId;
    }

    /**
     * @param mixed $buyerId
     */
    public function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return mixed
     */
    public function getBuyerEmail()
    {
        return $this->buyerEmail;
    }

    /**
     * @param mixed $buyerEmail
     */
    public function setBuyerEmail($buyerEmail)
    {
        $this->buyerEmail = $buyerEmail;
    }

    /**
     * @return mixed
     */
    public function getBuyerPhone()
    {
        return $this->buyerPhone;
    }

    /**
     * @param mixed $buyerPhone
     */
    public function setBuyerPhone($buyerPhone)
    {
        $this->buyerPhone = $buyerPhone;
    }

    /**
     * @return mixed
     */
    public function getBuyerLanguage()
    {
        return $this->buyerLanguage;
    }

    /**
     * @param mixed $buyerLanguage
     */
    public function setBuyerLanguage($buyerLanguage)
    {
        $this->buyerLanguage = $buyerLanguage;
    }

    /**
     * @return mixed
     */
    public function getBuyerRemarketingEnabled()
    {
        return $this->buyerRemarketingEnabled;
    }

    /**
     * @param mixed $buyerRemarketingEnabled
     */
    public function setBuyerRemarketingEnabled($buyerRemarketingEnabled)
    {
        $this->buyerRemarketingEnabled = $buyerRemarketingEnabled;
    }

    /**
     * @return mixed
     */
    public function getBuyerRemarketingExpirationDate()
    {
        return $this->buyerRemarketingExpirationDate;
    }

    /**
     * @param mixed $buyerRemarketingExpirationDate
     */
    public function setBuyerRemarketingExpirationDate($buyerRemarketingExpirationDate)
    {
        $this->buyerRemarketingExpirationDate = $buyerRemarketingExpirationDate;
    }

    /**
     * @return mixed
     */
    public function getBuyerRemarketingCookiesDenied()
    {
        return $this->buyerRemarketingCookiesDenied;
    }

    /**
     * @param mixed $buyerRemarketingCookiesDenied
     */
    public function setBuyerRemarketingCookiesDenied($buyerRemarketingCookiesDenied)
    {
        $this->buyerRemarketingCookiesDenied = $buyerRemarketingCookiesDenied;
    }

    /**
     * @return mixed
     */
    public function getBuyerPurchased()
    {
        return $this->buyerPurchased;
    }

    /**
     * @param mixed $buyerPurchased
     */
    public function setBuyerPurchased($buyerPurchased)
    {
        $this->buyerPurchased = $buyerPurchased;
    }

    /**
     * @return mixed
     */
    public function getHotelReservationLocator()
    {
        return $this->hotelReservationLocator;
    }

    /**
     * @param mixed $hotelReservationLocator
     */
    public function setHotelReservationLocator($hotelReservationLocator)
    {
        $this->hotelReservationLocator = $hotelReservationLocator;
    }

    /**
     * @return mixed
     */
    public function getHotelReservationStartDate()
    {
        return $this->hotelReservationStartDate;
    }

    /**
     * @param mixed $hotelReservationStartDate
     */
    public function setHotelReservationStartDate($hotelReservationStartDate)
    {
        $this->hotelReservationStartDate = $hotelReservationStartDate;
    }

    /**
     * @return mixed
     */
    public function getHotelReservationEndDate()
    {
        return $this->hotelReservationEndDate;
    }

    /**
     * @param mixed $hotelReservationEndDate
     */
    public function setHotelReservationEndDate($hotelReservationEndDate)
    {
        $this->hotelReservationEndDate = $hotelReservationEndDate;
    }

    /**
     * @return mixed
     */
    public function getHotelTotalPriceValue()
    {
        return $this->hotelTotalPriceValue;
    }

    /**
     * @param mixed $hotelTotalPriceValue
     */
    public function setHotelTotalPriceValue($hotelTotalPriceValue)
    {
        $this->hotelTotalPriceValue = $hotelTotalPriceValue;
    }

    /**
     * @return mixed
     */
    public function getHotelTotalPriceCurrencyCode()
    {
        return $this->hotelTotalPriceCurrencyCode;
    }

    /**
     * @param mixed $hotelTotalPriceCurrencyCode
     */
    public function setHotelTotalPriceCurrencyCode($hotelTotalPriceCurrencyCode)
    {
        $this->hotelTotalPriceCurrencyCode = $hotelTotalPriceCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getHotelRoomCount()
    {
        return $this->hotelRoomCount;
    }

    /**
     * @param mixed $hotelRoomCount
     */
    public function setHotelRoomCount($hotelRoomCount)
    {
        $this->hotelRoomCount = $hotelRoomCount;
    }

    /**
     * @return mixed
     */
    public function getHotelOccupancyAdultsCount()
    {
        return $this->hotelOccupancyAdultsCount;
    }

    /**
     * @param mixed $hotelOccupancyAdultsCount
     */
    public function setHotelOccupancyAdultsCount($hotelOccupancyAdultsCount)
    {
        $this->hotelOccupancyAdultsCount = $hotelOccupancyAdultsCount;
    }

    /**
     * @return mixed
     */
    public function getHotelOccupancyChildrenCount()
    {
        return $this->hotelOccupancyChildrenCount;
    }

    /**
     * @param mixed $hotelOccupancyChildrenCount
     */
    public function setHotelOccupancyChildrenCount($hotelOccupancyChildrenCount)
    {
        $this->hotelOccupancyChildrenCount = $hotelOccupancyChildrenCount;
    }

    /**
     * @return mixed
     */
    public function getHotelOccupancyChildrenAges()
    {
        return $this->hotelOccupancyChildrenAges;
    }

    /**
     * @param mixed $hotelOccupancyChildrenAges
     */
    public function setHotelOccupancyChildrenAges($hotelOccupancyChildrenAges)
    {
        $this->hotelOccupancyChildrenAges = $hotelOccupancyChildrenAges;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestFirstName()
    {
        return $this->hotelGuestFirstName;
    }

    /**
     * @param mixed $hotelGuestFirstName
     */
    public function setHotelGuestFirstName($hotelGuestFirstName)
    {
        $this->hotelGuestFirstName = $hotelGuestFirstName;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestLastName()
    {
        return $this->hotelGuestLastName;
    }

    /**
     * @param mixed $hotelGuestLastName
     */
    public function setHotelGuestLastName($hotelGuestLastName)
    {
        $this->hotelGuestLastName = $hotelGuestLastName;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestPhone()
    {
        return $this->hotelGuestPhone;
    }

    /**
     * @param mixed $hotelGuestPhone
     */
    public function setHotelGuestPhone($hotelGuestPhone)
    {
        $this->hotelGuestPhone = $hotelGuestPhone;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestEmail()
    {
        return $this->hotelGuestEmail;
    }

    /**
     * @param mixed $hotelGuestEmail
     */
    public function setHotelGuestEmail($hotelGuestEmail)
    {
        $this->hotelGuestEmail = $hotelGuestEmail;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestAddress()
    {
        return $this->hotelGuestAddress;
    }

    /**
     * @param mixed $hotelGuestAddress
     */
    public function setHotelGuestAddress($hotelGuestAddress)
    {
        $this->hotelGuestAddress = $hotelGuestAddress;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestZipCode()
    {
        return $this->hotelGuestZipCode;
    }

    /**
     * @param mixed $hotelGuestZipCode
     */
    public function setHotelGuestZipCode($hotelGuestZipCode)
    {
        $this->hotelGuestZipCode = $hotelGuestZipCode;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestDistrict()
    {
        return $this->hotelGuestDistrict;
    }

    /**
     * @param mixed $hotelGuestDistrict
     */
    public function setHotelGuestDistrict($hotelGuestDistrict)
    {
        $this->hotelGuestDistrict = $hotelGuestDistrict;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestCity()
    {
        return $this->hotelGuestCity;
    }

    /**
     * @param mixed $hotelGuestCity
     */
    public function setHotelGuestCity($hotelGuestCity)
    {
        $this->hotelGuestCity = $hotelGuestCity;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestState()
    {
        return $this->hotelGuestState;
    }

    /**
     * @param mixed $hotelGuestState
     */
    public function setHotelGuestState($hotelGuestState)
    {
        $this->hotelGuestState = $hotelGuestState;
    }

    /**
     * @return mixed
     */
    public function getHotelGuestCountryCode()
    {
        return $this->hotelGuestCountryCode;
    }

    /**
     * @param mixed $hotelGuestCountryCode
     */
    public function setHotelGuestCountryCode($hotelGuestCountryCode)
    {
        $this->hotelGuestCountryCode = $hotelGuestCountryCode;
    }

    /**
     * @return mixed
     */
    public function getHotelRooms()
    {
        return $this->hotelRooms;
    }

    /**
     * @param mixed $hotelRooms
     */
    public function setHotelRooms($hotelRooms)
    {
        $this->hotelRooms = $hotelRooms;
    }

    /**
     * @return mixed
     */
    public function getHotelExtras()
    {
        return $this->hotelExtras;
    }

    /**
     * @param mixed $hotelExtras
     */
    public function setHotelExtras($hotelExtras)
    {
        $this->hotelExtras = $hotelExtras;
    }

    /**
     * @return mixed
     */
    public function getHotelPolicies()
    {
        return $this->hotelPolicies;
    }

    /**
     * @param mixed $hotelPolicies
     */
    public function setHotelPolicies($hotelPolicies)
    {
        $this->hotelPolicies = $hotelPolicies;
    }

    /**
     * @return mixed
     */
    public function getHotelPaymentOptionId()
    {
        return $this->hotelPaymentOptionId;
    }

    /**
     * @param mixed $hotelPaymentOptionId
     */
    public function setHotelPaymentOptionId($hotelPaymentOptionId)
    {
        $this->hotelPaymentOptionId = $hotelPaymentOptionId;
    }

    /**
     * @return mixed
     */
    public function getHotelPaymentOptionName()
    {
        return $this->hotelPaymentOptionName;
    }

    /**
     * @param mixed $hotelPaymentOptionName
     */
    public function setHotelPaymentOptionName($hotelPaymentOptionName)
    {
        $this->hotelPaymentOptionName = $hotelPaymentOptionName;
    }

    /**
     * @return mixed
     */
    public function getHotelSpecialRequests()
    {
        return $this->hotelSpecialRequests;
    }

    /**
     * @param mixed $hotelSpecialRequests
     */
    public function setHotelSpecialRequests($hotelSpecialRequests)
    {
        $this->hotelSpecialRequests = $hotelSpecialRequests;
    }

    /**
     * @return mixed
     */
    public function getHotelTransfers()
    {
        return $this->hotelTransfers;
    }

    /**
     * @param mixed $hotelTransfers
     */
    public function setHotelTransfers($hotelTransfers)
    {
        $this->hotelTransfers = $hotelTransfers;
    }

    /**
     * @return mixed
     */
    public function getLoyaltyCard()
    {
        return $this->loyaltyCard;
    }

    /**
     * @param mixed $loyaltyCard
     */
    public function setLoyaltyCard($loyaltyCard)
    {
        $this->loyaltyCard = $loyaltyCard;
    }


}