<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CashSaleReqBlock1Type StructType
 * @subpackage Structs
 */
class CashSaleReqBlock1Type extends AbstractStructBase
{
    /**
     * The Amt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $Amt;
    /**
     * The CardHolderData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\CardHolderDataType
     */
    public $CardHolderData;
    /**
     * The GratuityAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $GratuityAmtInfo;
    /**
     * The ShippingAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ShippingAmtInfo;
    /**
     * The TaxAmtInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $TaxAmtInfo;
    /**
     * The AdditionalTxnFields
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\AdditionalTxnFieldsType
     */
    public $AdditionalTxnFields;
    /**
     * Constructor method for CashSaleReqBlock1Type
     * @uses CashSaleReqBlock1Type::setAmt()
     * @uses CashSaleReqBlock1Type::setCardHolderData()
     * @uses CashSaleReqBlock1Type::setGratuityAmtInfo()
     * @uses CashSaleReqBlock1Type::setShippingAmtInfo()
     * @uses CashSaleReqBlock1Type::setTaxAmtInfo()
     * @uses CashSaleReqBlock1Type::setAdditionalTxnFields()
     * @param float $amt
     * @param \StructType\CardHolderDataType $cardHolderData
     * @param float $gratuityAmtInfo
     * @param float $shippingAmtInfo
     * @param float $taxAmtInfo
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     */
    public function __construct($amt = null, \StructType\CardHolderDataType $cardHolderData = null, $gratuityAmtInfo = null, $shippingAmtInfo = null, $taxAmtInfo = null, \StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this
            ->setAmt($amt)
            ->setCardHolderData($cardHolderData)
            ->setGratuityAmtInfo($gratuityAmtInfo)
            ->setShippingAmtInfo($shippingAmtInfo)
            ->setTaxAmtInfo($taxAmtInfo)
            ->setAdditionalTxnFields($additionalTxnFields);
    }
    /**
     * Get Amt value
     * @return float
     */
    public function getAmt()
    {
        return $this->Amt;
    }
    /**
     * Set Amt value
     * @param float $amt
     * @return \StructType\CashSaleReqBlock1Type
     */
    public function setAmt($amt = null)
    {
        $this->Amt = $amt;
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
     * @return \StructType\CashSaleReqBlock1Type
     */
    public function setCardHolderData(\StructType\CardHolderDataType $cardHolderData = null)
    {
        $this->CardHolderData = $cardHolderData;
        return $this;
    }
    /**
     * Get GratuityAmtInfo value
     * @return float|null
     */
    public function getGratuityAmtInfo()
    {
        return $this->GratuityAmtInfo;
    }
    /**
     * Set GratuityAmtInfo value
     * @param float $gratuityAmtInfo
     * @return \StructType\CashSaleReqBlock1Type
     */
    public function setGratuityAmtInfo($gratuityAmtInfo = null)
    {
        $this->GratuityAmtInfo = $gratuityAmtInfo;
        return $this;
    }
    /**
     * Get ShippingAmtInfo value
     * @return float|null
     */
    public function getShippingAmtInfo()
    {
        return $this->ShippingAmtInfo;
    }
    /**
     * Set ShippingAmtInfo value
     * @param float $shippingAmtInfo
     * @return \StructType\CashSaleReqBlock1Type
     */
    public function setShippingAmtInfo($shippingAmtInfo = null)
    {
        $this->ShippingAmtInfo = $shippingAmtInfo;
        return $this;
    }
    /**
     * Get TaxAmtInfo value
     * @return float|null
     */
    public function getTaxAmtInfo()
    {
        return $this->TaxAmtInfo;
    }
    /**
     * Set TaxAmtInfo value
     * @param float $taxAmtInfo
     * @return \StructType\CashSaleReqBlock1Type
     */
    public function setTaxAmtInfo($taxAmtInfo = null)
    {
        $this->TaxAmtInfo = $taxAmtInfo;
        return $this;
    }
    /**
     * Get AdditionalTxnFields value
     * @return \StructType\AdditionalTxnFieldsType|null
     */
    public function getAdditionalTxnFields()
    {
        return $this->AdditionalTxnFields;
    }
    /**
     * Set AdditionalTxnFields value
     * @param \StructType\AdditionalTxnFieldsType $additionalTxnFields
     * @return \StructType\CashSaleReqBlock1Type
     */
    public function setAdditionalTxnFields(\StructType\AdditionalTxnFieldsType $additionalTxnFields = null)
    {
        $this->AdditionalTxnFields = $additionalTxnFields;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CashSaleReqBlock1Type
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
