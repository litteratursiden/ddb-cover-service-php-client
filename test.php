<?php

use CoverServicePhpClient\Client\Api\CoverApi;
use CoverServicePhpClient\Client\Configuration;

require_once(__DIR__ . '/vendor/autoload.php');
require_once(__DIR__ . '/config.php');

$config = Configuration::getDefaultConfiguration();

$config->setHost(HOST);
$config->setAccessToken(ACCESS_TOKEN);

$configArray = [];

if (!empty(BASIC_AUTH_PASSWORD) && !empty(BASIC_AUTH_USERNAME)) {
    $config->setUsername(BASIC_AUTH_USERNAME);
    $config->setPassword(BASIC_AUTH_PASSWORD);

    $configArray['auth'] = [BASIC_AUTH_USERNAME, BASIC_AUTH_PASSWORD];
}

$apiInstance = new CoverApi(
    new GuzzleHttp\Client($configArray),
    $config
);

$type = 'pid';
$ids = ['870970-basis:26957087', '870970-basis:53969127'];
$sizes = ['default','medium'];

try {
    $result = $apiInstance->getCoverCollection('pid', implode(',', $ids), 'true', implode(',', $sizes));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoverApi->getCoverCollection: ', $e->getMessage(), PHP_EOL;
}
