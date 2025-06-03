# kruegge82\weclapp\ShippingCarrierApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shippingCarrierCountGet()**](ShippingCarrierApi.md#shippingCarrierCountGet) | **GET** /shippingCarrier/count |  |
| [**shippingCarrierGet()**](ShippingCarrierApi.md#shippingCarrierGet) | **GET** /shippingCarrier |  |
| [**shippingCarrierIdIdDelete()**](ShippingCarrierApi.md#shippingCarrierIdIdDelete) | **DELETE** /shippingCarrier/id/{id} |  |
| [**shippingCarrierIdIdGet()**](ShippingCarrierApi.md#shippingCarrierIdIdGet) | **GET** /shippingCarrier/id/{id} |  |
| [**shippingCarrierIdIdPut()**](ShippingCarrierApi.md#shippingCarrierIdIdPut) | **PUT** /shippingCarrier/id/{id} |  |
| [**shippingCarrierPost()**](ShippingCarrierApi.md#shippingCarrierPost) | **POST** /shippingCarrier |  |


## `shippingCarrierCountGet()`

```php
shippingCarrierCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count shippingCarrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShippingCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->shippingCarrierCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarrierApi->shippingCarrierCountGet: ', $e->getMessage(), PHP_EOL;
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

## `shippingCarrierGet()`

```php
shippingCarrierGet($page, $page_size, $sort): \kruegge82\weclapp\Model\ShippingCarrierGet200Response
```



query shippingCarrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShippingCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->shippingCarrierGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarrierApi->shippingCarrierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ShippingCarrierGet200Response**](../Model/ShippingCarrierGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingCarrierIdIdDelete()`

```php
shippingCarrierIdIdDelete($id, $dry_run)
```



delete a shippingCarrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShippingCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->shippingCarrierIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarrierApi->shippingCarrierIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `shippingCarrierIdIdGet()`

```php
shippingCarrierIdIdGet($id): \kruegge82\weclapp\Model\ShippingCarrier
```



query shippingCarrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShippingCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->shippingCarrierIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarrierApi->shippingCarrierIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ShippingCarrier**](../Model/ShippingCarrier.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingCarrierIdIdPut()`

```php
shippingCarrierIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\ShippingCarrier
```



update shippingCarrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShippingCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\ShippingCarrier(); // \kruegge82\weclapp\Model\ShippingCarrier
$dry_run = True; // bool

try {
    $result = $apiInstance->shippingCarrierIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarrierApi->shippingCarrierIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\ShippingCarrier**](../Model/ShippingCarrier.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ShippingCarrier**](../Model/ShippingCarrier.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shippingCarrierPost()`

```php
shippingCarrierPost($body, $dry_run): \kruegge82\weclapp\Model\ShippingCarrier
```



create a shippingCarrier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShippingCarrierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\ShippingCarrier(); // \kruegge82\weclapp\Model\ShippingCarrier
$dry_run = True; // bool

try {
    $result = $apiInstance->shippingCarrierPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingCarrierApi->shippingCarrierPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\ShippingCarrier**](../Model/ShippingCarrier.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ShippingCarrier**](../Model/ShippingCarrier.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
