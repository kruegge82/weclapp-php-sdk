# kruegge82\weclapp\JobApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**jobAbortGet()**](JobApi.md#jobAbortGet) | **GET** /job/abort |  |
| [**jobStatusGet()**](JobApi.md#jobStatusGet) | **GET** /job/status |  |


## `jobAbortGet()`

```php
jobAbortGet($type): \kruegge82\weclapp\Model\JobAbortGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\JobType(); // \kruegge82\weclapp\Model\JobType

try {
    $result = $apiInstance->jobAbortGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobAbortGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\kruegge82\weclapp\Model\JobType**](../Model/.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\JobAbortGet200Response**](../Model/JobAbortGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jobStatusGet()`

```php
jobStatusGet($type): \kruegge82\weclapp\Model\JobAbortGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\JobApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = new \kruegge82\weclapp\Model\\kruegge82\weclapp\Model\JobType(); // \kruegge82\weclapp\Model\JobType

try {
    $result = $apiInstance->jobStatusGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobApi->jobStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**\kruegge82\weclapp\Model\JobType**](../Model/.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\JobAbortGet200Response**](../Model/JobAbortGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
