<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EBTBalanceInquiryReqBlock1Type StructType
 * @subpackage Structs
 */
class EBTBalanceInquiryReqBlock1Type extends AbstractStructBase
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
     * The BalanceInquiryType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BalanceInquiryType;
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
     * Constructor method for EBTBalanceInquiryReqBlock1Type
     * @uses EBTBalanceInquiryReqBlock1Type::setAmt()
     * @uses EBTBalanceInquiryReqBlock1Type::setBalanceInquiryType()
     * @uses EBTBalanceInquiryReqBlock1Type::setCardData()
     * @uses EBTBalanceInquiryReqBlock1Type::setPinBlock()
     * @param float $amt
     * @param string $balanceInquiryType
     * @param \StructType\CardDataType $cardData
     * @param string $pinBlock
     */
    public function __construct($amt = null, $balanceInquiryType = null, \StructType\CardDataType $cardData = null, $pinBlock = null)
    {
        $this
            ->setAmt($amt)
            ->setBalanceInquiryType($balanceInquiryType)
            ->setCardData($cardData)
            ->setPinBlock($pinBlock);
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
     * @return \StructType\EBTBalanceInquiryReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get BalanceInquiryType value
     * @return string
     */
    public function getBalanceInquiryType()
    {
        return $this->BalanceInquiryType;
    }
    /**
     * Set BalanceInquiryType value
     * @uses \EnumType\EBTBalanceInquiryType::valueIsValid()
     * @uses \EnumType\EBTBalanceInquiryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $balanceInquiryType
     * @return \StructType\EBTBalanceInquiryReqBlock1Type
     */
    public function setBalanceInquiryType($balanceInquiryType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\EBTBalanceInquiryType::valueIsValid($balanceInquiryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $balanceInquiryType, implode(', ', \EnumType\EBTBalanceInquiryType::getValidValues())), __LINE__);
        }
        $this->BalanceInquiryType = $balanceInquiryType;
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
     * @return \StructType\EBTBalanceInquiryReqBlock1Type
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
     * @return \StructType\EBTBalanceInquiryReqBlock1Type
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EBTBalanceInquiryReqBlock1Type
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
