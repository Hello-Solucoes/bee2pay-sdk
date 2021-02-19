<?php


namespace Bee2Pay\Entities\BookingTypes;


use Bee2Pay\Contracts\ValidBooking;

class RentalBooking implements ValidBooking
{
    public $rentalAgreement;
    public $rentalLocator;
    public $rentalCompanyName;
    public $rentalCompanyVat;
    public $rentalCompanyPhone;
    public $rentalCompanyEmail;
    public $rentalCompanyAddress;
    public $rentalCompanyZipCode;
    public $rentalCompanyDistrict;
    public $rentalCompanyState;
    public $rentalCompanyCity;
    public $rentalCompanyCountryCode;
    public $rentalRenterName;
    public $rentalRenterSurname;
    public $rentalVehicleClass;
    public $rentalVehicleModel;
    public $rentalVehicleDescription;
    public $rentalVehicleColor;
    public $rentalVehicleLicense;
    public $rentalPickupDate;
    public $rentalPickupCity;
    public $rentalPickupCountryCode;
    public $rentalPickupLocation;
    public $rentalDropoffDate;
    public $rentalDropoffCity;
    public $rentalDropoffCountryCode;
    public $rentalDropoffLocation;
    public $rentalPeriodType;
    public $rentalTotalPriceValue;
    public $rentalTotalPriceCurrencyCode;
    public $rentalTaxesValue;
    public $rentalTaxesCurrencyCode;
    public $rentalComments;
    public $rentalCustomField1;
    public $rentalCustomField2;
    public $rentalCustomField3;
    public $rentalCustomField4;
    public $rentalCustomField5;

    /**
     * @return mixed
     */
    public function getRentalAgreement()
    {
        return $this->rentalAgreement;
    }

    /**
     * @param mixed $rentalAgreement
     */
    public function setRentalAgreement($rentalAgreement)
    {
        $this->rentalAgreement = $rentalAgreement;
    }

    /**
     * @return mixed
     */
    public function getRentalLocator()
    {
        return $this->rentalLocator;
    }

