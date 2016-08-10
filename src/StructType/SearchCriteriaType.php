<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchCriteriaType StructType
 * @subpackage Structs
 */
class SearchCriteriaType extends AbstractStructBase
{
    /**
     * The StartUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartUtcDT;
    /**
     * The EndUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EndUtcDT;
    /**
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthCode;
    /**
     * The CardHolderLastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderLastName;
    /**
     * The CardHolderFirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderFirstName;
    /**
     * The CardNbrFirstSix
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNbrFirstSix;
    /**
     * The CardNbrLastFour
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNbrLastFour;
    /**
     * The InvoiceNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceNbr;
    /**
     * The CardHolderPONbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderPONbr;
    /**
     * The CustomerID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerID;
    /**
     * The ServiceName
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ServiceName;
    /**
     * The PaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentType;
    /**
     * The CardType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $CardType;
    /**
     * The IssuerResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssuerResult;
    /**
     * The SettlementAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $SettlementAmt;
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
     * The BatchSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchSeqNbr;
    /**
     * The BatchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchId;
    /**
     * The SiteTrace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteTrace;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The ClientTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $ClientTxnId;
    /**
     * The UniqueDeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueDeviceId;
    /**
     * The AcctNbrLastFour
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AcctNbrLastFour;
    /**
     * The BankRoutingNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BankRoutingNbr;
    /**
     * The CheckNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckNbr;
    /**
     * The CheckFirstName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckFirstName;
    /**
     * The CheckLastName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckLastName;
    /**
     * The CheckName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CheckName;
    /**
     * The GiftCurrency
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftCurrency;
    /**
     * The GiftMaskedAlias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftMaskedAlias;
    /**
     * The OneTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OneTime;
    /**
     * The PaymentMethodKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodKey;
    /**
     * The ScheduleID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ScheduleID;
    /**
     * The BuyerEmailAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BuyerEmailAddress;
    /**
     * The AltPaymentStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AltPaymentStatus;
    /**
     * The FullyCapturedInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FullyCapturedInd;
    /**
     * Constructor method for SearchCriteriaType
     * @uses SearchCriteriaType::setStartUtcDT()
     * @uses SearchCriteriaType::setEndUtcDT()
     * @uses SearchCriteriaType::setAuthCode()
     * @uses SearchCriteriaType::setCardHolderLastName()
     * @uses SearchCriteriaType::setCardHolderFirstName()
     * @uses SearchCriteriaType::setCardNbrFirstSix()
     * @uses SearchCriteriaType::setCardNbrLastFour()
     * @uses SearchCriteriaType::setInvoiceNbr()
     * @uses SearchCriteriaType::setCardHolderPONbr()
     * @uses SearchCriteriaType::setCustomerID()
     * @uses SearchCriteriaType::setServiceName()
     * @uses SearchCriteriaType::setPaymentType()
     * @uses SearchCriteriaType::setCardType()
     * @uses SearchCriteriaType::setIssuerResult()
     * @uses SearchCriteriaType::setSettlementAmt()
     * @uses SearchCriteriaType::setIssTxnId()
     * @uses SearchCriteriaType::setRefNbr()
     * @uses SearchCriteriaType::setUserName()
     * @uses SearchCriteriaType::setClerkID()
     * @uses SearchCriteriaType::setBatchSeqNbr()
     * @uses SearchCriteriaType::setBatchId()
     * @uses SearchCriteriaType::setSiteTrace()
     * @uses SearchCriteriaType::setDisplayName()
     * @uses SearchCriteriaType::setClientTxnId()
     * @uses SearchCriteriaType::setUniqueDeviceId()
     * @uses SearchCriteriaType::setAcctNbrLastFour()
     * @uses SearchCriteriaType::setBankRoutingNbr()
     * @uses SearchCriteriaType::setCheckNbr()
     * @uses SearchCriteriaType::setCheckFirstName()
     * @uses SearchCriteriaType::setCheckLastName()
     * @uses SearchCriteriaType::setCheckName()
     * @uses SearchCriteriaType::setGiftCurrency()
     * @uses SearchCriteriaType::setGiftMaskedAlias()
     * @uses SearchCriteriaType::setOneTime()
     * @uses SearchCriteriaType::setPaymentMethodKey()
     * @uses SearchCriteriaType::setScheduleID()
     * @uses SearchCriteriaType::setBuyerEmailAddress()
     * @uses SearchCriteriaType::setAltPaymentStatus()
     * @uses SearchCriteriaType::setFullyCapturedInd()
     * @param string $startUtcDT
     * @param string $endUtcDT
     * @param string $authCode
     * @param string $cardHolderLastName
     * @param string $cardHolderFirstName
     * @param string $cardNbrFirstSix
     * @param string $cardNbrLastFour
     * @param string $invoiceNbr
     * @param string $cardHolderPONbr
     * @param string $customerID
     * @param string[] $serviceName
     * @param string[] $paymentType
     * @param string[] $cardType
     * @param string $issuerResult
     * @param float $settlementAmt
     * @param string $issTxnId
     * @param string $refNbr
     * @param string $userName
     * @param string $clerkID
     * @param int $batchSeqNbr
     * @param int $batchId
     * @param string $siteTrace
     * @param string $displayName
     * @param int $clientTxnId
     * @param string $uniqueDeviceId
     * @param string $acctNbrLastFour
     * @param string $bankRoutingNbr
     * @param string $checkNbr
     * @param string $checkFirstName
     * @param string $checkLastName
     * @param string $checkName
     * @param string $giftCurrency
     * @param string $giftMaskedAlias
     * @param string $oneTime
     * @param string $paymentMethodKey
     * @param string $scheduleID
     * @param string $buyerEmailAddress
     * @param string $altPaymentStatus
     * @param string $fullyCapturedInd
     */
    public function __construct($startUtcDT = null, $endUtcDT = null, $authCode = null, $cardHolderLastName = null, $cardHolderFirstName = null, $cardNbrFirstSix = null, $cardNbrLastFour = null, $invoiceNbr = null, $cardHolderPONbr = null, $customerID = null, array $serviceName = array(), array $paymentType = array(), array $cardType = array(), $issuerResult = null, $settlementAmt = null, $issTxnId = null, $refNbr = null, $userName = null, $clerkID = null, $batchSeqNbr = null, $batchId = null, $siteTrace = null, $displayName = null, $clientTxnId = null, $uniqueDeviceId = null, $acctNbrLastFour = null, $bankRoutingNbr = null, $checkNbr = null, $checkFirstName = null, $checkLastName = null, $checkName = null, $giftCurrency = null, $giftMaskedAlias = null, $oneTime = null, $paymentMethodKey = null, $scheduleID = null, $buyerEmailAddress = null, $altPaymentStatus = null, $fullyCapturedInd = null)
    {
        $this
            ->setStartUtcDT($startUtcDT)
            ->setEndUtcDT($endUtcDT)
            ->setAuthCode($authCode)
            ->setCardHolderLastName($cardHolderLastName)
            ->setCardHolderFirstName($cardHolderFirstName)
            ->setCardNbrFirstSix($cardNbrFirstSix)
            ->setCardNbrLastFour($cardNbrLastFour)
            ->setInvoiceNbr($invoiceNbr)
            ->setCardHolderPONbr($cardHolderPONbr)
            ->setCustomerID($customerID)
            ->setServiceName($serviceName)
            ->setPaymentType($paymentType)
            ->setCardType($cardType)
            ->setIssuerResult($issuerResult)
            ->setSettlementAmt($settlementAmt)
            ->setIssTxnId($issTxnId)
            ->setRefNbr($refNbr)
            ->setUserName($userName)
            ->setClerkID($clerkID)
            ->setBatchSeqNbr($batchSeqNbr)
            ->setBatchId($batchId)
            ->setSiteTrace($siteTrace)
            ->setDisplayName($displayName)
            ->setClientTxnId($clientTxnId)
            ->setUniqueDeviceId($uniqueDeviceId)
            ->setAcctNbrLastFour($acctNbrLastFour)
            ->setBankRoutingNbr($bankRoutingNbr)
            ->setCheckNbr($checkNbr)
            ->setCheckFirstName($checkFirstName)
            ->setCheckLastName($checkLastName)
            ->setCheckName($checkName)
            ->setGiftCurrency($giftCurrency)
            ->setGiftMaskedAlias($giftMaskedAlias)
            ->setOneTime($oneTime)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setScheduleID($scheduleID)
            ->setBuyerEmailAddress($buyerEmailAddress)
            ->setAltPaymentStatus($altPaymentStatus)
            ->setFullyCapturedInd($fullyCapturedInd);
    }
    /**
     * Get StartUtcDT value
     * @return string|null
     */
    public function getStartUtcDT()
    {
        return $this->StartUtcDT;
    }
    /**
     * Set StartUtcDT value
     * @param string $startUtcDT
     * @return \StructType\SearchCriteriaType
     */
    public function setStartUtcDT($startUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($startUtcDT) && !is_string($startUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startUtcDT)), __LINE__);
        }
        $this->StartUtcDT = $startUtcDT;
        return $this;
    }
    /**
     * Get EndUtcDT value
     * @return string|null
     */
    public function getEndUtcDT()
    {
        return $this->EndUtcDT;
    }
    /**
     * Set EndUtcDT value
     * @param string $endUtcDT
     * @return \StructType\SearchCriteriaType
     */
    public function setEndUtcDT($endUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($endUtcDT) && !is_string($endUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endUtcDT)), __LINE__);
        }
        $this->EndUtcDT = $endUtcDT;
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
     * @return \StructType\SearchCriteriaType
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
     * Get CardHolderLastName value
     * @return string|null
     */
    public function getCardHolderLastName()
    {
        return $this->CardHolderLastName;
    }
    /**
     * Set CardHolderLastName value
     * @param string $cardHolderLastName
     * @return \StructType\SearchCriteriaType
     */
    public function setCardHolderLastName($cardHolderLastName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderLastName) && !is_string($cardHolderLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderLastName)), __LINE__);
        }
        $this->CardHolderLastName = $cardHolderLastName;
        return $this;
    }
    /**
     * Get CardHolderFirstName value
     * @return string|null
     */
    public function getCardHolderFirstName()
    {
        return $this->CardHolderFirstName;
    }
    /**
     * Set CardHolderFirstName value
     * @param string $cardHolderFirstName
     * @return \StructType\SearchCriteriaType
     */
    public function setCardHolderFirstName($cardHolderFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderFirstName) && !is_string($cardHolderFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderFirstName)), __LINE__);
        }
        $this->CardHolderFirstName = $cardHolderFirstName;
        return $this;
    }
    /**
     * Get CardNbrFirstSix value
     * @return string|null
     */
    public function getCardNbrFirstSix()
    {
        return $this->CardNbrFirstSix;
    }
    /**
     * Set CardNbrFirstSix value
     * @param string $cardNbrFirstSix
     * @return \StructType\SearchCriteriaType
     */
    public function setCardNbrFirstSix($cardNbrFirstSix = null)
    {
        // validation for constraint: string
        if (!is_null($cardNbrFirstSix) && !is_string($cardNbrFirstSix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNbrFirstSix)), __LINE__);
        }
        $this->CardNbrFirstSix = $cardNbrFirstSix;
        return $this;
    }
    /**
     * Get CardNbrLastFour value
     * @return string|null
     */
    public function getCardNbrLastFour()
    {
        return $this->CardNbrLastFour;
    }
    /**
     * Set CardNbrLastFour value
     * @param string $cardNbrLastFour
     * @return \StructType\SearchCriteriaType
     */
    public function setCardNbrLastFour($cardNbrLastFour = null)
    {
        // validation for constraint: string
        if (!is_null($cardNbrLastFour) && !is_string($cardNbrLastFour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNbrLastFour)), __LINE__);
        }
        $this->CardNbrLastFour = $cardNbrLastFour;
        return $this;
    }
    /**
     * Get InvoiceNbr value
     * @return string|null
     */
    public function getInvoiceNbr()
    {
        return $this->InvoiceNbr;
    }
    /**
     * Set InvoiceNbr value
     * @param string $invoiceNbr
     * @return \StructType\SearchCriteriaType
     */
    public function setInvoiceNbr($invoiceNbr = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNbr) && !is_string($invoiceNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceNbr)), __LINE__);
        }
        $this->InvoiceNbr = $invoiceNbr;
        return $this;
    }
    /**
     * Get CardHolderPONbr value
     * @return string|null
     */
    public function getCardHolderPONbr()
    {
        return $this->CardHolderPONbr;
    }
    /**
     * Set CardHolderPONbr value
     * @param string $cardHolderPONbr
     * @return \StructType\SearchCriteriaType
     */
    public function setCardHolderPONbr($cardHolderPONbr = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderPONbr) && !is_string($cardHolderPONbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderPONbr)), __LINE__);
        }
        $this->CardHolderPONbr = $cardHolderPONbr;
        return $this;
    }
    /**
     * Get CustomerID value
     * @return string|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param string $customerID
     * @return \StructType\SearchCriteriaType
     */
    public function setCustomerID($customerID = null)
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        return $this;
    }
    /**
     * Get ServiceName value
     * @return string[]|null
     */
    public function getServiceName()
    {
        return $this->ServiceName;
    }
    /**
     * Set ServiceName value
     * @uses \EnumType\ServiceName::valueIsValid()
     * @uses \EnumType\ServiceName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $serviceName
     * @return \StructType\SearchCriteriaType
     */
    public function setServiceName(array $serviceName = array())
    {
        $invalidValues = array();
        foreach ($serviceName as $searchCriteriaTypeServiceNameItem) {
            if (!\EnumType\ServiceName::valueIsValid($searchCriteriaTypeServiceNameItem)) {
                $invalidValues[] = var_export($searchCriteriaTypeServiceNameItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\ServiceName::getValidValues())), __LINE__);
        }
        $this->ServiceName = $serviceName;
        return $this;
    }
    /**
     * Add item to ServiceName value
     * @uses \EnumType\ServiceName::valueIsValid()
     * @uses \EnumType\ServiceName::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SearchCriteriaType
     */
    public function addToServiceName($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ServiceName::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\ServiceName::getValidValues())), __LINE__);
        }
        $this->ServiceName[] = $item;
        return $this;
    }
    /**
     * Get PaymentType value
     * @return string[]|null
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
     * @param string[] $paymentType
     * @return \StructType\SearchCriteriaType
     */
    public function setPaymentType(array $paymentType = array())
    {
        $invalidValues = array();
        foreach ($paymentType as $searchCriteriaTypePaymentTypeItem) {
            if (!\EnumType\PaymentTypeType::valueIsValid($searchCriteriaTypePaymentTypeItem)) {
                $invalidValues[] = var_export($searchCriteriaTypePaymentTypeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\PaymentTypeType::getValidValues())), __LINE__);
        }
        $this->PaymentType = $paymentType;
        return $this;
    }
    /**
     * Add item to PaymentType value
     * @uses \EnumType\PaymentTypeType::valueIsValid()
     * @uses \EnumType\PaymentTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SearchCriteriaType
     */
    public function addToPaymentType($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTypeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\PaymentTypeType::getValidValues())), __LINE__);
        }
        $this->PaymentType[] = $item;
        return $this;
    }
    /**
     * Get CardType value
     * @return string[]|null
     */
    public function getCardType()
    {
        return $this->CardType;
    }
    /**
     * Set CardType value
     * @uses \EnumType\CardTypeType::valueIsValid()
     * @uses \EnumType\CardTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $cardType
     * @return \StructType\SearchCriteriaType
     */
    public function setCardType(array $cardType = array())
    {
        $invalidValues = array();
        foreach ($cardType as $searchCriteriaTypeCardTypeItem) {
            if (!\EnumType\CardTypeType::valueIsValid($searchCriteriaTypeCardTypeItem)) {
                $invalidValues[] = var_export($searchCriteriaTypeCardTypeItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\CardTypeType::getValidValues())), __LINE__);
        }
        $this->CardType = $cardType;
        return $this;
    }
    /**
     * Add item to CardType value
     * @uses \EnumType\CardTypeType::valueIsValid()
     * @uses \EnumType\CardTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SearchCriteriaType
     */
    public function addToCardType($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CardTypeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\CardTypeType::getValidValues())), __LINE__);
        }
        $this->CardType[] = $item;
        return $this;
    }
    /**
     * Get IssuerResult value
     * @return string|null
     */
    public function getIssuerResult()
    {
        return $this->IssuerResult;
    }
    /**
     * Set IssuerResult value
     * @uses \EnumType\IssuerResult::valueIsValid()
     * @uses \EnumType\IssuerResult::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $issuerResult
     * @return \StructType\SearchCriteriaType
     */
    public function setIssuerResult($issuerResult = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\IssuerResult::valueIsValid($issuerResult)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $issuerResult, implode(', ', \EnumType\IssuerResult::getValidValues())), __LINE__);
        }
        $this->IssuerResult = $issuerResult;
        return $this;
    }
    /**
     * Get SettlementAmt value
     * @return float|null
     */
    public function getSettlementAmt()
    {
        return $this->SettlementAmt;
    }
    /**
     * Set SettlementAmt value
     * @param float $settlementAmt
     * @return \StructType\SearchCriteriaType
     */
    public function setSettlementAmt($settlementAmt = null)
    {
        $this->SettlementAmt = $settlementAmt;
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
     * @return \StructType\SearchCriteriaType
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
     * @return \StructType\SearchCriteriaType
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
     * @return \StructType\SearchCriteriaType
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
     * @return \StructType\SearchCriteriaType
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
     * @return \StructType\SearchCriteriaType
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
     * Get BatchId value
     * @return int|null
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }
    /**
     * Set BatchId value
     * @param int $batchId
     * @return \StructType\SearchCriteriaType
     */
    public function setBatchId($batchId = null)
    {
        // validation for constraint: int
        if (!is_null($batchId) && !is_numeric($batchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchId)), __LINE__);
        }
        $this->BatchId = $batchId;
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
     * @return \StructType\SearchCriteriaType
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
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\SearchCriteriaType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get ClientTxnId value
     * @return int|null
     */
    public function getClientTxnId()
    {
        return $this->ClientTxnId;
    }
    /**
     * Set ClientTxnId value
     * @param int $clientTxnId
     * @return \StructType\SearchCriteriaType
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
     * @return \StructType\SearchCriteriaType
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
     * Get AcctNbrLastFour value
     * @return string|null
     */
    public function getAcctNbrLastFour()
    {
        return $this->AcctNbrLastFour;
    }
    /**
     * Set AcctNbrLastFour value
     * @param string $acctNbrLastFour
     * @return \StructType\SearchCriteriaType
     */
    public function setAcctNbrLastFour($acctNbrLastFour = null)
    {
        // validation for constraint: string
        if (!is_null($acctNbrLastFour) && !is_string($acctNbrLastFour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($acctNbrLastFour)), __LINE__);
        }
        $this->AcctNbrLastFour = $acctNbrLastFour;
        return $this;
    }
    /**
     * Get BankRoutingNbr value
     * @return string|null
     */
    public function getBankRoutingNbr()
    {
        return $this->BankRoutingNbr;
    }
    /**
     * Set BankRoutingNbr value
     * @param string $bankRoutingNbr
     * @return \StructType\SearchCriteriaType
     */
    public function setBankRoutingNbr($bankRoutingNbr = null)
    {
        // validation for constraint: string
        if (!is_null($bankRoutingNbr) && !is_string($bankRoutingNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bankRoutingNbr)), __LINE__);
        }
        $this->BankRoutingNbr = $bankRoutingNbr;
        return $this;
    }
    /**
     * Get CheckNbr value
     * @return string|null
     */
    public function getCheckNbr()
    {
        return $this->CheckNbr;
    }
    /**
     * Set CheckNbr value
     * @param string $checkNbr
     * @return \StructType\SearchCriteriaType
     */
    public function setCheckNbr($checkNbr = null)
    {
        // validation for constraint: string
        if (!is_null($checkNbr) && !is_string($checkNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkNbr)), __LINE__);
        }
        $this->CheckNbr = $checkNbr;
        return $this;
    }
    /**
     * Get CheckFirstName value
     * @return string|null
     */
    public function getCheckFirstName()
    {
        return $this->CheckFirstName;
    }
    /**
     * Set CheckFirstName value
     * @param string $checkFirstName
     * @return \StructType\SearchCriteriaType
     */
    public function setCheckFirstName($checkFirstName = null)
    {
        // validation for constraint: string
        if (!is_null($checkFirstName) && !is_string($checkFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkFirstName)), __LINE__);
        }
        $this->CheckFirstName = $checkFirstName;
        return $this;
    }
    /**
     * Get CheckLastName value
     * @return string|null
     */
    public function getCheckLastName()
    {
        return $this->CheckLastName;
    }
    /**
     * Set CheckLastName value
     * @param string $checkLastName
     * @return \StructType\SearchCriteriaType
     */
    public function setCheckLastName($checkLastName = null)
    {
        // validation for constraint: string
        if (!is_null($checkLastName) && !is_string($checkLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkLastName)), __LINE__);
        }
        $this->CheckLastName = $checkLastName;
        return $this;
    }
    /**
     * Get CheckName value
     * @return string|null
     */
    public function getCheckName()
    {
        return $this->CheckName;
    }
    /**
     * Set CheckName value
     * @param string $checkName
     * @return \StructType\SearchCriteriaType
     */
    public function setCheckName($checkName = null)
    {
        // validation for constraint: string
        if (!is_null($checkName) && !is_string($checkName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($checkName)), __LINE__);
        }
        $this->CheckName = $checkName;
        return $this;
    }
    /**
     * Get GiftCurrency value
     * @return string|null
     */
    public function getGiftCurrency()
    {
        return $this->GiftCurrency;
    }
    /**
     * Set GiftCurrency value
     * @uses \EnumType\CurrencyType::valueIsValid()
     * @uses \EnumType\CurrencyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $giftCurrency
     * @return \StructType\SearchCriteriaType
     */
    public function setGiftCurrency($giftCurrency = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CurrencyType::valueIsValid($giftCurrency)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $giftCurrency, implode(', ', \EnumType\CurrencyType::getValidValues())), __LINE__);
        }
        $this->GiftCurrency = $giftCurrency;
        return $this;
    }
    /**
     * Get GiftMaskedAlias value
     * @return string|null
     */
    public function getGiftMaskedAlias()
    {
        return $this->GiftMaskedAlias;
    }
    /**
     * Set GiftMaskedAlias value
     * @param string $giftMaskedAlias
     * @return \StructType\SearchCriteriaType
     */
    public function setGiftMaskedAlias($giftMaskedAlias = null)
    {
        // validation for constraint: string
        if (!is_null($giftMaskedAlias) && !is_string($giftMaskedAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftMaskedAlias)), __LINE__);
        }
        $this->GiftMaskedAlias = $giftMaskedAlias;
        return $this;
    }
    /**
     * Get OneTime value
     * @return string|null
     */
    public function getOneTime()
    {
        return $this->OneTime;
    }
    /**
     * Set OneTime value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $oneTime
     * @return \StructType\SearchCriteriaType
     */
    public function setOneTime($oneTime = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($oneTime)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $oneTime, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->OneTime = $oneTime;
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
     * @return \StructType\SearchCriteriaType
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
     * Get ScheduleID value
     * @return string|null
     */
    public function getScheduleID()
    {
        return $this->ScheduleID;
    }
    /**
     * Set ScheduleID value
     * @param string $scheduleID
     * @return \StructType\SearchCriteriaType
     */
    public function setScheduleID($scheduleID = null)
    {
        // validation for constraint: string
        if (!is_null($scheduleID) && !is_string($scheduleID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($scheduleID)), __LINE__);
        }
        $this->ScheduleID = $scheduleID;
        return $this;
    }
    /**
     * Get BuyerEmailAddress value
     * @return string|null
     */
    public function getBuyerEmailAddress()
    {
        return $this->BuyerEmailAddress;
    }
    /**
     * Set BuyerEmailAddress value
     * @param string $buyerEmailAddress
     * @return \StructType\SearchCriteriaType
     */
    public function setBuyerEmailAddress($buyerEmailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($buyerEmailAddress) && !is_string($buyerEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buyerEmailAddress)), __LINE__);
        }
        $this->BuyerEmailAddress = $buyerEmailAddress;
        return $this;
    }
    /**
     * Get AltPaymentStatus value
     * @return string|null
     */
    public function getAltPaymentStatus()
    {
        return $this->AltPaymentStatus;
    }
    /**
     * Set AltPaymentStatus value
     * @param string $altPaymentStatus
     * @return \StructType\SearchCriteriaType
     */
    public function setAltPaymentStatus($altPaymentStatus = null)
    {
        // validation for constraint: string
        if (!is_null($altPaymentStatus) && !is_string($altPaymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($altPaymentStatus)), __LINE__);
        }
        $this->AltPaymentStatus = $altPaymentStatus;
        return $this;
    }
    /**
     * Get FullyCapturedInd value
     * @return string|null
     */
    public function getFullyCapturedInd()
    {
        return $this->FullyCapturedInd;
    }
    /**
     * Set FullyCapturedInd value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fullyCapturedInd
     * @return \StructType\SearchCriteriaType
     */
    public function setFullyCapturedInd($fullyCapturedInd = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($fullyCapturedInd)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fullyCapturedInd, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->FullyCapturedInd = $fullyCapturedInd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\SearchCriteriaType
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
