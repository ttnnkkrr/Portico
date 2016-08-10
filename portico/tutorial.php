<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
$secretAPIKey = 'dadsf';
$header = new \StructType\Header();
$header->setSecretAPIKey($secretAPIKey);

$cardData = new \StructType\CardDataType(null,new \StructType\ManualEntry(12,2019,'4111111111111111'));

$block1 = new \StructType\CreditSaleReqBlock1Type(200,null, $cardData);
$creditSale = new \StructType\PosCreditSaleReqType($block1);
$transaction = new \StructType\Transaction();
$transaction->setCreditSale($creditSale);

$Ver1_0 = new \StructType\Ver1_0($header,$transaction);
/**
 * Samples for Do ServiceType
 */
$do = new \ServiceType\_Do($options);
/**
 * Sample call for DoTransaction operation/method
 */
print_r($do->getResult());
if ($do->DoTransaction(new \StructType\PosRequest($Ver1_0)) !== false) {
    print_r($do->getResult());
} else {
    print_r($do->getLastRequest());
    print_r($do->getLastError());
}
