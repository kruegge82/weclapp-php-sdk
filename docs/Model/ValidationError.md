# # ValidationError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed** | **string[]** | semantics are dependent on the concrete validation error. | [optional]
**detail** | **string** |  | [optional]
**error_code** | **string** | This provides a unique identifier indicating the concrete business error | [optional]
**instance** | **string** | In weclapp, this is the name of the affected parameter or the relative URI to the affected entity. | [optional]
**location** | **string** |  | [optional]
**title** | **string** | This will not change from occurrence to occurrence of the problem |
**type** | [**\kruegge82\weclapp\Model\ValidationErrorType**](ValidationErrorType.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
