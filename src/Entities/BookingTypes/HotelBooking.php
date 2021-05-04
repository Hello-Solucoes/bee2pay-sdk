<?php

namespace Bee2Pay\Entities\BookingTypes;


use Bee2Pay\Constants\BookingType;
use Bee2Pay\Contracts\ValidBooking;

class HotelBooking implements ValidBooking
{
    public $hotelReservationLocator;
    public $hotelReservationStartDate;
    public $hotelReservationEndDate;
    public $hotelVat;
    public $hotelPhone;
    public $hotelEmail;
    public $hotelAddress;
    public $hotelZipCode;
    public $hotelDistrict;
    public $hotelCity;
    public $hotelState;
    public $hotelCountryCode;
    public $hotelGuestFirstName;
    public $hotelGuestLastName;
    public $hotelGuestPhone;
    public $hotelGuestEmail;
    public $hotelName;
    public $hotelTotalPriceValue;
    public $hotelTotalPriceCurrencyCode;
    public $hotelRateName;
    public $hotelRateCode;
    public $hotelRateOccupancy;
    public $hotelRateBoard;
    public $hotelTaxesTotalValue;
    public $hotelTaxesCurrencyCode;
    public $hotelExtrasTotalValue;
    public $hotelExtrasCurrencyCode;
    public $hotelComments;
    public $hotelCustomField1;
    public $hotelCustomField2;
    public $hotelCustomField3;
    public $hotelCustomField4;
    public $hotelCustomField5;


