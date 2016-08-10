<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDLTable10RspType StructType
 * @subpackage Structs
 */
class PDLTable10RspType extends AbstractStructBase
{
    /**
     * The EMVEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EMVEnabled;
    /**
     * The Table30Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table30Version;
    /**
     * The Table30Flag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table30Flag;
    /**
     * The CardTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\PDLCardTypeRspType[]
     */
    public $CardTypes;
    /**
     * Constructor method for PDLTable10RspType
     * @uses PDLTable10RspType::setEMVEnabled()
     * @uses PDLTable10RspType::setTable30Version()
     * @uses PDLTable10RspType::setTable30Flag()
     * @uses PDLTable10RspType::setCardTypes()
     * @param string $eMVEnabled
     * @param string $table30Version
     * @param string $table30Flag
     * @param \StructType\PDLCardTypeRspType[] $cardTypes
     */
    public function __construct($eMVEnabled = null, $table30Version = null, $table30Flag = null, array $cardTypes = array())
    {
        $this
            ->setEMVEnabled($eMVEnabled)
            ->setTable30Version($table30Version)
            ->setTable30Flag($table30Flag)
            ->setCardTypes($cardTypes);
    }
    /**
     * Get EMVEnabled value
     * @return string
     */
    public function getEMVEnabled()
    {
        return $this->EMVEnabled;
    }
    /**
     * Set EMVEnabled value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eMVEnabled
     * @return \StructType\PDLTable10RspType
     */
    public function setEMVEnabled($eMVEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($eMVEnabled)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $eMVEnabled, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->EMVEnabled = $eMVEnabled;
        return $this;
    }
    /**
     * Get Table30Version value
     * @return string|null
     */
    public function getTable30Version()
    {
        return $this->Table30Version;
    }
    /**
     * Set Table30Version value
     * @param string $table30Version
     * @return \StructType\PDLTable10RspType
     */
    public function setTable30Version($table30Version = null)
    {
        // validation for constraint: string
        if (!is_null($table30Version) && !is_string($table30Version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($table30Version)), __LINE__);
        }
        $this->Table30Version = $table30Version;
        return $this;
    }
    /**
     * Get Table30Flag value
     * @return string|null
     */
    public function getTable30Flag()
    {
        return $this->Table30Flag;
    }
    /**
     * Set Table30Flag value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $table30Flag
     * @return \StructType\PDLTable10RspType
     */
    public function setTable30Flag($table30Flag = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($table30Flag)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $table30Flag, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Table30Flag = $table30Flag;
        return $this;
    }
    /**
     * Get CardTypes value
     * @return \StructType\PDLCardTypeRspType[]|null
     */
    public function getCardTypes()
    {
        return $this->CardTypes;
    }
    /**
     * Set CardTypes value
     * @throws \InvalidArgumentException
     * @param \StructType\PDLCardTypeRspType[] $cardTypes
     * @return \StructType\PDLTable10RspType
     */
    public function setCardTypes(array $cardTypes = array())
    {
        foreach ($cardTypes as $pDLTable10RspTypeCardTypesItem) {
            // validation for constraint: itemType
            if (!$pDLTable10RspTypeCardTypesItem instanceof \StructType\PDLCardTypeRspType) {
                throw new \InvalidArgumentException(sprintf('The CardTypes property can only contain items of \StructType\PDLCardTypeRspType, "%s" given', is_object($pDLTable10RspTypeCardTypesItem) ? get_class($pDLTable10RspTypeCardTypesItem) : gettype($pDLTable10RspTypeCardTypesItem)), __LINE__);
            }
        }
        $this->CardTypes = $cardTypes;
        return $this;
    }
    /**
     * Add item to CardTypes value
     * @throws \InvalidArgumentException
     * @param \StructType\PDLCardTypeRspType $item
     * @return \StructType\PDLTable10RspType
     */
    public function addToCardTypes(\StructType\PDLCardTypeRspType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PDLCardTypeRspType) {
            throw new \InvalidArgumentException(sprintf('The CardTypes property can only contain items of \StructType\PDLCardTypeRspType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CardTypes[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDLTable10RspType
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
