# kruegge82\weclapp\SystemApi

All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**systemCreateDemoTestSystemPost()**](SystemApi.md#systemCreateDemoTestSystemPost) | **POST** /system/createDemoTestSystem |  |
| [**systemDemoTestSystemInfoGet()**](SystemApi.md#systemDemoTestSystemInfoGet) | **GET** /system/demoTestSystemInfo |  |
| [**systemLicensesGet()**](SystemApi.md#systemLicensesGet) | **GET** /system/licenses |  |
| [**systemPermissionsGet()**](SystemApi.md#systemPermissionsGet) | **GET** /system/permissions |  |


## `systemCreateDemoTestSystemPost()`

```php
systemCreateDemoTestSystemPost($system_create_demo_test_system_post_request): \kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$system_create_demo_test_system_post_request = new \kruegge82\weclapp\Model\SystemCreateDemoTestSystemPostRequest(); // \kruegge82\weclapp\Model\SystemCreateDemoTestSystemPostRequest

try {
    $result = $apiInstance->systemCreateDemoTestSystemPost($system_create_demo_test_system_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemCreateDemoTestSystemPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **system_create_demo_test_system_post_request** | [**\kruegge82\weclapp\Model\SystemCreateDemoTestSystemPostRequest**](../Model/SystemCreateDemoTestSystemPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\AccountingTransactionBatchBookingPost200Response**](../Model/AccountingTransactionBatchBookingPost200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemDemoTestSystemInfoGet()`

```php
systemDemoTestSystemInfoGet(): \kruegge82\weclapp\Model\SystemDemoTestSystemInfoGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->systemDemoTestSystemInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemDemoTestSystemInfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\SystemDemoTestSystemInfoGet200Response**](../Model/SystemDemoTestSystemInfoGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemLicensesGet()`

```php
systemLicensesGet(): \kruegge82\weclapp\Model\SystemLicensesGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->systemLicensesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemLicensesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\SystemLicensesGet200Response**](../Model/SystemLicensesGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemPermissionsGet()`

```php
systemPermissionsGet(): \kruegge82\weclapp\Model\SystemPermissionsGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->systemPermissionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->systemPermissionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\SystemPermissionsGet200Response**](../Model/SystemPermissionsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
