<?php
/**
 * Created by PhpStorm.
 * User: tank
 * Date: 8/9/2016
 * Time: 9:03 PM
 */

require_once __DIR__ . '/vendor/autoload.php';
use WsdlToPhp\PackageGenerator\Generator\Generator;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;

// Options definition
$options = GeneratorOptions::instance(/* '/path/to/your/configuration/file.yml' */);
$options
    ->setOrigin('https://cert.api2.heartlandportico.com/Hps.Exchange.PosGateway/PosGatewayService.asmx?WSDL')
    ->setDestination('./portico')
    ->setComposerName('myproject/mypackage');

$generator = new Generator($options);
$generator->generatePackage();