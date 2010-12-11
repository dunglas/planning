<?php

$vendorDir = __DIR__.'/vendor';
$symfonyVendorDir = $vendorDir . '/Symfony/vendor';

require_once $vendorDir.'/symfony/src/Symfony/Component/HttpFoundation/UniversalClassLoader.php';

use Symfony\Component\HttpFoundation\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                        => $vendorDir.'/Symfony/src',
    'Application'                    => __DIR__,
    'Bundle'                         => __DIR__,
    'Doctrine\\Common\\DataFixtures' => $symfonyVendorDir.'/doctrine-data-fixtures/lib',
    'Doctrine\\Common'               => $symfonyVendorDir.'/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations'     => $symfonyVendorDir.'/doctrine-migrations/lib',
    'Doctrine\\MongoDB'              => $symfonyVendorDir.'/doctrine-mongodb/lib',
    'Doctrine\\ODM\\MongoDB'         => $symfonyVendorDir.'/doctrine-mongodb-odm/lib',
    'Doctrine\\DBAL'                 => $symfonyVendorDir.'/doctrine-dbal/lib',
    'Doctrine'                       => $symfonyVendorDir.'/doctrine/lib',
    'Zend'                           => $symfonyVendorDir.'/zend/library',
));
$loader->registerPrefixes(array(
    'Swift_' => $symfonyVendorDir.'/swiftmailer/lib/classes',
    'Twig_'  => $symfonyVendorDir.'/twig/lib',
));
$loader->register();