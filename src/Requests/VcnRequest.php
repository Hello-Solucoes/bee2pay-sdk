<?php


namespace Bee2Pay\Requests;


class VcnRequest
{
    public $echoToken;
    public $vcnTimestamp;
    public $vcnCreditLimit;
    public $vcnCreditLimitCurrencyCode;
    public $vcnCardHolderName;
    public $vcnActivationDate;
    public $vcnExpirationDate;
    public $orderLocator;
    public $orderRequestorName;
    public $orderRequestorCPF;
    public $orderRequestorPhone;
    public $orderRequestorEmail;
    public $orderRequestorAddress;
    public $orderRequestorZipCode;
    public $orderRequestorDistrict;
    public $orderRequestorCity;
    public $orderRequestorState;
    public $orderRequestorCountryCode;
    public $orderRequestorRegistration;
    public $orderDepartment;
    public $orderCostCenterCode;
    public $orderCostCenterDescription;
    public $orderLedgerAccountCode;
    public $orderLedgerAccountDescription;
    public $orderProjectCode;
    public $orderProjectDescription;
    public $orderCustomField1;
    public $orderCustomField2;
    public $orderCustomField3;
    public $orderCustomField4;
    public $orderCustomField5;
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

    /**
     * @return mixed
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * @param mixed $echoToken
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;
    }

    /**
     * @return mixed
     */
    public function getVcnTimestamp()
    {
        return $this->vcnTimestamp;
    }

    /**
     * @param mixed $vcnTimestamp
     */
    public function setVcnTimestamp($vcnTimestamp)
    {
        $this->vcnTimestamp = $vcnTimestamp;
    }

    /**
     * @return mixed
     */
    public function getVcnCreditLimit()
    {
        return $this->vcnCreditLimit;
    }

    /**
     * @param mixed $vcnCreditLimit
     */
    public function setVcnCreditLimit($vcnCreditLimit)
    {
        $this->vcnCreditLimit = $vcnCreditLimit;
    }

    /**
     * @return mixed
     */
    public function getVcnCreditLimitCurrencyCode()
    {
        return $this->vcnCreditLimitCurrencyCode;
    }

