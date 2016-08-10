<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDLCardTypeRspType StructType
 * @subpackage Structs
 */
class PDLCardTypeRspType extends AbstractStructBase
{
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardType;
    /**
     * The Table40Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table40Version;
    /**
     * The Table40Flag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table40Flag;
    /**
     * The Table50Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table50Version;
    /**
     * The Table50Flag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table50Flag;
    /**
     * The Table60Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table60Version;
    /**
     * The Table60Flag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Table60Flag;
    /**
     * Constructor method for PDLCardTypeRspType
     * @uses PDLCardTypeRspType::setCardType()
     * @uses PDLCardTypeRspType::setTable40Version()
     * @uses PDLCardTypeRspType::setTable40Flag()
     * @uses PDLCardTypeRspType::setTable50Version()
     * @uses PDLCardTypeRspType::setTable50Flag()
     * @uses PDLCardTypeRspType::setTable60Version()
     * @uses PDLCardTypeRspType::setTable60Flag()
     * @param string $cardType
     * @param string $table40Version
     * @param string $table40Flag
     * @param string $table50Version
     * @param string $table50Flag
     * @param string $table60Version
     * @param string $table60Flag
     */
    public function __construct($cardType = null, $table40Version = null, $table40Flag = null, $table50Version = null, $table50Flag = null, $table60Version = null, $table60Flag = null)
    {
        $this
            ->setCardType($cardType)
            ->setTable40Version($table40Version)
            ->setTable40Flag($table40Flag)
            ->setTable50Version($table50Version)
            ->setTable50Flag($table50Flag)
            ->setTable60Version($table60Version)
            ->setTable60Flag($table60Flag);
    }
    /**
     * Get CardType value
     * @return string|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @param string $cardType
     * @return \StructType\PDLCardTypeRspType
     */
    public function setCardType($cardType = null)
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardType)), __LINE__);
        }
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Get Table40Version value
     * @return string|null
     */
    public function getTable40Version()
    {
        return $this->Table40Version;
    }
    /**
     * Set Table40Version value
     * @param string $table40Version
     * @return \StructType\PDLCardTypeRspType
     */
    public function setTable40Version($table40Version = null)
    {
        // validation for constraint: string
        if (!is_null($table40Version) && !is_string($table40Version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($table40Version)), __LINE__);
        }
        $this->Table40Version = $table40Version;
        return $this;
    }
    /**
     * Get Table40Flag value
     * @return string|null
     */
    public function getTable40Flag()
    {
        return $this->Table40Flag;
    }
    /**
     * Set Table40Flag value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $table40Flag
     * @return \StructType\PDLCardTypeRspType
     */
    public function setTable40Flag($table40Flag = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($table40Flag)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $table40Flag, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Table40Flag = $table40Flag;
        return $this;
    }
    /**
     * Get Table50Version value
     * @return string|null
     */
    public function getTable50Version()
    {
        return $this->Table50Version;
    }
    /**
     * Set Table50Version value
     * @param string $table50Version
     * @return \StructType\PDLCardTypeRspType
     */
    public function setTable50Version($table50Version = null)
    {
        // validation for constraint: string
        if (!is_null($table50Version) && !is_string($table50Version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($table50Version)), __LINE__);
        }
        $this->Table50Version = $table50Version;
        return $this;
    }
    /**
     * Get Table50Flag value
     * @return string|null
     */
    public function getTable50Flag()
    {
        return $this->Table50Flag;
    }
    /**
     * Set Table50Flag value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $table50Flag
     * @return \StructType\PDLCardTypeRspType
     */
    public function setTable50Flag($table50Flag = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($table50Flag)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $table50Flag, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Table50Flag = $table50Flag;
        return $this;
    }
    /**
     * Get Table60Version value
     * @return string|null
     */
    public function getTable60Version()
    {
        return $this->Table60Version;
    }
    /**
     * Set Table60Version value
     * @param string $table60Version
     * @return \StructType\PDLCardTypeRspType
     */
    public function setTable60Version($table60Version = null)
    {
        // validation for constraint: string
        if (!is_null($table60Version) && !is_string($table60Version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($table60Version)), __LINE__);
        }
        $this->Table60Version = $table60Version;
        return $this;
    }
    /**
     * Get Table60Flag value
     * @return string|null
     */
    public function getTable60Flag()
    {
        return $this->Table60Flag;
    }
    /**
     * Set Table60Flag value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $table60Flag
     * @return \StructType\PDLCardTypeRspType
     */
    public function setTable60Flag($table60Flag = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($table60Flag)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $table60Flag, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Table60Flag = $table60Flag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDLCardTypeRspType
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
