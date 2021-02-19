<?php


namespace Bee2Pay\Requests;


class VcnRequest
{
    public $echoToken;
    public $vcnTimestamp;
    public $vcnCreditLimit;
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
    public $oneOf;

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
    public function getOneOf()
    {
        return $this->oneOf;
    }

    /**
     * @param mixed $oneOf
     */
    public function setOneOf($oneOf)
    {
        $this->oneOf = $oneOf;
    }


}