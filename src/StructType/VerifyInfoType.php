<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyInfoType StructType
 * @subpackage Structs
 */
class VerifyInfoType extends AbstractStructBase
{
    /**
     * The CheckVerify
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckVerify;
    /**
     * The ACHVerify
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ACHVerify;
    /**
     * Constructor method for VerifyInfoType
     * @uses VerifyInfoType::setCheckVerify()
     * @uses VerifyInfoType::setACHVerify()
     * @param string $checkVerify
     * @param string $aCHVerify
     */
    public function __construct($checkVerify = null, $aCHVerify = null)
    {
        $this
            ->setCheckVerify($checkVerify)
            ->setACHVerify($aCHVerify);
    }
    /**
     * Get CheckVerify value
     * @return string|null
     */
    public function getCheckVerify()
    {
        return $this->CheckVerify;
    }
    /**
     * Set CheckVerify value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkVerify
     * @return \StructType\VerifyInfoType
     */
    public function setCheckVerify($checkVerify = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($checkVerify)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $checkVerify, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->CheckVerify = $checkVerify;
        return $this;
    }
    /**
     * Get ACHVerify value
     * @return string|null
     */
    public function getACHVerify()
    {
        return $this->ACHVerify;
    }
    /**
     * Set ACHVerify value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aCHVerify
     * @return \StructType\VerifyInfoType
     */
    public function setACHVerify($aCHVerify = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($aCHVerify)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aCHVerify, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->ACHVerify = $aCHVerify;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VerifyInfoType
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
