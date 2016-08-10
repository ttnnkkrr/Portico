<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtraChargesDataType StructType
 * @subpackage Structs
 */
class ExtraChargesDataType extends AbstractStructBase
{
    /**
     * The Restaurant
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Restaurant;
    /**
     * The GiftShop
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GiftShop;
    /**
     * The MiniBar
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MiniBar;
    /**
     * The Telephone
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Telephone;
    /**
     * The Other
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Other;
    /**
     * The Laundry
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Laundry;
    /**
     * Constructor method for ExtraChargesDataType
     * @uses ExtraChargesDataType::setRestaurant()
     * @uses ExtraChargesDataType::setGiftShop()
     * @uses ExtraChargesDataType::setMiniBar()
     * @uses ExtraChargesDataType::setTelephone()
     * @uses ExtraChargesDataType::setOther()
     * @uses ExtraChargesDataType::setLaundry()
     * @param string $restaurant
     * @param string $giftShop
     * @param string $miniBar
     * @param string $telephone
     * @param string $other
     * @param string $laundry
     */
    public function __construct($restaurant = 'N', $giftShop = 'N', $miniBar = 'N', $telephone = 'N', $other = 'N', $laundry = 'N')
    {
        $this
            ->setRestaurant($restaurant)
            ->setGiftShop($giftShop)
            ->setMiniBar($miniBar)
            ->setTelephone($telephone)
            ->setOther($other)
            ->setLaundry($laundry);
    }
    /**
     * Get Restaurant value
     * @return string|null
     */
    public function getRestaurant()
    {
        return $this->Restaurant;
    }
    /**
     * Set Restaurant value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $restaurant
     * @return \StructType\ExtraChargesDataType
     */
    public function setRestaurant($restaurant = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($restaurant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $restaurant, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Restaurant = $restaurant;
        return $this;
    }
    /**
     * Get GiftShop value
     * @return string|null
     */
    public function getGiftShop()
    {
        return $this->GiftShop;
    }
    /**
     * Set GiftShop value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $giftShop
     * @return \StructType\ExtraChargesDataType
     */
    public function setGiftShop($giftShop = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($giftShop)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $giftShop, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->GiftShop = $giftShop;
        return $this;
    }
    /**
     * Get MiniBar value
     * @return string|null
     */
    public function getMiniBar()
    {
        return $this->MiniBar;
    }
    /**
     * Set MiniBar value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $miniBar
     * @return \StructType\ExtraChargesDataType
     */
    public function setMiniBar($miniBar = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($miniBar)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $miniBar, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->MiniBar = $miniBar;
        return $this;
    }
    /**
     * Get Telephone value
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }
    /**
     * Set Telephone value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $telephone
     * @return \StructType\ExtraChargesDataType
     */
    public function setTelephone($telephone = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($telephone)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $telephone, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Telephone = $telephone;
        return $this;
    }
    /**
     * Get Other value
     * @return string|null
     */
    public function getOther()
    {
        return $this->Other;
    }
    /**
     * Set Other value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $other
     * @return \StructType\ExtraChargesDataType
     */
    public function setOther($other = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($other)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $other, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Other = $other;
        return $this;
    }
    /**
     * Get Laundry value
     * @return string|null
     */
    public function getLaundry()
    {
        return $this->Laundry;
    }
    /**
     * Set Laundry value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $laundry
     * @return \StructType\ExtraChargesDataType
     */
    public function setLaundry($laundry = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($laundry)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $laundry, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->Laundry = $laundry;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ExtraChargesDataType
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
