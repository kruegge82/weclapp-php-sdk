# kruegge82\weclapp\InventoryTransportReferenceApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**inventoryTransportReferenceCountGet()**](InventoryTransportReferenceApi.md#inventoryTransportReferenceCountGet) | **GET** /inventoryTransportReference/count | count inventoryTransportReference |
| [**inventoryTransportReferenceGet()**](InventoryTransportReferenceApi.md#inventoryTransportReferenceGet) | **GET** /inventoryTransportReference | query inventoryTransportReference |
| [**inventoryTransportReferenceIdIdGet()**](InventoryTransportReferenceApi.md#inventoryTransportReferenceIdIdGet) | **GET** /inventoryTransportReference/id/{id} | query a specific inventoryTransportReference |
| [**inventoryTransportReferenceIdIdPut()**](InventoryTransportReferenceApi.md#inventoryTransportReferenceIdIdPut) | **PUT** /inventoryTransportReference/id/{id} | update a inventoryTransportReference |
| [**inventoryTransportReferencePost()**](InventoryTransportReferenceApi.md#inventoryTransportReferencePost) | **POST** /inventoryTransportReference | create a inventoryTransportReference |


## `inventoryTransportReferenceCountGet()`

```php
inventoryTransportReferenceCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count inventoryTransportReference

count inventoryTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InventoryTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->inventoryTransportReferenceCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransportReferenceApi->inventoryTransportReferenceCountGet: ', $e->getMessage(), PHP_EOL;
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

## `inventoryTransportReferenceGet()`

```php
inventoryTransportReferenceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InventoryTransportReferenceGet200Response
```

query inventoryTransportReference

query inventoryTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InventoryTransportReferenceApi(
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
    $result = $apiInstance->inventoryTransportReferenceGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransportReferenceApi->inventoryTransportReferenceGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\InventoryTransportReferenceGet200Response**](../Model/InventoryTransportReferenceGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryTransportReferenceIdIdGet()`

```php
inventoryTransportReferenceIdIdGet($id): \kruegge82\weclapp\Model\InventoryTransportReference
```

query a specific inventoryTransportReference

query a specific inventoryTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InventoryTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->inventoryTransportReferenceIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransportReferenceApi->inventoryTransportReferenceIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\InventoryTransportReference**](../Model/InventoryTransportReference.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryTransportReferenceIdIdPut()`

```php
inventoryTransportReferenceIdIdPut($id, $inventory_transport_reference, $dry_run): \kruegge82\weclapp\Model\InventoryTransportReference
```

update a inventoryTransportReference

update inventoryTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InventoryTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$inventory_transport_reference = new \kruegge82\weclapp\Model\InventoryTransportReference(); // \kruegge82\weclapp\Model\InventoryTransportReference
$dry_run = True; // bool

try {
    $result = $apiInstance->inventoryTransportReferenceIdIdPut($id, $inventory_transport_reference, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransportReferenceApi->inventoryTransportReferenceIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **inventory_transport_reference** | [**\kruegge82\weclapp\Model\InventoryTransportReference**](../Model/InventoryTransportReference.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InventoryTransportReference**](../Model/InventoryTransportReference.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `inventoryTransportReferencePost()`

```php
inventoryTransportReferencePost($inventory_transport_reference, $dry_run): \kruegge82\weclapp\Model\InventoryTransportReference
```

create a inventoryTransportReference

create a inventoryTransportReference

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\InventoryTransportReferenceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_transport_reference = new \kruegge82\weclapp\Model\InventoryTransportReference(); // \kruegge82\weclapp\Model\InventoryTransportReference
$dry_run = True; // bool

try {
    $result = $apiInstance->inventoryTransportReferencePost($inventory_transport_reference, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryTransportReferenceApi->inventoryTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **inventory_transport_reference** | [**\kruegge82\weclapp\Model\InventoryTransportReference**](../Model/InventoryTransportReference.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InventoryTransportReference**](../Model/InventoryTransportReference.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
