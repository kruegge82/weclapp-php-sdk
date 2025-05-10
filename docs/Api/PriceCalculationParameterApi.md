# kruegge82\weclapp\PriceCalculationParameterApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**priceCalculationParameterCountGet()**](PriceCalculationParameterApi.md#priceCalculationParameterCountGet) | **GET** /priceCalculationParameter/count | count priceCalculationParameter |
| [**priceCalculationParameterGet()**](PriceCalculationParameterApi.md#priceCalculationParameterGet) | **GET** /priceCalculationParameter | query priceCalculationParameter |
| [**priceCalculationParameterIdIdDelete()**](PriceCalculationParameterApi.md#priceCalculationParameterIdIdDelete) | **DELETE** /priceCalculationParameter/id/{id} | delete a priceCalculationParameter |
| [**priceCalculationParameterIdIdGet()**](PriceCalculationParameterApi.md#priceCalculationParameterIdIdGet) | **GET** /priceCalculationParameter/id/{id} | query a specific priceCalculationParameter |
| [**priceCalculationParameterIdIdPut()**](PriceCalculationParameterApi.md#priceCalculationParameterIdIdPut) | **PUT** /priceCalculationParameter/id/{id} | update a priceCalculationParameter |
| [**priceCalculationParameterPost()**](PriceCalculationParameterApi.md#priceCalculationParameterPost) | **POST** /priceCalculationParameter | create a priceCalculationParameter |


## `priceCalculationParameterCountGet()`

```php
priceCalculationParameterCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count priceCalculationParameter

count priceCalculationParameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PriceCalculationParameterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->priceCalculationParameterCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceCalculationParameterApi->priceCalculationParameterCountGet: ', $e->getMessage(), PHP_EOL;
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

## `priceCalculationParameterGet()`

```php
priceCalculationParameterGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\PriceCalculationParameterGet200Response
```

query priceCalculationParameter

query priceCalculationParameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PriceCalculationParameterApi(
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
    $result = $apiInstance->priceCalculationParameterGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceCalculationParameterApi->priceCalculationParameterGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\PriceCalculationParameterGet200Response**](../Model/PriceCalculationParameterGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceCalculationParameterIdIdDelete()`

```php
priceCalculationParameterIdIdDelete($id, $dry_run)
```

delete a priceCalculationParameter

delete a priceCalculationParameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PriceCalculationParameterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->priceCalculationParameterIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling PriceCalculationParameterApi->priceCalculationParameterIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `priceCalculationParameterIdIdGet()`

```php
priceCalculationParameterIdIdGet($id): \kruegge82\weclapp\Model\PriceCalculationParameter
```

query a specific priceCalculationParameter

query a specific priceCalculationParameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PriceCalculationParameterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->priceCalculationParameterIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceCalculationParameterApi->priceCalculationParameterIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\PriceCalculationParameter**](../Model/PriceCalculationParameter.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceCalculationParameterIdIdPut()`

```php
priceCalculationParameterIdIdPut($id, $price_calculation_parameter, $dry_run): \kruegge82\weclapp\Model\PriceCalculationParameter
```

update a priceCalculationParameter

update priceCalculationParameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PriceCalculationParameterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$price_calculation_parameter = new \kruegge82\weclapp\Model\PriceCalculationParameter(); // \kruegge82\weclapp\Model\PriceCalculationParameter
$dry_run = True; // bool

try {
    $result = $apiInstance->priceCalculationParameterIdIdPut($id, $price_calculation_parameter, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceCalculationParameterApi->priceCalculationParameterIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **price_calculation_parameter** | [**\kruegge82\weclapp\Model\PriceCalculationParameter**](../Model/PriceCalculationParameter.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PriceCalculationParameter**](../Model/PriceCalculationParameter.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `priceCalculationParameterPost()`

```php
priceCalculationParameterPost($price_calculation_parameter, $dry_run): \kruegge82\weclapp\Model\PriceCalculationParameter
```

create a priceCalculationParameter

create a priceCalculationParameter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\PriceCalculationParameterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_calculation_parameter = new \kruegge82\weclapp\Model\PriceCalculationParameter(); // \kruegge82\weclapp\Model\PriceCalculationParameter
$dry_run = True; // bool

try {
    $result = $apiInstance->priceCalculationParameterPost($price_calculation_parameter, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceCalculationParameterApi->priceCalculationParameterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **price_calculation_parameter** | [**\kruegge82\weclapp\Model\PriceCalculationParameter**](../Model/PriceCalculationParameter.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\PriceCalculationParameter**](../Model/PriceCalculationParameter.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
