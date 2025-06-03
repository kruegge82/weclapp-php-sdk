# kruegge82\weclapp\ProductionWorkScheduleAssignmentApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productionWorkScheduleAssignmentCountGet()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentCountGet) | **GET** /productionWorkScheduleAssignment/count |  |
| [**productionWorkScheduleAssignmentGet()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentGet) | **GET** /productionWorkScheduleAssignment |  |
| [**productionWorkScheduleAssignmentIdIdDelete()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentIdIdDelete) | **DELETE** /productionWorkScheduleAssignment/id/{id} |  |
| [**productionWorkScheduleAssignmentIdIdGet()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentIdIdGet) | **GET** /productionWorkScheduleAssignment/id/{id} |  |
| [**productionWorkScheduleAssignmentIdIdPut()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentIdIdPut) | **PUT** /productionWorkScheduleAssignment/id/{id} |  |
| [**productionWorkScheduleAssignmentPost()**](ProductionWorkScheduleAssignmentApi.md#productionWorkScheduleAssignmentPost) | **POST** /productionWorkScheduleAssignment |  |


## `productionWorkScheduleAssignmentCountGet()`

```php
productionWorkScheduleAssignmentCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->productionWorkScheduleAssignmentCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentCountGet: ', $e->getMessage(), PHP_EOL;
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

## `productionWorkScheduleAssignmentGet()`

```php
productionWorkScheduleAssignmentGet($page, $page_size, $sort): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignmentGet200Response
```



query productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleAssignmentGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignmentGet200Response**](../Model/ProductionWorkScheduleAssignmentGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleAssignmentIdIdDelete()`

```php
productionWorkScheduleAssignmentIdIdDelete($id, $dry_run)
```



delete a productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->productionWorkScheduleAssignmentIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `productionWorkScheduleAssignmentIdIdGet()`

```php
productionWorkScheduleAssignmentIdIdGet($id): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
```



query productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->productionWorkScheduleAssignmentIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleAssignmentIdIdPut()`

```php
productionWorkScheduleAssignmentIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
```



update productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment(); // \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
$dry_run = True; // bool

try {
    $result = $apiInstance->productionWorkScheduleAssignmentIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productionWorkScheduleAssignmentPost()`

```php
productionWorkScheduleAssignmentPost($body, $dry_run): \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
```



create a productionWorkScheduleAssignment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ProductionWorkScheduleAssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment(); // \kruegge82\weclapp\Model\ProductionWorkScheduleAssignment
$dry_run = True; // bool

try {
    $result = $apiInstance->productionWorkScheduleAssignmentPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductionWorkScheduleAssignmentApi->productionWorkScheduleAssignmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ProductionWorkScheduleAssignment**](../Model/ProductionWorkScheduleAssignment.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
