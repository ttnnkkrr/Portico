<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGetUserDeviceSettingsReqType StructType
 * @subpackage Structs
 */
class PosGetUserDeviceSettingsReqType extends AbstractStructBase
{
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeviceId;
    /**
     * The MerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchNbr;
    /**
     * Constructor method for PosGetUserDeviceSettingsReqType
     * @uses PosGetUserDeviceSettingsReqType::setDeviceId()
     * @uses PosGetUserDeviceSettingsReqType::setMerchNbr()
     * @param int $deviceId
     * @param string $merchNbr
     */
    public function __construct($deviceId = null, $merchNbr = null)
    {
        $this
            ->setDeviceId($deviceId)
            ->setMerchNbr($merchNbr);
    }
    /**
     * Get DeviceId value
     * @return int
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }
    /**
     * Set DeviceId value
     * @param int $deviceId
     * @return \StructType\PosGetUserDeviceSettingsReqType
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
     * Get MerchNbr value
     * @return string|null
     */
    public function getMerchNbr()
    {
        return $this->MerchNbr;
    }
    /**
     * Set MerchNbr value
     * @param string $merchNbr
     * @return \StructType\PosGetUserDeviceSettingsReqType
     */
    public function setMerchNbr($merchNbr = null)
    {
        // validation for constraint: string
        if (!is_null($merchNbr) && !is_string($merchNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchNbr)), __LINE__);
        }
        $this->MerchNbr = $merchNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGetUserDeviceSettingsReqType
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
