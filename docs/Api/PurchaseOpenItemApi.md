# kruegge82\weclapp\PurchaseOpenItemApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOpenItemCountGet()**](PurchaseOpenItemApi.md#purchaseOpenItemCountGet) | **GET** /purchaseOpenItem/count |  |
| [**purchaseOpenItemGet()**](PurchaseOpenItemApi.md#purchaseOpenItemGet) | **GET** /purchaseOpenItem |  |
| [**purchaseOpenItemIdIdCreatePaymentApplicationPost()**](PurchaseOpenItemApi.md#purchaseOpenItemIdIdCreatePaymentApplicationPost) | **POST** /purchaseOpenItem/id/{id}/createPaymentApplication |  |
| [**purchaseOpenItemIdIdGet()**](PurchaseOpenItemApi.md#purchaseOpenItemIdIdGet) | **GET** /purchaseOpenItem/id/{id} |  |
| [**purchaseOpenItemIdIdUpdatePaymentStatePost()**](PurchaseOpenItemApi.md#purchaseOpenItemIdIdUpdatePaymentStatePost) | **POST** /purchaseOpenItem/id/{id}/updatePaymentState |  |


## `purchaseOpenItemCountGet()`

```php
purchaseOpenItemCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count purchaseOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->purchaseOpenItemCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemCountGet: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOpenItemGet()`

```php
purchaseOpenItemGet($page, $page_size, $sort): \kruegge82\weclapp\Model\PurchaseOpenItemGet200Response
```



query purchaseOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->purchaseOpenItemGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItemGet200Response**](../Model/PurchaseOpenItemGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOpenItemIdIdCreatePaymentApplicationPost()`

```php
purchaseOpenItemIdIdCreatePaymentApplicationPost($id, $body): \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest(); // \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest

try {
    $result = $apiInstance->purchaseOpenItemIdIdCreatePaymentApplicationPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemIdIdCreatePaymentApplicationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOpenItemIdIdGet()`

```php
purchaseOpenItemIdIdGet($id): \kruegge82\weclapp\Model\PurchaseOpenItem
```



query purchaseOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->purchaseOpenItemIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItem**](../Model/PurchaseOpenItem.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `purchaseOpenItemIdIdUpdatePaymentStatePost()`

```php
purchaseOpenItemIdIdUpdatePaymentStatePost($id, $body): \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PurchaseOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest(); // \kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest

try {
    $result = $apiInstance->purchaseOpenItemIdIdUpdatePaymentStatePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOpenItemApi->purchaseOpenItemIdIdUpdatePaymentStatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest**](../Model/PurchaseOpenItemIdIdUpdatePaymentStatePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
