<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalTxnFieldsType StructType
 * @subpackage Structs
 */
class AdditionalTxnFieldsType extends AbstractStructBase
{
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The InvoiceNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InvoiceNbr;
    /**
     * The CustomerID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CustomerID;
    /**
     * Constructor method for AdditionalTxnFieldsType
     * @uses AdditionalTxnFieldsType::setDescription()
     * @uses AdditionalTxnFieldsType::setInvoiceNbr()
     * @uses AdditionalTxnFieldsType::setCustomerID()
     * @param string $description
     * @param string $invoiceNbr
     * @param string $customerID
     */
    public function __construct($description = null, $invoiceNbr = null, $customerID = null)
    {
        $this
            ->setDescription($description)
            ->setInvoiceNbr($invoiceNbr)
            ->setCustomerID($customerID);
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\AdditionalTxnFieldsType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get InvoiceNbr value
     * @return string|null
     */
    public function getInvoiceNbr()
    {
        return $this->InvoiceNbr;
    }
    /**
     * Set InvoiceNbr value
     * @param string $invoiceNbr
     * @return \StructType\AdditionalTxnFieldsType
     */
    public function setInvoiceNbr($invoiceNbr = null)
    {
        // validation for constraint: string
        if (!is_null($invoiceNbr) && !is_string($invoiceNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($invoiceNbr)), __LINE__);
        }
        $this->InvoiceNbr = $invoiceNbr;
        return $this;
    }
    /**
     * Get CustomerID value
     * @return string|null
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }
    /**
     * Set CustomerID value
     * @param string $customerID
     * @return \StructType\AdditionalTxnFieldsType
     */
    public function setCustomerID($customerID = null)
    {
        // validation for constraint: string
        if (!is_null($customerID) && !is_string($customerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerID)), __LINE__);
        }
        $this->CustomerID = $customerID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\AdditionalTxnFieldsType
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
