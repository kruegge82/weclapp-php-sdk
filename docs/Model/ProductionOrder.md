# # ProductionOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**version** | **string** |  | [optional]
**actual_end_date** | **int** |  | [optional]
**actual_quantity** | **float** |  | [optional]
**actual_start_date** | **int** |  | [optional]
**article_id** | **string** |  |
**assembly_storage_place_id** | **string** |  | [optional]
**availability** | **string** |  | [optional]
**availability_for_all_warehouses** | **string** |  | [optional]
**created_date** | **int** |  | [optional]
**custom_attributes** | [**\kruegge82\weclapp\Model\CustomAttribute[]**](CustomAttribute.md) |  | [optional]
**last_modified_date** | **int** |  | [optional]
**picking_instructions** | **string** |  | [optional]
**picks_complete** | **bool** |  | [optional]
**production_order_items** | [**\kruegge82\weclapp\Model\ProductionOrderItem[]**](ProductionOrderItem.md) |  | [optional]
**production_order_number** | **string** |  | [optional]
**status** | **string** |  |
**status_history** | [**\kruegge82\weclapp\Model\ProductionOrderStatusHistory[]**](ProductionOrderStatusHistory.md) |  | [optional]
**target_end_date** | **int** |  |
**target_quantity** | **float** |  |
**target_start_date** | **int** |  |
**warehouse_id** | **string** |  | [optional]
**work_items** | [**\kruegge82\weclapp\Model\ProductionOrderWorkItem[]**](ProductionOrderWorkItem.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
