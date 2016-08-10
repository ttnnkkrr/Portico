<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EMVDataType StructType
 * @subpackage Structs
 */
class EMVDataType extends AbstractStructBase
{
    /**
     * The EMVTagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVTagData;
    /**
     * The EMVChipCondition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVChipCondition;
    /**
     * The PINBlock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PINBlock;
    /**
     * Constructor method for EMVDataType
     * @uses EMVDataType::setEMVTagData()
     * @uses EMVDataType::setEMVChipCondition()
     * @uses EMVDataType::setPINBlock()
     * @param string $eMVTagData
     * @param string $eMVChipCondition
     * @param string $pINBlock
     */
    public function __construct($eMVTagData = null, $eMVChipCondition = null, $pINBlock = null)
    {
        $this
            ->setEMVTagData($eMVTagData)
            ->setEMVChipCondition($eMVChipCondition)
            ->setPINBlock($pINBlock);
    }
    /**
     * Get EMVTagData value
     * @return string|null
     */
    public function getEMVTagData()
    {
        return $this->EMVTagData;
    }
    /**
     * Set EMVTagData value
     * @param string $eMVTagData
     * @return \StructType\EMVDataType
     */
    public function setEMVTagData($eMVTagData = null)
    {
        // validation for constraint: string
        if (!is_null($eMVTagData) && !is_string($eMVTagData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMVTagData)), __LINE__);
        }
        $this->EMVTagData = $eMVTagData;
        return $this;
    }
    /**
     * Get EMVChipCondition value
     * @return string|null
     */
    public function getEMVChipCondition()
    {
        return $this->EMVChipCondition;
    }
    /**
     * Set EMVChipCondition value
     * @uses \EnumType\EmvChipConditionType::valueIsValid()
     * @uses \EnumType\EmvChipConditionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eMVChipCondition
     * @return \StructType\EMVDataType
     */
    public function setEMVChipCondition($eMVChipCondition = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmvChipConditionType::valueIsValid($eMVChipCondition)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eMVChipCondition, implode(', ', \EnumType\EmvChipConditionType::getValidValues())), __LINE__);
        }
        $this->EMVChipCondition = $eMVChipCondition;
        return $this;
    }
    /**
     * Get PINBlock value
     * @return string|null
     */
    public function getPINBlock()
    {
        return $this->PINBlock;
    }
    /**
     * Set PINBlock value
     * @param string $pINBlock
     * @return \StructType\EMVDataType
     */
    public function setPINBlock($pINBlock = null)
    {
        // validation for constraint: string
        if (!is_null($pINBlock) && !is_string($pINBlock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pINBlock)), __LINE__);
        }
        $this->PINBlock = $pINBlock;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EMVDataType
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
