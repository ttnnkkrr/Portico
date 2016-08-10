<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosCheckVoidRspType StructType
 * @subpackage Structs
 */
class PosCheckVoidRspType extends AbstractStructBase
{
    /**
     * The RspCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $RspCode;
    /**
     * The RspMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RspMessage;
    /**
     * The AuthCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AuthCode;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * The CheckRspInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CheckRspInfoType[]
     */
    public $CheckRspInfo;
    /**
     * Constructor method for PosCheckVoidRspType
     * @uses PosCheckVoidRspType::setRspCode()
     * @uses PosCheckVoidRspType::setRspMessage()
     * @uses PosCheckVoidRspType::setAuthCode()
     * @uses PosCheckVoidRspType::setAdditionalTxnFields()
     * @uses PosCheckVoidRspType::setCheckRspInfo()
     * @param int $rspCode
     * @param string $rspMessage
     * @param string $authCode
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @param \StructType\CheckRspInfoType[] $checkRspInfo
     */
    public function __construct($rspCode = null, $rspMessage = null, $authCode = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null, array $checkRspInfo = array())
    {
        $this
            ->setRspCode($rspCode)
            ->setRspMessage($rspMessage)
            ->setAuthCode($authCode)
            ->setAdditionalTxnFields($additionalTxnFields)
            ->setCheckRspInfo($checkRspInfo);
    }
    /**
     * Get RspCode value
     * @return int
     */
    public function getRspCode()
    {
        return $this->RspCode;
    }
    /**
     * Set RspCode value
     * @param int $rspCode
     * @return \StructType\PosCheckVoidRspType
     */
    public function setRspCode($rspCode = null)
    {
        // validation for constraint: int
        if (!is_null($rspCode) && !is_numeric($rspCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($rspCode)), __LINE__);
        }
        $this->RspCode = $rspCode;
        return $this;
    }
    /**
     * Get RspMessage value
     * @return string|null
     */
    public function getRspMessage()
    {
        return $this->RspMessage;
    }
    /**
     * Set RspMessage value
     * @param string $rspMessage
     * @return \StructType\PosCheckVoidRspType
     */
    public function setRspMessage($rspMessage = null)
    {
        // validation for constraint: string
        if (!is_null($rspMessage) && !is_string($rspMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rspMessage)), __LINE__);
        }
        $this->RspMessage = $rspMessage;
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
     * @return \StructType\PosCheckVoidRspType
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
     * @return \StructType\PosCheckVoidRspType
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Get CheckRspInfo value
     * @return \StructType\CheckRspInfoType[]|null
     */
    public function getCheckRspInfo()
    {
        return $this->CheckRspInfo;
    }
    /**
     * Set CheckRspInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\CheckRspInfoType[] $checkRspInfo
     * @return \StructType\PosCheckVoidRspType
     */
    public function setCheckRspInfo(array $checkRspInfo = array())
    {
        foreach ($checkRspInfo as $posCheckVoidRspTypeCheckRspInfoItem) {
            // validation for constraint: itemType
            if (!$posCheckVoidRspTypeCheckRspInfoItem instanceof \StructType\CheckRspInfoType) {
                throw new \InvalidArgumentException(sprintf('The CheckRspInfo property can only contain items of \StructType\CheckRspInfoType, "%s" given', is_object($posCheckVoidRspTypeCheckRspInfoItem) ? get_class($posCheckVoidRspTypeCheckRspInfoItem) : gettype($posCheckVoidRspTypeCheckRspInfoItem)), __LINE__);
            }
        }
        $this->CheckRspInfo = $checkRspInfo;
        return $this;
    }
    /**
     * Add item to CheckRspInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\CheckRspInfoType $item
     * @return \StructType\PosCheckVoidRspType
     */
    public function addToCheckRspInfo(\StructType\CheckRspInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CheckRspInfoType) {
            throw new \InvalidArgumentException(sprintf('The CheckRspInfo property can only contain items of \StructType\CheckRspInfoType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CheckRspInfo[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosCheckVoidRspType
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
