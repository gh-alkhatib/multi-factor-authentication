<?php declare(strict_types = 1);

// odsl-/Users/ghiath/Desktop/sites/multi-factor-authentication/src
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v1',
   'data' => 
  array (
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Middleware/RequireMfa.php' => 
    array (
      0 => 'c92157224514fee0bec96d060165f7e010568b67',
      1 => 
      array (
        0 => 'multifactorauthentication\\middleware\\requiremfa',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\middleware\\__construct',
        1 => 'multifactorauthentication\\middleware\\handle',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationServiceProvider.php' => 
    array (
      0 => '95ab3138fedc0584328c7288ba763c9649990503',
      1 => 
      array (
        0 => 'multifactorauthentication\\multifactorauthenticationserviceprovider',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\register',
        1 => 'multifactorauthentication\\boot',
        2 => 'multifactorauthentication\\loadwebroutes',
        3 => 'multifactorauthentication\\loadapiroutes',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/RecoveryCode.php' => 
    array (
      0 => 'a89143a70eb87d241f531617f6b9958bfb564396',
      1 => 
      array (
        0 => 'multifactorauthentication\\models\\recoverycode',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\models\\multifactorauthentication',
        1 => 'multifactorauthentication\\models\\setcodeattribute',
        2 => 'multifactorauthentication\\models\\markasused',
        3 => 'multifactorauthentication\\models\\matches',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Models/MultiFactorAuthentication.php' => 
    array (
      0 => '8adbb8c413f19e0265e6a543e77bd46999497420',
      1 => 
      array (
        0 => 'multifactorauthentication\\models\\multifactorauthentication',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\models\\authenticatable',
        1 => 'multifactorauthentication\\models\\recoverycodes',
        2 => 'multifactorauthentication\\models\\isverified',
        3 => 'multifactorauthentication\\models\\isactive',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/MultiFactorAuthenticationController.php' => 
    array (
      0 => '1094749c9bd9594e4041cd5a8d9329500e0f8ea7',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\multifactorauthenticationcontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\showsetup',
        2 => 'multifactorauthentication\\http\\controllers\\setup',
        3 => 'multifactorauthentication\\http\\controllers\\showverify',
        4 => 'multifactorauthentication\\http\\controllers\\verify',
        5 => 'multifactorauthentication\\http\\controllers\\showrecoverycodes',
        6 => 'multifactorauthentication\\http\\controllers\\regeneraterecoverycodes',
        7 => 'multifactorauthentication\\http\\controllers\\disable',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/MultiFactorAuthenticationManager.php' => 
    array (
      0 => '106f6904a671e3ac4dfa5f9c439c7d8e00a5478e',
      1 => 
      array (
        0 => 'multifactorauthentication\\multifactorauthenticationmanager',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\__construct',
        1 => 'multifactorauthentication\\generatesecret',
        2 => 'multifactorauthentication\\enabletotp',
        3 => 'multifactorauthentication\\verifytotp',
        4 => 'multifactorauthentication\\verifytotpforuser',
        5 => 'multifactorauthentication\\verifyrecoverycode',
        6 => 'multifactorauthentication\\verify',
        7 => 'multifactorauthentication\\generaterecoverycodes',
        8 => 'multifactorauthentication\\disable',
        9 => 'multifactorauthentication\\isenabled',
        10 => 'multifactorauthentication\\getmfarecord',
        11 => 'multifactorauthentication\\getremainingrecoverycodescount',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Concerns/HasMultiFactorAuthentication.php' => 
    array (
      0 => '743a61b0bf36f6776abc9381061ccc0ce77d2916',
      1 => 
      array (
        0 => 'multifactorauthentication\\concerns\\hasmultifactorauthentication',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\concerns\\multifactorauthentications',
        1 => 'multifactorauthentication\\concerns\\hasmfaenabled',
        2 => 'multifactorauthentication\\concerns\\getmfarecord',
        3 => 'multifactorauthentication\\concerns\\getremainingrecoverycodescount',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/Api/MultiFactorAuthenticationApiController.php' => 
    array (
      0 => '155e56177821cabc285f652bd7a247bb81c81a26',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\api\\multifactorauthenticationapicontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\api\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\api\\status',
        2 => 'multifactorauthentication\\http\\controllers\\api\\getsetup',
        3 => 'multifactorauthentication\\http\\controllers\\api\\setup',
        4 => 'multifactorauthentication\\http\\controllers\\api\\verify',
        5 => 'multifactorauthentication\\http\\controllers\\api\\getrecoverycodes',
        6 => 'multifactorauthentication\\http\\controllers\\api\\regeneraterecoverycodes',
        7 => 'multifactorauthentication\\http\\controllers\\api\\disable',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorConfirmedController.php' => 
    array (
      0 => 'f8b32cd6c8388db3c74ddb6d833a5ae01dafbdaf',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\twofactorconfirmedcontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\store',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorRecoveryCodeController.php' => 
    array (
      0 => '1f16d93ae4eccbe60bdbf6394d4fcbde3dc26330',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\twofactorrecoverycodecontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\index',
        2 => 'multifactorauthentication\\http\\controllers\\store',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorQrCodeController.php' => 
    array (
      0 => '1194be29cf837019f5494c36a0191c1a5c4311d8',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\twofactorqrcodecontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\show',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorStatusController.php' => 
    array (
      0 => 'e25dfbcd648bf88dd6950d42b87a934cf9c140a5',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\twofactorstatuscontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\show',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Controllers/TwoFactorAuthenticationController.php' => 
    array (
      0 => '70ef892073c00d5b08fb5f6792de7c67f8830429',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\twofactorauthenticationcontroller',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\controllers\\__construct',
        1 => 'multifactorauthentication\\http\\controllers\\store',
        2 => 'multifactorauthentication\\http\\controllers\\destroy',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorQrCodeResponse.php' => 
    array (
      0 => '81726ea7e5ea058cd3f33dea529d5c55b5825465',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\twofactorqrcoderesponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorEnabledResponse.php' => 
    array (
      0 => '3899150a91a55c42967cc566d15bd5f3de9974a6',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\twofactorenabledresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorQrCodeResponse.php' => 
    array (
      0 => 'cabd725ac69e8a826c84dccdf6dd3df9a73586ac',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\twofactorqrcoderesponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorEnabledResponse.php' => 
    array (
      0 => 'b3ad9a3734db770f3260528e6f8519bf6d5fe332',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\twofactorenabledresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorRecoveryCodesResponse.php' => 
    array (
      0 => 'a633133cd94641b238d4fda3b1a5f2002c6f6e6d',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\twofactorrecoverycodesresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorDisabledResponse.php' => 
    array (
      0 => '69384ab5cc8a82e91ff57c946cbb6051936e1cee',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\twofactordisabledresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/Contracts/TwoFactorConfirmedResponse.php' => 
    array (
      0 => '817b9f1f8214326c027f4dc77c4c900f8aff876d',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\twofactorconfirmedresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\contracts\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorRecoveryCodesResponse.php' => 
    array (
      0 => 'b8b671df9faa4433039bde58a0de07f41c416b21',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\twofactorrecoverycodesresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorDisabledResponse.php' => 
    array (
      0 => 'ffb6e795d7a6a5f7305b39f09da60ccb245e781f',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\twofactordisabledresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
    '/Users/ghiath/Desktop/sites/multi-factor-authentication/src/Http/Responses/TwoFactorConfirmedResponse.php' => 
    array (
      0 => '3430145b8a28e468ad74bcfb4453593d08e6a3db',
      1 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\twofactorconfirmedresponse',
      ),
      2 => 
      array (
        0 => 'multifactorauthentication\\http\\responses\\toresponse',
      ),
      3 => 
      array (
      ),
    ),
  ),
));