<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGiftCardAddValueRspType StructType
 * @subpackage Structs
 */
class PosGiftCardAddValueRspType extends AbstractStructBase
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
     * The BalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $BalanceAmt;
    /**
     * The PointsBalanceAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $PointsBalanceAmt;
    /**
     * The Rewards
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Rewards;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * Constructor method for PosGiftCardAddValueRspType
     * @uses PosGiftCardAddValueRspType::setRspCode()
     * @uses PosGiftCardAddValueRspType::setRspText()
     * @uses PosGiftCardAddValueRspType::setAuthCode()
     * @uses PosGiftCardAddValueRspType::setBalanceAmt()
     * @uses PosGiftCardAddValueRspType::setPointsBalanceAmt()
     * @uses PosGiftCardAddValueRspType::setRewards()
     * @uses PosGiftCardAddValueRspType::setNotes()
     * @param int $rspCode
     * @param string $rspText
     * @param string $authCode
     * @param float $balanceAmt
     * @param float $pointsBalanceAmt
     * @param string $rewards
     * @param string $notes
     */
    public function __construct($rspCode = null, $rspText = null, $authCode = null, $balanceAmt = null, $pointsBalanceAmt = null, $rewards = null, $notes = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setAuthCode($authCode)
            ->setBalanceAmt($balanceAmt)
            ->setPointsBalanceAmt($pointsBalanceAmt)
            ->setRewards($rewards)
            ->setNotes($notes);
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
     * @return \StructType\PosGiftCardAddValueRspType
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
     * @return \StructType\PosGiftCardAddValueRspType
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
     * @return \StructType\PosGiftCardAddValueRspType
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
     * Get BalanceAmt value
     * @return float|null
     */
    public function getBalanceAmt()
    {
        return $this->BalanceAmt;
    }
    /**
     * Set BalanceAmt value
     * @param float $balanceAmt
     * @return \StructType\PosGiftCardAddValueRspType
     */
    public function setBalanceAmt($balanceAmt = null)
    {
        $this->BalanceAmt = $balanceAmt;
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
     * @return \StructType\PosGiftCardAddValueRspType
     */
    public function setPointsBalanceAmt($pointsBalanceAmt = null)
    {
        $this->PointsBalanceAmt = $pointsBalanceAmt;
        return $this;
    }
    /**
     * Get Rewards value
     * @return string|null
     */
    public function getRewards()
    {
        return $this->Rewards;
    }
    /**
     * Set Rewards value
     * @param string $rewards
     * @return \StructType\PosGiftCardAddValueRspType
     */
    public function setRewards($rewards = null)
    {
        // validation for constraint: string
        if (!is_null($rewards) && !is_string($rewards)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rewards)), __LINE__);
        }
        $this->Rewards = $rewards;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \StructType\PosGiftCardAddValueRspType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosGiftCardAddValueRspType
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
