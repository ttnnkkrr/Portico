<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosReportTxnDetailRspType StructType
 * @subpackage Structs
 */
class PosReportTxnDetailRspType extends AbstractStructBase
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
     * The SiteId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SiteId;
    /**
     * The DeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DeviceId;
    /**
     * The GatewayRspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $GatewayRspCode;
    /**
     * The ReqUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReqUtcDT;
    /**
     * The ReqDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReqDT;
    /**
     * The RspUtcDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RspUtcDT;
    /**
     * The RspDT
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RspDT;
    /**
     * The OriginalGatewayTxnId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OriginalGatewayTxnId;
    /**
     * The TermOrdinal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TermOrdinal;
    /**
     * The TzConversion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $TzConversion;
    /**
     * The MerchName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchName;
    /**
     * The UserName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UserName;
    /**
     * The ServiceName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServiceName;
    /**
     * The GatewayRspMsg
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GatewayRspMsg;
    /**
     * The SiteTrace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SiteTrace;
    /**
     * The MerchNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchNbr;
    /**
     * The MerchAddr1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchAddr1;
    /**
     * The MerchAddr2
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchAddr2;
    /**
     * The MerchCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchCity;
    /**
     * The MerchState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchState;
    /**
     * The MerchZip
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchZip;
    /**
     * The MerchPhone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MerchPhone;
    /**
     * The UniqueDeviceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $UniqueDeviceId;
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Data
     */
    public $Data;
    /**
     * Constructor method for PosReportTxnDetailRspType
     * @uses PosReportTxnDetailRspType::setGatewayTxnId()
     * @uses PosReportTxnDetailRspType::setClientTxnId()
     * @uses PosReportTxnDetailRspType::setSiteId()
     * @uses PosReportTxnDetailRspType::setDeviceId()
     * @uses PosReportTxnDetailRspType::setGatewayRspCode()
     * @uses PosReportTxnDetailRspType::setReqUtcDT()
     * @uses PosReportTxnDetailRspType::setReqDT()
     * @uses PosReportTxnDetailRspType::setRspUtcDT()
     * @uses PosReportTxnDetailRspType::setRspDT()
     * @uses PosReportTxnDetailRspType::setOriginalGatewayTxnId()
     * @uses PosReportTxnDetailRspType::setTermOrdinal()
     * @uses PosReportTxnDetailRspType::setTzConversion()
     * @uses PosReportTxnDetailRspType::setMerchName()
     * @uses PosReportTxnDetailRspType::setUserName()
     * @uses PosReportTxnDetailRspType::setServiceName()
     * @uses PosReportTxnDetailRspType::setGatewayRspMsg()
     * @uses PosReportTxnDetailRspType::setSiteTrace()
     * @uses PosReportTxnDetailRspType::setMerchNbr()
     * @uses PosReportTxnDetailRspType::setMerchAddr1()
     * @uses PosReportTxnDetailRspType::setMerchAddr2()
     * @uses PosReportTxnDetailRspType::setMerchCity()
     * @uses PosReportTxnDetailRspType::setMerchState()
     * @uses PosReportTxnDetailRspType::setMerchZip()
     * @uses PosReportTxnDetailRspType::setMerchPhone()
     * @uses PosReportTxnDetailRspType::setUniqueDeviceId()
     * @uses PosReportTxnDetailRspType::setData()
     * @param int $gatewayTxnId
     * @param int $clientTxnId
     * @param int $siteId
     * @param int $deviceId
     * @param int $gatewayRspCode
     * @param string $reqUtcDT
     * @param string $reqDT
     * @param string $rspUtcDT
     * @param string $rspDT
     * @param int $originalGatewayTxnId
     * @param int $termOrdinal
     * @param string $tzConversion
     * @param string $merchName
     * @param string $userName
     * @param string $serviceName
     * @param string $gatewayRspMsg
     * @param string $siteTrace
     * @param string $merchNbr
     * @param string $merchAddr1
     * @param string $merchAddr2
     * @param string $merchCity
     * @param string $merchState
     * @param string $merchZip
     * @param string $merchPhone
     * @param string $uniqueDeviceId
     * @param \StructType\Data $data
     */
    public function __construct($gatewayTxnId = null, $clientTxnId = null, $siteId = null, $deviceId = null, $gatewayRspCode = null, $reqUtcDT = null, $reqDT = null, $rspUtcDT = null, $rspDT = null, $originalGatewayTxnId = null, $termOrdinal = null, $tzConversion = null, $merchName = null, $userName = null, $serviceName = null, $gatewayRspMsg = null, $siteTrace = null, $merchNbr = null, $merchAddr1 = null, $merchAddr2 = null, $merchCity = null, $merchState = null, $merchZip = null, $merchPhone = null, $uniqueDeviceId = null, \StructType\Data $data = null)
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setClientTxnId($clientTxnId)
            ->setSiteId($siteId)
            ->setDeviceId($deviceId)
            ->setGatewayRspCode($gatewayRspCode)
            ->setReqUtcDT($reqUtcDT)
            ->setReqDT($reqDT)
            ->setRspUtcDT($rspUtcDT)
            ->setRspDT($rspDT)
            ->setOriginalGatewayTxnId($originalGatewayTxnId)
            ->setTermOrdinal($termOrdinal)
            ->setTzConversion($tzConversion)
            ->setMerchName($merchName)
            ->setUserName($userName)
            ->setServiceName($serviceName)
            ->setGatewayRspMsg($gatewayRspMsg)
            ->setSiteTrace($siteTrace)
            ->setMerchNbr($merchNbr)
            ->setMerchAddr1($merchAddr1)
            ->setMerchAddr2($merchAddr2)
            ->setMerchCity($merchCity)
            ->setMerchState($merchState)
            ->setMerchZip($merchZip)
            ->setMerchPhone($merchPhone)
            ->setUniqueDeviceId($uniqueDeviceId)
            ->setData($data);
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * Get SiteId value
     * @return int
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }
    /**
     * Set SiteId value
     * @param int $siteId
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setSiteId($siteId = null)
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
     * @return int
     */
    public function getDeviceId()
    {
        return $this->DeviceId;
    }
    /**
     * Set DeviceId value
     * @param int $deviceId
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * Get ReqUtcDT value
     * @return string
     */
    public function getReqUtcDT()
    {
        return $this->ReqUtcDT;
    }
    /**
     * Set ReqUtcDT value
     * @param string $reqUtcDT
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setReqUtcDT($reqUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($reqUtcDT) && !is_string($reqUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqUtcDT)), __LINE__);
        }
        $this->ReqUtcDT = $reqUtcDT;
        return $this;
    }
    /**
     * Get ReqDT value
     * @return string
     */
    public function getReqDT()
    {
        return $this->ReqDT;
    }
    /**
     * Set ReqDT value
     * @param string $reqDT
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setReqDT($reqDT = null)
    {
        // validation for constraint: string
        if (!is_null($reqDT) && !is_string($reqDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reqDT)), __LINE__);
        }
        $this->ReqDT = $reqDT;
        return $this;
    }
    /**
     * Get RspUtcDT value
     * @return string
     */
    public function getRspUtcDT()
    {
        return $this->RspUtcDT;
    }
    /**
     * Set RspUtcDT value
     * @param string $rspUtcDT
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setRspUtcDT($rspUtcDT = null)
    {
        // validation for constraint: string
        if (!is_null($rspUtcDT) && !is_string($rspUtcDT)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspUtcDT)), __LINE__);
        }
        $this->RspUtcDT = $rspUtcDT;
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * Get TermOrdinal value
     * @return int
     */
    public function getTermOrdinal()
    {
        return $this->TermOrdinal;
    }
    /**
     * Set TermOrdinal value
     * @param int $termOrdinal
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setTermOrdinal($termOrdinal = null)
    {
        // validation for constraint: int
        if (!is_null($termOrdinal) && !is_numeric($termOrdinal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($termOrdinal)), __LINE__);
        }
        $this->TermOrdinal = $termOrdinal;
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * Get MerchNbr value
     * @return string|null
     */
    public function getMerchNbr()
    {
        return $this->MerchNbr;
    }
    /**
     * Set MerchNbr value
     * @param string $merchNbr
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchNbr($merchNbr = null)
    {
        // validation for constraint: string
        if (!is_null($merchNbr) && !is_string($merchNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchNbr)), __LINE__);
        }
        $this->MerchNbr = $merchNbr;
        return $this;
    }
    /**
     * Get MerchAddr1 value
     * @return string|null
     */
    public function getMerchAddr1()
    {
        return $this->MerchAddr1;
    }
    /**
     * Set MerchAddr1 value
     * @param string $merchAddr1
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchAddr1($merchAddr1 = null)
    {
        // validation for constraint: string
        if (!is_null($merchAddr1) && !is_string($merchAddr1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchAddr1)), __LINE__);
        }
        $this->MerchAddr1 = $merchAddr1;
        return $this;
    }
    /**
     * Get MerchAddr2 value
     * @return string|null
     */
    public function getMerchAddr2()
    {
        return $this->MerchAddr2;
    }
    /**
     * Set MerchAddr2 value
     * @param string $merchAddr2
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchAddr2($merchAddr2 = null)
    {
        // validation for constraint: string
        if (!is_null($merchAddr2) && !is_string($merchAddr2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchAddr2)), __LINE__);
        }
        $this->MerchAddr2 = $merchAddr2;
        return $this;
    }
    /**
     * Get MerchCity value
     * @return string|null
     */
    public function getMerchCity()
    {
        return $this->MerchCity;
    }
    /**
     * Set MerchCity value
     * @param string $merchCity
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchCity($merchCity = null)
    {
        // validation for constraint: string
        if (!is_null($merchCity) && !is_string($merchCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchCity)), __LINE__);
        }
        $this->MerchCity = $merchCity;
        return $this;
    }
    /**
     * Get MerchState value
     * @return string|null
     */
    public function getMerchState()
    {
        return $this->MerchState;
    }
    /**
     * Set MerchState value
     * @param string $merchState
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchState($merchState = null)
    {
        // validation for constraint: string
        if (!is_null($merchState) && !is_string($merchState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchState)), __LINE__);
        }
        $this->MerchState = $merchState;
        return $this;
    }
    /**
     * Get MerchZip value
     * @return string|null
     */
    public function getMerchZip()
    {
        return $this->MerchZip;
    }
    /**
     * Set MerchZip value
     * @param string $merchZip
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchZip($merchZip = null)
    {
        // validation for constraint: string
        if (!is_null($merchZip) && !is_string($merchZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchZip)), __LINE__);
        }
        $this->MerchZip = $merchZip;
        return $this;
    }
    /**
     * Get MerchPhone value
     * @return string|null
     */
    public function getMerchPhone()
    {
        return $this->MerchPhone;
    }
    /**
     * Set MerchPhone value
     * @param string $merchPhone
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setMerchPhone($merchPhone = null)
    {
        // validation for constraint: string
        if (!is_null($merchPhone) && !is_string($merchPhone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($merchPhone)), __LINE__);
        }
        $this->MerchPhone = $merchPhone;
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
     * @return \StructType\PosReportTxnDetailRspType
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
     * Get Data value
     * @return \StructType\Data|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \StructType\Data $data
     * @return \StructType\PosReportTxnDetailRspType
     */
    public function setData(\StructType\Data $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosReportTxnDetailRspType
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
