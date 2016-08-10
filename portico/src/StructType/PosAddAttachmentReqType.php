<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosAddAttachmentReqType StructType
 * @subpackage Structs
 */
class PosAddAttachmentReqType extends AbstractStructBase
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
     * The Block1
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AttachmentDataType[]
     */
    public $Block1;
    /**
     * Constructor method for PosAddAttachmentReqType
     * @uses PosAddAttachmentReqType::setGatewayTxnId()
     * @uses PosAddAttachmentReqType::setBlock1()
     * @param int $gatewayTxnId
     * @param \StructType\AttachmentDataType[] $block1
     */
    public function __construct($gatewayTxnId = null, array $block1 = array())
    {
        $this
            ->setGatewayTxnId($gatewayTxnId)
            ->setBlock1($block1);
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
     * @return \StructType\PosAddAttachmentReqType
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
     * Get Block1 value
     * @return \StructType\AttachmentDataType[]|null
     */
    public function getBlock1()
    {
        return $this->Block1;
    }
    /**
     * Set Block1 value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentDataType[] $block1
     * @return \StructType\PosAddAttachmentReqType
     */
    public function setBlock1(array $block1 = array())
    {
        foreach ($block1 as $posAddAttachmentReqTypeBlock1Item) {
            // validation for constraint: itemType
            if (!$posAddAttachmentReqTypeBlock1Item instanceof \StructType\AttachmentDataType) {
                throw new \InvalidArgumentException(sprintf('The Block1 property can only contain items of \StructType\AttachmentDataType, "%s" given', is_object($posAddAttachmentReqTypeBlock1Item) ? get_class($posAddAttachmentReqTypeBlock1Item) : gettype($posAddAttachmentReqTypeBlock1Item)), __LINE__);
            }
        }
        $this->Block1 = $block1;
        return $this;
    }
    /**
     * Add item to Block1 value
     * @throws \InvalidArgumentException
     * @param \StructType\AttachmentDataType $item
     * @return \StructType\PosAddAttachmentReqType
     */
    public function addToBlock1(\StructType\AttachmentDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AttachmentDataType) {
            throw new \InvalidArgumentException(sprintf('The Block1 property can only contain items of \StructType\AttachmentDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Block1[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosAddAttachmentReqType
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
