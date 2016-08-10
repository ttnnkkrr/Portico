<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosParameterDownloadRspType StructType
 * @subpackage Structs
 */
class PosParameterDownloadRspType extends AbstractStructBase
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
     * The PDLBlockRsp
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PDLBlockRsp;
    /**
     * The PDLResponse
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PDLResponseType
     */
    public $PDLResponse;
    /**
     * Constructor method for PosParameterDownloadRspType
     * @uses PosParameterDownloadRspType::setRspCode()
     * @uses PosParameterDownloadRspType::setRspText()
     * @uses PosParameterDownloadRspType::setPDLBlockRsp()
     * @uses PosParameterDownloadRspType::setPDLResponse()
     * @param string $rspCode
     * @param string $rspText
     * @param string $pDLBlockRsp
     * @param \StructType\PDLResponseType $pDLResponse
     */
    public function __construct($rspCode = null, $rspText = null, $pDLBlockRsp = null, \StructType\PDLResponseType $pDLResponse = null)
    {
        $this
            ->setRspCode($rspCode)
            ->setRspText($rspText)
            ->setPDLBlockRsp($pDLBlockRsp)
            ->setPDLResponse($pDLResponse);
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
     * @return \StructType\PosParameterDownloadRspType
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
     * @return \StructType\PosParameterDownloadRspType
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
     * Get PDLBlockRsp value
     * @return string|null
     */
    public function getPDLBlockRsp()
    {
        return $this->PDLBlockRsp;
    }
    /**
     * Set PDLBlockRsp value
     * @param string $pDLBlockRsp
     * @return \StructType\PosParameterDownloadRspType
     */
    public function setPDLBlockRsp($pDLBlockRsp = null)
    {
        // validation for constraint: string
        if (!is_null($pDLBlockRsp) && !is_string($pDLBlockRsp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pDLBlockRsp)), __LINE__);
        }
        $this->PDLBlockRsp = $pDLBlockRsp;
        return $this;
    }
    /**
     * Get PDLResponse value
     * @return \StructType\PDLResponseType|null
     */
    public function getPDLResponse()
    {
        return $this->PDLResponse;
    }
    /**
     * Set PDLResponse value
     * @param \StructType\PDLResponseType $pDLResponse
     * @return \StructType\PosParameterDownloadRspType
     */
    public function setPDLResponse(\StructType\PDLResponseType $pDLResponse = null)
    {
        $this->PDLResponse = $pDLResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosParameterDownloadRspType
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
