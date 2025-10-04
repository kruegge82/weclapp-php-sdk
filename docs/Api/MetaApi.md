# kruegge82\weclapp\MetaApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**metaLegacyReferencePropertiesGet()**](MetaApi.md#metaLegacyReferencePropertiesGet) | **GET** /meta/legacyReferenceProperties |  |
| [**metaQueryFilterPropertiesGet()**](MetaApi.md#metaQueryFilterPropertiesGet) | **GET** /meta/queryFilterProperties |  |
| [**metaQuerySortPropertiesGet()**](MetaApi.md#metaQuerySortPropertiesGet) | **GET** /meta/querySortProperties |  |
| [**metaResourcesGet()**](MetaApi.md#metaResourcesGet) | **GET** /meta/resources |  |


## `metaLegacyReferencePropertiesGet()`

```php
metaLegacyReferencePropertiesGet($resource): \kruegge82\weclapp\Model\MetaLegacyReferencePropertiesGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string

try {
    $result = $apiInstance->metaLegacyReferencePropertiesGet($resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->metaLegacyReferencePropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\MetaLegacyReferencePropertiesGet200Response**](../Model/MetaLegacyReferencePropertiesGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaQueryFilterPropertiesGet()`

```php
metaQueryFilterPropertiesGet($resource): \kruegge82\weclapp\Model\MetaQueryFilterPropertiesGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string

try {
    $result = $apiInstance->metaQueryFilterPropertiesGet($resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->metaQueryFilterPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\MetaQueryFilterPropertiesGet200Response**](../Model/MetaQueryFilterPropertiesGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaQuerySortPropertiesGet()`

```php
metaQuerySortPropertiesGet($resource): \kruegge82\weclapp\Model\MetaQueryFilterPropertiesGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$resource = 'resource_example'; // string

try {
    $result = $apiInstance->metaQuerySortPropertiesGet($resource);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->metaQuerySortPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resource** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\MetaQueryFilterPropertiesGet200Response**](../Model/MetaQueryFilterPropertiesGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `metaResourcesGet()`

```php
metaResourcesGet(): \kruegge82\weclapp\Model\MetaLegacyReferencePropertiesGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\MetaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->metaResourcesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetaApi->metaResourcesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\MetaLegacyReferencePropertiesGet200Response**](../Model/MetaLegacyReferencePropertiesGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
