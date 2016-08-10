<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardDeactivateReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardDeactivateReqBlock1Type extends AbstractStructBase
{
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardDataType
     */
    public $CardData;
    /**
     * Constructor method for GiftCardDeactivateReqBlock1Type
     * @uses GiftCardDeactivateReqBlock1Type::setCardData()
     * @param \StructType\GiftCardDataType $cardData
     */
    public function __construct(\StructType\GiftCardDataType $cardData = null)
    {
        $this
            ->setCardData($cardData);
    }
    /**
     * Get CardData value
     * @return \StructType\GiftCardDataType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\GiftCardDataType $cardData
     * @return \StructType\GiftCardDeactivateReqBlock1Type
     */
    public function setCardData(\StructType\GiftCardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardDeactivateReqBlock1Type
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
