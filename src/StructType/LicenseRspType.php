<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LicenseRspType StructType
 * @subpackage Structs
 */
class LicenseRspType extends AbstractStructBase
{
    /**
     * The LicenseId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $LicenseId;
    /**
     * Constructor method for LicenseRspType
     * @uses LicenseRspType::setLicenseId()
     * @param int $licenseId
     */
    public function __construct($licenseId = null)
    {
        $this
            ->setLicenseId($licenseId);
    }
    /**
     * Get LicenseId value
     * @return int
     */
    public function getLicenseId()
    {
        return $this->LicenseId;
    }
    /**
     * Set LicenseId value
     * @param int $licenseId
     * @return \StructType\LicenseRspType
     */
    public function setLicenseId($licenseId = null)
    {
        // validation for constraint: int
        if (!is_null($licenseId) && !is_numeric($licenseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($licenseId)), __LINE__);
        }
        $this->LicenseId = $licenseId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LicenseRspType
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
