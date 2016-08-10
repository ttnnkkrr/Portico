<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Data StructType
 * @subpackage Structs
 */
class Data extends AbstractStructBase
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
     * The AuthAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $AuthAmt;
    /**
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The CashbackAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $CashbackAmtInfo;
    /**
     * The TxnSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TxnSeqNbr;
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
     * The SettlementAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $SettlementAmt;
    /**
     * The AllowPartialAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $AllowPartialAuth;
    /**
     * The TxnStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnStatus;
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
     * The CardPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardPresent;
    /**
     * The ReaderPresent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReaderPresent;
    /**
     * The CardSwiped
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardSwiped;
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
     * The CVVReq
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVVReq;
    /**
     * The CVVRsltCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CVVRsltCode;
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
     * The CPCReq
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCReq;
    /**
     * The CPCInd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CPCInd;
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
     * The ReqACI
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReqACI;
    /**
     * The RspACI
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspACI;
    /**
     * The MktSpecDataId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MktSpecDataId;
    /**
     * The TxnCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TxnCode;
    /**
     * The AcctDataSrc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AcctDataSrc;
    /**
     * The AuthSrcCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthSrcCode;
    /**
     * The IssTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssTxnId;
    /**
     * The IssValidationCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IssValidationCode;
    /**
     * The CardHolderIdCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardHolderIdCode;
    /**
     * The NetworkIdCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NetworkIdCode;
    /**
     * The RefNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RefNbr;
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
     * The AutoSubstantiation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AutoSubstantiationReportType
     */
    public $AutoSubstantiation;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The Attachment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AttachmentRspDataType
     */
    public $Attachment;
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
     * The Ecommerce
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Ecommerce;
    /**
     * The TokenizationMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenizationMsg;
    /**
     * The CryptoTypeIn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CryptoTypeIn;
    /**
     * The CryptoTypeOut
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CryptoTypeOut;
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
     * The LodgingData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LodgingDataType
     */
    public $LodgingData;
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
     * The CheckDataInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CheckDataInfoType
     */
    public $CheckDataInfo;
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
     * The ReturnAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ReturnAmtInfo;
    /**
     * The ReversalAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ReversalAmtInfo;
    /**
     * The IncrementalAuthAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $IncrementalAuthAmtInfo;
    /**
     * The AllowDup
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AllowDup;
    /**
     * The SystemAuditTraceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SystemAuditTraceNumber;
    /**
     * The LodgingCheckInDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LodgingCheckInDate;
    /**
     * The LodgingCheckOutDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LodgingCheckOutDate;
    /**
     * The ProcessorRefNum
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProcessorRefNum;
    /**
     * The ReversalIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReversalIndicator;
    /**
     * The TokenRequested
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenRequested;
    /**
     * The TokenGenerated
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TokenGenerated;
    /**
     * The EMVChipCondition
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVChipCondition;
    /**
     * The EMVTagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVTagData;
    /**
     * The EMVIssuerResp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EMVIssuerResp;
    /**
     * The TypeOfPaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TypeOfPaymentData;
    /**
     * The PaymentData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentData;
    /**
     * The ECommerceIndicator
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ECommerceIndicator;
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
     * The PaymentDataSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PaymentDataSource;
    /**
     * The TagData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TagDataType
     */
    public $TagData;
    /**
     * Constructor method for Data
     * @uses Data::setAmt()
     * @uses Data::setAuthAmt()
     * @uses Data::setGratuityAmtInfo()
     * @uses Data::setCashbackAmtInfo()
     * @uses Data::setTxnSeqNbr()
     * @uses Data::setDirectMktShipMonth()
     * @uses Data::setDirectMktShipDay()
     * @uses Data::setCPCTaxAmt()
     * @uses Data::setSettlementAmt()
     * @uses Data::setAllowPartialAuth()
     * @uses Data::setTxnStatus()
     * @uses Data::setCardType()
     * @uses Data::setMaskedCardNbr()
     * @uses Data::setCardPresent()
     * @uses Data::setReaderPresent()
     * @uses Data::setCardSwiped()
     * @uses Data::setDebitCreditInd()
     * @uses Data::setSaleReturnInd()
     * @uses Data::setCVVReq()
     * @uses Data::setCVVRsltCode()
     * @uses Data::setCardHolderLastName()
     * @uses Data::setCardHolderFirstName()
     * @uses Data::setCardHolderAddr()
     * @uses Data::setCardHolderCity()
     * @uses Data::setCardHolderState()
     * @uses Data::setCardHolderZip()
     * @uses Data::setCardHolderPhone()
     * @uses Data::setCardHolderEmail()
     * @uses Data::setAVSRsltCode()
     * @uses Data::setCPCReq()
     * @uses Data::setCPCInd()
     * @uses Data::setRspCode()
     * @uses Data::setRspText()
     * @uses Data::setAuthCode()
     * @uses Data::setReqACI()
     * @uses Data::setRspACI()
     * @uses Data::setMktSpecDataId()
     * @uses Data::setTxnCode()
     * @uses Data::setAcctDataSrc()
     * @uses Data::setAuthSrcCode()
     * @uses Data::setIssTxnId()
     * @uses Data::setIssValidationCode()
     * @uses Data::setCardHolderIdCode()
     * @uses Data::setNetworkIdCode()
     * @uses Data::setRefNbr()
     * @uses Data::setDirectMktInvoiceNbr()
     * @uses Data::setCPCCardHolderPONbr()
     * @uses Data::setCPCTaxType()
     * @uses Data::setAutoSubstantiation()
     * @uses Data::setAdditionalTxnFields()
     * @uses Data::setAttachment()
     * @uses Data::setAVSRsltText()
     * @uses Data::setCVVRsltText()
     * @uses Data::setEcommerce()
     * @uses Data::setTokenizationMsg()
     * @uses Data::setCryptoTypeIn()
     * @uses Data::setCryptoTypeOut()
     * @uses Data::setClerkID()
     * @uses Data::setCredentialData()
     * @uses Data::setLodgingData()
     * @uses Data::setConvenienceAmtInfo()
     * @uses Data::setShippingAmtInfo()
     * @uses Data::setTxnDescriptor()
     * @uses Data::setCheckDataInfo()
     * @uses Data::setAttachmentInfo()
     * @uses Data::setGiftData()
     * @uses Data::setPaymentMethodKey()
     * @uses Data::setRecurringData()
     * @uses Data::setSurchargeAmtInfo()
     * @uses Data::setCashData()
     * @uses Data::setReturnAmtInfo()
     * @uses Data::setReversalAmtInfo()
     * @uses Data::setIncrementalAuthAmtInfo()
     * @uses Data::setAllowDup()
     * @uses Data::setSystemAuditTraceNumber()
     * @uses Data::setLodgingCheckInDate()
     * @uses Data::setLodgingCheckOutDate()
     * @uses Data::setProcessorRefNum()
     * @uses Data::setReversalIndicator()
     * @uses Data::setTokenRequested()
     * @uses Data::setTokenGenerated()
     * @uses Data::setEMVChipCondition()
     * @uses Data::setEMVTagData()
     * @uses Data::setEMVIssuerResp()
     * @uses Data::setTypeOfPaymentData()
     * @uses Data::setPaymentData()
     * @uses Data::setECommerceIndicator()
     * @uses Data::setCAVVResultCode()
     * @uses Data::setTokenPANLast4()
     * @uses Data::setCompany()
     * @uses Data::setCustomerFirstname()
     * @uses Data::setCustomerLastname()
     * @uses Data::setDebtRepaymentIndicator()
     * @uses Data::setAltPaymentData()
     * @uses Data::setMultiFulfillmentData()
     * @uses Data::setPaymentDataSource()
     * @uses Data::setTagData()
     * @param float $amt
     * @param float $authAmt
     * @param float $gratuityAmtInfo
     * @param float $cashbackAmtInfo
     * @param int $txnSeqNbr
     * @param int $directMktShipMonth
     * @param int $directMktShipDay
     * @param float $cPCTaxAmt
     * @param float $settlementAmt
     * @param string $allowPartialAuth
     * @param string $txnStatus
     * @param string $cardType
     * @param string $maskedCardNbr
     * @param string $cardPresent
     * @param string $readerPresent
     * @param string $cardSwiped
     * @param string $debitCreditInd
     * @param string $saleReturnInd
     * @param string $cVVReq
     * @param string $cVVRsltCode
     * @param string $cardHolderLastName
     * @param string $cardHolderFirstName
     * @param string $cardHolderAddr
     * @param string $cardHolderCity
     * @param string $cardHolderState
     * @param string $cardHolderZip
     * @param string $cardHolderPhone
     * @param string $cardHolderEmail
     * @param string $aVSRsltCode
     * @param string $cPCReq
     * @param string $cPCInd
     * @param string $rspCode
     * @param string $rspText
     * @param string $authCode
     * @param string $reqACI
     * @param string $rspACI
     * @param string $mktSpecDataId
     * @param string $txnCode
     * @param string $acctDataSrc
     * @param string $authSrcCode
     * @param string $issTxnId
     * @param string $issValidationCode
     * @param string $cardHolderIdCode
     * @param string $networkIdCode
     * @param string $refNbr
     * @param string $directMktInvoiceNbr
     * @param string $cPCCardHolderPONbr
     * @param string $cPCTaxType
     * @param \StructType\AutoSubstantiationReportType $autoSubstantiation
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param \StructType\AttachmentRspDataType $attachment
     * @param string $aVSRsltText
     * @param string $cVVRsltText
     * @param string $ecommerce
     * @param string $tokenizationMsg
     * @param string $cryptoTypeIn
     * @param string $cryptoTypeOut
     * @param string $clerkID
     * @param \StructType\CredentialDataType $credentialData
     * @param \StructType\LodgingDataType $lodgingData
     * @param float $convenienceAmtInfo
     * @param float $shippingAmtInfo
     * @param string $txnDescriptor
     * @param \StructType\CheckDataInfoType $checkDataInfo
     * @param \StructType\AttachmentInfoType[] $attachmentInfo
     * @param \StructType\GiftDataType $giftData
     * @param string $paymentMethodKey
     * @param \StructType\RecurringDataType $recurringData
     * @param float $surchargeAmtInfo
     * @param \StructType\CashDataType $cashData
     * @param float $returnAmtInfo
     * @param float $reversalAmtInfo
     * @param float $incrementalAuthAmtInfo
     * @param string $allowDup
     * @param string $systemAuditTraceNumber
     * @param string $lodgingCheckInDate
     * @param string $lodgingCheckOutDate
     * @param string $processorRefNum
     * @param string $reversalIndicator
     * @param string $tokenRequested
     * @param string $tokenGenerated
     * @param string $eMVChipCondition
     * @param string $eMVTagData
     * @param string $eMVIssuerResp
     * @param string $typeOfPaymentData
     * @param string $paymentData
     * @param string $eCommerceIndicator
     * @param string $cAVVResultCode
     * @param string $tokenPANLast4
     * @param string $company
     * @param string $customerFirstname
     * @param string $customerLastname
     * @param string $debtRepaymentIndicator
     * @param \StructType\AltPaymentDataType $altPaymentData
     * @param \StructType\MultiFulfillmentDataType $multiFulfillmentData
     * @param string $paymentDataSource
     * @param \StructType\TagDataType $tagData
     */
    public function __construct($amt = null, $authAmt = null, $gratuityAmtInfo = null, $cashbackAmtInfo = null, $txnSeqNbr = null, $directMktShipMonth = null, $directMktShipDay = null, $cPCTaxAmt = null, $settlementAmt = null, $allowPartialAuth = null, $txnStatus = null, $cardType = null, $maskedCardNbr = null, $cardPresent = null, $readerPresent = null, $cardSwiped = null, $debitCreditInd = null, $saleReturnInd = null, $cVVReq = null, $cVVRsltCode = null, $cardHolderLastName = null, $cardHolderFirstName = null, $cardHolderAddr = null, $cardHolderCity = null, $cardHolderState = null, $cardHolderZip = null, $cardHolderPhone = null, $cardHolderEmail = null, $aVSRsltCode = null, $cPCReq = null, $cPCInd = null, $rspCode = null, $rspText = null, $authCode = null, $reqACI = null, $rspACI = null, $mktSpecDataId = null, $txnCode = null, $acctDataSrc = null, $authSrcCode = null, $issTxnId = null, $issValidationCode = null, $cardHolderIdCode = null, $networkIdCode = null, $refNbr = null, $directMktInvoiceNbr = null, $cPCCardHolderPONbr = null, $cPCTaxType = null, \StructType\AutoSubstantiationReportType $autoSubstantiation = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, \StructType\AttachmentRspDataType $attachment = null, $aVSRsltText = null, $cVVRsltText = null, $ecommerce = null, $tokenizationMsg = null, $cryptoTypeIn = null, $cryptoTypeOut = null, $clerkID = null, \StructType\CredentialDataType $credentialData = null, \StructType\LodgingDataType $lodgingData = null, $convenienceAmtInfo = null, $shippingAmtInfo = null, $txnDescriptor = null, \StructType\CheckDataInfoType $checkDataInfo = null, array $attachmentInfo = array(), \StructType\GiftDataType $giftData = null, $paymentMethodKey = null, \StructType\RecurringDataType $recurringData = null, $surchargeAmtInfo = null, \StructType\CashDataType $cashData = null, $returnAmtInfo = null, $reversalAmtInfo = null, $incrementalAuthAmtInfo = null, $allowDup = null, $systemAuditTraceNumber = null, $lodgingCheckInDate = null, $lodgingCheckOutDate = null, $processorRefNum = null, $reversalIndicator = null, $tokenRequested = null, $tokenGenerated = null, $eMVChipCondition = null, $eMVTagData = null, $eMVIssuerResp = null, $typeOfPaymentData = null, $paymentData = null, $eCommerceIndicator = null, $cAVVResultCode = null, $tokenPANLast4 = null, $company = null, $customerFirstname = null, $customerLastname = null, $debtRepaymentIndicator = null, \StructType\AltPaymentDataType $altPaymentData = null, \StructType\MultiFulfillmentDataType $multiFulfillmentData = null, $paymentDataSource = null, \StructType\TagDataType $tagData = null)
    {
        $this
            ->setAmt($amt)
            ->setAuthAmt($authAmt)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setCashbackAmtInfo($cashbackAmtInfo)
            ->setTxnSeqNbr($txnSeqNbr)
            ->setDirectMktShipMonth($directMktShipMonth)
            ->setDirectMktShipDay($directMktShipDay)
            ->setCPCTaxAmt($cPCTaxAmt)
            ->setSettlementAmt($settlementAmt)
            ->setAllowPartialAuth($allowPartialAuth)
            ->setTxnStatus($txnStatus)
            ->setCardType($cardType)
            ->setMaskedCardNbr($maskedCardNbr)
            ->setCardPresent($cardPresent)
            ->setReaderPresent($readerPresent)
            ->setCardSwiped($cardSwiped)
            ->setDebitCreditInd($debitCreditInd)
            ->setSaleReturnInd($saleReturnInd)
            ->setCVVReq($cVVReq)
            ->setCVVRsltCode($cVVRsltCode)
            ->setCardHolderLastName($cardHolderLastName)
            ->setCardHolderFirstName($cardHolderFirstName)
            ->setCardHolderAddr($cardHolderAddr)
            ->setCardHolderCity($cardHolderCity)
            ->setCardHolderState($cardHolderState)
            ->setCardHolderZip($cardHolderZip)
            ->setCardHolderPhone($cardHolderPhone)
            ->setCardHolderEmail($cardHolderEmail)
            ->setAVSRsltCode($aVSRsltCode)
            ->setCPCReq($cPCReq)
            ->setCPCInd($cPCInd)
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setAuthCode($authCode)
            ->setReqACI($reqACI)
            ->setRspACI($rspACI)
            ->setMktSpecDataId($mktSpecDataId)
            ->setTxnCode($txnCode)
            ->setAcctDataSrc($acctDataSrc)
            ->setAuthSrcCode($authSrcCode)
            ->setIssTxnId($issTxnId)
            ->setIssValidationCode($issValidationCode)
            ->setCardHolderIdCode($cardHolderIdCode)
            ->setNetworkIdCode($networkIdCode)
            ->setRefNbr($refNbr)
            ->setDirectMktInvoiceNbr($directMktInvoiceNbr)
            ->setCPCCardHolderPONbr($cPCCardHolderPONbr)
            ->setCPCTaxType($cPCTaxType)
            ->setAutoSubstantiation($autoSubstantiation)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setAttachment($attachment)
            ->setAVSRsltText($aVSRsltText)
            ->setCVVRsltText($cVVRsltText)
            ->setEcommerce($ecommerce)
            ->setTokenizationMsg($tokenizationMsg)
            ->setCryptoTypeIn($cryptoTypeIn)
            ->setCryptoTypeOut($cryptoTypeOut)
            ->setClerkID($clerkID)
            ->setCredentialData($credentialData)
            ->setLodgingData($lodgingData)
            ->setConvenienceAmtInfo($convenienceAmtInfo)
            ->setShippingAmtInfo($shippingAmtInfo)
            ->setTxnDescriptor($txnDescriptor)
            ->setCheckDataInfo($checkDataInfo)
            ->setAttachmentInfo($attachmentInfo)
            ->setGiftData($giftData)
            ->setPaymentMethodKey($paymentMethodKey)
            ->setRecurringData($recurringData)
            ->setSurchargeAmtInfo($surchargeAmtInfo)
            ->setCashData($cashData)
            ->setReturnAmtInfo($returnAmtInfo)
            ->setReversalAmtInfo($reversalAmtInfo)
            ->setIncrementalAuthAmtInfo($incrementalAuthAmtInfo)
            ->setAllowDup($allowDup)
            ->setSystemAuditTraceNumber($systemAuditTraceNumber)
            ->setLodgingCheckInDate($lodgingCheckInDate)
            ->setLodgingCheckOutDate($lodgingCheckOutDate)
            ->setProcessorRefNum($processorRefNum)
            ->setReversalIndicator($reversalIndicator)
            ->setTokenRequested($tokenRequested)
            ->setTokenGenerated($tokenGenerated)
            ->setEMVChipCondition($eMVChipCondition)
            ->setEMVTagData($eMVTagData)
            ->setEMVIssuerResp($eMVIssuerResp)
            ->setTypeOfPaymentData($typeOfPaymentData)
            ->setPaymentData($paymentData)
            ->setECommerceIndicator($eCommerceIndicator)
            ->setCAVVResultCode($cAVVResultCode)
            ->setTokenPANLast4($tokenPANLast4)
            ->setCompany($company)
            ->setCustomerFirstname($customerFirstname)
            ->setCustomerLastname($customerLastname)
            ->setDebtRepaymentIndicator($debtRepaymentIndicator)
            ->setAltPaymentData($altPaymentData)
            ->setMultiFulfillmentData($multiFulfillmentData)
            ->setPaymentDataSource($paymentDataSource)
            ->setTagData($tagData);
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
     * @return \StructType\Data
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
     * @return \StructType\Data
     */
    public function setAuthAmt($authAmt = null)
    {
        $this->AuthAmt = $authAmt;
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
     * @return \StructType\Data
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
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
     * @return \StructType\Data
     */
    public function setCashbackAmtInfo($cashbackAmtInfo = null)
    {
        $this->CashbackAmtInfo = $cashbackAmtInfo;
        return $this;
    }
    /**
     * Get TxnSeqNbr value
     * @return int
     */
    public function getTxnSeqNbr()
    {
        return $this->TxnSeqNbr;
    }
    /**
     * Set TxnSeqNbr value
     * @param int $txnSeqNbr
     * @return \StructType\Data
     */
    public function setTxnSeqNbr($txnSeqNbr = null)
    {
        // validation for constraint: int
        if (!is_null($txnSeqNbr) && !is_numeric($txnSeqNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($txnSeqNbr)), __LINE__);
        }
        $this->TxnSeqNbr = $txnSeqNbr;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
     */
    public function setCPCTaxAmt($cPCTaxAmt = null)
    {
        $this->CPCTaxAmt = $cPCTaxAmt;
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
     * @return \StructType\Data
     */
    public function setSettlementAmt($settlementAmt = null)
    {
        $this->SettlementAmt = $settlementAmt;
        return $this;
    }
    /**
     * Get AllowPartialAuth value
     * @return string
     */
    public function getAllowPartialAuth()
    {
        return $this->AllowPartialAuth;
    }
    /**
     * Set AllowPartialAuth value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $allowPartialAuth
     * @return \StructType\Data
     */
    public function setAllowPartialAuth($allowPartialAuth = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($allowPartialAuth)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $allowPartialAuth, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->AllowPartialAuth = $allowPartialAuth;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get CardPresent value
     * @return string|null
     */
    public function getCardPresent()
    {
        return $this->CardPresent;
    }
    /**
     * Set CardPresent value
     * @param string $cardPresent
     * @return \StructType\Data
     */
    public function setCardPresent($cardPresent = null)
    {
        // validation for constraint: string
        if (!is_null($cardPresent) && !is_string($cardPresent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardPresent)), __LINE__);
        }
        $this->CardPresent = $cardPresent;
        return $this;
    }
    /**
     * Get ReaderPresent value
     * @return string|null
     */
    public function getReaderPresent()
    {
        return $this->ReaderPresent;
    }
    /**
     * Set ReaderPresent value
     * @param string $readerPresent
     * @return \StructType\Data
     */
    public function setReaderPresent($readerPresent = null)
    {
        // validation for constraint: string
        if (!is_null($readerPresent) && !is_string($readerPresent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($readerPresent)), __LINE__);
        }
        $this->ReaderPresent = $readerPresent;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get CVVReq value
     * @return string|null
     */
    public function getCVVReq()
    {
        return $this->CVVReq;
    }
    /**
     * Set CVVReq value
     * @param string $cVVReq
     * @return \StructType\Data
     */
    public function setCVVReq($cVVReq = null)
    {
        // validation for constraint: string
        if (!is_null($cVVReq) && !is_string($cVVReq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cVVReq)), __LINE__);
        }
        $this->CVVReq = $cVVReq;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get CPCReq value
     * @return string|null
     */
    public function getCPCReq()
    {
        return $this->CPCReq;
    }
    /**
     * Set CPCReq value
     * @param string $cPCReq
     * @return \StructType\Data
     */
    public function setCPCReq($cPCReq = null)
    {
        // validation for constraint: string
        if (!is_null($cPCReq) && !is_string($cPCReq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cPCReq)), __LINE__);
        }
        $this->CPCReq = $cPCReq;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get ReqACI value
     * @return string|null
     */
    public function getReqACI()
    {
        return $this->ReqACI;
    }
    /**
     * Set ReqACI value
     * @param string $reqACI
     * @return \StructType\Data
     */
    public function setReqACI($reqACI = null)
    {
        // validation for constraint: string
        if (!is_null($reqACI) && !is_string($reqACI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqACI)), __LINE__);
        }
        $this->ReqACI = $reqACI;
        return $this;
    }
    /**
     * Get RspACI value
     * @return string|null
     */
    public function getRspACI()
    {
        return $this->RspACI;
    }
    /**
     * Set RspACI value
     * @param string $rspACI
     * @return \StructType\Data
     */
    public function setRspACI($rspACI = null)
    {
        // validation for constraint: string
        if (!is_null($rspACI) && !is_string($rspACI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspACI)), __LINE__);
        }
        $this->RspACI = $rspACI;
        return $this;
    }
    /**
     * Get MktSpecDataId value
     * @return string|null
     */
    public function getMktSpecDataId()
    {
        return $this->MktSpecDataId;
    }
    /**
     * Set MktSpecDataId value
     * @param string $mktSpecDataId
     * @return \StructType\Data
     */
    public function setMktSpecDataId($mktSpecDataId = null)
    {
        // validation for constraint: string
        if (!is_null($mktSpecDataId) && !is_string($mktSpecDataId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mktSpecDataId)), __LINE__);
        }
        $this->MktSpecDataId = $mktSpecDataId;
        return $this;
    }
    /**
     * Get TxnCode value
     * @return string|null
     */
    public function getTxnCode()
    {
        return $this->TxnCode;
    }
    /**
     * Set TxnCode value
     * @param string $txnCode
     * @return \StructType\Data
     */
    public function setTxnCode($txnCode = null)
    {
        // validation for constraint: string
        if (!is_null($txnCode) && !is_string($txnCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($txnCode)), __LINE__);
        }
        $this->TxnCode = $txnCode;
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
     * @return \StructType\Data
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
     * Get AuthSrcCode value
     * @return string|null
     */
    public function getAuthSrcCode()
    {
        return $this->AuthSrcCode;
    }
    /**
     * Set AuthSrcCode value
     * @param string $authSrcCode
     * @return \StructType\Data
     */
    public function setAuthSrcCode($authSrcCode = null)
    {
        // validation for constraint: string
        if (!is_null($authSrcCode) && !is_string($authSrcCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authSrcCode)), __LINE__);
        }
        $this->AuthSrcCode = $authSrcCode;
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
     * @return \StructType\Data
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
     * Get IssValidationCode value
     * @return string|null
     */
    public function getIssValidationCode()
    {
        return $this->IssValidationCode;
    }
    /**
     * Set IssValidationCode value
     * @param string $issValidationCode
     * @return \StructType\Data
     */
    public function setIssValidationCode($issValidationCode = null)
    {
        // validation for constraint: string
        if (!is_null($issValidationCode) && !is_string($issValidationCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issValidationCode)), __LINE__);
        }
        $this->IssValidationCode = $issValidationCode;
        return $this;
    }
    /**
     * Get CardHolderIdCode value
     * @return string|null
     */
    public function getCardHolderIdCode()
    {
        return $this->CardHolderIdCode;
    }
    /**
     * Set CardHolderIdCode value
     * @param string $cardHolderIdCode
     * @return \StructType\Data
     */
    public function setCardHolderIdCode($cardHolderIdCode = null)
    {
        // validation for constraint: string
        if (!is_null($cardHolderIdCode) && !is_string($cardHolderIdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardHolderIdCode)), __LINE__);
        }
        $this->CardHolderIdCode = $cardHolderIdCode;
        return $this;
    }
    /**
     * Get NetworkIdCode value
     * @return string|null
     */
    public function getNetworkIdCode()
    {
        return $this->NetworkIdCode;
    }
    /**
     * Set NetworkIdCode value
     * @param string $networkIdCode
     * @return \StructType\Data
     */
    public function setNetworkIdCode($networkIdCode = null)
    {
        // validation for constraint: string
        if (!is_null($networkIdCode) && !is_string($networkIdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($networkIdCode)), __LINE__);
        }
        $this->NetworkIdCode = $networkIdCode;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get AutoSubstantiation value
     * @return \StructType\AutoSubstantiationReportType|null
     */
    public function getAutoSubstantiation()
    {
        return $this->AutoSubstantiation;
    }
    /**
     * Set AutoSubstantiation value
     * @param \StructType\AutoSubstantiationReportType $autoSubstantiation
     * @return \StructType\Data
     */
    public function setAutoSubstantiation(\StructType\AutoSubstantiationReportType $autoSubstantiation = null)
    {
        $this->AutoSubstantiation = $autoSubstantiation;
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
     * @return \StructType\Data
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Get Attachment value
     * @return \StructType\AttachmentRspDataType|null
     */
    public function getAttachment()
    {
        return $this->Attachment;
    }
    /**
     * Set Attachment value
     * @param \StructType\AttachmentRspDataType $attachment
     * @return \StructType\Data
     */
    public function setAttachment(\StructType\AttachmentRspDataType $attachment = null)
    {
        $this->Attachment = $attachment;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get Ecommerce value
     * @return string|null
     */
    public function getEcommerce()
    {
        return $this->Ecommerce;
    }
    /**
     * Set Ecommerce value
     * @uses \EnumType\ECommerceType::valueIsValid()
     * @uses \EnumType\ECommerceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ecommerce
     * @return \StructType\Data
     */
    public function setEcommerce($ecommerce = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ECommerceType::valueIsValid($ecommerce)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ecommerce, implode(', ', \EnumType\ECommerceType::getValidValues())), __LINE__);
        }
        $this->Ecommerce = $ecommerce;
        return $this;
    }
    /**
     * Get TokenizationMsg value
     * @return string|null
     */
    public function getTokenizationMsg()
    {
        return $this->TokenizationMsg;
    }
    /**
     * Set TokenizationMsg value
     * @param string $tokenizationMsg
     * @return \StructType\Data
     */
    public function setTokenizationMsg($tokenizationMsg = null)
    {
        // validation for constraint: string
        if (!is_null($tokenizationMsg) && !is_string($tokenizationMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenizationMsg)), __LINE__);
        }
        $this->TokenizationMsg = $tokenizationMsg;
        return $this;
    }
    /**
     * Get CryptoTypeIn value
     * @return string|null
     */
    public function getCryptoTypeIn()
    {
        return $this->CryptoTypeIn;
    }
    /**
     * Set CryptoTypeIn value
     * @param string $cryptoTypeIn
     * @return \StructType\Data
     */
    public function setCryptoTypeIn($cryptoTypeIn = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoTypeIn) && !is_string($cryptoTypeIn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cryptoTypeIn)), __LINE__);
        }
        $this->CryptoTypeIn = $cryptoTypeIn;
        return $this;
    }
    /**
     * Get CryptoTypeOut value
     * @return string|null
     */
    public function getCryptoTypeOut()
    {
        return $this->CryptoTypeOut;
    }
    /**
     * Set CryptoTypeOut value
     * @param string $cryptoTypeOut
     * @return \StructType\Data
     */
    public function setCryptoTypeOut($cryptoTypeOut = null)
    {
        // validation for constraint: string
        if (!is_null($cryptoTypeOut) && !is_string($cryptoTypeOut)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cryptoTypeOut)), __LINE__);
        }
        $this->CryptoTypeOut = $cryptoTypeOut;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
     */
    public function setCredentialData(\StructType\CredentialDataType $credentialData = null)
    {
        $this->CredentialData = $credentialData;
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
     * @return \StructType\Data
     */
    public function setLodgingData(\StructType\LodgingDataType $lodgingData = null)
    {
        $this->LodgingData = $lodgingData;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * Get CheckDataInfo value
     * @return \StructType\CheckDataInfoType|null
     */
    public function getCheckDataInfo()
    {
        return $this->CheckDataInfo;
    }
    /**
     * Set CheckDataInfo value
     * @param \StructType\CheckDataInfoType $checkDataInfo
     * @return \StructType\Data
     */
    public function setCheckDataInfo(\StructType\CheckDataInfoType $checkDataInfo = null)
    {
        $this->CheckDataInfo = $checkDataInfo;
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
     * @return \StructType\Data
     */
    public function setAttachmentInfo(array $attachmentInfo = array())
    {
        foreach ($attachmentInfo as $dataAttachmentInfoItem) {
            // validation for constraint: itemType
            if (!$dataAttachmentInfoItem instanceof \StructType\AttachmentInfoType) {
                throw new \InvalidArgumentException(sprintf('The AttachmentInfo property can only contain items of \StructType\AttachmentInfoType, "%s" given', is_object($dataAttachmentInfoItem) ? get_class($dataAttachmentInfoItem) : gettype($dataAttachmentInfoItem)), __LINE__);
            }
        }
        $this->AttachmentInfo = $attachmentInfo;
        return $this;
    }
    /**
     * Add item to AttachmentInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentInfoType $item
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
     */
    public function setCashData(\StructType\CashDataType $cashData = null)
    {
        $this->CashData = $cashData;
        return $this;
    }
    /**
     * Get ReturnAmtInfo value
     * @return float|null
     */
    public function getReturnAmtInfo()
    {
        return $this->ReturnAmtInfo;
    }
    /**
     * Set ReturnAmtInfo value
     * @param float $returnAmtInfo
     * @return \StructType\Data
     */
    public function setReturnAmtInfo($returnAmtInfo = null)
    {
        $this->ReturnAmtInfo = $returnAmtInfo;
        return $this;
    }
    /**
     * Get ReversalAmtInfo value
     * @return float|null
     */
    public function getReversalAmtInfo()
    {
        return $this->ReversalAmtInfo;
    }
    /**
     * Set ReversalAmtInfo value
     * @param float $reversalAmtInfo
     * @return \StructType\Data
     */
    public function setReversalAmtInfo($reversalAmtInfo = null)
    {
        $this->ReversalAmtInfo = $reversalAmtInfo;
        return $this;
    }
    /**
     * Get IncrementalAuthAmtInfo value
     * @return float|null
     */
    public function getIncrementalAuthAmtInfo()
    {
        return $this->IncrementalAuthAmtInfo;
    }
    /**
     * Set IncrementalAuthAmtInfo value
     * @param float $incrementalAuthAmtInfo
     * @return \StructType\Data
     */
    public function setIncrementalAuthAmtInfo($incrementalAuthAmtInfo = null)
    {
        $this->IncrementalAuthAmtInfo = $incrementalAuthAmtInfo;
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
     * @param string $allowDup
     * @return \StructType\Data
     */
    public function setAllowDup($allowDup = null)
    {
        // validation for constraint: string
        if (!is_null($allowDup) && !is_string($allowDup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($allowDup)), __LINE__);
        }
        $this->AllowDup = $allowDup;
        return $this;
    }
    /**
     * Get SystemAuditTraceNumber value
     * @return string|null
     */
    public function getSystemAuditTraceNumber()
    {
        return $this->SystemAuditTraceNumber;
    }
    /**
     * Set SystemAuditTraceNumber value
     * @param string $systemAuditTraceNumber
     * @return \StructType\Data
     */
    public function setSystemAuditTraceNumber($systemAuditTraceNumber = null)
    {
        // validation for constraint: string
        if (!is_null($systemAuditTraceNumber) && !is_string($systemAuditTraceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($systemAuditTraceNumber)), __LINE__);
        }
        $this->SystemAuditTraceNumber = $systemAuditTraceNumber;
        return $this;
    }
    /**
     * Get LodgingCheckInDate value
     * @return string|null
     */
    public function getLodgingCheckInDate()
    {
        return $this->LodgingCheckInDate;
    }
    /**
     * Set LodgingCheckInDate value
     * @param string $lodgingCheckInDate
     * @return \StructType\Data
     */
    public function setLodgingCheckInDate($lodgingCheckInDate = null)
    {
        // validation for constraint: string
        if (!is_null($lodgingCheckInDate) && !is_string($lodgingCheckInDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lodgingCheckInDate)), __LINE__);
        }
        $this->LodgingCheckInDate = $lodgingCheckInDate;
        return $this;
    }
    /**
     * Get LodgingCheckOutDate value
     * @return string|null
     */
    public function getLodgingCheckOutDate()
    {
        return $this->LodgingCheckOutDate;
    }
    /**
     * Set LodgingCheckOutDate value
     * @param string $lodgingCheckOutDate
     * @return \StructType\Data
     */
    public function setLodgingCheckOutDate($lodgingCheckOutDate = null)
    {
        // validation for constraint: string
        if (!is_null($lodgingCheckOutDate) && !is_string($lodgingCheckOutDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lodgingCheckOutDate)), __LINE__);
        }
        $this->LodgingCheckOutDate = $lodgingCheckOutDate;
        return $this;
    }
    /**
     * Get ProcessorRefNum value
     * @return string|null
     */
    public function getProcessorRefNum()
    {
        return $this->ProcessorRefNum;
    }
    /**
     * Set ProcessorRefNum value
     * @param string $processorRefNum
     * @return \StructType\Data
     */
    public function setProcessorRefNum($processorRefNum = null)
    {
        // validation for constraint: string
        if (!is_null($processorRefNum) && !is_string($processorRefNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($processorRefNum)), __LINE__);
        }
        $this->ProcessorRefNum = $processorRefNum;
        return $this;
    }
    /**
     * Get ReversalIndicator value
     * @return string|null
     */
    public function getReversalIndicator()
    {
        return $this->ReversalIndicator;
    }
    /**
     * Set ReversalIndicator value
     * @param string $reversalIndicator
     * @return \StructType\Data
     */
    public function setReversalIndicator($reversalIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($reversalIndicator) && !is_string($reversalIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reversalIndicator)), __LINE__);
        }
        $this->ReversalIndicator = $reversalIndicator;
        return $this;
    }
    /**
     * Get TokenRequested value
     * @return string|null
     */
    public function getTokenRequested()
    {
        return $this->TokenRequested;
    }
    /**
     * Set TokenRequested value
     * @param string $tokenRequested
     * @return \StructType\Data
     */
    public function setTokenRequested($tokenRequested = null)
    {
        // validation for constraint: string
        if (!is_null($tokenRequested) && !is_string($tokenRequested)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenRequested)), __LINE__);
        }
        $this->TokenRequested = $tokenRequested;
        return $this;
    }
    /**
     * Get TokenGenerated value
     * @return string|null
     */
    public function getTokenGenerated()
    {
        return $this->TokenGenerated;
    }
    /**
     * Set TokenGenerated value
     * @param string $tokenGenerated
     * @return \StructType\Data
     */
    public function setTokenGenerated($tokenGenerated = null)
    {
        // validation for constraint: string
        if (!is_null($tokenGenerated) && !is_string($tokenGenerated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tokenGenerated)), __LINE__);
        }
        $this->TokenGenerated = $tokenGenerated;
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
     * @return \StructType\Data
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
     * Get EMVTagData value
     * @return string|null
     */
    public function getEMVTagData()
    {
        return $this->EMVTagData;
    }
    /**
     * Set EMVTagData value
     * @param string $eMVTagData
     * @return \StructType\Data
     */
    public function setEMVTagData($eMVTagData = null)
    {
        // validation for constraint: string
        if (!is_null($eMVTagData) && !is_string($eMVTagData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMVTagData)), __LINE__);
        }
        $this->EMVTagData = $eMVTagData;
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
     * @return \StructType\Data
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
     * Get TypeOfPaymentData value
     * @return string|null
     */
    public function getTypeOfPaymentData()
    {
        return $this->TypeOfPaymentData;
    }
    /**
     * Set TypeOfPaymentData value
     * @param string $typeOfPaymentData
     * @return \StructType\Data
     */
    public function setTypeOfPaymentData($typeOfPaymentData = null)
    {
        // validation for constraint: string
        if (!is_null($typeOfPaymentData) && !is_string($typeOfPaymentData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfPaymentData)), __LINE__);
        }
        $this->TypeOfPaymentData = $typeOfPaymentData;
        return $this;
    }
    /**
     * Get PaymentData value
     * @return string|null
     */
    public function getPaymentData()
    {
        return $this->PaymentData;
    }
    /**
     * Set PaymentData value
     * @param string $paymentData
     * @return \StructType\Data
     */
    public function setPaymentData($paymentData = null)
    {
        // validation for constraint: string
        if (!is_null($paymentData) && !is_string($paymentData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentData)), __LINE__);
        }
        $this->PaymentData = $paymentData;
        return $this;
    }
    /**
     * Get ECommerceIndicator value
     * @return string|null
     */
    public function getECommerceIndicator()
    {
        return $this->ECommerceIndicator;
    }
    /**
     * Set ECommerceIndicator value
     * @param string $eCommerceIndicator
     * @return \StructType\Data
     */
    public function setECommerceIndicator($eCommerceIndicator = null)
    {
        // validation for constraint: string
        if (!is_null($eCommerceIndicator) && !is_string($eCommerceIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eCommerceIndicator)), __LINE__);
        }
        $this->ECommerceIndicator = $eCommerceIndicator;
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
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
     * @return \StructType\Data
     */
    public function setMultiFulfillmentData(\StructType\MultiFulfillmentDataType $multiFulfillmentData = null)
    {
        $this->MultiFulfillmentData = $multiFulfillmentData;
        return $this;
    }
    /**
     * Get PaymentDataSource value
     * @return string|null
     */
    public function getPaymentDataSource()
    {
        return $this->PaymentDataSource;
    }
    /**
     * Set PaymentDataSource value
     * @param string $paymentDataSource
     * @return \StructType\Data
     */
    public function setPaymentDataSource($paymentDataSource = null)
    {
        // validation for constraint: string
        if (!is_null($paymentDataSource) && !is_string($paymentDataSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($paymentDataSource)), __LINE__);
        }
        $this->PaymentDataSource = $paymentDataSource;
        return $this;
    }
    /**
     * Get TagData value
     * @return \StructType\TagDataType|null
     */
    public function getTagData()
    {
        return $this->TagData;
    }
    /**
     * Set TagData value
     * @param \StructType\TagDataType $tagData
     * @return \StructType\Data
     */
    public function setTagData(\StructType\TagDataType $tagData = null)
    {
        $this->TagData = $tagData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Data
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
