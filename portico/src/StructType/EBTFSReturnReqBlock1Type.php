<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EBTFSReturnReqBlock1Type StructType
 * @subpackage Structs
 */
class EBTFSReturnReqBlock1Type extends AbstractStructBase
{
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardDataType
     */
    public $CardData;
    /**
     * The PinBlock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PinBlock;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
    /**
     * The AllowDup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowDup;
    /**
     * Constructor method for EBTFSReturnReqBlock1Type
     * @uses EBTFSReturnReqBlock1Type::setAmt()
     * @uses EBTFSReturnReqBlock1Type::setCardData()
     * @uses EBTFSReturnReqBlock1Type::setPinBlock()
     * @uses EBTFSReturnReqBlock1Type::setCardHolderData()
     * @uses EBTFSReturnReqBlock1Type::setAllowDup()
     * @param float $amt
     * @param \StructType\CardDataType $cardData
     * @param string $pinBlock
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $allowDup
     */
    public function __construct($amt = null, \StructType\CardDataType $cardData = null, $pinBlock = null, \StructType\CardHolderDataType $cardHolderData = null, $allowDup = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setPinBlock($pinBlock)
            ->setCardHolderData($cardHolderData)
            ->setAllowDup($allowDup);
    }
    /**
     * Get Amt value
     * @return float
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\EBTFSReturnReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get CardData value
     * @return \StructType\CardDataType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\CardDataType $cardData
     * @return \StructType\EBTFSReturnReqBlock1Type
     */
    public function setCardData(\StructType\CardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get PinBlock value
     * @return string|null
     */
    public function getPinBlock()
    {
        return $this->PinBlock;
    }
    /**
     * Set PinBlock value
     * @param string $pinBlock
     * @return \StructType\EBTFSReturnReqBlock1Type
     */
    public function setPinBlock($pinBlock = null)
    {
        // validation for constraint: string
        if (!is_null($pinBlock) && !is_string($pinBlock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pinBlock)), __LINE__);
        }
        $this->PinBlock = $pinBlock;
        return $this;
    }
    /**
     * Get CardHolderData value
     * @return \StructType\CardHolderDataType|null
     */
    public function getCardHolderData()
    {
        return $this->CardHolderData;
    }
    /**
     * Set CardHolderData value
     * @param \StructType\CardHolderDataType $cardHolderData
     * @return \StructType\EBTFSReturnReqBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
        return $this;
    }
    /**
     * Get AllowDup value
     * @return string|null
     */
    public function getAllowDup()
    {
        return $this->AllowDup;
    }
    /**
     * Set AllowDup value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowDup
     * @return \StructType\EBTFSReturnReqBlock1Type
     */
    public function setAllowDup($allowDup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($allowDup)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowDup, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->AllowDup = $allowDup;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EBTFSReturnReqBlock1Type
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
