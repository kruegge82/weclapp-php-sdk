# kruegge82\weclapp\FulfillmentProviderApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fulfillmentProviderActiveFulfillmentProvidersGet()**](FulfillmentProviderApi.md#fulfillmentProviderActiveFulfillmentProvidersGet) | **GET** /fulfillmentProvider/activeFulfillmentProviders |  |
| [**fulfillmentProviderCountGet()**](FulfillmentProviderApi.md#fulfillmentProviderCountGet) | **GET** /fulfillmentProvider/count | count fulfillmentProvider |
| [**fulfillmentProviderGet()**](FulfillmentProviderApi.md#fulfillmentProviderGet) | **GET** /fulfillmentProvider | query fulfillmentProvider |
| [**fulfillmentProviderIdIdDelete()**](FulfillmentProviderApi.md#fulfillmentProviderIdIdDelete) | **DELETE** /fulfillmentProvider/id/{id} | delete a fulfillmentProvider |
| [**fulfillmentProviderIdIdGet()**](FulfillmentProviderApi.md#fulfillmentProviderIdIdGet) | **GET** /fulfillmentProvider/id/{id} | query a specific fulfillmentProvider |
| [**fulfillmentProviderIdIdPut()**](FulfillmentProviderApi.md#fulfillmentProviderIdIdPut) | **PUT** /fulfillmentProvider/id/{id} | update a fulfillmentProvider |
| [**fulfillmentProviderPost()**](FulfillmentProviderApi.md#fulfillmentProviderPost) | **POST** /fulfillmentProvider | create a fulfillmentProvider |


## `fulfillmentProviderActiveFulfillmentProvidersGet()`

```php
fulfillmentProviderActiveFulfillmentProvidersGet(): \kruegge82\weclapp\Model\FulfillmentProviderActiveFulfillmentProvidersGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->fulfillmentProviderActiveFulfillmentProvidersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderActiveFulfillmentProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\kruegge82\weclapp\Model\FulfillmentProviderActiveFulfillmentProvidersGet200Response**](../Model/FulfillmentProviderActiveFulfillmentProvidersGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fulfillmentProviderCountGet()`

```php
fulfillmentProviderCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count fulfillmentProvider

count fulfillmentProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->fulfillmentProviderCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filter** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\InlineObject33**](../Model/InlineObject33.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fulfillmentProviderGet()`

```php
fulfillmentProviderGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\FulfillmentProviderActiveFulfillmentProvidersGet200Response
```

query fulfillmentProvider

query fulfillmentProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 56; // int
$page = 56; // int
$page_size = 56; // int
$serialize_nulls = True; // bool
$sort = 'sort_example'; // string
$filter = 'filter_example'; // string
$properties = 'properties_example'; // string
$include_referenced_entities = 'include_referenced_entities_example'; // string

try {
    $result = $apiInstance->fulfillmentProviderGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **serialize_nulls** | **bool**|  | [optional] |
| **sort** | **string**|  | [optional] |
| **filter** | **string**|  | [optional] |
| **properties** | **string**|  | [optional] |
| **include_referenced_entities** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\FulfillmentProviderActiveFulfillmentProvidersGet200Response**](../Model/FulfillmentProviderActiveFulfillmentProvidersGet200Response.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fulfillmentProviderIdIdDelete()`

```php
fulfillmentProviderIdIdDelete($id, $dry_run)
```

delete a fulfillmentProvider

delete a fulfillmentProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->fulfillmentProviderIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `fulfillmentProviderIdIdGet()`

```php
fulfillmentProviderIdIdGet($id): \kruegge82\weclapp\Model\FulfillmentProvider
```

query a specific fulfillmentProvider

query a specific fulfillmentProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->fulfillmentProviderIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\FulfillmentProvider**](../Model/FulfillmentProvider.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fulfillmentProviderIdIdPut()`

```php
fulfillmentProviderIdIdPut($id, $fulfillment_provider, $dry_run): \kruegge82\weclapp\Model\FulfillmentProvider
```

update a fulfillmentProvider

update fulfillmentProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$fulfillment_provider = new \kruegge82\weclapp\Model\FulfillmentProvider(); // \kruegge82\weclapp\Model\FulfillmentProvider
$dry_run = True; // bool

try {
    $result = $apiInstance->fulfillmentProviderIdIdPut($id, $fulfillment_provider, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **fulfillment_provider** | [**\kruegge82\weclapp\Model\FulfillmentProvider**](../Model/FulfillmentProvider.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\FulfillmentProvider**](../Model/FulfillmentProvider.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fulfillmentProviderPost()`

```php
fulfillmentProviderPost($fulfillment_provider, $dry_run): \kruegge82\weclapp\Model\FulfillmentProvider
```

create a fulfillmentProvider

create a fulfillmentProvider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\FulfillmentProviderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fulfillment_provider = new \kruegge82\weclapp\Model\FulfillmentProvider(); // \kruegge82\weclapp\Model\FulfillmentProvider
$dry_run = True; // bool

try {
    $result = $apiInstance->fulfillmentProviderPost($fulfillment_provider, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentProviderApi->fulfillmentProviderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fulfillment_provider** | [**\kruegge82\weclapp\Model\FulfillmentProvider**](../Model/FulfillmentProvider.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\FulfillmentProvider**](../Model/FulfillmentProvider.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
