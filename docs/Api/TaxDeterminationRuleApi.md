# kruegge82\weclapp\TaxDeterminationRuleApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**taxDeterminationRuleCountGet()**](TaxDeterminationRuleApi.md#taxDeterminationRuleCountGet) | **GET** /taxDeterminationRule/count | count taxDeterminationRule |
| [**taxDeterminationRuleGet()**](TaxDeterminationRuleApi.md#taxDeterminationRuleGet) | **GET** /taxDeterminationRule | query taxDeterminationRule |
| [**taxDeterminationRuleIdIdDelete()**](TaxDeterminationRuleApi.md#taxDeterminationRuleIdIdDelete) | **DELETE** /taxDeterminationRule/id/{id} | delete a taxDeterminationRule |
| [**taxDeterminationRuleIdIdGet()**](TaxDeterminationRuleApi.md#taxDeterminationRuleIdIdGet) | **GET** /taxDeterminationRule/id/{id} | query a specific taxDeterminationRule |
| [**taxDeterminationRuleIdIdPut()**](TaxDeterminationRuleApi.md#taxDeterminationRuleIdIdPut) | **PUT** /taxDeterminationRule/id/{id} | update a taxDeterminationRule |
| [**taxDeterminationRulePost()**](TaxDeterminationRuleApi.md#taxDeterminationRulePost) | **POST** /taxDeterminationRule | create a taxDeterminationRule |


## `taxDeterminationRuleCountGet()`

```php
taxDeterminationRuleCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count taxDeterminationRule

count taxDeterminationRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxDeterminationRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->taxDeterminationRuleCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationRuleApi->taxDeterminationRuleCountGet: ', $e->getMessage(), PHP_EOL;
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

## `taxDeterminationRuleGet()`

```php
taxDeterminationRuleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\TaxDeterminationRuleGet200Response
```

query taxDeterminationRule

query taxDeterminationRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxDeterminationRuleApi(
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
    $result = $apiInstance->taxDeterminationRuleGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationRuleApi->taxDeterminationRuleGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\TaxDeterminationRuleGet200Response**](../Model/TaxDeterminationRuleGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxDeterminationRuleIdIdDelete()`

```php
taxDeterminationRuleIdIdDelete($id, $dry_run)
```

delete a taxDeterminationRule

delete a taxDeterminationRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxDeterminationRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->taxDeterminationRuleIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationRuleApi->taxDeterminationRuleIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `taxDeterminationRuleIdIdGet()`

```php
taxDeterminationRuleIdIdGet($id): \kruegge82\weclapp\Model\TaxDeterminationRule
```

query a specific taxDeterminationRule

query a specific taxDeterminationRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxDeterminationRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->taxDeterminationRuleIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationRuleApi->taxDeterminationRuleIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\TaxDeterminationRule**](../Model/TaxDeterminationRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxDeterminationRuleIdIdPut()`

```php
taxDeterminationRuleIdIdPut($id, $tax_determination_rule, $dry_run): \kruegge82\weclapp\Model\TaxDeterminationRule
```

update a taxDeterminationRule

update taxDeterminationRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxDeterminationRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$tax_determination_rule = new \kruegge82\weclapp\Model\TaxDeterminationRule(); // \kruegge82\weclapp\Model\TaxDeterminationRule
$dry_run = True; // bool

try {
    $result = $apiInstance->taxDeterminationRuleIdIdPut($id, $tax_determination_rule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationRuleApi->taxDeterminationRuleIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **tax_determination_rule** | [**\kruegge82\weclapp\Model\TaxDeterminationRule**](../Model/TaxDeterminationRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxDeterminationRule**](../Model/TaxDeterminationRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `taxDeterminationRulePost()`

```php
taxDeterminationRulePost($tax_determination_rule, $dry_run): \kruegge82\weclapp\Model\TaxDeterminationRule
```

create a taxDeterminationRule

create a taxDeterminationRule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\TaxDeterminationRuleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_determination_rule = new \kruegge82\weclapp\Model\TaxDeterminationRule(); // \kruegge82\weclapp\Model\TaxDeterminationRule
$dry_run = True; // bool

try {
    $result = $apiInstance->taxDeterminationRulePost($tax_determination_rule, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxDeterminationRuleApi->taxDeterminationRulePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_determination_rule** | [**\kruegge82\weclapp\Model\TaxDeterminationRule**](../Model/TaxDeterminationRule.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\TaxDeterminationRule**](../Model/TaxDeterminationRule.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
