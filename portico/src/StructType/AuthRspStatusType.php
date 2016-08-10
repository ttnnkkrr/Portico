<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthRspStatusType StructType
 * @subpackage Structs
 */
class AuthRspStatusType extends AbstractStructBase
{
    /**
     * The RspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
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
     * The AVSRsltCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AVSRsltCode;
    /**
     * The CVVRsltCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVVRsltCode;
    /**
     * The CPCInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCInd;
    /**
     * The RefNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefNbr;
    /**
     * The AvailableBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AvailableBalance;
    /**
     * The AuthAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AuthAmt;
    /**
     * The AVSResultCodeAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AVSResultCodeAction;
    /**
     * The CVVResultCodeAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVVResultCodeAction;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardType;
    /**
     * The AVSRsltText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AVSRsltText;
    /**
     * The CVVRsltText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVVRsltText;
    /**
     * The TxnDescriptor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnDescriptor;
    /**
     * The RecurringDataCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RecurringDataCode;
    /**
     * The EMVIssuerResp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVIssuerResp;
    /**
     * The CAVVResultCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CAVVResultCode;
    /**
     * The TokenPANLast4
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenPANLast4;
    /**
     * Constructor method for AuthRspStatusType
     * @uses AuthRspStatusType::setRspCode()
     * @uses AuthRspStatusType::setRspText()
     * @uses AuthRspStatusType::setAuthCode()
     * @uses AuthRspStatusType::setAVSRsltCode()
     * @uses AuthRspStatusType::setCVVRsltCode()
     * @uses AuthRspStatusType::setCPCInd()
     * @uses AuthRspStatusType::setRefNbr()
     * @uses AuthRspStatusType::setAvailableBalance()
     * @uses AuthRspStatusType::setAuthAmt()
     * @uses AuthRspStatusType::setAVSResultCodeAction()
     * @uses AuthRspStatusType::setCVVResultCodeAction()
     * @uses AuthRspStatusType::setCardType()
     * @uses AuthRspStatusType::setAVSRsltText()
     * @uses AuthRspStatusType::setCVVRsltText()
     * @uses AuthRspStatusType::setTxnDescriptor()
     * @uses AuthRspStatusType::setRecurringDataCode()
     * @uses AuthRspStatusType::setEMVIssuerResp()
     * @uses AuthRspStatusType::setCAVVResultCode()
     * @uses AuthRspStatusType::setTokenPANLast4()
     * @param string $rspCode
     * @param string $rspText
     * @param string $authCode
     * @param string $aVSRsltCode
     * @param string $cVVRsltCode
     * @param string $cPCInd
     * @param string $refNbr
     * @param float $availableBalance
     * @param float $authAmt
     * @param string $aVSResultCodeAction
     * @param string $cVVResultCodeAction
     * @param string $cardType
     * @param string $aVSRsltText
     * @param string $cVVRsltText
     * @param string $txnDescriptor
     * @param string $recurringDataCode
     * @param string $eMVIssuerResp
     * @param string $cAVVResultCode
     * @param string $tokenPANLast4
     */
    public function __construct($rspCode = null, $rspText = null, $authCode = null, $aVSRsltCode = null, $cVVRsltCode = null, $cPCInd = null, $refNbr = null, $availableBalance = null, $authAmt = null, $aVSResultCodeAction = null, $cVVResultCodeAction = null, $cardType = null, $aVSRsltText = null, $cVVRsltText = null, $txnDescriptor = null, $recurringDataCode = null, $eMVIssuerResp = null, $cAVVResultCode = null, $tokenPANLast4 = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setAuthCode($authCode)
            ->setAVSRsltCode($aVSRsltCode)
            ->setCVVRsltCode($cVVRsltCode)
            ->setCPCInd($cPCInd)
            ->setRefNbr($refNbr)
            ->setAvailableBalance($availableBalance)
            ->setAuthAmt($authAmt)
            ->setAVSResultCodeAction($aVSResultCodeAction)
            ->setCVVResultCodeAction($cVVResultCodeAction)
            ->setCardType($cardType)
            ->setAVSRsltText($aVSRsltText)
            ->setCVVRsltText($cVVRsltText)
            ->setTxnDescriptor($txnDescriptor)
            ->setRecurringDataCode($recurringDataCode)
            ->setEMVIssuerResp($eMVIssuerResp)
            ->setCAVVResultCode($cAVVResultCode)
            ->setTokenPANLast4($tokenPANLast4);
    }
    /**
     * Get RspCode value
     * @return string|null
     */
    public function getRspCode()
    {
        return $this->RspCode;
    }
    /**
     * Set RspCode value
     * @param string $rspCode
     * @return \StructType\AuthRspStatusType
     */
    public function setRspCode($rspCode = null)
    {
        // validation for constraint: string
        if (!is_null($rspCode) && !is_string($rspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspCode)), __LINE__);
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
     * @return \StructType\AuthRspStatusType
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
     * @return \StructType\AuthRspStatusType
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
     * Get AVSRsltCode value
     * @return string|null
     */
    public function getAVSRsltCode()
    {
        return $this->AVSRsltCode;
    }
    /**
     * Set AVSRsltCode value
     * @param string $aVSRsltCode
     * @return \StructType\AuthRspStatusType
     */
    public function setAVSRsltCode($aVSRsltCode = null)
    {
        // validation for constraint: string
        if (!is_null($aVSRsltCode) && !is_string($aVSRsltCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aVSRsltCode)), __LINE__);
        }
        $this->AVSRsltCode = $aVSRsltCode;
        return $this;
    }
    /**
     * Get CVVRsltCode value
     * @return string|null
     */
    public function getCVVRsltCode()
    {
        return $this->CVVRsltCode;
    }
    /**
     * Set CVVRsltCode value
     * @param string $cVVRsltCode
     * @return \StructType\AuthRspStatusType
     */
    public function setCVVRsltCode($cVVRsltCode = null)
    {
        // validation for constraint: string
        if (!is_null($cVVRsltCode) && !is_string($cVVRsltCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVVRsltCode)), __LINE__);
        }
        $this->CVVRsltCode = $cVVRsltCode;
        return $this;
    }
    /**
     * Get CPCInd value
     * @return string|null
     */
    public function getCPCInd()
    {
        return $this->CPCInd;
    }
    /**
     * Set CPCInd value
     * @param string $cPCInd
     * @return \StructType\AuthRspStatusType
     */
    public function setCPCInd($cPCInd = null)
    {
        // validation for constraint: string
        if (!is_null($cPCInd) && !is_string($cPCInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cPCInd)), __LINE__);
        }
        $this->CPCInd = $cPCInd;
        return $this;
    }
    /**
     * Get RefNbr value
     * @return string|null
     */
    public function getRefNbr()
    {
        return $this->RefNbr;
    }
    /**
     * Set RefNbr value
     * @param string $refNbr
     * @return \StructType\AuthRspStatusType
     */
    public function setRefNbr($refNbr = null)
    {
        // validation for constraint: string
        if (!is_null($refNbr) && !is_string($refNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refNbr)), __LINE__);
        }
        $this->RefNbr = $refNbr;
        return $this;
    }
    /**
     * Get AvailableBalance value
     * @return float|null
     */
    public function getAvailableBalance()
    {
        return $this->AvailableBalance;
    }
    /**
     * Set AvailableBalance value
     * @param float $availableBalance
     * @return \StructType\AuthRspStatusType
     */
    public function setAvailableBalance($availableBalance = null)
    {
        $this->AvailableBalance = $availableBalance;
        return $this;
    }
    /**
     * Get AuthAmt value
     * @return float|null
     */
    public function getAuthAmt()
    {
        return $this->AuthAmt;
    }
    /**
     * Set AuthAmt value
     * @param float $authAmt
     * @return \StructType\AuthRspStatusType
     */
    public function setAuthAmt($authAmt = null)
    {
        $this->AuthAmt = $authAmt;
        return $this;
    }
    /**
     * Get AVSResultCodeAction value
     * @return string|null
     */
    public function getAVSResultCodeAction()
    {
        return $this->AVSResultCodeAction;
    }
    /**
     * Set AVSResultCodeAction value
     * @uses \EnumType\ResultCodeActionType::valueIsValid()
     * @uses \EnumType\ResultCodeActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aVSResultCodeAction
     * @return \StructType\AuthRspStatusType
     */
    public function setAVSResultCodeAction($aVSResultCodeAction = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResultCodeActionType::valueIsValid($aVSResultCodeAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $aVSResultCodeAction, implode(', ', \EnumType\ResultCodeActionType::getValidValues())), __LINE__);
        }
        $this->AVSResultCodeAction = $aVSResultCodeAction;
        return $this;
    }
    /**
     * Get CVVResultCodeAction value
     * @return string|null
     */
    public function getCVVResultCodeAction()
    {
        return $this->CVVResultCodeAction;
    }
    /**
     * Set CVVResultCodeAction value
     * @uses \EnumType\ResultCodeActionType::valueIsValid()
     * @uses \EnumType\ResultCodeActionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cVVResultCodeAction
     * @return \StructType\AuthRspStatusType
     */
    public function setCVVResultCodeAction($cVVResultCodeAction = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResultCodeActionType::valueIsValid($cVVResultCodeAction)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $cVVResultCodeAction, implode(', ', \EnumType\ResultCodeActionType::getValidValues())), __LINE__);
        }
        $this->CVVResultCodeAction = $cVVResultCodeAction;
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
     * @return \StructType\AuthRspStatusType
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
     * Get AVSRsltText value
     * @return string|null
     */
    public function getAVSRsltText()
    {
        return $this->AVSRsltText;
    }
    /**
     * Set AVSRsltText value
     * @param string $aVSRsltText
     * @return \StructType\AuthRspStatusType
     */
    public function setAVSRsltText($aVSRsltText = null)
    {
        // validation for constraint: string
        if (!is_null($aVSRsltText) && !is_string($aVSRsltText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($aVSRsltText)), __LINE__);
        }
        $this->AVSRsltText = $aVSRsltText;
        return $this;
    }
    /**
     * Get CVVRsltText value
     * @return string|null
     */
    public function getCVVRsltText()
    {
        return $this->CVVRsltText;
    }
    /**
     * Set CVVRsltText value
     * @param string $cVVRsltText
     * @return \StructType\AuthRspStatusType
     */
    public function setCVVRsltText($cVVRsltText = null)
    {
        // validation for constraint: string
        if (!is_null($cVVRsltText) && !is_string($cVVRsltText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVVRsltText)), __LINE__);
        }
        $this->CVVRsltText = $cVVRsltText;
        return $this;
    }
    /**
     * Get TxnDescriptor value
     * @return string|null
     */
    public function getTxnDescriptor()
    {
        return $this->TxnDescriptor;
    }
    /**
     * Set TxnDescriptor value
     * @param string $txnDescriptor
     * @return \StructType\AuthRspStatusType
     */
    public function setTxnDescriptor($txnDescriptor = null)
    {
        // validation for constraint: string
        if (!is_null($txnDescriptor) && !is_string($txnDescriptor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnDescriptor)), __LINE__);
        }
        $this->TxnDescriptor = $txnDescriptor;
        return $this;
    }
    /**
     * Get RecurringDataCode value
     * @return string|null
     */
    public function getRecurringDataCode()
    {
        return $this->RecurringDataCode;
    }
    /**
     * Set RecurringDataCode value
     * @param string $recurringDataCode
     * @return \StructType\AuthRspStatusType
     */
    public function setRecurringDataCode($recurringDataCode = null)
    {
        // validation for constraint: string
        if (!is_null($recurringDataCode) && !is_string($recurringDataCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($recurringDataCode)), __LINE__);
        }
        $this->RecurringDataCode = $recurringDataCode;
        return $this;
    }
    /**
     * Get EMVIssuerResp value
     * @return string|null
     */
    public function getEMVIssuerResp()
    {
        return $this->EMVIssuerResp;
    }
    /**
     * Set EMVIssuerResp value
     * @param string $eMVIssuerResp
     * @return \StructType\AuthRspStatusType
     */
    public function setEMVIssuerResp($eMVIssuerResp = null)
    {
        // validation for constraint: string
        if (!is_null($eMVIssuerResp) && !is_string($eMVIssuerResp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMVIssuerResp)), __LINE__);
        }
        $this->EMVIssuerResp = $eMVIssuerResp;
        return $this;
    }
    /**
     * Get CAVVResultCode value
     * @return string|null
     */
    public function getCAVVResultCode()
    {
        return $this->CAVVResultCode;
    }
    /**
     * Set CAVVResultCode value
     * @param string $cAVVResultCode
     * @return \StructType\AuthRspStatusType
     */
    public function setCAVVResultCode($cAVVResultCode = null)
    {
        // validation for constraint: string
        if (!is_null($cAVVResultCode) && !is_string($cAVVResultCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cAVVResultCode)), __LINE__);
        }
        $this->CAVVResultCode = $cAVVResultCode;
        return $this;
    }
    /**
     * Get TokenPANLast4 value
     * @return string|null
     */
    public function getTokenPANLast4()
    {
        return $this->TokenPANLast4;
    }
    /**
     * Set TokenPANLast4 value
     * @param string $tokenPANLast4
     * @return \StructType\AuthRspStatusType
     */
    public function setTokenPANLast4($tokenPANLast4 = null)
    {
        // validation for constraint: string
        if (!is_null($tokenPANLast4) && !is_string($tokenPANLast4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenPANLast4)), __LINE__);
        }
        $this->TokenPANLast4 = $tokenPANLast4;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AuthRspStatusType
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
