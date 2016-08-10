<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageSettingsReqType StructType
 * @subpackage Structs
 */
class ManageSettingsReqType extends AbstractStructBase
{
    /**
     * The MerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchNbr;
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DeviceId;
    /**
     * The SettingActions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\SettingActions
     */
    public $SettingActions;
    /**
     * Constructor method for ManageSettingsReqType
     * @uses ManageSettingsReqType::setMerchNbr()
     * @uses ManageSettingsReqType::setDeviceId()
     * @uses ManageSettingsReqType::setSettingActions()
     * @param string $merchNbr
     * @param int $deviceId
     * @param \StructType\SettingActions $settingActions
     */
    public function __construct($merchNbr = null, $deviceId = null, \StructType\SettingActions $settingActions = null)
    {
        $this
            ->setMerchNbr($merchNbr)
            ->setDeviceId($deviceId)
            ->setSettingActions($settingActions);
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
     * @return \StructType\ManageSettingsReqType
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
     * @return \StructType\ManageSettingsReqType
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
     * Get SettingActions value
     * @return \StructType\SettingActions|null
     */
    public function getSettingActions()
    {
        return $this->SettingActions;
    }
    /**
     * Set SettingActions value
     * @param \StructType\SettingActions $settingActions
     * @return \StructType\ManageSettingsReqType
     */
    public function setSettingActions(\StructType\SettingActions $settingActions = null)
    {
        $this->SettingActions = $settingActions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ManageSettingsReqType
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
