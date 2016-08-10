<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CredentialDataType StructType
 * @subpackage Structs
 */
class CredentialDataType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The ImpersonatedDisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ImpersonatedDisplayName;
    /**
     * Constructor method for CredentialDataType
     * @uses CredentialDataType::setDisplayName()
     * @uses CredentialDataType::setImpersonatedDisplayName()
     * @param string $displayName
     * @param string $impersonatedDisplayName
     */
    public function __construct($displayName = null, $impersonatedDisplayName = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setImpersonatedDisplayName($impersonatedDisplayName);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\CredentialDataType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get ImpersonatedDisplayName value
     * @return string|null
     */
    public function getImpersonatedDisplayName()
    {
        return $this->ImpersonatedDisplayName;
    }
    /**
     * Set ImpersonatedDisplayName value
     * @param string $impersonatedDisplayName
     * @return \StructType\CredentialDataType
     */
    public function setImpersonatedDisplayName($impersonatedDisplayName = null)
    {
        // validation for constraint: string
        if (!is_null($impersonatedDisplayName) && !is_string($impersonatedDisplayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($impersonatedDisplayName)), __LINE__);
        }
        $this->ImpersonatedDisplayName = $impersonatedDisplayName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CredentialDataType
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
