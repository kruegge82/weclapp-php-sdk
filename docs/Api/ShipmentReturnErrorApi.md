# kruegge82\weclapp\ShipmentReturnErrorApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentReturnErrorCountGet()**](ShipmentReturnErrorApi.md#shipmentReturnErrorCountGet) | **GET** /shipmentReturnError/count | count shipmentReturnError |
| [**shipmentReturnErrorGet()**](ShipmentReturnErrorApi.md#shipmentReturnErrorGet) | **GET** /shipmentReturnError | query shipmentReturnError |
| [**shipmentReturnErrorIdIdDelete()**](ShipmentReturnErrorApi.md#shipmentReturnErrorIdIdDelete) | **DELETE** /shipmentReturnError/id/{id} | delete a shipmentReturnError |
| [**shipmentReturnErrorIdIdGet()**](ShipmentReturnErrorApi.md#shipmentReturnErrorIdIdGet) | **GET** /shipmentReturnError/id/{id} | query a specific shipmentReturnError |
| [**shipmentReturnErrorIdIdPut()**](ShipmentReturnErrorApi.md#shipmentReturnErrorIdIdPut) | **PUT** /shipmentReturnError/id/{id} | update a shipmentReturnError |
| [**shipmentReturnErrorPost()**](ShipmentReturnErrorApi.md#shipmentReturnErrorPost) | **POST** /shipmentReturnError | create a shipmentReturnError |


## `shipmentReturnErrorCountGet()`

```php
shipmentReturnErrorCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count shipmentReturnError

count shipmentReturnError

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->shipmentReturnErrorCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnErrorApi->shipmentReturnErrorCountGet: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnErrorGet()`

```php
shipmentReturnErrorGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\ShipmentReturnAssessmentGet200Response
```

query shipmentReturnError

query shipmentReturnError

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnErrorApi(
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
    $result = $apiInstance->shipmentReturnErrorGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnErrorApi->shipmentReturnErrorGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\ShipmentReturnAssessmentGet200Response**](../Model/ShipmentReturnAssessmentGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentReturnErrorIdIdDelete()`

```php
shipmentReturnErrorIdIdDelete($id, $dry_run)
```

delete a shipmentReturnError

delete a shipmentReturnError

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->shipmentReturnErrorIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnErrorApi->shipmentReturnErrorIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnErrorIdIdGet()`

```php
shipmentReturnErrorIdIdGet($id): \kruegge82\weclapp\Model\ShipmentReturnDescription
```

query a specific shipmentReturnError

query a specific shipmentReturnError

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->shipmentReturnErrorIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnErrorApi->shipmentReturnErrorIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\ShipmentReturnDescription**](../Model/ShipmentReturnDescription.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentReturnErrorIdIdPut()`

```php
shipmentReturnErrorIdIdPut($id, $shipment_return_description, $dry_run): \kruegge82\weclapp\Model\ShipmentReturnDescription
```

update a shipmentReturnError

update shipmentReturnError

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$shipment_return_description = new \kruegge82\weclapp\Model\ShipmentReturnDescription(); // \kruegge82\weclapp\Model\ShipmentReturnDescription
$dry_run = True; // bool

try {
    $result = $apiInstance->shipmentReturnErrorIdIdPut($id, $shipment_return_description, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnErrorApi->shipmentReturnErrorIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **shipment_return_description** | [**\kruegge82\weclapp\Model\ShipmentReturnDescription**](../Model/ShipmentReturnDescription.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ShipmentReturnDescription**](../Model/ShipmentReturnDescription.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentReturnErrorPost()`

```php
shipmentReturnErrorPost($shipment_return_description, $dry_run): \kruegge82\weclapp\Model\ShipmentReturnDescription
```

create a shipmentReturnError

create a shipmentReturnError

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnErrorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_return_description = new \kruegge82\weclapp\Model\ShipmentReturnDescription(); // \kruegge82\weclapp\Model\ShipmentReturnDescription
$dry_run = True; // bool

try {
    $result = $apiInstance->shipmentReturnErrorPost($shipment_return_description, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnErrorApi->shipmentReturnErrorPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **shipment_return_description** | [**\kruegge82\weclapp\Model\ShipmentReturnDescription**](../Model/ShipmentReturnDescription.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\ShipmentReturnDescription**](../Model/ShipmentReturnDescription.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
