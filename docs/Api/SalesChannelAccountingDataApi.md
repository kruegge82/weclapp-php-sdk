# kruegge82\weclapp\SalesChannelAccountingDataApi



All URIs are relative to https://localhost:80/webapp/api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**salesChannelAccountingDataCountGet()**](SalesChannelAccountingDataApi.md#salesChannelAccountingDataCountGet) | **GET** /salesChannelAccountingData/count | count salesChannelAccountingData |
| [**salesChannelAccountingDataGet()**](SalesChannelAccountingDataApi.md#salesChannelAccountingDataGet) | **GET** /salesChannelAccountingData | query salesChannelAccountingData |
| [**salesChannelAccountingDataIdIdDelete()**](SalesChannelAccountingDataApi.md#salesChannelAccountingDataIdIdDelete) | **DELETE** /salesChannelAccountingData/id/{id} | delete a salesChannelAccountingData |
| [**salesChannelAccountingDataIdIdGet()**](SalesChannelAccountingDataApi.md#salesChannelAccountingDataIdIdGet) | **GET** /salesChannelAccountingData/id/{id} | query a specific salesChannelAccountingData |
| [**salesChannelAccountingDataIdIdPut()**](SalesChannelAccountingDataApi.md#salesChannelAccountingDataIdIdPut) | **PUT** /salesChannelAccountingData/id/{id} | update a salesChannelAccountingData |
| [**salesChannelAccountingDataPost()**](SalesChannelAccountingDataApi.md#salesChannelAccountingDataPost) | **POST** /salesChannelAccountingData | create a salesChannelAccountingData |


## `salesChannelAccountingDataCountGet()`

```php
salesChannelAccountingDataCountGet($filter): \kruegge82\weclapp\Model\InlineObject33
```

count salesChannelAccountingData

count salesChannelAccountingData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelAccountingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->salesChannelAccountingDataCountGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAccountingDataApi->salesChannelAccountingDataCountGet: ', $e->getMessage(), PHP_EOL;
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

## `salesChannelAccountingDataGet()`

```php
salesChannelAccountingDataGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities): \kruegge82\weclapp\Model\InlineObject75
```

query salesChannelAccountingData

query salesChannelAccountingData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelAccountingDataApi(
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
    $result = $apiInstance->salesChannelAccountingDataGet($offset, $page, $page_size, $serialize_nulls, $sort, $filter, $properties, $include_referenced_entities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAccountingDataApi->salesChannelAccountingDataGet: ', $e->getMessage(), PHP_EOL;
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

[**\kruegge82\weclapp\Model\InlineObject75**](../Model/InlineObject75.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesChannelAccountingDataIdIdDelete()`

```php
salesChannelAccountingDataIdIdDelete($id, $dry_run)
```

delete a salesChannelAccountingData

delete a salesChannelAccountingData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelAccountingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$dry_run = True; // bool

try {
    $apiInstance->salesChannelAccountingDataIdIdDelete($id, $dry_run);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAccountingDataApi->salesChannelAccountingDataIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `salesChannelAccountingDataIdIdGet()`

```php
salesChannelAccountingDataIdIdGet($id): \kruegge82\weclapp\Model\DistributionChannelAccountingData
```

query a specific salesChannelAccountingData

query a specific salesChannelAccountingData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelAccountingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->salesChannelAccountingDataIdIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAccountingDataApi->salesChannelAccountingDataIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\weclapp\Model\DistributionChannelAccountingData**](../Model/DistributionChannelAccountingData.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesChannelAccountingDataIdIdPut()`

```php
salesChannelAccountingDataIdIdPut($id, $distribution_channel_accounting_data, $dry_run): \kruegge82\weclapp\Model\DistributionChannelAccountingData
```

update a salesChannelAccountingData

update salesChannelAccountingData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelAccountingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$distribution_channel_accounting_data = new \kruegge82\weclapp\Model\DistributionChannelAccountingData(); // \kruegge82\weclapp\Model\DistributionChannelAccountingData
$dry_run = True; // bool

try {
    $result = $apiInstance->salesChannelAccountingDataIdIdPut($id, $distribution_channel_accounting_data, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAccountingDataApi->salesChannelAccountingDataIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **distribution_channel_accounting_data** | [**\kruegge82\weclapp\Model\DistributionChannelAccountingData**](../Model/DistributionChannelAccountingData.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\DistributionChannelAccountingData**](../Model/DistributionChannelAccountingData.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `salesChannelAccountingDataPost()`

```php
salesChannelAccountingDataPost($distribution_channel_accounting_data, $dry_run): \kruegge82\weclapp\Model\DistributionChannelAccountingData
```

create a salesChannelAccountingData

create a salesChannelAccountingData

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: api-token
$config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKey('AuthenticationToken', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\weclapp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('AuthenticationToken', 'Bearer');


$apiInstance = new kruegge82\weclapp\Api\SalesChannelAccountingDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$distribution_channel_accounting_data = new \kruegge82\weclapp\Model\DistributionChannelAccountingData(); // \kruegge82\weclapp\Model\DistributionChannelAccountingData
$dry_run = True; // bool

try {
    $result = $apiInstance->salesChannelAccountingDataPost($distribution_channel_accounting_data, $dry_run);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesChannelAccountingDataApi->salesChannelAccountingDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **distribution_channel_accounting_data** | [**\kruegge82\weclapp\Model\DistributionChannelAccountingData**](../Model/DistributionChannelAccountingData.md)|  | |
| **dry_run** | **bool**|  | [optional] |

### Return type

[**\kruegge82\weclapp\Model\DistributionChannelAccountingData**](../Model/DistributionChannelAccountingData.md)

### Authorization

[api-token](../../README.md#api-token)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
