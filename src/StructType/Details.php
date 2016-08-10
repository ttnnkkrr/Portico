<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Details StructType
 * @subpackage Structs
 */
class Details extends AbstractStructBase
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
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeviceId;
    /**
     * The TxnUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TxnUtcDT;
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The AuthAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $AuthAmt;
    /**
     * The SettlementAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $SettlementAmt;
    /**
     * The CashbackAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $CashbackAmtInfo;
    /**
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The TzConversion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TzConversion;
    /**
     * The TxnDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TxnDT;
    /**
     * The DirectMktShipMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DirectMktShipMonth;
    /**
     * The DirectMktShipDay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DirectMktShipDay;
    /**
     * The CPCTaxAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $CPCTaxAmt;
    /**
     * The CreditCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $CreditCnt;
    /**
     * The CreditAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $CreditAmt;
    /**
     * The DebitCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DebitCnt;
    /**
     * The DebitAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $DebitAmt;
    /**
     * The SaleCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SaleCnt;
    /**
     * The SaleAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $SaleAmt;
    /**
     * The ReturnCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $ReturnCnt;
    /**
     * The ReturnAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $ReturnAmt;
    /**
     * The TotalCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TotalCnt;
    /**
     * The TotalAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalAmt;
    /**
     * The TotalGratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalGratuityAmtInfo;
    /**
     * The OriginalGatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OriginalGatewayTxnId;
    /**
     * The GatewayRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayRspCode;
    /**
     * The BatchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BatchId;
    /**
     * The BatchSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BatchSeqNbr;
    /**
     * The OpenUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OpenUtcDT;
    /**
     * The OpenTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OpenTxnId;
    /**
     * The BatchTxnCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BatchTxnCnt;
    /**
     * The BatchTxnAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BatchTxnAmt;
    /**
     * The OpenDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $OpenDT;
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
     * The SiteTrace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteTrace;
    /**
     * The DebitCreditInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebitCreditInd;
    /**
     * The SaleReturnInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SaleReturnInd;
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
     * The ClerkID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClerkID;
    /**
     * The CredentialData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CredentialDataType
     */
    public $CredentialData;
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
     * The CardSwiped
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardSwiped;
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
     * The CardHolderAddr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderAddr;
    /**
     * The CardHolderCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderCity;
    /**
     * The CardHolderState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderState;
    /**
     * The CardHolderZip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderZip;
    /**
     * The CardHolderPhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderPhone;
    /**
     * The CardHolderEmail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderEmail;
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
     * The DirectMktInvoiceNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DirectMktInvoiceNbr;
    /**
     * The CPCCardHolderPONbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCCardHolderPONbr;
    /**
     * The CPCTaxType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCTaxType;
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
     * The AttachmentInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttachmentInfoType[]
     */
    public $AttachmentInfo;
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
     * The AltPaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AltPaymentDataType
     */
    public $AltPaymentData;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The GatewayRspMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GatewayRspMsg;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The IssuerRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssuerRspCode;
    /**
     * The IssuerRspText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssuerRspText;
    /**
     * The UniqueDeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueDeviceId;
    /**
     * The BatchStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BatchStatus;
    /**
     * The CloseUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CloseUtcDT;
    /**
     * The CloseTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $CloseTxnId;
    /**
     * The CloseDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CloseDT;
    /**
     * Constructor method for Details
     * @uses Details::setGatewayTxnId()
     * @uses Details::setDeviceId()
     * @uses Details::setTxnUtcDT()
     * @uses Details::setAmt()
     * @uses Details::setAuthAmt()
     * @uses Details::setSettlementAmt()
     * @uses Details::setCashbackAmtInfo()
     * @uses Details::setGratuityAmtInfo()
     * @uses Details::setTzConversion()
     * @uses Details::setTxnDT()
     * @uses Details::setDirectMktShipMonth()
     * @uses Details::setDirectMktShipDay()
     * @uses Details::setCPCTaxAmt()
     * @uses Details::setCreditCnt()
     * @uses Details::setCreditAmt()
     * @uses Details::setDebitCnt()
     * @uses Details::setDebitAmt()
     * @uses Details::setSaleCnt()
     * @uses Details::setSaleAmt()
     * @uses Details::setReturnCnt()
     * @uses Details::setReturnAmt()
     * @uses Details::setTotalCnt()
     * @uses Details::setTotalAmt()
     * @uses Details::setTotalGratuityAmtInfo()
     * @uses Details::setOriginalGatewayTxnId()
     * @uses Details::setGatewayRspCode()
     * @uses Details::setBatchId()
     * @uses Details::setBatchSeqNbr()
     * @uses Details::setOpenUtcDT()
     * @uses Details::setOpenTxnId()
     * @uses Details::setBatchTxnCnt()
     * @uses Details::setBatchTxnAmt()
     * @uses Details::setOpenDT()
     * @uses Details::setServiceName()
     * @uses Details::setTxnStatus()
     * @uses Details::setSiteTrace()
     * @uses Details::setDebitCreditInd()
     * @uses Details::setSaleReturnInd()
     * @uses Details::setCardType()
     * @uses Details::setMaskedCardNbr()
     * @uses Details::setRspCode()
     * @uses Details::setRspText()
     * @uses Details::setAuthCode()
     * @uses Details::setClerkID()
     * @uses Details::setCredentialData()
     * @uses Details::setEMVChipCondition()
     * @uses Details::setHasEMVTag()
     * @uses Details::setCardSwiped()
     * @uses Details::setCardHolderLastName()
     * @uses Details::setCardHolderFirstName()
     * @uses Details::setCardHolderAddr()
     * @uses Details::setCardHolderCity()
     * @uses Details::setCardHolderState()
     * @uses Details::setCardHolderZip()
     * @uses Details::setCardHolderPhone()
     * @uses Details::setCardHolderEmail()
     * @uses Details::setAVSRsltCode()
     * @uses Details::setCVVRsltCode()
     * @uses Details::setDirectMktInvoiceNbr()
     * @uses Details::setCPCCardHolderPONbr()
     * @uses Details::setCPCTaxType()
     * @uses Details::setLodgingData()
     * @uses Details::setAdditionalTxnFields()
     * @uses Details::setConvenienceAmtInfo()
     * @uses Details::setShippingAmtInfo()
     * @uses Details::setAttachmentInfo()
     * @uses Details::setPaymentMethodKey()
     * @uses Details::setRecurringData()
     * @uses Details::setSurchargeAmtInfo()
     * @uses Details::setCompany()
     * @uses Details::setCustomerFirstname()
     * @uses Details::setCustomerLastname()
     * @uses Details::setAltPaymentData()
     * @uses Details::setUserName()
     * @uses Details::setGatewayRspMsg()
     * @uses Details::setStatus()
     * @uses Details::setIssuerRspCode()
     * @uses Details::setIssuerRspText()
     * @uses Details::setUniqueDeviceId()
     * @uses Details::setBatchStatus()
     * @uses Details::setCloseUtcDT()
     * @uses Details::setCloseTxnId()
     * @uses Details::setCloseDT()
     * @param int $gatewayTxnId
     * @param int $deviceId
     * @param string $txnUtcDT
     * @param float $amt
     * @param float $authAmt
     * @param float $settlementAmt
     * @param float $cashbackAmtInfo
     * @param float $gratuityAmtInfo
     * @param string $tzConversion
     * @param string $txnDT
     * @param int $directMktShipMonth
     * @param int $directMktShipDay
     * @param float $cPCTaxAmt
     * @param int $creditCnt
     * @param float $creditAmt
     * @param int $debitCnt
     * @param float $debitAmt
     * @param int $saleCnt
     * @param float $saleAmt
     * @param int $returnCnt
     * @param float $returnAmt
     * @param int $totalCnt
     * @param float $totalAmt
     * @param float $totalGratuityAmtInfo
     * @param int $originalGatewayTxnId
     * @param int $gatewayRspCode
     * @param int $batchId
     * @param int $batchSeqNbr
     * @param string $openUtcDT
     * @param int $openTxnId
     * @param int $batchTxnCnt
     * @param float $batchTxnAmt
     * @param string $openDT
     * @param string $serviceName
     * @param string $txnStatus
     * @param string $siteTrace
     * @param string $debitCreditInd
     * @param string $saleReturnInd
     * @param string $cardType
     * @param string $maskedCardNbr
     * @param string $rspCode
     * @param string $rspText
     * @param string $authCode
     * @param string $clerkID
     * @param \StructType\CredentialDataType $credentialData
     * @param string $eMVChipCondition
     * @param string $hasEMVTag
     * @param string $cardSwiped
     * @param string $cardHolderLastName
     * @param string $cardHolderFirstName
     * @param string $cardHolderAddr
     * @param string $cardHolderCity
     * @param string $cardHolderState
     * @param string $cardHolderZip
     * @param string $cardHolderPhone
     * @param string $cardHolderEmail
     * @param string $aVSRsltCode
     * @param string $cVVRsltCode
     * @param string $directMktInvoiceNbr
     * @param string $cPCCardHolderPONbr
     * @param string $cPCTaxType
     * @param \StructType\LodgingDataType $lodgingData
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param float $convenienceAmtInfo
     * @param float $shippingAmtInfo
     * @param \StructType\AttachmentInfoType[] $attachmentInfo
     * @param string $paymentMethodKey
     * @param \StructType\RecurringDataType $recurringData
     * @param float $surchargeAmtInfo
     * @param string $company
     * @param string $customerFirstname
     * @param string $customerLastname
     * @param \StructType\AltPaymentDataType $altPaymentData
     * @param string $userName
     * @param string $gatewayRspMsg
     * @param string $status
     * @param string $issuerRspCode
     * @param string $issuerRspText
     * @param string $uniqueDeviceId
     * @param string $batchStatus
     * @param string $closeUtcDT
     * @param int $closeTxnId
     * @param string $closeDT
     */
    public function __construct($gatewayTxnId = null, $deviceId = null, $txnUtcDT = null, $amt = null, $authAmt = null, $settlementAmt = null, $cashbackAmtInfo = null, $gratuityAmtInfo = null, $tzConversion = null, $txnDT = null, $directMktShipMonth = null, $directMktShipDay = null, $cPCTaxAmt = null, $creditCnt = null, $creditAmt = null, $debitCnt = null, $debitAmt = null, $saleCnt = null, $saleAmt = null, $returnCnt = null, $returnAmt = null, $totalCnt = null, $totalAmt = null, $totalGratuityAmtInfo = null, $originalGatewayTxnId = null, $gatewayRspCode = null, $batchId = null, $batchSeqNbr = null, $openUtcDT = null, $openTxnId = null, $batchTxnCnt = null, $batchTxnAmt = null, $openDT = null, $serviceName = null, $txnStatus = null, $siteTrace = null, $debitCreditInd = null, $saleReturnInd = null, $cardType = null, $maskedCardNbr = null, $rspCode = null, $rspText = null, $authCode = null, $clerkID = null, \StructType\CredentialDataType $credentialData = null, $eMVChipCondition = null, $hasEMVTag = null, $cardSwiped = null, $cardHolderLastName = null, $cardHolderFirstName = null, $cardHolderAddr = null, $cardHolderCity = null, $cardHolderState = null, $cardHolderZip = null, $cardHolderPhone = null, $cardHolderEmail = null, $aVSRsltCode = null, $cVVRsltCode = null, $directMktInvoiceNbr = null, $cPCCardHolderPONbr = null, $cPCTaxType = null, \StructType\LodgingDataType $lodgingData = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, $convenienceAmtInfo = null, $shippingAmtInfo = null, array $attachmentInfo = array(), $paymentMethodKey = null, \StructType\RecurringDataType $recurringData = null, $surchargeAmtInfo = null, $company = null, $customerFirstname = null, $customerLastname = null, \StructType\AltPaymentDataType $altPaymentData = null, $userName = null, $gatewayRspMsg = null, $status = null, $issuerRspCode = null, $issuerRspText = null, $uniqueDeviceId = null, $batchStatus = null, $closeUtcDT = null, $closeTxnId = null, $closeDT = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setDeviceId($deviceId)
            ->setTxnUtcDT($txnUtcDT)
            ->setAmt($amt)
            ->setAuthAmt($authAmt)
            ->setSettlementAmt($settlementAmt)
            ->setCashbackAmtInfo($cashbackAmtInfo)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setTzConversion($tzConversion)
            ->setTxnDT($txnDT)
            ->setDirectMktShipMonth($directMktShipMonth)
            ->setDirectMktShipDay($directMktShipDay)
            ->setCPCTaxAmt($cPCTaxAmt)
            ->setCreditCnt($creditCnt)
            ->setCreditAmt($creditAmt)
            ->setDebitCnt($debitCnt)
            ->setDebitAmt($debitAmt)
            ->setSaleCnt($saleCnt)
            ->setSaleAmt($saleAmt)
            ->setReturnCnt($returnCnt)
            ->setReturnAmt($returnAmt)
            ->setTotalCnt($totalCnt)
            ->setTotalAmt($totalAmt)
            ->setTotalGratuityAmtInfo($totalGratuityAmtInfo)
            ->setOriginalGatewayTxnId($originalGatewayTxnId)
            ->setGatewayRspCode($gatewayRspCode)
            ->setBatchId($batchId)
            ->setBatchSeqNbr($batchSeqNbr)
            ->setOpenUtcDT($openUtcDT)
            ->setOpenTxnId($openTxnId)
            ->setBatchTxnCnt($batchTxnCnt)
            ->setBatchTxnAmt($batchTxnAmt)
            ->setOpenDT($openDT)
            ->setServiceName($serviceName)
            ->setTxnStatus($txnStatus)
            ->setSiteTrace($siteTrace)
            ->setDebitCreditInd($debitCreditInd)
            ->setSaleReturnInd($saleReturnInd)
            ->setCardType($cardType)
            ->setMaskedCardNbr($maskedCardNbr)
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setAuthCode($authCode)
            ->setClerkID($clerkID)
            ->setCredentialData($credentialData)
            ->setEMVChipCondition($eMVChipCondition)
            ->setHasEMVTag($hasEMVTag)
            ->setCardSwiped($cardSwiped)
            ->setCardHolderLastName($cardHolderLastName)
            ->setCardHolderFirstName($cardHolderFirstName)
            ->setCardHolderAddr($cardHolderAddr)
            ->setCardHolderCity($cardHolderCity)
            ->setCardHolderState($cardHolderState)
            ->setCardHolderZip($cardHolderZip)
            ->setCardHolderPhone($cardHolderPhone)
            ->setCardHolderEmail($cardHolderEmail)
            ->setAVSRsltCode($aVSRsltCode)
            ->setCVVRsltCode($cVVRsltCode)
            ->setDirectMktInvoiceNbr($directMktInvoiceNbr)
            ->setCPCCardHolderPONbr($cPCCardHolderPONbr)
            ->setCPCTaxType($cPCTaxType)
            ->setLodgingData($lodgingData)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setConvenienceAmtInfo($convenienceAmtInfo)
            ->setShippingAmtInfo($shippingAmtInfo)
            ->setAttachmentInfo($attachmentInfo)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setRecurringData($recurringData)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setCompany($company)
            ->setCustomerFirstname($customerFirstname)
            ->setCustomerLastname($customerLastname)
            ->setAltPaymentData($altPaymentData)
            ->setUserName($userName)
            ->setGatewayRspMsg($gatewayRspMsg)
            ->setStatus($status)
            ->setIssuerRspCode($issuerRspCode)
            ->setIssuerRspText($issuerRspText)
            ->setUniqueDeviceId($uniqueDeviceId)
            ->setBatchStatus($batchStatus)
            ->setCloseUtcDT($closeUtcDT)
            ->setCloseTxnId($closeTxnId)
            ->setCloseDT($closeDT);
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
     * @return \StructType\Details
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
     * Get DeviceId value
     * @return int
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }
    /**
     * Set DeviceId value
     * @param int $deviceId
     * @return \StructType\Details
     */
    public function setDeviceId($deviceId = null)
    {
        // validation for constraint: int
        if (!is_null($deviceId) && !is_numeric($deviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deviceId)), __LINE__);
        }
        $this->DeviceId = $deviceId;
        return $this;
    }
    /**
     * Get TxnUtcDT value
     * @return string
     */
    public function getTxnUtcDT()
    {
        return $this->TxnUtcDT;
    }
    /**
     * Set TxnUtcDT value
     * @param string $txnUtcDT
     * @return \StructType\Details
     */
    public function setTxnUtcDT($txnUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($txnUtcDT) && !is_string($txnUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnUtcDT)), __LINE__);
        }
        $this->TxnUtcDT = $txnUtcDT;
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
     * @return \StructType\Details
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
        return $this;
    }
    /**
     * Get AuthAmt value
     * @return float
     */
    public function getAuthAmt()
    {
        return $this->AuthAmt;
    }
    /**
     * Set AuthAmt value
     * @param float $authAmt
     * @return \StructType\Details
     */
    public function setAuthAmt($authAmt = null)
    {
        $this->AuthAmt = $authAmt;
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
     * @return \StructType\Details
     */
    public function setSettlementAmt($settlementAmt = null)
    {
        $this->SettlementAmt = $settlementAmt;
        return $this;
    }
    /**
     * Get CashbackAmtInfo value
     * @return float
     */
    public function getCashbackAmtInfo()
    {
        return $this->CashbackAmtInfo;
    }
    /**
     * Set CashbackAmtInfo value
     * @param float $cashbackAmtInfo
     * @return \StructType\Details
     */
    public function setCashbackAmtInfo($cashbackAmtInfo = null)
    {
        $this->CashbackAmtInfo = $cashbackAmtInfo;
        return $this;
    }
    /**
     * Get GratuityAmtInfo value
     * @return float
     */
    public function getGratuityAmtInfo()
    {
        return $this->GratuityAmtInfo;
    }
    /**
     * Set GratuityAmtInfo value
     * @param float $gratuityAmtInfo
     * @return \StructType\Details
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
        return $this;
    }
    /**
     * Get TzConversion value
     * @return string
     */
    public function getTzConversion()
    {
        return $this->TzConversion;
    }
    /**
     * Set TzConversion value
     * @uses \EnumType\TzoneConversionType::valueIsValid()
     * @uses \EnumType\TzoneConversionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tzConversion
     * @return \StructType\Details
     */
    public function setTzConversion($tzConversion = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TzoneConversionType::valueIsValid($tzConversion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tzConversion, implode(', ', \EnumType\TzoneConversionType::getValidValues())), __LINE__);
        }
        $this->TzConversion = $tzConversion;
        return $this;
    }
    /**
     * Get TxnDT value
     * @return string
     */
    public function getTxnDT()
    {
        return $this->TxnDT;
    }
    /**
     * Set TxnDT value
     * @param string $txnDT
     * @return \StructType\Details
     */
    public function setTxnDT($txnDT = null)
    {
        // validation for constraint: string
        if (!is_null($txnDT) && !is_string($txnDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnDT)), __LINE__);
        }
        $this->TxnDT = $txnDT;
        return $this;
    }
    /**
     * Get DirectMktShipMonth value
     * @return int
     */
    public function getDirectMktShipMonth()
    {
        return $this->DirectMktShipMonth;
    }
    /**
     * Set DirectMktShipMonth value
     * @param int $directMktShipMonth
     * @return \StructType\Details
     */
    public function setDirectMktShipMonth($directMktShipMonth = null)
    {
        // validation for constraint: int
        if (!is_null($directMktShipMonth) && !is_numeric($directMktShipMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($directMktShipMonth)), __LINE__);
        }
        $this->DirectMktShipMonth = $directMktShipMonth;
        return $this;
    }
    /**
     * Get DirectMktShipDay value
     * @return int
     */
    public function getDirectMktShipDay()
    {
        return $this->DirectMktShipDay;
    }
    /**
     * Set DirectMktShipDay value
     * @param int $directMktShipDay
     * @return \StructType\Details
     */
    public function setDirectMktShipDay($directMktShipDay = null)
    {
        // validation for constraint: int
        if (!is_null($directMktShipDay) && !is_numeric($directMktShipDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($directMktShipDay)), __LINE__);
        }
        $this->DirectMktShipDay = $directMktShipDay;
        return $this;
    }
    /**
     * Get CPCTaxAmt value
     * @return float
     */
    public function getCPCTaxAmt()
    {
        return $this->CPCTaxAmt;
    }
    /**
     * Set CPCTaxAmt value
     * @param float $cPCTaxAmt
     * @return \StructType\Details
     */
    public function setCPCTaxAmt($cPCTaxAmt = null)
    {
        $this->CPCTaxAmt = $cPCTaxAmt;
        return $this;
    }
    /**
     * Get CreditCnt value
     * @return int
     */
    public function getCreditCnt()
    {
        return $this->CreditCnt;
    }
    /**
     * Set CreditCnt value
     * @param int $creditCnt
     * @return \StructType\Details
     */
    public function setCreditCnt($creditCnt = null)
    {
        // validation for constraint: int
        if (!is_null($creditCnt) && !is_numeric($creditCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($creditCnt)), __LINE__);
        }
        $this->CreditCnt = $creditCnt;
        return $this;
    }
    /**
     * Get CreditAmt value
     * @return float
     */
    public function getCreditAmt()
    {
        return $this->CreditAmt;
    }
    /**
     * Set CreditAmt value
     * @param float $creditAmt
     * @return \StructType\Details
     */
    public function setCreditAmt($creditAmt = null)
    {
        $this->CreditAmt = $creditAmt;
        return $this;
    }
    /**
     * Get DebitCnt value
     * @return int
     */
    public function getDebitCnt()
    {
        return $this->DebitCnt;
    }
    /**
     * Set DebitCnt value
     * @param int $debitCnt
     * @return \StructType\Details
     */
    public function setDebitCnt($debitCnt = null)
    {
        // validation for constraint: int
        if (!is_null($debitCnt) && !is_numeric($debitCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($debitCnt)), __LINE__);
        }
        $this->DebitCnt = $debitCnt;
        return $this;
    }
    /**
     * Get DebitAmt value
     * @return float
     */
    public function getDebitAmt()
    {
        return $this->DebitAmt;
    }
    /**
     * Set DebitAmt value
     * @param float $debitAmt
     * @return \StructType\Details
     */
    public function setDebitAmt($debitAmt = null)
    {
        $this->DebitAmt = $debitAmt;
        return $this;
    }
    /**
     * Get SaleCnt value
     * @return int
     */
    public function getSaleCnt()
    {
        return $this->SaleCnt;
    }
    /**
     * Set SaleCnt value
     * @param int $saleCnt
     * @return \StructType\Details
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
     * @return float
     */
    public function getSaleAmt()
    {
        return $this->SaleAmt;
    }
    /**
     * Set SaleAmt value
     * @param float $saleAmt
     * @return \StructType\Details
     */
    public function setSaleAmt($saleAmt = null)
    {
        $this->SaleAmt = $saleAmt;
        return $this;
    }
    /**
     * Get ReturnCnt value
     * @return int
     */
    public function getReturnCnt()
    {
        return $this->ReturnCnt;
    }
    /**
     * Set ReturnCnt value
     * @param int $returnCnt
     * @return \StructType\Details
     */
    public function setReturnCnt($returnCnt = null)
    {
        // validation for constraint: int
        if (!is_null($returnCnt) && !is_numeric($returnCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnCnt)), __LINE__);
        }
        $this->ReturnCnt = $returnCnt;
        return $this;
    }
    /**
     * Get ReturnAmt value
     * @return float
     */
    public function getReturnAmt()
    {
        return $this->ReturnAmt;
    }
    /**
     * Set ReturnAmt value
     * @param float $returnAmt
     * @return \StructType\Details
     */
    public function setReturnAmt($returnAmt = null)
    {
        $this->ReturnAmt = $returnAmt;
        return $this;
    }
    /**
     * Get TotalCnt value
     * @return int
     */
    public function getTotalCnt()
    {
        return $this->TotalCnt;
    }
    /**
     * Set TotalCnt value
     * @param int $totalCnt
     * @return \StructType\Details
     */
    public function setTotalCnt($totalCnt = null)
    {
        // validation for constraint: int
        if (!is_null($totalCnt) && !is_numeric($totalCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($totalCnt)), __LINE__);
        }
        $this->TotalCnt = $totalCnt;
        return $this;
    }
    /**
     * Get TotalAmt value
     * @return float
     */
    public function getTotalAmt()
    {
        return $this->TotalAmt;
    }
    /**
     * Set TotalAmt value
     * @param float $totalAmt
     * @return \StructType\Details
     */
    public function setTotalAmt($totalAmt = null)
    {
        $this->TotalAmt = $totalAmt;
        return $this;
    }
    /**
     * Get TotalGratuityAmtInfo value
     * @return float
     */
    public function getTotalGratuityAmtInfo()
    {
        return $this->TotalGratuityAmtInfo;
    }
    /**
     * Set TotalGratuityAmtInfo value
     * @param float $totalGratuityAmtInfo
     * @return \StructType\Details
     */
    public function setTotalGratuityAmtInfo($totalGratuityAmtInfo = null)
    {
        $this->TotalGratuityAmtInfo = $totalGratuityAmtInfo;
        return $this;
    }
    /**
     * Get OriginalGatewayTxnId value
     * @return int
     */
    public function getOriginalGatewayTxnId()
    {
        return $this->OriginalGatewayTxnId;
    }
    /**
     * Set OriginalGatewayTxnId value
     * @param int $originalGatewayTxnId
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * Get BatchId value
     * @return int
     */
    public function getBatchId()
    {
        return $this->BatchId;
    }
    /**
     * Set BatchId value
     * @param int $batchId
     * @return \StructType\Details
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
     * Get BatchSeqNbr value
     * @return int
     */
    public function getBatchSeqNbr()
    {
        return $this->BatchSeqNbr;
    }
    /**
     * Set BatchSeqNbr value
     * @param int $batchSeqNbr
     * @return \StructType\Details
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
     * Get OpenUtcDT value
     * @return string
     */
    public function getOpenUtcDT()
    {
        return $this->OpenUtcDT;
    }
    /**
     * Set OpenUtcDT value
     * @param string $openUtcDT
     * @return \StructType\Details
     */
    public function setOpenUtcDT($openUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($openUtcDT) && !is_string($openUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openUtcDT)), __LINE__);
        }
        $this->OpenUtcDT = $openUtcDT;
        return $this;
    }
    /**
     * Get OpenTxnId value
     * @return int
     */
    public function getOpenTxnId()
    {
        return $this->OpenTxnId;
    }
    /**
     * Set OpenTxnId value
     * @param int $openTxnId
     * @return \StructType\Details
     */
    public function setOpenTxnId($openTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($openTxnId) && !is_numeric($openTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($openTxnId)), __LINE__);
        }
        $this->OpenTxnId = $openTxnId;
        return $this;
    }
    /**
     * Get BatchTxnCnt value
     * @return int
     */
    public function getBatchTxnCnt()
    {
        return $this->BatchTxnCnt;
    }
    /**
     * Set BatchTxnCnt value
     * @param int $batchTxnCnt
     * @return \StructType\Details
     */
    public function setBatchTxnCnt($batchTxnCnt = null)
    {
        // validation for constraint: int
        if (!is_null($batchTxnCnt) && !is_numeric($batchTxnCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchTxnCnt)), __LINE__);
        }
        $this->BatchTxnCnt = $batchTxnCnt;
        return $this;
    }
    /**
     * Get BatchTxnAmt value
     * @return float
     */
    public function getBatchTxnAmt()
    {
        return $this->BatchTxnAmt;
    }
    /**
     * Set BatchTxnAmt value
     * @param float $batchTxnAmt
     * @return \StructType\Details
     */
    public function setBatchTxnAmt($batchTxnAmt = null)
    {
        $this->BatchTxnAmt = $batchTxnAmt;
        return $this;
    }
    /**
     * Get OpenDT value
     * @return string
     */
    public function getOpenDT()
    {
        return $this->OpenDT;
    }
    /**
     * Set OpenDT value
     * @param string $openDT
     * @return \StructType\Details
     */
    public function setOpenDT($openDT = null)
    {
        // validation for constraint: string
        if (!is_null($openDT) && !is_string($openDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openDT)), __LINE__);
        }
        $this->OpenDT = $openDT;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * Get DebitCreditInd value
     * @return string|null
     */
    public function getDebitCreditInd()
    {
        return $this->DebitCreditInd;
    }
    /**
     * Set DebitCreditInd value
     * @param string $debitCreditInd
     * @return \StructType\Details
     */
    public function setDebitCreditInd($debitCreditInd = null)
    {
        // validation for constraint: string
        if (!is_null($debitCreditInd) && !is_string($debitCreditInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($debitCreditInd)), __LINE__);
        }
        $this->DebitCreditInd = $debitCreditInd;
        return $this;
    }
    /**
     * Get SaleReturnInd value
     * @return string|null
     */
    public function getSaleReturnInd()
    {
        return $this->SaleReturnInd;
    }
    /**
     * Set SaleReturnInd value
     * @param string $saleReturnInd
     * @return \StructType\Details
     */
    public function setSaleReturnInd($saleReturnInd = null)
    {
        // validation for constraint: string
        if (!is_null($saleReturnInd) && !is_string($saleReturnInd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($saleReturnInd)), __LINE__);
        }
        $this->SaleReturnInd = $saleReturnInd;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
     */
    public function setCredentialData(\StructType\CredentialDataType $credentialData = null)
    {
        $this->CredentialData = $credentialData;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * Get CardHolderAddr value
     * @return string|null
     */
    public function getCardHolderAddr()
    {
        return $this->CardHolderAddr;
    }
    /**
     * Set CardHolderAddr value
     * @param string $cardHolderAddr
     * @return \StructType\Details
     */
    public function setCardHolderAddr($cardHolderAddr = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderAddr) && !is_string($cardHolderAddr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderAddr)), __LINE__);
        }
        $this->CardHolderAddr = $cardHolderAddr;
        return $this;
    }
    /**
     * Get CardHolderCity value
     * @return string|null
     */
    public function getCardHolderCity()
    {
        return $this->CardHolderCity;
    }
    /**
     * Set CardHolderCity value
     * @param string $cardHolderCity
     * @return \StructType\Details
     */
    public function setCardHolderCity($cardHolderCity = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderCity) && !is_string($cardHolderCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderCity)), __LINE__);
        }
        $this->CardHolderCity = $cardHolderCity;
        return $this;
    }
    /**
     * Get CardHolderState value
     * @return string|null
     */
    public function getCardHolderState()
    {
        return $this->CardHolderState;
    }
    /**
     * Set CardHolderState value
     * @param string $cardHolderState
     * @return \StructType\Details
     */
    public function setCardHolderState($cardHolderState = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderState) && !is_string($cardHolderState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderState)), __LINE__);
        }
        $this->CardHolderState = $cardHolderState;
        return $this;
    }
    /**
     * Get CardHolderZip value
     * @return string|null
     */
    public function getCardHolderZip()
    {
        return $this->CardHolderZip;
    }
    /**
     * Set CardHolderZip value
     * @param string $cardHolderZip
     * @return \StructType\Details
     */
    public function setCardHolderZip($cardHolderZip = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderZip) && !is_string($cardHolderZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderZip)), __LINE__);
        }
        $this->CardHolderZip = $cardHolderZip;
        return $this;
    }
    /**
     * Get CardHolderPhone value
     * @return string|null
     */
    public function getCardHolderPhone()
    {
        return $this->CardHolderPhone;
    }
    /**
     * Set CardHolderPhone value
     * @param string $cardHolderPhone
     * @return \StructType\Details
     */
    public function setCardHolderPhone($cardHolderPhone = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderPhone) && !is_string($cardHolderPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderPhone)), __LINE__);
        }
        $this->CardHolderPhone = $cardHolderPhone;
        return $this;
    }
    /**
     * Get CardHolderEmail value
     * @return string|null
     */
    public function getCardHolderEmail()
    {
        return $this->CardHolderEmail;
    }
    /**
     * Set CardHolderEmail value
     * @param string $cardHolderEmail
     * @return \StructType\Details
     */
    public function setCardHolderEmail($cardHolderEmail = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderEmail) && !is_string($cardHolderEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderEmail)), __LINE__);
        }
        $this->CardHolderEmail = $cardHolderEmail;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * Get DirectMktInvoiceNbr value
     * @return string|null
     */
    public function getDirectMktInvoiceNbr()
    {
        return $this->DirectMktInvoiceNbr;
    }
    /**
     * Set DirectMktInvoiceNbr value
     * @param string $directMktInvoiceNbr
     * @return \StructType\Details
     */
    public function setDirectMktInvoiceNbr($directMktInvoiceNbr = null)
    {
        // validation for constraint: string
        if (!is_null($directMktInvoiceNbr) && !is_string($directMktInvoiceNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directMktInvoiceNbr)), __LINE__);
        }
        $this->DirectMktInvoiceNbr = $directMktInvoiceNbr;
        return $this;
    }
    /**
     * Get CPCCardHolderPONbr value
     * @return string|null
     */
    public function getCPCCardHolderPONbr()
    {
        return $this->CPCCardHolderPONbr;
    }
    /**
     * Set CPCCardHolderPONbr value
     * @param string $cPCCardHolderPONbr
     * @return \StructType\Details
     */
    public function setCPCCardHolderPONbr($cPCCardHolderPONbr = null)
    {
        // validation for constraint: string
        if (!is_null($cPCCardHolderPONbr) && !is_string($cPCCardHolderPONbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cPCCardHolderPONbr)), __LINE__);
        }
        $this->CPCCardHolderPONbr = $cPCCardHolderPONbr;
        return $this;
    }
    /**
     * Get CPCTaxType value
     * @return string|null
     */
    public function getCPCTaxType()
    {
        return $this->CPCTaxType;
    }
    /**
     * Set CPCTaxType value
     * @param string $cPCTaxType
     * @return \StructType\Details
     */
    public function setCPCTaxType($cPCTaxType = null)
    {
        // validation for constraint: string
        if (!is_null($cPCTaxType) && !is_string($cPCTaxType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cPCTaxType)), __LINE__);
        }
        $this->CPCTaxType = $cPCTaxType;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
     */
    public function setShippingAmtInfo($shippingAmtInfo = null)
    {
        $this->ShippingAmtInfo = $shippingAmtInfo;
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
     * @return \StructType\Details
     */
    public function setAttachmentInfo(array $attachmentInfo = array())
    {
        foreach ($attachmentInfo as $detailsAttachmentInfoItem) {
            // validation for constraint: itemType
            if (!$detailsAttachmentInfoItem instanceof \StructType\AttachmentInfoType) {
                throw new \InvalidArgumentException(sprintf('The AttachmentInfo property can only contain items of \StructType\AttachmentInfoType, "%s" given', is_object($detailsAttachmentInfoItem) ? get_class($detailsAttachmentInfoItem) : gettype($detailsAttachmentInfoItem)), __LINE__);
            }
        }
        $this->AttachmentInfo = $attachmentInfo;
        return $this;
    }
    /**
     * Add item to AttachmentInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentInfoType $item
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
     */
    public function setSurchargeAmtInfo($surchargeAmtInfo = null)
    {
        $this->SurchargeAmtInfo = $surchargeAmtInfo;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * @return \StructType\Details
     */
    public function setAltPaymentData(\StructType\AltPaymentDataType $altPaymentData = null)
    {
        $this->AltPaymentData = $altPaymentData;
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
     * @return \StructType\Details
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
     * @return \StructType\Details
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \StructType\Details
     */
    public function setStatus($status = null)
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($status)), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get IssuerRspCode value
     * @return string|null
     */
    public function getIssuerRspCode()
    {
        return $this->IssuerRspCode;
    }
    /**
     * Set IssuerRspCode value
     * @param string $issuerRspCode
     * @return \StructType\Details
     */
    public function setIssuerRspCode($issuerRspCode = null)
    {
        // validation for constraint: string
        if (!is_null($issuerRspCode) && !is_string($issuerRspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuerRspCode)), __LINE__);
        }
        $this->IssuerRspCode = $issuerRspCode;
        return $this;
    }
    /**
     * Get IssuerRspText value
     * @return string|null
     */
    public function getIssuerRspText()
    {
        return $this->IssuerRspText;
    }
    /**
     * Set IssuerRspText value
     * @param string $issuerRspText
     * @return \StructType\Details
     */
    public function setIssuerRspText($issuerRspText = null)
    {
        // validation for constraint: string
        if (!is_null($issuerRspText) && !is_string($issuerRspText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuerRspText)), __LINE__);
        }
        $this->IssuerRspText = $issuerRspText;
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
     * @return \StructType\Details
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
     * Get BatchStatus value
     * @return string|null
     */
    public function getBatchStatus()
    {
        return $this->BatchStatus;
    }
    /**
     * Set BatchStatus value
     * @param string $batchStatus
     * @return \StructType\Details
     */
    public function setBatchStatus($batchStatus = null)
    {
        // validation for constraint: string
        if (!is_null($batchStatus) && !is_string($batchStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($batchStatus)), __LINE__);
        }
        $this->BatchStatus = $batchStatus;
        return $this;
    }
    /**
     * Get CloseUtcDT value
     * @return string|null
     */
    public function getCloseUtcDT()
    {
        return $this->CloseUtcDT;
    }
    /**
     * Set CloseUtcDT value
     * @param string $closeUtcDT
     * @return \StructType\Details
     */
    public function setCloseUtcDT($closeUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($closeUtcDT) && !is_string($closeUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closeUtcDT)), __LINE__);
        }
        $this->CloseUtcDT = $closeUtcDT;
        return $this;
    }
    /**
     * Get CloseTxnId value
     * @return int|null
     */
    public function getCloseTxnId()
    {
        return $this->CloseTxnId;
    }
    /**
     * Set CloseTxnId value
     * @param int $closeTxnId
     * @return \StructType\Details
     */
    public function setCloseTxnId($closeTxnId = null)
    {
        // validation for constraint: int
        if (!is_null($closeTxnId) && !is_numeric($closeTxnId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($closeTxnId)), __LINE__);
        }
        $this->CloseTxnId = $closeTxnId;
        return $this;
    }
    /**
     * Get CloseDT value
     * @return string|null
     */
    public function getCloseDT()
    {
        return $this->CloseDT;
    }
    /**
     * Set CloseDT value
     * @param string $closeDT
     * @return \StructType\Details
     */
    public function setCloseDT($closeDT = null)
    {
        // validation for constraint: string
        if (!is_null($closeDT) && !is_string($closeDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closeDT)), __LINE__);
        }
        $this->CloseDT = $closeDT;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Details
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