    /**
     * @param mixed $rentalLocator
     */
    public function setRentalLocator($rentalLocator)
    {
        $this->rentalLocator = $rentalLocator;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyName()
    {
        return $this->rentalCompanyName;
    }

    /**
     * @param mixed $rentalCompanyName
     */
    public function setRentalCompanyName($rentalCompanyName)
    {
        $this->rentalCompanyName = $rentalCompanyName;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyVat()
    {
        return $this->rentalCompanyVat;
    }

    /**
     * @param mixed $rentalCompanyVat
     */
    public function setRentalCompanyVat($rentalCompanyVat)
    {
        $this->rentalCompanyVat = $rentalCompanyVat;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyPhone()
    {
        return $this->rentalCompanyPhone;
    }

    /**
     * @param mixed $rentalCompanyPhone
     */
    public function setRentalCompanyPhone($rentalCompanyPhone)
    {
        $this->rentalCompanyPhone = $rentalCompanyPhone;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyEmail()
    {
        return $this->rentalCompanyEmail;
    }

    /**
     * @param mixed $rentalCompanyEmail
     */
    public function setRentalCompanyEmail($rentalCompanyEmail)
    {
        $this->rentalCompanyEmail = $rentalCompanyEmail;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyAddress()
    {
        return $this->rentalCompanyAddress;
    }

    /**
     * @param mixed $rentalCompanyAddress
     */
    public function setRentalCompanyAddress($rentalCompanyAddress)
    {
        $this->rentalCompanyAddress = $rentalCompanyAddress;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyZipCode()
    {
        return $this->rentalCompanyZipCode;
    }

    /**
     * @param mixed $rentalCompanyZipCode
     */
    public function setRentalCompanyZipCode($rentalCompanyZipCode)
    {
        $this->rentalCompanyZipCode = $rentalCompanyZipCode;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyDistrict()
    {
        return $this->rentalCompanyDistrict;
    }

    /**
     * @param mixed $rentalCompanyDistrict
     */
    public function setRentalCompanyDistrict($rentalCompanyDistrict)
    {
        $this->rentalCompanyDistrict = $rentalCompanyDistrict;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyState()
    {
        return $this->rentalCompanyState;
    }

    /**
     * @param mixed $rentalCompanyState
     */
    public function setRentalCompanyState($rentalCompanyState)
    {
        $this->rentalCompanyState = $rentalCompanyState;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyCity()
    {
        return $this->rentalCompanyCity;
    }

    /**
     * @param mixed $rentalCompanyCity
     */
    public function setRentalCompanyCity($rentalCompanyCity)
    {
        $this->rentalCompanyCity = $rentalCompanyCity;
    }

    /**
     * @return mixed
     */
    public function getRentalCompanyCountryCode()
    {
        return $this->rentalCompanyCountryCode;
    }

    /**
     * @param mixed $rentalCompanyCountryCode
     */
    public function setRentalCompanyCountryCode($rentalCompanyCountryCode)
    {
        $this->rentalCompanyCountryCode = $rentalCompanyCountryCode;
    }

    /**
     * @return mixed
     */
    public function getRentalRenterName()
    {
        return $this->rentalRenterName;
    }

    /**
     * @param mixed $rentalRenterName
     */
    public function setRentalRenterName($rentalRenterName)
    {
        $this->rentalRenterName = $rentalRenterName;
    }

    /**
     * @return mixed
     */
    public function getRentalRenterSurname()
    {
        return $this->rentalRenterSurname;
    }

    /**
     * @param mixed $rentalRenterSurname
     */
    public function setRentalRenterSurname($rentalRenterSurname)
    {
        $this->rentalRenterSurname = $rentalRenterSurname;
    }

    /**
     * @return mixed
     */
    public function getRentalVehicleClass()
    {
        return $this->rentalVehicleClass;
    }

    /**
     * @param mixed $rentalVehicleClass
     */
    public function setRentalVehicleClass($rentalVehicleClass)
    {
        $this->rentalVehicleClass = $rentalVehicleClass;
    }

    /**
     * @return mixed
     */
    public function getRentalVehicleModel()
    {
        return $this->rentalVehicleModel;
    }

    /**
     * @param mixed $rentalVehicleModel
     */
    public function setRentalVehicleModel($rentalVehicleModel)
    {
        $this->rentalVehicleModel = $rentalVehicleModel;
    }

    /**
     * @return mixed
     */
    public function getRentalVehicleDescription()
    {
        return $this->rentalVehicleDescription;
    }

    /**
     * @param mixed $rentalVehicleDescription
     */
    public function setRentalVehicleDescription($rentalVehicleDescription)
    {
        $this->rentalVehicleDescription = $rentalVehicleDescription;
    }

    /**
     * @return mixed
     */
    public function getRentalVehicleColor()
    {
        return $this->rentalVehicleColor;
    }

    /**
     * @param mixed $rentalVehicleColor
     */
    public function setRentalVehicleColor($rentalVehicleColor)
    {
        $this->rentalVehicleColor = $rentalVehicleColor;
    }

    /**
     * @return mixed
     */
    public function getRentalVehicleLicense()
    {
        return $this->rentalVehicleLicense;
    }

    /**
     * @param mixed $rentalVehicleLicense
     */
    public function setRentalVehicleLicense($rentalVehicleLicense)
    {
        $this->rentalVehicleLicense = $rentalVehicleLicense;
    }

    /**
     * @return mixed
     */
    public function getRentalPickupDate()
    {
        return $this->rentalPickupDate;
    }

    /**
     * @param mixed $rentalPickupDate
     */
    public function setRentalPickupDate($rentalPickupDate)
    {
        $this->rentalPickupDate = $rentalPickupDate;
    }

    /**
     * @return mixed
     */
    public function getRentalPickupCity()
    {
        return $this->rentalPickupCity;
    }

    /**
     * @param mixed $rentalPickupCity
     */
    public function setRentalPickupCity($rentalPickupCity)
    {
        $this->rentalPickupCity = $rentalPickupCity;
    }

    /**
     * @return mixed
     */
    public function getRentalPickupCountryCode()
    {
        return $this->rentalPickupCountryCode;
    }

    /**
     * @param mixed $rentalPickupCountryCode
     */
    public function setRentalPickupCountryCode($rentalPickupCountryCode)
    {
        $this->rentalPickupCountryCode = $rentalPickupCountryCode;
    }

    /**
     * @return mixed
     */
    public function getRentalPickupLocation()
    {
        return $this->rentalPickupLocation;
    }

    /**
     * @param mixed $rentalPickupLocation
     */
    public function setRentalPickupLocation($rentalPickupLocation)
    {
        $this->rentalPickupLocation = $rentalPickupLocation;
    }

    /**
     * @return mixed
     */
    public function getRentalDropoffDate()
    {
        return $this->rentalDropoffDate;
    }

    /**
     * @param mixed $rentalDropoffDate
     */
    public function setRentalDropoffDate($rentalDropoffDate)
    {
        $this->rentalDropoffDate = $rentalDropoffDate;
    }

    /**
     * @return mixed
     */
    public function getRentalDropoffCity()
    {
        return $this->rentalDropoffCity;
    }

    /**
     * @param mixed $rentalDropoffCity
     */
    public function setRentalDropoffCity($rentalDropoffCity)
    {
        $this->rentalDropoffCity = $rentalDropoffCity;
    }

    /**
     * @return mixed
     */
    public function getRentalDropoffCountryCode()
    {
        return $this->rentalDropoffCountryCode;
    }

    /**
     * @param mixed $rentalDropoffCountryCode
     */
    public function setRentalDropoffCountryCode($rentalDropoffCountryCode)
    {
        $this->rentalDropoffCountryCode = $rentalDropoffCountryCode;
    }

    /**
     * @return mixed
     */
    public function getRentalDropoffLocation()
    {
        return $this->rentalDropoffLocation;
    }

    /**
     * @param mixed $rentalDropoffLocation
     */
    public function setRentalDropoffLocation($rentalDropoffLocation)
    {
        $this->rentalDropoffLocation = $rentalDropoffLocation;
    }

    /**
     * @return mixed
     */
    public function getRentalPeriodType()
    {
        return $this->rentalPeriodType;
    }

    /**
     * @param mixed $rentalPeriodType
     */
    public function setRentalPeriodType($rentalPeriodType)
    {
        $this->rentalPeriodType = $rentalPeriodType;
    }

    /**
     * @return mixed
     */
    public function getRentalTotalPriceValue()
    {
        return $this->rentalTotalPriceValue;
    }

    /**
     * @param mixed $rentalTotalPriceValue
     */
    public function setRentalTotalPriceValue($rentalTotalPriceValue)
    {
        $this->rentalTotalPriceValue = $rentalTotalPriceValue;
    }

    /**
     * @return mixed
     */
    public function getRentalTotalPriceCurrencyCode()
    {
        return $this->rentalTotalPriceCurrencyCode;
    }

    /**
     * @param mixed $rentalTotalPriceCurrencyCode
     */
    public function setRentalTotalPriceCurrencyCode($rentalTotalPriceCurrencyCode)
    {
        $this->rentalTotalPriceCurrencyCode = $rentalTotalPriceCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getRentalTaxesValue()
    {
        return $this->rentalTaxesValue;
    }

    /**
     * @param mixed $rentalTaxesValue
     */
    public function setRentalTaxesValue($rentalTaxesValue)
    {
        $this->rentalTaxesValue = $rentalTaxesValue;
    }

    /**
     * @return mixed
     */
    public function getRentalTaxesCurrencyCode()
    {
        return $this->rentalTaxesCurrencyCode;
    }

    /**
     * @param mixed $rentalTaxesCurrencyCode
     */
    public function setRentalTaxesCurrencyCode($rentalTaxesCurrencyCode)
    {
        $this->rentalTaxesCurrencyCode = $rentalTaxesCurrencyCode;
    }

    /**
     * @return mixed
     */
    public function getRentalComments()
    {
        return $this->rentalComments;
    }

    /**
     * @param mixed $rentalComments
     */
    public function setRentalComments($rentalComments)
    {
        $this->rentalComments = $rentalComments;
    }

    /**
     * @return mixed
     */
    public function getRentalCustomField1()
    {
        return $this->rentalCustomField1;
    }

    /**
     * @param mixed $rentalCustomField1
     */
    public function setRentalCustomField1($rentalCustomField1)
    {
        $this->rentalCustomField1 = $rentalCustomField1;
    }

    /**
     * @return mixed
     */
    public function getRentalCustomField2()
    {
        return $this->rentalCustomField2;
    }

    /**
     * @param mixed $rentalCustomField2
     */
    public function setRentalCustomField2($rentalCustomField2)
    {
        $this->rentalCustomField2 = $rentalCustomField2;
    }

    /**
     * @return mixed
     */
    public function getRentalCustomField3()
    {
        return $this->rentalCustomField3;
    }

    /**
     * @param mixed $rentalCustomField3
     */
    public function setRentalCustomField3($rentalCustomField3)
    {
        $this->rentalCustomField3 = $rentalCustomField3;
    }

    /**
     * @return mixed
     */
    public function getRentalCustomField4()
    {
        return $this->rentalCustomField4;
    }

    /**
     * @param mixed $rentalCustomField4
     */
    public function setRentalCustomField4($rentalCustomField4)
    {
        $this->rentalCustomField4 = $rentalCustomField4;
    }

    /**
     * @return mixed
     */
    public function getRentalCustomField5()
    {
        return $this->rentalCustomField5;
    }

    /**
     * @param mixed $rentalCustomField5
     */
    public function setRentalCustomField5($rentalCustomField5)
    {
        $this->rentalCustomField5 = $rentalCustomField5;
    }


}