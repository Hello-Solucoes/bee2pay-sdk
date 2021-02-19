<?php


namespace Bee2Pay\Entities\BookingTypes;


use Bee2Pay\Contracts\ValidBooking;

class AirBooking implements ValidBooking
{
    public $flightPaxFirstName;
    public $flightPaxLastName;
    public $flightTicketNum;
    public $flightTicketIssueDate;
    public $flightIataTravelAgencyCode;
    public $flightTravelAgencyName;
    public $flightTotalFareValue;
    public $flightTotalFareCurrencyCode;
    public $flightTotalFeeValue;
    public $flightTotalFeeCurrencyCode;
    public $flightTotalTaxValue;
    public $flightTotalTaxCurrencyCode;
    public $flightLegsDescription;
    public $flightIsDomestic;
    public $flightPnrRecordLocator;
    public $flightFinalDestinationCity;
    public $flightTmcIsMerchant;
    public $flightStartDate;
    public $flightEndDate;
    public $flightComments;
    public $flightCustomField1;
    public $flightCustomField2;
    public $flightCustomField3;
    public $flightCustomField4;
    public $flightCustomField5;
    public $flights;

    /**
     * @return mixed
     */
    public function getFlightPaxFirstName()
    {
        return $this->flightPaxFirstName;
    }

    /**
     * @param mixed $flightPaxFirstName
     */
    public function setFlightPaxFirstName($flightPaxFirstName)
    {
        $this->flightPaxFirstName = $flightPaxFirstName;
    }

    /**
     * @return mixed
     */
    public function getFlightPaxLastName()
    {
        return $this->flightPaxLastName;
    }

    /**
     * @param mixed $flightPaxLastName
     */
    public function setFlightPaxLastName($flightPaxLastName)
    {
        $this->flightPaxLastName = $flightPaxLastName;
    }

    /**
     * @return mixed
     */
    public function getFlightTicketNum()
    {
        return $this->flightTicketNum;
    }

    /**
     * @param mixed $flightTicketNum
     */
    public function setFlightTicketNum($flightTicketNum)
    {
        $this->flightTicketNum = $flightTicketNum;
    }

    /**
     * @return mixed
     */
    public function getFlightTicketIssueDate()
    {
        return $this->flightTicketIssueDate;
    }

    /**
     * @param mixed $flightTicketIssueDate
     */
    public function setFlightTicketIssueDate($flightTicketIssueDate)
    {
        $this->flightTicketIssueDate = $flightTicketIssueDate;
    }

    /**
     * @return mixed
     */
    public function getFlightIataTravelAgencyCode()
    {
        return $this->flightIataTravelAgencyCode;
    }

    /**
     * @param mixed $flightIataTravelAgencyCode
     */
    public function setFlightIataTravelAgencyCode($flightIataTravelAgencyCode)
    {
        $this->flightIataTravelAgencyCode = $flightIataTravelAgencyCode;
    }

    /**
     * @return mixed
     */
    public function getFlightTravelAgencyName()
    {
        return $this->flightTravelAgencyName;
    }

    /**
     * @param mixed $flightTravelAgencyName
     */
    public function setFlightTravelAgencyName($flightTravelAgencyName)
    {
        $this->flightTravelAgencyName = $flightTravelAgencyName;
    }

    /**
     * @return mixed
     */
    public function getFlightTotalFareValue()
    {
        return $this->flightTotalFareValue;
    }

    /**
     * @param mixed $flightTotalFareValue
     */
    public function setFlightTotalFareValue($flightTotalFareValue)
    {
        $this->flightTotalFareValue = $flightTotalFareValue;
    }

    /**
     * @return mixed
     */
    public function getFlightTotalFareCurrencyCode()
    {
        return $this->flightTotalFareCurrencyCode;
    }

