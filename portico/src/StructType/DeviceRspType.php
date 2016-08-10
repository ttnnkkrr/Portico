<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeviceRspType StructType
 * @subpackage Structs
 */
class DeviceRspType extends AbstractStructBase
{
    /**
     * The Device
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DeviceType
     */
    public $Device;
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfNameValuePairType
     */
    public $Settings;
    /**
     * Constructor method for DeviceRspType
     * @uses DeviceRspType::setDevice()
     * @uses DeviceRspType::setSettings()
     * @param \StructType\DeviceType $device
     * @param \ArrayType\ArrayOfNameValuePairType $settings
     */
    public function __construct(\StructType\DeviceType $device = null, \ArrayType\ArrayOfNameValuePairType $settings = null)
    {
        $this
            ->setDevice($device)
            ->setSettings($settings);
    }
    /**
     * Get Device value
     * @return \StructType\DeviceType|null
     */
    public function getDevice()
    {
        return $this->Device;
    }
    /**
     * Set Device value
     * @param \StructType\DeviceType $device
     * @return \StructType\DeviceRspType
     */
    public function setDevice(\StructType\DeviceType $device = null)
    {
        $this->Device = $device;
        return $this;
    }
    /**
     * Get Settings value
     * @return \ArrayType\ArrayOfNameValuePairType|null
     */
    public function getSettings()
    {
        return $this->Settings;
    }
    /**
     * Set Settings value
     * @param \ArrayType\ArrayOfNameValuePairType $settings
     * @return \StructType\DeviceRspType
     */
    public function setSettings(\ArrayType\ArrayOfNameValuePairType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DeviceRspType
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
