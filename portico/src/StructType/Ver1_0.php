<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ver1.0 StructType
 * @subpackage Structs
 */
class Ver1_0 extends AbstractStructBase
{
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Header
     */
    public $Header;
    /**
     * The Transaction
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Transaction
     */
    public $Transaction;
    /**
     * Constructor method for Ver1.0
     * @uses Ver1_0::setHeader()
     * @uses Ver1_0::setTransaction()
     * @param \StructType\Header $header
     * @param \StructType\Transaction $transaction
     */
    public function __construct(\StructType\Header $header = null, \StructType\Transaction $transaction = null)
    {
        $this
            ->setHeader($header)
            ->setTransaction($transaction);
    }
    /**
     * Get Header value
     * @return \StructType\Header|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @param \StructType\Header $header
     * @return \StructType\Ver1_0
     */
    public function setHeader(\StructType\Header $header = null)
    {
        $this->Header = $header;
        return $this;
    }
    /**
     * Get Transaction value
     * @return \StructType\Transaction|null
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }
    /**
     * Set Transaction value
     * @param \StructType\Transaction $transaction
     * @return \StructType\Ver1_0
     */
    public function setTransaction(\StructType\Transaction $transaction = null)
    {
        $this->Transaction = $transaction;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Ver1_0
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
