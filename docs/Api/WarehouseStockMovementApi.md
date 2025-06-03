# kruegge82\weclapp\WarehouseStockMovementApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**warehouseStockMovementBookDirectStockTransferPost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookDirectStockTransferPost) | **POST** /warehouseStockMovement/bookDirectStockTransfer |  |
| [**warehouseStockMovementBookFromLoadingEquipmentPlacePost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookFromLoadingEquipmentPlacePost) | **POST** /warehouseStockMovement/bookFromLoadingEquipmentPlace |  |
| [**warehouseStockMovementBookIncomingMovementPost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookIncomingMovementPost) | **POST** /warehouseStockMovement/bookIncomingMovement |  |
| [**warehouseStockMovementBookOntoInternalTransportReferencePost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookOntoInternalTransportReferencePost) | **POST** /warehouseStockMovement/bookOntoInternalTransportReference |  |
| [**warehouseStockMovementBookOutgoingMovementPost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookOutgoingMovementPost) | **POST** /warehouseStockMovement/bookOutgoingMovement |  |
| [**warehouseStockMovementBookToLoadingEquipmentPlacePost()**](WarehouseStockMovementApi.md#warehouseStockMovementBookToLoadingEquipmentPlacePost) | **POST** /warehouseStockMovement/bookToLoadingEquipmentPlace |  |
| [**warehouseStockMovementCountGet()**](WarehouseStockMovementApi.md#warehouseStockMovementCountGet) | **GET** /warehouseStockMovement/count |  |
| [**warehouseStockMovementGet()**](WarehouseStockMovementApi.md#warehouseStockMovementGet) | **GET** /warehouseStockMovement |  |
| [**warehouseStockMovementIdIdGet()**](WarehouseStockMovementApi.md#warehouseStockMovementIdIdGet) | **GET** /warehouseStockMovement/id/{id} |  |


## `warehouseStockMovementBookDirectStockTransferPost()`

```php
warehouseStockMovementBookDirectStockTransferPost($body): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\WarehouseStockMovementBookDirectStockTransferPostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookDirectStockTransferPostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookDirectStockTransferPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookDirectStockTransferPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookDirectStockTransferPostRequest**](../Model/WarehouseStockMovementBookDirectStockTransferPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookFromLoadingEquipmentPlacePost()`

```php
warehouseStockMovementBookFromLoadingEquipmentPlacePost($body): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookFromLoadingEquipmentPlacePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookFromLoadingEquipmentPlacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest**](../Model/WarehouseStockMovementBookFromLoadingEquipmentPlacePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookIncomingMovementPost()`

```php
warehouseStockMovementBookIncomingMovementPost($body): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\WarehouseStockMovementBookIncomingMovementPostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookIncomingMovementPostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookIncomingMovementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookIncomingMovementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookIncomingMovementPostRequest**](../Model/WarehouseStockMovementBookIncomingMovementPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookOntoInternalTransportReferencePost()`

```php
warehouseStockMovementBookOntoInternalTransportReferencePost($body): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookOntoInternalTransportReferencePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookOntoInternalTransportReferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookOntoInternalTransportReferencePostRequest**](../Model/WarehouseStockMovementBookOntoInternalTransportReferencePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookOutgoingMovementPost()`

```php
warehouseStockMovementBookOutgoingMovementPost($body): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\WarehouseStockMovementBookOutgoingMovementPostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookOutgoingMovementPostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookOutgoingMovementPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookOutgoingMovementPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookOutgoingMovementPostRequest**](../Model/WarehouseStockMovementBookOutgoingMovementPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementBookToLoadingEquipmentPlacePost()`

```php
warehouseStockMovementBookToLoadingEquipmentPlacePost($body): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest(); // \kruegge82\weclapp\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest

try {
    $result = $apiInstance->warehouseStockMovementBookToLoadingEquipmentPlacePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementBookToLoadingEquipmentPlacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest**](../Model/WarehouseStockMovementBookToLoadingEquipmentPlacePostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementCountGet()`

```php
warehouseStockMovementCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count warehouseStockMovement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\WarehouseStockMovementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->warehouseStockMovementCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseStockMovementApi->warehouseStockMovementCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionCountGet200Response**](../Model/AccountingTransactionCountGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `warehouseStockMovementGet()`

```php
warehouseStockMovementGet($page, $page_size, $sort): \kruegge82\weclapp\Model\WarehouseStockMovementGet200Response
```



query warehouseStockMovement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->warehouseStockMovementGet($page, $page_size, $sort);
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
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\WarehouseStockMovementGet200Response**](../Model/WarehouseStockMovementGet200Response.md)

### Authorization

[API token](../../README.md#API token)

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



query warehouseStockMovement

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
