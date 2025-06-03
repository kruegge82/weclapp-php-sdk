# kruegge82\weclapp\LoadingEquipmentIdentifierApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loadingEquipmentIdentifierCountGet()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierCountGet) | **GET** /loadingEquipmentIdentifier/count |  |
| [**loadingEquipmentIdentifierGet()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierGet) | **GET** /loadingEquipmentIdentifier |  |
| [**loadingEquipmentIdentifierIdIdDelete()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierIdIdDelete) | **DELETE** /loadingEquipmentIdentifier/id/{id} |  |
| [**loadingEquipmentIdentifierIdIdGet()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierIdIdGet) | **GET** /loadingEquipmentIdentifier/id/{id} |  |
| [**loadingEquipmentIdentifierIdIdPut()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierIdIdPut) | **PUT** /loadingEquipmentIdentifier/id/{id} |  |
| [**loadingEquipmentIdentifierPost()**](LoadingEquipmentIdentifierApi.md#loadingEquipmentIdentifierPost) | **POST** /loadingEquipmentIdentifier |  |


## `loadingEquipmentIdentifierCountGet()`

```php
loadingEquipmentIdentifierCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->loadingEquipmentIdentifierCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierCountGet: ', $e->getMessage(), PHP_EOL;
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

## `loadingEquipmentIdentifierGet()`

```php
loadingEquipmentIdentifierGet($page, $page_size, $sort): \kruegge82\weclapp\Model\LoadingEquipmentIdentifierGet200Response
```



query loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->loadingEquipmentIdentifierGet($page, $page_size, $sort);
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
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifierGet200Response**](../Model/LoadingEquipmentIdentifierGet200Response.md)

### Authorization

[API token](../../README.md#API token)

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

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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

[API token](../../README.md#API token)

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



query loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadingEquipmentIdentifierIdIdPut()`

```php
loadingEquipmentIdentifierIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
```



update loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
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
$body = new \kruegge82\weclapp\Model\LoadingEquipmentIdentifier(); // \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
$dry_run = True; // bool

try {
    $result = $apiInstance->loadingEquipmentIdentifierIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadingEquipmentIdentifierPost()`

```php
loadingEquipmentIdentifierPost($body, $dry_run): \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
```



create a loadingEquipmentIdentifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\LoadingEquipmentIdentifierApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\LoadingEquipmentIdentifier(); // \kruegge82\weclapp\Model\LoadingEquipmentIdentifier
$dry_run = True; // bool

try {
    $result = $apiInstance->loadingEquipmentIdentifierPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoadingEquipmentIdentifierApi->loadingEquipmentIdentifierPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\LoadingEquipmentIdentifier**](../Model/LoadingEquipmentIdentifier.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
