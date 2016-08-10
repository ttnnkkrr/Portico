<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportSearchReqType StructType
 * @subpackage Structs
 */
class PosReportSearchReqType extends AbstractStructBase
{
    /**
     * The ReturnHeaderOnly
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReturnHeaderOnly;
    /**
     * The RptStartUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RptStartUtcDT;
    /**
     * The RptEndUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RptEndUtcDT;
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DeviceId;
    /**
     * The Criteria
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ReportSearchCriteriaType
     */
    public $Criteria;
    /**
     * The TzConversion
     * Meta informations extracted from the WSDL
     * - default: UTC
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TzConversion;
    /**
     * Constructor method for PosReportSearchReqType
     * @uses PosReportSearchReqType::setReturnHeaderOnly()
     * @uses PosReportSearchReqType::setRptStartUtcDT()
     * @uses PosReportSearchReqType::setRptEndUtcDT()
     * @uses PosReportSearchReqType::setDeviceId()
     * @uses PosReportSearchReqType::setCriteria()
     * @uses PosReportSearchReqType::setTzConversion()
     * @param string $returnHeaderOnly
     * @param string $rptStartUtcDT
     * @param string $rptEndUtcDT
     * @param int $deviceId
     * @param \StructType\ReportSearchCriteriaType $criteria
     * @param string $tzConversion
     */
    public function __construct($returnHeaderOnly = null, $rptStartUtcDT = null, $rptEndUtcDT = null, $deviceId = null, \StructType\ReportSearchCriteriaType $criteria = null, $tzConversion = 'UTC')
    {
        $this
            ->setReturnHeaderOnly($returnHeaderOnly)
            ->setRptStartUtcDT($rptStartUtcDT)
            ->setRptEndUtcDT($rptEndUtcDT)
            ->setDeviceId($deviceId)
            ->setCriteria($criteria)
            ->setTzConversion($tzConversion);
    }
    /**
     * Get ReturnHeaderOnly value
     * @return string
     */
    public function getReturnHeaderOnly()
    {
        return $this->ReturnHeaderOnly;
    }
    /**
     * Set ReturnHeaderOnly value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnHeaderOnly
     * @return \StructType\PosReportSearchReqType
     */
    public function setReturnHeaderOnly($returnHeaderOnly = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($returnHeaderOnly)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $returnHeaderOnly, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->ReturnHeaderOnly = $returnHeaderOnly;
        return $this;
    }
    /**
     * Get RptStartUtcDT value
     * @return string|null
     */
    public function getRptStartUtcDT()
    {
        return $this->RptStartUtcDT;
    }
    /**
     * Set RptStartUtcDT value
     * @param string $rptStartUtcDT
     * @return \StructType\PosReportSearchReqType
     */
    public function setRptStartUtcDT($rptStartUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rptStartUtcDT) && !is_string($rptStartUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rptStartUtcDT)), __LINE__);
        }
        $this->RptStartUtcDT = $rptStartUtcDT;
        return $this;
    }
    /**
     * Get RptEndUtcDT value
     * @return string|null
     */
    public function getRptEndUtcDT()
    {
        return $this->RptEndUtcDT;
    }
    /**
     * Set RptEndUtcDT value
     * @param string $rptEndUtcDT
     * @return \StructType\PosReportSearchReqType
     */
    public function setRptEndUtcDT($rptEndUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rptEndUtcDT) && !is_string($rptEndUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rptEndUtcDT)), __LINE__);
        }
        $this->RptEndUtcDT = $rptEndUtcDT;
        return $this;
    }
    /**
     * Get DeviceId value
     * @return int|null
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }
    /**
     * Set DeviceId value
     * @param int $deviceId
     * @return \StructType\PosReportSearchReqType
     */
    public function setDeviceId($deviceId = null)
    {
        // validation for constraint: int
        if (!is_null($deviceId) && !is_numeric($deviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deviceId)), __LINE__);
        }
        $this->DeviceId = $deviceId;
        return $this;
    }
    /**
     * Get Criteria value
     * @return \StructType\ReportSearchCriteriaType|null
     */
    public function getCriteria()
    {
        return $this->Criteria;
    }
    /**
     * Set Criteria value
     * @param \StructType\ReportSearchCriteriaType $criteria
     * @return \StructType\PosReportSearchReqType
     */
    public function setCriteria(\StructType\ReportSearchCriteriaType $criteria = null)
    {
        $this->Criteria = $criteria;
        return $this;
    }
    /**
     * Get TzConversion value
     * @return string|null
     */
    public function getTzConversion()
    {
        return $this->TzConversion;
    }
    /**
     * Set TzConversion value
     * @uses \EnumType\TzoneConversionType::valueIsValid()
     * @uses \EnumType\TzoneConversionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tzConversion
     * @return \StructType\PosReportSearchReqType
     */
    public function setTzConversion($tzConversion = 'UTC')
    {
        // validation for constraint: enumeration
        if (!\EnumType\TzoneConversionType::valueIsValid($tzConversion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tzConversion, implode(', ', \EnumType\TzoneConversionType::getValidValues())), __LINE__);
        }
        $this->TzConversion = $tzConversion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosReportSearchReqType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
