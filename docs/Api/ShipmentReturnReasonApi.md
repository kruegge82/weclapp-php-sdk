# kruegge82\weclapp\ShipmentReturnReasonApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentReturnReasonCountGet()**](ShipmentReturnReasonApi.md#shipmentReturnReasonCountGet) | **GET** /shipmentReturnReason/count | count shipmentReturnReason |
| [**shipmentReturnReasonGet()**](ShipmentReturnReasonApi.md#shipmentReturnReasonGet) | **GET** /shipmentReturnReason | query shipmentReturnReason |
| [**shipmentReturnReasonIdIdDelete()**](ShipmentReturnReasonApi.md#shipmentReturnReasonIdIdDelete) | **DELETE** /shipmentReturnReason/id/{id} | delete a shipmentReturnReason |
| [**shipmentReturnReasonIdIdGet()**](ShipmentReturnReasonApi.md#shipmentReturnReasonIdIdGet) | **GET** /shipmentReturnReason/id/{id} | query a specific shipmentReturnReason |
| [**shipmentReturnReasonIdIdPut()**](ShipmentReturnReasonApi.md#shipmentReturnReasonIdIdPut) | **PUT** /shipmentReturnReason/id/{id} | update a shipmentReturnReason |
| [**shipmentReturnReasonPost()**](ShipmentReturnReasonApi.md#shipmentReturnReasonPost) | **POST** /shipmentReturnReason | create a shipmentReturnReason |


## `shipmentReturnReasonCountGet()`

```php
shipmentReturnReasonCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count shipmentReturnReason

count shipmentReturnReason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->shipmentReturnReasonCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnReasonApi->shipmentReturnReasonCountGet: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnReasonGet()`

```php
shipmentReturnReasonGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\ShipmentReturnAssessmentGet200Response
```

query shipmentReturnReason

query shipmentReturnReason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnReasonApi(
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
    $result = $apiInstance->shipmentReturnReasonGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnReasonApi->shipmentReturnReasonGet: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnReasonIdIdDelete()`

```php
shipmentReturnReasonIdIdDelete($id, $dry_run)
```

delete a shipmentReturnReason

delete a shipmentReturnReason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->shipmentReturnReasonIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnReasonApi->shipmentReturnReasonIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnReasonIdIdGet()`

```php
shipmentReturnReasonIdIdGet($id): \kruegge82\weclapp\Model\ShipmentReturnDescription
```

query a specific shipmentReturnReason

query a specific shipmentReturnReason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->shipmentReturnReasonIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnReasonApi->shipmentReturnReasonIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnReasonIdIdPut()`

```php
shipmentReturnReasonIdIdPut($id, $shipment_return_description, $dry_run): \kruegge82\weclapp\Model\ShipmentReturnDescription
```

update a shipmentReturnReason

update shipmentReturnReason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$shipment_return_description = new \kruegge82\weclapp\Model\ShipmentReturnDescription(); // \kruegge82\weclapp\Model\ShipmentReturnDescription
$dry_run = True; // bool

try {
    $result = $apiInstance->shipmentReturnReasonIdIdPut($id, $shipment_return_description, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnReasonApi->shipmentReturnReasonIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `shipmentReturnReasonPost()`

```php
shipmentReturnReasonPost($shipment_return_description, $dry_run): \kruegge82\weclapp\Model\ShipmentReturnDescription
```

create a shipmentReturnReason

create a shipmentReturnReason

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\ShipmentReturnReasonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shipment_return_description = new \kruegge82\weclapp\Model\ShipmentReturnDescription(); // \kruegge82\weclapp\Model\ShipmentReturnDescription
$dry_run = True; // bool

try {
    $result = $apiInstance->shipmentReturnReasonPost($shipment_return_description, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentReturnReasonApi->shipmentReturnReasonPost: ', $e->getMessage(), PHP_EOL;
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
