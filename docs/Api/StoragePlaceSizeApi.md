# kruegge82\weclapp\StoragePlaceSizeApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storagePlaceSizeCountGet()**](StoragePlaceSizeApi.md#storagePlaceSizeCountGet) | **GET** /storagePlaceSize/count | count storagePlaceSize |
| [**storagePlaceSizeGet()**](StoragePlaceSizeApi.md#storagePlaceSizeGet) | **GET** /storagePlaceSize | query storagePlaceSize |
| [**storagePlaceSizeIdIdDelete()**](StoragePlaceSizeApi.md#storagePlaceSizeIdIdDelete) | **DELETE** /storagePlaceSize/id/{id} | delete a storagePlaceSize |
| [**storagePlaceSizeIdIdGet()**](StoragePlaceSizeApi.md#storagePlaceSizeIdIdGet) | **GET** /storagePlaceSize/id/{id} | query a specific storagePlaceSize |
| [**storagePlaceSizeIdIdPut()**](StoragePlaceSizeApi.md#storagePlaceSizeIdIdPut) | **PUT** /storagePlaceSize/id/{id} | update a storagePlaceSize |
| [**storagePlaceSizePost()**](StoragePlaceSizeApi.md#storagePlaceSizePost) | **POST** /storagePlaceSize | create a storagePlaceSize |


## `storagePlaceSizeCountGet()`

```php
storagePlaceSizeCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count storagePlaceSize

count storagePlaceSize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\StoragePlaceSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->storagePlaceSizeCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePlaceSizeApi->storagePlaceSizeCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePlaceSizeGet()`

```php
storagePlaceSizeGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\StoragePlaceSizeGet200Response
```

query storagePlaceSize

query storagePlaceSize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\StoragePlaceSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->storagePlaceSizeGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePlaceSizeApi->storagePlaceSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\StoragePlaceSizeGet200Response**](../Model/StoragePlaceSizeGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePlaceSizeIdIdDelete()`

```php
storagePlaceSizeIdIdDelete($id, $dry_run)
```

delete a storagePlaceSize

delete a storagePlaceSize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\StoragePlaceSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->storagePlaceSizeIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling StoragePlaceSizeApi->storagePlaceSizeIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePlaceSizeIdIdGet()`

```php
storagePlaceSizeIdIdGet($id): \kruegge82\weclapp\Model\StoragePlaceSize
```

query a specific storagePlaceSize

query a specific storagePlaceSize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\StoragePlaceSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->storagePlaceSizeIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePlaceSizeApi->storagePlaceSizeIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\StoragePlaceSize**](../Model/StoragePlaceSize.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePlaceSizeIdIdPut()`

```php
storagePlaceSizeIdIdPut($id, $storage_place_size, $dry_run): \kruegge82\weclapp\Model\StoragePlaceSize
```

update a storagePlaceSize

update storagePlaceSize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\StoragePlaceSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$storage_place_size = new \kruegge82\weclapp\Model\StoragePlaceSize(); // \kruegge82\weclapp\Model\StoragePlaceSize
$dry_run = True; // bool

try {
    $result = $apiInstance->storagePlaceSizeIdIdPut($id, $storage_place_size, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePlaceSizeApi->storagePlaceSizeIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **storage_place_size** | [**\kruegge82\weclapp\Model\StoragePlaceSize**](../Model/StoragePlaceSize.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\StoragePlaceSize**](../Model/StoragePlaceSize.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePlaceSizePost()`

```php
storagePlaceSizePost($storage_place_size, $dry_run): \kruegge82\weclapp\Model\StoragePlaceSize
```

create a storagePlaceSize

create a storagePlaceSize

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\StoragePlaceSizeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$storage_place_size = new \kruegge82\weclapp\Model\StoragePlaceSize(); // \kruegge82\weclapp\Model\StoragePlaceSize
$dry_run = True; // bool

try {
    $result = $apiInstance->storagePlaceSizePost($storage_place_size, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePlaceSizeApi->storagePlaceSizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **storage_place_size** | [**\kruegge82\weclapp\Model\StoragePlaceSize**](../Model/StoragePlaceSize.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\StoragePlaceSize**](../Model/StoragePlaceSize.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
