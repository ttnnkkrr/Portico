<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDLRequestType StructType
 * @subpackage Structs
 */
class PDLRequestType extends AbstractStructBase
{
    /**
     * The BlockSequence
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BlockSequence;
    /**
     * The ParamType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ParamType;
    /**
     * The TableID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TableID;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardType;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Version;
    /**
     * Constructor method for PDLRequestType
     * @uses PDLRequestType::setBlockSequence()
     * @uses PDLRequestType::setParamType()
     * @uses PDLRequestType::setTableID()
     * @uses PDLRequestType::setCardType()
     * @uses PDLRequestType::setVersion()
     * @param int $blockSequence
     * @param string $paramType
     * @param string $tableID
     * @param string $cardType
     * @param string $version
     */
    public function __construct($blockSequence = null, $paramType = null, $tableID = null, $cardType = null, $version = null)
    {
        $this
            ->setBlockSequence($blockSequence)
            ->setParamType($paramType)
            ->setTableID($tableID)
            ->setCardType($cardType)
            ->setVersion($version);
    }
    /**
     * Get BlockSequence value
     * @return int
     */
    public function getBlockSequence()
    {
        return $this->BlockSequence;
    }
    /**
     * Set BlockSequence value
     * @param int $blockSequence
     * @return \StructType\PDLRequestType
     */
    public function setBlockSequence($blockSequence = null)
    {
        // validation for constraint: int
        if (!is_null($blockSequence) && !is_numeric($blockSequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($blockSequence)), __LINE__);
        }
        $this->BlockSequence = $blockSequence;
        return $this;
    }
    /**
     * Get ParamType value
     * @return string|null
     */
    public function getParamType()
    {
        return $this->ParamType;
    }
    /**
     * Set ParamType value
     * @param string $paramType
     * @return \StructType\PDLRequestType
     */
    public function setParamType($paramType = null)
    {
        // validation for constraint: string
        if (!is_null($paramType) && !is_string($paramType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paramType)), __LINE__);
        }
        $this->ParamType = $paramType;
        return $this;
    }
    /**
     * Get TableID value
     * @return string|null
     */
    public function getTableID()
    {
        return $this->TableID;
    }
    /**
     * Set TableID value
     * @param string $tableID
     * @return \StructType\PDLRequestType
     */
    public function setTableID($tableID = null)
    {
        // validation for constraint: string
        if (!is_null($tableID) && !is_string($tableID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tableID)), __LINE__);
        }
        $this->TableID = $tableID;
        return $this;
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
     * @return \StructType\PDLRequestType
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
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \StructType\PDLRequestType
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDLRequestType
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
