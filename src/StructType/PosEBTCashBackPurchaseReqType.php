<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosEBTCashBackPurchaseReqType StructType
 * @subpackage Structs
 */
class PosEBTCashBackPurchaseReqType extends AbstractStructBase
{
    /**
     * The Block1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EBTCashBackPurchaseReqBlock1Type
     */
    public $Block1;
    /**
     * Constructor method for PosEBTCashBackPurchaseReqType
     * @uses PosEBTCashBackPurchaseReqType::setBlock1()
     * @param \StructType\EBTCashBackPurchaseReqBlock1Type $block1
     */
    public function __construct(\StructType\EBTCashBackPurchaseReqBlock1Type $block1 = null)
    {
        $this
            ->setBlock1($block1);
    }
    /**
     * Get Block1 value
     * @return \StructType\EBTCashBackPurchaseReqBlock1Type|null
     */
    public function getBlock1()
    {
        return $this->Block1;
    }
    /**
     * Set Block1 value
     * @param \StructType\EBTCashBackPurchaseReqBlock1Type $block1
     * @return \StructType\PosEBTCashBackPurchaseReqType
     */
    public function setBlock1(\StructType\EBTCashBackPurchaseReqBlock1Type $block1 = null)
    {
        $this->Block1 = $block1;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PosEBTCashBackPurchaseReqType
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
