<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction StructType
 * @subpackage Structs
 */
class Transaction extends AbstractStructBase
{
    /**
     * The GiftCardBalance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardBalanceReqType
     */
    public $GiftCardBalance;
    /**
     * The GiftCardAddValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardAddValueReqType
     */
    public $GiftCardAddValue;
    /**
     * The GiftCardSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardSaleReqType
     */
    public $GiftCardSale;
    /**
     * The GiftCardTip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardTipReqType
     */
    public $GiftCardTip;
    /**
     * The GiftCardVoid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardVoidReqType
     */
    public $GiftCardVoid;
    /**
     * The Impersonate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosImpersonateReqType
     */
    public $Impersonate;
    /**
     * The InvalidateAuthentication
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvalidateAuthentication;
    /**
     * The ManageSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ManageSettingsReqType
     */
    public $ManageSettings;
    /**
     * The ManageTokens
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ManageTokensReqType
     */
    public $ManageTokens;
    /**
     * The ManageUsers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosManageUsersReqType
     */
    public $ManageUsers;
    /**
     * The OverrideFraudDecline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosOverrideFraudDeclineReqType
     */
    public $OverrideFraudDecline;
    /**
     * The ParameterDownload
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosParameterDownloadReqType
     */
    public $ParameterDownload;
    /**
     * The PrePaidAddValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosPrePaidAddValueReqType
     */
    public $PrePaidAddValue;
    /**
     * The PrePaidBalanceInquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosPrePaidBalanceInquiryReqType
     */
    public $PrePaidBalanceInquiry;
    /**
     * The RecurringBilling
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosRecurringBillReqType
     */
    public $RecurringBilling;
    /**
     * The ReportActivity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportActivityReqType
     */
    public $ReportActivity;
    /**
     * The ReportBatchDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportBatchDetailReqType
     */
    public $ReportBatchDetail;
    /**
     * The ReportBatchHistory
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportBatchHistoryReqType
     */
    public $ReportBatchHistory;
    /**
     * The ReportBatchSummary
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportBatchSummaryReqType
     */
    public $ReportBatchSummary;
    /**
     * The ReportOpenAuths
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportOpenAuthsReqType
     */
    public $ReportOpenAuths;
    /**
     * The ReportSearch
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportSearchReqType
     */
    public $ReportSearch;
    /**
     * The ReportTxnDetail
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosReportTxnDetailReqType
     */
    public $ReportTxnDetail;
    /**
     * The SendReceipt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosSendReceiptReqType
     */
    public $SendReceipt;
    /**
     * The TestCredentials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TestCredentials;
    /**
     * The CreditAccountVerify
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditAccountVerifyReqType
     */
    public $CreditAccountVerify;
    /**
     * The GiftCardActivate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardActivateReqType
     */
    public $GiftCardActivate;
    /**
     * The GiftCardReplace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardReplaceReqType
     */
    public $GiftCardReplace;
    /**
     * The GiftCardReversal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardReversalReqType
     */
    public $GiftCardReversal;
    /**
     * The AddAttachment
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAddAttachmentReqType
     */
    public $AddAttachment;
    /**
     * The AltPaymentAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayAuthReqType
     */
    public $AltPaymentAuth;
    /**
     * The AltPaymentCapture
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayCaptureReqType
     */
    public $AltPaymentCapture;
    /**
     * The AltPaymentCreateAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayCreateAuthReqType
     */
    public $AltPaymentCreateAuth;
    /**
     * The AltPaymentCreateSession
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayCreateSessReqType
     */
    public $AltPaymentCreateSession;
    /**
     * The AltPaymentOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayOrderReqType
     */
    public $AltPaymentOrder;
    /**
     * The AltPaymentReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayReturnReqType
     */
    public $AltPaymentReturn;
    /**
     * The AltPaymentReversal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayReversalReqType
     */
    public $AltPaymentReversal;
    /**
     * The AltPaymentSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPaySaleReqType
     */
    public $AltPaymentSale;
    /**
     * The AltPaymentSessionInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPaySessionInfoReqType
     */
    public $AltPaymentSessionInfo;
    /**
     * The AltPaymentVoid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosAltPayVoidReqType
     */
    public $AltPaymentVoid;
    /**
     * The GiftCardAlias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardAliasReqType
     */
    public $GiftCardAlias;
    /**
     * The GiftCardReward
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardRewardReqType
     */
    public $GiftCardReward;
    /**
     * The GiftCardCurrentDayTotals
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftCardCurrentDayTotals;
    /**
     * The Authenticate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Authenticate;
    /**
     * The BatchClose
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BatchClose;
    /**
     * The CancelImpersonation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CancelImpersonation;
    /**
     * The CashReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCashReturnReqType
     */
    public $CashReturn;
    /**
     * The GiftCardDeactivate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGiftCardDeactivateReqType
     */
    public $GiftCardDeactivate;
    /**
     * The CashSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCashSaleReqType
     */
    public $CashSale;
    /**
     * The CheckSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCheckSaleReqType
     */
    public $CheckSale;
    /**
     * The CheckVoid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCheckVoidReqType
     */
    public $CheckVoid;
    /**
     * The ChipCardDecline
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosChipCardDeclineReqType
     */
    public $ChipCardDecline;
    /**
     * The GiftCardPreviousDayTotals
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftCardPreviousDayTotals;
    /**
     * The CreditAddToBatch
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditAddToBatchReqType
     */
    public $CreditAddToBatch;
    /**
     * The CreditAdditionalAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditAdditionalAuthReqType
     */
    public $CreditAdditionalAuth;
    /**
     * The CreditAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditAuthReqType
     */
    public $CreditAuth;
    /**
     * The CreditCPCEdit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditCPCEditReqType
     */
    public $CreditCPCEdit;
    /**
     * The CreditIncrementalAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditIncrementalAuthReqType
     */
    public $CreditIncrementalAuth;
    /**
     * The CreditOfflineAuth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditOfflineAuthReqType
     */
    public $CreditOfflineAuth;
    /**
     * The CreditOfflineSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditOfflineSaleReqType
     */
    public $CreditOfflineSale;
    /**
     * The CreditReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditReturnReqType
     */
    public $CreditReturn;
    /**
     * The CreditReversal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditReversalReqType
     */
    public $CreditReversal;
    /**
     * The CreditSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditSaleReqType
     */
    public $CreditSale;
    /**
     * The CreditTxnEdit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditTxnEditReqType
     */
    public $CreditTxnEdit;
    /**
     * The CreditVoid
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosCreditVoidReqType
     */
    public $CreditVoid;
    /**
     * The DebitAddValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosDebitAddValueReqType
     */
    public $DebitAddValue;
    /**
     * The DebitReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosDebitReturnReqType
     */
    public $DebitReturn;
    /**
     * The DebitReversal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosDebitReversalReqType
     */
    public $DebitReversal;
    /**
     * The DebitSale
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosDebitSaleReqType
     */
    public $DebitSale;
    /**
     * The EBTBalanceInquiry
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosEBTBalanceInquiryReqType
     */
    public $EBTBalanceInquiry;
    /**
     * The EBTCashBackPurchase
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosEBTCashBackPurchaseReqType
     */
    public $EBTCashBackPurchase;
    /**
     * The EBTCashBenefitWithdrawal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosEBTCashBenefitWithdrawalReqType
     */
    public $EBTCashBenefitWithdrawal;
    /**
     * The EBTFSPurchase
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosEBTFSPurchaseReqType
     */
    public $EBTFSPurchase;
    /**
     * The EBTFSReturn
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosEBTFSReturnReqType
     */
    public $EBTFSReturn;
    /**
     * The EBTVoucherPurchase
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosEBTFSVoucherReqType
     */
    public $EBTVoucherPurchase;
    /**
     * The EndToEndTest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var mixed
     */
    public $EndToEndTest;
    /**
     * The FindTransactions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\FindTransactionsReqType
     */
    public $FindTransactions;
    /**
     * The GetAttachments
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGetAttachmentReqType
     */
    public $GetAttachments;
    /**
     * The GetTransactionStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGetTransactionStatusReqType
     */
    public $GetTransactionStatus;
    /**
     * The GetUserDeviceSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PosGetUserDeviceSettingsReqType
     */
    public $GetUserDeviceSettings;
    /**
     * The GetUserSettings
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GetUserSettings;
    /**
     * Constructor method for Transaction
     * @uses Transaction::setGiftCardBalance()
     * @uses Transaction::setGiftCardAddValue()
     * @uses Transaction::setGiftCardSale()
     * @uses Transaction::setGiftCardTip()
     * @uses Transaction::setGiftCardVoid()
     * @uses Transaction::setImpersonate()
     * @uses Transaction::setInvalidateAuthentication()
     * @uses Transaction::setManageSettings()
     * @uses Transaction::setManageTokens()
     * @uses Transaction::setManageUsers()
     * @uses Transaction::setOverrideFraudDecline()
     * @uses Transaction::setParameterDownload()
     * @uses Transaction::setPrePaidAddValue()
     * @uses Transaction::setPrePaidBalanceInquiry()
     * @uses Transaction::setRecurringBilling()
     * @uses Transaction::setReportActivity()
     * @uses Transaction::setReportBatchDetail()
     * @uses Transaction::setReportBatchHistory()
     * @uses Transaction::setReportBatchSummary()
     * @uses Transaction::setReportOpenAuths()
     * @uses Transaction::setReportSearch()
     * @uses Transaction::setReportTxnDetail()
     * @uses Transaction::setSendReceipt()
     * @uses Transaction::setTestCredentials()
     * @uses Transaction::setCreditAccountVerify()
     * @uses Transaction::setGiftCardActivate()
     * @uses Transaction::setGiftCardReplace()
     * @uses Transaction::setGiftCardReversal()
     * @uses Transaction::setAddAttachment()
     * @uses Transaction::setAltPaymentAuth()
     * @uses Transaction::setAltPaymentCapture()
     * @uses Transaction::setAltPaymentCreateAuth()
     * @uses Transaction::setAltPaymentCreateSession()
     * @uses Transaction::setAltPaymentOrder()
     * @uses Transaction::setAltPaymentReturn()
     * @uses Transaction::setAltPaymentReversal()
     * @uses Transaction::setAltPaymentSale()
     * @uses Transaction::setAltPaymentSessionInfo()
     * @uses Transaction::setAltPaymentVoid()
     * @uses Transaction::setGiftCardAlias()
     * @uses Transaction::setGiftCardReward()
     * @uses Transaction::setGiftCardCurrentDayTotals()
     * @uses Transaction::setAuthenticate()
     * @uses Transaction::setBatchClose()
     * @uses Transaction::setCancelImpersonation()
     * @uses Transaction::setCashReturn()
     * @uses Transaction::setGiftCardDeactivate()
     * @uses Transaction::setCashSale()
     * @uses Transaction::setCheckSale()
     * @uses Transaction::setCheckVoid()
     * @uses Transaction::setChipCardDecline()
     * @uses Transaction::setGiftCardPreviousDayTotals()
     * @uses Transaction::setCreditAddToBatch()
     * @uses Transaction::setCreditAdditionalAuth()
     * @uses Transaction::setCreditAuth()
     * @uses Transaction::setCreditCPCEdit()
     * @uses Transaction::setCreditIncrementalAuth()
     * @uses Transaction::setCreditOfflineAuth()
     * @uses Transaction::setCreditOfflineSale()
     * @uses Transaction::setCreditReturn()
     * @uses Transaction::setCreditReversal()
     * @uses Transaction::setCreditSale()
     * @uses Transaction::setCreditTxnEdit()
     * @uses Transaction::setCreditVoid()
     * @uses Transaction::setDebitAddValue()
     * @uses Transaction::setDebitReturn()
     * @uses Transaction::setDebitReversal()
     * @uses Transaction::setDebitSale()
     * @uses Transaction::setEBTBalanceInquiry()
     * @uses Transaction::setEBTCashBackPurchase()
     * @uses Transaction::setEBTCashBenefitWithdrawal()
     * @uses Transaction::setEBTFSPurchase()
     * @uses Transaction::setEBTFSReturn()
     * @uses Transaction::setEBTVoucherPurchase()
     * @uses Transaction::setEndToEndTest()
     * @uses Transaction::setFindTransactions()
     * @uses Transaction::setGetAttachments()
     * @uses Transaction::setGetTransactionStatus()
     * @uses Transaction::setGetUserDeviceSettings()
     * @uses Transaction::setGetUserSettings()
     * @param \StructType\PosGiftCardBalanceReqType $giftCardBalance
     * @param \StructType\PosGiftCardAddValueReqType $giftCardAddValue
     * @param \StructType\PosGiftCardSaleReqType $giftCardSale
     * @param \StructType\PosGiftCardTipReqType $giftCardTip
     * @param \StructType\PosGiftCardVoidReqType $giftCardVoid
     * @param \StructType\PosImpersonateReqType $impersonate
     * @param string $invalidateAuthentication
     * @param \StructType\ManageSettingsReqType $manageSettings
     * @param \StructType\ManageTokensReqType $manageTokens
     * @param \StructType\PosManageUsersReqType $manageUsers
     * @param \StructType\PosOverrideFraudDeclineReqType $overrideFraudDecline
     * @param \StructType\PosParameterDownloadReqType $parameterDownload
     * @param \StructType\PosPrePaidAddValueReqType $prePaidAddValue
     * @param \StructType\PosPrePaidBalanceInquiryReqType $prePaidBalanceInquiry
     * @param \StructType\PosRecurringBillReqType $recurringBilling
     * @param \StructType\PosReportActivityReqType $reportActivity
     * @param \StructType\PosReportBatchDetailReqType $reportBatchDetail
     * @param \StructType\PosReportBatchHistoryReqType $reportBatchHistory
     * @param \StructType\PosReportBatchSummaryReqType $reportBatchSummary
     * @param \StructType\PosReportOpenAuthsReqType $reportOpenAuths
     * @param \StructType\PosReportSearchReqType $reportSearch
     * @param \StructType\PosReportTxnDetailReqType $reportTxnDetail
     * @param \StructType\PosSendReceiptReqType $sendReceipt
     * @param string $testCredentials
     * @param \StructType\PosCreditAccountVerifyReqType $creditAccountVerify
     * @param \StructType\PosGiftCardActivateReqType $giftCardActivate
     * @param \StructType\PosGiftCardReplaceReqType $giftCardReplace
     * @param \StructType\PosGiftCardReversalReqType $giftCardReversal
     * @param \StructType\PosAddAttachmentReqType $addAttachment
     * @param \StructType\PosAltPayAuthReqType $altPaymentAuth
     * @param \StructType\PosAltPayCaptureReqType $altPaymentCapture
     * @param \StructType\PosAltPayCreateAuthReqType $altPaymentCreateAuth
     * @param \StructType\PosAltPayCreateSessReqType $altPaymentCreateSession
     * @param \StructType\PosAltPayOrderReqType $altPaymentOrder
     * @param \StructType\PosAltPayReturnReqType $altPaymentReturn
     * @param \StructType\PosAltPayReversalReqType $altPaymentReversal
     * @param \StructType\PosAltPaySaleReqType $altPaymentSale
     * @param \StructType\PosAltPaySessionInfoReqType $altPaymentSessionInfo
     * @param \StructType\PosAltPayVoidReqType $altPaymentVoid
     * @param \StructType\PosGiftCardAliasReqType $giftCardAlias
     * @param \StructType\PosGiftCardRewardReqType $giftCardReward
     * @param string $giftCardCurrentDayTotals
     * @param string $authenticate
     * @param string $batchClose
     * @param string $cancelImpersonation
     * @param \StructType\PosCashReturnReqType $cashReturn
     * @param \StructType\PosGiftCardDeactivateReqType $giftCardDeactivate
     * @param \StructType\PosCashSaleReqType $cashSale
     * @param \StructType\PosCheckSaleReqType $checkSale
     * @param \StructType\PosCheckVoidReqType $checkVoid
     * @param \StructType\PosChipCardDeclineReqType $chipCardDecline
     * @param string $giftCardPreviousDayTotals
     * @param \StructType\PosCreditAddToBatchReqType $creditAddToBatch
     * @param \StructType\PosCreditAdditionalAuthReqType $creditAdditionalAuth
     * @param \StructType\PosCreditAuthReqType $creditAuth
     * @param \StructType\PosCreditCPCEditReqType $creditCPCEdit
     * @param \StructType\PosCreditIncrementalAuthReqType $creditIncrementalAuth
     * @param \StructType\PosCreditOfflineAuthReqType $creditOfflineAuth
     * @param \StructType\PosCreditOfflineSaleReqType $creditOfflineSale
     * @param \StructType\PosCreditReturnReqType $creditReturn
     * @param \StructType\PosCreditReversalReqType $creditReversal
     * @param \StructType\PosCreditSaleReqType $creditSale
     * @param \StructType\PosCreditTxnEditReqType $creditTxnEdit
     * @param \StructType\PosCreditVoidReqType $creditVoid
     * @param \StructType\PosDebitAddValueReqType $debitAddValue
     * @param \StructType\PosDebitReturnReqType $debitReturn
     * @param \StructType\PosDebitReversalReqType $debitReversal
     * @param \StructType\PosDebitSaleReqType $debitSale
     * @param \StructType\PosEBTBalanceInquiryReqType $eBTBalanceInquiry
     * @param \StructType\PosEBTCashBackPurchaseReqType $eBTCashBackPurchase
     * @param \StructType\PosEBTCashBenefitWithdrawalReqType $eBTCashBenefitWithdrawal
     * @param \StructType\PosEBTFSPurchaseReqType $eBTFSPurchase
     * @param \StructType\PosEBTFSReturnReqType $eBTFSReturn
     * @param \StructType\PosEBTFSVoucherReqType $eBTVoucherPurchase
     * @param mixed $endToEndTest
     * @param \StructType\FindTransactionsReqType $findTransactions
     * @param \StructType\PosGetAttachmentReqType $getAttachments
     * @param \StructType\PosGetTransactionStatusReqType $getTransactionStatus
     * @param \StructType\PosGetUserDeviceSettingsReqType $getUserDeviceSettings
     * @param string $getUserSettings
     */
    public function __construct(\StructType\PosGiftCardBalanceReqType $giftCardBalance = null, \StructType\PosGiftCardAddValueReqType $giftCardAddValue = null, \StructType\PosGiftCardSaleReqType $giftCardSale = null, \StructType\PosGiftCardTipReqType $giftCardTip = null, \StructType\PosGiftCardVoidReqType $giftCardVoid = null, \StructType\PosImpersonateReqType $impersonate = null, $invalidateAuthentication = null, \StructType\ManageSettingsReqType $manageSettings = null, \StructType\ManageTokensReqType $manageTokens = null, \StructType\PosManageUsersReqType $manageUsers = null, \StructType\PosOverrideFraudDeclineReqType $overrideFraudDecline = null, \StructType\PosParameterDownloadReqType $parameterDownload = null, \StructType\PosPrePaidAddValueReqType $prePaidAddValue = null, \StructType\PosPrePaidBalanceInquiryReqType $prePaidBalanceInquiry = null, \StructType\PosRecurringBillReqType $recurringBilling = null, \StructType\PosReportActivityReqType $reportActivity = null, \StructType\PosReportBatchDetailReqType $reportBatchDetail = null, \StructType\PosReportBatchHistoryReqType $reportBatchHistory = null, \StructType\PosReportBatchSummaryReqType $reportBatchSummary = null, \StructType\PosReportOpenAuthsReqType $reportOpenAuths = null, \StructType\PosReportSearchReqType $reportSearch = null, \StructType\PosReportTxnDetailReqType $reportTxnDetail = null, \StructType\PosSendReceiptReqType $sendReceipt = null, $testCredentials = null, \StructType\PosCreditAccountVerifyReqType $creditAccountVerify = null, \StructType\PosGiftCardActivateReqType $giftCardActivate = null, \StructType\PosGiftCardReplaceReqType $giftCardReplace = null, \StructType\PosGiftCardReversalReqType $giftCardReversal = null, \StructType\PosAddAttachmentReqType $addAttachment = null, \StructType\PosAltPayAuthReqType $altPaymentAuth = null, \StructType\PosAltPayCaptureReqType $altPaymentCapture = null, \StructType\PosAltPayCreateAuthReqType $altPaymentCreateAuth = null, \StructType\PosAltPayCreateSessReqType $altPaymentCreateSession = null, \StructType\PosAltPayOrderReqType $altPaymentOrder = null, \StructType\PosAltPayReturnReqType $altPaymentReturn = null, \StructType\PosAltPayReversalReqType $altPaymentReversal = null, \StructType\PosAltPaySaleReqType $altPaymentSale = null, \StructType\PosAltPaySessionInfoReqType $altPaymentSessionInfo = null, \StructType\PosAltPayVoidReqType $altPaymentVoid = null, \StructType\PosGiftCardAliasReqType $giftCardAlias = null, \StructType\PosGiftCardRewardReqType $giftCardReward = null, $giftCardCurrentDayTotals = null, $authenticate = null, $batchClose = null, $cancelImpersonation = null, \StructType\PosCashReturnReqType $cashReturn = null, \StructType\PosGiftCardDeactivateReqType $giftCardDeactivate = null, \StructType\PosCashSaleReqType $cashSale = null, \StructType\PosCheckSaleReqType $checkSale = null, \StructType\PosCheckVoidReqType $checkVoid = null, \StructType\PosChipCardDeclineReqType $chipCardDecline = null, $giftCardPreviousDayTotals = null, \StructType\PosCreditAddToBatchReqType $creditAddToBatch = null, \StructType\PosCreditAdditionalAuthReqType $creditAdditionalAuth = null, \StructType\PosCreditAuthReqType $creditAuth = null, \StructType\PosCreditCPCEditReqType $creditCPCEdit = null, \StructType\PosCreditIncrementalAuthReqType $creditIncrementalAuth = null, \StructType\PosCreditOfflineAuthReqType $creditOfflineAuth = null, \StructType\PosCreditOfflineSaleReqType $creditOfflineSale = null, \StructType\PosCreditReturnReqType $creditReturn = null, \StructType\PosCreditReversalReqType $creditReversal = null, \StructType\PosCreditSaleReqType $creditSale = null, \StructType\PosCreditTxnEditReqType $creditTxnEdit = null, \StructType\PosCreditVoidReqType $creditVoid = null, \StructType\PosDebitAddValueReqType $debitAddValue = null, \StructType\PosDebitReturnReqType $debitReturn = null, \StructType\PosDebitReversalReqType $debitReversal = null, \StructType\PosDebitSaleReqType $debitSale = null, \StructType\PosEBTBalanceInquiryReqType $eBTBalanceInquiry = null, \StructType\PosEBTCashBackPurchaseReqType $eBTCashBackPurchase = null, \StructType\PosEBTCashBenefitWithdrawalReqType $eBTCashBenefitWithdrawal = null, \StructType\PosEBTFSPurchaseReqType $eBTFSPurchase = null, \StructType\PosEBTFSReturnReqType $eBTFSReturn = null, \StructType\PosEBTFSVoucherReqType $eBTVoucherPurchase = null, $endToEndTest = null, \StructType\FindTransactionsReqType $findTransactions = null, \StructType\PosGetAttachmentReqType $getAttachments = null, \StructType\PosGetTransactionStatusReqType $getTransactionStatus = null, \StructType\PosGetUserDeviceSettingsReqType $getUserDeviceSettings = null, $getUserSettings = null)
    {
        $this
            ->setGiftCardBalance($giftCardBalance)
            ->setGiftCardAddValue($giftCardAddValue)
            ->setGiftCardSale($giftCardSale)
            ->setGiftCardTip($giftCardTip)
            ->setGiftCardVoid($giftCardVoid)
            ->setImpersonate($impersonate)
            ->setInvalidateAuthentication($invalidateAuthentication)
            ->setManageSettings($manageSettings)
            ->setManageTokens($manageTokens)
            ->setManageUsers($manageUsers)
            ->setOverrideFraudDecline($overrideFraudDecline)
            ->setParameterDownload($parameterDownload)
            ->setPrePaidAddValue($prePaidAddValue)
            ->setPrePaidBalanceInquiry($prePaidBalanceInquiry)
            ->setRecurringBilling($recurringBilling)
            ->setReportActivity($reportActivity)
            ->setReportBatchDetail($reportBatchDetail)
            ->setReportBatchHistory($reportBatchHistory)
            ->setReportBatchSummary($reportBatchSummary)
            ->setReportOpenAuths($reportOpenAuths)
            ->setReportSearch($reportSearch)
            ->setReportTxnDetail($reportTxnDetail)
            ->setSendReceipt($sendReceipt)
            ->setTestCredentials($testCredentials)
            ->setCreditAccountVerify($creditAccountVerify)
            ->setGiftCardActivate($giftCardActivate)
            ->setGiftCardReplace($giftCardReplace)
            ->setGiftCardReversal($giftCardReversal)
            ->setAddAttachment($addAttachment)
            ->setAltPaymentAuth($altPaymentAuth)
            ->setAltPaymentCapture($altPaymentCapture)
            ->setAltPaymentCreateAuth($altPaymentCreateAuth)
            ->setAltPaymentCreateSession($altPaymentCreateSession)
            ->setAltPaymentOrder($altPaymentOrder)
            ->setAltPaymentReturn($altPaymentReturn)
            ->setAltPaymentReversal($altPaymentReversal)
            ->setAltPaymentSale($altPaymentSale)
            ->setAltPaymentSessionInfo($altPaymentSessionInfo)
            ->setAltPaymentVoid($altPaymentVoid)
            ->setGiftCardAlias($giftCardAlias)
            ->setGiftCardReward($giftCardReward)
            ->setGiftCardCurrentDayTotals($giftCardCurrentDayTotals)
            ->setAuthenticate($authenticate)
            ->setBatchClose($batchClose)
            ->setCancelImpersonation($cancelImpersonation)
            ->setCashReturn($cashReturn)
            ->setGiftCardDeactivate($giftCardDeactivate)
            ->setCashSale($cashSale)
            ->setCheckSale($checkSale)
            ->setCheckVoid($checkVoid)
            ->setChipCardDecline($chipCardDecline)
            ->setGiftCardPreviousDayTotals($giftCardPreviousDayTotals)
            ->setCreditAddToBatch($creditAddToBatch)
            ->setCreditAdditionalAuth($creditAdditionalAuth)
            ->setCreditAuth($creditAuth)
            ->setCreditCPCEdit($creditCPCEdit)
            ->setCreditIncrementalAuth($creditIncrementalAuth)
            ->setCreditOfflineAuth($creditOfflineAuth)
            ->setCreditOfflineSale($creditOfflineSale)
            ->setCreditReturn($creditReturn)
            ->setCreditReversal($creditReversal)
            ->setCreditSale($creditSale)
            ->setCreditTxnEdit($creditTxnEdit)
            ->setCreditVoid($creditVoid)
            ->setDebitAddValue($debitAddValue)
            ->setDebitReturn($debitReturn)
            ->setDebitReversal($debitReversal)
            ->setDebitSale($debitSale)
            ->setEBTBalanceInquiry($eBTBalanceInquiry)
            ->setEBTCashBackPurchase($eBTCashBackPurchase)
            ->setEBTCashBenefitWithdrawal($eBTCashBenefitWithdrawal)
            ->setEBTFSPurchase($eBTFSPurchase)
            ->setEBTFSReturn($eBTFSReturn)
            ->setEBTVoucherPurchase($eBTVoucherPurchase)
            ->setEndToEndTest($endToEndTest)
            ->setFindTransactions($findTransactions)
            ->setGetAttachments($getAttachments)
            ->setGetTransactionStatus($getTransactionStatus)
            ->setGetUserDeviceSettings($getUserDeviceSettings)
            ->setGetUserSettings($getUserSettings);
    }
    /**
     * Get GiftCardBalance value
     * @return \StructType\PosGiftCardBalanceReqType|null
     */
    public function getGiftCardBalance()
    {
        return $this->GiftCardBalance;
    }
    /**
     * Set GiftCardBalance value
     * @param \StructType\PosGiftCardBalanceReqType $giftCardBalance
     * @return \StructType\Transaction
     */
    public function setGiftCardBalance(\StructType\PosGiftCardBalanceReqType $giftCardBalance = null)
    {
        $this->GiftCardBalance = $giftCardBalance;
        return $this;
    }
    /**
     * Get GiftCardAddValue value
     * @return \StructType\PosGiftCardAddValueReqType|null
     */
    public function getGiftCardAddValue()
    {
        return $this->GiftCardAddValue;
    }
    /**
     * Set GiftCardAddValue value
     * @param \StructType\PosGiftCardAddValueReqType $giftCardAddValue
     * @return \StructType\Transaction
     */
    public function setGiftCardAddValue(\StructType\PosGiftCardAddValueReqType $giftCardAddValue = null)
    {
        $this->GiftCardAddValue = $giftCardAddValue;
        return $this;
    }
    /**
     * Get GiftCardSale value
     * @return \StructType\PosGiftCardSaleReqType|null
     */
    public function getGiftCardSale()
    {
        return $this->GiftCardSale;
    }
    /**
     * Set GiftCardSale value
     * @param \StructType\PosGiftCardSaleReqType $giftCardSale
     * @return \StructType\Transaction
     */
    public function setGiftCardSale(\StructType\PosGiftCardSaleReqType $giftCardSale = null)
    {
        $this->GiftCardSale = $giftCardSale;
        return $this;
    }
    /**
     * Get GiftCardTip value
     * @return \StructType\PosGiftCardTipReqType|null
     */
    public function getGiftCardTip()
    {
        return $this->GiftCardTip;
    }
    /**
     * Set GiftCardTip value
     * @param \StructType\PosGiftCardTipReqType $giftCardTip
     * @return \StructType\Transaction
     */
    public function setGiftCardTip(\StructType\PosGiftCardTipReqType $giftCardTip = null)
    {
        $this->GiftCardTip = $giftCardTip;
        return $this;
    }
    /**
     * Get GiftCardVoid value
     * @return \StructType\PosGiftCardVoidReqType|null
     */
    public function getGiftCardVoid()
    {
        return $this->GiftCardVoid;
    }
    /**
     * Set GiftCardVoid value
     * @param \StructType\PosGiftCardVoidReqType $giftCardVoid
     * @return \StructType\Transaction
     */
    public function setGiftCardVoid(\StructType\PosGiftCardVoidReqType $giftCardVoid = null)
    {
        $this->GiftCardVoid = $giftCardVoid;
        return $this;
    }
    /**
     * Get Impersonate value
     * @return \StructType\PosImpersonateReqType|null
     */
    public function getImpersonate()
    {
        return $this->Impersonate;
    }
    /**
     * Set Impersonate value
     * @param \StructType\PosImpersonateReqType $impersonate
     * @return \StructType\Transaction
     */
    public function setImpersonate(\StructType\PosImpersonateReqType $impersonate = null)
    {
        $this->Impersonate = $impersonate;
        return $this;
    }
    /**
     * Get InvalidateAuthentication value
     * @return string|null
     */
    public function getInvalidateAuthentication()
    {
        return $this->InvalidateAuthentication;
    }
    /**
     * Set InvalidateAuthentication value
     * @param string $invalidateAuthentication
     * @return \StructType\Transaction
     */
    public function setInvalidateAuthentication($invalidateAuthentication = null)
    {
        // validation for constraint: string
        if (!is_null($invalidateAuthentication) && !is_string($invalidateAuthentication)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invalidateAuthentication)), __LINE__);
        }
        $this->InvalidateAuthentication = $invalidateAuthentication;
        return $this;
    }
    /**
     * Get ManageSettings value
     * @return \StructType\ManageSettingsReqType|null
     */
    public function getManageSettings()
    {
        return $this->ManageSettings;
    }
    /**
     * Set ManageSettings value
     * @param \StructType\ManageSettingsReqType $manageSettings
     * @return \StructType\Transaction
     */
    public function setManageSettings(\StructType\ManageSettingsReqType $manageSettings = null)
    {
        $this->ManageSettings = $manageSettings;
        return $this;
    }
    /**
     * Get ManageTokens value
     * @return \StructType\ManageTokensReqType|null
     */
    public function getManageTokens()
    {
        return $this->ManageTokens;
    }
    /**
     * Set ManageTokens value
     * @param \StructType\ManageTokensReqType $manageTokens
     * @return \StructType\Transaction
     */
    public function setManageTokens(\StructType\ManageTokensReqType $manageTokens = null)
    {
        $this->ManageTokens = $manageTokens;
        return $this;
    }
    /**
     * Get ManageUsers value
     * @return \StructType\PosManageUsersReqType|null
     */
    public function getManageUsers()
    {
        return $this->ManageUsers;
    }
    /**
     * Set ManageUsers value
     * @param \StructType\PosManageUsersReqType $manageUsers
     * @return \StructType\Transaction
     */
    public function setManageUsers(\StructType\PosManageUsersReqType $manageUsers = null)
    {
        $this->ManageUsers = $manageUsers;
        return $this;
    }
    /**
     * Get OverrideFraudDecline value
     * @return \StructType\PosOverrideFraudDeclineReqType|null
     */
    public function getOverrideFraudDecline()
    {
        return $this->OverrideFraudDecline;
    }
    /**
     * Set OverrideFraudDecline value
     * @param \StructType\PosOverrideFraudDeclineReqType $overrideFraudDecline
     * @return \StructType\Transaction
     */
    public function setOverrideFraudDecline(\StructType\PosOverrideFraudDeclineReqType $overrideFraudDecline = null)
    {
        $this->OverrideFraudDecline = $overrideFraudDecline;
        return $this;
    }
    /**
     * Get ParameterDownload value
     * @return \StructType\PosParameterDownloadReqType|null
     */
    public function getParameterDownload()
    {
        return $this->ParameterDownload;
    }
    /**
     * Set ParameterDownload value
     * @param \StructType\PosParameterDownloadReqType $parameterDownload
     * @return \StructType\Transaction
     */
    public function setParameterDownload(\StructType\PosParameterDownloadReqType $parameterDownload = null)
    {
        $this->ParameterDownload = $parameterDownload;
        return $this;
    }
    /**
     * Get PrePaidAddValue value
     * @return \StructType\PosPrePaidAddValueReqType|null
     */
    public function getPrePaidAddValue()
    {
        return $this->PrePaidAddValue;
    }
    /**
     * Set PrePaidAddValue value
     * @param \StructType\PosPrePaidAddValueReqType $prePaidAddValue
     * @return \StructType\Transaction
     */
    public function setPrePaidAddValue(\StructType\PosPrePaidAddValueReqType $prePaidAddValue = null)
    {
        $this->PrePaidAddValue = $prePaidAddValue;
        return $this;
    }
    /**
     * Get PrePaidBalanceInquiry value
     * @return \StructType\PosPrePaidBalanceInquiryReqType|null
     */
    public function getPrePaidBalanceInquiry()
    {
        return $this->PrePaidBalanceInquiry;
    }
    /**
     * Set PrePaidBalanceInquiry value
     * @param \StructType\PosPrePaidBalanceInquiryReqType $prePaidBalanceInquiry
     * @return \StructType\Transaction
     */
    public function setPrePaidBalanceInquiry(\StructType\PosPrePaidBalanceInquiryReqType $prePaidBalanceInquiry = null)
    {
        $this->PrePaidBalanceInquiry = $prePaidBalanceInquiry;
        return $this;
    }
    /**
     * Get RecurringBilling value
     * @return \StructType\PosRecurringBillReqType|null
     */
    public function getRecurringBilling()
    {
        return $this->RecurringBilling;
    }
    /**
     * Set RecurringBilling value
     * @param \StructType\PosRecurringBillReqType $recurringBilling
     * @return \StructType\Transaction
     */
    public function setRecurringBilling(\StructType\PosRecurringBillReqType $recurringBilling = null)
    {
        $this->RecurringBilling = $recurringBilling;
        return $this;
    }
    /**
     * Get ReportActivity value
     * @return \StructType\PosReportActivityReqType|null
     */
    public function getReportActivity()
    {
        return $this->ReportActivity;
    }
    /**
     * Set ReportActivity value
     * @param \StructType\PosReportActivityReqType $reportActivity
     * @return \StructType\Transaction
     */
    public function setReportActivity(\StructType\PosReportActivityReqType $reportActivity = null)
    {
        $this->ReportActivity = $reportActivity;
        return $this;
    }
    /**
     * Get ReportBatchDetail value
     * @return \StructType\PosReportBatchDetailReqType|null
     */
    public function getReportBatchDetail()
    {
        return $this->ReportBatchDetail;
    }
    /**
     * Set ReportBatchDetail value
     * @param \StructType\PosReportBatchDetailReqType $reportBatchDetail
     * @return \StructType\Transaction
     */
    public function setReportBatchDetail(\StructType\PosReportBatchDetailReqType $reportBatchDetail = null)
    {
        $this->ReportBatchDetail = $reportBatchDetail;
        return $this;
    }
    /**
     * Get ReportBatchHistory value
     * @return \StructType\PosReportBatchHistoryReqType|null
     */
    public function getReportBatchHistory()
    {
        return $this->ReportBatchHistory;
    }
    /**
     * Set ReportBatchHistory value
     * @param \StructType\PosReportBatchHistoryReqType $reportBatchHistory
     * @return \StructType\Transaction
     */
    public function setReportBatchHistory(\StructType\PosReportBatchHistoryReqType $reportBatchHistory = null)
    {
        $this->ReportBatchHistory = $reportBatchHistory;
        return $this;
    }
    /**
     * Get ReportBatchSummary value
     * @return \StructType\PosReportBatchSummaryReqType|null
     */
    public function getReportBatchSummary()
    {
        return $this->ReportBatchSummary;
    }
    /**
     * Set ReportBatchSummary value
     * @param \StructType\PosReportBatchSummaryReqType $reportBatchSummary
     * @return \StructType\Transaction
     */
    public function setReportBatchSummary(\StructType\PosReportBatchSummaryReqType $reportBatchSummary = null)
    {
        $this->ReportBatchSummary = $reportBatchSummary;
        return $this;
    }
    /**
     * Get ReportOpenAuths value
     * @return \StructType\PosReportOpenAuthsReqType|null
     */
    public function getReportOpenAuths()
    {
        return $this->ReportOpenAuths;
    }
    /**
     * Set ReportOpenAuths value
     * @param \StructType\PosReportOpenAuthsReqType $reportOpenAuths
     * @return \StructType\Transaction
     */
    public function setReportOpenAuths(\StructType\PosReportOpenAuthsReqType $reportOpenAuths = null)
    {
        $this->ReportOpenAuths = $reportOpenAuths;
        return $this;
    }
    /**
     * Get ReportSearch value
     * @return \StructType\PosReportSearchReqType|null
     */
    public function getReportSearch()
    {
        return $this->ReportSearch;
    }
    /**
     * Set ReportSearch value
     * @param \StructType\PosReportSearchReqType $reportSearch
     * @return \StructType\Transaction
     */
    public function setReportSearch(\StructType\PosReportSearchReqType $reportSearch = null)
    {
        $this->ReportSearch = $reportSearch;
        return $this;
    }
    /**
     * Get ReportTxnDetail value
     * @return \StructType\PosReportTxnDetailReqType|null
     */
    public function getReportTxnDetail()
    {
        return $this->ReportTxnDetail;
    }
    /**
     * Set ReportTxnDetail value
     * @param \StructType\PosReportTxnDetailReqType $reportTxnDetail
     * @return \StructType\Transaction
     */
    public function setReportTxnDetail(\StructType\PosReportTxnDetailReqType $reportTxnDetail = null)
    {
        $this->ReportTxnDetail = $reportTxnDetail;
        return $this;
    }
    /**
     * Get SendReceipt value
     * @return \StructType\PosSendReceiptReqType|null
     */
    public function getSendReceipt()
    {
        return $this->SendReceipt;
    }
    /**
     * Set SendReceipt value
     * @param \StructType\PosSendReceiptReqType $sendReceipt
     * @return \StructType\Transaction
     */
    public function setSendReceipt(\StructType\PosSendReceiptReqType $sendReceipt = null)
    {
        $this->SendReceipt = $sendReceipt;
        return $this;
    }
    /**
     * Get TestCredentials value
     * @return string|null
     */
    public function getTestCredentials()
    {
        return $this->TestCredentials;
    }
    /**
     * Set TestCredentials value
     * @param string $testCredentials
     * @return \StructType\Transaction
     */
    public function setTestCredentials($testCredentials = null)
    {
        // validation for constraint: string
        if (!is_null($testCredentials) && !is_string($testCredentials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($testCredentials)), __LINE__);
        }
        $this->TestCredentials = $testCredentials;
        return $this;
    }
    /**
     * Get CreditAccountVerify value
     * @return \StructType\PosCreditAccountVerifyReqType|null
     */
    public function getCreditAccountVerify()
    {
        return $this->CreditAccountVerify;
    }
    /**
     * Set CreditAccountVerify value
     * @param \StructType\PosCreditAccountVerifyReqType $creditAccountVerify
     * @return \StructType\Transaction
     */
    public function setCreditAccountVerify(\StructType\PosCreditAccountVerifyReqType $creditAccountVerify = null)
    {
        $this->CreditAccountVerify = $creditAccountVerify;
        return $this;
    }
    /**
     * Get GiftCardActivate value
     * @return \StructType\PosGiftCardActivateReqType|null
     */
    public function getGiftCardActivate()
    {
        return $this->GiftCardActivate;
    }
    /**
     * Set GiftCardActivate value
     * @param \StructType\PosGiftCardActivateReqType $giftCardActivate
     * @return \StructType\Transaction
     */
    public function setGiftCardActivate(\StructType\PosGiftCardActivateReqType $giftCardActivate = null)
    {
        $this->GiftCardActivate = $giftCardActivate;
        return $this;
    }
    /**
     * Get GiftCardReplace value
     * @return \StructType\PosGiftCardReplaceReqType|null
     */
    public function getGiftCardReplace()
    {
        return $this->GiftCardReplace;
    }
    /**
     * Set GiftCardReplace value
     * @param \StructType\PosGiftCardReplaceReqType $giftCardReplace
     * @return \StructType\Transaction
     */
    public function setGiftCardReplace(\StructType\PosGiftCardReplaceReqType $giftCardReplace = null)
    {
        $this->GiftCardReplace = $giftCardReplace;
        return $this;
    }
    /**
     * Get GiftCardReversal value
     * @return \StructType\PosGiftCardReversalReqType|null
     */
    public function getGiftCardReversal()
    {
        return $this->GiftCardReversal;
    }
    /**
     * Set GiftCardReversal value
     * @param \StructType\PosGiftCardReversalReqType $giftCardReversal
     * @return \StructType\Transaction
     */
    public function setGiftCardReversal(\StructType\PosGiftCardReversalReqType $giftCardReversal = null)
    {
        $this->GiftCardReversal = $giftCardReversal;
        return $this;
    }
    /**
     * Get AddAttachment value
     * @return \StructType\PosAddAttachmentReqType|null
     */
    public function getAddAttachment()
    {
        return $this->AddAttachment;
    }
    /**
     * Set AddAttachment value
     * @param \StructType\PosAddAttachmentReqType $addAttachment
     * @return \StructType\Transaction
     */
    public function setAddAttachment(\StructType\PosAddAttachmentReqType $addAttachment = null)
    {
        $this->AddAttachment = $addAttachment;
        return $this;
    }
    /**
     * Get AltPaymentAuth value
     * @return \StructType\PosAltPayAuthReqType|null
     */
    public function getAltPaymentAuth()
    {
        return $this->AltPaymentAuth;
    }
    /**
     * Set AltPaymentAuth value
     * @param \StructType\PosAltPayAuthReqType $altPaymentAuth
     * @return \StructType\Transaction
     */
    public function setAltPaymentAuth(\StructType\PosAltPayAuthReqType $altPaymentAuth = null)
    {
        $this->AltPaymentAuth = $altPaymentAuth;
        return $this;
    }
    /**
     * Get AltPaymentCapture value
     * @return \StructType\PosAltPayCaptureReqType|null
     */
    public function getAltPaymentCapture()
    {
        return $this->AltPaymentCapture;
    }
    /**
     * Set AltPaymentCapture value
     * @param \StructType\PosAltPayCaptureReqType $altPaymentCapture
     * @return \StructType\Transaction
     */
    public function setAltPaymentCapture(\StructType\PosAltPayCaptureReqType $altPaymentCapture = null)
    {
        $this->AltPaymentCapture = $altPaymentCapture;
        return $this;
    }
    /**
     * Get AltPaymentCreateAuth value
     * @return \StructType\PosAltPayCreateAuthReqType|null
     */
    public function getAltPaymentCreateAuth()
    {
        return $this->AltPaymentCreateAuth;
    }
    /**
     * Set AltPaymentCreateAuth value
     * @param \StructType\PosAltPayCreateAuthReqType $altPaymentCreateAuth
     * @return \StructType\Transaction
     */
    public function setAltPaymentCreateAuth(\StructType\PosAltPayCreateAuthReqType $altPaymentCreateAuth = null)
    {
        $this->AltPaymentCreateAuth = $altPaymentCreateAuth;
        return $this;
    }
    /**
     * Get AltPaymentCreateSession value
     * @return \StructType\PosAltPayCreateSessReqType|null
     */
    public function getAltPaymentCreateSession()
    {
        return $this->AltPaymentCreateSession;
    }
    /**
     * Set AltPaymentCreateSession value
     * @param \StructType\PosAltPayCreateSessReqType $altPaymentCreateSession
     * @return \StructType\Transaction
     */
    public function setAltPaymentCreateSession(\StructType\PosAltPayCreateSessReqType $altPaymentCreateSession = null)
    {
        $this->AltPaymentCreateSession = $altPaymentCreateSession;
        return $this;
    }
    /**
     * Get AltPaymentOrder value
     * @return \StructType\PosAltPayOrderReqType|null
     */
    public function getAltPaymentOrder()
    {
        return $this->AltPaymentOrder;
    }
    /**
     * Set AltPaymentOrder value
     * @param \StructType\PosAltPayOrderReqType $altPaymentOrder
     * @return \StructType\Transaction
     */
    public function setAltPaymentOrder(\StructType\PosAltPayOrderReqType $altPaymentOrder = null)
    {
        $this->AltPaymentOrder = $altPaymentOrder;
        return $this;
    }
    /**
     * Get AltPaymentReturn value
     * @return \StructType\PosAltPayReturnReqType|null
     */
    public function getAltPaymentReturn()
    {
        return $this->AltPaymentReturn;
    }
    /**
     * Set AltPaymentReturn value
     * @param \StructType\PosAltPayReturnReqType $altPaymentReturn
     * @return \StructType\Transaction
     */
    public function setAltPaymentReturn(\StructType\PosAltPayReturnReqType $altPaymentReturn = null)
    {
        $this->AltPaymentReturn = $altPaymentReturn;
        return $this;
    }
    /**
     * Get AltPaymentReversal value
     * @return \StructType\PosAltPayReversalReqType|null
     */
    public function getAltPaymentReversal()
    {
        return $this->AltPaymentReversal;
    }
    /**
     * Set AltPaymentReversal value
     * @param \StructType\PosAltPayReversalReqType $altPaymentReversal
     * @return \StructType\Transaction
     */
    public function setAltPaymentReversal(\StructType\PosAltPayReversalReqType $altPaymentReversal = null)
    {
        $this->AltPaymentReversal = $altPaymentReversal;
        return $this;
    }
    /**
     * Get AltPaymentSale value
     * @return \StructType\PosAltPaySaleReqType|null
     */
    public function getAltPaymentSale()
    {
        return $this->AltPaymentSale;
    }
    /**
     * Set AltPaymentSale value
     * @param \StructType\PosAltPaySaleReqType $altPaymentSale
     * @return \StructType\Transaction
     */
    public function setAltPaymentSale(\StructType\PosAltPaySaleReqType $altPaymentSale = null)
    {
        $this->AltPaymentSale = $altPaymentSale;
        return $this;
    }
    /**
     * Get AltPaymentSessionInfo value
     * @return \StructType\PosAltPaySessionInfoReqType|null
     */
    public function getAltPaymentSessionInfo()
    {
        return $this->AltPaymentSessionInfo;
    }
    /**
     * Set AltPaymentSessionInfo value
     * @param \StructType\PosAltPaySessionInfoReqType $altPaymentSessionInfo
     * @return \StructType\Transaction
     */
    public function setAltPaymentSessionInfo(\StructType\PosAltPaySessionInfoReqType $altPaymentSessionInfo = null)
    {
        $this->AltPaymentSessionInfo = $altPaymentSessionInfo;
        return $this;
    }
    /**
     * Get AltPaymentVoid value
     * @return \StructType\PosAltPayVoidReqType|null
     */
    public function getAltPaymentVoid()
    {
        return $this->AltPaymentVoid;
    }
    /**
     * Set AltPaymentVoid value
     * @param \StructType\PosAltPayVoidReqType $altPaymentVoid
     * @return \StructType\Transaction
     */
    public function setAltPaymentVoid(\StructType\PosAltPayVoidReqType $altPaymentVoid = null)
    {
        $this->AltPaymentVoid = $altPaymentVoid;
        return $this;
    }
    /**
     * Get GiftCardAlias value
     * @return \StructType\PosGiftCardAliasReqType|null
     */
    public function getGiftCardAlias()
    {
        return $this->GiftCardAlias;
    }
    /**
     * Set GiftCardAlias value
     * @param \StructType\PosGiftCardAliasReqType $giftCardAlias
     * @return \StructType\Transaction
     */
    public function setGiftCardAlias(\StructType\PosGiftCardAliasReqType $giftCardAlias = null)
    {
        $this->GiftCardAlias = $giftCardAlias;
        return $this;
    }
    /**
     * Get GiftCardReward value
     * @return \StructType\PosGiftCardRewardReqType|null
     */
    public function getGiftCardReward()
    {
        return $this->GiftCardReward;
    }
    /**
     * Set GiftCardReward value
     * @param \StructType\PosGiftCardRewardReqType $giftCardReward
     * @return \StructType\Transaction
     */
    public function setGiftCardReward(\StructType\PosGiftCardRewardReqType $giftCardReward = null)
    {
        $this->GiftCardReward = $giftCardReward;
        return $this;
    }
    /**
     * Get GiftCardCurrentDayTotals value
     * @return string|null
     */
    public function getGiftCardCurrentDayTotals()
    {
        return $this->GiftCardCurrentDayTotals;
    }
    /**
     * Set GiftCardCurrentDayTotals value
     * @param string $giftCardCurrentDayTotals
     * @return \StructType\Transaction
     */
    public function setGiftCardCurrentDayTotals($giftCardCurrentDayTotals = null)
    {
        // validation for constraint: string
        if (!is_null($giftCardCurrentDayTotals) && !is_string($giftCardCurrentDayTotals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftCardCurrentDayTotals)), __LINE__);
        }
        $this->GiftCardCurrentDayTotals = $giftCardCurrentDayTotals;
        return $this;
    }
    /**
     * Get Authenticate value
     * @return string|null
     */
    public function getAuthenticate()
    {
        return $this->Authenticate;
    }
    /**
     * Set Authenticate value
     * @param string $authenticate
     * @return \StructType\Transaction
     */
    public function setAuthenticate($authenticate = null)
    {
        // validation for constraint: string
        if (!is_null($authenticate) && !is_string($authenticate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($authenticate)), __LINE__);
        }
        $this->Authenticate = $authenticate;
        return $this;
    }
    /**
     * Get BatchClose value
     * @return string|null
     */
    public function getBatchClose()
    {
        return $this->BatchClose;
    }
    /**
     * Set BatchClose value
     * @param string $batchClose
     * @return \StructType\Transaction
     */
    public function setBatchClose($batchClose = null)
    {
        // validation for constraint: string
        if (!is_null($batchClose) && !is_string($batchClose)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($batchClose)), __LINE__);
        }
        $this->BatchClose = $batchClose;
        return $this;
    }
    /**
     * Get CancelImpersonation value
     * @return string|null
     */
    public function getCancelImpersonation()
    {
        return $this->CancelImpersonation;
    }
    /**
     * Set CancelImpersonation value
     * @param string $cancelImpersonation
     * @return \StructType\Transaction
     */
    public function setCancelImpersonation($cancelImpersonation = null)
    {
        // validation for constraint: string
        if (!is_null($cancelImpersonation) && !is_string($cancelImpersonation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelImpersonation)), __LINE__);
        }
        $this->CancelImpersonation = $cancelImpersonation;
        return $this;
    }
    /**
     * Get CashReturn value
     * @return \StructType\PosCashReturnReqType|null
     */
    public function getCashReturn()
    {
        return $this->CashReturn;
    }
    /**
     * Set CashReturn value
     * @param \StructType\PosCashReturnReqType $cashReturn
     * @return \StructType\Transaction
     */
    public function setCashReturn(\StructType\PosCashReturnReqType $cashReturn = null)
    {
        $this->CashReturn = $cashReturn;
        return $this;
    }
    /**
     * Get GiftCardDeactivate value
     * @return \StructType\PosGiftCardDeactivateReqType|null
     */
    public function getGiftCardDeactivate()
    {
        return $this->GiftCardDeactivate;
    }
    /**
     * Set GiftCardDeactivate value
     * @param \StructType\PosGiftCardDeactivateReqType $giftCardDeactivate
     * @return \StructType\Transaction
     */
    public function setGiftCardDeactivate(\StructType\PosGiftCardDeactivateReqType $giftCardDeactivate = null)
    {
        $this->GiftCardDeactivate = $giftCardDeactivate;
        return $this;
    }
    /**
     * Get CashSale value
     * @return \StructType\PosCashSaleReqType|null
     */
    public function getCashSale()
    {
        return $this->CashSale;
    }
    /**
     * Set CashSale value
     * @param \StructType\PosCashSaleReqType $cashSale
     * @return \StructType\Transaction
     */
    public function setCashSale(\StructType\PosCashSaleReqType $cashSale = null)
    {
        $this->CashSale = $cashSale;
        return $this;
    }
    /**
     * Get CheckSale value
     * @return \StructType\PosCheckSaleReqType|null
     */
    public function getCheckSale()
    {
        return $this->CheckSale;
    }
    /**
     * Set CheckSale value
     * @param \StructType\PosCheckSaleReqType $checkSale
     * @return \StructType\Transaction
     */
    public function setCheckSale(\StructType\PosCheckSaleReqType $checkSale = null)
    {
        $this->CheckSale = $checkSale;
        return $this;
    }
    /**
     * Get CheckVoid value
     * @return \StructType\PosCheckVoidReqType|null
     */
    public function getCheckVoid()
    {
        return $this->CheckVoid;
    }
    /**
     * Set CheckVoid value
     * @param \StructType\PosCheckVoidReqType $checkVoid
     * @return \StructType\Transaction
     */
    public function setCheckVoid(\StructType\PosCheckVoidReqType $checkVoid = null)
    {
        $this->CheckVoid = $checkVoid;
        return $this;
    }
    /**
     * Get ChipCardDecline value
     * @return \StructType\PosChipCardDeclineReqType|null
     */
    public function getChipCardDecline()
    {
        return $this->ChipCardDecline;
    }
    /**
     * Set ChipCardDecline value
     * @param \StructType\PosChipCardDeclineReqType $chipCardDecline
     * @return \StructType\Transaction
     */
    public function setChipCardDecline(\StructType\PosChipCardDeclineReqType $chipCardDecline = null)
    {
        $this->ChipCardDecline = $chipCardDecline;
        return $this;
    }
    /**
     * Get GiftCardPreviousDayTotals value
     * @return string|null
     */
    public function getGiftCardPreviousDayTotals()
    {
        return $this->GiftCardPreviousDayTotals;
    }
    /**
     * Set GiftCardPreviousDayTotals value
     * @param string $giftCardPreviousDayTotals
     * @return \StructType\Transaction
     */
    public function setGiftCardPreviousDayTotals($giftCardPreviousDayTotals = null)
    {
        // validation for constraint: string
        if (!is_null($giftCardPreviousDayTotals) && !is_string($giftCardPreviousDayTotals)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($giftCardPreviousDayTotals)), __LINE__);
        }
        $this->GiftCardPreviousDayTotals = $giftCardPreviousDayTotals;
        return $this;
    }
    /**
     * Get CreditAddToBatch value
     * @return \StructType\PosCreditAddToBatchReqType|null
     */
    public function getCreditAddToBatch()
    {
        return $this->CreditAddToBatch;
    }
    /**
     * Set CreditAddToBatch value
     * @param \StructType\PosCreditAddToBatchReqType $creditAddToBatch
     * @return \StructType\Transaction
     */
    public function setCreditAddToBatch(\StructType\PosCreditAddToBatchReqType $creditAddToBatch = null)
    {
        $this->CreditAddToBatch = $creditAddToBatch;
        return $this;
    }
    /**
     * Get CreditAdditionalAuth value
     * @return \StructType\PosCreditAdditionalAuthReqType|null
     */
    public function getCreditAdditionalAuth()
    {
        return $this->CreditAdditionalAuth;
    }
    /**
     * Set CreditAdditionalAuth value
     * @param \StructType\PosCreditAdditionalAuthReqType $creditAdditionalAuth
     * @return \StructType\Transaction
     */
    public function setCreditAdditionalAuth(\StructType\PosCreditAdditionalAuthReqType $creditAdditionalAuth = null)
    {
        $this->CreditAdditionalAuth = $creditAdditionalAuth;
        return $this;
    }
    /**
     * Get CreditAuth value
     * @return \StructType\PosCreditAuthReqType|null
     */
    public function getCreditAuth()
    {
        return $this->CreditAuth;
    }
    /**
     * Set CreditAuth value
     * @param \StructType\PosCreditAuthReqType $creditAuth
     * @return \StructType\Transaction
     */
    public function setCreditAuth(\StructType\PosCreditAuthReqType $creditAuth = null)
    {
        $this->CreditAuth = $creditAuth;
        return $this;
    }
    /**
     * Get CreditCPCEdit value
     * @return \StructType\PosCreditCPCEditReqType|null
     */
    public function getCreditCPCEdit()
    {
        return $this->CreditCPCEdit;
    }
    /**
     * Set CreditCPCEdit value
     * @param \StructType\PosCreditCPCEditReqType $creditCPCEdit
     * @return \StructType\Transaction
     */
    public function setCreditCPCEdit(\StructType\PosCreditCPCEditReqType $creditCPCEdit = null)
    {
        $this->CreditCPCEdit = $creditCPCEdit;
        return $this;
    }
    /**
     * Get CreditIncrementalAuth value
     * @return \StructType\PosCreditIncrementalAuthReqType|null
     */
    public function getCreditIncrementalAuth()
    {
        return $this->CreditIncrementalAuth;
    }
    /**
     * Set CreditIncrementalAuth value
     * @param \StructType\PosCreditIncrementalAuthReqType $creditIncrementalAuth
     * @return \StructType\Transaction
     */
    public function setCreditIncrementalAuth(\StructType\PosCreditIncrementalAuthReqType $creditIncrementalAuth = null)
    {
        $this->CreditIncrementalAuth = $creditIncrementalAuth;
        return $this;
    }
    /**
     * Get CreditOfflineAuth value
     * @return \StructType\PosCreditOfflineAuthReqType|null
     */
    public function getCreditOfflineAuth()
    {
        return $this->CreditOfflineAuth;
    }
    /**
     * Set CreditOfflineAuth value
     * @param \StructType\PosCreditOfflineAuthReqType $creditOfflineAuth
     * @return \StructType\Transaction
     */
    public function setCreditOfflineAuth(\StructType\PosCreditOfflineAuthReqType $creditOfflineAuth = null)
    {
        $this->CreditOfflineAuth = $creditOfflineAuth;
        return $this;
    }
    /**
     * Get CreditOfflineSale value
     * @return \StructType\PosCreditOfflineSaleReqType|null
     */
    public function getCreditOfflineSale()
    {
        return $this->CreditOfflineSale;
    }
    /**
     * Set CreditOfflineSale value
     * @param \StructType\PosCreditOfflineSaleReqType $creditOfflineSale
     * @return \StructType\Transaction
     */
    public function setCreditOfflineSale(\StructType\PosCreditOfflineSaleReqType $creditOfflineSale = null)
    {
        $this->CreditOfflineSale = $creditOfflineSale;
        return $this;
    }
    /**
     * Get CreditReturn value
     * @return \StructType\PosCreditReturnReqType|null
     */
    public function getCreditReturn()
    {
        return $this->CreditReturn;
    }
    /**
     * Set CreditReturn value
     * @param \StructType\PosCreditReturnReqType $creditReturn
     * @return \StructType\Transaction
     */
    public function setCreditReturn(\StructType\PosCreditReturnReqType $creditReturn = null)
    {
        $this->CreditReturn = $creditReturn;
        return $this;
    }
    /**
     * Get CreditReversal value
     * @return \StructType\PosCreditReversalReqType|null
     */
    public function getCreditReversal()
    {
        return $this->CreditReversal;
    }
    /**
     * Set CreditReversal value
     * @param \StructType\PosCreditReversalReqType $creditReversal
     * @return \StructType\Transaction
     */
    public function setCreditReversal(\StructType\PosCreditReversalReqType $creditReversal = null)
    {
        $this->CreditReversal = $creditReversal;
        return $this;
    }
    /**
     * Get CreditSale value
     * @return \StructType\PosCreditSaleReqType|null
     */
    public function getCreditSale()
    {
        return $this->CreditSale;
    }
    /**
     * Set CreditSale value
     * @param \StructType\PosCreditSaleReqType $creditSale
     * @return \StructType\Transaction
     */
    public function setCreditSale(\StructType\PosCreditSaleReqType $creditSale = null)
    {
        $this->CreditSale = $creditSale;
        return $this;
    }
    /**
     * Get CreditTxnEdit value
     * @return \StructType\PosCreditTxnEditReqType|null
     */
    public function getCreditTxnEdit()
    {
        return $this->CreditTxnEdit;
    }
    /**
     * Set CreditTxnEdit value
     * @param \StructType\PosCreditTxnEditReqType $creditTxnEdit
     * @return \StructType\Transaction
     */
    public function setCreditTxnEdit(\StructType\PosCreditTxnEditReqType $creditTxnEdit = null)
    {
        $this->CreditTxnEdit = $creditTxnEdit;
        return $this;
    }
    /**
     * Get CreditVoid value
     * @return \StructType\PosCreditVoidReqType|null
     */
    public function getCreditVoid()
    {
        return $this->CreditVoid;
    }
    /**
     * Set CreditVoid value
     * @param \StructType\PosCreditVoidReqType $creditVoid
     * @return \StructType\Transaction
     */
    public function setCreditVoid(\StructType\PosCreditVoidReqType $creditVoid = null)
    {
        $this->CreditVoid = $creditVoid;
        return $this;
    }
    /**
     * Get DebitAddValue value
     * @return \StructType\PosDebitAddValueReqType|null
     */
    public function getDebitAddValue()
    {
        return $this->DebitAddValue;
    }
    /**
     * Set DebitAddValue value
     * @param \StructType\PosDebitAddValueReqType $debitAddValue
     * @return \StructType\Transaction
     */
    public function setDebitAddValue(\StructType\PosDebitAddValueReqType $debitAddValue = null)
    {
        $this->DebitAddValue = $debitAddValue;
        return $this;
    }
    /**
     * Get DebitReturn value
     * @return \StructType\PosDebitReturnReqType|null
     */
    public function getDebitReturn()
    {
        return $this->DebitReturn;
    }
    /**
     * Set DebitReturn value
     * @param \StructType\PosDebitReturnReqType $debitReturn
     * @return \StructType\Transaction
     */
    public function setDebitReturn(\StructType\PosDebitReturnReqType $debitReturn = null)
    {
        $this->DebitReturn = $debitReturn;
        return $this;
    }
    /**
     * Get DebitReversal value
     * @return \StructType\PosDebitReversalReqType|null
     */
    public function getDebitReversal()
    {
        return $this->DebitReversal;
    }
    /**
     * Set DebitReversal value
     * @param \StructType\PosDebitReversalReqType $debitReversal
     * @return \StructType\Transaction
     */
    public function setDebitReversal(\StructType\PosDebitReversalReqType $debitReversal = null)
    {
        $this->DebitReversal = $debitReversal;
        return $this;
    }
    /**
     * Get DebitSale value
     * @return \StructType\PosDebitSaleReqType|null
     */
    public function getDebitSale()
    {
        return $this->DebitSale;
    }
    /**
     * Set DebitSale value
     * @param \StructType\PosDebitSaleReqType $debitSale
     * @return \StructType\Transaction
     */
    public function setDebitSale(\StructType\PosDebitSaleReqType $debitSale = null)
    {
        $this->DebitSale = $debitSale;
        return $this;
    }
    /**
     * Get EBTBalanceInquiry value
     * @return \StructType\PosEBTBalanceInquiryReqType|null
     */
    public function getEBTBalanceInquiry()
    {
        return $this->EBTBalanceInquiry;
    }
    /**
     * Set EBTBalanceInquiry value
     * @param \StructType\PosEBTBalanceInquiryReqType $eBTBalanceInquiry
     * @return \StructType\Transaction
     */
    public function setEBTBalanceInquiry(\StructType\PosEBTBalanceInquiryReqType $eBTBalanceInquiry = null)
    {
        $this->EBTBalanceInquiry = $eBTBalanceInquiry;
        return $this;
    }
    /**
     * Get EBTCashBackPurchase value
     * @return \StructType\PosEBTCashBackPurchaseReqType|null
     */
    public function getEBTCashBackPurchase()
    {
        return $this->EBTCashBackPurchase;
    }
    /**
     * Set EBTCashBackPurchase value
     * @param \StructType\PosEBTCashBackPurchaseReqType $eBTCashBackPurchase
     * @return \StructType\Transaction
     */
    public function setEBTCashBackPurchase(\StructType\PosEBTCashBackPurchaseReqType $eBTCashBackPurchase = null)
    {
        $this->EBTCashBackPurchase = $eBTCashBackPurchase;
        return $this;
    }
    /**
     * Get EBTCashBenefitWithdrawal value
     * @return \StructType\PosEBTCashBenefitWithdrawalReqType|null
     */
    public function getEBTCashBenefitWithdrawal()
    {
        return $this->EBTCashBenefitWithdrawal;
    }
    /**
     * Set EBTCashBenefitWithdrawal value
     * @param \StructType\PosEBTCashBenefitWithdrawalReqType $eBTCashBenefitWithdrawal
     * @return \StructType\Transaction
     */
    public function setEBTCashBenefitWithdrawal(\StructType\PosEBTCashBenefitWithdrawalReqType $eBTCashBenefitWithdrawal = null)
    {
        $this->EBTCashBenefitWithdrawal = $eBTCashBenefitWithdrawal;
        return $this;
    }
    /**
     * Get EBTFSPurchase value
     * @return \StructType\PosEBTFSPurchaseReqType|null
     */
    public function getEBTFSPurchase()
    {
        return $this->EBTFSPurchase;
    }
    /**
     * Set EBTFSPurchase value
     * @param \StructType\PosEBTFSPurchaseReqType $eBTFSPurchase
     * @return \StructType\Transaction
     */
    public function setEBTFSPurchase(\StructType\PosEBTFSPurchaseReqType $eBTFSPurchase = null)
    {
        $this->EBTFSPurchase = $eBTFSPurchase;
        return $this;
    }
    /**
     * Get EBTFSReturn value
     * @return \StructType\PosEBTFSReturnReqType|null
     */
    public function getEBTFSReturn()
    {
        return $this->EBTFSReturn;
    }
    /**
     * Set EBTFSReturn value
     * @param \StructType\PosEBTFSReturnReqType $eBTFSReturn
     * @return \StructType\Transaction
     */
    public function setEBTFSReturn(\StructType\PosEBTFSReturnReqType $eBTFSReturn = null)
    {
        $this->EBTFSReturn = $eBTFSReturn;
        return $this;
    }
    /**
     * Get EBTVoucherPurchase value
     * @return \StructType\PosEBTFSVoucherReqType|null
     */
    public function getEBTVoucherPurchase()
    {
        return $this->EBTVoucherPurchase;
    }
    /**
     * Set EBTVoucherPurchase value
     * @param \StructType\PosEBTFSVoucherReqType $eBTVoucherPurchase
     * @return \StructType\Transaction
     */
    public function setEBTVoucherPurchase(\StructType\PosEBTFSVoucherReqType $eBTVoucherPurchase = null)
    {
        $this->EBTVoucherPurchase = $eBTVoucherPurchase;
        return $this;
    }
    /**
     * Get EndToEndTest value
     * @return mixed|null
     */
    public function getEndToEndTest()
    {
        return $this->EndToEndTest;
    }
    /**
     * Set EndToEndTest value
     * @param mixed $endToEndTest
     * @return \StructType\Transaction
     */
    public function setEndToEndTest($endToEndTest = null)
    {
        $this->EndToEndTest = $endToEndTest;
        return $this;
    }
    /**
     * Get FindTransactions value
     * @return \StructType\FindTransactionsReqType|null
     */
    public function getFindTransactions()
    {
        return $this->FindTransactions;
    }
    /**
     * Set FindTransactions value
     * @param \StructType\FindTransactionsReqType $findTransactions
     * @return \StructType\Transaction
     */
    public function setFindTransactions(\StructType\FindTransactionsReqType $findTransactions = null)
    {
        $this->FindTransactions = $findTransactions;
        return $this;
    }
    /**
     * Get GetAttachments value
     * @return \StructType\PosGetAttachmentReqType|null
     */
    public function getGetAttachments()
    {
        return $this->GetAttachments;
    }
    /**
     * Set GetAttachments value
     * @param \StructType\PosGetAttachmentReqType $getAttachments
     * @return \StructType\Transaction
     */
    public function setGetAttachments(\StructType\PosGetAttachmentReqType $getAttachments = null)
    {
        $this->GetAttachments = $getAttachments;
        return $this;
    }
    /**
     * Get GetTransactionStatus value
     * @return \StructType\PosGetTransactionStatusReqType|null
     */
    public function getGetTransactionStatus()
    {
        return $this->GetTransactionStatus;
    }
    /**
     * Set GetTransactionStatus value
     * @param \StructType\PosGetTransactionStatusReqType $getTransactionStatus
     * @return \StructType\Transaction
     */
    public function setGetTransactionStatus(\StructType\PosGetTransactionStatusReqType $getTransactionStatus = null)
    {
        $this->GetTransactionStatus = $getTransactionStatus;
        return $this;
    }
    /**
     * Get GetUserDeviceSettings value
     * @return \StructType\PosGetUserDeviceSettingsReqType|null
     */
    public function getGetUserDeviceSettings()
    {
        return $this->GetUserDeviceSettings;
    }
    /**
     * Set GetUserDeviceSettings value
     * @param \StructType\PosGetUserDeviceSettingsReqType $getUserDeviceSettings
     * @return \StructType\Transaction
     */
    public function setGetUserDeviceSettings(\StructType\PosGetUserDeviceSettingsReqType $getUserDeviceSettings = null)
    {
        $this->GetUserDeviceSettings = $getUserDeviceSettings;
        return $this;
    }
    /**
     * Get GetUserSettings value
     * @return string|null
     */
    public function getGetUserSettings()
    {
        return $this->GetUserSettings;
    }
    /**
     * Set GetUserSettings value
     * @param string $getUserSettings
     * @return \StructType\Transaction
     */
    public function setGetUserSettings($getUserSettings = null)
    {
        // validation for constraint: string
        if (!is_null($getUserSettings) && !is_string($getUserSettings)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getUserSettings)), __LINE__);
        }
        $this->GetUserSettings = $getUserSettings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Transaction
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
