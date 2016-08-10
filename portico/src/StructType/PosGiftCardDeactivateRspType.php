<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGiftCardDeactivateRspType StructType
 * @subpackage Structs
 */
class PosGiftCardDeactivateRspType extends AbstractStructBase
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
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthCode;
    /**
     * The RefundAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $RefundAmt;
    /**
     * The PointsBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $PointsBalanceAmt;
    /**
     * Constructor method for PosGiftCardDeactivateRspType
     * @uses PosGiftCardDeactivateRspType::setRspCode()
     * @uses PosGiftCardDeactivateRspType::setRspText()
     * @uses PosGiftCardDeactivateRspType::setAuthCode()
     * @uses PosGiftCardDeactivateRspType::setRefundAmt()
     * @uses PosGiftCardDeactivateRspType::setPointsBalanceAmt()
     * @param int $rspCode
     * @param string $rspText
     * @param string $authCode
     * @param float $refundAmt
     * @param float $pointsBalanceAmt
     */
    public function __construct($rspCode = null, $rspText = null, $authCode = null, $refundAmt = null, $pointsBalanceAmt = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setAuthCode($authCode)
            ->setRefundAmt($refundAmt)
            ->setPointsBalanceAmt($pointsBalanceAmt);
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
     * @return \StructType\PosGiftCardDeactivateRspType
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
     * @return \StructType\PosGiftCardDeactivateRspType
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
     * Get AuthCode value
     * @return string|null
     */
    public function getAuthCode()
    {
        return $this->AuthCode;
    }
    /**
     * Set AuthCode value
     * @param string $authCode
     * @return \StructType\PosGiftCardDeactivateRspType
     */
    public function setAuthCode($authCode = null)
    {
        // validation for constraint: string
        if (!is_null($authCode) && !is_string($authCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authCode)), __LINE__);
        }
        $this->AuthCode = $authCode;
        return $this;
    }
    /**
     * Get RefundAmt value
     * @return float|null
     */
    public function getRefundAmt()
    {
        return $this->RefundAmt;
    }
    /**
     * Set RefundAmt value
     * @param float $refundAmt
     * @return \StructType\PosGiftCardDeactivateRspType
     */
    public function setRefundAmt($refundAmt = null)
    {
        $this->RefundAmt = $refundAmt;
        return $this;
    }
    /**
     * Get PointsBalanceAmt value
     * @return float|null
     */
    public function getPointsBalanceAmt()
    {
        return $this->PointsBalanceAmt;
    }
    /**
     * Set PointsBalanceAmt value
     * @param float $pointsBalanceAmt
     * @return \StructType\PosGiftCardDeactivateRspType
     */
    public function setPointsBalanceAmt($pointsBalanceAmt = null)
    {
        $this->PointsBalanceAmt = $pointsBalanceAmt;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGiftCardDeactivateRspType
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
