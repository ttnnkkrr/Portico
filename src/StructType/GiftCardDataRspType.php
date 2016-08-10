<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GiftCardDataRspType StructType
 * @subpackage Structs
 */
class GiftCardDataRspType extends AbstractStructBase
{
    /**
     * The CardNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CardNbr;
    /**
     * The Alias
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Alias;
    /**
     * The PIN
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PIN;
    /**
     * Constructor method for GiftCardDataRspType
     * @uses GiftCardDataRspType::setCardNbr()
     * @uses GiftCardDataRspType::setAlias()
     * @uses GiftCardDataRspType::setPIN()
     * @param string $cardNbr
     * @param string $alias
     * @param string $pIN
     */
    public function __construct($cardNbr = null, $alias = null, $pIN = null)
    {
        $this
            ->setCardNbr($cardNbr)
            ->setAlias($alias)
            ->setPIN($pIN);
    }
    /**
     * Get CardNbr value
     * @return string|null
     */
    public function getCardNbr()
    {
        return $this->CardNbr;
    }
    /**
     * Set CardNbr value
     * @param string $cardNbr
     * @return \StructType\GiftCardDataRspType
     */
    public function setCardNbr($cardNbr = null)
    {
        // validation for constraint: string
        if (!is_null($cardNbr) && !is_string($cardNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cardNbr)), __LINE__);
        }
        $this->CardNbr = $cardNbr;
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
     * @return \StructType\GiftCardDataRspType
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
     * Get PIN value
     * @return string|null
     */
    public function getPIN()
    {
        return $this->PIN;
    }
    /**
     * Set PIN value
     * @param string $pIN
     * @return \StructType\GiftCardDataRspType
     */
    public function setPIN($pIN = null)
    {
        // validation for constraint: string
        if (!is_null($pIN) && !is_string($pIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pIN)), __LINE__);
        }
        $this->PIN = $pIN;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\GiftCardDataRspType
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
