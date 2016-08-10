<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PosGiftCardAliasReqType StructType
 * @subpackage Structs
 */
class PosGiftCardAliasReqType extends AbstractStructBase
{
    /**
     * The Block1
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardAliasReqBlock1Type
     */
    public $Block1;
    /**
     * Constructor method for PosGiftCardAliasReqType
     * @uses PosGiftCardAliasReqType::setBlock1()
     * @param \StructType\GiftCardAliasReqBlock1Type $block1
     */
    public function __construct(\StructType\GiftCardAliasReqBlock1Type $block1 = null)
    {
        $this
            ->setBlock1($block1);
    }
    /**
     * Get Block1 value
     * @return \StructType\GiftCardAliasReqBlock1Type|null
     */
    public function getBlock1()
    {
        return $this->Block1;
    }
    /**
     * Set Block1 value
     * @param \StructType\GiftCardAliasReqBlock1Type $block1
     * @return \StructType\PosGiftCardAliasReqType
     */
    public function setBlock1(\StructType\GiftCardAliasReqBlock1Type $block1 = null)
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
     * @return \StructType\PosGiftCardAliasReqType
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
