<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Header StructType
 * @subpackage Structs
 */
class Header extends AbstractStructBase
{
    /**
     * The RptStartUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RptStartUtcDT;
    /**
     * The RptEndUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RptEndUtcDT;
    /**
     * The TxnCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TxnCnt;
    /**
     * The TxnAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TxnAmt;
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
     * The BatchCnt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $BatchCnt;
    /**
     * The BatchAmt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $BatchAmt;
    /**
     * The GatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayTxnId;
    /**
     * The GatewayRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayRspCode;
    /**
     * The GatewayToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GatewayToken;
    /**
     * The LicenseId
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $LicenseId;
    /**
     * The SiteId
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $SiteId;
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - default: 0
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DeviceId;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The CredentialToken
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CredentialToken;
    /**
     * The SiteTrace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteTrace;
    /**
     * The DeveloperID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DeveloperID;
    /**
     * The VersionNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $VersionNbr;
    /**
     * The ClerkID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ClerkID;
    /**
     * The GPSCoordinates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GPSCoordinatesType
     */
    public $GPSCoordinates;
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
     * The SecretAPIKey
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SecretAPIKey;
    /**
     * The MerchName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchName;
    /**
     * The BatchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchId;
    /**
     * The BatchStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BatchStatus;
    /**
     * The BatchSeqNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $BatchSeqNbr;
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
     * The GatewayRspMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GatewayRspMsg;
    /**
     * The RspDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspDT;
    /**
     * The TokenData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\TokenDataRspType
     */
    public $TokenData;
    /**
     * The PDLNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PDLNotification;
    /**
     * Constructor method for Header
     * @uses Header::setRptStartUtcDT()
     * @uses Header::setRptEndUtcDT()
     * @uses Header::setTxnCnt()
     * @uses Header::setTxnAmt()
     * @uses Header::setOpenUtcDT()
     * @uses Header::setOpenTxnId()
     * @uses Header::setCreditCnt()
     * @uses Header::setCreditAmt()
     * @uses Header::setDebitCnt()
     * @uses Header::setDebitAmt()
     * @uses Header::setSaleCnt()
     * @uses Header::setSaleAmt()
     * @uses Header::setReturnCnt()
     * @uses Header::setReturnAmt()
     * @uses Header::setTotalCnt()
     * @uses Header::setTotalAmt()
     * @uses Header::setTotalGratuityAmtInfo()
     * @uses Header::setBatchTxnCnt()
     * @uses Header::setBatchTxnAmt()
     * @uses Header::setBatchCnt()
     * @uses Header::setBatchAmt()
     * @uses Header::setGatewayTxnId()
     * @uses Header::setGatewayRspCode()
     * @uses Header::setGatewayToken()
     * @uses Header::setLicenseId()
     * @uses Header::setSiteId()
     * @uses Header::setDeviceId()
     * @uses Header::setUserName()
     * @uses Header::setPassword()
     * @uses Header::setCredentialToken()
     * @uses Header::setSiteTrace()
     * @uses Header::setDeveloperID()
     * @uses Header::setVersionNbr()
     * @uses Header::setClerkID()
     * @uses Header::setGPSCoordinates()
     * @uses Header::setClientTxnId()
     * @uses Header::setUniqueDeviceId()
     * @uses Header::setSecretAPIKey()
     * @uses Header::setMerchName()
     * @uses Header::setBatchId()
     * @uses Header::setBatchStatus()
     * @uses Header::setBatchSeqNbr()
     * @uses Header::setCloseUtcDT()
     * @uses Header::setCloseTxnId()
     * @uses Header::setGatewayRspMsg()
     * @uses Header::setRspDT()
     * @uses Header::setTokenData()
     * @uses Header::setPDLNotification()
     * @param string $rptStartUtcDT
     * @param string $rptEndUtcDT
     * @param int $txnCnt
     * @param float $txnAmt
     * @param string $openUtcDT
     * @param int $openTxnId
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
     * @param int $batchTxnCnt
     * @param float $batchTxnAmt
     * @param int $batchCnt
     * @param float $batchAmt
     * @param int $gatewayTxnId
     * @param int $gatewayRspCode
     * @param string $gatewayToken
     * @param int $licenseId
     * @param int $siteId
     * @param int $deviceId
     * @param string $userName
     * @param string $password
     * @param string $credentialToken
     * @param string $siteTrace
     * @param string $developerID
     * @param string $versionNbr
     * @param string $clerkID
     * @param \StructType\GPSCoordinatesType $gPSCoordinates
     * @param int $clientTxnId
     * @param string $uniqueDeviceId
     * @param string $secretAPIKey
     * @param string $merchName
     * @param int $batchId
     * @param string $batchStatus
     * @param int $batchSeqNbr
     * @param string $closeUtcDT
     * @param int $closeTxnId
     * @param string $gatewayRspMsg
     * @param string $rspDT
     * @param \StructType\TokenDataRspType $tokenData
     * @param string $pDLNotification
     */
    public function __construct($rptStartUtcDT = null, $rptEndUtcDT = null, $txnCnt = null, $txnAmt = null, $openUtcDT = null, $openTxnId = null, $creditCnt = null, $creditAmt = null, $debitCnt = null, $debitAmt = null, $saleCnt = null, $saleAmt = null, $returnCnt = null, $returnAmt = null, $totalCnt = null, $totalAmt = null, $totalGratuityAmtInfo = null, $batchTxnCnt = null, $batchTxnAmt = null, $batchCnt = null, $batchAmt = null, $gatewayTxnId = null, $gatewayRspCode = null, $gatewayToken = null, $licenseId = 0, $siteId = 0, $deviceId = 0, $userName = null, $password = null, $credentialToken = null, $siteTrace = null, $developerID = null, $versionNbr = null, $clerkID = null, \StructType\GPSCoordinatesType $gPSCoordinates = null, $clientTxnId = null, $uniqueDeviceId = null, $secretAPIKey = null, $merchName = null, $batchId = null, $batchStatus = null, $batchSeqNbr = null, $closeUtcDT = null, $closeTxnId = null, $gatewayRspMsg = null, $rspDT = null, \StructType\TokenDataRspType $tokenData = null, $pDLNotification = null)
    {
        $this
            ->setRptStartUtcDT($rptStartUtcDT)
            ->setRptEndUtcDT($rptEndUtcDT)
            ->setTxnCnt($txnCnt)
            ->setTxnAmt($txnAmt)
            ->setOpenUtcDT($openUtcDT)
            ->setOpenTxnId($openTxnId)
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
            ->setBatchTxnCnt($batchTxnCnt)
            ->setBatchTxnAmt($batchTxnAmt)
            ->setBatchCnt($batchCnt)
            ->setBatchAmt($batchAmt)
            ->setGatewayTxnId($gatewayTxnId)
            ->setGatewayRspCode($gatewayRspCode)
            ->setGatewayToken($gatewayToken)
            ->setLicenseId($licenseId)
            ->setSiteId($siteId)
            ->setDeviceId($deviceId)
            ->setUserName($userName)
            ->setPassword($password)
            ->setCredentialToken($credentialToken)
            ->setSiteTrace($siteTrace)
            ->setDeveloperID($developerID)
            ->setVersionNbr($versionNbr)
            ->setClerkID($clerkID)
            ->setGPSCoordinates($gPSCoordinates)
            ->setClientTxnId($clientTxnId)
            ->setUniqueDeviceId($uniqueDeviceId)
            ->setSecretAPIKey($secretAPIKey)
            ->setMerchName($merchName)
            ->setBatchId($batchId)
            ->setBatchStatus($batchStatus)
            ->setBatchSeqNbr($batchSeqNbr)
            ->setCloseUtcDT($closeUtcDT)
            ->setCloseTxnId($closeTxnId)
            ->setGatewayRspMsg($gatewayRspMsg)
            ->setRspDT($rspDT)
            ->setTokenData($tokenData)
            ->setPDLNotification($pDLNotification);
    }
    /**
     * Get RptStartUtcDT value
     * @return string
     */
    public function getRptStartUtcDT()
    {
        return $this->RptStartUtcDT;
    }
    /**
     * Set RptStartUtcDT value
     * @param string $rptStartUtcDT
     * @return \StructType\Header
     */
    public function setRptStartUtcDT($rptStartUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rptStartUtcDT) && !is_string($rptStartUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rptStartUtcDT)), __LINE__);
        }
        $this->RptStartUtcDT = $rptStartUtcDT;
        return $this;
    }
    /**
     * Get RptEndUtcDT value
     * @return string
     */
    public function getRptEndUtcDT()
    {
        return $this->RptEndUtcDT;
    }
    /**
     * Set RptEndUtcDT value
     * @param string $rptEndUtcDT
     * @return \StructType\Header
     */
    public function setRptEndUtcDT($rptEndUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rptEndUtcDT) && !is_string($rptEndUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rptEndUtcDT)), __LINE__);
        }
        $this->RptEndUtcDT = $rptEndUtcDT;
        return $this;
    }
    /**
     * Get TxnCnt value
     * @return int
     */
    public function getTxnCnt()
    {
        return $this->TxnCnt;
    }
    /**
     * Set TxnCnt value
     * @param int $txnCnt
     * @return \StructType\Header
     */
    public function setTxnCnt($txnCnt = null)
    {
        // validation for constraint: int
        if (!is_null($txnCnt) && !is_numeric($txnCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($txnCnt)), __LINE__);
        }
        $this->TxnCnt = $txnCnt;
        return $this;
    }
    /**
     * Get TxnAmt value
     * @return float
     */
    public function getTxnAmt()
    {
        return $this->TxnAmt;
    }
    /**
     * Set TxnAmt value
     * @param float $txnAmt
     * @return \StructType\Header
     */
    public function setTxnAmt($txnAmt = null)
    {
        $this->TxnAmt = $txnAmt;
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
     */
    public function setTotalGratuityAmtInfo($totalGratuityAmtInfo = null)
    {
        $this->TotalGratuityAmtInfo = $totalGratuityAmtInfo;
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
     * @return \StructType\Header
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
     * @return \StructType\Header
     */
    public function setBatchTxnAmt($batchTxnAmt = null)
    {
        $this->BatchTxnAmt = $batchTxnAmt;
        return $this;
    }
    /**
     * Get BatchCnt value
     * @return int
     */
    public function getBatchCnt()
    {
        return $this->BatchCnt;
    }
    /**
     * Set BatchCnt value
     * @param int $batchCnt
     * @return \StructType\Header
     */
    public function setBatchCnt($batchCnt = null)
    {
        // validation for constraint: int
        if (!is_null($batchCnt) && !is_numeric($batchCnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($batchCnt)), __LINE__);
        }
        $this->BatchCnt = $batchCnt;
        return $this;
    }
    /**
     * Get BatchAmt value
     * @return float
     */
    public function getBatchAmt()
    {
        return $this->BatchAmt;
    }
    /**
     * Set BatchAmt value
     * @param float $batchAmt
     * @return \StructType\Header
     */
    public function setBatchAmt($batchAmt = null)
    {
        $this->BatchAmt = $batchAmt;
        return $this;
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * Get GatewayToken value
     * @return string|null
     */
    public function getGatewayToken()
    {
        return $this->GatewayToken;
    }
    /**
     * Set GatewayToken value
     * @param string $gatewayToken
     * @return \StructType\Header
     */
    public function setGatewayToken($gatewayToken = null)
    {
        // validation for constraint: string
        if (!is_null($gatewayToken) && !is_string($gatewayToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gatewayToken)), __LINE__);
        }
        $this->GatewayToken = $gatewayToken;
        return $this;
    }
    /**
     * Get LicenseId value
     * @return int|null
     */
    public function getLicenseId()
    {
        return $this->LicenseId;
    }
    /**
     * Set LicenseId value
     * @param int $licenseId
     * @return \StructType\Header
     */
    public function setLicenseId($licenseId = 0)
    {
        // validation for constraint: int
        if (!is_null($licenseId) && !is_numeric($licenseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($licenseId)), __LINE__);
        }
        $this->LicenseId = $licenseId;
        return $this;
    }
    /**
     * Get SiteId value
     * @return int|null
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }
    /**
     * Set SiteId value
     * @param int $siteId
     * @return \StructType\Header
     */
    public function setSiteId($siteId = 0)
    {
        // validation for constraint: int
        if (!is_null($siteId) && !is_numeric($siteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($siteId)), __LINE__);
        }
        $this->SiteId = $siteId;
        return $this;
    }
    /**
     * Get DeviceId value
     * @return int|null
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }
    /**
     * Set DeviceId value
     * @param int $deviceId
     * @return \StructType\Header
     */
    public function setDeviceId($deviceId = 0)
    {
        // validation for constraint: int
        if (!is_null($deviceId) && !is_numeric($deviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($deviceId)), __LINE__);
        }
        $this->DeviceId = $deviceId;
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
     * @return \StructType\Header
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
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \StructType\Header
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get CredentialToken value
     * @return string|null
     */
    public function getCredentialToken()
    {
        return $this->CredentialToken;
    }
    /**
     * Set CredentialToken value
     * @param string $credentialToken
     * @return \StructType\Header
     */
    public function setCredentialToken($credentialToken = null)
    {
        // validation for constraint: string
        if (!is_null($credentialToken) && !is_string($credentialToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($credentialToken)), __LINE__);
        }
        $this->CredentialToken = $credentialToken;
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
     * @return \StructType\Header
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
     * Get DeveloperID value
     * @return string|null
     */
    public function getDeveloperID()
    {
        return $this->DeveloperID;
    }
    /**
     * Set DeveloperID value
     * @param string $developerID
     * @return \StructType\Header
     */
    public function setDeveloperID($developerID = null)
    {
        // validation for constraint: string
        if (!is_null($developerID) && !is_string($developerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($developerID)), __LINE__);
        }
        $this->DeveloperID = $developerID;
        return $this;
    }
    /**
     * Get VersionNbr value
     * @return string|null
     */
    public function getVersionNbr()
    {
        return $this->VersionNbr;
    }
    /**
     * Set VersionNbr value
     * @param string $versionNbr
     * @return \StructType\Header
     */
    public function setVersionNbr($versionNbr = null)
    {
        // validation for constraint: string
        if (!is_null($versionNbr) && !is_string($versionNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($versionNbr)), __LINE__);
        }
        $this->VersionNbr = $versionNbr;
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
     * @return \StructType\Header
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
     * Get GPSCoordinates value
     * @return \StructType\GPSCoordinatesType|null
     */
    public function getGPSCoordinates()
    {
        return $this->GPSCoordinates;
    }
    /**
     * Set GPSCoordinates value
     * @param \StructType\GPSCoordinatesType $gPSCoordinates
     * @return \StructType\Header
     */
    public function setGPSCoordinates(\StructType\GPSCoordinatesType $gPSCoordinates = null)
    {
        $this->GPSCoordinates = $gPSCoordinates;
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * Get SecretAPIKey value
     * @return string|null
     */
    public function getSecretAPIKey()
    {
        return $this->SecretAPIKey;
    }
    /**
     * Set SecretAPIKey value
     * @param string $secretAPIKey
     * @return \StructType\Header
     */
    public function setSecretAPIKey($secretAPIKey = null)
    {
        // validation for constraint: string
        if (!is_null($secretAPIKey) && !is_string($secretAPIKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secretAPIKey)), __LINE__);
        }
        $this->SecretAPIKey = $secretAPIKey;
        return $this;
    }
    /**
     * Get MerchName value
     * @return string|null
     */
    public function getMerchName()
    {
        return $this->MerchName;
    }
    /**
     * Set MerchName value
     * @param string $merchName
     * @return \StructType\Header
     */
    public function setMerchName($merchName = null)
    {
        // validation for constraint: string
        if (!is_null($merchName) && !is_string($merchName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchName)), __LINE__);
        }
        $this->MerchName = $merchName;
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * @return \StructType\Header
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
     * Get RspDT value
     * @return string|null
     */
    public function getRspDT()
    {
        return $this->RspDT;
    }
    /**
     * Set RspDT value
     * @param string $rspDT
     * @return \StructType\Header
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
     * Get TokenData value
     * @return \StructType\TokenDataRspType|null
     */
    public function getTokenData()
    {
        return $this->TokenData;
    }
    /**
     * Set TokenData value
     * @param \StructType\TokenDataRspType $tokenData
     * @return \StructType\Header
     */
    public function setTokenData(\StructType\TokenDataRspType $tokenData = null)
    {
        $this->TokenData = $tokenData;
        return $this;
    }
    /**
     * Get PDLNotification value
     * @return string|null
     */
    public function getPDLNotification()
    {
        return $this->PDLNotification;
    }
    /**
     * Set PDLNotification value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pDLNotification
     * @return \StructType\Header
     */
    public function setPDLNotification($pDLNotification = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($pDLNotification)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $pDLNotification, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->PDLNotification = $pDLNotification;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Header
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
