<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardTotalsType StructType
 * @subpackage Structs
 */
class GiftCardTotalsType extends AbstractStructBase
{
    /**
     * The RspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RspCode;
    /**
     * The RspText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspText;
    /**
     * The SaleCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SaleCnt;
    /**
     * The SaleAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $SaleAmt;
    /**
     * The ActivateCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ActivateCnt;
    /**
     * The ActivateAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ActivateAmt;
    /**
     * The AddValueCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $AddValueCnt;
    /**
     * The AddValueAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AddValueAmt;
    /**
     * The VoidCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $VoidCnt;
    /**
     * The VoidAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $VoidAmt;
    /**
     * The DeactivateCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DeactivateCnt;
    /**
     * The DeactivateAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $DeactivateAmt;
    /**
     * Constructor method for GiftCardTotalsType
     * @uses GiftCardTotalsType::setRspCode()
     * @uses GiftCardTotalsType::setRspText()
     * @uses GiftCardTotalsType::setSaleCnt()
     * @uses GiftCardTotalsType::setSaleAmt()
     * @uses GiftCardTotalsType::setActivateCnt()
     * @uses GiftCardTotalsType::setActivateAmt()
     * @uses GiftCardTotalsType::setAddValueCnt()
     * @uses GiftCardTotalsType::setAddValueAmt()
     * @uses GiftCardTotalsType::setVoidCnt()
     * @uses GiftCardTotalsType::setVoidAmt()
     * @uses GiftCardTotalsType::setDeactivateCnt()
     * @uses GiftCardTotalsType::setDeactivateAmt()
     * @param int $rspCode
     * @param string $rspText
     * @param int $saleCnt
     * @param float $saleAmt
     * @param int $activateCnt
     * @param float $activateAmt
     * @param int $addValueCnt
     * @param float $addValueAmt
     * @param int $voidCnt
     * @param float $voidAmt
     * @param int $deactivateCnt
     * @param float $deactivateAmt
     */
    public function __construct($rspCode = null, $rspText = null, $saleCnt = null, $saleAmt = null, $activateCnt = null, $activateAmt = null, $addValueCnt = null, $addValueAmt = null, $voidCnt = null, $voidAmt = null, $deactivateCnt = null, $deactivateAmt = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setSaleCnt($saleCnt)
            ->setSaleAmt($saleAmt)
            ->setActivateCnt($activateCnt)
            ->setActivateAmt($activateAmt)
            ->setAddValueCnt($addValueCnt)
            ->setAddValueAmt($addValueAmt)
            ->setVoidCnt($voidCnt)
            ->setVoidAmt($voidAmt)
            ->setDeactivateCnt($deactivateCnt)
            ->setDeactivateAmt($deactivateAmt);
    }
    /**
     * Get RspCode value
     * @return int
     */
    public function getRspCode()
    {
        return $this->RspCode;
    }
    /**
     * Set RspCode value
     * @param int $rspCode
     * @return \StructType\GiftCardTotalsType
     */
    public function setRspCode($rspCode = null)
    {
        // validation for constraint: int
        if (!is_null($rspCode) && !is_numeric($rspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rspCode)), __LINE__);
        }
        $this->RspCode = $rspCode;
        return $this;
    }
    /**
     * Get RspText value
     * @return string|null
     */
    public function getRspText()
    {
        return $this->RspText;
    }
    /**
     * Set RspText value
     * @param string $rspText
     * @return \StructType\GiftCardTotalsType
     */
    public function setRspText($rspText = null)
    {
        // validation for constraint: string
        if (!is_null($rspText) && !is_string($rspText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspText)), __LINE__);
        }
        $this->RspText = $rspText;
        return $this;
    }
    /**
     * Get SaleCnt value
     * @return int|null
     */
    public function getSaleCnt()
    {
        return $this->SaleCnt;
    }
    /**
     * Set SaleCnt value
     * @param int $saleCnt
     * @return \StructType\GiftCardTotalsType
     */
    public function setSaleCnt($saleCnt = null)
    {
        // validation for constraint: int
        if (!is_null($saleCnt) && !is_numeric($saleCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($saleCnt)), __LINE__);
        }
        $this->SaleCnt = $saleCnt;
        return $this;
    }
    /**
     * Get SaleAmt value
     * @return float|null
     */
    public function getSaleAmt()
    {
        return $this->SaleAmt;
    }
    /**
     * Set SaleAmt value
     * @param float $saleAmt
     * @return \StructType\GiftCardTotalsType
     */
    public function setSaleAmt($saleAmt = null)
    {
        $this->SaleAmt = $saleAmt;
        return $this;
    }
    /**
     * Get ActivateCnt value
     * @return int|null
     */
    public function getActivateCnt()
    {
        return $this->ActivateCnt;
    }
    /**
     * Set ActivateCnt value
     * @param int $activateCnt
     * @return \StructType\GiftCardTotalsType
     */
    public function setActivateCnt($activateCnt = null)
    {
        // validation for constraint: int
        if (!is_null($activateCnt) && !is_numeric($activateCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($activateCnt)), __LINE__);
        }
        $this->ActivateCnt = $activateCnt;
        return $this;
    }
    /**
     * Get ActivateAmt value
     * @return float|null
     */
    public function getActivateAmt()
    {
        return $this->ActivateAmt;
    }
    /**
     * Set ActivateAmt value
     * @param float $activateAmt
     * @return \StructType\GiftCardTotalsType
     */
    public function setActivateAmt($activateAmt = null)
    {
        $this->ActivateAmt = $activateAmt;
        return $this;
    }
    /**
     * Get AddValueCnt value
     * @return int|null
     */
    public function getAddValueCnt()
    {
        return $this->AddValueCnt;
    }
    /**
     * Set AddValueCnt value
     * @param int $addValueCnt
     * @return \StructType\GiftCardTotalsType
     */
    public function setAddValueCnt($addValueCnt = null)
    {
        // validation for constraint: int
        if (!is_null($addValueCnt) && !is_numeric($addValueCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($addValueCnt)), __LINE__);
        }
        $this->AddValueCnt = $addValueCnt;
        return $this;
    }
    /**
     * Get AddValueAmt value
     * @return float|null
     */
    public function getAddValueAmt()
    {
        return $this->AddValueAmt;
    }
    /**
     * Set AddValueAmt value
     * @param float $addValueAmt
     * @return \StructType\GiftCardTotalsType
     */
    public function setAddValueAmt($addValueAmt = null)
    {
        $this->AddValueAmt = $addValueAmt;
        return $this;
    }
    /**
     * Get VoidCnt value
     * @return int|null
     */
    public function getVoidCnt()
    {
        return $this->VoidCnt;
    }
    /**
     * Set VoidCnt value
     * @param int $voidCnt
     * @return \StructType\GiftCardTotalsType
     */
    public function setVoidCnt($voidCnt = null)
    {
        // validation for constraint: int
        if (!is_null($voidCnt) && !is_numeric($voidCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($voidCnt)), __LINE__);
        }
        $this->VoidCnt = $voidCnt;
        return $this;
    }
    /**
     * Get VoidAmt value
     * @return float|null
     */
    public function getVoidAmt()
    {
        return $this->VoidAmt;
    }
    /**
     * Set VoidAmt value
     * @param float $voidAmt
     * @return \StructType\GiftCardTotalsType
     */
    public function setVoidAmt($voidAmt = null)
    {
        $this->VoidAmt = $voidAmt;
        return $this;
    }
    /**
     * Get DeactivateCnt value
     * @return int|null
     */
    public function getDeactivateCnt()
    {
        return $this->DeactivateCnt;
    }
    /**
     * Set DeactivateCnt value
     * @param int $deactivateCnt
     * @return \StructType\GiftCardTotalsType
     */
    public function setDeactivateCnt($deactivateCnt = null)
    {
        // validation for constraint: int
        if (!is_null($deactivateCnt) && !is_numeric($deactivateCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deactivateCnt)), __LINE__);
        }
        $this->DeactivateCnt = $deactivateCnt;
        return $this;
    }
    /**
     * Get DeactivateAmt value
     * @return float|null
     */
    public function getDeactivateAmt()
    {
        return $this->DeactivateAmt;
    }
    /**
     * Set DeactivateAmt value
     * @param float $deactivateAmt
     * @return \StructType\GiftCardTotalsType
     */
    public function setDeactivateAmt($deactivateAmt = null)
    {
        $this->DeactivateAmt = $deactivateAmt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardTotalsType
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
