<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportOpenAuthsReqType StructType
 * @subpackage Structs
 */
class PosReportOpenAuthsReqType extends AbstractStructBase
{
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DeviceId;
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
     * Constructor method for PosReportOpenAuthsReqType
     * @uses PosReportOpenAuthsReqType::setDeviceId()
     * @uses PosReportOpenAuthsReqType::setTzConversion()
     * @param int $deviceId
     * @param string $tzConversion
     */
    public function __construct($deviceId = null, $tzConversion = 'UTC')
    {
        $this
            ->setDeviceId($deviceId)
            ->setTzConversion($tzConversion);
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
     * @return \StructType\PosReportOpenAuthsReqType
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
     * @return \StructType\PosReportOpenAuthsReqType
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
     * @return \StructType\PosReportOpenAuthsReqType
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
