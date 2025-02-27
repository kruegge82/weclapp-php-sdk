# kruegge82\weclapp\ArticleSupplySourceApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**articleSupplySourceCountGet()**](ArticleSupplySourceApi.md#articleSupplySourceCountGet) | **GET** /articleSupplySource/count | count articleSupplySource |
| [**articleSupplySourceGet()**](ArticleSupplySourceApi.md#articleSupplySourceGet) | **GET** /articleSupplySource | query articleSupplySource |
| [**articleSupplySourceIdIdDelete()**](ArticleSupplySourceApi.md#articleSupplySourceIdIdDelete) | **DELETE** /articleSupplySource/id/{id} | delete a articleSupplySource |
| [**articleSupplySourceIdIdGet()**](ArticleSupplySourceApi.md#articleSupplySourceIdIdGet) | **GET** /articleSupplySource/id/{id} | query a specific articleSupplySource |
| [**articleSupplySourceIdIdPut()**](ArticleSupplySourceApi.md#articleSupplySourceIdIdPut) | **PUT** /articleSupplySource/id/{id} | update a articleSupplySource |
| [**articleSupplySourcePost()**](ArticleSupplySourceApi.md#articleSupplySourcePost) | **POST** /articleSupplySource | create a articleSupplySource |


## `articleSupplySourceCountGet()`

```php
articleSupplySourceCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count articleSupplySource

count articleSupplySource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleSupplySourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->articleSupplySourceCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleSupplySourceApi->articleSupplySourceCountGet: ', $e->getMessage(), PHP_EOL;
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

## `articleSupplySourceGet()`

```php
articleSupplySourceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties): \kruegge82\weclapp\Model\ArticleSupplySourceGet200Response
```

query articleSupplySource

query articleSupplySource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleSupplySourceApi(
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
$additional_properties = 'additional_properties_example'; // string

try {
    $result = $apiInstance->articleSupplySourceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities, $additional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleSupplySourceApi->articleSupplySourceGet: ', $e->getMessage(), PHP_EOL;
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
| **additional_properties** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ArticleSupplySourceGet200Response**](../Model/ArticleSupplySourceGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleSupplySourceIdIdDelete()`

```php
articleSupplySourceIdIdDelete($id, $dry_run)
```

delete a articleSupplySource

delete a articleSupplySource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleSupplySourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->articleSupplySourceIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ArticleSupplySourceApi->articleSupplySourceIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `articleSupplySourceIdIdGet()`

```php
articleSupplySourceIdIdGet($id): \kruegge82\weclapp\Model\ArticleSupplySource
```

query a specific articleSupplySource

query a specific articleSupplySource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleSupplySourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->articleSupplySourceIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleSupplySourceApi->articleSupplySourceIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ArticleSupplySource**](../Model/ArticleSupplySource.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleSupplySourceIdIdPut()`

```php
articleSupplySourceIdIdPut($id, $article_supply_source, $dry_run): \kruegge82\weclapp\Model\ArticleSupplySource
```

update a articleSupplySource

update articleSupplySource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleSupplySourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$article_supply_source = new \kruegge82\weclapp\Model\ArticleSupplySource(); // \kruegge82\weclapp\Model\ArticleSupplySource
$dry_run = True; // bool

try {
    $result = $apiInstance->articleSupplySourceIdIdPut($id, $article_supply_source, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleSupplySourceApi->articleSupplySourceIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **article_supply_source** | [**\kruegge82\weclapp\Model\ArticleSupplySource**](../Model/ArticleSupplySource.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ArticleSupplySource**](../Model/ArticleSupplySource.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `articleSupplySourcePost()`

```php
articleSupplySourcePost($article_supply_source, $dry_run): \kruegge82\weclapp\Model\ArticleSupplySource
```

create a articleSupplySource

create a articleSupplySource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ArticleSupplySourceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$article_supply_source = new \kruegge82\weclapp\Model\ArticleSupplySource(); // \kruegge82\weclapp\Model\ArticleSupplySource
$dry_run = True; // bool

try {
    $result = $apiInstance->articleSupplySourcePost($article_supply_source, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArticleSupplySourceApi->articleSupplySourcePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **article_supply_source** | [**\kruegge82\weclapp\Model\ArticleSupplySource**](../Model/ArticleSupplySource.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ArticleSupplySource**](../Model/ArticleSupplySource.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
