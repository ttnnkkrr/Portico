<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PDLTableDataRspType StructType
 * @subpackage Structs
 */
class PDLTableDataRspType extends AbstractStructBase
{
    /**
     * The TableBlock
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TableBlock;
    /**
     * The Table10
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PDLTable10RspType
     */
    public $Table10;
    /**
     * Constructor method for PDLTableDataRspType
     * @uses PDLTableDataRspType::setTableBlock()
     * @uses PDLTableDataRspType::setTable10()
     * @param string $tableBlock
     * @param \StructType\PDLTable10RspType $table10
     */
    public function __construct($tableBlock = null, \StructType\PDLTable10RspType $table10 = null)
    {
        $this
            ->setTableBlock($tableBlock)
            ->setTable10($table10);
    }
    /**
     * Get TableBlock value
     * @return string|null
     */
    public function getTableBlock()
    {
        return $this->TableBlock;
    }
    /**
     * Set TableBlock value
     * @param string $tableBlock
     * @return \StructType\PDLTableDataRspType
     */
    public function setTableBlock($tableBlock = null)
    {
        // validation for constraint: string
        if (!is_null($tableBlock) && !is_string($tableBlock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tableBlock)), __LINE__);
        }
        $this->TableBlock = $tableBlock;
        return $this;
    }
    /**
     * Get Table10 value
     * @return \StructType\PDLTable10RspType|null
     */
    public function getTable10()
    {
        return $this->Table10;
    }
    /**
     * Set Table10 value
     * @param \StructType\PDLTable10RspType $table10
     * @return \StructType\PDLTableDataRspType
     */
    public function setTable10(\StructType\PDLTable10RspType $table10 = null)
    {
        $this->Table10 = $table10;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PDLTableDataRspType
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