    /**
     * @param mixed $vcnCreditLimitCurrencyCode
     */
    public function setVcnCreditLimitCurrencyCode($vcnCreditLimitCurrencyCode)
    {
        $this->vcnCreditLimitCurrencyCode = $vcnCreditLimitCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getVcnCardHolderName()
    {
        return $this->vcnCardHolderName;
    }

    /**
     * @param mixed $vcnCardHolderName
     */
    public function setVcnCardHolderName($vcnCardHolderName)
    {
        $this->vcnCardHolderName = $vcnCardHolderName;
    }

    /**
     * @return mixed
     */
    public function getVcnActivationDate()
    {
        return $this->vcnActivationDate;
    }

    /**
     * @param mixed $vcnActivationDate
     */
    public function setVcnActivationDate($vcnActivationDate)
    {
        $this->vcnActivationDate = $vcnActivationDate;
    }

    /**
     * @return mixed
     */
    public function getVcnExpirationDate()
    {
        return $this->vcnExpirationDate;
    }

    /**
     * @param mixed $vcnExpirationDate
     */
    public function setVcnExpirationDate($vcnExpirationDate)
    {
        $this->vcnExpirationDate = $vcnExpirationDate;
    }

    /**
     * @return mixed
     */
    public function getOrderLocator()
    {
        return $this->orderLocator;
    }

    /**
     * @param mixed $orderLocator
     */
    public function setOrderLocator($orderLocator)
    {
        $this->orderLocator = $orderLocator;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorName()
    {
        return $this->orderRequestorName;
    }

    /**
     * @param mixed $orderRequestorName
     */
    public function setOrderRequestorName($orderRequestorName)
    {
        $this->orderRequestorName = $orderRequestorName;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorCPF()
    {
        return $this->orderRequestorCPF;
    }

    /**
     * @param mixed $orderRequestorCPF
     */
    public function setOrderRequestorCPF($orderRequestorCPF)
    {
        $this->orderRequestorCPF = $orderRequestorCPF;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorPhone()
    {
        return $this->orderRequestorPhone;
    }

    /**
     * @param mixed $orderRequestorPhone
     */
    public function setOrderRequestorPhone($orderRequestorPhone)
    {
        $this->orderRequestorPhone = $orderRequestorPhone;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorEmail()
    {
        return $this->orderRequestorEmail;
    }

    /**
     * @param mixed $orderRequestorEmail
     */
    public function setOrderRequestorEmail($orderRequestorEmail)
    {
        $this->orderRequestorEmail = $orderRequestorEmail;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorAddress()
    {
        return $this->orderRequestorAddress;
    }

    /**
     * @param mixed $orderRequestorAddress
     */
    public function setOrderRequestorAddress($orderRequestorAddress)
    {
        $this->orderRequestorAddress = $orderRequestorAddress;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorZipCode()
    {
        return $this->orderRequestorZipCode;
    }

    /**
     * @param mixed $orderRequestorZipCode
     */
    public function setOrderRequestorZipCode($orderRequestorZipCode)
    {
        $this->orderRequestorZipCode = $orderRequestorZipCode;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorDistrict()
    {
        return $this->orderRequestorDistrict;
    }

    /**
     * @param mixed $orderRequestorDistrict
     */
    public function setOrderRequestorDistrict($orderRequestorDistrict)
    {
        $this->orderRequestorDistrict = $orderRequestorDistrict;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorCity()
    {
        return $this->orderRequestorCity;
    }

    /**
     * @param mixed $orderRequestorCity
     */
    public function setOrderRequestorCity($orderRequestorCity)
    {
        $this->orderRequestorCity = $orderRequestorCity;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorState()
    {
        return $this->orderRequestorState;
    }

    /**
     * @param mixed $orderRequestorState
     */
    public function setOrderRequestorState($orderRequestorState)
    {
        $this->orderRequestorState = $orderRequestorState;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorCountryCode()
    {
        return $this->orderRequestorCountryCode;
    }

    /**
     * @param mixed $orderRequestorCountryCode
     */
    public function setOrderRequestorCountryCode($orderRequestorCountryCode)
    {
        $this->orderRequestorCountryCode = $orderRequestorCountryCode;
    }

    /**
     * @return mixed
     */
    public function getOrderRequestorRegistration()
    {
        return $this->orderRequestorRegistration;
    }

    /**
     * @param mixed $orderRequestorRegistration
     */
    public function setOrderRequestorRegistration($orderRequestorRegistration)
    {
        $this->orderRequestorRegistration = $orderRequestorRegistration;
    }

    /**
     * @return mixed
     */
    public function getOrderDepartment()
    {
        return $this->orderDepartment;
    }

    /**
     * @param mixed $orderDepartment
     */
    public function setOrderDepartment($orderDepartment)
    {
        $this->orderDepartment = $orderDepartment;
    }

    /**
     * @return mixed
     */
    public function getOrderCostCenterCode()
    {
        return $this->orderCostCenterCode;
    }

    /**
     * @param mixed $orderCostCenterCode
     */
    public function setOrderCostCenterCode($orderCostCenterCode)
    {
        $this->orderCostCenterCode = $orderCostCenterCode;
    }

    /**
     * @return mixed
     */
    public function getOrderCostCenterDescription()
    {
        return $this->orderCostCenterDescription;
    }

    /**
     * @param mixed $orderCostCenterDescription
     */
    public function setOrderCostCenterDescription($orderCostCenterDescription)
    {
        $this->orderCostCenterDescription = $orderCostCenterDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderLedgerAccountCode()
    {
        return $this->orderLedgerAccountCode;
    }

    /**
     * @param mixed $orderLedgerAccountCode
     */
    public function setOrderLedgerAccountCode($orderLedgerAccountCode)
    {
        $this->orderLedgerAccountCode = $orderLedgerAccountCode;
    }

    /**
     * @return mixed
     */
    public function getOrderLedgerAccountDescription()
    {
        return $this->orderLedgerAccountDescription;
    }

    /**
     * @param mixed $orderLedgerAccountDescription
     */
    public function setOrderLedgerAccountDescription($orderLedgerAccountDescription)
    {
        $this->orderLedgerAccountDescription = $orderLedgerAccountDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderProjectCode()
    {
        return $this->orderProjectCode;
    }

    /**
     * @param mixed $orderProjectCode
     */
    public function setOrderProjectCode($orderProjectCode)
    {
        $this->orderProjectCode = $orderProjectCode;
    }

    /**
     * @return mixed
     */
    public function getOrderProjectDescription()
    {
        return $this->orderProjectDescription;
    }

    /**
     * @param mixed $orderProjectDescription
     */
    public function setOrderProjectDescription($orderProjectDescription)
    {
        $this->orderProjectDescription = $orderProjectDescription;
    }

    /**
     * @return mixed
     */
    public function getOrderCustomField1()
    {
        return $this->orderCustomField1;
    }

    /**
     * @param mixed $orderCustomField1
     */
    public function setOrderCustomField1($orderCustomField1)
    {
        $this->orderCustomField1 = $orderCustomField1;
    }

    /**
     * @return mixed
     */
    public function getOrderCustomField2()
    {
        return $this->orderCustomField2;
    }

    /**
     * @param mixed $orderCustomField2
     */
    public function setOrderCustomField2($orderCustomField2)
    {
        $this->orderCustomField2 = $orderCustomField2;
    }

    /**
     * @return mixed
     */
    public function getOrderCustomField3()
    {
        return $this->orderCustomField3;
    }

    /**
     * @param mixed $orderCustomField3
     */
    public function setOrderCustomField3($orderCustomField3)
    {
        $this->orderCustomField3 = $orderCustomField3;
    }

    /**
     * @return mixed
     */
    public function getOrderCustomField4()
    {
        return $this->orderCustomField4;
    }

    /**
     * @param mixed $orderCustomField4
     */
    public function setOrderCustomField4($orderCustomField4)
    {
        $this->orderCustomField4 = $orderCustomField4;
    }

    /**
     * @return mixed
     */
    public function getOrderCustomField5()
    {
        return $this->orderCustomField5;
    }

    /**
     * @param mixed $orderCustomField5
     */
    public function setOrderCustomField5($orderCustomField5)
    {
        $this->orderCustomField5 = $orderCustomField5;
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
