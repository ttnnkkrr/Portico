<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ManageSettingsRspType StructType
 * @subpackage Structs
 */
class ManageSettingsRspType extends AbstractStructBase
{
    /**
     * The Site
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfNameValuePairType
     */
    public $Site;
    /**
     * The Device
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfNameValuePairType
     */
    public $Device;
    /**
     * Constructor method for ManageSettingsRspType
     * @uses ManageSettingsRspType::setSite()
     * @uses ManageSettingsRspType::setDevice()
     * @param \ArrayType\ArrayOfNameValuePairType $site
     * @param \ArrayType\ArrayOfNameValuePairType $device
     */
    public function __construct(\ArrayType\ArrayOfNameValuePairType $site = null, \ArrayType\ArrayOfNameValuePairType $device = null)
    {
        $this
            ->setSite($site)
            ->setDevice($device);
    }
    /**
     * Get Site value
     * @return \ArrayType\ArrayOfNameValuePairType|null
     */
    public function getSite()
    {
        return $this->Site;
    }
    /**
     * Set Site value
     * @param \ArrayType\ArrayOfNameValuePairType $site
     * @return \StructType\ManageSettingsRspType
     */
    public function setSite(\ArrayType\ArrayOfNameValuePairType $site = null)
    {
        $this->Site = $site;
        return $this;
    }
    /**
     * Get Device value
     * @return \ArrayType\ArrayOfNameValuePairType|null
     */
    public function getDevice()
    {
        return $this->Device;
    }
    /**
     * Set Device value
     * @param \ArrayType\ArrayOfNameValuePairType $device
     * @return \StructType\ManageSettingsRspType
     */
    public function setDevice(\ArrayType\ArrayOfNameValuePairType $device = null)
    {
        $this->Device = $device;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ManageSettingsRspType
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