    /**
     * @param mixed $flightTotalFareCurrencyCode
     */
    public function setFlightTotalFareCurrencyCode($flightTotalFareCurrencyCode)
    {
        $this->flightTotalFareCurrencyCode = $flightTotalFareCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getFlightTotalFeeValue()
    {
        return $this->flightTotalFeeValue;
    }

    /**
     * @param mixed $flightTotalFeeValue
     */
    public function setFlightTotalFeeValue($flightTotalFeeValue)
    {
        $this->flightTotalFeeValue = $flightTotalFeeValue;
    }

    /**
     * @return mixed
     */
    public function getFlightTotalFeeCurrencyCode()
    {
        return $this->flightTotalFeeCurrencyCode;
    }

    /**
     * @param mixed $flightTotalFeeCurrencyCode
     */
    public function setFlightTotalFeeCurrencyCode($flightTotalFeeCurrencyCode)
    {
        $this->flightTotalFeeCurrencyCode = $flightTotalFeeCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getFlightTotalTaxValue()
    {
        return $this->flightTotalTaxValue;
    }

    /**
     * @param mixed $flightTotalTaxValue
     */
    public function setFlightTotalTaxValue($flightTotalTaxValue)
    {
        $this->flightTotalTaxValue = $flightTotalTaxValue;
    }

    /**
     * @return mixed
     */
    public function getFlightTotalTaxCurrencyCode()
    {
        return $this->flightTotalTaxCurrencyCode;
    }

    /**
     * @param mixed $flightTotalTaxCurrencyCode
     */
    public function setFlightTotalTaxCurrencyCode($flightTotalTaxCurrencyCode)
    {
        $this->flightTotalTaxCurrencyCode = $flightTotalTaxCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getFlightLegsDescription()
    {
        return $this->flightLegsDescription;
    }

    /**
     * @param mixed $flightLegsDescription
     */
    public function setFlightLegsDescription($flightLegsDescription)
    {
        $this->flightLegsDescription = $flightLegsDescription;
    }

    /**
     * @return mixed
     */
    public function getFlightIsDomestic()
    {
        return $this->flightIsDomestic;
    }

    /**
     * @param mixed $flightIsDomestic
     */
    public function setFlightIsDomestic($flightIsDomestic)
    {
        $this->flightIsDomestic = $flightIsDomestic;
    }

    /**
     * @return mixed
     */
    public function getFlightPnrRecordLocator()
    {
        return $this->flightPnrRecordLocator;
    }

    /**
     * @param mixed $flightPnrRecordLocator
     */
    public function setFlightPnrRecordLocator($flightPnrRecordLocator)
    {
        $this->flightPnrRecordLocator = $flightPnrRecordLocator;
    }

    /**
     * @return mixed
     */
    public function getFlightFinalDestinationCity()
    {
        return $this->flightFinalDestinationCity;
    }

    /**
     * @param mixed $flightFinalDestinationCity
     */
    public function setFlightFinalDestinationCity($flightFinalDestinationCity)
    {
        $this->flightFinalDestinationCity = $flightFinalDestinationCity;
    }

    /**
     * @return mixed
     */
    public function getFlightTmcIsMerchant()
    {
        return $this->flightTmcIsMerchant;
    }

    /**
     * @param mixed $flightTmcIsMerchant
     */
    public function setFlightTmcIsMerchant($flightTmcIsMerchant)
    {
        $this->flightTmcIsMerchant = $flightTmcIsMerchant;
    }

    /**
     * @return mixed
     */
    public function getFlightStartDate()
    {
        return $this->flightStartDate;
    }

    /**
     * @param mixed $flightStartDate
     */
    public function setFlightStartDate($flightStartDate)
    {
        $this->flightStartDate = $flightStartDate;
    }

    /**
     * @return mixed
     */
    public function getFlightEndDate()
    {
        return $this->flightEndDate;
    }

    /**
     * @param mixed $flightEndDate
     */
    public function setFlightEndDate($flightEndDate)
    {
        $this->flightEndDate = $flightEndDate;
    }

    /**
     * @return mixed
     */
    public function getFlightComments()
    {
        return $this->flightComments;
    }

    /**
     * @param mixed $flightComments
     */
    public function setFlightComments($flightComments)
    {
        $this->flightComments = $flightComments;
    }

    /**
     * @return mixed
     */
    public function getFlightCustomField1()
    {
        return $this->flightCustomField1;
    }

    /**
     * @param mixed $flightCustomField1
     */
    public function setFlightCustomField1($flightCustomField1)
    {
        $this->flightCustomField1 = $flightCustomField1;
    }

    /**
     * @return mixed
     */
    public function getFlightCustomField2()
    {
        return $this->flightCustomField2;
    }

    /**
     * @param mixed $flightCustomField2
     */
    public function setFlightCustomField2($flightCustomField2)
    {
        $this->flightCustomField2 = $flightCustomField2;
    }

    /**
     * @return mixed
     */
    public function getFlightCustomField3()
    {
        return $this->flightCustomField3;
    }

    /**
     * @param mixed $flightCustomField3
     */
    public function setFlightCustomField3($flightCustomField3)
    {
        $this->flightCustomField3 = $flightCustomField3;
    }

    /**
     * @return mixed
     */
    public function getFlightCustomField4()
    {
        return $this->flightCustomField4;
    }

    /**
     * @param mixed $flightCustomField4
     */
    public function setFlightCustomField4($flightCustomField4)
    {
        $this->flightCustomField4 = $flightCustomField4;
    }

    /**
     * @return mixed
     */
    public function getFlightCustomField5()
    {
        return $this->flightCustomField5;
    }

    /**
     * @param mixed $flightCustomField5
     */
    public function setFlightCustomField5($flightCustomField5)
    {
        $this->flightCustomField5 = $flightCustomField5;
    }

    /**
     * @return mixed
     */
    public function getFlights()
    {
        return $this->flights;
    }

    /**
     * @param mixed $flights
     */
    public function setFlights($flights)
    {
        $this->flights = $flights;
    }


}