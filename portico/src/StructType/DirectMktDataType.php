<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectMktDataType StructType
 * @subpackage Structs
 */
class DirectMktDataType extends AbstractStructBase
{
    /**
     * The DirectMktShipMonth
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DirectMktShipMonth;
    /**
     * The DirectMktShipDay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DirectMktShipDay;
    /**
     * The DirectMktInvoiceNbr
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DirectMktInvoiceNbr;
    /**
     * Constructor method for DirectMktDataType
     * @uses DirectMktDataType::setDirectMktShipMonth()
     * @uses DirectMktDataType::setDirectMktShipDay()
     * @uses DirectMktDataType::setDirectMktInvoiceNbr()
     * @param int $directMktShipMonth
     * @param int $directMktShipDay
     * @param string $directMktInvoiceNbr
     */
    public function __construct($directMktShipMonth = null, $directMktShipDay = null, $directMktInvoiceNbr = null)
    {
        $this
            ->setDirectMktShipMonth($directMktShipMonth)
            ->setDirectMktShipDay($directMktShipDay)
            ->setDirectMktInvoiceNbr($directMktInvoiceNbr);
    }
    /**
     * Get DirectMktShipMonth value
     * @return int
     */
    public function getDirectMktShipMonth()
    {
        return $this->DirectMktShipMonth;
    }
    /**
     * Set DirectMktShipMonth value
     * @param int $directMktShipMonth
     * @return \StructType\DirectMktDataType
     */
    public function setDirectMktShipMonth($directMktShipMonth = null)
    {
        // validation for constraint: int
        if (!is_null($directMktShipMonth) && !is_numeric($directMktShipMonth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($directMktShipMonth)), __LINE__);
        }
        $this->DirectMktShipMonth = $directMktShipMonth;
        return $this;
    }
    /**
     * Get DirectMktShipDay value
     * @return int
     */
    public function getDirectMktShipDay()
    {
        return $this->DirectMktShipDay;
    }
    /**
     * Set DirectMktShipDay value
     * @param int $directMktShipDay
     * @return \StructType\DirectMktDataType
     */
    public function setDirectMktShipDay($directMktShipDay = null)
    {
        // validation for constraint: int
        if (!is_null($directMktShipDay) && !is_numeric($directMktShipDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($directMktShipDay)), __LINE__);
        }
        $this->DirectMktShipDay = $directMktShipDay;
        return $this;
    }
    /**
     * Get DirectMktInvoiceNbr value
     * @return string|null
     */
    public function getDirectMktInvoiceNbr()
    {
        return $this->DirectMktInvoiceNbr;
    }
    /**
     * Set DirectMktInvoiceNbr value
     * @param string $directMktInvoiceNbr
     * @return \StructType\DirectMktDataType
     */
    public function setDirectMktInvoiceNbr($directMktInvoiceNbr = null)
    {
        // validation for constraint: string
        if (!is_null($directMktInvoiceNbr) && !is_string($directMktInvoiceNbr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($directMktInvoiceNbr)), __LINE__);
        }
        $this->DirectMktInvoiceNbr = $directMktInvoiceNbr;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DirectMktDataType
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
