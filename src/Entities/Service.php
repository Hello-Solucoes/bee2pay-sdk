<?php


namespace Bee2Pay\Entities;


class Service
{
    public $productId;
    public $productName;
    public $startDate;
    public $endDate;
    public $penaltyDate;
    public $cityName;
    public $countryCode;
    public $roomType;
    public $costCenterCode;
    public $costCenterDescription;
    public $companyCode;
    public $companyName;
    public $ledgerAccountCode;
    public $ledgerAccountDescription;
    public $projectCode;
    public $projectDescription;

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getPenaltyDate()
    {
        return $this->penaltyDate;
    }

    /**
     * @param mixed $penaltyDate
     */
    public function setPenaltyDate($penaltyDate)
    {
        $this->penaltyDate = $penaltyDate;
    }

    /**
     * @return mixed
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param mixed $cityName
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getCostCenterCode()
    {
        return $this->costCenterCode;
    }

    /**
     * @param mixed $costCenterCode
     */
    public function setCostCenterCode($costCenterCode)
    {
        $this->costCenterCode = $costCenterCode;
    }

    /**
     * @return mixed
     */
    public function getCostCenterDescription()
    {
        return $this->costCenterDescription;
    }

    /**
     * @param mixed $costCenterDescription
     */
    public function setCostCenterDescription($costCenterDescription)
    {
        $this->costCenterDescription = $costCenterDescription;
    }

    /**
     * @return mixed
     */
    public function getCompanyCode()
    {
        return $this->companyCode;
    }

    /**
     * @param mixed $companyCode
     */
    public function setCompanyCode($companyCode)
    {
        $this->companyCode = $companyCode;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getLedgerAccountCode()
    {
        return $this->ledgerAccountCode;
    }

    /**
     * @param mixed $ledgerAccountCode
     */
    public function setLedgerAccountCode($ledgerAccountCode)
    {
        $this->ledgerAccountCode = $ledgerAccountCode;
    }

    /**
     * @return mixed
     */
    public function getLedgerAccountDescription()
    {
        return $this->ledgerAccountDescription;
    }

    /**
     * @param mixed $ledgerAccountDescription
     */
    public function setLedgerAccountDescription($ledgerAccountDescription)
    {
        $this->ledgerAccountDescription = $ledgerAccountDescription;
    }

    /**
     * @return mixed
     */
    public function getProjectCode()
    {
        return $this->projectCode;
    }

    /**
     * @param mixed $projectCode
     */
    public function setProjectCode($projectCode)
    {
        $this->projectCode = $projectCode;
    }

    /**
     * @return mixed
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * @param mixed $projectDescription
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;
    }


}