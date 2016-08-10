<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentityInfoType StructType
 * @subpackage Structs
 */
class IdentityInfoType extends AbstractStructBase
{
    /**
     * The SSNL4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SSNL4;
    /**
     * The DOBYear
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DOBYear;
    /**
     * Constructor method for IdentityInfoType
     * @uses IdentityInfoType::setSSNL4()
     * @uses IdentityInfoType::setDOBYear()
     * @param string $sSNL4
     * @param string $dOBYear
     */
    public function __construct($sSNL4 = null, $dOBYear = null)
    {
        $this
            ->setSSNL4($sSNL4)
            ->setDOBYear($dOBYear);
    }
    /**
     * Get SSNL4 value
     * @return string|null
     */
    public function getSSNL4()
    {
        return $this->SSNL4;
    }
    /**
     * Set SSNL4 value
     * @param string $sSNL4
     * @return \StructType\IdentityInfoType
     */
    public function setSSNL4($sSNL4 = null)
    {
        // validation for constraint: string
        if (!is_null($sSNL4) && !is_string($sSNL4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sSNL4)), __LINE__);
        }
        $this->SSNL4 = $sSNL4;
        return $this;
    }
    /**
     * Get DOBYear value
     * @return string|null
     */
    public function getDOBYear()
    {
        return $this->DOBYear;
    }
    /**
     * Set DOBYear value
     * @param string $dOBYear
     * @return \StructType\IdentityInfoType
     */
    public function setDOBYear($dOBYear = null)
    {
        // validation for constraint: string
        if (!is_null($dOBYear) && !is_string($dOBYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dOBYear)), __LINE__);
        }
        $this->DOBYear = $dOBYear;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\IdentityInfoType
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
