<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePaidBalanceInquiryReqBlock1Type StructType
 * @subpackage Structs
 */
class PrePaidBalanceInquiryReqBlock1Type extends AbstractStructBase
{
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardDataType
     */
    public $CardData;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
    /**
     * Constructor method for PrePaidBalanceInquiryReqBlock1Type
     * @uses PrePaidBalanceInquiryReqBlock1Type::setCardData()
     * @uses PrePaidBalanceInquiryReqBlock1Type::setCardHolderData()
     * @param \StructType\CardDataType $cardData
     * @param \StructType\CardHolderDataType $cardHolderData
     */
    public function __construct(\StructType\CardDataType $cardData = null, \StructType\CardHolderDataType $cardHolderData = null)
    {
        $this
            ->setCardData($cardData)
            ->setCardHolderData($cardHolderData);
    }
    /**
     * Get CardData value
     * @return \StructType\CardDataType|null
     */
    public function getCardData()
    {
        return $this->CardData;
    }
    /**
     * Set CardData value
     * @param \StructType\CardDataType $cardData
     * @return \StructType\PrePaidBalanceInquiryReqBlock1Type
     */
    public function setCardData(\StructType\CardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get CardHolderData value
     * @return \StructType\CardHolderDataType|null
     */
    public function getCardHolderData()
    {
        return $this->CardHolderData;
    }
    /**
     * Set CardHolderData value
     * @param \StructType\CardHolderDataType $cardHolderData
     * @return \StructType\PrePaidBalanceInquiryReqBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PrePaidBalanceInquiryReqBlock1Type
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
