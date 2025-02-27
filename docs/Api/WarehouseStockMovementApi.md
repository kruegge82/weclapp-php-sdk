# kruegge82\weclapp\WarehouseStockMovementApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**warehouseStockMovementBookDirectStockTransferPost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookDirectStockTransferPost) | **POST** /warehouseStockMovement/bookDirectStockTransfer |  |
| [**warehouseStockMovementBookFromLoadingEquipmentPlacePost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookFromLoadingEquipmentPlacePost) | **POST** /warehouseStockMovement/bookFromLoadingEquipmentPlace |  |
| [**warehouseStockMovementBookIncomingMovementPost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookIncomingMovementPost) | **POST** /warehouseStockMovement/bookIncomingMovement |  |
| [**warehouseStockMovementBookOntoInternalTransportReferencePost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookOntoInternalTransportReferencePost) | **POST** /warehouseStockMovement/bookOntoInternalTransportReference |  |
| [**warehouseStockMovementBookOutgoingMovementPost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookOutgoingMovementPost) | **POST** /warehouseStockMovement/bookOutgoingMovement |  |
| [**warehouseStockMovementBookToLoadingEquipmentPlacePost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookToLoadingEquipmentPlacePost) | **POST** /warehouseStockMovement/bookToLoadingEquipmentPlace |  |
| [**warehouseStockMovementCountGet()**](WarehouseStockMovementApi.md#warehouseStockMovementCountGet) | **GET** /warehouseStockMovement/count | count warehouseStockMovement |
| [**warehouseStockMovementGet()**](WarehouseStockMovementApi.md#warehouseStockMovementGet) | **GET** /warehouseStockMovement | query warehouseStockMovement |
| [**warehouseStockMovementIdIdGet()**](WarehouseStockMovementApi.md#warehouseStockMovementIdIdGet) | **GET** /warehouseStockMovement/id/{id} | query a specific warehouseStockMovement |


## `warehouseStockMovementBookDirectStockTransferPost()`

```php
warehouseStockMovementBookDirectStockTransferPost($warehouse_stock_movement_book_direct_stock_transfer_post_request): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_stock_movement_book_direct_stock_transfer_post_request = new \kruegge82\weclapp\Model\WarehouseStockMovementBookDirectStockTransferPostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookDirectStockTransferPostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookDirectStockTransferPost($warehouse_stock_movement_book_direct_stock_transfer_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookDirectStockTransferPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_stock_movement_book_direct_stock_transfer_post_request** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookDirectStockTransferPostRequest**](../Model/WarehouseStockMovementBookDirectStockTransferPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookFromLoadingEquipmentPlacePost()`

```php
warehouseStockMovementBookFromLoadingEquipmentPlacePost($warehouse_stock_movement_book_from_loading_equipment_place_post_request): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_stock_movement_book_from_loading_equipment_place_post_request = new \kruegge82\weclapp\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookFromLoadingEquipmentPlacePost($warehouse_stock_movement_book_from_loading_equipment_place_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookFromLoadingEquipmentPlacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_stock_movement_book_from_loading_equipment_place_post_request** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest**](../Model/WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookIncomingMovementPost()`

```php
warehouseStockMovementBookIncomingMovementPost($warehouse_stock_movement_book_incoming_movement_post_request): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_stock_movement_book_incoming_movement_post_request = new \kruegge82\weclapp\Model\WarehouseStockMovementBookIncomingMovementPostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookIncomingMovementPostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookIncomingMovementPost($warehouse_stock_movement_book_incoming_movement_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookIncomingMovementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_stock_movement_book_incoming_movement_post_request** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookIncomingMovementPostRequest**](../Model/WarehouseStockMovementBookIncomingMovementPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookOntoInternalTransportReferencePost()`

```php
warehouseStockMovementBookOntoInternalTransportReferencePost($warehouse_stock_movement_book_onto_internal_transport_reference_post_request): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_stock_movement_book_onto_internal_transport_reference_post_request = new \kruegge82\weclapp\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookOntoInternalTransportReferencePost($warehouse_stock_movement_book_onto_internal_transport_reference_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookOntoInternalTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_stock_movement_book_onto_internal_transport_reference_post_request** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostRequest**](../Model/WarehouseStockMovementBookOntoInternalTransportReferencePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookOutgoingMovementPost()`

```php
warehouseStockMovementBookOutgoingMovementPost($warehouse_stock_movement_book_outgoing_movement_post_request): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_stock_movement_book_outgoing_movement_post_request = new \kruegge82\weclapp\Model\WarehouseStockMovementBookOutgoingMovementPostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookOutgoingMovementPostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookOutgoingMovementPost($warehouse_stock_movement_book_outgoing_movement_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookOutgoingMovementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_stock_movement_book_outgoing_movement_post_request** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookOutgoingMovementPostRequest**](../Model/WarehouseStockMovementBookOutgoingMovementPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookToLoadingEquipmentPlacePost()`

```php
warehouseStockMovementBookToLoadingEquipmentPlacePost($warehouse_stock_movement_book_to_loading_equipment_place_post_request): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$warehouse_stock_movement_book_to_loading_equipment_place_post_request = new \kruegge82\weclapp\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookToLoadingEquipmentPlacePost($warehouse_stock_movement_book_to_loading_equipment_place_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookToLoadingEquipmentPlacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **warehouse_stock_movement_book_to_loading_equipment_place_post_request** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest**](../Model/WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementCountGet()`

```php
warehouseStockMovementCountGet($filter): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```

count warehouseStockMovement

count warehouseStockMovement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->warehouseStockMovementCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementCountGet: ', $e->getMessage(), PHP_EOL;
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

## `warehouseStockMovementGet()`

```php
warehouseStockMovementGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```

query warehouseStockMovement

query warehouseStockMovement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
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
    $result = $apiInstance->warehouseStockMovementGet($page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementIdIdGet()`

```php
warehouseStockMovementIdIdGet($id): \kruegge82\weclapp\Model\WarehouseStockMovement
```

query a specific warehouseStockMovement

query a specific warehouseStockMovement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->warehouseStockMovementIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovement**](../Model/WarehouseStockMovement.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
