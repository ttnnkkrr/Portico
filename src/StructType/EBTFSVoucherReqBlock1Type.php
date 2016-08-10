<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EBTFSVoucherReqBlock1Type StructType
 * @subpackage Structs
 */
class EBTFSVoucherReqBlock1Type extends AbstractStructBase
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
     * The ExprDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ExprDate;
    /**
     * The ElectronicVoucherSerialNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ElectronicVoucherSerialNbr;
    /**
     * The VoucherApprovalCd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VoucherApprovalCd;
    /**
     * The PrimaryAcctNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrimaryAcctNbr;
    /**
     * Constructor method for EBTFSVoucherReqBlock1Type
     * @uses EBTFSVoucherReqBlock1Type::setAmt()
     * @uses EBTFSVoucherReqBlock1Type::setCardData()
     * @uses EBTFSVoucherReqBlock1Type::setPinBlock()
     * @uses EBTFSVoucherReqBlock1Type::setCardHolderData()
     * @uses EBTFSVoucherReqBlock1Type::setAllowDup()
     * @uses EBTFSVoucherReqBlock1Type::setExprDate()
     * @uses EBTFSVoucherReqBlock1Type::setElectronicVoucherSerialNbr()
     * @uses EBTFSVoucherReqBlock1Type::setVoucherApprovalCd()
     * @uses EBTFSVoucherReqBlock1Type::setPrimaryAcctNbr()
     * @param float $amt
     * @param \StructType\CardDataType $cardData
     * @param string $pinBlock
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $allowDup
     * @param string $exprDate
     * @param string $electronicVoucherSerialNbr
     * @param string $voucherApprovalCd
     * @param string $primaryAcctNbr
     */
    public function __construct($amt = null, \StructType\CardDataType $cardData = null, $pinBlock = null, \StructType\CardHolderDataType $cardHolderData = null, $allowDup = null, $exprDate = null, $electronicVoucherSerialNbr = null, $voucherApprovalCd = null, $primaryAcctNbr = null)
    {
        $this
            ->setAmt($amt)
            ->setCardData($cardData)
            ->setPinBlock($pinBlock)
            ->setCardHolderData($cardHolderData)
            ->setAllowDup($allowDup)
            ->setExprDate($exprDate)
            ->setElectronicVoucherSerialNbr($electronicVoucherSerialNbr)
            ->setVoucherApprovalCd($voucherApprovalCd)
            ->setPrimaryAcctNbr($primaryAcctNbr);
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
     * @return \StructType\EBTFSVoucherReqBlock1Type
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
     * @return \StructType\EBTFSVoucherReqBlock1Type
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
     * @return \StructType\EBTFSVoucherReqBlock1Type
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
     * @return \StructType\EBTFSVoucherReqBlock1Type
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
     * @return \StructType\EBTFSVoucherReqBlock1Type
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
     * Get ExprDate value
     * @return string|null
     */
    public function getExprDate()
    {
        return $this->ExprDate;
    }
    /**
     * Set ExprDate value
     * @param string $exprDate
     * @return \StructType\EBTFSVoucherReqBlock1Type
     */
    public function setExprDate($exprDate = null)
    {
        // validation for constraint: string
        if (!is_null($exprDate) && !is_string($exprDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($exprDate)), __LINE__);
        }
        $this->ExprDate = $exprDate;
        return $this;
    }
    /**
     * Get ElectronicVoucherSerialNbr value
     * @return string|null
     */
    public function getElectronicVoucherSerialNbr()
    {
        return $this->ElectronicVoucherSerialNbr;
    }
    /**
     * Set ElectronicVoucherSerialNbr value
     * @param string $electronicVoucherSerialNbr
     * @return \StructType\EBTFSVoucherReqBlock1Type
     */
    public function setElectronicVoucherSerialNbr($electronicVoucherSerialNbr = null)
    {
        // validation for constraint: string
        if (!is_null($electronicVoucherSerialNbr) && !is_string($electronicVoucherSerialNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($electronicVoucherSerialNbr)), __LINE__);
        }
        $this->ElectronicVoucherSerialNbr = $electronicVoucherSerialNbr;
        return $this;
    }
    /**
     * Get VoucherApprovalCd value
     * @return string|null
     */
    public function getVoucherApprovalCd()
    {
        return $this->VoucherApprovalCd;
    }
    /**
     * Set VoucherApprovalCd value
     * @param string $voucherApprovalCd
     * @return \StructType\EBTFSVoucherReqBlock1Type
     */
    public function setVoucherApprovalCd($voucherApprovalCd = null)
    {
        // validation for constraint: string
        if (!is_null($voucherApprovalCd) && !is_string($voucherApprovalCd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voucherApprovalCd)), __LINE__);
        }
        $this->VoucherApprovalCd = $voucherApprovalCd;
        return $this;
    }
    /**
     * Get PrimaryAcctNbr value
     * @return string|null
     */
    public function getPrimaryAcctNbr()
    {
        return $this->PrimaryAcctNbr;
    }
    /**
     * Set PrimaryAcctNbr value
     * @param string $primaryAcctNbr
     * @return \StructType\EBTFSVoucherReqBlock1Type
     */
    public function setPrimaryAcctNbr($primaryAcctNbr = null)
    {
        // validation for constraint: string
        if (!is_null($primaryAcctNbr) && !is_string($primaryAcctNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($primaryAcctNbr)), __LINE__);
        }
        $this->PrimaryAcctNbr = $primaryAcctNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EBTFSVoucherReqBlock1Type
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
