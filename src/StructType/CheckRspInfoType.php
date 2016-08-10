<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckRspInfoType StructType
 * @subpackage Structs
 */
class CheckRspInfoType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Message;
    /**
     * The FieldNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FieldNumber;
    /**
     * The FieldName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FieldName;
    /**
     * Constructor method for CheckRspInfoType
     * @uses CheckRspInfoType::setType()
     * @uses CheckRspInfoType::setCode()
     * @uses CheckRspInfoType::setMessage()
     * @uses CheckRspInfoType::setFieldNumber()
     * @uses CheckRspInfoType::setFieldName()
     * @param string $type
     * @param string $code
     * @param string $message
     * @param string $fieldNumber
     * @param string $fieldName
     */
    public function __construct($type = null, $code = null, $message = null, $fieldNumber = null, $fieldName = null)
    {
        $this
            ->setType($type)
            ->setCode($code)
            ->setMessage($message)
            ->setFieldNumber($fieldNumber)
            ->setFieldName($fieldName);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\CheckRspInfoType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \StructType\CheckRspInfoType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \StructType\CheckRspInfoType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Get FieldNumber value
     * @return string|null
     */
    public function getFieldNumber()
    {
        return $this->FieldNumber;
    }
    /**
     * Set FieldNumber value
     * @param string $fieldNumber
     * @return \StructType\CheckRspInfoType
     */
    public function setFieldNumber($fieldNumber = null)
    {
        // validation for constraint: string
        if (!is_null($fieldNumber) && !is_string($fieldNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldNumber)), __LINE__);
        }
        $this->FieldNumber = $fieldNumber;
        return $this;
    }
    /**
     * Get FieldName value
     * @return string|null
     */
    public function getFieldName()
    {
        return $this->FieldName;
    }
    /**
     * Set FieldName value
     * @param string $fieldName
     * @return \StructType\CheckRspInfoType
     */
    public function setFieldName($fieldName = null)
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldName)), __LINE__);
        }
        $this->FieldName = $fieldName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CheckRspInfoType
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
