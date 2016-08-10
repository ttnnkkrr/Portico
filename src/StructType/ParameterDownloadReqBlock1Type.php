<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParameterDownloadReqBlock1Type StructType
 * @subpackage Structs
 */
class ParameterDownloadReqBlock1Type extends AbstractStructBase
{
    /**
     * The PDLBlockReq
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PDLBlockReq;
    /**
     * The PDLRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PDLRequestType
     */
    public $PDLRequest;
    /**
     * Constructor method for ParameterDownloadReqBlock1Type
     * @uses ParameterDownloadReqBlock1Type::setPDLBlockReq()
     * @uses ParameterDownloadReqBlock1Type::setPDLRequest()
     * @param string $pDLBlockReq
     * @param \StructType\PDLRequestType $pDLRequest
     */
    public function __construct($pDLBlockReq = null, \StructType\PDLRequestType $pDLRequest = null)
    {
        $this
            ->setPDLBlockReq($pDLBlockReq)
            ->setPDLRequest($pDLRequest);
    }
    /**
     * Get PDLBlockReq value
     * @return string|null
     */
    public function getPDLBlockReq()
    {
        return $this->PDLBlockReq;
    }
    /**
     * Set PDLBlockReq value
     * @param string $pDLBlockReq
     * @return \StructType\ParameterDownloadReqBlock1Type
     */
    public function setPDLBlockReq($pDLBlockReq = null)
    {
        // validation for constraint: string
        if (!is_null($pDLBlockReq) && !is_string($pDLBlockReq)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pDLBlockReq)), __LINE__);
        }
        $this->PDLBlockReq = $pDLBlockReq;
        return $this;
    }
    /**
     * Get PDLRequest value
     * @return \StructType\PDLRequestType|null
     */
    public function getPDLRequest()
    {
        return $this->PDLRequest;
    }
    /**
     * Set PDLRequest value
     * @param \StructType\PDLRequestType $pDLRequest
     * @return \StructType\ParameterDownloadReqBlock1Type
     */
    public function setPDLRequest(\StructType\PDLRequestType $pDLRequest = null)
    {
        $this->PDLRequest = $pDLRequest;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ParameterDownloadReqBlock1Type
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
