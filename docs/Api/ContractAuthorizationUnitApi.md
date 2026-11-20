# kruegge82\weclapp\ContractAuthorizationUnitApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**contractAuthorizationUnitCountGet()**](ContractAuthorizationUnitApi.md#contractAuthorizationUnitCountGet) | **GET** /contractAuthorizationUnit/count | count contractAuthorizationUnit |
| [**contractAuthorizationUnitGet()**](ContractAuthorizationUnitApi.md#contractAuthorizationUnitGet) | **GET** /contractAuthorizationUnit | query contractAuthorizationUnit |
| [**contractAuthorizationUnitIdIdDelete()**](ContractAuthorizationUnitApi.md#contractAuthorizationUnitIdIdDelete) | **DELETE** /contractAuthorizationUnit/id/{id} | delete a contractAuthorizationUnit |
| [**contractAuthorizationUnitIdIdGet()**](ContractAuthorizationUnitApi.md#contractAuthorizationUnitIdIdGet) | **GET** /contractAuthorizationUnit/id/{id} | query a specific contractAuthorizationUnit |
| [**contractAuthorizationUnitIdIdPut()**](ContractAuthorizationUnitApi.md#contractAuthorizationUnitIdIdPut) | **PUT** /contractAuthorizationUnit/id/{id} | update a contractAuthorizationUnit |
| [**contractAuthorizationUnitPost()**](ContractAuthorizationUnitApi.md#contractAuthorizationUnitPost) | **POST** /contractAuthorizationUnit | create a contractAuthorizationUnit |


## `contractAuthorizationUnitCountGet()`

```php
contractAuthorizationUnitCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count contractAuthorizationUnit

count contractAuthorizationUnit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ContractAuthorizationUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->contractAuthorizationUnitCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAuthorizationUnitApi->contractAuthorizationUnitCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject33**](../Model/InlineObject33.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractAuthorizationUnitGet()`

```php
contractAuthorizationUnitGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InlineObject28
```

query contractAuthorizationUnit

query contractAuthorizationUnit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ContractAuthorizationUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->contractAuthorizationUnitGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAuthorizationUnitApi->contractAuthorizationUnitGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject28**](../Model/InlineObject28.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractAuthorizationUnitIdIdDelete()`

```php
contractAuthorizationUnitIdIdDelete($id, $dry_run)
```

delete a contractAuthorizationUnit

delete a contractAuthorizationUnit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ContractAuthorizationUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->contractAuthorizationUnitIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ContractAuthorizationUnitApi->contractAuthorizationUnitIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `contractAuthorizationUnitIdIdGet()`

```php
contractAuthorizationUnitIdIdGet($id): \kruegge82\weclapp\Model\ContractAuthorizationUnit
```

query a specific contractAuthorizationUnit

query a specific contractAuthorizationUnit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ContractAuthorizationUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->contractAuthorizationUnitIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAuthorizationUnitApi->contractAuthorizationUnitIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ContractAuthorizationUnit**](../Model/ContractAuthorizationUnit.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractAuthorizationUnitIdIdPut()`

```php
contractAuthorizationUnitIdIdPut($id, $contract_authorization_unit, $dry_run): \kruegge82\weclapp\Model\ContractAuthorizationUnit
```

update a contractAuthorizationUnit

update contractAuthorizationUnit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ContractAuthorizationUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$contract_authorization_unit = new \kruegge82\weclapp\Model\ContractAuthorizationUnit(); // \kruegge82\weclapp\Model\ContractAuthorizationUnit
$dry_run = True; // bool

try {
    $result = $apiInstance->contractAuthorizationUnitIdIdPut($id, $contract_authorization_unit, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAuthorizationUnitApi->contractAuthorizationUnitIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **contract_authorization_unit** | [**\kruegge82\weclapp\Model\ContractAuthorizationUnit**](../Model/ContractAuthorizationUnit.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ContractAuthorizationUnit**](../Model/ContractAuthorizationUnit.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractAuthorizationUnitPost()`

```php
contractAuthorizationUnitPost($contract_authorization_unit, $dry_run): \kruegge82\weclapp\Model\ContractAuthorizationUnit
```

create a contractAuthorizationUnit

create a contractAuthorizationUnit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ContractAuthorizationUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contract_authorization_unit = new \kruegge82\weclapp\Model\ContractAuthorizationUnit(); // \kruegge82\weclapp\Model\ContractAuthorizationUnit
$dry_run = True; // bool

try {
    $result = $apiInstance->contractAuthorizationUnitPost($contract_authorization_unit, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContractAuthorizationUnitApi->contractAuthorizationUnitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contract_authorization_unit** | [**\kruegge82\weclapp\Model\ContractAuthorizationUnit**](../Model/ContractAuthorizationUnit.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ContractAuthorizationUnit**](../Model/ContractAuthorizationUnit.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
