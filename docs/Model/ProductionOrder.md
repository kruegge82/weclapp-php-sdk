# # ProductionOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**created_date** | **int** |  | [optional] [readonly]
**last_modified_date** | **int** |  | [optional] [readonly]
**version** | **string** |  | [optional] [readonly]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**actual_end_date** | **int** |  | [optional] [readonly]
**actual_quantity** | **float** |  | [optional] [readonly]
**actual_start_date** | **int** |  | [optional] [readonly]
**article_id** | **string** |  | [optional]
**assembly_storage_place_id** | **string** |  | [optional]
**picking_instructions** | **string** |  | [optional]
**picks_complete** | **bool** |  | [optional] [readonly]
**production_order_items** | [**\kruegge82\weclapp\Model\ProductionOrderItem[]**](ProductionOrderItem.md) |  | [optional]
**production_order_number** | **string** |  | [optional]
**sales_order_item_id** | **string** |  | [optional] [readonly]
**status** | [**\kruegge82\weclapp\Model\ProductionOrderStatusType**](ProductionOrderStatusType.md) |  | [optional]
**status_history** | [**\kruegge82\weclapp\Model\ProductionOrderStatusHistory[]**](ProductionOrderStatusHistory.md) |  | [optional] [readonly]
**target_end_date** | **int** |  | [optional]
**target_quantity** | **float** |  | [optional]
**target_start_date** | **int** |  | [optional]
**warehouse_id** | **string** |  | [optional]
**work_items** | [**\kruegge82\weclapp\Model\ProductionOrderWorkItem[]**](ProductionOrderWorkItem.md) |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
