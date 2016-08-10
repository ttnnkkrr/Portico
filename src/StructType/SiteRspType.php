<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteRspType StructType
 * @subpackage Structs
 */
class SiteRspType extends AbstractStructBase
{
    /**
     * The SiteId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SiteId;
    /**
     * The Settings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfNameValuePairType
     */
    public $Settings;
    /**
     * The TzoneDiff
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TzoneDiff;
    /**
     * Constructor method for SiteRspType
     * @uses SiteRspType::setSiteId()
     * @uses SiteRspType::setSettings()
     * @uses SiteRspType::setTzoneDiff()
     * @param int $siteId
     * @param \ArrayType\ArrayOfNameValuePairType $settings
     * @param string $tzoneDiff
     */
    public function __construct($siteId = null, \ArrayType\ArrayOfNameValuePairType $settings = null, $tzoneDiff = null)
    {
        $this
            ->setSiteId($siteId)
            ->setSettings($settings)
            ->setTzoneDiff($tzoneDiff);
    }
    /**
     * Get SiteId value
     * @return int
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }
    /**
     * Set SiteId value
     * @param int $siteId
     * @return \StructType\SiteRspType
     */
    public function setSiteId($siteId = null)
    {
        // validation for constraint: int
        if (!is_null($siteId) && !is_numeric($siteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($siteId)), __LINE__);
        }
        $this->SiteId = $siteId;
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
     * @return \StructType\SiteRspType
     */
    public function setSettings(\ArrayType\ArrayOfNameValuePairType $settings = null)
    {
        $this->Settings = $settings;
        return $this;
    }
    /**
     * Get TzoneDiff value
     * @return string|null
     */
    public function getTzoneDiff()
    {
        return $this->TzoneDiff;
    }
    /**
     * Set TzoneDiff value
     * @param string $tzoneDiff
     * @return \StructType\SiteRspType
     */
    public function setTzoneDiff($tzoneDiff = null)
    {
        // validation for constraint: string
        if (!is_null($tzoneDiff) && !is_string($tzoneDiff)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tzoneDiff)), __LINE__);
        }
        $this->TzoneDiff = $tzoneDiff;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SiteRspType
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
