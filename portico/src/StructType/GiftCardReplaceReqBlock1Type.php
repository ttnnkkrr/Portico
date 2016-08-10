<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardReplaceReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardReplaceReqBlock1Type extends AbstractStructBase
{
    /**
     * The OldCardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardDataType
     */
    public $OldCardData;
    /**
     * The NewCardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardDataType
     */
    public $NewCardData;
    /**
     * Constructor method for GiftCardReplaceReqBlock1Type
     * @uses GiftCardReplaceReqBlock1Type::setOldCardData()
     * @uses GiftCardReplaceReqBlock1Type::setNewCardData()
     * @param \StructType\GiftCardDataType $oldCardData
     * @param \StructType\GiftCardDataType $newCardData
     */
    public function __construct(\StructType\GiftCardDataType $oldCardData = null, \StructType\GiftCardDataType $newCardData = null)
    {
        $this
            ->setOldCardData($oldCardData)
            ->setNewCardData($newCardData);
    }
    /**
     * Get OldCardData value
     * @return \StructType\GiftCardDataType|null
     */
    public function getOldCardData()
    {
        return $this->OldCardData;
    }
    /**
     * Set OldCardData value
     * @param \StructType\GiftCardDataType $oldCardData
     * @return \StructType\GiftCardReplaceReqBlock1Type
     */
    public function setOldCardData(\StructType\GiftCardDataType $oldCardData = null)
    {
        $this->OldCardData = $oldCardData;
        return $this;
    }
    /**
     * Get NewCardData value
     * @return \StructType\GiftCardDataType|null
     */
    public function getNewCardData()
    {
        return $this->NewCardData;
    }
    /**
     * Set NewCardData value
     * @param \StructType\GiftCardDataType $newCardData
     * @return \StructType\GiftCardReplaceReqBlock1Type
     */
    public function setNewCardData(\StructType\GiftCardDataType $newCardData = null)
    {
        $this->NewCardData = $newCardData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardReplaceReqBlock1Type
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
