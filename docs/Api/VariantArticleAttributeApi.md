# kruegge82\weclapp\VariantArticleAttributeApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**variantArticleAttributeCountGet()**](VariantArticleAttributeApi.md#variantArticleAttributeCountGet) | **GET** /variantArticleAttribute/count | count variantArticleAttribute |
| [**variantArticleAttributeGet()**](VariantArticleAttributeApi.md#variantArticleAttributeGet) | **GET** /variantArticleAttribute | query variantArticleAttribute |
| [**variantArticleAttributeIdIdDelete()**](VariantArticleAttributeApi.md#variantArticleAttributeIdIdDelete) | **DELETE** /variantArticleAttribute/id/{id} | delete a variantArticleAttribute |
| [**variantArticleAttributeIdIdGet()**](VariantArticleAttributeApi.md#variantArticleAttributeIdIdGet) | **GET** /variantArticleAttribute/id/{id} | query a specific variantArticleAttribute |
| [**variantArticleAttributeIdIdPut()**](VariantArticleAttributeApi.md#variantArticleAttributeIdIdPut) | **PUT** /variantArticleAttribute/id/{id} | update a variantArticleAttribute |
| [**variantArticleAttributePost()**](VariantArticleAttributeApi.md#variantArticleAttributePost) | **POST** /variantArticleAttribute | create a variantArticleAttribute |


## `variantArticleAttributeCountGet()`

```php
variantArticleAttributeCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count variantArticleAttribute

count variantArticleAttribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\VariantArticleAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->variantArticleAttributeCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantArticleAttributeApi->variantArticleAttributeCountGet: ', $e->getMessage(), PHP_EOL;
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

## `variantArticleAttributeGet()`

```php
variantArticleAttributeGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\VariantArticleAttributeGet200Response
```

query variantArticleAttribute

query variantArticleAttribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\VariantArticleAttributeApi(
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
    $result = $apiInstance->variantArticleAttributeGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantArticleAttributeApi->variantArticleAttributeGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\VariantArticleAttributeGet200Response**](../Model/VariantArticleAttributeGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `variantArticleAttributeIdIdDelete()`

```php
variantArticleAttributeIdIdDelete($id, $dry_run)
```

delete a variantArticleAttribute

delete a variantArticleAttribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\VariantArticleAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->variantArticleAttributeIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling VariantArticleAttributeApi->variantArticleAttributeIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `variantArticleAttributeIdIdGet()`

```php
variantArticleAttributeIdIdGet($id): \kruegge82\weclapp\Model\VariantArticleAttribute
```

query a specific variantArticleAttribute

query a specific variantArticleAttribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\VariantArticleAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->variantArticleAttributeIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantArticleAttributeApi->variantArticleAttributeIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\VariantArticleAttribute**](../Model/VariantArticleAttribute.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `variantArticleAttributeIdIdPut()`

```php
variantArticleAttributeIdIdPut($id, $variant_article_attribute, $dry_run): \kruegge82\weclapp\Model\VariantArticleAttribute
```

update a variantArticleAttribute

update variantArticleAttribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\VariantArticleAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$variant_article_attribute = new \kruegge82\weclapp\Model\VariantArticleAttribute(); // \kruegge82\weclapp\Model\VariantArticleAttribute
$dry_run = True; // bool

try {
    $result = $apiInstance->variantArticleAttributeIdIdPut($id, $variant_article_attribute, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantArticleAttributeApi->variantArticleAttributeIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **variant_article_attribute** | [**\kruegge82\weclapp\Model\VariantArticleAttribute**](../Model/VariantArticleAttribute.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\VariantArticleAttribute**](../Model/VariantArticleAttribute.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `variantArticleAttributePost()`

```php
variantArticleAttributePost($variant_article_attribute, $dry_run): \kruegge82\weclapp\Model\VariantArticleAttribute
```

create a variantArticleAttribute

create a variantArticleAttribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\VariantArticleAttributeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variant_article_attribute = new \kruegge82\weclapp\Model\VariantArticleAttribute(); // \kruegge82\weclapp\Model\VariantArticleAttribute
$dry_run = True; // bool

try {
    $result = $apiInstance->variantArticleAttributePost($variant_article_attribute, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VariantArticleAttributeApi->variantArticleAttributePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **variant_article_attribute** | [**\kruegge82\weclapp\Model\VariantArticleAttribute**](../Model/VariantArticleAttribute.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\VariantArticleAttribute**](../Model/VariantArticleAttribute.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
