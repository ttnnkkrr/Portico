<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingDataType StructType
 * @subpackage Structs
 */
class LodgingDataType extends AbstractStructBase
{
    /**
     * The PrestigiousPropertyLimit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PrestigiousPropertyLimit;
    /**
     * The NoShow
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $NoShow;
    /**
     * The AdvancedDepositType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdvancedDepositType;
    /**
     * The LodgingDataEdit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\LodgingDataEditType
     */
    public $LodgingDataEdit;
    /**
     * The PreferredCustomer
     * Meta informations extracted from the WSDL
     * - default: N
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PreferredCustomer;
    /**
     * Constructor method for LodgingDataType
     * @uses LodgingDataType::setPrestigiousPropertyLimit()
     * @uses LodgingDataType::setNoShow()
     * @uses LodgingDataType::setAdvancedDepositType()
     * @uses LodgingDataType::setLodgingDataEdit()
     * @uses LodgingDataType::setPreferredCustomer()
     * @param string $prestigiousPropertyLimit
     * @param string $noShow
     * @param string $advancedDepositType
     * @param \StructType\LodgingDataEditType $lodgingDataEdit
     * @param string $preferredCustomer
     */
    public function __construct($prestigiousPropertyLimit = null, $noShow = 'N', $advancedDepositType = null, \StructType\LodgingDataEditType $lodgingDataEdit = null, $preferredCustomer = 'N')
    {
        $this
            ->setPrestigiousPropertyLimit($prestigiousPropertyLimit)
            ->setNoShow($noShow)
            ->setAdvancedDepositType($advancedDepositType)
            ->setLodgingDataEdit($lodgingDataEdit)
            ->setPreferredCustomer($preferredCustomer);
    }
    /**
     * Get PrestigiousPropertyLimit value
     * @return string|null
     */
    public function getPrestigiousPropertyLimit()
    {
        return $this->PrestigiousPropertyLimit;
    }
    /**
     * Set PrestigiousPropertyLimit value
     * @uses \EnumType\PrestigiousPropertyType::valueIsValid()
     * @uses \EnumType\PrestigiousPropertyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $prestigiousPropertyLimit
     * @return \StructType\LodgingDataType
     */
    public function setPrestigiousPropertyLimit($prestigiousPropertyLimit = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PrestigiousPropertyType::valueIsValid($prestigiousPropertyLimit)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $prestigiousPropertyLimit, implode(', ', \EnumType\PrestigiousPropertyType::getValidValues())), __LINE__);
        }
        $this->PrestigiousPropertyLimit = $prestigiousPropertyLimit;
        return $this;
    }
    /**
     * Get NoShow value
     * @return string|null
     */
    public function getNoShow()
    {
        return $this->NoShow;
    }
    /**
     * Set NoShow value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $noShow
     * @return \StructType\LodgingDataType
     */
    public function setNoShow($noShow = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($noShow)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $noShow, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->NoShow = $noShow;
        return $this;
    }
    /**
     * Get AdvancedDepositType value
     * @return string|null
     */
    public function getAdvancedDepositType()
    {
        return $this->AdvancedDepositType;
    }
    /**
     * Set AdvancedDepositType value
     * @uses \EnumType\AdvancedDepositTypeType::valueIsValid()
     * @uses \EnumType\AdvancedDepositTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $advancedDepositType
     * @return \StructType\LodgingDataType
     */
    public function setAdvancedDepositType($advancedDepositType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AdvancedDepositTypeType::valueIsValid($advancedDepositType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $advancedDepositType, implode(', ', \EnumType\AdvancedDepositTypeType::getValidValues())), __LINE__);
        }
        $this->AdvancedDepositType = $advancedDepositType;
        return $this;
    }
    /**
     * Get LodgingDataEdit value
     * @return \StructType\LodgingDataEditType|null
     */
    public function getLodgingDataEdit()
    {
        return $this->LodgingDataEdit;
    }
    /**
     * Set LodgingDataEdit value
     * @param \StructType\LodgingDataEditType $lodgingDataEdit
     * @return \StructType\LodgingDataType
     */
    public function setLodgingDataEdit(\StructType\LodgingDataEditType $lodgingDataEdit = null)
    {
        $this->LodgingDataEdit = $lodgingDataEdit;
        return $this;
    }
    /**
     * Get PreferredCustomer value
     * @return string|null
     */
    public function getPreferredCustomer()
    {
        return $this->PreferredCustomer;
    }
    /**
     * Set PreferredCustomer value
     * @uses \EnumType\BooleanType::valueIsValid()
     * @uses \EnumType\BooleanType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $preferredCustomer
     * @return \StructType\LodgingDataType
     */
    public function setPreferredCustomer($preferredCustomer = 'N')
    {
        // validation for constraint: enumeration
        if (!\EnumType\BooleanType::valueIsValid($preferredCustomer)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $preferredCustomer, implode(', ', \EnumType\BooleanType::getValidValues())), __LINE__);
        }
        $this->PreferredCustomer = $preferredCustomer;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LodgingDataType
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
