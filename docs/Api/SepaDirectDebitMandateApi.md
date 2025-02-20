# kruegge82\weclapp\SepaDirectDebitMandateApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sepaDirectDebitMandateCountGet()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateCountGet) | **GET** /sepaDirectDebitMandate/count | count sepaDirectDebitMandate |
| [**sepaDirectDebitMandateGet()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateGet) | **GET** /sepaDirectDebitMandate | query sepaDirectDebitMandate |
| [**sepaDirectDebitMandateIdIdDelete()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateIdIdDelete) | **DELETE** /sepaDirectDebitMandate/id/{id} | delete a sepaDirectDebitMandate |
| [**sepaDirectDebitMandateIdIdGet()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateIdIdGet) | **GET** /sepaDirectDebitMandate/id/{id} | query a specific sepaDirectDebitMandate |
| [**sepaDirectDebitMandateIdIdPut()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandateIdIdPut) | **PUT** /sepaDirectDebitMandate/id/{id} | update a sepaDirectDebitMandate |
| [**sepaDirectDebitMandatePost()**](SepaDirectDebitMandateApi.md#sepaDirectDebitMandatePost) | **POST** /sepaDirectDebitMandate | create a sepaDirectDebitMandate |


## `sepaDirectDebitMandateCountGet()`

```php
sepaDirectDebitMandateCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count sepaDirectDebitMandate

count sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->sepaDirectDebitMandateCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateCountGet: ', $e->getMessage(), PHP_EOL;
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

## `sepaDirectDebitMandateGet()`

```php
sepaDirectDebitMandateGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\SepaDirectDebitMandateGet200Response
```

query sepaDirectDebitMandate

query sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
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
    $result = $apiInstance->sepaDirectDebitMandateGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\SepaDirectDebitMandateGet200Response**](../Model/SepaDirectDebitMandateGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandateIdIdDelete()`

```php
sepaDirectDebitMandateIdIdDelete($id, $dry_run)
```

delete a sepaDirectDebitMandate

delete a sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->sepaDirectDebitMandateIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `sepaDirectDebitMandateIdIdGet()`

```php
sepaDirectDebitMandateIdIdGet($id): \kruegge82\weclapp\Model\SepaDirectDebitMandate
```

query a specific sepaDirectDebitMandate

query a specific sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->sepaDirectDebitMandateIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandateIdIdPut()`

```php
sepaDirectDebitMandateIdIdPut($id, $sepa_direct_debit_mandate, $dry_run): \kruegge82\weclapp\Model\SepaDirectDebitMandate
```

update a sepaDirectDebitMandate

update sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$sepa_direct_debit_mandate = new \kruegge82\weclapp\Model\SepaDirectDebitMandate(); // \kruegge82\weclapp\Model\SepaDirectDebitMandate
$dry_run = True; // bool

try {
    $result = $apiInstance->sepaDirectDebitMandateIdIdPut($id, $sepa_direct_debit_mandate, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandateIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **sepa_direct_debit_mandate** | [**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaDirectDebitMandatePost()`

```php
sepaDirectDebitMandatePost($sepa_direct_debit_mandate, $dry_run): \kruegge82\weclapp\Model\SepaDirectDebitMandate
```

create a sepaDirectDebitMandate

create a sepaDirectDebitMandate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SepaDirectDebitMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sepa_direct_debit_mandate = new \kruegge82\weclapp\Model\SepaDirectDebitMandate(); // \kruegge82\weclapp\Model\SepaDirectDebitMandate
$dry_run = True; // bool

try {
    $result = $apiInstance->sepaDirectDebitMandatePost($sepa_direct_debit_mandate, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaDirectDebitMandateApi->sepaDirectDebitMandatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sepa_direct_debit_mandate** | [**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\SepaDirectDebitMandate**](../Model/SepaDirectDebitMandate.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