    public function getType()
    {
        return BookingType::HOTEL;
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
    public function getHotelVat()
    {
        return $this->hotelVat;
    }

    /**
     * @param mixed $hotelVat
     */
    public function setHotelVat($hotelVat)
    {
        $this->hotelVat = $hotelVat;
    }

    /**
     * @return mixed
     */
    public function getHotelPhone()
    {
        return $this->hotelPhone;
    }

    /**
     * @param mixed $hotelPhone
     */
    public function setHotelPhone($hotelPhone)
    {
        $this->hotelPhone = $hotelPhone;
    }

    /**
     * @return mixed
     */
    public function getHotelEmail()
    {
        return $this->hotelEmail;
    }

    /**
     * @param mixed $hotelEmail
     */
    public function setHotelEmail($hotelEmail)
    {
        $this->hotelEmail = $hotelEmail;
    }

    /**
     * @return mixed
     */
    public function getHotelAddress()
    {
        return $this->hotelAddress;
    }

    /**
     * @param mixed $hotelAddress
     */
    public function setHotelAddress($hotelAddress)
    {
        $this->hotelAddress = $hotelAddress;
    }

    /**
     * @return mixed
     */
    public function getHotelZipCode()
    {
        return $this->hotelZipCode;
    }

    /**
     * @param mixed $hotelZipCode
     */
    public function setHotelZipCode($hotelZipCode)
    {
        $this->hotelZipCode = $hotelZipCode;
    }

    /**
     * @return mixed
     */
    public function getHotelDistrict()
    {
        return $this->hotelDistrict;
    }

    /**
     * @param mixed $hotelDistrict
     */
    public function setHotelDistrict($hotelDistrict)
    {
        $this->hotelDistrict = $hotelDistrict;
    }

    /**
     * @return mixed
     */
    public function getHotelCity()
    {
        return $this->hotelCity;
    }

    /**
     * @param mixed $hotelCity
     */
    public function setHotelCity($hotelCity)
    {
        $this->hotelCity = $hotelCity;
    }

    /**
     * @return mixed
     */
    public function getHotelState()
    {
        return $this->hotelState;
    }

    /**
     * @param mixed $hotelState
     */
    public function setHotelState($hotelState)
    {
        $this->hotelState = $hotelState;
    }

    /**
     * @return mixed
     */
    public function getHotelCountryCode()
    {
        return $this->hotelCountryCode;
    }

    /**
     * @param mixed $hotelCountryCode
     */
    public function setHotelCountryCode($hotelCountryCode)
    {
        $this->hotelCountryCode = $hotelCountryCode;
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
    public function getHotelRateName()
    {
        return $this->hotelRateName;
    }

    /**
     * @param mixed $hotelRateName
     */
    public function setHotelRateName($hotelRateName)
    {
        $this->hotelRateName = $hotelRateName;
    }

    /**
     * @return mixed
     */
    public function getHotelRateCode()
    {
        return $this->hotelRateCode;
    }

    /**
     * @param mixed $hotelRateCode
     */
    public function setHotelRateCode($hotelRateCode)
    {
        $this->hotelRateCode = $hotelRateCode;
    }

    /**
     * @return mixed
     */
    public function getHotelRateOccupancy()
    {
        return $this->hotelRateOccupancy;
    }

    /**
     * @param mixed $hotelRateOccupancy
     */
    public function setHotelRateOccupancy($hotelRateOccupancy)
    {
        $this->hotelRateOccupancy = $hotelRateOccupancy;
    }

    /**
     * @return mixed
     */
    public function getHotelRateBoard()
    {
        return $this->hotelRateBoard;
    }

    /**
     * @param mixed $hotelRateBoard
     */
    public function setHotelRateBoard($hotelRateBoard)
    {
        $this->hotelRateBoard = $hotelRateBoard;
    }

    /**
     * @return mixed
     */
    public function getHotelTaxesTotalValue()
    {
        return $this->hotelTaxesTotalValue;
    }

    /**
     * @param mixed $hotelTaxesTotalValue
     */
    public function setHotelTaxesTotalValue($hotelTaxesTotalValue)
    {
        $this->hotelTaxesTotalValue = $hotelTaxesTotalValue;
    }

    /**
     * @return mixed
     */
    public function getHotelTaxesCurrencyCode()
    {
        return $this->hotelTaxesCurrencyCode;
    }

    /**
     * @param mixed $hotelTaxesCurrencyCode
     */
    public function setHotelTaxesCurrencyCode($hotelTaxesCurrencyCode)
    {
        $this->hotelTaxesCurrencyCode = $hotelTaxesCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getHotelExtrasTotalValue()
    {
        return $this->hotelExtrasTotalValue;
    }

    /**
     * @param mixed $hotelExtrasTotalValue
     */
    public function setHotelExtrasTotalValue($hotelExtrasTotalValue)
    {
        $this->hotelExtrasTotalValue = $hotelExtrasTotalValue;
    }

    /**
     * @return mixed
     */
    public function getHotelExtrasCurrencyCode()
    {
        return $this->hotelExtrasCurrencyCode;
    }

    /**
     * @param mixed $hotelExtrasCurrencyCode
     */
    public function setHotelExtrasCurrencyCode($hotelExtrasCurrencyCode)
    {
        $this->hotelExtrasCurrencyCode = $hotelExtrasCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getHotelComments()
    {
        return $this->hotelComments;
    }

    /**
     * @param mixed $hotelComments
     */
    public function setHotelComments($hotelComments)
    {
        $this->hotelComments = $hotelComments;
    }

    /**
     * @return mixed
     */
    public function getHotelCustomField1()
    {
        return $this->hotelCustomField1;
    }

    /**
     * @param mixed $hotelCustomField1
     */
    public function setHotelCustomField1($hotelCustomField1)
    {
        $this->hotelCustomField1 = $hotelCustomField1;
    }

    /**
     * @return mixed
     */
    public function getHotelCustomField2()
    {
        return $this->hotelCustomField2;
    }

    /**
     * @param mixed $hotelCustomField2
     */
    public function setHotelCustomField2($hotelCustomField2)
    {
        $this->hotelCustomField2 = $hotelCustomField2;
    }

    /**
     * @return mixed
     */
    public function getHotelCustomField3()
    {
        return $this->hotelCustomField3;
    }

    /**
     * @param mixed $hotelCustomField3
     */
    public function setHotelCustomField3($hotelCustomField3)
    {
        $this->hotelCustomField3 = $hotelCustomField3;
    }

    /**
     * @return mixed
     */
    public function getHotelCustomField4()
    {
        return $this->hotelCustomField4;
    }

    /**
     * @param mixed $hotelCustomField4
     */
    public function setHotelCustomField4($hotelCustomField4)
    {
        $this->hotelCustomField4 = $hotelCustomField4;
    }

    /**
     * @return mixed
     */
    public function getHotelCustomField5()
    {
        return $this->hotelCustomField5;
    }

    /**
     * @param mixed $hotelCustomField5
     */
    public function setHotelCustomField5($hotelCustomField5)
    {
        $this->hotelCustomField5 = $hotelCustomField5;
    }


}
