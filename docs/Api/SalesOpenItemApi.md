# kruegge82\weclapp\SalesOpenItemApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**salesOpenItemCountGet()**](SalesOpenItemApi.md#salesOpenItemCountGet) | **GET** /salesOpenItem/count |  |
| [**salesOpenItemGet()**](SalesOpenItemApi.md#salesOpenItemGet) | **GET** /salesOpenItem |  |
| [**salesOpenItemIdIdCreatePaymentApplicationPost()**](SalesOpenItemApi.md#salesOpenItemIdIdCreatePaymentApplicationPost) | **POST** /salesOpenItem/id/{id}/createPaymentApplication |  |
| [**salesOpenItemIdIdGet()**](SalesOpenItemApi.md#salesOpenItemIdIdGet) | **GET** /salesOpenItem/id/{id} |  |
| [**salesOpenItemIdIdUpdatePaymentStatePost()**](SalesOpenItemApi.md#salesOpenItemIdIdUpdatePaymentStatePost) | **POST** /salesOpenItem/id/{id}/updatePaymentState |  |


## `salesOpenItemCountGet()`

```php
salesOpenItemCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count salesOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->salesOpenItemCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOpenItemApi->salesOpenItemCountGet: ', $e->getMessage(), PHP_EOL;
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

## `salesOpenItemGet()`

```php
salesOpenItemGet($page, $page_size, $sort): \kruegge82\weclapp\Model\SalesOpenItemGet200Response
```



query salesOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->salesOpenItemGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOpenItemApi->salesOpenItemGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SalesOpenItemGet200Response**](../Model/SalesOpenItemGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOpenItemIdIdCreatePaymentApplicationPost()`

```php
salesOpenItemIdIdCreatePaymentApplicationPost($id, $body): \kruegge82\weclapp\Model\SalesOpenItemIdIdCreatePaymentApplicationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest(); // \kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest

try {
    $result = $apiInstance->salesOpenItemIdIdCreatePaymentApplicationPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOpenItemApi->salesOpenItemIdIdCreatePaymentApplicationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest**](../Model/PurchaseOpenItemIdIdCreatePaymentApplicationPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOpenItemIdIdCreatePaymentApplicationPost200Response**](../Model/SalesOpenItemIdIdCreatePaymentApplicationPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOpenItemIdIdGet()`

```php
salesOpenItemIdIdGet($id): \kruegge82\weclapp\Model\SalesOpenItem
```



query salesOpenItem

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesOpenItemIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOpenItemApi->salesOpenItemIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOpenItem**](../Model/SalesOpenItem.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesOpenItemIdIdUpdatePaymentStatePost()`

```php
salesOpenItemIdIdUpdatePaymentStatePost($id, $body): \kruegge82\weclapp\Model\SalesOpenItemIdIdCreatePaymentApplicationPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesOpenItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest(); // \kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest

try {
    $result = $apiInstance->salesOpenItemIdIdUpdatePaymentStatePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOpenItemApi->salesOpenItemIdIdUpdatePaymentStatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\PurchaseOpenItemIdIdUpdatePaymentStatePostRequest**](../Model/PurchaseOpenItemIdIdUpdatePaymentStatePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\SalesOpenItemIdIdCreatePaymentApplicationPost200Response**](../Model/SalesOpenItemIdIdCreatePaymentApplicationPost200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
