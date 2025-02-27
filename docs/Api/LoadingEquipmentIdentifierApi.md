# kruegge82\weclapp\LoadingEquipmentIdentifierApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loadingEquipmentIdentifierCountGet()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierCountGet) | **GET** /loadingEquipmentIdentifier/count | count loadingEquipmentIdentifier |
| [**loadingEquipmentIdentifierGet()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierGet) | **GET** /loadingEquipmentIdentifier | query loadingEquipmentIdentifier |
| [**loadingEquipmentIdentifierIdIdDelete()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierIdIdDelete) | **DELETE** /loadingEquipmentIdentifier/id/{id} | delete a loadingEquipmentIdentifier |
| [**loadingEquipmentIdentifierIdIdGet()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierIdIdGet) | **GET** /loadingEquipmentIdentifier/id/{id} | query a specific loadingEquipmentIdentifier |
| [**loadingEquipmentIdentifierIdIdPut()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierIdIdPut) | **PUT** /loadingEquipmentIdentifier/id/{id} | update a loadingEquipmentIdentifier |
| [**loadingEquipmentIdentifierPost()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierPost) | **POST** /loadingEquipmentIdentifier | create a loadingEquipmentIdentifier |


## `loadingEquipmentIdentifierCountGet()`

```php
loadingEquipmentIdentifierCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count loadingEquipmentIdentifier

count loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->loadingEquipmentIdentifierCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierCountGet: ', $e->getMessage(), PHP_EOL;
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

## `loadingEquipmentIdentifierGet()`

```php
loadingEquipmentIdentifierGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\LoadingEquipmentIdentifierGet200Response
```

query loadingEquipmentIdentifier

query loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
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
    $result = $apiInstance->loadingEquipmentIdentifierGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifierGet200Response**](../Model/LoadingEquipmentIdentifierGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadingEquipmentIdentifierIdIdDelete()`

```php
loadingEquipmentIdentifierIdIdDelete($id, $dry_run)
```

delete a loadingEquipmentIdentifier

delete a loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->loadingEquipmentIdentifierIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `loadingEquipmentIdentifierIdIdGet()`

```php
loadingEquipmentIdentifierIdIdGet($id): \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
```

query a specific loadingEquipmentIdentifier

query a specific loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->loadingEquipmentIdentifierIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadingEquipmentIdentifierIdIdPut()`

```php
loadingEquipmentIdentifierIdIdPut($id, $loading_equipment_identifier, $dry_run): \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
```

update a loadingEquipmentIdentifier

update loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$loading_equipment_identifier = new \kruegge82\weclapp\Model\LoadingEquipmentIdentifier(); // \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
$dry_run = True; // bool

try {
    $result = $apiInstance->loadingEquipmentIdentifierIdIdPut($id, $loading_equipment_identifier, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **loading_equipment_identifier** | [**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadingEquipmentIdentifierPost()`

```php
loadingEquipmentIdentifierPost($loading_equipment_identifier, $dry_run): \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
```

create a loadingEquipmentIdentifier

create a loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$loading_equipment_identifier = new \kruegge82\weclapp\Model\LoadingEquipmentIdentifier(); // \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
$dry_run = True; // bool

try {
    $result = $apiInstance->loadingEquipmentIdentifierPost($loading_equipment_identifier, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loading_equipment_identifier** | [**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
