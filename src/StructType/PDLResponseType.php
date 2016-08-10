<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDLResponseType StructType
 * @subpackage Structs
 */
class PDLResponseType extends AbstractStructBase
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
     * The Version
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Version;
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
     * The EndOfTableFlag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndOfTableFlag;
    /**
     * The ConfirmationFlag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ConfirmationFlag;
    /**
     * The TableData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PDLTableDataRspType
     */
    public $TableData;
    /**
     * Constructor method for PDLResponseType
     * @uses PDLResponseType::setBlockSequence()
     * @uses PDLResponseType::setVersion()
     * @uses PDLResponseType::setTableID()
     * @uses PDLResponseType::setCardType()
     * @uses PDLResponseType::setEndOfTableFlag()
     * @uses PDLResponseType::setConfirmationFlag()
     * @uses PDLResponseType::setTableData()
     * @param int $blockSequence
     * @param string $version
     * @param string $tableID
     * @param string $cardType
     * @param string $endOfTableFlag
     * @param string $confirmationFlag
     * @param \StructType\PDLTableDataRspType $tableData
     */
    public function __construct($blockSequence = null, $version = null, $tableID = null, $cardType = null, $endOfTableFlag = null, $confirmationFlag = null, \StructType\PDLTableDataRspType $tableData = null)
    {
        $this
            ->setBlockSequence($blockSequence)
            ->setVersion($version)
            ->setTableID($tableID)
            ->setCardType($cardType)
            ->setEndOfTableFlag($endOfTableFlag)
            ->setConfirmationFlag($confirmationFlag)
            ->setTableData($tableData);
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
     * @return \StructType\PDLResponseType
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
     * @return \StructType\PDLResponseType
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
     * @return \StructType\PDLResponseType
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
     * @return \StructType\PDLResponseType
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
     * Get EndOfTableFlag value
     * @return string|null
     */
    public function getEndOfTableFlag()
    {
        return $this->EndOfTableFlag;
    }
    /**
     * Set EndOfTableFlag value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $endOfTableFlag
     * @return \StructType\PDLResponseType
     */
    public function setEndOfTableFlag($endOfTableFlag = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($endOfTableFlag)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $endOfTableFlag, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->EndOfTableFlag = $endOfTableFlag;
        return $this;
    }
    /**
     * Get ConfirmationFlag value
     * @return string|null
     */
    public function getConfirmationFlag()
    {
        return $this->ConfirmationFlag;
    }
    /**
     * Set ConfirmationFlag value
     * @param string $confirmationFlag
     * @return \StructType\PDLResponseType
     */
    public function setConfirmationFlag($confirmationFlag = null)
    {
        // validation for constraint: string
        if (!is_null($confirmationFlag) && !is_string($confirmationFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($confirmationFlag)), __LINE__);
        }
        $this->ConfirmationFlag = $confirmationFlag;
        return $this;
    }
    /**
     * Get TableData value
     * @return \StructType\PDLTableDataRspType|null
     */
    public function getTableData()
    {
        return $this->TableData;
    }
    /**
     * Set TableData value
     * @param \StructType\PDLTableDataRspType $tableData
     * @return \StructType\PDLResponseType
     */
    public function setTableData(\StructType\PDLTableDataRspType $tableData = null)
    {
        $this->TableData = $tableData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDLResponseType
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
