# kruegge82\weclapp\CustomAttributeDefinitionApi

All URIs are relative to http://nullapi/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customAttributeDefinitionCountGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionCountGet) | **GET** /customAttributeDefinition/count |  |
| [**customAttributeDefinitionGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionGet) | **GET** /customAttributeDefinition |  |
| [**customAttributeDefinitionIdIdDelete()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionIdIdDelete) | **DELETE** /customAttributeDefinition/id/{id} |  |
| [**customAttributeDefinitionIdIdGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionIdIdGet) | **GET** /customAttributeDefinition/id/{id} |  |
| [**customAttributeDefinitionIdIdPut()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionIdIdPut) | **PUT** /customAttributeDefinition/id/{id} |  |
| [**customAttributeDefinitionPost()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionPost) | **POST** /customAttributeDefinition |  |
| [**customAttributeDefinitionReadOrderGet()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionReadOrderGet) | **GET** /customAttributeDefinition/readOrder |  |
| [**customAttributeDefinitionUpdateOrderPost()**](CustomAttributeDefinitionApi.md#customAttributeDefinitionUpdateOrderPost) | **POST** /customAttributeDefinition/updateOrder |  |


## `customAttributeDefinitionCountGet()`

```php
customAttributeDefinitionCountGet(): \kruegge82\weclapp\Model\AccountingTransactionCountGet200Response
```



count customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->customAttributeDefinitionCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionCountGet: ', $e->getMessage(), PHP_EOL;
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

## `customAttributeDefinitionGet()`

```php
customAttributeDefinitionGet($page, $page_size, $sort): \kruegge82\weclapp\Model\CustomAttributeDefinitionGet200Response
```



query customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int
$page_size = 56; // int
$sort = 'sort_example'; // string

try {
    $result = $apiInstance->customAttributeDefinitionGet($page, $page_size, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinitionGet200Response**](../Model/CustomAttributeDefinitionGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionIdIdDelete()`

```php
customAttributeDefinitionIdIdDelete($id, $dry_run)
```



delete a customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->customAttributeDefinitionIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `customAttributeDefinitionIdIdGet()`

```php
customAttributeDefinitionIdIdGet($id): \kruegge82\weclapp\Model\CustomAttributeDefinition
```



query customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->customAttributeDefinitionIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionIdIdPut()`

```php
customAttributeDefinitionIdIdPut($id, $body, $dry_run): \kruegge82\weclapp\Model\CustomAttributeDefinition
```



update customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$body = new \kruegge82\weclapp\Model\CustomAttributeDefinition(); // \kruegge82\weclapp\Model\CustomAttributeDefinition
$dry_run = True; // bool

try {
    $result = $apiInstance->customAttributeDefinitionIdIdPut($id, $body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **body** | [**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionPost()`

```php
customAttributeDefinitionPost($body, $dry_run): \kruegge82\weclapp\Model\CustomAttributeDefinition
```



create a customAttributeDefinition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\CustomAttributeDefinition(); // \kruegge82\weclapp\Model\CustomAttributeDefinition
$dry_run = True; // bool

try {
    $result = $apiInstance->customAttributeDefinitionPost($body, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinition**](../Model/CustomAttributeDefinition.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionReadOrderGet()`

```php
customAttributeDefinitionReadOrderGet($entity_type): \kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_type = 'entity_type_example'; // string

try {
    $result = $apiInstance->customAttributeDefinitionReadOrderGet($entity_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionReadOrderGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response**](../Model/CustomAttributeDefinitionReadOrderGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customAttributeDefinitionUpdateOrderPost()`

```php
customAttributeDefinitionUpdateOrderPost($body): \kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: API token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\CustomAttributeDefinitionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequest(); // \kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequest

try {
    $result = $apiInstance->customAttributeDefinitionUpdateOrderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomAttributeDefinitionApi->customAttributeDefinitionUpdateOrderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\kruegge82\weclapp\Model\CustomAttributeDefinitionUpdateOrderPostRequest**](../Model/CustomAttributeDefinitionUpdateOrderPostRequest.md)|  | |

### Return type

[**\kruegge82\weclapp\Model\CustomAttributeDefinitionReadOrderGet200Response**](../Model/CustomAttributeDefinitionReadOrderGet200Response.md)

### Authorization

[API token](../../README.md#API token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
