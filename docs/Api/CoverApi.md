# CoverServicePhpClient\Client\CoverApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCoverCollection**](CoverApi.md#getcovercollection) | **GET** /api/cover/{type} | Retrieves the collection of Cover resources.
[**getCoverItem**](CoverApi.md#getcoveritem) | **GET** /api/cover/{type}/{id} | Retrieves a Cover resource.

# **getCoverCollection**
> \CoverServicePhpClient\Client\Model\CoverRead[] getCoverCollection($type, $id, $generic, $size, $limit, $offset)

Retrieves the collection of Cover resources.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CoverServicePhpClient\Client\Api\CoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = "type_example"; // string |
$id = "id_example"; // string |
$generic = "generic_example"; // string |
$size = "size_example"; // string |
$limit = 56; // int |
$offset = 56; // int |

try {
    $result = $apiInstance->getCoverCollection($type, $id, $generic, $size, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoverApi->getCoverCollection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |
 **id** | **string**|  |
 **generic** | **string**|  | [optional]
 **size** | **string**|  | [optional]
 **limit** | **int**|  | [optional]
 **offset** | **int**|  | [optional]

### Return type

[**\CoverServicePhpClient\Client\Model\CoverRead[]**](../Model/CoverRead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, application/xml, text/xml, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCoverItem**
> \CoverServicePhpClient\Client\Model\CoverRead getCoverItem($id, $type)

Retrieves a Cover resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new CoverServicePhpClient\Client\Api\CoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string |
$type = "type_example"; // string |

try {
    $result = $apiInstance->getCoverItem($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CoverApi->getCoverItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **type** | **string**|  |

### Return type

[**\CoverServicePhpClient\Client\Model\CoverRead**](../Model/CoverRead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/ld+json, application/xml, text/xml, text/html

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

