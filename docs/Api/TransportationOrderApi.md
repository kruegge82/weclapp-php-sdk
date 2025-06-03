# kruegge82\weclapp\TransportationOrderApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**transportationOrderCountGet()**](TransportationOrderApi.md#transportationOrderCountGet) | **GET** /transportationOrder/count |  |
| [**transportationOrderGet()**](TransportationOrderApi.md#transportationOrderGet) | **GET** /transportationOrder |  |
| [**transportationOrderIdIdCreatePickPost()**](TransportationOrderApi.md#transportationOrderIdIdCreatePickPost) | **POST** /transportationOrder/id/{id}/createPick |  |
| [**transportationOrderIdIdCreatePickingListPost()**](TransportationOrderApi.md#transportationOrderIdIdCreatePickingListPost) | **POST** /transportationOrder/id/{id}/createPickingList |  |
| [**transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost()**](TransportationOrderApi.md#transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost) | **POST** /transportationOrder/id/{id}/createTransportationOrderFromUnpickedRecords |  |
| [**transportationOrderIdIdDelete()**](TransportationOrderApi.md#transportationOrderIdIdDelete) | **DELETE** /transportationOrder/id/{id} |  |
| [**transportationOrderIdIdGet()**](TransportationOrderApi.md#transportationOrderIdIdGet) | **GET** /transportationOrder/id/{id} |  |
| [**transportationOrderIdIdInternalTransportReferencesForPickUpGet()**](TransportationOrderApi.md#transportationOrderIdIdInternalTransportReferencesForPickUpGet) | **GET** /transportationOrder/id/{id}/internalTransportReferencesForPickUp |  |
| [**transportationOrderIdIdPickPickPost()**](TransportationOrderApi.md#transportationOrderIdIdPickPickPost) | **POST** /transportationOrder/id/{id}/pickPick |  |
| [**transportationOrderIdIdPut()**](TransportationOrderApi.md#transportationOrderIdIdPut) | **PUT** /transportationOrder/id/{id} |  |
| [**transportationOrderIdIdPutDownInternalTransportReferencePost()**](TransportationOrderApi.md#transportationOrderIdIdPutDownInternalTransportReferencePost) | **POST** /transportationOrder/id/{id}/putDownInternalTransportReference |  |
| [**transportationOrderPost()**](TransportationOrderApi.md#transportationOrderPost) | **POST** /transportationOrder |  |


## `transportationOrderCountGet()`

```php
transportationOrderCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->transportationOrderCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderGet()`

```php
transportationOrderGet($page, $page_size, $sort): \kruegge82\weclapp\Model\TransportationOrderGet200Response
```



query transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->transportationOrderGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderGet200Response**](../Model/TransportationOrderGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdCreatePickPost()`

```php
transportationOrderIdIdCreatePickPost($id, $body): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPostRequest

try {
    $result = $apiInstance->transportationOrderIdIdCreatePickPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdCreatePickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPostRequest**](../Model/TransportationOrderIdIdCreatePickPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdCreatePickingListPost()`

```php
transportationOrderIdIdCreatePickingListPost($id, $body)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->transportationOrderIdIdCreatePickingListPost($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdCreatePickingListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | **object**|  | |

### Return type

void (empty response body)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/jpeg`, `image/png`, `application/pdf`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost()`

```php
transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost($id, $body): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest

try {
    $result = $apiInstance->transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest**](../Model/TransportationOrderIdIdCreateTransportationOrderFromUnpickedRecordsPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdDelete()`

```php
transportationOrderIdIdDelete($id, $dry_run)
```



delete a transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->transportationOrderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdGet()`

```php
transportationOrderIdIdGet($id): \kruegge82\weclapp\Model\TransportationOrder
```



query transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->transportationOrderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdInternalTransportReferencesForPickUpGet()`

```php
transportationOrderIdIdInternalTransportReferencesForPickUpGet($id, $ignore_current_loading_equipment): \kruegge82\weclapp\Model\InternalTransportReferenceGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$ignore_current_loading_equipment = True; // bool

try {
    $result = $apiInstance->transportationOrderIdIdInternalTransportReferencesForPickUpGet($id, $ignore_current_loading_equipment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdInternalTransportReferencesForPickUpGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **ignore_current_loading_equipment** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InternalTransportReferenceGet200Response**](../Model/InternalTransportReferenceGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdPickPickPost()`

```php
transportationOrderIdIdPickPickPost($id, $body): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TransportationOrderIdIdPickPickPostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdPickPickPostRequest

try {
    $result = $apiInstance->transportationOrderIdIdPickPickPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdPickPickPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdPickPickPostRequest**](../Model/TransportationOrderIdIdPickPickPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdPut()`

```php
transportationOrderIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\TransportationOrder
```



update transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TransportationOrder(); // \kruegge82\weclapp\Model\TransportationOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->transportationOrderIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderIdIdPutDownInternalTransportReferencePost()`

```php
transportationOrderIdIdPutDownInternalTransportReferencePost($id, $body): \kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostRequest(); // \kruegge82\weclapp\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostRequest

try {
    $result = $apiInstance->transportationOrderIdIdPutDownInternalTransportReferencePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderIdIdPutDownInternalTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\TransportationOrderIdIdPutDownInternalTransportReferencePostRequest**](../Model/TransportationOrderIdIdPutDownInternalTransportReferencePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrderIdIdCreatePickPost200Response**](../Model/TransportationOrderIdIdCreatePickPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transportationOrderPost()`

```php
transportationOrderPost($body, $dry_run): \kruegge82\weclapp\Model\TransportationOrder
```



create a transportationOrder

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TransportationOrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\TransportationOrder(); // \kruegge82\weclapp\Model\TransportationOrder
$dry_run = True; // bool

try {
    $result = $apiInstance->transportationOrderPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransportationOrderApi->transportationOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TransportationOrder**](../Model/TransportationOrder.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
