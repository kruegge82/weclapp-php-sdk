# kruegge82\weclapp\SalesChannelApi

All URIs are relative to https://localhost:80/webapp/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**salesChannelActiveSalesChannelsGet()**](SalesChannelApi.md#salesChannelActiveSalesChannelsGet) | **GET** /salesChannel/activeSalesChannels |  |


## `salesChannelActiveSalesChannelsGet()`

```php
salesChannelActiveSalesChannelsGet(): \kruegge82\weclapp\Model\SalesChannelActiveSalesChannelsGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->salesChannelActiveSalesChannelsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelApi->salesChannelActiveSalesChannelsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\SalesChannelActiveSalesChannelsGet200Response**](../Model/SalesChannelActiveSalesChannelsGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
