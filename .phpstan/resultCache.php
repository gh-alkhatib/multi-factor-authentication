<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1765988823,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.33',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80411,
  'projectConfig' => '{conditionalTags: {PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension: {phpstan.phpDoc.typeNodeResolverExtension: %phpunit.convertUnionToIntersectionType%}, PHPStan\\Type\\PHPUnit\\DataProviderReturnTypeIgnoreExtension: {phpstan.ignoreErrorExtension: [%featureToggles.bleedingEdge%, {arguments: [%phpunit.reportMissingDataProviderReturnType%]}]}}, parameters: {phpunit: {convertUnionToIntersectionType: true, reportMissingDataProviderReturnType: false}, additionalConstructors: [PHPUnit\\Framework\\TestCase::setUp], earlyTerminatingMethodCalls: {PHPUnit\\Framework\\Assert: [fail, markTestIncomplete, markTestSkipped]}, stubFiles: [stubs/Assert.stub, stubs/AssertionFailedError.stub, stubs/ExpectationFailedException.stub, stubs/MockBuilder.stub, stubs/MockObject.stub, stubs/Stub.stub, stubs/TestCase.stub], exceptions: {uncheckedExceptionRegexes: [\'#^PHPUnit\\\\#\', \'#^SebastianBergmann\\\\#\']}, level: 8, paths: [/Users/ghiath/Desktop/sites/multi-factor-authentication/src], excludePaths: {analyseAndScan: [tests, vendor], analyse: []}, checkUninitializedProperties: true, tmpDir: /Users/ghiath/Desktop/sites/multi-factor-authentication/.phpstan}, services: [{class: PHPStan\\PhpDoc\\PHPUnit\\MockObjectTypeNodeResolverExtension}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertFunctionTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.functionTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.methodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\Assert\\AssertStaticMethodTypeSpecifyingExtension, tags: [phpstan.typeSpecifier.staticMethodTypeSpecifyingExtension]}, {class: PHPStan\\Type\\PHPUnit\\MockBuilderDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Rules\\PHPUnit\\CoversHelper}, {class: PHPStan\\Rules\\PHPUnit\\AnnotationHelper}, {class: PHPStan\\Rules\\PHPUnit\\TestMethodsHelper}, {class: PHPStan\\Rules\\PHPUnit\\PHPUnitVersion, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\PHPUnitVersionDetector}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelper, factory: {arguments: []}}, {class: PHPStan\\Rules\\PHPUnit\\DataProviderHelperFactory, arguments: {parser: @defaultAnalysisParser}}, {class: PHPStan\\Type\\PHPUnit\\DataProviderReturnTypeIgnoreExtension}]}',
  'analysedPaths' => 
  array (
    0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/composer.lock' => 'b9ddd9988764a84bf6ca1a19cf4cb0efdba6dc81',
  ),
  'composerInstalled' => 
  array (
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'brick/math' => 
        array (
          'pretty_version' => '0.14.1',
          'version' => '0.14.1.0',
          'reference' => 'f05858549e5f9d7bb45875a75583240a38a281d0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../brick/math',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'carbonphp/carbon-doctrine-types' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '18ba5ddfec8976260ead6e866180bd5d2f71aa1d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../carbonphp/carbon-doctrine-types',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'composer/semver' => 
        array (
          'pretty_version' => '3.4.4',
          'version' => '3.4.4.0',
          'reference' => '198166618906cb2de69b95d7d47e5fa8aa1b2b95',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/./semver',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'cordoval/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'davedevelopment/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'dflydev/dot-access-data' => 
        array (
          'pretty_version' => 'v3.0.3',
          'version' => '3.0.3.0',
          'reference' => 'a23a2bf4f31d3518f3ecb38660c95715dfead60f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../dflydev/dot-access-data',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/inflector' => 
        array (
          'pretty_version' => '2.1.0',
          'version' => '2.1.0.0',
          'reference' => '6d6c96277ea252fc1304627204c3d5e6e15faa3b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../doctrine/inflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'doctrine/lexer' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '31ad66abc0fc9e1a1f2d9bc6a42668d2fbbcd6dd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../doctrine/lexer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'dragonmantank/cron-expression' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => 'd61a8a9604ec1f8c3d150d09db6ce98b32675013',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../dragonmantank/cron-expression',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'egulias/email-validator' => 
        array (
          'pretty_version' => '4.0.4',
          'version' => '4.0.4.0',
          'reference' => 'd42c8731f0624ad6bdc8d3e5e9a4524f68801cfa',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../egulias/email-validator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'fakerphp/faker' => 
        array (
          'pretty_version' => 'v1.24.1',
          'version' => '1.24.1.0',
          'reference' => 'e0ee18eb1e6dc3cda3ce9fd97e5a0689a88a64b5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../fakerphp/faker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'filp/whoops' => 
        array (
          'pretty_version' => '2.18.4',
          'version' => '2.18.4.0',
          'reference' => 'd2102955e48b9fd9ab24280a7ad12ed552752c4d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../filp/whoops',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'fruitcake/php-cors' => 
        array (
          'pretty_version' => 'v1.4.0',
          'version' => '1.4.0.0',
          'reference' => '38aaa6c3fd4c157ffe2a4d10aa8b9b16ba8de379',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../fruitcake/php-cors',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'graham-campbell/result-type' => 
        array (
          'pretty_version' => 'v1.1.3',
          'version' => '1.1.3.0',
          'reference' => '3ba905c11371512af9d9bdd27d99b782216b6945',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../graham-campbell/result-type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/guzzle' => 
        array (
          'pretty_version' => '7.10.0',
          'version' => '7.10.0.0',
          'reference' => 'b51ac707cfa420b7bfd4e4d5e510ba8008e822b4',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../guzzlehttp/guzzle',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/promises' => 
        array (
          'pretty_version' => '2.3.0',
          'version' => '2.3.0.0',
          'reference' => '481557b130ef3790cf82b713667b43030dc9c957',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../guzzlehttp/promises',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/psr7' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '21dc724a0583619cd1652f673303492272778051',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../guzzlehttp/psr7',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'guzzlehttp/uri-template' => 
        array (
          'pretty_version' => 'v1.0.5',
          'version' => '1.0.5.0',
          'reference' => '4f4bbd4e7172148801e76e3decc1e559bdee34e1',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../guzzlehttp/uri-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'hamcrest/hamcrest-php' => 
        array (
          'pretty_version' => 'v2.1.1',
          'version' => '2.1.1.0',
          'reference' => 'f8b1c0173b22fa6ec77a81fe63e5b01eba7e6487',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../hamcrest/hamcrest-php',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'illuminate/auth' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/broadcasting' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/bus' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/cache' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/collections' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/concurrency' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/conditionable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/config' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/console' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/container' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/contracts' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/cookie' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/database' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/encryption' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/events' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/filesystem' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/hashing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/http' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/log' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/macroable' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/mail' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/notifications' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/pagination' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/pipeline' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/process' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/queue' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/redis' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/routing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/session' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/support' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/testing' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/translation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/validation' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'illuminate/view' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => 'v11.47.0',
          ),
        ),
        'kodova/hamcrest-php' => 
        array (
          'dev_requirement' => true,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'laravel/framework' => 
        array (
          'pretty_version' => 'v11.47.0',
          'version' => '11.47.0.0',
          'reference' => '86693ffa1ba32f56f8c44e31416c6665095a62c5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../laravel/framework',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/pail' => 
        array (
          'pretty_version' => 'v1.2.4',
          'version' => '1.2.4.0',
          'reference' => '49f92285ff5d6fc09816e976a004f8dec6a0ea30',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../laravel/pail',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'laravel/prompts' => 
        array (
          'pretty_version' => 'v0.3.8',
          'version' => '0.3.8.0',
          'reference' => '096748cdfb81988f60090bbb839ce3205ace0d35',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../laravel/prompts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/serializable-closure' => 
        array (
          'pretty_version' => 'v2.0.7',
          'version' => '2.0.7.0',
          'reference' => 'cb291e4c998ac50637c7eeb58189c14f5de5b9dd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../laravel/serializable-closure',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'laravel/tinker' => 
        array (
          'pretty_version' => 'v2.10.2',
          'version' => '2.10.2.0',
          'reference' => '3bcb5f62d6f837e0f093a601e26badafb127bd4c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../laravel/tinker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'league/commonmark' => 
        array (
          'pretty_version' => '2.8.0',
          'version' => '2.8.0.0',
          'reference' => '4efa10c1e56488e658d10adf7b7b7dcd19940bfb',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/commonmark',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/config' => 
        array (
          'pretty_version' => 'v1.2.0',
          'version' => '1.2.0.0',
          'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/config',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => '5966a8ba23e62bdb518dd9e0e665c2dbd4b5b277',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/flysystem',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/flysystem-local' => 
        array (
          'pretty_version' => '3.30.2',
          'version' => '3.30.2.0',
          'reference' => 'ab4f9d0d672f601b102936aa728801dd1a11968d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/flysystem-local',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/mime-type-detection' => 
        array (
          'pretty_version' => '1.16.0',
          'version' => '1.16.0.0',
          'reference' => '2d6702ff215bf922936ccc1ad31007edc76451b9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/mime-type-detection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => '8d587cddee53490f9b82bf203d3a9aa7ea4f9807',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/uri',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'league/uri-interfaces' => 
        array (
          'pretty_version' => '7.7.0',
          'version' => '7.7.0.0',
          'reference' => '62ccc1a0435e1c54e10ee6022df28d6c04c2946c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../league/uri-interfaces',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mockery/mockery' => 
        array (
          'pretty_version' => '1.6.12',
          'version' => '1.6.12.0',
          'reference' => '1f4efdd7d3beafe9807b08156dfcb176d18f1699',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../mockery/mockery',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'monolog/monolog' => 
        array (
          'pretty_version' => '3.9.0',
          'version' => '3.9.0.0',
          'reference' => '10d85740180ecba7896c87e06a166e0c95a0e3b6',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../monolog/monolog',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'mtdowling/cron-expression' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '^1.0',
          ),
        ),
        'myclabs/deep-copy' => 
        array (
          'pretty_version' => '1.13.4',
          'version' => '1.13.4.0',
          'reference' => '07d290f0c47959fd5eed98c95ee5602db07e0b6a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../myclabs/deep-copy',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nesbot/carbon' => 
        array (
          'pretty_version' => '3.11.0',
          'version' => '3.11.0.0',
          'reference' => 'bdb375400dcd162624531666db4799b36b64e4a1',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../nesbot/carbon',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/schema' => 
        array (
          'pretty_version' => 'v1.3.3',
          'version' => '1.3.3.0',
          'reference' => '2befc2f42d7c715fd9d95efc31b1081e5d765004',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../nette/schema',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nette/utils' => 
        array (
          'pretty_version' => 'v4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'fa1f0b8261ed150447979eb22e373b7b7ad5a8e0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../nette/utils',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'nikic/php-parser' => 
        array (
          'pretty_version' => 'v5.7.0',
          'version' => '5.7.0.0',
          'reference' => 'dca41cd15c2ac9d055ad70dbfd011130757d1f82',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../nikic/php-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/collision' => 
        array (
          'pretty_version' => 'v8.5.0',
          'version' => '8.5.0.0',
          'reference' => 'f5c101b929c958e849a633283adff296ed5f38f5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../nunomaduro/collision',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'nunomaduro/termwind' => 
        array (
          'pretty_version' => 'v2.3.3',
          'version' => '2.3.3.0',
          'reference' => '6fb2a640ff502caace8e05fd7be3b503a7e1c017',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../nunomaduro/termwind',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'orchestra/canvas' => 
        array (
          'pretty_version' => 'v9.2.2',
          'version' => '9.2.2.0',
          'reference' => '002d948834c0899e511f5ac0381669363d7881e5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../orchestra/canvas',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/canvas-core' => 
        array (
          'pretty_version' => 'v9.1.1',
          'version' => '9.1.1.0',
          'reference' => 'a8ebfa6c2e50f8c6597c489b4dfaf9af6789f62a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../orchestra/canvas-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/sidekick' => 
        array (
          'pretty_version' => 'v1.2.18',
          'version' => '1.2.18.0',
          'reference' => '0e080ef62eed6c45aaea3619566a1fce02b62094',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../orchestra/sidekick',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench' => 
        array (
          'pretty_version' => 'v9.15.0',
          'version' => '9.15.0.0',
          'reference' => 'd0181240f93688448d4ae3b5479ec5ed70a87a47',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../orchestra/testbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/testbench-core' => 
        array (
          'pretty_version' => 'v9.17.0',
          'version' => '9.17.0.0',
          'reference' => 'a5b4d56a40536fde50a72e20ce43abaa76f8de2f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../orchestra/testbench-core',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'orchestra/workbench' => 
        array (
          'pretty_version' => 'v9.13.5',
          'version' => '9.13.5.0',
          'reference' => '1da2ea95089ed3516bda6f8e9cd57c81290004bf',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../orchestra/workbench',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'paragonie/constant_time_encoding' => 
        array (
          'pretty_version' => 'v3.1.3',
          'version' => '3.1.3.0',
          'reference' => 'd5b01a39b3415c2cd581d3bd3a3575c1ebbd8e77',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../paragonie/constant_time_encoding',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phar-io/manifest' => 
        array (
          'pretty_version' => '2.0.4',
          'version' => '2.0.4.0',
          'reference' => '54750ef60c58e43759730615a392c31c80e23176',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phar-io/manifest',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phar-io/version' => 
        array (
          'pretty_version' => '3.2.1',
          'version' => '3.2.1.0',
          'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phar-io/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpoption/phpoption' => 
        array (
          'pretty_version' => '1.9.4',
          'version' => '1.9.4.0',
          'reference' => '638a154f8d4ee6a5cfa96d6a34dfbe0cffa9566d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpoption/phpoption',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.33',
          'version' => '2.1.33.0',
          'reference' => '9e800e6bee7d5bd02784d4c6069b48032d16224f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpstan/phpstan-phpunit' => 
        array (
          'pretty_version' => '2.0.10',
          'version' => '2.0.10.0',
          'reference' => '8d61a5854e7497d95bc85188e13537e99bd7aae7',
          'type' => 'phpstan-extension',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpstan/phpstan-phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-code-coverage' => 
        array (
          'pretty_version' => '10.1.16',
          'version' => '10.1.16.0',
          'reference' => '7e308268858ed6baedc8704a304727d20bc07c77',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpunit/php-code-coverage',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-file-iterator' => 
        array (
          'pretty_version' => '4.1.0',
          'version' => '4.1.0.0',
          'reference' => 'a95037b6d9e608ba092da1b23931e537cadc3c3c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpunit/php-file-iterator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-invoker' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => 'f5e568ba02fa5ba0ddd0f618391d5a9ea50b06d7',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpunit/php-invoker',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-text-template' => 
        array (
          'pretty_version' => '3.0.1',
          'version' => '3.0.1.0',
          'reference' => '0c7b06ff49e3d5072f057eb1fa59258bf287a748',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpunit/php-text-template',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/php-timer' => 
        array (
          'pretty_version' => '6.0.0',
          'version' => '6.0.0.0',
          'reference' => 'e2a2d67966e740530f4a3343fe2e030ffdc1161d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpunit/php-timer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'phpunit/phpunit' => 
        array (
          'pretty_version' => '10.5.60',
          'version' => '10.5.60.0',
          'reference' => 'f2e26f52f80ef77832e359205f216eeac00e320c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../phpunit/phpunit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'pragmarx/google2fa' => 
        array (
          'pretty_version' => 'v8.0.3',
          'version' => '8.0.3.0',
          'reference' => '6f8d87ebd5afbf7790bde1ffc7579c7c705e0fad',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../pragmarx/google2fa',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/clock-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/container' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/container',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/container-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.1|2.0',
          ),
        ),
        'psr/event-dispatcher' => 
        array (
          'pretty_version' => '1.0.0',
          'version' => '1.0.0.0',
          'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-client' => 
        array (
          'pretty_version' => '1.0.3',
          'version' => '1.0.3.0',
          'reference' => 'bb5906edc1c324c9a05aa0873d40117941e5fa90',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/http-client',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-client-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-factory' => 
        array (
          'pretty_version' => '1.1.0',
          'version' => '1.1.0.0',
          'reference' => '2b4765fddfe3b508ac62f829e852b1501d3f6e8a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/http-factory',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-factory-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/http-message' => 
        array (
          'pretty_version' => '2.0',
          'version' => '2.0.0.0',
          'reference' => '402d35bcb92c70c026d1a6a9883f06b2ead23d71',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/http-message',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/http-message-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0',
          ),
        ),
        'psr/log' => 
        array (
          'pretty_version' => '3.0.2',
          'version' => '3.0.2.0',
          'reference' => 'f16e1d5863e37f8d8c2a01719f5b34baa2b714d3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/log',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/log-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
            1 => '3.0.0',
          ),
        ),
        'psr/simple-cache' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psr/simple-cache',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'psr/simple-cache-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '1.0|2.0|3.0',
          ),
        ),
        'psy/psysh' => 
        array (
          'pretty_version' => 'v0.12.18',
          'version' => '0.12.18.0',
          'reference' => 'ddff0ac01beddc251786fe70367cd8bbdb258196',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../psy/psysh',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'ralouphie/getallheaders' => 
        array (
          'pretty_version' => '3.0.3',
          'version' => '3.0.3.0',
          'reference' => '120b605dfeb996808c31b6477290a714d356e822',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../ralouphie/getallheaders',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/collection' => 
        array (
          'pretty_version' => '2.1.1',
          'version' => '2.1.1.0',
          'reference' => '344572933ad0181accbf4ba763e85a0306a8c5e2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../ramsey/collection',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'ramsey/uuid' => 
        array (
          'pretty_version' => '4.9.2',
          'version' => '4.9.2.0',
          'reference' => '8429c78ca35a09f27565311b98101e2826affde0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../ramsey/uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'rhumsaa/uuid' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '4.9.2',
          ),
        ),
        'sebastian/cli-parser' => 
        array (
          'pretty_version' => '2.0.1',
          'version' => '2.0.1.0',
          'reference' => 'c34583b87e7b7a8055bf6c450c2c77ce32a24084',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/cli-parser',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit' => 
        array (
          'pretty_version' => '2.0.0',
          'version' => '2.0.0.0',
          'reference' => 'a81fee9eef0b7a76af11d121767abc44c104e503',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/code-unit',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/code-unit-reverse-lookup' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '5e3a687f7d8ae33fb362c5c0743794bbb2420a1d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/code-unit-reverse-lookup',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/comparator' => 
        array (
          'pretty_version' => '5.0.4',
          'version' => '5.0.4.0',
          'reference' => 'e8e53097718d2b53cfb2aa859b06a41abf58c62e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/comparator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/complexity' => 
        array (
          'pretty_version' => '3.2.0',
          'version' => '3.2.0.0',
          'reference' => '68ff824baeae169ec9f2137158ee529584553799',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/complexity',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/diff' => 
        array (
          'pretty_version' => '5.1.1',
          'version' => '5.1.1.0',
          'reference' => 'c41e007b4b62af48218231d6c2275e4c9b975b2e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/diff',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/environment' => 
        array (
          'pretty_version' => '6.1.0',
          'version' => '6.1.0.0',
          'reference' => '8074dbcd93529b357029f5cc5058fd3e43666984',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/environment',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/exporter' => 
        array (
          'pretty_version' => '5.1.4',
          'version' => '5.1.4.0',
          'reference' => '0735b90f4da94969541dac1da743446e276defa6',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/exporter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/global-state' => 
        array (
          'pretty_version' => '6.0.2',
          'version' => '6.0.2.0',
          'reference' => '987bafff24ecc4c9ac418cab1145b96dd6e9cbd9',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/global-state',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/lines-of-code' => 
        array (
          'pretty_version' => '2.0.2',
          'version' => '2.0.2.0',
          'reference' => '856e7f6a75a84e339195d48c556f23be2ebf75d0',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/lines-of-code',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-enumerator' => 
        array (
          'pretty_version' => '5.0.0',
          'version' => '5.0.0.0',
          'reference' => '202d0e344a580d7f7d04b3fafce6933e59dae906',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/object-enumerator',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/object-reflector' => 
        array (
          'pretty_version' => '3.0.0',
          'version' => '3.0.0.0',
          'reference' => '24ed13d98130f0e7122df55d06c5c4942a577957',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/object-reflector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/recursion-context' => 
        array (
          'pretty_version' => '5.0.1',
          'version' => '5.0.1.0',
          'reference' => '47e34210757a2f37a97dcd207d032e1b01e64c7a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/recursion-context',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/type' => 
        array (
          'pretty_version' => '4.0.0',
          'version' => '4.0.0.0',
          'reference' => '462699a16464c3944eefc02ebdd77882bd3925bf',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/type',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'sebastian/version' => 
        array (
          'pretty_version' => '4.0.1',
          'version' => '4.0.1.0',
          'reference' => 'c51fa83a5d8f43f1402e3f32a005e6262244ef17',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../sebastian/version',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'spatie/once' => 
        array (
          'dev_requirement' => false,
          'replaced' => 
          array (
            0 => '*',
          ),
        ),
        'symfony/clock' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '832119f9b8dbc6c8e6f65f30c5969eca1e88764f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/clock',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/console' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '6d9f0fbf2ec2e9785880096e3abd0ca0c88b506e',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/console',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/css-selector' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '6225bd458c53ecdee056214cb4a2ffaf58bd592b',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/css-selector',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/deprecation-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '63afe740e99a13ba87ec199bb07bbdee937a5b62',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/deprecation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/error-handler' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '48be2b0653594eea32dcef130cca1c811dcf25c2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/error-handler',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher' => 
        array (
          'pretty_version' => 'v8.0.0',
          'version' => '8.0.0.0',
          'reference' => '573f95783a2ec6e38752979db139f09fec033f03',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/event-dispatcher',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-contracts' => 
        array (
          'pretty_version' => 'v3.6.0',
          'version' => '3.6.0.0',
          'reference' => '59eb412e93815df44f05f342958efa9f46b1e586',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/event-dispatcher-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/event-dispatcher-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.0|3.0',
          ),
        ),
        'symfony/finder' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '340b9ed7320570f319028a2cbec46d40535e94bd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/finder',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-foundation' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => 'bd1af1e425811d6f077db240c3a588bdb405cd27',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/http-foundation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/http-kernel' => 
        array (
          'pretty_version' => 'v7.4.2',
          'version' => '7.4.2.0',
          'reference' => 'f6e6f0a5fa8763f75a504b930163785fb6dd055f',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/http-kernel',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mailer' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'a3d9eea8cfa467ece41f0f54ba28185d74bd53fd',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/mailer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/mime' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => 'bdb02729471be5d047a3ac4a69068748f1a6be7a',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/mime',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-ctype' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'a3cc8b044a6ea513310cbd48ef7333b384945638',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-ctype',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-grapheme' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '380872130d3a5dd3ace2f4010d95125fde5d5c70',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-intl-grapheme',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-idn' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '9614ac4d8061dc257ecc64cba1b140873dce8ad3',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-intl-idn',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-intl-normalizer' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '3833d7255cc303546435cb650316bff708a1c75c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-intl-normalizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-mbstring' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '6d857f4d76bd4b343eac26d6b539585d2bc56493',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-mbstring',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php80' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '0cc9dd0f17f61d8131e7df6b84bd344899fe2608',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-php80',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php83' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '17f6f9a6b1735c0f163024d959f700cfbc5155e5',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-php83',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-php84' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd8ced4d875142b6a7426000426b8abc631d6b191',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-php84',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'symfony/polyfill-php85' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => 'd4e5fcd4ab3d998ab16c0db48e6cbb9a01993f91',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-php85',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/polyfill-uuid' => 
        array (
          'pretty_version' => 'v1.33.0',
          'version' => '1.33.0.0',
          'reference' => '21533be36c24be3f4b1669c4725c7d1d2bab4ae2',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/polyfill-uuid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/process' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '7ca8dc2d0dcf4882658313aba8be5d9fd01026c8',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/process',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/routing' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '4720254cb2644a0b876233d258a32bf017330db7',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/routing',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/service-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '45112560a3ba2d715666a509a0bc9521d10b6c43',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/service-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/string' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => 'ba65a969ac918ce0cc3edfac6cdde847eba231dc',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/string',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation' => 
        array (
          'pretty_version' => 'v8.0.1',
          'version' => '8.0.1.0',
          'reference' => '770e3b8b0ba8360958abedcabacd4203467333ca',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/translation',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-contracts' => 
        array (
          'pretty_version' => 'v3.6.1',
          'version' => '3.6.1.0',
          'reference' => '65a8bc82080447fae78373aa10f8d13b38338977',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/translation-contracts',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/translation-implementation' => 
        array (
          'dev_requirement' => false,
          'provided' => 
          array (
            0 => '2.3|3.0',
          ),
        ),
        'symfony/uid' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '2498e9f81b7baa206f44de583f2f48350b90142c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/uid',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/var-dumper' => 
        array (
          'pretty_version' => 'v7.4.0',
          'version' => '7.4.0.0',
          'reference' => '41fd6c4ae28c38b294b42af6db61446594a0dece',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/var-dumper',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'symfony/yaml' => 
        array (
          'pretty_version' => 'v7.4.1',
          'version' => '7.4.1.0',
          'reference' => '24dd4de28d2e3988b311751ac49e684d783e2345',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../symfony/yaml',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'theseer/tokenizer' => 
        array (
          'pretty_version' => '1.3.1',
          'version' => '1.3.1.0',
          'reference' => 'b7489ce515e168639d17feec34b8847c326b0b3c',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../theseer/tokenizer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'tijsverkoyen/css-to-inline-styles' => 
        array (
          'pretty_version' => 'v2.4.0',
          'version' => '2.4.0.0',
          'reference' => 'f0292ccf0ec75843d65027214426b6b163b48b41',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../tijsverkoyen/css-to-inline-styles',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'vlucas/phpdotenv' => 
        array (
          'pretty_version' => 'v5.6.2',
          'version' => '5.6.2.0',
          'reference' => '24ac4c74f91ee2c193fa1aaa5c249cb0822809af',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../vlucas/phpdotenv',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'voku/portable-ascii' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => 'b1d923f88091c6bf09699efcd7c8a1b1bfd7351d',
          'type' => 'library',
          'install_path' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/composer/../voku/portable-ascii',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar:///Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar:///Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar:///Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar:///Users/ghiath/Desktop/sites/multi-factor-authentication/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'FFI',
    2 => 'PDO',
    3 => 'Phar',
    4 => 'Reflection',
    5 => 'SPL',
    6 => 'SimpleXML',
    7 => 'Zend OPcache',
    8 => 'bcmath',
    9 => 'bz2',
    10 => 'calendar',
    11 => 'ctype',
    12 => 'curl',
    13 => 'date',
    14 => 'dba',
    15 => 'dom',
    16 => 'exif',
    17 => 'fileinfo',
    18 => 'filter',
    19 => 'ftp',
    20 => 'gd',
    21 => 'gettext',
    22 => 'gmp',
    23 => 'hash',
    24 => 'herd',
    25 => 'iconv',
    26 => 'igbinary',
    27 => 'imagick',
    28 => 'imap',
    29 => 'intl',
    30 => 'json',
    31 => 'ldap',
    32 => 'libxml',
    33 => 'mbstring',
    34 => 'mongodb',
    35 => 'mysqli',
    36 => 'mysqlnd',
    37 => 'openssl',
    38 => 'pcntl',
    39 => 'pcre',
    40 => 'pdo_mysql',
    41 => 'pdo_pgsql',
    42 => 'pdo_sqlite',
    43 => 'pdo_sqlsrv',
    44 => 'pgsql',
    45 => 'posix',
    46 => 'random',
    47 => 'readline',
    48 => 'redis',
    49 => 'session',
    50 => 'shmop',
    51 => 'soap',
    52 => 'sockets',
    53 => 'sodium',
    54 => 'sqlite3',
    55 => 'sqlsrv',
    56 => 'standard',
    57 => 'sysvmsg',
    58 => 'sysvsem',
    59 => 'sysvshm',
    60 => 'tokenizer',
    61 => 'xml',
    62 => 'xmlreader',
    63 => 'xmlwriter',
    64 => 'xsl',
    65 => 'zip',
    66 => 'zlib',
    67 => 'zstd',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '8',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MultiFactorAuthentication\\Models\\MultiFactorAuthentication::authenticatable() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\MorphTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MultiFactorAuthentication\\Models\\MultiFactorAuthentication::recoveryCodes() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\HasMany does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 65,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method MultiFactorAuthentication\\Models\\RecoveryCode::multiFactorAuthentication() return type with generic class Illuminate\\Database\\Eloquent\\Relations\\BelongsTo does not specify its types: TRelatedModel, TDeclaringModel',
       'file' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 55,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.generics',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Concerns/HasMultiFactorAuthentication.php' => 
  array (
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Concerns/HasMultiFactorAuthentication.php' => 
    array (
      12 => NULL,
    ),
  ),
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Concerns/HasMultiFactorAuthentication.php' => 
  array (
    'PHPStan\\Rules\\Traits\\TraitDeclarationCollector' => 
    array (
      0 => 
      array (
        0 => 'MultiFactorAuthentication\\Concerns\\HasMultiFactorAuthentication',
        1 => 12,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/MultiFactorAuthenticationController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'session',
        1 => 107,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorConfirmedController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'session',
        1 => 56,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationManager.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'MultiFactorAuthentication\\Models\\RecoveryCode',
        1 => 'create',
        2 => 204,
      ),
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'group',
        2 => 93,
      ),
      1 => 
      array (
        0 => 'Illuminate\\Support\\Facades\\Route',
        1 => 'group',
        2 => 108,
      ),
    ),
  ),
); },
	'dependencies' => array (
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Concerns/HasMultiFactorAuthentication.php' => 
  array (
    'fileHash' => '743a61b0bf36f6776abc9381061ccc0ce77d2916',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/Api/MultiFactorAuthenticationApiController.php' => 
  array (
    'fileHash' => '155e56177821cabc285f652bd7a247bb81c81a26',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/MultiFactorAuthenticationController.php' => 
  array (
    'fileHash' => '1094749c9bd9594e4041cd5a8d9329500e0f8ea7',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorAuthenticationController.php' => 
  array (
    'fileHash' => '70ef892073c00d5b08fb5f6792de7c67f8830429',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorConfirmedController.php' => 
  array (
    'fileHash' => 'f8b32cd6c8388db3c74ddb6d833a5ae01dafbdaf',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorQrCodeController.php' => 
  array (
    'fileHash' => '1194be29cf837019f5494c36a0191c1a5c4311d8',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php' => 
  array (
    'fileHash' => '1f16d93ae4eccbe60bdbf6394d4fcbde3dc26330',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorStatusController.php' => 
  array (
    'fileHash' => 'e25dfbcd648bf88dd6950d42b87a934cf9c140a5',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorConfirmedResponse.php' => 
  array (
    'fileHash' => '817b9f1f8214326c027f4dc77c4c900f8aff876d',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorConfirmedController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorConfirmedResponse.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorDisabledResponse.php' => 
  array (
    'fileHash' => '69384ab5cc8a82e91ff57c946cbb6051936e1cee',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorAuthenticationController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorDisabledResponse.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorEnabledResponse.php' => 
  array (
    'fileHash' => 'b3ad9a3734db770f3260528e6f8519bf6d5fe332',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorAuthenticationController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorEnabledResponse.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorQrCodeResponse.php' => 
  array (
    'fileHash' => 'cabd725ac69e8a826c84dccdf6dd3df9a73586ac',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorQrCodeController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorQrCodeResponse.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorRecoveryCodesResponse.php' => 
  array (
    'fileHash' => 'a633133cd94641b238d4fda3b1a5f2002c6f6e6d',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorRecoveryCodesResponse.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorConfirmedResponse.php' => 
  array (
    'fileHash' => '3430145b8a28e468ad74bcfb4453593d08e6a3db',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorDisabledResponse.php' => 
  array (
    'fileHash' => 'ffb6e795d7a6a5f7305b39f09da60ccb245e781f',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorEnabledResponse.php' => 
  array (
    'fileHash' => '3899150a91a55c42967cc566d15bd5f3de9974a6',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorQrCodeResponse.php' => 
  array (
    'fileHash' => '81726ea7e5ea058cd3f33dea529d5c55b5825465',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorRecoveryCodesResponse.php' => 
  array (
    'fileHash' => 'b8b671df9faa4433039bde58a0de07f41c416b21',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Middleware/RequireMfa.php' => 
  array (
    'fileHash' => 'c92157224514fee0bec96d060165f7e010568b67',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php' => 
  array (
    'fileHash' => '8adbb8c413f19e0265e6a543e77bd46999497420',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/Api/MultiFactorAuthenticationApiController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/MultiFactorAuthenticationController.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php',
      3 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php',
      4 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationManager.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php' => 
  array (
    'fileHash' => 'a89143a70eb87d241f531617f6b9958bfb564396',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/Api/MultiFactorAuthenticationApiController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php',
      3 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationManager.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationManager.php' => 
  array (
    'fileHash' => '106f6904a671e3ac4dfa5f9c439c7d8e00a5478e',
    'dependentFiles' => 
    array (
      0 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/Api/MultiFactorAuthenticationApiController.php',
      1 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/MultiFactorAuthenticationController.php',
      2 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorAuthenticationController.php',
      3 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorConfirmedController.php',
      4 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorQrCodeController.php',
      5 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php',
      6 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorStatusController.php',
      7 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Middleware/RequireMfa.php',
      8 => '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php',
    ),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php' => 
  array (
    'fileHash' => '95ab3138fedc0584328c7288ba763c9649990503',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Concerns/HasMultiFactorAuthentication.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedTraitNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Concerns\\HasMultiFactorAuthentication',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @phpstan-ignore-next-line
 * This trait is meant to be used by user models, so it\'s expected to be unused in this package.
 */',
         'namespace' => 'MultiFactorAuthentication\\Concerns',
         'uses' => 
        array (
          'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
          'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
        ),
         'constUses' => 
        array (
        ),
      )),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'multiFactorAuthentications',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the multi-factor authentication records for the user.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphMany
     */',
             'namespace' => 'MultiFactorAuthentication\\Concerns',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'hasMfaEnabled',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the user has MFA enabled.
     *
     * @param  string  $method
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication\\Concerns',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMfaRecord',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the MFA record for the user.
     *
     * @param  string  $method
     * @return \\MultiFactorAuthentication\\Models\\MultiFactorAuthentication|null
     */',
             'namespace' => 'MultiFactorAuthentication\\Concerns',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRemainingRecoveryCodesCount',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the remaining recovery codes count.
     *
     * @return int
     */',
             'namespace' => 'MultiFactorAuthentication\\Concerns',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/Api/MultiFactorAuthenticationApiController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\Api\\MultiFactorAuthenticationApiController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @deprecated This controller is deprecated. Use the new Fortify-style controllers instead:
 * - TwoFactorAuthenticationController
 * - TwoFactorQrCodeController
 * - TwoFactorRecoveryCodeController
 * - TwoFactorConfirmedController
 * - TwoFactorStatusController
 */',
         'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
         'uses' => 
        array (
          'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
          'request' => 'Illuminate\\Http\\Request',
          'controller' => 'Illuminate\\Routing\\Controller',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'validationexception' => 'Illuminate\\Validation\\ValidationException',
          'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'status',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get MFA status for the authenticated user.
     *
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getSetup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get MFA setup data (secret and QR code URL).
     *
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable MFA for the authenticated user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify MFA code.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRecoveryCodes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get recovery codes for the authenticated user.
     *
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'regenerateRecoveryCodes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Regenerate recovery codes.
     *
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'disable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Disable MFA for the authenticated user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers\\Api',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/MultiFactorAuthenticationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\MultiFactorAuthenticationController',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @deprecated This controller is deprecated. Use the new Fortify-style controllers instead:
 * - TwoFactorAuthenticationController
 * - TwoFactorQrCodeController
 * - TwoFactorRecoveryCodeController
 * - TwoFactorConfirmedController
 * - TwoFactorStatusController
 */',
         'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
         'uses' => 
        array (
          'request' => 'Illuminate\\Http\\Request',
          'controller' => 'Illuminate\\Routing\\Controller',
          'auth' => 'Illuminate\\Support\\Facades\\Auth',
          'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showSetup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the MFA setup page.
     *
     * @return \\Illuminate\\Contracts\\View\\View|\\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setup',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Store the MFA setup.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showVerify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show the MFA verification page.
     *
     * @return \\Illuminate\\Contracts\\View\\View
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify the MFA code.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'showRecoveryCodes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Show recovery codes.
     *
     * @return \\Illuminate\\Contracts\\View\\View|\\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'regenerateRecoveryCodes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Regenerate recovery codes.
     *
     * @return \\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'disable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Disable MFA.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\RedirectResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorAuthenticationController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\TwoFactorAuthenticationController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactordisabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'twofactorenabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'enabledResponse',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The enabled response instance.
     *
     * @var \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactordisabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'twofactorenabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'disabledResponse',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The disabled response instance.
     *
     * @var \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactordisabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'twofactorenabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @param  \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse  $enabledResponse
     * @param  \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse  $disabledResponse
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactordisabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'twofactorenabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'enabledResponse',
               'type' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'disabledResponse',
               'type' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable two factor authentication for the user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactordisabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'twofactorenabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'destroy',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Disable two factor authentication for the user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactordisabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'twofactorenabledresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorConfirmedController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\TwoFactorConfirmedController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactorconfirmedresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'confirmedResponse',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The confirmed response instance.
     *
     * @var \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactorconfirmedresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @param  \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse  $confirmedResponse
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactorconfirmedresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'confirmedResponse',
               'type' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Confirm two factor authentication for the user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'validationexception' => 'Illuminate\\Validation\\ValidationException',
              'twofactorconfirmedresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorQrCodeController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\TwoFactorQrCodeController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorqrcoderesponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'qrCodeResponse',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The QR code response instance.
     *
     * @var \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorqrcoderesponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @param  \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse  $qrCodeResponse
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorqrcoderesponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'qrCodeResponse',
               'type' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the QR code for the user\'s two factor authentication.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorqrcoderesponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\TwoFactorRecoveryCodeController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorrecoverycodesresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'recoveryCodesResponse',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The recovery codes response instance.
     *
     * @var \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorrecoverycodesresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @param  \\MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse  $recoveryCodesResponse
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorrecoverycodesresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recoveryCodesResponse',
               'type' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'index',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the recovery codes for the authenticated user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response|\\Illuminate\\Contracts\\View\\View
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorrecoverycodesresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'store',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate new recovery codes for the user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'twofactorrecoverycodesresponse' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorStatusController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Controllers\\TwoFactorStatusController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Routing\\Controller',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new controller instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'show',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the two factor authentication status for the authenticated user.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Illuminate\\Http\\JsonResponse
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Controllers',
             'uses' => 
            array (
              'jsonresponse' => 'Illuminate\\Http\\JsonResponse',
              'request' => 'Illuminate\\Http\\Request',
              'controller' => 'Illuminate\\Routing\\Controller',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Http\\JsonResponse',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorConfirmedResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorDisabledResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorEnabledResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Illuminate\\Support\\Collection<int, string>  $recoveryCodes
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recoveryCodes',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorQrCodeResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array{secret: string, qr_code_url: string}  $secretData
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secretData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorRecoveryCodesResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedInterfaceNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
       'phpDoc' => NULL,
       'extends' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Illuminate\\Support\\Collection<int, string>|array<int, string>|array<int, array<string, mixed>>  $recoveryCodes
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recoveryCodes',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorConfirmedResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\TwoFactorConfirmedResponse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'twofactorconfirmedresponsecontract' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorConfirmedResponse',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorDisabledResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\TwoFactorDisabledResponse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'twofactordisabledresponsecontract' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorDisabledResponse',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorEnabledResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\TwoFactorEnabledResponse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Illuminate\\Support\\Collection<int, string>  $recoveryCodes
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'twofactorenabledresponsecontract' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorEnabledResponse',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recoveryCodes',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorQrCodeResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\TwoFactorQrCodeResponse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  array{secret: string, qr_code_url: string}  $secretData
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'twofactorqrcoderesponsecontract' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorQrCodeResponse',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secretData',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorRecoveryCodesResponse.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Http\\Responses\\TwoFactorRecoveryCodesResponse',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
        0 => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'toResponse',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create an HTTP response that represents the object.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Illuminate\\Support\\Collection<int, string>|array<int, string>|array<int, array<string, mixed>>  $recoveryCodes
     * @return \\Symfony\\Component\\HttpFoundation\\Response
     */',
             'namespace' => 'MultiFactorAuthentication\\Http\\Responses',
             'uses' => 
            array (
              'request' => 'Illuminate\\Http\\Request',
              'collection' => 'Illuminate\\Support\\Collection',
              'twofactorrecoverycodesresponsecontract' => 'MultiFactorAuthentication\\Http\\Responses\\Contracts\\TwoFactorRecoveryCodesResponse',
              'response' => 'Symfony\\Component\\HttpFoundation\\Response',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Symfony\\Component\\HttpFoundation\\Response',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'recoveryCodes',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Middleware/RequireMfa.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Middleware\\RequireMfa',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'mfaManager',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The MFA manager instance.
     *
     * @var \\MultiFactorAuthentication\\MultiFactorAuthenticationManager
     */',
             'namespace' => 'MultiFactorAuthentication\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new middleware instance.
     *
     * @param  \\MultiFactorAuthentication\\MultiFactorAuthenticationManager  $mfaManager
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfaManager',
               'type' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Handle an incoming request.
     *
     * @param  \\Illuminate\\Http\\Request  $request
     * @param  \\Closure  $next
     * @return mixed
     */',
             'namespace' => 'MultiFactorAuthentication\\Middleware',
             'uses' => 
            array (
              'closure' => 'Closure',
              'request' => 'Illuminate\\Http\\Request',
              'auth' => 'Illuminate\\Support\\Facades\\Auth',
              'multifactorauthenticationmanager' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'request',
               'type' => 'Illuminate\\Http\\Request',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'next',
               'type' => 'Closure',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<MultiFactorAuthentication> where(string $column, mixed $operator = null, mixed $value = null)
 * @method static MultiFactorAuthentication|null find(int $id)
 * @method static MultiFactorAuthentication updateOrCreate(array<string, mixed> $attributes, array<string, mixed> $values = [])
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<MultiFactorAuthentication> where(string $column, mixed $operator = null, mixed $value = null)
 * @method static \\Illuminate\\Database\\Eloquent\\Builder<MultiFactorAuthentication> where(string $column, mixed $value)
 * @method static MultiFactorAuthentication|null first()
 */',
         'namespace' => 'MultiFactorAuthentication\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
          'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'authenticatable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the parent authenticatable model.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\MorphTo
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'recoveryCodes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the recovery codes for this MFA method.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\HasMany
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isVerified',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if MFA is verified.
     *
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isActive',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if MFA is enabled and verified.
     *
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'hasmany' => 'Illuminate\\Database\\Eloquent\\Relations\\HasMany',
              'morphto' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphTo',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
       'phpDoc' => 
      \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * @method static RecoveryCode create(array<string, mixed> $attributes = [])
 */',
         'namespace' => 'MultiFactorAuthentication\\Models',
         'uses' => 
        array (
          'model' => 'Illuminate\\Database\\Eloquent\\Model',
          'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
          'hash' => 'Illuminate\\Support\\Facades\\Hash',
        ),
         'constUses' => 
        array (
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Database\\Eloquent\\Model',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'table',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The table associated with the model.
     *
     * @var string
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'fillable',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'casts',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'timestamps',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => true,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'multiFactorAuthentication',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get the multi-factor authentication that owns this recovery code.
     *
     * @return \\Illuminate\\Database\\Eloquent\\Relations\\BelongsTo
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'setCodeAttribute',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Hash the code before saving.
     *
     * @param  string  $value
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'value',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'markAsUsed',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Mark the recovery code as used.
     *
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'matches',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if the recovery code matches the provided code.
     *
     * @param  string  $code
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication\\Models',
             'uses' => 
            array (
              'model' => 'Illuminate\\Database\\Eloquent\\Model',
              'belongsto' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationManager.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\MultiFactorAuthenticationManager',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'google2fa',
          ),
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * The Google2FA instance.
     *
     * @var \\PragmaRX\\Google2FA\\Google2FA
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'type' => NULL,
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Create a new MFA manager instance.
     *
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateSecret',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate a new TOTP secret for the user.
     *
     * @param  mixed  $user
     * @return array{secret: string, qr_code_url: string}
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'enableTotp',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Enable TOTP for a user.
     *
     * @param  mixed  $user
     * @param  string  $secret
     * @param  string  $verificationCode
     * @param  bool  $returnRecoveryCodes
     * @return bool|\\Illuminate\\Support\\Collection<int, string>
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secret',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'verificationCode',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'returnRecoveryCodes',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verifyTotp',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify a TOTP code.
     *
     * @param  string  $secret
     * @param  string  $code
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'secret',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verifyTotpForUser',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify TOTP code for a user.
     *
     * @param  mixed  $user
     * @param  string  $code
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        6 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verifyRecoveryCode',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify a recovery code for a user.
     *
     * @param  mixed  $user
     * @param  string  $code
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        7 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'verify',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Verify MFA code (TOTP or recovery code).
     *
     * @param  mixed  $user
     * @param  string  $code
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'code',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        8 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'generateRecoveryCodes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Generate recovery codes for an MFA record.
     *
     * @param  \\MultiFactorAuthentication\\Models\\MultiFactorAuthentication  $mfa
     * @return \\Illuminate\\Support\\Collection<int, string>
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'Illuminate\\Support\\Collection',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'mfa',
               'type' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        9 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'disable',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Disable MFA for a user.
     *
     * @param  mixed  $user
     * @param  string  $method
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        10 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isEnabled',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Check if user has MFA enabled.
     *
     * @param  mixed  $user
     * @param  string  $method
     * @return bool
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        11 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getMfaRecord',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get MFA record for user.
     *
     * @param  mixed  $user
     * @param  string  $method
     * @return \\MultiFactorAuthentication\\Models\\MultiFactorAuthentication|null
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => '?MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'method',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        12 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getRemainingRecoveryCodesCount',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Get remaining recovery codes count for user.
     *
     * @param  mixed  $user
     * @return int
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'multifactorauthentication' => 'MultiFactorAuthentication\\Models\\MultiFactorAuthentication',
              'recoverycode' => 'MultiFactorAuthentication\\Models\\RecoveryCode',
              'google2fa' => 'PragmaRX\\Google2FA\\Google2FA',
              'collection' => 'Illuminate\\Support\\Collection',
              'crypt' => 'Illuminate\\Support\\Facades\\Crypt',
              'hash' => 'Illuminate\\Support\\Facades\\Hash',
              'str' => 'Illuminate\\Support\\Str',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'int',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'user',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'MultiFactorAuthentication\\MultiFactorAuthenticationServiceProvider',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => 'Illuminate\\Support\\ServiceProvider',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'register',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Register any application services.
     *
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'boot',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Bootstrap any application services.
     *
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'loadWebRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Load package web routes.
     *
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'loadApiRoutes',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Load package API routes.
     *
     * @return void
     */',
             'namespace' => 'MultiFactorAuthentication',
             'uses' => 
            array (
              'serviceprovider' => 'Illuminate\\Support\\ServiceProvider',
              'route' => 'Illuminate\\Support\\Facades\\Route',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
