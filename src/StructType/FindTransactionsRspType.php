<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindTransactionsRspType StructType
 * @subpackage Structs
 */
class FindTransactionsRspType extends AbstractStructBase
{
    /**
     * The Transactions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TransactionDataType[]
     */
    public $Transactions;
    /**
     * The TzConversion
     * Meta informations extracted from the WSDL
     * - default: Merchant
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TzConversion;
    /**
     * Constructor method for FindTransactionsRspType
     * @uses FindTransactionsRspType::setTransactions()
     * @uses FindTransactionsRspType::setTzConversion()
     * @param \StructType\TransactionDataType[] $transactions
     * @param string $tzConversion
     */
    public function __construct(array $transactions = array(), $tzConversion = 'Merchant')
    {
        $this
            ->setTransactions($transactions)
            ->setTzConversion($tzConversion);
    }
    /**
     * Get Transactions value
     * @return \StructType\TransactionDataType[]|null
     */
    public function getTransactions()
    {
        return $this->Transactions;
    }
    /**
     * Set Transactions value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionDataType[] $transactions
     * @return \StructType\FindTransactionsRspType
     */
    public function setTransactions(array $transactions = array())
    {
        foreach ($transactions as $findTransactionsRspTypeTransactionsItem) {
            // validation for constraint: itemType
            if (!$findTransactionsRspTypeTransactionsItem instanceof \StructType\TransactionDataType) {
                throw new \InvalidArgumentException(sprintf('The Transactions property can only contain items of \StructType\TransactionDataType, "%s" given', is_object($findTransactionsRspTypeTransactionsItem) ? get_class($findTransactionsRspTypeTransactionsItem) : gettype($findTransactionsRspTypeTransactionsItem)), __LINE__);
            }
        }
        $this->Transactions = $transactions;
        return $this;
    }
    /**
     * Add item to Transactions value
     * @throws \InvalidArgumentException
     * @param \StructType\TransactionDataType $item
     * @return \StructType\FindTransactionsRspType
     */
    public function addToTransactions(\StructType\TransactionDataType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TransactionDataType) {
            throw new \InvalidArgumentException(sprintf('The Transactions property can only contain items of \StructType\TransactionDataType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Transactions[] = $item;
        return $this;
    }
    /**
     * Get TzConversion value
     * @return string|null
     */
    public function getTzConversion()
    {
        return $this->TzConversion;
    }
    /**
     * Set TzConversion value
     * @uses \EnumType\TzoneConversionType::valueIsValid()
     * @uses \EnumType\TzoneConversionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tzConversion
     * @return \StructType\FindTransactionsRspType
     */
    public function setTzConversion($tzConversion = 'Merchant')
    {
        // validation for constraint: enumeration
        if (!\EnumType\TzoneConversionType::valueIsValid($tzConversion)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tzConversion, implode(', ', \EnumType\TzoneConversionType::getValidValues())), __LINE__);
        }
        $this->TzConversion = $tzConversion;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FindTransactionsRspType
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
