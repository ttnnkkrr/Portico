<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardAliasReqBlock1Type StructType
 * @subpackage Structs
 */
class GiftCardAliasReqBlock1Type extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Action;
    /**
     * The CardData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GiftCardDataType
     */
    public $CardData;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * Constructor method for GiftCardAliasReqBlock1Type
     * @uses GiftCardAliasReqBlock1Type::setAction()
     * @uses GiftCardAliasReqBlock1Type::setCardData()
     * @uses GiftCardAliasReqBlock1Type::setAlias()
     * @param string $action
     * @param \StructType\GiftCardDataType $cardData
     * @param string $alias
     */
    public function __construct($action = null, \StructType\GiftCardDataType $cardData = null, $alias = null)
    {
        $this
            ->setAction($action)
            ->setCardData($cardData)
            ->setAlias($alias);
    }
    /**
     * Get Action value
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @uses \EnumType\Action::valueIsValid()
     * @uses \EnumType\Action::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $action
     * @return \StructType\GiftCardAliasReqBlock1Type
     */
    public function setAction($action = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Action::valueIsValid($action)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $action, implode(', ', \EnumType\Action::getValidValues())), __LINE__);
        }
        $this->Action = $action;
        return $this;
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
     * @return \StructType\GiftCardAliasReqBlock1Type
     */
    public function setCardData(\StructType\GiftCardDataType $cardData = null)
    {
        $this->CardData = $cardData;
        return $this;
    }
    /**
     * Get Alias value
     * @return string|null
     */
    public function getAlias()
    {
        return $this->Alias;
    }
    /**
     * Set Alias value
     * @param string $alias
     * @return \StructType\GiftCardAliasReqBlock1Type
     */
    public function setAlias($alias = null)
    {
        // validation for constraint: string
        if (!is_null($alias) && !is_string($alias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alias)), __LINE__);
        }
        $this->Alias = $alias;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardAliasReqBlock1Type
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
