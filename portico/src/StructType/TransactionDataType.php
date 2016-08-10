<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionDataType StructType
 * @subpackage Structs
 */
class TransactionDataType extends AbstractStructBase
{
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The ClientTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ClientTxnId;
    /**
     * The GatewayRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayRspCode;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PaymentType;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The SettlementAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $SettlementAmt;
    /**
     * The RspDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RspDT;
    /**
     * The GatewayRspMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GatewayRspMsg;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardType;
    /**
     * The MaskedCardNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MaskedCardNbr;
    /**
     * The CardSwiped
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardSwiped;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
    /**
     * The ServiceName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServiceName;
    /**
     * The TxnStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnStatus;
    /**
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthCode;
    /**
     * The AuthAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $AuthAmt;
    /**
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The ClerkID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClerkID;
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
     * The IssTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssTxnId;
    /**
     * The RefNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefNbr;
    /**
     * The BatchSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchSeqNbr;
    /**
     * The BatchCloseDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BatchCloseDT;
    /**
     * The SiteTrace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteTrace;
    /**
     * The OriginalGatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $OriginalGatewayTxnId;
    /**
     * The AcctDataSrc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AcctDataSrc;
    /**
     * The CPCData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CPCDataType
     */
    public $CPCData;
    /**
     * The LodgingData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LodgingDataType
     */
    public $LodgingData;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The CredentialData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CredentialDataType
     */
    public $CredentialData;
    /**
     * The UniqueDeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueDeviceId;
    /**
     * The ConvenienceAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ConvenienceAmtInfo;
    /**
     * The ShippingAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ShippingAmtInfo;
    /**
     * The TxnDescriptor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnDescriptor;
    /**
     * The CheckData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CheckDataType
     */
    public $CheckData;
    /**
     * The AttachmentInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttachmentInfoType[]
     */
    public $AttachmentInfo;
    /**
     * The GiftData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftDataType
     */
    public $GiftData;
    /**
     * The PaymentMethodKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodKey;
    /**
     * The RecurringData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\RecurringDataType
     */
    public $RecurringData;
    /**
     * The SurchargeAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $SurchargeAmtInfo;
    /**
     * The CashData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CashDataType
     */
    public $CashData;
    /**
     * The FraudRuleInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FraudRuleInfo;
    /**
     * The RepeatCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $RepeatCount;
    /**
     * The EMVChipCondition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVChipCondition;
    /**
     * The HasEMVTag
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HasEMVTag;
    /**
     * The HasEComPaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $HasEComPaymentData;
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
     * The Company
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Company;
    /**
     * The CustomerFirstname
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerFirstname;
    /**
     * The CustomerLastname
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerLastname;
    /**
     * The DebtRepaymentIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebtRepaymentIndicator;
    /**
     * The AltPaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AltPaymentDataType
     */
    public $AltPaymentData;
    /**
     * The MultiFulfillmentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\MultiFulfillmentDataType
     */
    public $MultiFulfillmentData;
    /**
     * Constructor method for TransactionDataType
     * @uses TransactionDataType::setGatewayTxnId()
     * @uses TransactionDataType::setClientTxnId()
     * @uses TransactionDataType::setGatewayRspCode()
     * @uses TransactionDataType::setPaymentType()
     * @uses TransactionDataType::setAmt()
     * @uses TransactionDataType::setSettlementAmt()
     * @uses TransactionDataType::setRspDT()
     * @uses TransactionDataType::setGatewayRspMsg()
     * @uses TransactionDataType::setCardType()
     * @uses TransactionDataType::setMaskedCardNbr()
     * @uses TransactionDataType::setCardSwiped()
     * @uses TransactionDataType::setCardHolderData()
     * @uses TransactionDataType::setServiceName()
     * @uses TransactionDataType::setTxnStatus()
     * @uses TransactionDataType::setAuthCode()
     * @uses TransactionDataType::setAuthAmt()
     * @uses TransactionDataType::setGratuityAmtInfo()
     * @uses TransactionDataType::setUserName()
     * @uses TransactionDataType::setClerkID()
     * @uses TransactionDataType::setRspCode()
     * @uses TransactionDataType::setRspText()
     * @uses TransactionDataType::setIssTxnId()
     * @uses TransactionDataType::setRefNbr()
     * @uses TransactionDataType::setBatchSeqNbr()
     * @uses TransactionDataType::setBatchCloseDT()
     * @uses TransactionDataType::setSiteTrace()
     * @uses TransactionDataType::setOriginalGatewayTxnId()
     * @uses TransactionDataType::setAcctDataSrc()
     * @uses TransactionDataType::setCPCData()
     * @uses TransactionDataType::setLodgingData()
     * @uses TransactionDataType::setAdditionalTxnFields()
     * @uses TransactionDataType::setCredentialData()
     * @uses TransactionDataType::setUniqueDeviceId()
     * @uses TransactionDataType::setConvenienceAmtInfo()
     * @uses TransactionDataType::setShippingAmtInfo()
     * @uses TransactionDataType::setTxnDescriptor()
     * @uses TransactionDataType::setCheckData()
     * @uses TransactionDataType::setAttachmentInfo()
     * @uses TransactionDataType::setGiftData()
     * @uses TransactionDataType::setPaymentMethodKey()
     * @uses TransactionDataType::setRecurringData()
     * @uses TransactionDataType::setSurchargeAmtInfo()
     * @uses TransactionDataType::setCashData()
     * @uses TransactionDataType::setFraudRuleInfo()
     * @uses TransactionDataType::setRepeatCount()
     * @uses TransactionDataType::setEMVChipCondition()
     * @uses TransactionDataType::setHasEMVTag()
     * @uses TransactionDataType::setHasEComPaymentData()
     * @uses TransactionDataType::setCAVVResultCode()
     * @uses TransactionDataType::setTokenPANLast4()
     * @uses TransactionDataType::setCompany()
     * @uses TransactionDataType::setCustomerFirstname()
     * @uses TransactionDataType::setCustomerLastname()
     * @uses TransactionDataType::setDebtRepaymentIndicator()
     * @uses TransactionDataType::setAltPaymentData()
     * @uses TransactionDataType::setMultiFulfillmentData()
     * @param int $gatewayTxnId
     * @param int $clientTxnId
     * @param int $gatewayRspCode
     * @param string $paymentType
     * @param float $amt
     * @param float $settlementAmt
     * @param string $rspDT
     * @param string $gatewayRspMsg
     * @param string $cardType
     * @param string $maskedCardNbr
     * @param string $cardSwiped
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param string $serviceName
     * @param string $txnStatus
     * @param string $authCode
     * @param float $authAmt
     * @param float $gratuityAmtInfo
     * @param string $userName
     * @param string $clerkID
     * @param string $rspCode
     * @param string $rspText
     * @param string $issTxnId
     * @param string $refNbr
     * @param int $batchSeqNbr
     * @param string $batchCloseDT
     * @param string $siteTrace
     * @param int $originalGatewayTxnId
     * @param string $acctDataSrc
     * @param \StructType\CPCDataType $cPCData
     * @param \StructType\LodgingDataType $lodgingData
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param \StructType\CredentialDataType $credentialData
     * @param string $uniqueDeviceId
     * @param float $convenienceAmtInfo
     * @param float $shippingAmtInfo
     * @param string $txnDescriptor
     * @param \StructType\CheckDataType $checkData
     * @param \StructType\AttachmentInfoType[] $attachmentInfo
     * @param \StructType\GiftDataType $giftData
     * @param string $paymentMethodKey
     * @param \StructType\RecurringDataType $recurringData
     * @param float $surchargeAmtInfo
     * @param \StructType\CashDataType $cashData
     * @param string $fraudRuleInfo
     * @param int $repeatCount
     * @param string $eMVChipCondition
     * @param string $hasEMVTag
     * @param string $hasEComPaymentData
     * @param string $cAVVResultCode
     * @param string $tokenPANLast4
     * @param string $company
     * @param string $customerFirstname
     * @param string $customerLastname
     * @param string $debtRepaymentIndicator
     * @param \StructType\AltPaymentDataType $altPaymentData
     * @param \StructType\MultiFulfillmentDataType $multiFulfillmentData
     */
    public function __construct($gatewayTxnId = null, $clientTxnId = null, $gatewayRspCode = null, $paymentType = null, $amt = null, $settlementAmt = null, $rspDT = null, $gatewayRspMsg = null, $cardType = null, $maskedCardNbr = null, $cardSwiped = null, \StructType\CardHolderDataType $cardHolderData = null, $serviceName = null, $txnStatus = null, $authCode = null, $authAmt = null, $gratuityAmtInfo = null, $userName = null, $clerkID = null, $rspCode = null, $rspText = null, $issTxnId = null, $refNbr = null, $batchSeqNbr = null, $batchCloseDT = null, $siteTrace = null, $originalGatewayTxnId = null, $acctDataSrc = null, \StructType\CPCDataType $cPCData = null, \StructType\LodgingDataType $lodgingData = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, \StructType\CredentialDataType $credentialData = null, $uniqueDeviceId = null, $convenienceAmtInfo = null, $shippingAmtInfo = null, $txnDescriptor = null, \StructType\CheckDataType $checkData = null, array $attachmentInfo = array(), \StructType\GiftDataType $giftData = null, $paymentMethodKey = null, \StructType\RecurringDataType $recurringData = null, $surchargeAmtInfo = null, \StructType\CashDataType $cashData = null, $fraudRuleInfo = null, $repeatCount = null, $eMVChipCondition = null, $hasEMVTag = null, $hasEComPaymentData = null, $cAVVResultCode = null, $tokenPANLast4 = null, $company = null, $customerFirstname = null, $customerLastname = null, $debtRepaymentIndicator = null, \StructType\AltPaymentDataType $altPaymentData = null, \StructType\MultiFulfillmentDataType $multiFulfillmentData = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setClientTxnId($clientTxnId)
            ->setGatewayRspCode($gatewayRspCode)
            ->setPaymentType($paymentType)
            ->setAmt($amt)
            ->setSettlementAmt($settlementAmt)
            ->setRspDT($rspDT)
            ->setGatewayRspMsg($gatewayRspMsg)
            ->setCardType($cardType)
            ->setMaskedCardNbr($maskedCardNbr)
            ->setCardSwiped($cardSwiped)
            ->setCardHolderData($cardHolderData)
            ->setServiceName($serviceName)
            ->setTxnStatus($txnStatus)
            ->setAuthCode($authCode)
            ->setAuthAmt($authAmt)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setUserName($userName)
            ->setClerkID($clerkID)
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setIssTxnId($issTxnId)
            ->setRefNbr($refNbr)
            ->setBatchSeqNbr($batchSeqNbr)
            ->setBatchCloseDT($batchCloseDT)
            ->setSiteTrace($siteTrace)
            ->setOriginalGatewayTxnId($originalGatewayTxnId)
            ->setAcctDataSrc($acctDataSrc)
            ->setCPCData($cPCData)
            ->setLodgingData($lodgingData)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setCredentialData($credentialData)
            ->setUniqueDeviceId($uniqueDeviceId)
            ->setConvenienceAmtInfo($convenienceAmtInfo)
            ->setShippingAmtInfo($shippingAmtInfo)
            ->setTxnDescriptor($txnDescriptor)
            ->setCheckData($checkData)
            ->setAttachmentInfo($attachmentInfo)
            ->setGiftData($giftData)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setRecurringData($recurringData)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setCashData($cashData)
            ->setFraudRuleInfo($fraudRuleInfo)
            ->setRepeatCount($repeatCount)
            ->setEMVChipCondition($eMVChipCondition)
            ->setHasEMVTag($hasEMVTag)
            ->setHasEComPaymentData($hasEComPaymentData)
            ->setCAVVResultCode($cAVVResultCode)
            ->setTokenPANLast4($tokenPANLast4)
            ->setCompany($company)
            ->setCustomerFirstname($customerFirstname)
            ->setCustomerLastname($customerLastname)
            ->setDebtRepaymentIndicator($debtRepaymentIndicator)
            ->setAltPaymentData($altPaymentData)
            ->setMultiFulfillmentData($multiFulfillmentData);
    }
    /**
     * Get GatewayTxnId value
     * @return int
     */
    public function getGatewayTxnId()
    {
        return $this->GatewayTxnId;
    }
    /**
     * Set GatewayTxnId value
     * @param int $gatewayTxnId
     * @return \StructType\TransactionDataType
     */
    public function setGatewayTxnId($gatewayTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($gatewayTxnId) && !is_numeric($gatewayTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gatewayTxnId)), __LINE__);
        }
        $this->GatewayTxnId = $gatewayTxnId;
        return $this;
    }
    /**
     * Get ClientTxnId value
     * @return int
     */
    public function getClientTxnId()
    {
        return $this->ClientTxnId;
    }
    /**
     * Set ClientTxnId value
     * @param int $clientTxnId
     * @return \StructType\TransactionDataType
     */
    public function setClientTxnId($clientTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($clientTxnId) && !is_numeric($clientTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clientTxnId)), __LINE__);
        }
        $this->ClientTxnId = $clientTxnId;
        return $this;
    }
    /**
     * Get GatewayRspCode value
     * @return int
     */
    public function getGatewayRspCode()
    {
        return $this->GatewayRspCode;
    }
    /**
     * Set GatewayRspCode value
     * @param int $gatewayRspCode
     * @return \StructType\TransactionDataType
     */
    public function setGatewayRspCode($gatewayRspCode = null)
    {
        // validation for constraint: int
        if (!is_null($gatewayRspCode) && !is_numeric($gatewayRspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($gatewayRspCode)), __LINE__);
        }
        $this->GatewayRspCode = $gatewayRspCode;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    /**
     * Set PaymentType value
     * @uses \EnumType\PaymentTypeType::valueIsValid()
     * @uses \EnumType\PaymentTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentType
     * @return \StructType\TransactionDataType
     */
    public function setPaymentType($paymentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTypeType::valueIsValid($paymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $paymentType, implode(', ', \EnumType\PaymentTypeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
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
     * @return \StructType\TransactionDataType
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get SettlementAmt value
     * @return float
     */
    public function getSettlementAmt()
    {
        return $this->SettlementAmt;
    }
    /**
     * Set SettlementAmt value
     * @param float $settlementAmt
     * @return \StructType\TransactionDataType
     */
    public function setSettlementAmt($settlementAmt = null)
    {
        $this->SettlementAmt = $settlementAmt;
        return $this;
    }
    /**
     * Get RspDT value
     * @return string
     */
    public function getRspDT()
    {
        return $this->RspDT;
    }
    /**
     * Set RspDT value
     * @param string $rspDT
     * @return \StructType\TransactionDataType
     */
    public function setRspDT($rspDT = null)
    {
        // validation for constraint: string
        if (!is_null($rspDT) && !is_string($rspDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspDT)), __LINE__);
        }
        $this->RspDT = $rspDT;
        return $this;
    }
    /**
     * Get GatewayRspMsg value
     * @return string|null
     */
    public function getGatewayRspMsg()
    {
        return $this->GatewayRspMsg;
    }
    /**
     * Set GatewayRspMsg value
     * @param string $gatewayRspMsg
     * @return \StructType\TransactionDataType
     */
    public function setGatewayRspMsg($gatewayRspMsg = null)
    {
        // validation for constraint: string
        if (!is_null($gatewayRspMsg) && !is_string($gatewayRspMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gatewayRspMsg)), __LINE__);
        }
        $this->GatewayRspMsg = $gatewayRspMsg;
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
     * @return \StructType\TransactionDataType
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
     * Get MaskedCardNbr value
     * @return string|null
     */
    public function getMaskedCardNbr()
    {
        return $this->MaskedCardNbr;
    }
    /**
     * Set MaskedCardNbr value
     * @param string $maskedCardNbr
     * @return \StructType\TransactionDataType
     */
    public function setMaskedCardNbr($maskedCardNbr = null)
    {
        // validation for constraint: string
        if (!is_null($maskedCardNbr) && !is_string($maskedCardNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($maskedCardNbr)), __LINE__);
        }
        $this->MaskedCardNbr = $maskedCardNbr;
        return $this;
    }
    /**
     * Get CardSwiped value
     * @return string|null
     */
    public function getCardSwiped()
    {
        return $this->CardSwiped;
    }
    /**
     * Set CardSwiped value
     * @param string $cardSwiped
     * @return \StructType\TransactionDataType
     */
    public function setCardSwiped($cardSwiped = null)
    {
        // validation for constraint: string
        if (!is_null($cardSwiped) && !is_string($cardSwiped)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardSwiped)), __LINE__);
        }
        $this->CardSwiped = $cardSwiped;
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
     * @return \StructType\TransactionDataType
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
        return $this;
    }
    /**
     * Get ServiceName value
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }
    /**
     * Set ServiceName value
     * @param string $serviceName
     * @return \StructType\TransactionDataType
     */
    public function setServiceName($serviceName = null)
    {
        // validation for constraint: string
        if (!is_null($serviceName) && !is_string($serviceName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceName)), __LINE__);
        }
        $this->ServiceName = $serviceName;
        return $this;
    }
    /**
     * Get TxnStatus value
     * @return string|null
     */
    public function getTxnStatus()
    {
        return $this->TxnStatus;
    }
    /**
     * Set TxnStatus value
     * @param string $txnStatus
     * @return \StructType\TransactionDataType
     */
    public function setTxnStatus($txnStatus = null)
    {
        // validation for constraint: string
        if (!is_null($txnStatus) && !is_string($txnStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnStatus)), __LINE__);
        }
        $this->TxnStatus = $txnStatus;
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
     * @return \StructType\TransactionDataType
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
     * @return \StructType\TransactionDataType
     */
    public function setAuthAmt($authAmt = null)
    {
        $this->AuthAmt = $authAmt;
        return $this;
    }
    /**
     * Get GratuityAmtInfo value
     * @return float|null
     */
    public function getGratuityAmtInfo()
    {
        return $this->GratuityAmtInfo;
    }
    /**
     * Set GratuityAmtInfo value
     * @param float $gratuityAmtInfo
     * @return \StructType\TransactionDataType
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName()
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \StructType\TransactionDataType
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }
    /**
     * Get ClerkID value
     * @return string|null
     */
    public function getClerkID()
    {
        return $this->ClerkID;
    }
    /**
     * Set ClerkID value
     * @param string $clerkID
     * @return \StructType\TransactionDataType
     */
    public function setClerkID($clerkID = null)
    {
        // validation for constraint: string
        if (!is_null($clerkID) && !is_string($clerkID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($clerkID)), __LINE__);
        }
        $this->ClerkID = $clerkID;
        return $this;
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
     * @return \StructType\TransactionDataType
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
     * @return \StructType\TransactionDataType
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
     * Get IssTxnId value
     * @return string|null
     */
    public function getIssTxnId()
    {
        return $this->IssTxnId;
    }
    /**
     * Set IssTxnId value
     * @param string $issTxnId
     * @return \StructType\TransactionDataType
     */
    public function setIssTxnId($issTxnId = null)
    {
        // validation for constraint: string
        if (!is_null($issTxnId) && !is_string($issTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issTxnId)), __LINE__);
        }
        $this->IssTxnId = $issTxnId;
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
     * @return \StructType\TransactionDataType
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
     * Get BatchSeqNbr value
     * @return int|null
     */
    public function getBatchSeqNbr()
    {
        return $this->BatchSeqNbr;
    }
    /**
     * Set BatchSeqNbr value
     * @param int $batchSeqNbr
     * @return \StructType\TransactionDataType
     */
    public function setBatchSeqNbr($batchSeqNbr = null)
    {
        // validation for constraint: int
        if (!is_null($batchSeqNbr) && !is_numeric($batchSeqNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchSeqNbr)), __LINE__);
        }
        $this->BatchSeqNbr = $batchSeqNbr;
        return $this;
    }
    /**
     * Get BatchCloseDT value
     * @return string|null
     */
    public function getBatchCloseDT()
    {
        return $this->BatchCloseDT;
    }
    /**
     * Set BatchCloseDT value
     * @param string $batchCloseDT
     * @return \StructType\TransactionDataType
     */
    public function setBatchCloseDT($batchCloseDT = null)
    {
        // validation for constraint: string
        if (!is_null($batchCloseDT) && !is_string($batchCloseDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($batchCloseDT)), __LINE__);
        }
        $this->BatchCloseDT = $batchCloseDT;
        return $this;
    }
    /**
     * Get SiteTrace value
     * @return string|null
     */
    public function getSiteTrace()
    {
        return $this->SiteTrace;
    }
    /**
     * Set SiteTrace value
     * @param string $siteTrace
     * @return \StructType\TransactionDataType
     */
    public function setSiteTrace($siteTrace = null)
    {
        // validation for constraint: string
        if (!is_null($siteTrace) && !is_string($siteTrace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($siteTrace)), __LINE__);
        }
        $this->SiteTrace = $siteTrace;
        return $this;
    }
    /**
     * Get OriginalGatewayTxnId value
     * @return int|null
     */
    public function getOriginalGatewayTxnId()
    {
        return $this->OriginalGatewayTxnId;
    }
    /**
     * Set OriginalGatewayTxnId value
     * @param int $originalGatewayTxnId
     * @return \StructType\TransactionDataType
     */
    public function setOriginalGatewayTxnId($originalGatewayTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($originalGatewayTxnId) && !is_numeric($originalGatewayTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($originalGatewayTxnId)), __LINE__);
        }
        $this->OriginalGatewayTxnId = $originalGatewayTxnId;
        return $this;
    }
    /**
     * Get AcctDataSrc value
     * @return string|null
     */
    public function getAcctDataSrc()
    {
        return $this->AcctDataSrc;
    }
    /**
     * Set AcctDataSrc value
     * @param string $acctDataSrc
     * @return \StructType\TransactionDataType
     */
    public function setAcctDataSrc($acctDataSrc = null)
    {
        // validation for constraint: string
        if (!is_null($acctDataSrc) && !is_string($acctDataSrc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acctDataSrc)), __LINE__);
        }
        $this->AcctDataSrc = $acctDataSrc;
        return $this;
    }
    /**
     * Get CPCData value
     * @return \StructType\CPCDataType|null
     */
    public function getCPCData()
    {
        return $this->CPCData;
    }
    /**
     * Set CPCData value
     * @param \StructType\CPCDataType $cPCData
     * @return \StructType\TransactionDataType
     */
    public function setCPCData(\StructType\CPCDataType $cPCData = null)
    {
        $this->CPCData = $cPCData;
        return $this;
    }
    /**
     * Get LodgingData value
     * @return \StructType\LodgingDataType|null
     */
    public function getLodgingData()
    {
        return $this->LodgingData;
    }
    /**
     * Set LodgingData value
     * @param \StructType\LodgingDataType $lodgingData
     * @return \StructType\TransactionDataType
     */
    public function setLodgingData(\StructType\LodgingDataType $lodgingData = null)
    {
        $this->LodgingData = $lodgingData;
        return $this;
    }
    /**
     * Get AdditionalTxnFields value
     * @return \StructType\AdditionalTxnFieldsType|null
     */
    public function getAdditionalTxnFields()
    {
        return $this->AdditionalTxnFields;
    }
    /**
     * Set AdditionalTxnFields value
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @return \StructType\TransactionDataType
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Get CredentialData value
     * @return \StructType\CredentialDataType|null
     */
    public function getCredentialData()
    {
        return $this->CredentialData;
    }
    /**
     * Set CredentialData value
     * @param \StructType\CredentialDataType $credentialData
     * @return \StructType\TransactionDataType
     */
    public function setCredentialData(\StructType\CredentialDataType $credentialData = null)
    {
        $this->CredentialData = $credentialData;
        return $this;
    }
    /**
     * Get UniqueDeviceId value
     * @return string|null
     */
    public function getUniqueDeviceId()
    {
        return $this->UniqueDeviceId;
    }
    /**
     * Set UniqueDeviceId value
     * @param string $uniqueDeviceId
     * @return \StructType\TransactionDataType
     */
    public function setUniqueDeviceId($uniqueDeviceId = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueDeviceId) && !is_string($uniqueDeviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueDeviceId)), __LINE__);
        }
        $this->UniqueDeviceId = $uniqueDeviceId;
        return $this;
    }
    /**
     * Get ConvenienceAmtInfo value
     * @return float|null
     */
    public function getConvenienceAmtInfo()
    {
        return $this->ConvenienceAmtInfo;
    }
    /**
     * Set ConvenienceAmtInfo value
     * @param float $convenienceAmtInfo
     * @return \StructType\TransactionDataType
     */
    public function setConvenienceAmtInfo($convenienceAmtInfo = null)
    {
        $this->ConvenienceAmtInfo = $convenienceAmtInfo;
        return $this;
    }
    /**
     * Get ShippingAmtInfo value
     * @return float|null
     */
    public function getShippingAmtInfo()
    {
        return $this->ShippingAmtInfo;
    }
    /**
     * Set ShippingAmtInfo value
     * @param float $shippingAmtInfo
     * @return \StructType\TransactionDataType
     */
    public function setShippingAmtInfo($shippingAmtInfo = null)
    {
        $this->ShippingAmtInfo = $shippingAmtInfo;
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
     * @return \StructType\TransactionDataType
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
     * Get CheckData value
     * @return \StructType\CheckDataType|null
     */
    public function getCheckData()
    {
        return $this->CheckData;
    }
    /**
     * Set CheckData value
     * @param \StructType\CheckDataType $checkData
     * @return \StructType\TransactionDataType
     */
    public function setCheckData(\StructType\CheckDataType $checkData = null)
    {
        $this->CheckData = $checkData;
        return $this;
    }
    /**
     * Get AttachmentInfo value
     * @return \StructType\AttachmentInfoType[]|null
     */
    public function getAttachmentInfo()
    {
        return $this->AttachmentInfo;
    }
    /**
     * Set AttachmentInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentInfoType[] $attachmentInfo
     * @return \StructType\TransactionDataType
     */
    public function setAttachmentInfo(array $attachmentInfo = array())
    {
        foreach ($attachmentInfo as $transactionDataTypeAttachmentInfoItem) {
            // validation for constraint: itemType
            if (!$transactionDataTypeAttachmentInfoItem instanceof \StructType\AttachmentInfoType) {
                throw new \InvalidArgumentException(sprintf('The AttachmentInfo property can only contain items of \StructType\AttachmentInfoType, "%s" given', is_object($transactionDataTypeAttachmentInfoItem) ? get_class($transactionDataTypeAttachmentInfoItem) : gettype($transactionDataTypeAttachmentInfoItem)), __LINE__);
            }
        }
        $this->AttachmentInfo = $attachmentInfo;
        return $this;
    }
    /**
     * Add item to AttachmentInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentInfoType $item
     * @return \StructType\TransactionDataType
     */
    public function addToAttachmentInfo(\StructType\AttachmentInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AttachmentInfoType) {
            throw new \InvalidArgumentException(sprintf('The AttachmentInfo property can only contain items of \StructType\AttachmentInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AttachmentInfo[] = $item;
        return $this;
    }
    /**
     * Get GiftData value
     * @return \StructType\GiftDataType|null
     */
    public function getGiftData()
    {
        return $this->GiftData;
    }
    /**
     * Set GiftData value
     * @param \StructType\GiftDataType $giftData
     * @return \StructType\TransactionDataType
     */
    public function setGiftData(\StructType\GiftDataType $giftData = null)
    {
        $this->GiftData = $giftData;
        return $this;
    }
    /**
     * Get PaymentMethodKey value
     * @return string|null
     */
    public function getPaymentMethodKey()
    {
        return $this->PaymentMethodKey;
    }
    /**
     * Set PaymentMethodKey value
     * @param string $paymentMethodKey
     * @return \StructType\TransactionDataType
     */
    public function setPaymentMethodKey($paymentMethodKey = null)
    {
        // validation for constraint: string
        if (!is_null($paymentMethodKey) && !is_string($paymentMethodKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentMethodKey)), __LINE__);
        }
        $this->PaymentMethodKey = $paymentMethodKey;
        return $this;
    }
    /**
     * Get RecurringData value
     * @return \StructType\RecurringDataType|null
     */
    public function getRecurringData()
    {
        return $this->RecurringData;
    }
    /**
     * Set RecurringData value
     * @param \StructType\RecurringDataType $recurringData
     * @return \StructType\TransactionDataType
     */
    public function setRecurringData(\StructType\RecurringDataType $recurringData = null)
    {
        $this->RecurringData = $recurringData;
        return $this;
    }
    /**
     * Get SurchargeAmtInfo value
     * @return float|null
     */
    public function getSurchargeAmtInfo()
    {
        return $this->SurchargeAmtInfo;
    }
    /**
     * Set SurchargeAmtInfo value
     * @param float $surchargeAmtInfo
     * @return \StructType\TransactionDataType
     */
    public function setSurchargeAmtInfo($surchargeAmtInfo = null)
    {
        $this->SurchargeAmtInfo = $surchargeAmtInfo;
        return $this;
    }
    /**
     * Get CashData value
     * @return \StructType\CashDataType|null
     */
    public function getCashData()
    {
        return $this->CashData;
    }
    /**
     * Set CashData value
     * @param \StructType\CashDataType $cashData
     * @return \StructType\TransactionDataType
     */
    public function setCashData(\StructType\CashDataType $cashData = null)
    {
        $this->CashData = $cashData;
        return $this;
    }
    /**
     * Get FraudRuleInfo value
     * @return string|null
     */
    public function getFraudRuleInfo()
    {
        return $this->FraudRuleInfo;
    }
    /**
     * Set FraudRuleInfo value
     * @param string $fraudRuleInfo
     * @return \StructType\TransactionDataType
     */
    public function setFraudRuleInfo($fraudRuleInfo = null)
    {
        // validation for constraint: string
        if (!is_null($fraudRuleInfo) && !is_string($fraudRuleInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fraudRuleInfo)), __LINE__);
        }
        $this->FraudRuleInfo = $fraudRuleInfo;
        return $this;
    }
    /**
     * Get RepeatCount value
     * @return int|null
     */
    public function getRepeatCount()
    {
        return $this->RepeatCount;
    }
    /**
     * Set RepeatCount value
     * @param int $repeatCount
     * @return \StructType\TransactionDataType
     */
    public function setRepeatCount($repeatCount = null)
    {
        // validation for constraint: int
        if (!is_null($repeatCount) && !is_numeric($repeatCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($repeatCount)), __LINE__);
        }
        $this->RepeatCount = $repeatCount;
        return $this;
    }
    /**
     * Get EMVChipCondition value
     * @return string|null
     */
    public function getEMVChipCondition()
    {
        return $this->EMVChipCondition;
    }
    /**
     * Set EMVChipCondition value
     * @param string $eMVChipCondition
     * @return \StructType\TransactionDataType
     */
    public function setEMVChipCondition($eMVChipCondition = null)
    {
        // validation for constraint: string
        if (!is_null($eMVChipCondition) && !is_string($eMVChipCondition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMVChipCondition)), __LINE__);
        }
        $this->EMVChipCondition = $eMVChipCondition;
        return $this;
    }
    /**
     * Get HasEMVTag value
     * @return string|null
     */
    public function getHasEMVTag()
    {
        return $this->HasEMVTag;
    }
    /**
     * Set HasEMVTag value
     * @param string $hasEMVTag
     * @return \StructType\TransactionDataType
     */
    public function setHasEMVTag($hasEMVTag = null)
    {
        // validation for constraint: string
        if (!is_null($hasEMVTag) && !is_string($hasEMVTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hasEMVTag)), __LINE__);
        }
        $this->HasEMVTag = $hasEMVTag;
        return $this;
    }
    /**
     * Get HasEComPaymentData value
     * @return string|null
     */
    public function getHasEComPaymentData()
    {
        return $this->HasEComPaymentData;
    }
    /**
     * Set HasEComPaymentData value
     * @param string $hasEComPaymentData
     * @return \StructType\TransactionDataType
     */
    public function setHasEComPaymentData($hasEComPaymentData = null)
    {
        // validation for constraint: string
        if (!is_null($hasEComPaymentData) && !is_string($hasEComPaymentData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($hasEComPaymentData)), __LINE__);
        }
        $this->HasEComPaymentData = $hasEComPaymentData;
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
     * @return \StructType\TransactionDataType
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
     * @return \StructType\TransactionDataType
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
     * Get Company value
     * @return string|null
     */
    public function getCompany()
    {
        return $this->Company;
    }
    /**
     * Set Company value
     * @param string $company
     * @return \StructType\TransactionDataType
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (!is_null($company) && !is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }
    /**
     * Get CustomerFirstname value
     * @return string|null
     */
    public function getCustomerFirstname()
    {
        return $this->CustomerFirstname;
    }
    /**
     * Set CustomerFirstname value
     * @param string $customerFirstname
     * @return \StructType\TransactionDataType
     */
    public function setCustomerFirstname($customerFirstname = null)
    {
        // validation for constraint: string
        if (!is_null($customerFirstname) && !is_string($customerFirstname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerFirstname)), __LINE__);
        }
        $this->CustomerFirstname = $customerFirstname;
        return $this;
    }
    /**
     * Get CustomerLastname value
     * @return string|null
     */
    public function getCustomerLastname()
    {
        return $this->CustomerLastname;
    }
    /**
     * Set CustomerLastname value
     * @param string $customerLastname
     * @return \StructType\TransactionDataType
     */
    public function setCustomerLastname($customerLastname = null)
    {
        // validation for constraint: string
        if (!is_null($customerLastname) && !is_string($customerLastname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerLastname)), __LINE__);
        }
        $this->CustomerLastname = $customerLastname;
        return $this;
    }
    /**
     * Get DebtRepaymentIndicator value
     * @return string|null
     */
    public function getDebtRepaymentIndicator()
    {
        return $this->DebtRepaymentIndicator;
    }
    /**
     * Set DebtRepaymentIndicator value
     * @uses \EnumType\DebtRepaymentType::valueIsValid()
     * @uses \EnumType\DebtRepaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $debtRepaymentIndicator
     * @return \StructType\TransactionDataType
     */
    public function setDebtRepaymentIndicator($debtRepaymentIndicator = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DebtRepaymentType::valueIsValid($debtRepaymentIndicator)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $debtRepaymentIndicator, implode(', ', \EnumType\DebtRepaymentType::getValidValues())), __LINE__);
        }
        $this->DebtRepaymentIndicator = $debtRepaymentIndicator;
        return $this;
    }
    /**
     * Get AltPaymentData value
     * @return \StructType\AltPaymentDataType|null
     */
    public function getAltPaymentData()
    {
        return $this->AltPaymentData;
    }
    /**
     * Set AltPaymentData value
     * @param \StructType\AltPaymentDataType $altPaymentData
     * @return \StructType\TransactionDataType
     */
    public function setAltPaymentData(\StructType\AltPaymentDataType $altPaymentData = null)
    {
        $this->AltPaymentData = $altPaymentData;
        return $this;
    }
    /**
     * Get MultiFulfillmentData value
     * @return \StructType\MultiFulfillmentDataType|null
     */
    public function getMultiFulfillmentData()
    {
        return $this->MultiFulfillmentData;
    }
    /**
     * Set MultiFulfillmentData value
     * @param \StructType\MultiFulfillmentDataType $multiFulfillmentData
     * @return \StructType\TransactionDataType
     */
    public function setMultiFulfillmentData(\StructType\MultiFulfillmentDataType $multiFulfillmentData = null)
    {
        $this->MultiFulfillmentData = $multiFulfillmentData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\TransactionDataType
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
