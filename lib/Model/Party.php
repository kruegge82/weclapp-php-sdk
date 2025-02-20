<?php
/**
 * Party
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * weclapp API
 *
 * # Getting Started   API Version:     **[v1](v1.html)**   The weclapp REST API lets you integrate weclapp with other applications or services.  The specification for this version can be downloaded here:  | Format                          | Public                                                                           | |---------------------------------|----------------------------------------------------------------------------------| | swagger JSON                    | <a href=\"swagger.json\" download=\"weclapp-swagger.json\">Download</a> | | OpenApi 3 JSON                  | <a href=\"openapi_v1.json\" download=\"weclapp-openapi.json\">Download</a> | | OpenApi 3 YAML (with user docs) | <a href=\"openapi_v1.yaml\" download=\"weclapp-openapi.yaml\">Download</a> |    ## What should I know before starting?  Our API is continuously being developed and improved, but we are still trying to keep it as stable as possible. We try to only have changes that are backwards compatible: usually the changes are only additions, e.g. new resources are implemented or new properties are added to existing resources. Sometimes breaking changes cannot be avoided, e.g. when a new feature requires an incompatible change to the underlying data model, all those changes will be documented in the change log.  ## Security and Authentication  You must be a verified user to make API requests. You can authorize against the API with an API token. The token is configurable in your weclapp account under **My settings > API**. Authentication is possible in multiple ways: If the request contains the session cookies of a logged in weclapp session then the user and permissions of that session are used. This is useful when testing the API in a web browser, because then requests are “automatically” authenticated if weclapp is used in another tab. But generally the API is not used from a browser or with session cookies, instead there is an API token for each user that can be used to authenticate requests. Each user can find his/her token on the \"My Settings page\". The token should be kept secret like a password. A user can also generate a new token at any time, doing that invalidates all previous tokens. Authenticating using a token is possible in two ways:  * the token can be sent using the AuthenticationToken header `AuthenticationToken: {api_token}` * the standard HTTP Basic authentication can be used: the username needs to be `“*”` and the password is the token  ## Using curl  ```bash curl --compressed -H \"AuthenticationToken:{api_token}\" \"https://<TENANT>.weclapp.com/webapp/api/v1\" ... ```  Examples of how to use curl will be shown in each section of this API.  ## Headers  This is a JSON-only API. You must supply a `Content-Type: application/json` header on PUT and POST operations. You must set a `Accept: application/json` header on all requests. You may get a `text/plain` response in case of error, e.g. in case of a bad request, you should treat this as an error you need to take action on.  To reduce traffic the weclapp API works with [compression](https://developer.mozilla.org/en-US/docs/Web/HTTP/Compression#end-to-end_compression). This means, a client should always submit the header “Accept-Encoding: gzip”. If this header is not set, the API will enforce compression and respond with \"Content-Encoding: gzip\".  Please also make sure to set a `User-Agent` header for all automated requests, as that makes it much easier to identify misbehaving clients.  ## URLs  The base URL for the API is `https://<TENANT>.weclapp.com/webapp/api/v1/` where `<TENANT>.weclapp.com` is the domain of the specific weclapp instance. So each weclapp instance has its own API endpoints which allow accessing data for that particular instance. The API provides access to various resources like customers, sales orders, articles etc.. Each of those resources implements a common set of operations. The URLs and HTTP methods for the different resource operations use the same pattern for all resources:  | Operation                     | HTTP Method | URL pattern                                                           | |-------------------------------|-------------|-----------------------------------------------------------------------| | Query/list instances          | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       | | total number of instances     | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/count` | | Get a specific instance by id | GET         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` | | Create a new instance         | POST        | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>`       | | Update a specific instance    | PUT         | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` | | Delete a specific instance    | DELETE      | `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>` |  Not all resources support all of those operations. A general description for each operation can be found in API operations by example, and details for each resource are described on the page for that resource.  ## Additional operations  Some resources allow further operations or actions. Those operations can be executed with a POST request, for some operations that only read data it is also possible to use a GET request (this is documented for each operation). For general operations for a resource the URL pattern is `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/<operation>`. Some operations are instance specific, those use the following URL pattern: `https://<TENANT>.weclapp.com/webapp/api/v1/<resource>/id/<id>/<operation>`.      ## JSON  | Type                 | Representation in JSON                                                                                                                                                                                                                                                                                                                                                                         | |----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | string               | Serialized as JSON string, empty strings (length 0 or only whitespace) are always interpreted as null, it is not possible to have a property with an empty string value.                                                                                                                                                                                                                       | | boolean              | Serialized as `true` / `false`.                                                                                                                                                                                                                                                                                                                                                                | | decimal number       | Most numbers in weclapp are decimal numbers with a fixed precision and scale (e.g. quantities or prices), they are serialized as JSON strings and not as JSON numbers to prevent accidental loss of precision when the JSON is deserialized with a JSON library that uses doubles to represent JSON numbers. The serialized numbers always use a “.” as the decimal mark (if one is required). | | integers             | Integer numbers (that can safely be represented as a double) are serialized as JSON numbers.                                                                                                                                                                                                                                                                                                   | | floats/doubles       | Serialized as JSON numbers.                                                                                                                                                                                                                                                                                                                                                                    | | dates and timestamps | Serialized as the milliseconds since 1970-01-01T00:00:00Z (as a JSON number).                                                                                                                                                                                                                                                                                                                  | | enums                | Sometimes a property value can be one of a fixed number of named options. Those enum properties are serialized as a JSON string with the name of the option.                                                                                                                                                                                                                                   |  The deserialization of data sent to the API is relatively lenient, for example when a string is expected, but a number is given then that number is used as the string and the other way around (if possible). Properties with the value null are not serialized by default and when sending data to the API it is also not necessary to include properties whose value is null: all properties that are missing from the JSON object but are expected are assumed to be `null`. To get all properties including those with the value null the query parameter `serializeNulls` can be added to the request URL, in that case null values are included in the response.    ## Error Responses  Any request on the weclapp API may return an error response, with a structure conforming to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807). See the [API error reference](#errors) section for details.      ## Change Policy  weclapp may modify the attributes and resources available to the API and our policies related to access and use of the API from time to time without advance notice. weclapp will use commercially reasonable efforts to notify you of any modifications to the API or policies through notifications or posts on the weclapp Developer Website. weclapp also tracks deprecation of attributes of the API on its Changelog. Modification of the API may have an adverse effect on weclapp Applications, including but not limited to changing the manner in which weclapp Applications communicate with the API and display or transmit Your Data. weclapp will not be liable to you or any third party for such modifications or any adverse effects resulting from such modifications    # API newsletter  Sign up here for our [API newsletter](https://340d89eb.sibforms.com/serve/MUIEAEREP3buQMWpwPwuVohmsPBikdVQIilNQeZ2DJBE5NZePFYqyp_62WSheCC5t_Q7eJ6SVpZBauqRY93L8L8Iquik5gaH40Bi0uOtPioS7U7k4JvemqVuSdvEV0A3DgygC5LOAv-kjuN4Ij5MUqzm5DSHYbmKvGucHMXpZMFGGA5Lwi5VUv6ZZbROGqZJCrGfYFxGttzVBqc_). We will inform you regularly about planned API changes.   # API operations sample  As mentioned previously all resources implement common operations in the same way. In the following all the common operations are explained for the `customer` resource. The operations work in the same way for all other resources (some resources don’t support all the operations), the differences between the resources are mostly the data and the properties that are required and used.  ## Querying  The most common operation is querying or listing the existing entity instances. This is possible with a `GET` request to the base URL of a resource:    ### `GET /customer`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"primeAddress\": true,           \"street1\": \"Mustergasse 7\",           \"zipcode\": \"80331 \"         }       ],       \"blocked\": false,       \"company\": \"Muster GmbH\",       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"primeAddress\": true,               \"street1\": \"Fasanenweg 15\",               \"zipcode\": \"80331\"             }           ],           \"createdDate\": 1496828882837,           \"email\": \"mustermann@beispiel.de\",           \"firstName\": \"Max\",           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1496828973904,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1006\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496828996212,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  In this case there is one sales order with one order item. By default, all null values are omitted, to include them the query parameter serializeNulls can be used:    ### `GET /customer?serializeNulls`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?serializeNulls\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"company\": null,           \"company2\": null,           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"globalLocationNumber\": null,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"postOfficeBoxCity\": null,           \"postOfficeBoxNumber\": null,           \"postOfficeBoxZipCode\": null,           \"primeAddress\": true,           \"state\": null,           \"street1\": \"Mustergasse 7\",           \"street2\": null,           \"zipcode\": \"80331 \"         }       ],       \"amountInsured\": null,       \"annualRevenue\": null,       \"birthDate\": null,       \"blockNotice\": null,       \"blocked\": false,       \"commercialLanguageId\": null,       \"company\": \"Muster GmbH\",       \"company2\": null,       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"company\": null,               \"company2\": null,               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"globalLocationNumber\": null,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"postOfficeBoxCity\": null,               \"postOfficeBoxNumber\": null,               \"postOfficeBoxZipCode\": null,               \"primeAddress\": true,               \"state\": null,               \"street1\": \"Fasanenweg 15\",               \"street2\": null,               \"zipcode\": \"80331\"             }           ],           \"birthDate\": null,           \"company\": null,           \"company2\": null,           \"createdDate\": 1496828882837,           \"customAttributes\": null,           \"description\": null,           \"email\": \"mustermann@beispiel.de\",           \"fax\": null,           \"firstName\": \"Max\",           \"fixPhone2\": null,           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"middleName\": null,           \"mobilePhone1\": null,           \"mobilePhone2\": null,           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"personDepartment\": null,           \"personRole\": null,           \"phone\": null,           \"phoneHome\": null,           \"salutation\": \"MR\",           \"title\": null,           \"website\": null         }       ],       \"createdDate\": 1496828973904,       \"creditLimit\": null,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\",           \"booleanValue\": null,           \"dateValue\": null,           \"numberValue\": null,           \"selectedValueId\": null,           \"selectedValues\": null,           \"stringValue\": null         }       ],       \"customerCategoryId\": null,       \"customerCategoryName\": null,       \"customerNumber\": \"C1006\",       \"customerRating\": null,       \"customerTopics\": [],       \"defaultHeaderDiscount\": null,       \"defaultHeaderSurcharge\": null,       \"deliveryBlock\": false,       \"description\": null,       \"email\": null,       \"fax\": null,       \"firstName\": null,       \"insolvent\": false,       \"insured\": false,       \"invoiceContactId\": null,       \"lastModifiedDate\": 1496828996212,       \"lastName\": null,       \"leadSourceId\": null,       \"leadSourceName\": null,       \"middleName\": null,       \"mobilePhone1\": null,       \"oldCustomerNumber\": null,       \"optIn\": false,       \"parentPartyId\": null,       \"partyType\": \"ORGANIZATION\",       \"paymentMethodId\": null,       \"paymentMethodName\": null,       \"personCompany\": null,       \"personDepartment\": null,       \"personRole\": null,       \"phone\": null,       \"primaryContactId\": null,       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"salutation\": null,       \"satisfaction\": null,       \"sectorId\": null,       \"sectorName\": null,       \"shipmentMethodId\": null,       \"shipmentMethodName\": null,       \"termOfPaymentId\": null,       \"termOfPaymentName\": null,       \"title\": null,       \"useCustomsTariffNumber\": false,       \"vatRegistrationNumber\": null,       \"website\": null     }   ] } ```  ## Pagination By default the operation will not return all entity instances but only the first 100, this can be changed by using the `pageSize` query parameter with the number of desired results. But `pageSize` cannot be arbitrarily high it is usually limited 1000 (exceptions to the default limits of 100 and 1000 are noted in the documentation for the specific resources). To get further results it is necessary to skip entity instances, this is done using the `page` query parameter. Examples:    ### `GET /customer?pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?pageSize=10\" ```  returns at most 10 instances  ### `GET /customer?page=2&pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?page=2&pageSize=10\" ```  returns the second page of results (the `page` parameter is one based, so `page=1` is the first page, which is also the default). Using those two parameters it is possible to implement pagination.  ## Sorting  It is also possible to change the order of the returned results using the `sort` parameter:  ### `GET /customer?sort=lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate\" ```  sort by `lastModifiedDate` (ascending).  ### `GET /customer?sort=-lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=-lastModifiedDate\" ```  sort by `lastModifiedDate` descending.  ### `GET /customer?sort=lastModifiedDate,-salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?sort=lastModifiedDate,-salesChannel\" ```  sort by `lastModifiedDate` (ascending) and then `salesChannel` descending.   It is generally possible to sort by most of the simple properties of an entity. It is possible to combine multiple sort orders by combining the property names with a comma. To sort in descending order just prepend a minus to the property name. If an unsupported or unknown property is specified then an error response is returned.  ## Filtering  It is often desired to get just a subset of the data, for example just the orders of a specific customer or created after a specific date. This is possible using filtering query parameters:    ### `GET /customer?salesChannel-eq=NET1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1\" ```  customers for `salesChannel` `NET1`.  ### `GET /customer?createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?createdDate-gt=1398436281262\" ```  customers created after the specified timestamp.  ### `GET /customer?salesChannel-eq=NET1&createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?salesChannel-eq=NET1&createdDate-gt=1398436281262\" ```  customers for `salesChannel` `NET1` and created after the specified timestamp.  ### `GET /customer?customAttribute4587-eq=NEW`  ```bash curl --compressed -H \"\"\"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587-eq=NEW\" ```  customers with the value `NEW` for `customAttribute` with id 4587.  ### `GET /customer?customAttribute4587.entityReferences.entityId-eq=1234`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\"   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute4587.entityReferences.entityId-eq=1234\" ```  customers with an entity reference to an entity with the id 1234 for the `customAttribute` with the id 4587.  ### `GET /customAttributeDefinitions`  All attributeTypes are supported except `MULTISELECT_LIST`. CustomAttributes of attributeType `LIST` could be filtered by `customAttribute{customAttributeId}.id` or `customAttribute{customAttributeId}.value`.  ### `GET /customer?customAttribute3387.value-eq=OPTION1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?customAttribute3387.value-eq=OPTION1\" ```  customers with value `OPTION1` for `customAttribute` with id 3387.  A filtering query parameter consists of a property name and a filter operator joined together with a minus. If multiple filtering query parameter are specified then they are combined and the returned results match all of them. Filtering query parameters for unknown properties or properties that don’t support filtering are silently ignored.  The following filtering operators are supported (not all of them work for all property types):  | Operator | Meaning                                                                                                                                                                                     | |----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | eq       | equal                                                                                                                                                                                       | | ne       | not equal                                                                                                                                                                                   | | lt       | less than                                                                                                                                                                                   | | gt       | greater than                                                                                                                                                                                | | le       | less equal                                                                                                                                                                                  | | ge       | greater equal                                                                                                                                                                               | | null     | property is null (the query parameter value is ignored and can be omitted)                                                                                                                  | | notnull  | property is not null (the query parameter value is ignored and can be omitted)                                                                                                              | | like     | like expression (supports `%` and `_` as placeholders, similar to SQL LIKE)                                                                                                                 | | notlike  | not like expression                                                                                                                                                                         | | ilike    | like expression, ignoring case                                                                                                                                                              | | notilike | not like expression, ignoring case                                                                                                                                                          | | in       | the property value is in the specified list of values, the query parameter value must be a JSON array with the values in the correct type, for example `?customerNumber-in=[\"1006\",\"1007\"]` | | notin    | the property value is not in the specified list of values                                                                                                                                   |  ## \"Or\" condition filtering  In addition to the default behavior of linking filter expressions via \"and\" you can also link individual filter expressions via \"or\" by prefixing their parameter name with \"or-\":   ### `GET /customer?or-name-eq=charlie&or-name-eq=chaplin`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?or-name-eq=charlie&or-name-eq=chaplin\" ```  The above example is the equivalent of the expression `(name equals \"charlie\") or (name equals \"chaplin\")`   For combining `or` and `and` clauses you may also group `or` expressions by using `or<groupname>-` instead of the plain `or-` prefix:   ### `GET /customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12\" ```  The above example is the equivalent of the expression  ``` ((name equals charlie) or (name equals chaplin)) and ((responsibleUserUsername equals \"mrtest\") or (referenceNumber equals \"4711\")) and (commercialLanguageId equals \"12\") ```  Technically, the default \"or-\" variant is just a special case of this, using the empty String as group name.  ## Filter Expressions  **Warning: This is still a beta feature.**  In addition to individual filter properties it is also possible to specify complex filter expressions that can combine multiple conditions and express relations between properties. Example:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   https://<TENANT>.weclapp.com/webapp/api/v1/party \\   --get \\   --data-urlencode 'filter=(lower(contacts.firstName + \" \" + contacts.lastName) = \"Ertan Özdil\") and (lastModifiedDate >= \"2022-01-01T00:00:00Z\")' ```  * \"filter\" parameters are ANDed with other filter parameters * Property references in filter expressions have exactly the same form and semantics as for the individual filter parameters. * Multiple \"filter\" parameters may be used if needed.  ### Examples  Some more example filter expressions:  ```sql -- enum literals are specified as string literals (salesChannel in [\"NET1\", \"NET4\", \"NET5\"]) and (partyType = \"ORGANIZATION\")  -- normal arithmetic operations are supported. (unitPrice + unitPrice * salesTax) <= 49.99  -- elementary functions length(trim(notes)) <= 140  -- conditions can be combined with logical operators (not (contacts.firstName null)) or (currencyId = 4711) ```  ### Availabe Operations   ### arihmetic  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  addition | + | integer, float, string | integer, float, string | Addition of two numerical values or concatenation of two strings | |  subtraction | - | integer, float | integer, float |  | |  multiplication | * | integer, float | integer, float |  | |  division | / | integer, float | integer, float |  | |  negation | - | --- | integer, float |  |   ### comparison  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  equals | = | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  not equals | != | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  less than | < | integer, float, date | integer, float, date |  | |  greater than | > | integer, float, date | integer, float, date |  | |  Less than or equals | <= | integer, float, date | integer, float, date |  | |  Greater than or equals | >= | integer, float, date | integer, float, date |  | |  Pattern matching | ~ | string | string | Supports % and _ as placeholders, similar to SQL LIKE | |  Alternatives match | in | integer, float, string, boolean, date, enum | list | Value is one of the given alternatives | |  Property is null | null | integer, float, string, boolean, date, enum | --- |  |   ### logical  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  and | and | boolean | boolean |  | |  or | or | boolean | boolean |  | |  not | not | --- | boolean |  |   ### function  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  trim | trim | --- | string | Remove whitespace from both ends of a string | |  length | length | --- | string | Get the number of characters in a string | |  lower | lower | --- | string | Convert a string to lower case |   ### Type Coercion  Literals in the expression are interpreted as different types depending on their context:  * An `integer` literal being compared to a `date` property is interpreted as milliseconds since Epoch * A `string` literal being compared to a `date` property is interpreted as [ISO-8601 point in time](https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations) with optional milliseconds and required time zone. Examples:   * `2024-10-13T10:39:12+02:00`   * `2024-10-13T10:39:12.443+02:00`   * `2024-10-13T10:39:12Z`   * `2024-10-13T10:39:12+02:00` * A `string` literal being compared to an `enum` property is interpreted as enum constant * ID properties (i.e. properties named `id` or `<something>Id`) can be compared to both integer and string literals  ## Return only specific properties  Sometimes it is desirable to only fetch a subset of all properties, for example to save bandwidth. This is possible by specifying the desired properties using the `properties` query parameter:  ### `GET /customer?properties=id,customerNumber,salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```  It is also possible to specify property paths:  ### `GET /customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName\" ```  If an unknown property or property path is specified then an error response is returned.  ```json {   \"result\": [     {       \"id\": \"3346\",       \"contacts\": [         {           \"id\": \"3731\",           \"lastName\": \"Mustermann\"         }       ],       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```   ## Combinations  The query parameters for pagination, sorting, filtering and returning only specific properties can be combined to perform queries.   ## Counting  To determine the total number of entity instances the count operation can be used:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count\" ```  It is possible to use the filtering query parameters from the querying operation with the count operation:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/count?salesChannel-eq=NET1\" ```  returns the number of customers for `salesChannel` `NET1`.   ## Referenced entities  The API offers the possibility to get the referenced entities for a query result in the same request. This way you can save subsequent requests and get all necessary and referenced data in one request. This feature can be used by simply specifying the parameter `includeReferencedEntities` and the primary key references as comma separated list. The API response will contain an additional object `referencedEntities`.   ### `GET /article?includeReferencedEntities=unitId,articleCategoryId`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/article?includeReferencedEntities=unitId,articleCategoryId&properties=id,name,unitId,articleCategoryId\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3235\",       \"name\": \"Testartikel 1\",       \"unitId\": \"2770\"     },     {       \"id\": \"3236\",       \"name\": \"Testartikel 2\",       \"unitId\": \"2770\"     },     {       \"id\": \"3237\",       \"articleCategoryId\": \"7035\",       \"name\": \"Testartikel 3\",       \"unitId\": \"2770\"     }   ],   \"referencedEntities\": {     \"unit\": [       {         \"id\": \"2770\",         \"version\": \"0\",         \"createdDate\": 1597915605986,         \"description\": \"Stück\",         \"lastModifiedDate\": 1597915605985,         \"name\": \"Stk.\"       }     ],     \"articleCategory\": [       {         \"id\": \"7035\",         \"version\": \"0\",         \"createdDate\": 1619778730348,         \"lastModifiedDate\": 1619778730348,         \"name\": \"Demo-Gruppe\"       }     ]   } } ```  ## Additional properties  In addition to the common properties, there are additional properties that can be optionally queried. These are calculated or complexly determined and must therefore be explicitly queried.  To use this function, only the parameter `additionalProperties` and the names of the additional properties must be specified as a comma-separated list. The response then contains the additional object `additionalProperties` with the property and an array of values. The index of the value object in this list also represents the reference to the respective entity.   ### `GET /article?additionalProperties=currentSalesPrice`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v1/article?additionalProperties=currentSalesPrice\" ```  **Output:**  ```json {   \"additionalProperties\": {     \"currentSalesPrice\": [       {         \"articleUnitPrice\": \"39.95\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       },       {         \"articleUnitPrice\": \"479.4\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       }     ]   } } ```   ## Dry-Run  Generic `PUT`, `POST` and `DELETE` endpoints support to perform operations in a \"dry-run-mode\". Where possible, business logic is executed and the data submitted by the requester is validated. To use this functionality the requester can set the optional query parameter \"`dryRun`\" (boolean, default: `false`). The return is as far as possible as with a productive execution, except that 200 \"ok\" is returned in case of success. The meta properties (id, version, createdDate, lastModifiedDate) are not included in \"dry-run-responses\".  ### `POST /salesOrder?dryRun=true`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/salesOrder?dryRun=true\" \\   -d   '{ \"customerNumber\": \"4799\" }' ```  **Error Output:**  ```json {   \"detail\": \"customer not found\",   \"error\": \"customer not found\",   \"status\": 400,   \"title\": \"entity validation failed\",   \"type\": \"/webapp/view/api/errors.html#!/errors/validation\",   \"validationErrors\": [     {       \"detail\": \"referenced entity not found\",       \"instance\": \"salesOrder\",       \"location\": \"customerId\",       \"title\": \"referenced entity not found\",       \"type\": \"/webapp/view/api/errors.html#!/validation/reference\"     }   ] } ```  The response status will be 400 (Bad Request).  **Successful Output:**  ```json {   \"availability\": \"NOT_CHECKED\",   \"availabilityForAllWarehouses\": \"NOT_CHECKED\",   \"commissionSalesPartners\": [],   \"creatorId\": \"4451\",   \"currencyConversionDate\": 1699375721469,   \"currencyConversionRate\": \"1\",   \"customAttributes\": [],   \"customerId\": \"4799\",   \"customerNumber\": \"10000\",   \"deliveryAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"deliveryEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"disableEmailTemplate\": false,   \"dispatchCountryCode\": \"DE\",   \"factoring\": false,   \"fulfillmentProviderId\": \"3335\",   \"grossAmount\": \"0\",   \"grossAmountInCompanyCurrency\": \"0\",   \"headerDiscount\": \"0\",   \"headerSurcharge\": \"0\",   \"invoiceAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"invoiced\": false,   \"netAmount\": \"0\",   \"netAmountInCompanyCurrency\": \"0\",   \"nonStandardTaxId\": \"3492\",   \"nonStandardTaxName\": \"DE Steuerfrei Drittland (VK)\",   \"onlyServices\": false,   \"orderDate\": 1699311600000,   \"orderItems\": [],   \"paid\": false,   \"plannedShippingDate\": 1699311600000,   \"pricingDate\": 1699311600000,   \"projectMembers\": [],   \"projectModeActive\": false,   \"recordAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"recordCurrencyId\": \"256\",   \"recordCurrencyName\": \"EUR\",   \"recordEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"responsibleUserId\": \"4748\",   \"responsibleUserUsername\": \"karsten.kunde@example.com\",   \"salesChannel\": \"NET1\",   \"salesInvoiceEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"salesOrderPaymentType\": \"STANDARD\",   \"sentToRecipient\": false,   \"servicesFinished\": false,   \"shipped\": false,   \"shippingCostItems\": [],   \"shippingLabelsCount\": 1,   \"status\": \"ORDER_ENTRY_IN_PROGRESS\",   \"statusHistory\": [     {       \"status\": \"ORDER_ENTRY_IN_PROGRESS\",       \"statusDate\": 1699375721472,       \"userId\": \"4451\"     }   ],   \"tags\": [],   \"warehouseId\": \"4191\",   \"warehouseName\": \"Hauptlager\" } ```  The response status will be 200 (OK).   ## Optimistic locking  For the update operation the resources usually also support optimistic locking using the `version` property: if the `version` property is in the request body and it does not match the current `version`, then the request fails with an optimistic lock error. In that case the caller should again get the latest `version`, apply the changes and try the request again.   ## Basic Operations  The following entries will show you how to use the different basic operations (`GET`, `POST`, `PUT`, `DELETE`) and what an exemplary response they will give whether the operation was successful or not.   The following table will show you the HTTP status codes of the basic operations if the operation was successful:  | Operation | HTTP status code | |-----------|------------------| | GET       | 200 (OK)         | | POST      | 201 (Created)    | | PUT       | 200 (OK)         | | DELETE    | 204 (No Content) |  If you are not currently logged in to weclapp, you are using another browser or the AuthenticationToken was wrong you will get a response of `401 (Unauthorized)`. It is possible to disable the optimistic locking check by just omitting the `version` property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Get a specific entity instance  Each entity instance has its own URL where it can be retrieved. The URL is based on the entity id.  Performing a GET request on that URL returns the entity instance:  ### `GET /customer/id/3346`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/3346\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"version\": \"2\",       \"addresses\": [         {           \"id\": \"3348\",           \"version\": \"0\",           \"countryCode\": \"DE\",           \"createdDate\": 1487765943229,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1487765943229,           \"primeAddress\": true         },         {           \"id\": \"3976\",           \"version\": \"0\",           \"company\": \"11111\",           \"company2\": \"22222\",           \"countryCode\": \"DE\",           \"createdDate\": 1496040807652,           \"deliveryAddress\": false,           \"globalLocationNumber\": \"gln\",           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496040807648,           \"primeAddress\": false         }       ],       \"blocked\": false,       \"company\": \"Musterdaten GmbH\",       \"contacts\": [         {           \"id\": \"3377\",           \"version\": \"0\",           \"addresses\": [             {               \"id\": \"3379\",               \"version\": \"0\",               \"countryCode\": \"DE\",               \"createdDate\": 1487767121646,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1487767121645,               \"primeAddress\": true             }           ],           \"createdDate\": 1487767121649,           \"firstName\": \"Max\",           \"lastModifiedDate\": 1487767121642,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Musterdaten GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1487765943230,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1002\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496040807672,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  ## Create a new instance  Creating new instances is done by performing a POST request to the base URL of a resource.  The body for that request must have the same structure as the result of the \"get by id\" request, but usually not all properties need to be specified and there are defaults for some properties. Here are some general notes:  * id, version, createdDate and lastModifiedDate can usually not be set by the client, so those values are ignored if they are specified * references to other entities are often represented by two properties (usually id and some other more or less unique property of the referenced entity),   for example customer has currencyId and currencyName to reference the currency, when creating a new customer then it is not necessary   to specify both properties, one of them is usually enough as long as it specifies the referenced entity uniquely, if both are given then they   must not contradict each other * usually some required properties have sensible defaults, so if those are not given or null then the default will be used * boolean properties can be optional (default value would be set) or mandatory   ### `POST /customer`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v1/customer\" \\   -d   '{ \"customerNumber\": \"C1013\", \"partyType\": \"ORGANIZATION\", \"company\": \"Firma\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"Firma\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  The response status will be 201 (Created) and the response will have a `Location` header pointing to the URL of the created instance.   ## Update a specific instance  Updating an instances is done by performing a `PUT` request to the URL of the instance.  A successful response will have the status 200 (OK) and the response body will contain the updated entity.  Some special aspects must be considered when updating:  * the read-only properties like `createdDate` are ignored anyway, so they do not need to be given * `id` and `version` are processed as follows: if the `id` is given it must match the `id` of the updated instance and if the `version` is given then optimistic locking is enabled (see below) * for the references that use two properties it is again possible to specify only one of them, if both are given then they must not contradict each other * for complete entity updates boolean properties are always mandatory and need to be passed  ### Updating the complete entity  When updating it is generally necessary to specify all properties that are not `null`, all unspecified properties will be interpreted as `null`.  Since sometimes new properties are added to entities, it is strongly recommended that an API client always first gets the latest version using `GET/customer/id/{id}`, then modifies that JSON and finally performs the `PUT` request. Doing this ensures that new properties that the client does not know about are not accidentally overwritten with `null`.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" \\   -d  @- <<JSON {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } JSON ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  ### Updating only specific properties  It is also possible to update only specific properties. For this you only have to set the parameter `ignoreMissingProperties=true`. We recommend to always include `version` here as well to activate optimistic locking.  If you want to change lists (add, update or delete an item) stored in the entity, it is sufficient to specify the id for existing item entities.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391?ignoreMissingProperties=true\" \\   -d '{ \"version\": \"0\", \"company\": \"NEUER FIRMENNAME!!!\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```   ### Optimistic locking   For the update operation the resources usually also support optimistic locking using the version property: if the version property is in the request body and it does not match the current version, then the request fails with an optimistic lock error. In that case the caller should again get the latest version, apply the changes and try the request again. It is possible to disable the optimistic locking check by just omitting the version property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Delete a specific instance  Deleting an instances is done by performing a `DELETE` request to the URL of the instance.  ### `DELETE /customer/id/{id}`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" -X DELETE \"https://<TENANT>.weclapp.com/webapp/api/v1/customer/id/4391\" ```  If the deletion is possible it is performed and the response status will be 204 (No Content), otherwise an error response will be returned.  <span id=\"errors\"> </span>  # API error reference  weclapp API errors are basically conformant to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with some notable differences:  * The migration to the RFC 7807 structure is an ongoing process, so some compatibility mechanisms are in place for now:   * The responses come with \"`Content-Type: application/json`\" instead of \"`Content-Type: application/problem+json`\"   * The \"unstructured\" error responses that have been in use until now are still part of the response JSON, so existing code should work without changes.   * Detail information that _should_ be there according to the new structure may be still missing. This applies especially to all kinds of validation errors. * Two custom fields have been added to the response structure: \"location\" and \"validationErrors\". See the general description below and the individual error descriptions for details on these.  ## Error JSON structure  The error JSON is structured as described in [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with two additional properties:  | Property         | Datatype         | Description                                                                                                                                                                                                                                       | |------------------|------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type             | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.              | | title            | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4).      | | status           | integer          | (RFC7807) The HTTP status code (RFC7231, Section 6) generated by the origin server for this occurrence of the problem.                                                                                                                            | | detail           | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem. This may be missing when the actual detail information either would be security sensitive (e.g. on unexpected errors) or is contained in the validationErrors. | | instance         | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this typically is the URI to the affected entity.                                      | | validationErrors | array of objects | List of found validation errors, with a structure modeled after RFC 7807 as well (see below).                                                                                                                                                     |  Validation errors have a similar structure:  | Property  | Datatype         | Description                                                                                                                                                                                                                                  | |-----------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type      | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.         | | title     | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4). | | detail    | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem.                                                                                                                                                           | | errorCode | string           | Unique identifier of the concrete business error                                                                                                                                                                                             | | instance  | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this is the name of the affected parameter or the URI to the affected entity.     | | location  | string           | The JsonPath location of the affected property.                                                                                                                                                                                              | | allowed   | array of strings | List of allowed values, with semantics dependent on the concrete validation error.                                                                                                                                                           |   ## Error reference   <span id=\"!/errors/context\"></span>  ### \"context\": operation not possible in this context  |            |                                       | |------------|---------------------------------------| | description | The operation is not possible in this context or with the current state of the data                  | | type       | [/webapp/view/api/errors.html#!/errors/context](/webapp/view/api/errors.html#!/errors/context)        | | status     | 409 (Conflict)|  <span id=\"!/errors/conversation\"></span>  ### \"conversation\": existing conversation (parameter 'cid') is not allowed  |            |                                       | |------------|---------------------------------------| | description | The request was sent in the context of a running session, which is not allowed for the (stateless) API                  | | type       | [/webapp/view/api/errors.html#!/errors/conversation](/webapp/view/api/errors.html#!/errors/conversation)        | | status     | 400 (Bad Request)| | detail | human readable information on the conversation |  <span id=\"!/errors/entity_not_found\"></span>  ### \"entity_not_found\": (sub)entity not found  |            |                                       | |------------|---------------------------------------| | description | The specified entity or (more likely) a referenced sub-entity could not be found.                  | | type       | [/webapp/view/api/errors.html#!/errors/entity_not_found](/webapp/view/api/errors.html#!/errors/entity_not_found)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/forbidden\"></span>  ### \"forbidden\": insufficient privileges  |            |                                       | |------------|---------------------------------------| | description | The provided credentials are not sufficient to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/forbidden](/webapp/view/api/errors.html#!/errors/forbidden)        | | status     | 403 (Forbidden)|  <span id=\"!/errors/invalid_json\"></span>  ### \"invalid_json\": invalid json  |            |                                       | |------------|---------------------------------------| | description | The JSON passed in the request body could not be parsed or the body is not JSON at all.                  | | type       | [/webapp/view/api/errors.html#!/errors/invalid_json](/webapp/view/api/errors.html#!/errors/invalid_json)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/not_found\"></span>  ### \"not_found\": resource not found  |            |                                       | |------------|---------------------------------------| | description | The API endpoint / method / entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/errors/not_found](/webapp/view/api/errors.html#!/errors/not_found)        | | status     | 404 (Not Found)|  <span id=\"!/errors/optimistic_lock\"></span>  ### \"optimistic_lock\": optimistic lock error  |            |                                       | |------------|---------------------------------------| | description | Optimistic Lock error. This appears if an entity you tried to modify has been modified by someone else in the meantime. See 'Optimistic Locking' in the 'API operations sample' section of the docs.                  | | type       | [/webapp/view/api/errors.html#!/errors/optimistic_lock](/webapp/view/api/errors.html#!/errors/optimistic_lock)        | | status     | 409 (Conflict)| | instance | URI to affected entity if available |  <span id=\"!/errors/persistence\"></span>  ### \"persistence\": persistence error  |            |                                       | |------------|---------------------------------------| | description | Catchall for persistence related problems that are not covered by more specific errors. In some cases it is sufficient to try again after a short time, but if the problem persists please contact support.                  | | type       | [/webapp/view/api/errors.html#!/errors/persistence](/webapp/view/api/errors.html#!/errors/persistence)        | | status     | 409 (Conflict)|  <span id=\"!/errors/unauthorized\"></span>  ### \"unauthorized\": missing permission  |            |                                       | |------------|---------------------------------------| | description | Authorization or authentication problem                  | | type       | [/webapp/view/api/errors.html#!/errors/unauthorized](/webapp/view/api/errors.html#!/errors/unauthorized)        | | status     | 401 (Unauthorized)|  <span id=\"!/errors/unexpected\"></span>  ### \"unexpected\": unexpected error  |            |                                       | |------------|---------------------------------------| | description | Catchall error for everything that is not covered by more specific errors. This is typically caused by a bug in weclapp.                  | | type       | [/webapp/view/api/errors.html#!/errors/unexpected](/webapp/view/api/errors.html#!/errors/unexpected)        | | status     | 500 (Internal Server Error)|  <span id=\"!/errors/unsupported_mime_type\"></span>  ### \"unsupported_mime_type\": unsupported mime type  |            |                                       | |------------|---------------------------------------| | description | The provided file type is not supported to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/unsupported_mime_type](/webapp/view/api/errors.html#!/errors/unsupported_mime_type)        | | status     | 415 (Unsupported Media Type)|  <span id=\"!/errors/validation\"></span>  ### \"validation\": validation failed  |            |                                       | |------------|---------------------------------------| | description | The input (entity properties / URL parameters) is malformed or not allowed in this context                  | | type       | [/webapp/view/api/errors.html#!/errors/validation](/webapp/view/api/errors.html#!/errors/validation)        | | status     | 400 (Bad Request)| | validationErrors | validation errors |  ## Validation error reference   <span id=\"!/validation/authorization\"></span>  ### \"authorization\": no authorization to access property or referenced entity  |            |                                       | |------------|---------------------------------------| | description | The client lacks authorization to access the property or referenced entity                  | | type       | [/webapp/view/api/errors.html#!/validation/authorization](/webapp/view/api/errors.html#!/validation/authorization)        |  <span id=\"!/validation/blocked\"></span>  ### \"blocked\": operation was blocked  |            |                                       | |------------|---------------------------------------| | description | The operation was blocked by referenced entities                  | | type       | [/webapp/view/api/errors.html#!/validation/blocked](/webapp/view/api/errors.html#!/validation/blocked)        |  <span id=\"!/validation/consistency\"></span>  ### \"consistency\": values are inconsistent  |            |                                       | |------------|---------------------------------------| | description | The given values are inconsistent (general, unspecific error)                  | | type       | [/webapp/view/api/errors.html#!/validation/consistency](/webapp/view/api/errors.html#!/validation/consistency)        |  <span id=\"!/validation/digits\"></span>  ### \"digits\": maximum number of digits exceeded  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has more than the allowed maximum number of integer and/or fractional digits                  | | type       | [/webapp/view/api/errors.html#!/validation/digits](/webapp/view/api/errors.html#!/validation/digits)        | | allowed | maximum allowed integer digits, maximum allowed fraction digits |  <span id=\"!/validation/duplicate\"></span>  ### \"duplicate\": entity is a duplicate  |            |                                       | |------------|---------------------------------------| | description | The given (sub-)entity is a duplicate                  | | type       | [/webapp/view/api/errors.html#!/validation/duplicate](/webapp/view/api/errors.html#!/validation/duplicate)        |  <span id=\"!/validation/email\"></span>  ### \"email\": not a well-formed email  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address                  | | type       | [/webapp/view/api/errors.html#!/validation/email](/webapp/view/api/errors.html#!/validation/email)        |  <span id=\"!/validation/email_or_domain\"></span>  ### \"email_or_domain\": not a well-formed email or domain  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address or internet domain name                  | | type       | [/webapp/view/api/errors.html#!/validation/email_or_domain](/webapp/view/api/errors.html#!/validation/email_or_domain)        |  <span id=\"!/validation/empty\"></span>  ### \"empty\": value must be empty  |            |                                       | |------------|---------------------------------------| | description | The value given must be left blank in this context, but is present                  | | type       | [/webapp/view/api/errors.html#!/validation/empty](/webapp/view/api/errors.html#!/validation/empty)        |  <span id=\"!/validation/enum\"></span>  ### \"enum\": unsupported enum value  |            |                                       | |------------|---------------------------------------| | description | The given enum value is unknown or unsupported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/enum](/webapp/view/api/errors.html#!/validation/enum)        | | allowed | all known / allowed (enum) values |  <span id=\"!/validation/future\"></span>  ### \"future\": timestamp has to be in the future  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the future but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/future](/webapp/view/api/errors.html#!/validation/future)        |  <span id=\"!/validation/greater_than\"></span>  ### \"greater_than\": value has to be above allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be larger than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/greater_than](/webapp/view/api/errors.html#!/validation/greater_than)        | | allowed | lower limit (excluded) |  <span id=\"!/validation/less_than\"></span>  ### \"less_than\": value has to be below allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be smaller than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/less_than](/webapp/view/api/errors.html#!/validation/less_than)        | | allowed | upper limit (excluded) |  <span id=\"!/validation/max\"></span>  ### \"max\": value is above allowed maximum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is larger than the allowed maximum                  | | type       | [/webapp/view/api/errors.html#!/validation/max](/webapp/view/api/errors.html#!/validation/max)        | | allowed | maximum allowed value |  <span id=\"!/validation/min\"></span>  ### \"min\": value is below allowed minimum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is smaller than the allowed minimum                  | | type       | [/webapp/view/api/errors.html#!/validation/min](/webapp/view/api/errors.html#!/validation/min)        | | allowed | minimum allowed value |  <span id=\"!/validation/not_empty\"></span>  ### \"not_empty\": value must not be empty  |            |                                       | |------------|---------------------------------------| | description | The value given is required, but is missing or blank                  | | type       | [/webapp/view/api/errors.html#!/validation/not_empty](/webapp/view/api/errors.html#!/validation/not_empty)        |  <span id=\"!/validation/past\"></span>  ### \"past\": timestamp has to be in the past  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the past but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/past](/webapp/view/api/errors.html#!/validation/past)        |  <span id=\"!/validation/pattern\"></span>  ### \"pattern\": value has to conform to a specific pattern  |            |                                       | |------------|---------------------------------------| | description | The text given does not conform to the allowed pattern                  | | type       | [/webapp/view/api/errors.html#!/validation/pattern](/webapp/view/api/errors.html#!/validation/pattern)        | | allowed | the pattern (regular expression) |  <span id=\"!/validation/reference\"></span>  ### \"reference\": referenced entity not found  |            |                                       | |------------|---------------------------------------| | description | The referenced entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/validation/reference](/webapp/view/api/errors.html#!/validation/reference)        |  <span id=\"!/validation/size\"></span>  ### \"size\": size is outside allowed range  |            |                                       | |------------|---------------------------------------| | description | The text or collection given has not enough or too many characters or elements                  | | type       | [/webapp/view/api/errors.html#!/validation/size](/webapp/view/api/errors.html#!/validation/size)        | | allowed | minimum size, maximum size |  <span id=\"!/validation/syntax\"></span>  ### \"syntax\": expression cannot be interpreted  |            |                                       | |------------|---------------------------------------| | description | The given expression does not conform to the expression syntax                  | | type       | [/webapp/view/api/errors.html#!/validation/syntax](/webapp/view/api/errors.html#!/validation/syntax)        |  <span id=\"!/validation/type\"></span>  ### \"type\": unexpected data type  |            |                                       | |------------|---------------------------------------| | description | The given value is of a data type that's not supported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/type](/webapp/view/api/errors.html#!/validation/type)        |
 *
 * The version of the OpenAPI document: 1
 * Contact: support@weclapp.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\weclapp\Model;

use \ArrayAccess;
use \kruegge82\weclapp\ObjectSerializer;

/**
 * Party Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Party implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'party';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'created_date' => 'int',
        'last_modified_date' => 'int',
        'version' => 'string',
        'custom_attributes' => '\kruegge82\weclapp\Model\CustomAttribute[]',
        'addresses' => '\kruegge82\weclapp\Model\Address[]',
        'birth_date' => 'int',
        'company' => 'string',
        'company2' => 'string',
        'delivery_address_id' => 'string',
        'email' => 'string',
        'fax' => 'string',
        'first_name' => 'string',
        'invoice_address_id' => 'string',
        'last_name' => 'string',
        'middle_name' => 'string',
        'mobile_phone1' => 'string',
        'online_accounts' => '\kruegge82\weclapp\Model\OnlineAccount[]',
        'party_type' => '\kruegge82\weclapp\Model\PartyType',
        'person_company' => 'string',
        'person_department_id' => 'string',
        'person_role_id' => 'string',
        'phone' => 'string',
        'primary_address_id' => 'string',
        'salutation' => '\kruegge82\weclapp\Model\Salutation',
        'tags' => 'string[]',
        'title' => 'string',
        'title_id' => 'string',
        'website' => 'string',
        'allow_purchase_order_creation' => 'bool',
        'bank_accounts' => '\kruegge82\weclapp\Model\PartyBankAccount[]',
        'commercial_language_id' => 'string',
        'commission_block' => 'bool',
        'commission_sales_partners' => '\kruegge82\weclapp\Model\CommissionSalesPartner[]',
        'company_size_id' => 'string',
        'company_size_name' => 'string',
        'competitor' => 'bool',
        'contacts' => '\kruegge82\weclapp\Model\OnlyId[]',
        'currency_id' => 'string',
        'currency_name' => 'string',
        'customer' => 'bool',
        'customer_allow_dropshipping_order_creation' => 'bool',
        'customer_amount_insured' => 'float',
        'customer_annual_revenue' => 'float',
        'customer_block_notice' => 'string',
        'customer_blocked' => 'bool',
        'customer_business_type' => '\kruegge82\weclapp\Model\CustomerBusinessType',
        'customer_category_id' => 'string',
        'customer_category_name' => 'string',
        'customer_credit_limit' => 'float',
        'customer_current_sales_stage_id' => 'string',
        'customer_current_sales_stage_name' => 'string',
        'customer_debtor_account_id' => 'string',
        'customer_debtor_account_number' => 'string',
        'customer_debtor_accounting_code_id' => 'string',
        'customer_default_header_discount' => 'float',
        'customer_default_header_surcharge' => 'float',
        'customer_default_shipping_carrier_id' => 'string',
        'customer_delivery_block' => 'bool',
        'customer_insolvent' => 'bool',
        'customer_insured' => 'bool',
        'customer_internal_note' => 'string',
        'customer_loss_description' => 'string',
        'customer_loss_reason_id' => 'string',
        'customer_loss_reason_name' => 'string',
        'customer_non_standard_tax_id' => 'string',
        'customer_number' => 'string',
        'customer_number_old' => 'string',
        'customer_payment_method_id' => 'string',
        'customer_payment_method_name' => 'string',
        'customer_sales_channel' => '\kruegge82\weclapp\Model\DistributionChannel',
        'customer_sales_order_payment_type' => '\kruegge82\weclapp\Model\SalesOrderPaymentType',
        'customer_sales_probability' => 'int',
        'customer_sales_stage_history' => '\kruegge82\weclapp\Model\SalesStageHistory[]',
        'customer_satisfaction' => '\kruegge82\weclapp\Model\CustomerSatisfaction',
        'customer_shipment_method_id' => 'string',
        'customer_shipment_method_name' => 'string',
        'customer_supplier_number' => 'string',
        'customer_term_of_payment_id' => 'string',
        'customer_term_of_payment_name' => 'string',
        'customer_use_customs_tariff_number' => 'bool',
        'delivery_email_addresses_id' => 'string',
        'description' => 'string',
        'dunning_address_id' => 'string',
        'dunning_email_addresses_id' => 'string',
        'enable_dropshipping_in_new_supply_sources' => 'bool',
        'eori_number' => 'string',
        'factoring' => 'bool',
        'fix_phone2' => 'string',
        'fixed_responsible_user' => 'bool',
        'former_sales_partner' => 'bool',
        'habitual_exporter' => 'bool',
        'image_id' => 'string',
        'invoice_block' => 'bool',
        'invoice_recipient_id' => 'string',
        'lead_rating_id' => 'string',
        'lead_rating_name' => 'string',
        'lead_source_id' => 'string',
        'lead_source_name' => 'string',
        'lead_status' => '\kruegge82\weclapp\Model\LeadStatus',
        'legal_form_id' => 'string',
        'legal_form_name' => 'string',
        'mobile_phone2' => 'string',
        'opt_in_email' => 'bool',
        'opt_in_letter' => 'bool',
        'opt_in_phone' => 'bool',
        'opt_in_sms' => 'bool',
        'parent_party_id' => 'string',
        'party_email_addresses' => '\kruegge82\weclapp\Model\PartyEmailAddresses[]',
        'party_habitual_exporter_letters_of_intent' => '\kruegge82\weclapp\Model\PartyHabitualExporterLetterOfIntent[]',
        'phone_home' => 'string',
        'primary_contact_id' => 'string',
        'public_page_expiration_date' => 'int',
        'public_page_uuid' => 'string',
        'purchase_email_addresses_id' => 'string',
        'purchase_via_plafond' => 'bool',
        'quotation_email_addresses_id' => 'string',
        'rating_id' => 'string',
        'rating_name' => 'string',
        'reference_number' => 'string',
        'region_id' => 'string',
        'responsible_user_id' => 'string',
        'responsible_user_username' => 'string',
        'sales_invoice_email_addresses_id' => 'string',
        'sales_order_email_addresses_id' => 'string',
        'sales_partner' => 'bool',
        'sales_partner_default_commission_fix' => 'float',
        'sales_partner_default_commission_percentage' => 'float',
        'sales_partner_default_commission_type' => '\kruegge82\weclapp\Model\CommissionType',
        'sector_id' => 'string',
        'sector_name' => 'string',
        'supplier' => 'bool',
        'supplier_creditor_account_id' => 'string',
        'supplier_creditor_account_number' => 'string',
        'supplier_creditor_accounting_code_id' => 'string',
        'supplier_customer_number_at_supplier' => 'string',
        'supplier_default_shipping_carrier_id' => 'string',
        'supplier_internal_note' => 'string',
        'supplier_minimum_purchase_order_amount' => 'float',
        'supplier_non_standard_tax_id' => 'string',
        'supplier_number' => 'string',
        'supplier_number_old' => 'string',
        'supplier_order_block' => 'bool',
        'supplier_payment_method_id' => 'string',
        'supplier_payment_method_name' => 'string',
        'supplier_shipment_method_id' => 'string',
        'supplier_shipment_method_name' => 'string',
        'supplier_term_of_payment_id' => 'string',
        'supplier_term_of_payment_name' => 'string',
        'tax_id' => 'string',
        'topics' => '\kruegge82\weclapp\Model\Entity[]',
        'vat_identification_number' => 'string',
        'x_rechnung_leitweg_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created_date' => 'timestamp',
        'last_modified_date' => 'timestamp',
        'version' => null,
        'custom_attributes' => null,
        'addresses' => null,
        'birth_date' => 'timestamp',
        'company' => null,
        'company2' => null,
        'delivery_address_id' => null,
        'email' => 'email',
        'fax' => null,
        'first_name' => null,
        'invoice_address_id' => null,
        'last_name' => null,
        'middle_name' => null,
        'mobile_phone1' => null,
        'online_accounts' => null,
        'party_type' => null,
        'person_company' => null,
        'person_department_id' => null,
        'person_role_id' => null,
        'phone' => null,
        'primary_address_id' => null,
        'salutation' => null,
        'tags' => null,
        'title' => null,
        'title_id' => null,
        'website' => null,
        'allow_purchase_order_creation' => null,
        'bank_accounts' => null,
        'commercial_language_id' => null,
        'commission_block' => null,
        'commission_sales_partners' => null,
        'company_size_id' => null,
        'company_size_name' => null,
        'competitor' => null,
        'contacts' => null,
        'currency_id' => null,
        'currency_name' => null,
        'customer' => null,
        'customer_allow_dropshipping_order_creation' => null,
        'customer_amount_insured' => 'decimal',
        'customer_annual_revenue' => 'decimal',
        'customer_block_notice' => null,
        'customer_blocked' => null,
        'customer_business_type' => null,
        'customer_category_id' => null,
        'customer_category_name' => null,
        'customer_credit_limit' => 'decimal',
        'customer_current_sales_stage_id' => null,
        'customer_current_sales_stage_name' => null,
        'customer_debtor_account_id' => null,
        'customer_debtor_account_number' => null,
        'customer_debtor_accounting_code_id' => null,
        'customer_default_header_discount' => 'decimal',
        'customer_default_header_surcharge' => 'decimal',
        'customer_default_shipping_carrier_id' => null,
        'customer_delivery_block' => null,
        'customer_insolvent' => null,
        'customer_insured' => null,
        'customer_internal_note' => 'html',
        'customer_loss_description' => null,
        'customer_loss_reason_id' => null,
        'customer_loss_reason_name' => null,
        'customer_non_standard_tax_id' => null,
        'customer_number' => null,
        'customer_number_old' => null,
        'customer_payment_method_id' => null,
        'customer_payment_method_name' => null,
        'customer_sales_channel' => null,
        'customer_sales_order_payment_type' => null,
        'customer_sales_probability' => 'int32',
        'customer_sales_stage_history' => null,
        'customer_satisfaction' => null,
        'customer_shipment_method_id' => null,
        'customer_shipment_method_name' => null,
        'customer_supplier_number' => null,
        'customer_term_of_payment_id' => null,
        'customer_term_of_payment_name' => null,
        'customer_use_customs_tariff_number' => null,
        'delivery_email_addresses_id' => null,
        'description' => 'html',
        'dunning_address_id' => null,
        'dunning_email_addresses_id' => null,
        'enable_dropshipping_in_new_supply_sources' => null,
        'eori_number' => null,
        'factoring' => null,
        'fix_phone2' => null,
        'fixed_responsible_user' => null,
        'former_sales_partner' => null,
        'habitual_exporter' => null,
        'image_id' => null,
        'invoice_block' => null,
        'invoice_recipient_id' => null,
        'lead_rating_id' => null,
        'lead_rating_name' => null,
        'lead_source_id' => null,
        'lead_source_name' => null,
        'lead_status' => null,
        'legal_form_id' => null,
        'legal_form_name' => null,
        'mobile_phone2' => null,
        'opt_in_email' => null,
        'opt_in_letter' => null,
        'opt_in_phone' => null,
        'opt_in_sms' => null,
        'parent_party_id' => null,
        'party_email_addresses' => null,
        'party_habitual_exporter_letters_of_intent' => null,
        'phone_home' => null,
        'primary_contact_id' => null,
        'public_page_expiration_date' => 'timestamp',
        'public_page_uuid' => null,
        'purchase_email_addresses_id' => null,
        'purchase_via_plafond' => null,
        'quotation_email_addresses_id' => null,
        'rating_id' => null,
        'rating_name' => null,
        'reference_number' => null,
        'region_id' => null,
        'responsible_user_id' => null,
        'responsible_user_username' => null,
        'sales_invoice_email_addresses_id' => null,
        'sales_order_email_addresses_id' => null,
        'sales_partner' => null,
        'sales_partner_default_commission_fix' => 'decimal',
        'sales_partner_default_commission_percentage' => 'decimal',
        'sales_partner_default_commission_type' => null,
        'sector_id' => null,
        'sector_name' => null,
        'supplier' => null,
        'supplier_creditor_account_id' => null,
        'supplier_creditor_account_number' => null,
        'supplier_creditor_accounting_code_id' => null,
        'supplier_customer_number_at_supplier' => null,
        'supplier_default_shipping_carrier_id' => null,
        'supplier_internal_note' => 'html',
        'supplier_minimum_purchase_order_amount' => 'decimal',
        'supplier_non_standard_tax_id' => null,
        'supplier_number' => null,
        'supplier_number_old' => null,
        'supplier_order_block' => null,
        'supplier_payment_method_id' => null,
        'supplier_payment_method_name' => null,
        'supplier_shipment_method_id' => null,
        'supplier_shipment_method_name' => null,
        'supplier_term_of_payment_id' => null,
        'supplier_term_of_payment_name' => null,
        'tax_id' => null,
        'topics' => null,
        'vat_identification_number' => null,
        'x_rechnung_leitweg_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'created_date' => false,
        'last_modified_date' => false,
        'version' => false,
        'custom_attributes' => false,
        'addresses' => false,
        'birth_date' => false,
        'company' => false,
        'company2' => false,
        'delivery_address_id' => false,
        'email' => false,
        'fax' => false,
        'first_name' => false,
        'invoice_address_id' => false,
        'last_name' => false,
        'middle_name' => false,
        'mobile_phone1' => false,
        'online_accounts' => false,
        'party_type' => false,
        'person_company' => false,
        'person_department_id' => false,
        'person_role_id' => false,
        'phone' => false,
        'primary_address_id' => false,
        'salutation' => false,
        'tags' => false,
        'title' => false,
        'title_id' => false,
        'website' => false,
        'allow_purchase_order_creation' => false,
        'bank_accounts' => false,
        'commercial_language_id' => false,
        'commission_block' => false,
        'commission_sales_partners' => false,
        'company_size_id' => false,
        'company_size_name' => false,
        'competitor' => false,
        'contacts' => false,
        'currency_id' => false,
        'currency_name' => false,
        'customer' => false,
        'customer_allow_dropshipping_order_creation' => false,
        'customer_amount_insured' => false,
        'customer_annual_revenue' => false,
        'customer_block_notice' => false,
        'customer_blocked' => false,
        'customer_business_type' => false,
        'customer_category_id' => false,
        'customer_category_name' => false,
        'customer_credit_limit' => false,
        'customer_current_sales_stage_id' => false,
        'customer_current_sales_stage_name' => false,
        'customer_debtor_account_id' => false,
        'customer_debtor_account_number' => false,
        'customer_debtor_accounting_code_id' => false,
        'customer_default_header_discount' => false,
        'customer_default_header_surcharge' => false,
        'customer_default_shipping_carrier_id' => false,
        'customer_delivery_block' => false,
        'customer_insolvent' => false,
        'customer_insured' => false,
        'customer_internal_note' => false,
        'customer_loss_description' => false,
        'customer_loss_reason_id' => false,
        'customer_loss_reason_name' => false,
        'customer_non_standard_tax_id' => false,
        'customer_number' => false,
        'customer_number_old' => false,
        'customer_payment_method_id' => false,
        'customer_payment_method_name' => false,
        'customer_sales_channel' => false,
        'customer_sales_order_payment_type' => false,
        'customer_sales_probability' => false,
        'customer_sales_stage_history' => false,
        'customer_satisfaction' => false,
        'customer_shipment_method_id' => false,
        'customer_shipment_method_name' => false,
        'customer_supplier_number' => false,
        'customer_term_of_payment_id' => false,
        'customer_term_of_payment_name' => false,
        'customer_use_customs_tariff_number' => false,
        'delivery_email_addresses_id' => false,
        'description' => false,
        'dunning_address_id' => false,
        'dunning_email_addresses_id' => false,
        'enable_dropshipping_in_new_supply_sources' => false,
        'eori_number' => false,
        'factoring' => false,
        'fix_phone2' => false,
        'fixed_responsible_user' => false,
        'former_sales_partner' => false,
        'habitual_exporter' => false,
        'image_id' => false,
        'invoice_block' => false,
        'invoice_recipient_id' => false,
        'lead_rating_id' => false,
        'lead_rating_name' => false,
        'lead_source_id' => false,
        'lead_source_name' => false,
        'lead_status' => false,
        'legal_form_id' => false,
        'legal_form_name' => false,
        'mobile_phone2' => false,
        'opt_in_email' => false,
        'opt_in_letter' => false,
        'opt_in_phone' => false,
        'opt_in_sms' => false,
        'parent_party_id' => false,
        'party_email_addresses' => false,
        'party_habitual_exporter_letters_of_intent' => false,
        'phone_home' => false,
        'primary_contact_id' => false,
        'public_page_expiration_date' => false,
        'public_page_uuid' => false,
        'purchase_email_addresses_id' => false,
        'purchase_via_plafond' => false,
        'quotation_email_addresses_id' => false,
        'rating_id' => false,
        'rating_name' => false,
        'reference_number' => false,
        'region_id' => false,
        'responsible_user_id' => false,
        'responsible_user_username' => false,
        'sales_invoice_email_addresses_id' => false,
        'sales_order_email_addresses_id' => false,
        'sales_partner' => false,
        'sales_partner_default_commission_fix' => false,
        'sales_partner_default_commission_percentage' => false,
        'sales_partner_default_commission_type' => false,
        'sector_id' => false,
        'sector_name' => false,
        'supplier' => false,
        'supplier_creditor_account_id' => false,
        'supplier_creditor_account_number' => false,
        'supplier_creditor_accounting_code_id' => false,
        'supplier_customer_number_at_supplier' => false,
        'supplier_default_shipping_carrier_id' => false,
        'supplier_internal_note' => false,
        'supplier_minimum_purchase_order_amount' => false,
        'supplier_non_standard_tax_id' => false,
        'supplier_number' => false,
        'supplier_number_old' => false,
        'supplier_order_block' => false,
        'supplier_payment_method_id' => false,
        'supplier_payment_method_name' => false,
        'supplier_shipment_method_id' => false,
        'supplier_shipment_method_name' => false,
        'supplier_term_of_payment_id' => false,
        'supplier_term_of_payment_name' => false,
        'tax_id' => false,
        'topics' => false,
        'vat_identification_number' => false,
        'x_rechnung_leitweg_id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'created_date' => 'createdDate',
        'last_modified_date' => 'lastModifiedDate',
        'version' => 'version',
        'custom_attributes' => 'customAttributes',
        'addresses' => 'addresses',
        'birth_date' => 'birthDate',
        'company' => 'company',
        'company2' => 'company2',
        'delivery_address_id' => 'deliveryAddressId',
        'email' => 'email',
        'fax' => 'fax',
        'first_name' => 'firstName',
        'invoice_address_id' => 'invoiceAddressId',
        'last_name' => 'lastName',
        'middle_name' => 'middleName',
        'mobile_phone1' => 'mobilePhone1',
        'online_accounts' => 'onlineAccounts',
        'party_type' => 'partyType',
        'person_company' => 'personCompany',
        'person_department_id' => 'personDepartmentId',
        'person_role_id' => 'personRoleId',
        'phone' => 'phone',
        'primary_address_id' => 'primaryAddressId',
        'salutation' => 'salutation',
        'tags' => 'tags',
        'title' => 'title',
        'title_id' => 'titleId',
        'website' => 'website',
        'allow_purchase_order_creation' => 'allowPurchaseOrderCreation',
        'bank_accounts' => 'bankAccounts',
        'commercial_language_id' => 'commercialLanguageId',
        'commission_block' => 'commissionBlock',
        'commission_sales_partners' => 'commissionSalesPartners',
        'company_size_id' => 'companySizeId',
        'company_size_name' => 'companySizeName',
        'competitor' => 'competitor',
        'contacts' => 'contacts',
        'currency_id' => 'currencyId',
        'currency_name' => 'currencyName',
        'customer' => 'customer',
        'customer_allow_dropshipping_order_creation' => 'customerAllowDropshippingOrderCreation',
        'customer_amount_insured' => 'customerAmountInsured',
        'customer_annual_revenue' => 'customerAnnualRevenue',
        'customer_block_notice' => 'customerBlockNotice',
        'customer_blocked' => 'customerBlocked',
        'customer_business_type' => 'customerBusinessType',
        'customer_category_id' => 'customerCategoryId',
        'customer_category_name' => 'customerCategoryName',
        'customer_credit_limit' => 'customerCreditLimit',
        'customer_current_sales_stage_id' => 'customerCurrentSalesStageId',
        'customer_current_sales_stage_name' => 'customerCurrentSalesStageName',
        'customer_debtor_account_id' => 'customerDebtorAccountId',
        'customer_debtor_account_number' => 'customerDebtorAccountNumber',
        'customer_debtor_accounting_code_id' => 'customerDebtorAccountingCodeId',
        'customer_default_header_discount' => 'customerDefaultHeaderDiscount',
        'customer_default_header_surcharge' => 'customerDefaultHeaderSurcharge',
        'customer_default_shipping_carrier_id' => 'customerDefaultShippingCarrierId',
        'customer_delivery_block' => 'customerDeliveryBlock',
        'customer_insolvent' => 'customerInsolvent',
        'customer_insured' => 'customerInsured',
        'customer_internal_note' => 'customerInternalNote',
        'customer_loss_description' => 'customerLossDescription',
        'customer_loss_reason_id' => 'customerLossReasonId',
        'customer_loss_reason_name' => 'customerLossReasonName',
        'customer_non_standard_tax_id' => 'customerNonStandardTaxId',
        'customer_number' => 'customerNumber',
        'customer_number_old' => 'customerNumberOld',
        'customer_payment_method_id' => 'customerPaymentMethodId',
        'customer_payment_method_name' => 'customerPaymentMethodName',
        'customer_sales_channel' => 'customerSalesChannel',
        'customer_sales_order_payment_type' => 'customerSalesOrderPaymentType',
        'customer_sales_probability' => 'customerSalesProbability',
        'customer_sales_stage_history' => 'customerSalesStageHistory',
        'customer_satisfaction' => 'customerSatisfaction',
        'customer_shipment_method_id' => 'customerShipmentMethodId',
        'customer_shipment_method_name' => 'customerShipmentMethodName',
        'customer_supplier_number' => 'customerSupplierNumber',
        'customer_term_of_payment_id' => 'customerTermOfPaymentId',
        'customer_term_of_payment_name' => 'customerTermOfPaymentName',
        'customer_use_customs_tariff_number' => 'customerUseCustomsTariffNumber',
        'delivery_email_addresses_id' => 'deliveryEmailAddressesId',
        'description' => 'description',
        'dunning_address_id' => 'dunningAddressId',
        'dunning_email_addresses_id' => 'dunningEmailAddressesId',
        'enable_dropshipping_in_new_supply_sources' => 'enableDropshippingInNewSupplySources',
        'eori_number' => 'eoriNumber',
        'factoring' => 'factoring',
        'fix_phone2' => 'fixPhone2',
        'fixed_responsible_user' => 'fixedResponsibleUser',
        'former_sales_partner' => 'formerSalesPartner',
        'habitual_exporter' => 'habitualExporter',
        'image_id' => 'imageId',
        'invoice_block' => 'invoiceBlock',
        'invoice_recipient_id' => 'invoiceRecipientId',
        'lead_rating_id' => 'leadRatingId',
        'lead_rating_name' => 'leadRatingName',
        'lead_source_id' => 'leadSourceId',
        'lead_source_name' => 'leadSourceName',
        'lead_status' => 'leadStatus',
        'legal_form_id' => 'legalFormId',
        'legal_form_name' => 'legalFormName',
        'mobile_phone2' => 'mobilePhone2',
        'opt_in_email' => 'optInEmail',
        'opt_in_letter' => 'optInLetter',
        'opt_in_phone' => 'optInPhone',
        'opt_in_sms' => 'optInSms',
        'parent_party_id' => 'parentPartyId',
        'party_email_addresses' => 'partyEmailAddresses',
        'party_habitual_exporter_letters_of_intent' => 'partyHabitualExporterLettersOfIntent',
        'phone_home' => 'phoneHome',
        'primary_contact_id' => 'primaryContactId',
        'public_page_expiration_date' => 'publicPageExpirationDate',
        'public_page_uuid' => 'publicPageUuid',
        'purchase_email_addresses_id' => 'purchaseEmailAddressesId',
        'purchase_via_plafond' => 'purchaseViaPlafond',
        'quotation_email_addresses_id' => 'quotationEmailAddressesId',
        'rating_id' => 'ratingId',
        'rating_name' => 'ratingName',
        'reference_number' => 'referenceNumber',
        'region_id' => 'regionId',
        'responsible_user_id' => 'responsibleUserId',
        'responsible_user_username' => 'responsibleUserUsername',
        'sales_invoice_email_addresses_id' => 'salesInvoiceEmailAddressesId',
        'sales_order_email_addresses_id' => 'salesOrderEmailAddressesId',
        'sales_partner' => 'salesPartner',
        'sales_partner_default_commission_fix' => 'salesPartnerDefaultCommissionFix',
        'sales_partner_default_commission_percentage' => 'salesPartnerDefaultCommissionPercentage',
        'sales_partner_default_commission_type' => 'salesPartnerDefaultCommissionType',
        'sector_id' => 'sectorId',
        'sector_name' => 'sectorName',
        'supplier' => 'supplier',
        'supplier_creditor_account_id' => 'supplierCreditorAccountId',
        'supplier_creditor_account_number' => 'supplierCreditorAccountNumber',
        'supplier_creditor_accounting_code_id' => 'supplierCreditorAccountingCodeId',
        'supplier_customer_number_at_supplier' => 'supplierCustomerNumberAtSupplier',
        'supplier_default_shipping_carrier_id' => 'supplierDefaultShippingCarrierId',
        'supplier_internal_note' => 'supplierInternalNote',
        'supplier_minimum_purchase_order_amount' => 'supplierMinimumPurchaseOrderAmount',
        'supplier_non_standard_tax_id' => 'supplierNonStandardTaxId',
        'supplier_number' => 'supplierNumber',
        'supplier_number_old' => 'supplierNumberOld',
        'supplier_order_block' => 'supplierOrderBlock',
        'supplier_payment_method_id' => 'supplierPaymentMethodId',
        'supplier_payment_method_name' => 'supplierPaymentMethodName',
        'supplier_shipment_method_id' => 'supplierShipmentMethodId',
        'supplier_shipment_method_name' => 'supplierShipmentMethodName',
        'supplier_term_of_payment_id' => 'supplierTermOfPaymentId',
        'supplier_term_of_payment_name' => 'supplierTermOfPaymentName',
        'tax_id' => 'taxId',
        'topics' => 'topics',
        'vat_identification_number' => 'vatIdentificationNumber',
        'x_rechnung_leitweg_id' => 'xRechnungLeitwegId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created_date' => 'setCreatedDate',
        'last_modified_date' => 'setLastModifiedDate',
        'version' => 'setVersion',
        'custom_attributes' => 'setCustomAttributes',
        'addresses' => 'setAddresses',
        'birth_date' => 'setBirthDate',
        'company' => 'setCompany',
        'company2' => 'setCompany2',
        'delivery_address_id' => 'setDeliveryAddressId',
        'email' => 'setEmail',
        'fax' => 'setFax',
        'first_name' => 'setFirstName',
        'invoice_address_id' => 'setInvoiceAddressId',
        'last_name' => 'setLastName',
        'middle_name' => 'setMiddleName',
        'mobile_phone1' => 'setMobilePhone1',
        'online_accounts' => 'setOnlineAccounts',
        'party_type' => 'setPartyType',
        'person_company' => 'setPersonCompany',
        'person_department_id' => 'setPersonDepartmentId',
        'person_role_id' => 'setPersonRoleId',
        'phone' => 'setPhone',
        'primary_address_id' => 'setPrimaryAddressId',
        'salutation' => 'setSalutation',
        'tags' => 'setTags',
        'title' => 'setTitle',
        'title_id' => 'setTitleId',
        'website' => 'setWebsite',
        'allow_purchase_order_creation' => 'setAllowPurchaseOrderCreation',
        'bank_accounts' => 'setBankAccounts',
        'commercial_language_id' => 'setCommercialLanguageId',
        'commission_block' => 'setCommissionBlock',
        'commission_sales_partners' => 'setCommissionSalesPartners',
        'company_size_id' => 'setCompanySizeId',
        'company_size_name' => 'setCompanySizeName',
        'competitor' => 'setCompetitor',
        'contacts' => 'setContacts',
        'currency_id' => 'setCurrencyId',
        'currency_name' => 'setCurrencyName',
        'customer' => 'setCustomer',
        'customer_allow_dropshipping_order_creation' => 'setCustomerAllowDropshippingOrderCreation',
        'customer_amount_insured' => 'setCustomerAmountInsured',
        'customer_annual_revenue' => 'setCustomerAnnualRevenue',
        'customer_block_notice' => 'setCustomerBlockNotice',
        'customer_blocked' => 'setCustomerBlocked',
        'customer_business_type' => 'setCustomerBusinessType',
        'customer_category_id' => 'setCustomerCategoryId',
        'customer_category_name' => 'setCustomerCategoryName',
        'customer_credit_limit' => 'setCustomerCreditLimit',
        'customer_current_sales_stage_id' => 'setCustomerCurrentSalesStageId',
        'customer_current_sales_stage_name' => 'setCustomerCurrentSalesStageName',
        'customer_debtor_account_id' => 'setCustomerDebtorAccountId',
        'customer_debtor_account_number' => 'setCustomerDebtorAccountNumber',
        'customer_debtor_accounting_code_id' => 'setCustomerDebtorAccountingCodeId',
        'customer_default_header_discount' => 'setCustomerDefaultHeaderDiscount',
        'customer_default_header_surcharge' => 'setCustomerDefaultHeaderSurcharge',
        'customer_default_shipping_carrier_id' => 'setCustomerDefaultShippingCarrierId',
        'customer_delivery_block' => 'setCustomerDeliveryBlock',
        'customer_insolvent' => 'setCustomerInsolvent',
        'customer_insured' => 'setCustomerInsured',
        'customer_internal_note' => 'setCustomerInternalNote',
        'customer_loss_description' => 'setCustomerLossDescription',
        'customer_loss_reason_id' => 'setCustomerLossReasonId',
        'customer_loss_reason_name' => 'setCustomerLossReasonName',
        'customer_non_standard_tax_id' => 'setCustomerNonStandardTaxId',
        'customer_number' => 'setCustomerNumber',
        'customer_number_old' => 'setCustomerNumberOld',
        'customer_payment_method_id' => 'setCustomerPaymentMethodId',
        'customer_payment_method_name' => 'setCustomerPaymentMethodName',
        'customer_sales_channel' => 'setCustomerSalesChannel',
        'customer_sales_order_payment_type' => 'setCustomerSalesOrderPaymentType',
        'customer_sales_probability' => 'setCustomerSalesProbability',
        'customer_sales_stage_history' => 'setCustomerSalesStageHistory',
        'customer_satisfaction' => 'setCustomerSatisfaction',
        'customer_shipment_method_id' => 'setCustomerShipmentMethodId',
        'customer_shipment_method_name' => 'setCustomerShipmentMethodName',
        'customer_supplier_number' => 'setCustomerSupplierNumber',
        'customer_term_of_payment_id' => 'setCustomerTermOfPaymentId',
        'customer_term_of_payment_name' => 'setCustomerTermOfPaymentName',
        'customer_use_customs_tariff_number' => 'setCustomerUseCustomsTariffNumber',
        'delivery_email_addresses_id' => 'setDeliveryEmailAddressesId',
        'description' => 'setDescription',
        'dunning_address_id' => 'setDunningAddressId',
        'dunning_email_addresses_id' => 'setDunningEmailAddressesId',
        'enable_dropshipping_in_new_supply_sources' => 'setEnableDropshippingInNewSupplySources',
        'eori_number' => 'setEoriNumber',
        'factoring' => 'setFactoring',
        'fix_phone2' => 'setFixPhone2',
        'fixed_responsible_user' => 'setFixedResponsibleUser',
        'former_sales_partner' => 'setFormerSalesPartner',
        'habitual_exporter' => 'setHabitualExporter',
        'image_id' => 'setImageId',
        'invoice_block' => 'setInvoiceBlock',
        'invoice_recipient_id' => 'setInvoiceRecipientId',
        'lead_rating_id' => 'setLeadRatingId',
        'lead_rating_name' => 'setLeadRatingName',
        'lead_source_id' => 'setLeadSourceId',
        'lead_source_name' => 'setLeadSourceName',
        'lead_status' => 'setLeadStatus',
        'legal_form_id' => 'setLegalFormId',
        'legal_form_name' => 'setLegalFormName',
        'mobile_phone2' => 'setMobilePhone2',
        'opt_in_email' => 'setOptInEmail',
        'opt_in_letter' => 'setOptInLetter',
        'opt_in_phone' => 'setOptInPhone',
        'opt_in_sms' => 'setOptInSms',
        'parent_party_id' => 'setParentPartyId',
        'party_email_addresses' => 'setPartyEmailAddresses',
        'party_habitual_exporter_letters_of_intent' => 'setPartyHabitualExporterLettersOfIntent',
        'phone_home' => 'setPhoneHome',
        'primary_contact_id' => 'setPrimaryContactId',
        'public_page_expiration_date' => 'setPublicPageExpirationDate',
        'public_page_uuid' => 'setPublicPageUuid',
        'purchase_email_addresses_id' => 'setPurchaseEmailAddressesId',
        'purchase_via_plafond' => 'setPurchaseViaPlafond',
        'quotation_email_addresses_id' => 'setQuotationEmailAddressesId',
        'rating_id' => 'setRatingId',
        'rating_name' => 'setRatingName',
        'reference_number' => 'setReferenceNumber',
        'region_id' => 'setRegionId',
        'responsible_user_id' => 'setResponsibleUserId',
        'responsible_user_username' => 'setResponsibleUserUsername',
        'sales_invoice_email_addresses_id' => 'setSalesInvoiceEmailAddressesId',
        'sales_order_email_addresses_id' => 'setSalesOrderEmailAddressesId',
        'sales_partner' => 'setSalesPartner',
        'sales_partner_default_commission_fix' => 'setSalesPartnerDefaultCommissionFix',
        'sales_partner_default_commission_percentage' => 'setSalesPartnerDefaultCommissionPercentage',
        'sales_partner_default_commission_type' => 'setSalesPartnerDefaultCommissionType',
        'sector_id' => 'setSectorId',
        'sector_name' => 'setSectorName',
        'supplier' => 'setSupplier',
        'supplier_creditor_account_id' => 'setSupplierCreditorAccountId',
        'supplier_creditor_account_number' => 'setSupplierCreditorAccountNumber',
        'supplier_creditor_accounting_code_id' => 'setSupplierCreditorAccountingCodeId',
        'supplier_customer_number_at_supplier' => 'setSupplierCustomerNumberAtSupplier',
        'supplier_default_shipping_carrier_id' => 'setSupplierDefaultShippingCarrierId',
        'supplier_internal_note' => 'setSupplierInternalNote',
        'supplier_minimum_purchase_order_amount' => 'setSupplierMinimumPurchaseOrderAmount',
        'supplier_non_standard_tax_id' => 'setSupplierNonStandardTaxId',
        'supplier_number' => 'setSupplierNumber',
        'supplier_number_old' => 'setSupplierNumberOld',
        'supplier_order_block' => 'setSupplierOrderBlock',
        'supplier_payment_method_id' => 'setSupplierPaymentMethodId',
        'supplier_payment_method_name' => 'setSupplierPaymentMethodName',
        'supplier_shipment_method_id' => 'setSupplierShipmentMethodId',
        'supplier_shipment_method_name' => 'setSupplierShipmentMethodName',
        'supplier_term_of_payment_id' => 'setSupplierTermOfPaymentId',
        'supplier_term_of_payment_name' => 'setSupplierTermOfPaymentName',
        'tax_id' => 'setTaxId',
        'topics' => 'setTopics',
        'vat_identification_number' => 'setVatIdentificationNumber',
        'x_rechnung_leitweg_id' => 'setXRechnungLeitwegId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created_date' => 'getCreatedDate',
        'last_modified_date' => 'getLastModifiedDate',
        'version' => 'getVersion',
        'custom_attributes' => 'getCustomAttributes',
        'addresses' => 'getAddresses',
        'birth_date' => 'getBirthDate',
        'company' => 'getCompany',
        'company2' => 'getCompany2',
        'delivery_address_id' => 'getDeliveryAddressId',
        'email' => 'getEmail',
        'fax' => 'getFax',
        'first_name' => 'getFirstName',
        'invoice_address_id' => 'getInvoiceAddressId',
        'last_name' => 'getLastName',
        'middle_name' => 'getMiddleName',
        'mobile_phone1' => 'getMobilePhone1',
        'online_accounts' => 'getOnlineAccounts',
        'party_type' => 'getPartyType',
        'person_company' => 'getPersonCompany',
        'person_department_id' => 'getPersonDepartmentId',
        'person_role_id' => 'getPersonRoleId',
        'phone' => 'getPhone',
        'primary_address_id' => 'getPrimaryAddressId',
        'salutation' => 'getSalutation',
        'tags' => 'getTags',
        'title' => 'getTitle',
        'title_id' => 'getTitleId',
        'website' => 'getWebsite',
        'allow_purchase_order_creation' => 'getAllowPurchaseOrderCreation',
        'bank_accounts' => 'getBankAccounts',
        'commercial_language_id' => 'getCommercialLanguageId',
        'commission_block' => 'getCommissionBlock',
        'commission_sales_partners' => 'getCommissionSalesPartners',
        'company_size_id' => 'getCompanySizeId',
        'company_size_name' => 'getCompanySizeName',
        'competitor' => 'getCompetitor',
        'contacts' => 'getContacts',
        'currency_id' => 'getCurrencyId',
        'currency_name' => 'getCurrencyName',
        'customer' => 'getCustomer',
        'customer_allow_dropshipping_order_creation' => 'getCustomerAllowDropshippingOrderCreation',
        'customer_amount_insured' => 'getCustomerAmountInsured',
        'customer_annual_revenue' => 'getCustomerAnnualRevenue',
        'customer_block_notice' => 'getCustomerBlockNotice',
        'customer_blocked' => 'getCustomerBlocked',
        'customer_business_type' => 'getCustomerBusinessType',
        'customer_category_id' => 'getCustomerCategoryId',
        'customer_category_name' => 'getCustomerCategoryName',
        'customer_credit_limit' => 'getCustomerCreditLimit',
        'customer_current_sales_stage_id' => 'getCustomerCurrentSalesStageId',
        'customer_current_sales_stage_name' => 'getCustomerCurrentSalesStageName',
        'customer_debtor_account_id' => 'getCustomerDebtorAccountId',
        'customer_debtor_account_number' => 'getCustomerDebtorAccountNumber',
        'customer_debtor_accounting_code_id' => 'getCustomerDebtorAccountingCodeId',
        'customer_default_header_discount' => 'getCustomerDefaultHeaderDiscount',
        'customer_default_header_surcharge' => 'getCustomerDefaultHeaderSurcharge',
        'customer_default_shipping_carrier_id' => 'getCustomerDefaultShippingCarrierId',
        'customer_delivery_block' => 'getCustomerDeliveryBlock',
        'customer_insolvent' => 'getCustomerInsolvent',
        'customer_insured' => 'getCustomerInsured',
        'customer_internal_note' => 'getCustomerInternalNote',
        'customer_loss_description' => 'getCustomerLossDescription',
        'customer_loss_reason_id' => 'getCustomerLossReasonId',
        'customer_loss_reason_name' => 'getCustomerLossReasonName',
        'customer_non_standard_tax_id' => 'getCustomerNonStandardTaxId',
        'customer_number' => 'getCustomerNumber',
        'customer_number_old' => 'getCustomerNumberOld',
        'customer_payment_method_id' => 'getCustomerPaymentMethodId',
        'customer_payment_method_name' => 'getCustomerPaymentMethodName',
        'customer_sales_channel' => 'getCustomerSalesChannel',
        'customer_sales_order_payment_type' => 'getCustomerSalesOrderPaymentType',
        'customer_sales_probability' => 'getCustomerSalesProbability',
        'customer_sales_stage_history' => 'getCustomerSalesStageHistory',
        'customer_satisfaction' => 'getCustomerSatisfaction',
        'customer_shipment_method_id' => 'getCustomerShipmentMethodId',
        'customer_shipment_method_name' => 'getCustomerShipmentMethodName',
        'customer_supplier_number' => 'getCustomerSupplierNumber',
        'customer_term_of_payment_id' => 'getCustomerTermOfPaymentId',
        'customer_term_of_payment_name' => 'getCustomerTermOfPaymentName',
        'customer_use_customs_tariff_number' => 'getCustomerUseCustomsTariffNumber',
        'delivery_email_addresses_id' => 'getDeliveryEmailAddressesId',
        'description' => 'getDescription',
        'dunning_address_id' => 'getDunningAddressId',
        'dunning_email_addresses_id' => 'getDunningEmailAddressesId',
        'enable_dropshipping_in_new_supply_sources' => 'getEnableDropshippingInNewSupplySources',
        'eori_number' => 'getEoriNumber',
        'factoring' => 'getFactoring',
        'fix_phone2' => 'getFixPhone2',
        'fixed_responsible_user' => 'getFixedResponsibleUser',
        'former_sales_partner' => 'getFormerSalesPartner',
        'habitual_exporter' => 'getHabitualExporter',
        'image_id' => 'getImageId',
        'invoice_block' => 'getInvoiceBlock',
        'invoice_recipient_id' => 'getInvoiceRecipientId',
        'lead_rating_id' => 'getLeadRatingId',
        'lead_rating_name' => 'getLeadRatingName',
        'lead_source_id' => 'getLeadSourceId',
        'lead_source_name' => 'getLeadSourceName',
        'lead_status' => 'getLeadStatus',
        'legal_form_id' => 'getLegalFormId',
        'legal_form_name' => 'getLegalFormName',
        'mobile_phone2' => 'getMobilePhone2',
        'opt_in_email' => 'getOptInEmail',
        'opt_in_letter' => 'getOptInLetter',
        'opt_in_phone' => 'getOptInPhone',
        'opt_in_sms' => 'getOptInSms',
        'parent_party_id' => 'getParentPartyId',
        'party_email_addresses' => 'getPartyEmailAddresses',
        'party_habitual_exporter_letters_of_intent' => 'getPartyHabitualExporterLettersOfIntent',
        'phone_home' => 'getPhoneHome',
        'primary_contact_id' => 'getPrimaryContactId',
        'public_page_expiration_date' => 'getPublicPageExpirationDate',
        'public_page_uuid' => 'getPublicPageUuid',
        'purchase_email_addresses_id' => 'getPurchaseEmailAddressesId',
        'purchase_via_plafond' => 'getPurchaseViaPlafond',
        'quotation_email_addresses_id' => 'getQuotationEmailAddressesId',
        'rating_id' => 'getRatingId',
        'rating_name' => 'getRatingName',
        'reference_number' => 'getReferenceNumber',
        'region_id' => 'getRegionId',
        'responsible_user_id' => 'getResponsibleUserId',
        'responsible_user_username' => 'getResponsibleUserUsername',
        'sales_invoice_email_addresses_id' => 'getSalesInvoiceEmailAddressesId',
        'sales_order_email_addresses_id' => 'getSalesOrderEmailAddressesId',
        'sales_partner' => 'getSalesPartner',
        'sales_partner_default_commission_fix' => 'getSalesPartnerDefaultCommissionFix',
        'sales_partner_default_commission_percentage' => 'getSalesPartnerDefaultCommissionPercentage',
        'sales_partner_default_commission_type' => 'getSalesPartnerDefaultCommissionType',
        'sector_id' => 'getSectorId',
        'sector_name' => 'getSectorName',
        'supplier' => 'getSupplier',
        'supplier_creditor_account_id' => 'getSupplierCreditorAccountId',
        'supplier_creditor_account_number' => 'getSupplierCreditorAccountNumber',
        'supplier_creditor_accounting_code_id' => 'getSupplierCreditorAccountingCodeId',
        'supplier_customer_number_at_supplier' => 'getSupplierCustomerNumberAtSupplier',
        'supplier_default_shipping_carrier_id' => 'getSupplierDefaultShippingCarrierId',
        'supplier_internal_note' => 'getSupplierInternalNote',
        'supplier_minimum_purchase_order_amount' => 'getSupplierMinimumPurchaseOrderAmount',
        'supplier_non_standard_tax_id' => 'getSupplierNonStandardTaxId',
        'supplier_number' => 'getSupplierNumber',
        'supplier_number_old' => 'getSupplierNumberOld',
        'supplier_order_block' => 'getSupplierOrderBlock',
        'supplier_payment_method_id' => 'getSupplierPaymentMethodId',
        'supplier_payment_method_name' => 'getSupplierPaymentMethodName',
        'supplier_shipment_method_id' => 'getSupplierShipmentMethodId',
        'supplier_shipment_method_name' => 'getSupplierShipmentMethodName',
        'supplier_term_of_payment_id' => 'getSupplierTermOfPaymentId',
        'supplier_term_of_payment_name' => 'getSupplierTermOfPaymentName',
        'tax_id' => 'getTaxId',
        'topics' => 'getTopics',
        'vat_identification_number' => 'getVatIdentificationNumber',
        'x_rechnung_leitweg_id' => 'getXRechnungLeitwegId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('created_date', $data ?? [], null);
        $this->setIfExists('last_modified_date', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('custom_attributes', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('birth_date', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('company2', $data ?? [], null);
        $this->setIfExists('delivery_address_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fax', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('invoice_address_id', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('mobile_phone1', $data ?? [], null);
        $this->setIfExists('online_accounts', $data ?? [], null);
        $this->setIfExists('party_type', $data ?? [], null);
        $this->setIfExists('person_company', $data ?? [], null);
        $this->setIfExists('person_department_id', $data ?? [], null);
        $this->setIfExists('person_role_id', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('primary_address_id', $data ?? [], null);
        $this->setIfExists('salutation', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('title_id', $data ?? [], null);
        $this->setIfExists('website', $data ?? [], null);
        $this->setIfExists('allow_purchase_order_creation', $data ?? [], null);
        $this->setIfExists('bank_accounts', $data ?? [], null);
        $this->setIfExists('commercial_language_id', $data ?? [], null);
        $this->setIfExists('commission_block', $data ?? [], null);
        $this->setIfExists('commission_sales_partners', $data ?? [], null);
        $this->setIfExists('company_size_id', $data ?? [], null);
        $this->setIfExists('company_size_name', $data ?? [], null);
        $this->setIfExists('competitor', $data ?? [], null);
        $this->setIfExists('contacts', $data ?? [], null);
        $this->setIfExists('currency_id', $data ?? [], null);
        $this->setIfExists('currency_name', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('customer_allow_dropshipping_order_creation', $data ?? [], null);
        $this->setIfExists('customer_amount_insured', $data ?? [], null);
        $this->setIfExists('customer_annual_revenue', $data ?? [], null);
        $this->setIfExists('customer_block_notice', $data ?? [], null);
        $this->setIfExists('customer_blocked', $data ?? [], null);
        $this->setIfExists('customer_business_type', $data ?? [], null);
        $this->setIfExists('customer_category_id', $data ?? [], null);
        $this->setIfExists('customer_category_name', $data ?? [], null);
        $this->setIfExists('customer_credit_limit', $data ?? [], null);
        $this->setIfExists('customer_current_sales_stage_id', $data ?? [], null);
        $this->setIfExists('customer_current_sales_stage_name', $data ?? [], null);
        $this->setIfExists('customer_debtor_account_id', $data ?? [], null);
        $this->setIfExists('customer_debtor_account_number', $data ?? [], null);
        $this->setIfExists('customer_debtor_accounting_code_id', $data ?? [], null);
        $this->setIfExists('customer_default_header_discount', $data ?? [], null);
        $this->setIfExists('customer_default_header_surcharge', $data ?? [], null);
        $this->setIfExists('customer_default_shipping_carrier_id', $data ?? [], null);
        $this->setIfExists('customer_delivery_block', $data ?? [], null);
        $this->setIfExists('customer_insolvent', $data ?? [], null);
        $this->setIfExists('customer_insured', $data ?? [], null);
        $this->setIfExists('customer_internal_note', $data ?? [], null);
        $this->setIfExists('customer_loss_description', $data ?? [], null);
        $this->setIfExists('customer_loss_reason_id', $data ?? [], null);
        $this->setIfExists('customer_loss_reason_name', $data ?? [], null);
        $this->setIfExists('customer_non_standard_tax_id', $data ?? [], null);
        $this->setIfExists('customer_number', $data ?? [], null);
        $this->setIfExists('customer_number_old', $data ?? [], null);
        $this->setIfExists('customer_payment_method_id', $data ?? [], null);
        $this->setIfExists('customer_payment_method_name', $data ?? [], null);
        $this->setIfExists('customer_sales_channel', $data ?? [], null);
        $this->setIfExists('customer_sales_order_payment_type', $data ?? [], null);
        $this->setIfExists('customer_sales_probability', $data ?? [], null);
        $this->setIfExists('customer_sales_stage_history', $data ?? [], null);
        $this->setIfExists('customer_satisfaction', $data ?? [], null);
        $this->setIfExists('customer_shipment_method_id', $data ?? [], null);
        $this->setIfExists('customer_shipment_method_name', $data ?? [], null);
        $this->setIfExists('customer_supplier_number', $data ?? [], null);
        $this->setIfExists('customer_term_of_payment_id', $data ?? [], null);
        $this->setIfExists('customer_term_of_payment_name', $data ?? [], null);
        $this->setIfExists('customer_use_customs_tariff_number', $data ?? [], null);
        $this->setIfExists('delivery_email_addresses_id', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('dunning_address_id', $data ?? [], null);
        $this->setIfExists('dunning_email_addresses_id', $data ?? [], null);
        $this->setIfExists('enable_dropshipping_in_new_supply_sources', $data ?? [], null);
        $this->setIfExists('eori_number', $data ?? [], null);
        $this->setIfExists('factoring', $data ?? [], null);
        $this->setIfExists('fix_phone2', $data ?? [], null);
        $this->setIfExists('fixed_responsible_user', $data ?? [], null);
        $this->setIfExists('former_sales_partner', $data ?? [], null);
        $this->setIfExists('habitual_exporter', $data ?? [], null);
        $this->setIfExists('image_id', $data ?? [], null);
        $this->setIfExists('invoice_block', $data ?? [], null);
        $this->setIfExists('invoice_recipient_id', $data ?? [], null);
        $this->setIfExists('lead_rating_id', $data ?? [], null);
        $this->setIfExists('lead_rating_name', $data ?? [], null);
        $this->setIfExists('lead_source_id', $data ?? [], null);
        $this->setIfExists('lead_source_name', $data ?? [], null);
        $this->setIfExists('lead_status', $data ?? [], null);
        $this->setIfExists('legal_form_id', $data ?? [], null);
        $this->setIfExists('legal_form_name', $data ?? [], null);
        $this->setIfExists('mobile_phone2', $data ?? [], null);
        $this->setIfExists('opt_in_email', $data ?? [], null);
        $this->setIfExists('opt_in_letter', $data ?? [], null);
        $this->setIfExists('opt_in_phone', $data ?? [], null);
        $this->setIfExists('opt_in_sms', $data ?? [], null);
        $this->setIfExists('parent_party_id', $data ?? [], null);
        $this->setIfExists('party_email_addresses', $data ?? [], null);
        $this->setIfExists('party_habitual_exporter_letters_of_intent', $data ?? [], null);
        $this->setIfExists('phone_home', $data ?? [], null);
        $this->setIfExists('primary_contact_id', $data ?? [], null);
        $this->setIfExists('public_page_expiration_date', $data ?? [], null);
        $this->setIfExists('public_page_uuid', $data ?? [], null);
        $this->setIfExists('purchase_email_addresses_id', $data ?? [], null);
        $this->setIfExists('purchase_via_plafond', $data ?? [], null);
        $this->setIfExists('quotation_email_addresses_id', $data ?? [], null);
        $this->setIfExists('rating_id', $data ?? [], null);
        $this->setIfExists('rating_name', $data ?? [], null);
        $this->setIfExists('reference_number', $data ?? [], null);
        $this->setIfExists('region_id', $data ?? [], null);
        $this->setIfExists('responsible_user_id', $data ?? [], null);
        $this->setIfExists('responsible_user_username', $data ?? [], null);
        $this->setIfExists('sales_invoice_email_addresses_id', $data ?? [], null);
        $this->setIfExists('sales_order_email_addresses_id', $data ?? [], null);
        $this->setIfExists('sales_partner', $data ?? [], null);
        $this->setIfExists('sales_partner_default_commission_fix', $data ?? [], null);
        $this->setIfExists('sales_partner_default_commission_percentage', $data ?? [], null);
        $this->setIfExists('sales_partner_default_commission_type', $data ?? [], null);
        $this->setIfExists('sector_id', $data ?? [], null);
        $this->setIfExists('sector_name', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('supplier_creditor_account_id', $data ?? [], null);
        $this->setIfExists('supplier_creditor_account_number', $data ?? [], null);
        $this->setIfExists('supplier_creditor_accounting_code_id', $data ?? [], null);
        $this->setIfExists('supplier_customer_number_at_supplier', $data ?? [], null);
        $this->setIfExists('supplier_default_shipping_carrier_id', $data ?? [], null);
        $this->setIfExists('supplier_internal_note', $data ?? [], null);
        $this->setIfExists('supplier_minimum_purchase_order_amount', $data ?? [], null);
        $this->setIfExists('supplier_non_standard_tax_id', $data ?? [], null);
        $this->setIfExists('supplier_number', $data ?? [], null);
        $this->setIfExists('supplier_number_old', $data ?? [], null);
        $this->setIfExists('supplier_order_block', $data ?? [], null);
        $this->setIfExists('supplier_payment_method_id', $data ?? [], null);
        $this->setIfExists('supplier_payment_method_name', $data ?? [], null);
        $this->setIfExists('supplier_shipment_method_id', $data ?? [], null);
        $this->setIfExists('supplier_shipment_method_name', $data ?? [], null);
        $this->setIfExists('supplier_term_of_payment_id', $data ?? [], null);
        $this->setIfExists('supplier_term_of_payment_name', $data ?? [], null);
        $this->setIfExists('tax_id', $data ?? [], null);
        $this->setIfExists('topics', $data ?? [], null);
        $this->setIfExists('vat_identification_number', $data ?? [], null);
        $this->setIfExists('x_rechnung_leitweg_id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['customer_amount_insured']) && !preg_match("/^([0-9]{1,14})([.][0-9]{1,4})?$/", $this->container['customer_amount_insured'])) {
            $invalidProperties[] = "invalid value for 'customer_amount_insured', must be conform to the pattern /^([0-9]{1,14})([.][0-9]{1,4})?$/.";
        }

        if (!is_null($this->container['customer_annual_revenue']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['customer_annual_revenue'])) {
            $invalidProperties[] = "invalid value for 'customer_annual_revenue', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['customer_credit_limit']) && !preg_match("/^([0-9]{1,14})([.][0-9]{1,4})?$/", $this->container['customer_credit_limit'])) {
            $invalidProperties[] = "invalid value for 'customer_credit_limit', must be conform to the pattern /^([0-9]{1,14})([.][0-9]{1,4})?$/.";
        }

        if (!is_null($this->container['customer_default_header_discount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['customer_default_header_discount'])) {
            $invalidProperties[] = "invalid value for 'customer_default_header_discount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['customer_default_header_surcharge']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['customer_default_header_surcharge'])) {
            $invalidProperties[] = "invalid value for 'customer_default_header_surcharge', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['sales_partner_default_commission_fix']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['sales_partner_default_commission_fix'])) {
            $invalidProperties[] = "invalid value for 'sales_partner_default_commission_fix', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['sales_partner_default_commission_percentage']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['sales_partner_default_commission_percentage'])) {
            $invalidProperties[] = "invalid value for 'sales_partner_default_commission_percentage', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        if (!is_null($this->container['supplier_minimum_purchase_order_amount']) && !preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", $this->container['supplier_minimum_purchase_order_amount'])) {
            $invalidProperties[] = "invalid value for 'supplier_minimum_purchase_order_amount', must be conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return int|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param int|null $created_date created_date
     *
     * @return self
     */
    public function setCreatedDate($created_date)
    {
        if (is_null($created_date)) {
            throw new \InvalidArgumentException('non-nullable created_date cannot be null');
        }
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_modified_date
     *
     * @return int|null
     */
    public function getLastModifiedDate()
    {
        return $this->container['last_modified_date'];
    }

    /**
     * Sets last_modified_date
     *
     * @param int|null $last_modified_date last_modified_date
     *
     * @return self
     */
    public function setLastModifiedDate($last_modified_date)
    {
        if (is_null($last_modified_date)) {
            throw new \InvalidArgumentException('non-nullable last_modified_date cannot be null');
        }
        $this->container['last_modified_date'] = $last_modified_date;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets custom_attributes
     *
     * @return \kruegge82\weclapp\Model\CustomAttribute[]|null
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     *
     * @param \kruegge82\weclapp\Model\CustomAttribute[]|null $custom_attributes custom_attributes
     *
     * @return self
     */
    public function setCustomAttributes($custom_attributes)
    {
        if (is_null($custom_attributes)) {
            throw new \InvalidArgumentException('non-nullable custom_attributes cannot be null');
        }
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \kruegge82\weclapp\Model\Address[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \kruegge82\weclapp\Model\Address[]|null $addresses addresses
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            throw new \InvalidArgumentException('non-nullable addresses cannot be null');
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets birth_date
     *
     * @return int|null
     */
    public function getBirthDate()
    {
        return $this->container['birth_date'];
    }

    /**
     * Sets birth_date
     *
     * @param int|null $birth_date birth_date
     *
     * @return self
     */
    public function setBirthDate($birth_date)
    {
        if (is_null($birth_date)) {
            throw new \InvalidArgumentException('non-nullable birth_date cannot be null');
        }
        $this->container['birth_date'] = $birth_date;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company company
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company2
     *
     * @return string|null
     */
    public function getCompany2()
    {
        return $this->container['company2'];
    }

    /**
     * Sets company2
     *
     * @param string|null $company2 company2
     *
     * @return self
     */
    public function setCompany2($company2)
    {
        if (is_null($company2)) {
            throw new \InvalidArgumentException('non-nullable company2 cannot be null');
        }
        $this->container['company2'] = $company2;

        return $this;
    }

    /**
     * Gets delivery_address_id
     *
     * @return string|null
     */
    public function getDeliveryAddressId()
    {
        return $this->container['delivery_address_id'];
    }

    /**
     * Sets delivery_address_id
     *
     * @param string|null $delivery_address_id delivery_address_id
     *
     * @return self
     */
    public function setDeliveryAddressId($delivery_address_id)
    {
        if (is_null($delivery_address_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_address_id cannot be null');
        }
        $this->container['delivery_address_id'] = $delivery_address_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string|null
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string|null $fax fax
     *
     * @return self
     */
    public function setFax($fax)
    {
        if (is_null($fax)) {
            throw new \InvalidArgumentException('non-nullable fax cannot be null');
        }
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets invoice_address_id
     *
     * @return string|null
     */
    public function getInvoiceAddressId()
    {
        return $this->container['invoice_address_id'];
    }

    /**
     * Sets invoice_address_id
     *
     * @param string|null $invoice_address_id invoice_address_id
     *
     * @return self
     */
    public function setInvoiceAddressId($invoice_address_id)
    {
        if (is_null($invoice_address_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_address_id cannot be null');
        }
        $this->container['invoice_address_id'] = $invoice_address_id;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name middle_name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets mobile_phone1
     *
     * @return string|null
     */
    public function getMobilePhone1()
    {
        return $this->container['mobile_phone1'];
    }

    /**
     * Sets mobile_phone1
     *
     * @param string|null $mobile_phone1 mobile_phone1
     *
     * @return self
     */
    public function setMobilePhone1($mobile_phone1)
    {
        if (is_null($mobile_phone1)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone1 cannot be null');
        }
        $this->container['mobile_phone1'] = $mobile_phone1;

        return $this;
    }

    /**
     * Gets online_accounts
     *
     * @return \kruegge82\weclapp\Model\OnlineAccount[]|null
     */
    public function getOnlineAccounts()
    {
        return $this->container['online_accounts'];
    }

    /**
     * Sets online_accounts
     *
     * @param \kruegge82\weclapp\Model\OnlineAccount[]|null $online_accounts online_accounts
     *
     * @return self
     */
    public function setOnlineAccounts($online_accounts)
    {
        if (is_null($online_accounts)) {
            throw new \InvalidArgumentException('non-nullable online_accounts cannot be null');
        }
        $this->container['online_accounts'] = $online_accounts;

        return $this;
    }

    /**
     * Gets party_type
     *
     * @return \kruegge82\weclapp\Model\PartyType|null
     */
    public function getPartyType()
    {
        return $this->container['party_type'];
    }

    /**
     * Sets party_type
     *
     * @param \kruegge82\weclapp\Model\PartyType|null $party_type party_type
     *
     * @return self
     */
    public function setPartyType($party_type)
    {
        if (is_null($party_type)) {
            throw new \InvalidArgumentException('non-nullable party_type cannot be null');
        }
        $this->container['party_type'] = $party_type;

        return $this;
    }

    /**
     * Gets person_company
     *
     * @return string|null
     */
    public function getPersonCompany()
    {
        return $this->container['person_company'];
    }

    /**
     * Sets person_company
     *
     * @param string|null $person_company person_company
     *
     * @return self
     */
    public function setPersonCompany($person_company)
    {
        if (is_null($person_company)) {
            throw new \InvalidArgumentException('non-nullable person_company cannot be null');
        }
        $this->container['person_company'] = $person_company;

        return $this;
    }

    /**
     * Gets person_department_id
     *
     * @return string|null
     */
    public function getPersonDepartmentId()
    {
        return $this->container['person_department_id'];
    }

    /**
     * Sets person_department_id
     *
     * @param string|null $person_department_id person_department_id
     *
     * @return self
     */
    public function setPersonDepartmentId($person_department_id)
    {
        if (is_null($person_department_id)) {
            throw new \InvalidArgumentException('non-nullable person_department_id cannot be null');
        }
        $this->container['person_department_id'] = $person_department_id;

        return $this;
    }

    /**
     * Gets person_role_id
     *
     * @return string|null
     */
    public function getPersonRoleId()
    {
        return $this->container['person_role_id'];
    }

    /**
     * Sets person_role_id
     *
     * @param string|null $person_role_id person_role_id
     *
     * @return self
     */
    public function setPersonRoleId($person_role_id)
    {
        if (is_null($person_role_id)) {
            throw new \InvalidArgumentException('non-nullable person_role_id cannot be null');
        }
        $this->container['person_role_id'] = $person_role_id;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone phone
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets primary_address_id
     *
     * @return string|null
     */
    public function getPrimaryAddressId()
    {
        return $this->container['primary_address_id'];
    }

    /**
     * Sets primary_address_id
     *
     * @param string|null $primary_address_id primary_address_id
     *
     * @return self
     */
    public function setPrimaryAddressId($primary_address_id)
    {
        if (is_null($primary_address_id)) {
            throw new \InvalidArgumentException('non-nullable primary_address_id cannot be null');
        }
        $this->container['primary_address_id'] = $primary_address_id;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \kruegge82\weclapp\Model\Salutation|null
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \kruegge82\weclapp\Model\Salutation|null $salutation salutation
     *
     * @return self
     */
    public function setSalutation($salutation)
    {
        if (is_null($salutation)) {
            throw new \InvalidArgumentException('non-nullable salutation cannot be null');
        }
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     * @deprecated
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     * @deprecated
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets title_id
     *
     * @return string|null
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param string|null $title_id title_id
     *
     * @return self
     */
    public function setTitleId($title_id)
    {
        if (is_null($title_id)) {
            throw new \InvalidArgumentException('non-nullable title_id cannot be null');
        }
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets website
     *
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     *
     * @param string|null $website website
     *
     * @return self
     */
    public function setWebsite($website)
    {
        if (is_null($website)) {
            throw new \InvalidArgumentException('non-nullable website cannot be null');
        }
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets allow_purchase_order_creation
     *
     * @return bool|null
     * @deprecated
     */
    public function getAllowPurchaseOrderCreation()
    {
        return $this->container['allow_purchase_order_creation'];
    }

    /**
     * Sets allow_purchase_order_creation
     *
     * @param bool|null $allow_purchase_order_creation allow_purchase_order_creation
     *
     * @return self
     * @deprecated
     */
    public function setAllowPurchaseOrderCreation($allow_purchase_order_creation)
    {
        if (is_null($allow_purchase_order_creation)) {
            throw new \InvalidArgumentException('non-nullable allow_purchase_order_creation cannot be null');
        }
        $this->container['allow_purchase_order_creation'] = $allow_purchase_order_creation;

        return $this;
    }

    /**
     * Gets bank_accounts
     *
     * @return \kruegge82\weclapp\Model\PartyBankAccount[]|null
     */
    public function getBankAccounts()
    {
        return $this->container['bank_accounts'];
    }

    /**
     * Sets bank_accounts
     *
     * @param \kruegge82\weclapp\Model\PartyBankAccount[]|null $bank_accounts bank_accounts
     *
     * @return self
     */
    public function setBankAccounts($bank_accounts)
    {
        if (is_null($bank_accounts)) {
            throw new \InvalidArgumentException('non-nullable bank_accounts cannot be null');
        }
        $this->container['bank_accounts'] = $bank_accounts;

        return $this;
    }

    /**
     * Gets commercial_language_id
     *
     * @return string|null
     */
    public function getCommercialLanguageId()
    {
        return $this->container['commercial_language_id'];
    }

    /**
     * Sets commercial_language_id
     *
     * @param string|null $commercial_language_id commercial_language_id
     *
     * @return self
     */
    public function setCommercialLanguageId($commercial_language_id)
    {
        if (is_null($commercial_language_id)) {
            throw new \InvalidArgumentException('non-nullable commercial_language_id cannot be null');
        }
        $this->container['commercial_language_id'] = $commercial_language_id;

        return $this;
    }

    /**
     * Gets commission_block
     *
     * @return bool|null
     */
    public function getCommissionBlock()
    {
        return $this->container['commission_block'];
    }

    /**
     * Sets commission_block
     *
     * @param bool|null $commission_block commission_block
     *
     * @return self
     */
    public function setCommissionBlock($commission_block)
    {
        if (is_null($commission_block)) {
            throw new \InvalidArgumentException('non-nullable commission_block cannot be null');
        }
        $this->container['commission_block'] = $commission_block;

        return $this;
    }

    /**
     * Gets commission_sales_partners
     *
     * @return \kruegge82\weclapp\Model\CommissionSalesPartner[]|null
     */
    public function getCommissionSalesPartners()
    {
        return $this->container['commission_sales_partners'];
    }

    /**
     * Sets commission_sales_partners
     *
     * @param \kruegge82\weclapp\Model\CommissionSalesPartner[]|null $commission_sales_partners commission_sales_partners
     *
     * @return self
     */
    public function setCommissionSalesPartners($commission_sales_partners)
    {
        if (is_null($commission_sales_partners)) {
            throw new \InvalidArgumentException('non-nullable commission_sales_partners cannot be null');
        }
        $this->container['commission_sales_partners'] = $commission_sales_partners;

        return $this;
    }

    /**
     * Gets company_size_id
     *
     * @return string|null
     */
    public function getCompanySizeId()
    {
        return $this->container['company_size_id'];
    }

    /**
     * Sets company_size_id
     *
     * @param string|null $company_size_id company_size_id
     *
     * @return self
     */
    public function setCompanySizeId($company_size_id)
    {
        if (is_null($company_size_id)) {
            throw new \InvalidArgumentException('non-nullable company_size_id cannot be null');
        }
        $this->container['company_size_id'] = $company_size_id;

        return $this;
    }

    /**
     * Gets company_size_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCompanySizeName()
    {
        return $this->container['company_size_name'];
    }

    /**
     * Sets company_size_name
     *
     * @param string|null $company_size_name company_size_name
     *
     * @return self
     * @deprecated
     */
    public function setCompanySizeName($company_size_name)
    {
        if (is_null($company_size_name)) {
            throw new \InvalidArgumentException('non-nullable company_size_name cannot be null');
        }
        $this->container['company_size_name'] = $company_size_name;

        return $this;
    }

    /**
     * Gets competitor
     *
     * @return bool|null
     */
    public function getCompetitor()
    {
        return $this->container['competitor'];
    }

    /**
     * Sets competitor
     *
     * @param bool|null $competitor competitor
     *
     * @return self
     */
    public function setCompetitor($competitor)
    {
        if (is_null($competitor)) {
            throw new \InvalidArgumentException('non-nullable competitor cannot be null');
        }
        $this->container['competitor'] = $competitor;

        return $this;
    }

    /**
     * Gets contacts
     *
     * @return \kruegge82\weclapp\Model\OnlyId[]|null
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     *
     * @param \kruegge82\weclapp\Model\OnlyId[]|null $contacts contacts
     *
     * @return self
     */
    public function setContacts($contacts)
    {
        if (is_null($contacts)) {
            throw new \InvalidArgumentException('non-nullable contacts cannot be null');
        }
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets currency_id
     *
     * @return string|null
     */
    public function getCurrencyId()
    {
        return $this->container['currency_id'];
    }

    /**
     * Sets currency_id
     *
     * @param string|null $currency_id currency_id
     *
     * @return self
     */
    public function setCurrencyId($currency_id)
    {
        if (is_null($currency_id)) {
            throw new \InvalidArgumentException('non-nullable currency_id cannot be null');
        }
        $this->container['currency_id'] = $currency_id;

        return $this;
    }

    /**
     * Gets currency_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCurrencyName()
    {
        return $this->container['currency_name'];
    }

    /**
     * Sets currency_name
     *
     * @param string|null $currency_name currency_name
     *
     * @return self
     * @deprecated
     */
    public function setCurrencyName($currency_name)
    {
        if (is_null($currency_name)) {
            throw new \InvalidArgumentException('non-nullable currency_name cannot be null');
        }
        $this->container['currency_name'] = $currency_name;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return bool|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param bool|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customer_allow_dropshipping_order_creation
     *
     * @return bool|null
     */
    public function getCustomerAllowDropshippingOrderCreation()
    {
        return $this->container['customer_allow_dropshipping_order_creation'];
    }

    /**
     * Sets customer_allow_dropshipping_order_creation
     *
     * @param bool|null $customer_allow_dropshipping_order_creation customer_allow_dropshipping_order_creation
     *
     * @return self
     */
    public function setCustomerAllowDropshippingOrderCreation($customer_allow_dropshipping_order_creation)
    {
        if (is_null($customer_allow_dropshipping_order_creation)) {
            throw new \InvalidArgumentException('non-nullable customer_allow_dropshipping_order_creation cannot be null');
        }
        $this->container['customer_allow_dropshipping_order_creation'] = $customer_allow_dropshipping_order_creation;

        return $this;
    }

    /**
     * Gets customer_amount_insured
     *
     * @return float|null
     */
    public function getCustomerAmountInsured()
    {
        return $this->container['customer_amount_insured'];
    }

    /**
     * Sets customer_amount_insured
     *
     * @param float|null $customer_amount_insured customer_amount_insured
     *
     * @return self
     */
    public function setCustomerAmountInsured($customer_amount_insured)
    {
        if (is_null($customer_amount_insured)) {
            throw new \InvalidArgumentException('non-nullable customer_amount_insured cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,14})([.][0-9]{1,4})?$/", ObjectSerializer::toString($customer_amount_insured)))) {
            throw new \InvalidArgumentException("invalid value for \$customer_amount_insured when calling Party., must conform to the pattern /^([0-9]{1,14})([.][0-9]{1,4})?$/.");
        }

        $this->container['customer_amount_insured'] = $customer_amount_insured;

        return $this;
    }

    /**
     * Gets customer_annual_revenue
     *
     * @return float|null
     */
    public function getCustomerAnnualRevenue()
    {
        return $this->container['customer_annual_revenue'];
    }

    /**
     * Sets customer_annual_revenue
     *
     * @param float|null $customer_annual_revenue customer_annual_revenue
     *
     * @return self
     */
    public function setCustomerAnnualRevenue($customer_annual_revenue)
    {
        if (is_null($customer_annual_revenue)) {
            throw new \InvalidArgumentException('non-nullable customer_annual_revenue cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($customer_annual_revenue)))) {
            throw new \InvalidArgumentException("invalid value for \$customer_annual_revenue when calling Party., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['customer_annual_revenue'] = $customer_annual_revenue;

        return $this;
    }

    /**
     * Gets customer_block_notice
     *
     * @return string|null
     */
    public function getCustomerBlockNotice()
    {
        return $this->container['customer_block_notice'];
    }

    /**
     * Sets customer_block_notice
     *
     * @param string|null $customer_block_notice customer_block_notice
     *
     * @return self
     */
    public function setCustomerBlockNotice($customer_block_notice)
    {
        if (is_null($customer_block_notice)) {
            throw new \InvalidArgumentException('non-nullable customer_block_notice cannot be null');
        }
        $this->container['customer_block_notice'] = $customer_block_notice;

        return $this;
    }

    /**
     * Gets customer_blocked
     *
     * @return bool|null
     */
    public function getCustomerBlocked()
    {
        return $this->container['customer_blocked'];
    }

    /**
     * Sets customer_blocked
     *
     * @param bool|null $customer_blocked customer_blocked
     *
     * @return self
     */
    public function setCustomerBlocked($customer_blocked)
    {
        if (is_null($customer_blocked)) {
            throw new \InvalidArgumentException('non-nullable customer_blocked cannot be null');
        }
        $this->container['customer_blocked'] = $customer_blocked;

        return $this;
    }

    /**
     * Gets customer_business_type
     *
     * @return \kruegge82\weclapp\Model\CustomerBusinessType|null
     */
    public function getCustomerBusinessType()
    {
        return $this->container['customer_business_type'];
    }

    /**
     * Sets customer_business_type
     *
     * @param \kruegge82\weclapp\Model\CustomerBusinessType|null $customer_business_type customer_business_type
     *
     * @return self
     */
    public function setCustomerBusinessType($customer_business_type)
    {
        if (is_null($customer_business_type)) {
            throw new \InvalidArgumentException('non-nullable customer_business_type cannot be null');
        }
        $this->container['customer_business_type'] = $customer_business_type;

        return $this;
    }

    /**
     * Gets customer_category_id
     *
     * @return string|null
     */
    public function getCustomerCategoryId()
    {
        return $this->container['customer_category_id'];
    }

    /**
     * Sets customer_category_id
     *
     * @param string|null $customer_category_id customer_category_id
     *
     * @return self
     */
    public function setCustomerCategoryId($customer_category_id)
    {
        if (is_null($customer_category_id)) {
            throw new \InvalidArgumentException('non-nullable customer_category_id cannot be null');
        }
        $this->container['customer_category_id'] = $customer_category_id;

        return $this;
    }

    /**
     * Gets customer_category_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerCategoryName()
    {
        return $this->container['customer_category_name'];
    }

    /**
     * Sets customer_category_name
     *
     * @param string|null $customer_category_name customer_category_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerCategoryName($customer_category_name)
    {
        if (is_null($customer_category_name)) {
            throw new \InvalidArgumentException('non-nullable customer_category_name cannot be null');
        }
        $this->container['customer_category_name'] = $customer_category_name;

        return $this;
    }

    /**
     * Gets customer_credit_limit
     *
     * @return float|null
     */
    public function getCustomerCreditLimit()
    {
        return $this->container['customer_credit_limit'];
    }

    /**
     * Sets customer_credit_limit
     *
     * @param float|null $customer_credit_limit customer_credit_limit
     *
     * @return self
     */
    public function setCustomerCreditLimit($customer_credit_limit)
    {
        if (is_null($customer_credit_limit)) {
            throw new \InvalidArgumentException('non-nullable customer_credit_limit cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,14})([.][0-9]{1,4})?$/", ObjectSerializer::toString($customer_credit_limit)))) {
            throw new \InvalidArgumentException("invalid value for \$customer_credit_limit when calling Party., must conform to the pattern /^([0-9]{1,14})([.][0-9]{1,4})?$/.");
        }

        $this->container['customer_credit_limit'] = $customer_credit_limit;

        return $this;
    }

    /**
     * Gets customer_current_sales_stage_id
     *
     * @return string|null
     */
    public function getCustomerCurrentSalesStageId()
    {
        return $this->container['customer_current_sales_stage_id'];
    }

    /**
     * Sets customer_current_sales_stage_id
     *
     * @param string|null $customer_current_sales_stage_id customer_current_sales_stage_id
     *
     * @return self
     */
    public function setCustomerCurrentSalesStageId($customer_current_sales_stage_id)
    {
        if (is_null($customer_current_sales_stage_id)) {
            throw new \InvalidArgumentException('non-nullable customer_current_sales_stage_id cannot be null');
        }
        $this->container['customer_current_sales_stage_id'] = $customer_current_sales_stage_id;

        return $this;
    }

    /**
     * Gets customer_current_sales_stage_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerCurrentSalesStageName()
    {
        return $this->container['customer_current_sales_stage_name'];
    }

    /**
     * Sets customer_current_sales_stage_name
     *
     * @param string|null $customer_current_sales_stage_name customer_current_sales_stage_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerCurrentSalesStageName($customer_current_sales_stage_name)
    {
        if (is_null($customer_current_sales_stage_name)) {
            throw new \InvalidArgumentException('non-nullable customer_current_sales_stage_name cannot be null');
        }
        $this->container['customer_current_sales_stage_name'] = $customer_current_sales_stage_name;

        return $this;
    }

    /**
     * Gets customer_debtor_account_id
     *
     * @return string|null
     */
    public function getCustomerDebtorAccountId()
    {
        return $this->container['customer_debtor_account_id'];
    }

    /**
     * Sets customer_debtor_account_id
     *
     * @param string|null $customer_debtor_account_id customer_debtor_account_id
     *
     * @return self
     */
    public function setCustomerDebtorAccountId($customer_debtor_account_id)
    {
        if (is_null($customer_debtor_account_id)) {
            throw new \InvalidArgumentException('non-nullable customer_debtor_account_id cannot be null');
        }
        $this->container['customer_debtor_account_id'] = $customer_debtor_account_id;

        return $this;
    }

    /**
     * Gets customer_debtor_account_number
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerDebtorAccountNumber()
    {
        return $this->container['customer_debtor_account_number'];
    }

    /**
     * Sets customer_debtor_account_number
     *
     * @param string|null $customer_debtor_account_number customer_debtor_account_number
     *
     * @return self
     * @deprecated
     */
    public function setCustomerDebtorAccountNumber($customer_debtor_account_number)
    {
        if (is_null($customer_debtor_account_number)) {
            throw new \InvalidArgumentException('non-nullable customer_debtor_account_number cannot be null');
        }
        $this->container['customer_debtor_account_number'] = $customer_debtor_account_number;

        return $this;
    }

    /**
     * Gets customer_debtor_accounting_code_id
     *
     * @return string|null
     */
    public function getCustomerDebtorAccountingCodeId()
    {
        return $this->container['customer_debtor_accounting_code_id'];
    }

    /**
     * Sets customer_debtor_accounting_code_id
     *
     * @param string|null $customer_debtor_accounting_code_id customer_debtor_accounting_code_id
     *
     * @return self
     */
    public function setCustomerDebtorAccountingCodeId($customer_debtor_accounting_code_id)
    {
        if (is_null($customer_debtor_accounting_code_id)) {
            throw new \InvalidArgumentException('non-nullable customer_debtor_accounting_code_id cannot be null');
        }
        $this->container['customer_debtor_accounting_code_id'] = $customer_debtor_accounting_code_id;

        return $this;
    }

    /**
     * Gets customer_default_header_discount
     *
     * @return float|null
     */
    public function getCustomerDefaultHeaderDiscount()
    {
        return $this->container['customer_default_header_discount'];
    }

    /**
     * Sets customer_default_header_discount
     *
     * @param float|null $customer_default_header_discount customer_default_header_discount
     *
     * @return self
     */
    public function setCustomerDefaultHeaderDiscount($customer_default_header_discount)
    {
        if (is_null($customer_default_header_discount)) {
            throw new \InvalidArgumentException('non-nullable customer_default_header_discount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($customer_default_header_discount)))) {
            throw new \InvalidArgumentException("invalid value for \$customer_default_header_discount when calling Party., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['customer_default_header_discount'] = $customer_default_header_discount;

        return $this;
    }

    /**
     * Gets customer_default_header_surcharge
     *
     * @return float|null
     */
    public function getCustomerDefaultHeaderSurcharge()
    {
        return $this->container['customer_default_header_surcharge'];
    }

    /**
     * Sets customer_default_header_surcharge
     *
     * @param float|null $customer_default_header_surcharge customer_default_header_surcharge
     *
     * @return self
     */
    public function setCustomerDefaultHeaderSurcharge($customer_default_header_surcharge)
    {
        if (is_null($customer_default_header_surcharge)) {
            throw new \InvalidArgumentException('non-nullable customer_default_header_surcharge cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($customer_default_header_surcharge)))) {
            throw new \InvalidArgumentException("invalid value for \$customer_default_header_surcharge when calling Party., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['customer_default_header_surcharge'] = $customer_default_header_surcharge;

        return $this;
    }

    /**
     * Gets customer_default_shipping_carrier_id
     *
     * @return string|null
     */
    public function getCustomerDefaultShippingCarrierId()
    {
        return $this->container['customer_default_shipping_carrier_id'];
    }

    /**
     * Sets customer_default_shipping_carrier_id
     *
     * @param string|null $customer_default_shipping_carrier_id customer_default_shipping_carrier_id
     *
     * @return self
     */
    public function setCustomerDefaultShippingCarrierId($customer_default_shipping_carrier_id)
    {
        if (is_null($customer_default_shipping_carrier_id)) {
            throw new \InvalidArgumentException('non-nullable customer_default_shipping_carrier_id cannot be null');
        }
        $this->container['customer_default_shipping_carrier_id'] = $customer_default_shipping_carrier_id;

        return $this;
    }

    /**
     * Gets customer_delivery_block
     *
     * @return bool|null
     */
    public function getCustomerDeliveryBlock()
    {
        return $this->container['customer_delivery_block'];
    }

    /**
     * Sets customer_delivery_block
     *
     * @param bool|null $customer_delivery_block customer_delivery_block
     *
     * @return self
     */
    public function setCustomerDeliveryBlock($customer_delivery_block)
    {
        if (is_null($customer_delivery_block)) {
            throw new \InvalidArgumentException('non-nullable customer_delivery_block cannot be null');
        }
        $this->container['customer_delivery_block'] = $customer_delivery_block;

        return $this;
    }

    /**
     * Gets customer_insolvent
     *
     * @return bool|null
     */
    public function getCustomerInsolvent()
    {
        return $this->container['customer_insolvent'];
    }

    /**
     * Sets customer_insolvent
     *
     * @param bool|null $customer_insolvent customer_insolvent
     *
     * @return self
     */
    public function setCustomerInsolvent($customer_insolvent)
    {
        if (is_null($customer_insolvent)) {
            throw new \InvalidArgumentException('non-nullable customer_insolvent cannot be null');
        }
        $this->container['customer_insolvent'] = $customer_insolvent;

        return $this;
    }

    /**
     * Gets customer_insured
     *
     * @return bool|null
     */
    public function getCustomerInsured()
    {
        return $this->container['customer_insured'];
    }

    /**
     * Sets customer_insured
     *
     * @param bool|null $customer_insured customer_insured
     *
     * @return self
     */
    public function setCustomerInsured($customer_insured)
    {
        if (is_null($customer_insured)) {
            throw new \InvalidArgumentException('non-nullable customer_insured cannot be null');
        }
        $this->container['customer_insured'] = $customer_insured;

        return $this;
    }

    /**
     * Gets customer_internal_note
     *
     * @return string|null
     */
    public function getCustomerInternalNote()
    {
        return $this->container['customer_internal_note'];
    }

    /**
     * Sets customer_internal_note
     *
     * @param string|null $customer_internal_note customer_internal_note
     *
     * @return self
     */
    public function setCustomerInternalNote($customer_internal_note)
    {
        if (is_null($customer_internal_note)) {
            throw new \InvalidArgumentException('non-nullable customer_internal_note cannot be null');
        }
        $this->container['customer_internal_note'] = $customer_internal_note;

        return $this;
    }

    /**
     * Gets customer_loss_description
     *
     * @return string|null
     */
    public function getCustomerLossDescription()
    {
        return $this->container['customer_loss_description'];
    }

    /**
     * Sets customer_loss_description
     *
     * @param string|null $customer_loss_description customer_loss_description
     *
     * @return self
     */
    public function setCustomerLossDescription($customer_loss_description)
    {
        if (is_null($customer_loss_description)) {
            throw new \InvalidArgumentException('non-nullable customer_loss_description cannot be null');
        }
        $this->container['customer_loss_description'] = $customer_loss_description;

        return $this;
    }

    /**
     * Gets customer_loss_reason_id
     *
     * @return string|null
     */
    public function getCustomerLossReasonId()
    {
        return $this->container['customer_loss_reason_id'];
    }

    /**
     * Sets customer_loss_reason_id
     *
     * @param string|null $customer_loss_reason_id customer_loss_reason_id
     *
     * @return self
     */
    public function setCustomerLossReasonId($customer_loss_reason_id)
    {
        if (is_null($customer_loss_reason_id)) {
            throw new \InvalidArgumentException('non-nullable customer_loss_reason_id cannot be null');
        }
        $this->container['customer_loss_reason_id'] = $customer_loss_reason_id;

        return $this;
    }

    /**
     * Gets customer_loss_reason_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerLossReasonName()
    {
        return $this->container['customer_loss_reason_name'];
    }

    /**
     * Sets customer_loss_reason_name
     *
     * @param string|null $customer_loss_reason_name customer_loss_reason_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerLossReasonName($customer_loss_reason_name)
    {
        if (is_null($customer_loss_reason_name)) {
            throw new \InvalidArgumentException('non-nullable customer_loss_reason_name cannot be null');
        }
        $this->container['customer_loss_reason_name'] = $customer_loss_reason_name;

        return $this;
    }

    /**
     * Gets customer_non_standard_tax_id
     *
     * @return string|null
     */
    public function getCustomerNonStandardTaxId()
    {
        return $this->container['customer_non_standard_tax_id'];
    }

    /**
     * Sets customer_non_standard_tax_id
     *
     * @param string|null $customer_non_standard_tax_id customer_non_standard_tax_id
     *
     * @return self
     */
    public function setCustomerNonStandardTaxId($customer_non_standard_tax_id)
    {
        if (is_null($customer_non_standard_tax_id)) {
            throw new \InvalidArgumentException('non-nullable customer_non_standard_tax_id cannot be null');
        }
        $this->container['customer_non_standard_tax_id'] = $customer_non_standard_tax_id;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string|null
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string|null $customer_number customer_number
     *
     * @return self
     */
    public function setCustomerNumber($customer_number)
    {
        if (is_null($customer_number)) {
            throw new \InvalidArgumentException('non-nullable customer_number cannot be null');
        }
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets customer_number_old
     *
     * @return string|null
     */
    public function getCustomerNumberOld()
    {
        return $this->container['customer_number_old'];
    }

    /**
     * Sets customer_number_old
     *
     * @param string|null $customer_number_old customer_number_old
     *
     * @return self
     */
    public function setCustomerNumberOld($customer_number_old)
    {
        if (is_null($customer_number_old)) {
            throw new \InvalidArgumentException('non-nullable customer_number_old cannot be null');
        }
        $this->container['customer_number_old'] = $customer_number_old;

        return $this;
    }

    /**
     * Gets customer_payment_method_id
     *
     * @return string|null
     */
    public function getCustomerPaymentMethodId()
    {
        return $this->container['customer_payment_method_id'];
    }

    /**
     * Sets customer_payment_method_id
     *
     * @param string|null $customer_payment_method_id customer_payment_method_id
     *
     * @return self
     */
    public function setCustomerPaymentMethodId($customer_payment_method_id)
    {
        if (is_null($customer_payment_method_id)) {
            throw new \InvalidArgumentException('non-nullable customer_payment_method_id cannot be null');
        }
        $this->container['customer_payment_method_id'] = $customer_payment_method_id;

        return $this;
    }

    /**
     * Gets customer_payment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerPaymentMethodName()
    {
        return $this->container['customer_payment_method_name'];
    }

    /**
     * Sets customer_payment_method_name
     *
     * @param string|null $customer_payment_method_name customer_payment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerPaymentMethodName($customer_payment_method_name)
    {
        if (is_null($customer_payment_method_name)) {
            throw new \InvalidArgumentException('non-nullable customer_payment_method_name cannot be null');
        }
        $this->container['customer_payment_method_name'] = $customer_payment_method_name;

        return $this;
    }

    /**
     * Gets customer_sales_channel
     *
     * @return \kruegge82\weclapp\Model\DistributionChannel|null
     */
    public function getCustomerSalesChannel()
    {
        return $this->container['customer_sales_channel'];
    }

    /**
     * Sets customer_sales_channel
     *
     * @param \kruegge82\weclapp\Model\DistributionChannel|null $customer_sales_channel customer_sales_channel
     *
     * @return self
     */
    public function setCustomerSalesChannel($customer_sales_channel)
    {
        if (is_null($customer_sales_channel)) {
            throw new \InvalidArgumentException('non-nullable customer_sales_channel cannot be null');
        }
        $this->container['customer_sales_channel'] = $customer_sales_channel;

        return $this;
    }

    /**
     * Gets customer_sales_order_payment_type
     *
     * @return \kruegge82\weclapp\Model\SalesOrderPaymentType|null
     */
    public function getCustomerSalesOrderPaymentType()
    {
        return $this->container['customer_sales_order_payment_type'];
    }

    /**
     * Sets customer_sales_order_payment_type
     *
     * @param \kruegge82\weclapp\Model\SalesOrderPaymentType|null $customer_sales_order_payment_type customer_sales_order_payment_type
     *
     * @return self
     */
    public function setCustomerSalesOrderPaymentType($customer_sales_order_payment_type)
    {
        if (is_null($customer_sales_order_payment_type)) {
            throw new \InvalidArgumentException('non-nullable customer_sales_order_payment_type cannot be null');
        }
        $this->container['customer_sales_order_payment_type'] = $customer_sales_order_payment_type;

        return $this;
    }

    /**
     * Gets customer_sales_probability
     *
     * @return int|null
     */
    public function getCustomerSalesProbability()
    {
        return $this->container['customer_sales_probability'];
    }

    /**
     * Sets customer_sales_probability
     *
     * @param int|null $customer_sales_probability customer_sales_probability
     *
     * @return self
     */
    public function setCustomerSalesProbability($customer_sales_probability)
    {
        if (is_null($customer_sales_probability)) {
            throw new \InvalidArgumentException('non-nullable customer_sales_probability cannot be null');
        }
        $this->container['customer_sales_probability'] = $customer_sales_probability;

        return $this;
    }

    /**
     * Gets customer_sales_stage_history
     *
     * @return \kruegge82\weclapp\Model\SalesStageHistory[]|null
     */
    public function getCustomerSalesStageHistory()
    {
        return $this->container['customer_sales_stage_history'];
    }

    /**
     * Sets customer_sales_stage_history
     *
     * @param \kruegge82\weclapp\Model\SalesStageHistory[]|null $customer_sales_stage_history customer_sales_stage_history
     *
     * @return self
     */
    public function setCustomerSalesStageHistory($customer_sales_stage_history)
    {
        if (is_null($customer_sales_stage_history)) {
            throw new \InvalidArgumentException('non-nullable customer_sales_stage_history cannot be null');
        }
        $this->container['customer_sales_stage_history'] = $customer_sales_stage_history;

        return $this;
    }

    /**
     * Gets customer_satisfaction
     *
     * @return \kruegge82\weclapp\Model\CustomerSatisfaction|null
     */
    public function getCustomerSatisfaction()
    {
        return $this->container['customer_satisfaction'];
    }

    /**
     * Sets customer_satisfaction
     *
     * @param \kruegge82\weclapp\Model\CustomerSatisfaction|null $customer_satisfaction customer_satisfaction
     *
     * @return self
     */
    public function setCustomerSatisfaction($customer_satisfaction)
    {
        if (is_null($customer_satisfaction)) {
            throw new \InvalidArgumentException('non-nullable customer_satisfaction cannot be null');
        }
        $this->container['customer_satisfaction'] = $customer_satisfaction;

        return $this;
    }

    /**
     * Gets customer_shipment_method_id
     *
     * @return string|null
     */
    public function getCustomerShipmentMethodId()
    {
        return $this->container['customer_shipment_method_id'];
    }

    /**
     * Sets customer_shipment_method_id
     *
     * @param string|null $customer_shipment_method_id customer_shipment_method_id
     *
     * @return self
     */
    public function setCustomerShipmentMethodId($customer_shipment_method_id)
    {
        if (is_null($customer_shipment_method_id)) {
            throw new \InvalidArgumentException('non-nullable customer_shipment_method_id cannot be null');
        }
        $this->container['customer_shipment_method_id'] = $customer_shipment_method_id;

        return $this;
    }

    /**
     * Gets customer_shipment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerShipmentMethodName()
    {
        return $this->container['customer_shipment_method_name'];
    }

    /**
     * Sets customer_shipment_method_name
     *
     * @param string|null $customer_shipment_method_name customer_shipment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerShipmentMethodName($customer_shipment_method_name)
    {
        if (is_null($customer_shipment_method_name)) {
            throw new \InvalidArgumentException('non-nullable customer_shipment_method_name cannot be null');
        }
        $this->container['customer_shipment_method_name'] = $customer_shipment_method_name;

        return $this;
    }

    /**
     * Gets customer_supplier_number
     *
     * @return string|null
     */
    public function getCustomerSupplierNumber()
    {
        return $this->container['customer_supplier_number'];
    }

    /**
     * Sets customer_supplier_number
     *
     * @param string|null $customer_supplier_number customer_supplier_number
     *
     * @return self
     */
    public function setCustomerSupplierNumber($customer_supplier_number)
    {
        if (is_null($customer_supplier_number)) {
            throw new \InvalidArgumentException('non-nullable customer_supplier_number cannot be null');
        }
        $this->container['customer_supplier_number'] = $customer_supplier_number;

        return $this;
    }

    /**
     * Gets customer_term_of_payment_id
     *
     * @return string|null
     */
    public function getCustomerTermOfPaymentId()
    {
        return $this->container['customer_term_of_payment_id'];
    }

    /**
     * Sets customer_term_of_payment_id
     *
     * @param string|null $customer_term_of_payment_id customer_term_of_payment_id
     *
     * @return self
     */
    public function setCustomerTermOfPaymentId($customer_term_of_payment_id)
    {
        if (is_null($customer_term_of_payment_id)) {
            throw new \InvalidArgumentException('non-nullable customer_term_of_payment_id cannot be null');
        }
        $this->container['customer_term_of_payment_id'] = $customer_term_of_payment_id;

        return $this;
    }

    /**
     * Gets customer_term_of_payment_name
     *
     * @return string|null
     * @deprecated
     */
    public function getCustomerTermOfPaymentName()
    {
        return $this->container['customer_term_of_payment_name'];
    }

    /**
     * Sets customer_term_of_payment_name
     *
     * @param string|null $customer_term_of_payment_name customer_term_of_payment_name
     *
     * @return self
     * @deprecated
     */
    public function setCustomerTermOfPaymentName($customer_term_of_payment_name)
    {
        if (is_null($customer_term_of_payment_name)) {
            throw new \InvalidArgumentException('non-nullable customer_term_of_payment_name cannot be null');
        }
        $this->container['customer_term_of_payment_name'] = $customer_term_of_payment_name;

        return $this;
    }

    /**
     * Gets customer_use_customs_tariff_number
     *
     * @return bool|null
     */
    public function getCustomerUseCustomsTariffNumber()
    {
        return $this->container['customer_use_customs_tariff_number'];
    }

    /**
     * Sets customer_use_customs_tariff_number
     *
     * @param bool|null $customer_use_customs_tariff_number customer_use_customs_tariff_number
     *
     * @return self
     */
    public function setCustomerUseCustomsTariffNumber($customer_use_customs_tariff_number)
    {
        if (is_null($customer_use_customs_tariff_number)) {
            throw new \InvalidArgumentException('non-nullable customer_use_customs_tariff_number cannot be null');
        }
        $this->container['customer_use_customs_tariff_number'] = $customer_use_customs_tariff_number;

        return $this;
    }

    /**
     * Gets delivery_email_addresses_id
     *
     * @return string|null
     */
    public function getDeliveryEmailAddressesId()
    {
        return $this->container['delivery_email_addresses_id'];
    }

    /**
     * Sets delivery_email_addresses_id
     *
     * @param string|null $delivery_email_addresses_id delivery_email_addresses_id
     *
     * @return self
     */
    public function setDeliveryEmailAddressesId($delivery_email_addresses_id)
    {
        if (is_null($delivery_email_addresses_id)) {
            throw new \InvalidArgumentException('non-nullable delivery_email_addresses_id cannot be null');
        }
        $this->container['delivery_email_addresses_id'] = $delivery_email_addresses_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets dunning_address_id
     *
     * @return string|null
     */
    public function getDunningAddressId()
    {
        return $this->container['dunning_address_id'];
    }

    /**
     * Sets dunning_address_id
     *
     * @param string|null $dunning_address_id dunning_address_id
     *
     * @return self
     */
    public function setDunningAddressId($dunning_address_id)
    {
        if (is_null($dunning_address_id)) {
            throw new \InvalidArgumentException('non-nullable dunning_address_id cannot be null');
        }
        $this->container['dunning_address_id'] = $dunning_address_id;

        return $this;
    }

    /**
     * Gets dunning_email_addresses_id
     *
     * @return string|null
     */
    public function getDunningEmailAddressesId()
    {
        return $this->container['dunning_email_addresses_id'];
    }

    /**
     * Sets dunning_email_addresses_id
     *
     * @param string|null $dunning_email_addresses_id dunning_email_addresses_id
     *
     * @return self
     */
    public function setDunningEmailAddressesId($dunning_email_addresses_id)
    {
        if (is_null($dunning_email_addresses_id)) {
            throw new \InvalidArgumentException('non-nullable dunning_email_addresses_id cannot be null');
        }
        $this->container['dunning_email_addresses_id'] = $dunning_email_addresses_id;

        return $this;
    }

    /**
     * Gets enable_dropshipping_in_new_supply_sources
     *
     * @return bool|null
     */
    public function getEnableDropshippingInNewSupplySources()
    {
        return $this->container['enable_dropshipping_in_new_supply_sources'];
    }

    /**
     * Sets enable_dropshipping_in_new_supply_sources
     *
     * @param bool|null $enable_dropshipping_in_new_supply_sources enable_dropshipping_in_new_supply_sources
     *
     * @return self
     */
    public function setEnableDropshippingInNewSupplySources($enable_dropshipping_in_new_supply_sources)
    {
        if (is_null($enable_dropshipping_in_new_supply_sources)) {
            throw new \InvalidArgumentException('non-nullable enable_dropshipping_in_new_supply_sources cannot be null');
        }
        $this->container['enable_dropshipping_in_new_supply_sources'] = $enable_dropshipping_in_new_supply_sources;

        return $this;
    }

    /**
     * Gets eori_number
     *
     * @return string|null
     */
    public function getEoriNumber()
    {
        return $this->container['eori_number'];
    }

    /**
     * Sets eori_number
     *
     * @param string|null $eori_number eori_number
     *
     * @return self
     */
    public function setEoriNumber($eori_number)
    {
        if (is_null($eori_number)) {
            throw new \InvalidArgumentException('non-nullable eori_number cannot be null');
        }
        $this->container['eori_number'] = $eori_number;

        return $this;
    }

    /**
     * Gets factoring
     *
     * @return bool|null
     */
    public function getFactoring()
    {
        return $this->container['factoring'];
    }

    /**
     * Sets factoring
     *
     * @param bool|null $factoring factoring
     *
     * @return self
     */
    public function setFactoring($factoring)
    {
        if (is_null($factoring)) {
            throw new \InvalidArgumentException('non-nullable factoring cannot be null');
        }
        $this->container['factoring'] = $factoring;

        return $this;
    }

    /**
     * Gets fix_phone2
     *
     * @return string|null
     */
    public function getFixPhone2()
    {
        return $this->container['fix_phone2'];
    }

    /**
     * Sets fix_phone2
     *
     * @param string|null $fix_phone2 fix_phone2
     *
     * @return self
     */
    public function setFixPhone2($fix_phone2)
    {
        if (is_null($fix_phone2)) {
            throw new \InvalidArgumentException('non-nullable fix_phone2 cannot be null');
        }
        $this->container['fix_phone2'] = $fix_phone2;

        return $this;
    }

    /**
     * Gets fixed_responsible_user
     *
     * @return bool|null
     */
    public function getFixedResponsibleUser()
    {
        return $this->container['fixed_responsible_user'];
    }

    /**
     * Sets fixed_responsible_user
     *
     * @param bool|null $fixed_responsible_user fixed_responsible_user
     *
     * @return self
     */
    public function setFixedResponsibleUser($fixed_responsible_user)
    {
        if (is_null($fixed_responsible_user)) {
            throw new \InvalidArgumentException('non-nullable fixed_responsible_user cannot be null');
        }
        $this->container['fixed_responsible_user'] = $fixed_responsible_user;

        return $this;
    }

    /**
     * Gets former_sales_partner
     *
     * @return bool|null
     */
    public function getFormerSalesPartner()
    {
        return $this->container['former_sales_partner'];
    }

    /**
     * Sets former_sales_partner
     *
     * @param bool|null $former_sales_partner former_sales_partner
     *
     * @return self
     */
    public function setFormerSalesPartner($former_sales_partner)
    {
        if (is_null($former_sales_partner)) {
            throw new \InvalidArgumentException('non-nullable former_sales_partner cannot be null');
        }
        $this->container['former_sales_partner'] = $former_sales_partner;

        return $this;
    }

    /**
     * Gets habitual_exporter
     *
     * @return bool|null
     */
    public function getHabitualExporter()
    {
        return $this->container['habitual_exporter'];
    }

    /**
     * Sets habitual_exporter
     *
     * @param bool|null $habitual_exporter habitual_exporter
     *
     * @return self
     */
    public function setHabitualExporter($habitual_exporter)
    {
        if (is_null($habitual_exporter)) {
            throw new \InvalidArgumentException('non-nullable habitual_exporter cannot be null');
        }
        $this->container['habitual_exporter'] = $habitual_exporter;

        return $this;
    }

    /**
     * Gets image_id
     *
     * @return string|null
     */
    public function getImageId()
    {
        return $this->container['image_id'];
    }

    /**
     * Sets image_id
     *
     * @param string|null $image_id image_id
     *
     * @return self
     */
    public function setImageId($image_id)
    {
        if (is_null($image_id)) {
            throw new \InvalidArgumentException('non-nullable image_id cannot be null');
        }
        $this->container['image_id'] = $image_id;

        return $this;
    }

    /**
     * Gets invoice_block
     *
     * @return bool|null
     */
    public function getInvoiceBlock()
    {
        return $this->container['invoice_block'];
    }

    /**
     * Sets invoice_block
     *
     * @param bool|null $invoice_block invoice_block
     *
     * @return self
     */
    public function setInvoiceBlock($invoice_block)
    {
        if (is_null($invoice_block)) {
            throw new \InvalidArgumentException('non-nullable invoice_block cannot be null');
        }
        $this->container['invoice_block'] = $invoice_block;

        return $this;
    }

    /**
     * Gets invoice_recipient_id
     *
     * @return string|null
     */
    public function getInvoiceRecipientId()
    {
        return $this->container['invoice_recipient_id'];
    }

    /**
     * Sets invoice_recipient_id
     *
     * @param string|null $invoice_recipient_id invoice_recipient_id
     *
     * @return self
     */
    public function setInvoiceRecipientId($invoice_recipient_id)
    {
        if (is_null($invoice_recipient_id)) {
            throw new \InvalidArgumentException('non-nullable invoice_recipient_id cannot be null');
        }
        $this->container['invoice_recipient_id'] = $invoice_recipient_id;

        return $this;
    }

    /**
     * Gets lead_rating_id
     *
     * @return string|null
     */
    public function getLeadRatingId()
    {
        return $this->container['lead_rating_id'];
    }

    /**
     * Sets lead_rating_id
     *
     * @param string|null $lead_rating_id lead_rating_id
     *
     * @return self
     */
    public function setLeadRatingId($lead_rating_id)
    {
        if (is_null($lead_rating_id)) {
            throw new \InvalidArgumentException('non-nullable lead_rating_id cannot be null');
        }
        $this->container['lead_rating_id'] = $lead_rating_id;

        return $this;
    }

    /**
     * Gets lead_rating_name
     *
     * @return string|null
     * @deprecated
     */
    public function getLeadRatingName()
    {
        return $this->container['lead_rating_name'];
    }

    /**
     * Sets lead_rating_name
     *
     * @param string|null $lead_rating_name lead_rating_name
     *
     * @return self
     * @deprecated
     */
    public function setLeadRatingName($lead_rating_name)
    {
        if (is_null($lead_rating_name)) {
            throw new \InvalidArgumentException('non-nullable lead_rating_name cannot be null');
        }
        $this->container['lead_rating_name'] = $lead_rating_name;

        return $this;
    }

    /**
     * Gets lead_source_id
     *
     * @return string|null
     */
    public function getLeadSourceId()
    {
        return $this->container['lead_source_id'];
    }

    /**
     * Sets lead_source_id
     *
     * @param string|null $lead_source_id lead_source_id
     *
     * @return self
     */
    public function setLeadSourceId($lead_source_id)
    {
        if (is_null($lead_source_id)) {
            throw new \InvalidArgumentException('non-nullable lead_source_id cannot be null');
        }
        $this->container['lead_source_id'] = $lead_source_id;

        return $this;
    }

    /**
     * Gets lead_source_name
     *
     * @return string|null
     * @deprecated
     */
    public function getLeadSourceName()
    {
        return $this->container['lead_source_name'];
    }

    /**
     * Sets lead_source_name
     *
     * @param string|null $lead_source_name lead_source_name
     *
     * @return self
     * @deprecated
     */
    public function setLeadSourceName($lead_source_name)
    {
        if (is_null($lead_source_name)) {
            throw new \InvalidArgumentException('non-nullable lead_source_name cannot be null');
        }
        $this->container['lead_source_name'] = $lead_source_name;

        return $this;
    }

    /**
     * Gets lead_status
     *
     * @return \kruegge82\weclapp\Model\LeadStatus|null
     */
    public function getLeadStatus()
    {
        return $this->container['lead_status'];
    }

    /**
     * Sets lead_status
     *
     * @param \kruegge82\weclapp\Model\LeadStatus|null $lead_status lead_status
     *
     * @return self
     */
    public function setLeadStatus($lead_status)
    {
        if (is_null($lead_status)) {
            throw new \InvalidArgumentException('non-nullable lead_status cannot be null');
        }
        $this->container['lead_status'] = $lead_status;

        return $this;
    }

    /**
     * Gets legal_form_id
     *
     * @return string|null
     */
    public function getLegalFormId()
    {
        return $this->container['legal_form_id'];
    }

    /**
     * Sets legal_form_id
     *
     * @param string|null $legal_form_id legal_form_id
     *
     * @return self
     */
    public function setLegalFormId($legal_form_id)
    {
        if (is_null($legal_form_id)) {
            throw new \InvalidArgumentException('non-nullable legal_form_id cannot be null');
        }
        $this->container['legal_form_id'] = $legal_form_id;

        return $this;
    }

    /**
     * Gets legal_form_name
     *
     * @return string|null
     * @deprecated
     */
    public function getLegalFormName()
    {
        return $this->container['legal_form_name'];
    }

    /**
     * Sets legal_form_name
     *
     * @param string|null $legal_form_name legal_form_name
     *
     * @return self
     * @deprecated
     */
    public function setLegalFormName($legal_form_name)
    {
        if (is_null($legal_form_name)) {
            throw new \InvalidArgumentException('non-nullable legal_form_name cannot be null');
        }
        $this->container['legal_form_name'] = $legal_form_name;

        return $this;
    }

    /**
     * Gets mobile_phone2
     *
     * @return string|null
     */
    public function getMobilePhone2()
    {
        return $this->container['mobile_phone2'];
    }

    /**
     * Sets mobile_phone2
     *
     * @param string|null $mobile_phone2 mobile_phone2
     *
     * @return self
     */
    public function setMobilePhone2($mobile_phone2)
    {
        if (is_null($mobile_phone2)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone2 cannot be null');
        }
        $this->container['mobile_phone2'] = $mobile_phone2;

        return $this;
    }

    /**
     * Gets opt_in_email
     *
     * @return bool|null
     */
    public function getOptInEmail()
    {
        return $this->container['opt_in_email'];
    }

    /**
     * Sets opt_in_email
     *
     * @param bool|null $opt_in_email opt_in_email
     *
     * @return self
     */
    public function setOptInEmail($opt_in_email)
    {
        if (is_null($opt_in_email)) {
            throw new \InvalidArgumentException('non-nullable opt_in_email cannot be null');
        }
        $this->container['opt_in_email'] = $opt_in_email;

        return $this;
    }

    /**
     * Gets opt_in_letter
     *
     * @return bool|null
     */
    public function getOptInLetter()
    {
        return $this->container['opt_in_letter'];
    }

    /**
     * Sets opt_in_letter
     *
     * @param bool|null $opt_in_letter opt_in_letter
     *
     * @return self
     */
    public function setOptInLetter($opt_in_letter)
    {
        if (is_null($opt_in_letter)) {
            throw new \InvalidArgumentException('non-nullable opt_in_letter cannot be null');
        }
        $this->container['opt_in_letter'] = $opt_in_letter;

        return $this;
    }

    /**
     * Gets opt_in_phone
     *
     * @return bool|null
     */
    public function getOptInPhone()
    {
        return $this->container['opt_in_phone'];
    }

    /**
     * Sets opt_in_phone
     *
     * @param bool|null $opt_in_phone opt_in_phone
     *
     * @return self
     */
    public function setOptInPhone($opt_in_phone)
    {
        if (is_null($opt_in_phone)) {
            throw new \InvalidArgumentException('non-nullable opt_in_phone cannot be null');
        }
        $this->container['opt_in_phone'] = $opt_in_phone;

        return $this;
    }

    /**
     * Gets opt_in_sms
     *
     * @return bool|null
     */
    public function getOptInSms()
    {
        return $this->container['opt_in_sms'];
    }

    /**
     * Sets opt_in_sms
     *
     * @param bool|null $opt_in_sms opt_in_sms
     *
     * @return self
     */
    public function setOptInSms($opt_in_sms)
    {
        if (is_null($opt_in_sms)) {
            throw new \InvalidArgumentException('non-nullable opt_in_sms cannot be null');
        }
        $this->container['opt_in_sms'] = $opt_in_sms;

        return $this;
    }

    /**
     * Gets parent_party_id
     *
     * @return string|null
     */
    public function getParentPartyId()
    {
        return $this->container['parent_party_id'];
    }

    /**
     * Sets parent_party_id
     *
     * @param string|null $parent_party_id parent_party_id
     *
     * @return self
     */
    public function setParentPartyId($parent_party_id)
    {
        if (is_null($parent_party_id)) {
            throw new \InvalidArgumentException('non-nullable parent_party_id cannot be null');
        }
        $this->container['parent_party_id'] = $parent_party_id;

        return $this;
    }

    /**
     * Gets party_email_addresses
     *
     * @return \kruegge82\weclapp\Model\PartyEmailAddresses[]|null
     */
    public function getPartyEmailAddresses()
    {
        return $this->container['party_email_addresses'];
    }

    /**
     * Sets party_email_addresses
     *
     * @param \kruegge82\weclapp\Model\PartyEmailAddresses[]|null $party_email_addresses party_email_addresses
     *
     * @return self
     */
    public function setPartyEmailAddresses($party_email_addresses)
    {
        if (is_null($party_email_addresses)) {
            throw new \InvalidArgumentException('non-nullable party_email_addresses cannot be null');
        }
        $this->container['party_email_addresses'] = $party_email_addresses;

        return $this;
    }

    /**
     * Gets party_habitual_exporter_letters_of_intent
     *
     * @return \kruegge82\weclapp\Model\PartyHabitualExporterLetterOfIntent[]|null
     */
    public function getPartyHabitualExporterLettersOfIntent()
    {
        return $this->container['party_habitual_exporter_letters_of_intent'];
    }

    /**
     * Sets party_habitual_exporter_letters_of_intent
     *
     * @param \kruegge82\weclapp\Model\PartyHabitualExporterLetterOfIntent[]|null $party_habitual_exporter_letters_of_intent party_habitual_exporter_letters_of_intent
     *
     * @return self
     */
    public function setPartyHabitualExporterLettersOfIntent($party_habitual_exporter_letters_of_intent)
    {
        if (is_null($party_habitual_exporter_letters_of_intent)) {
            throw new \InvalidArgumentException('non-nullable party_habitual_exporter_letters_of_intent cannot be null');
        }
        $this->container['party_habitual_exporter_letters_of_intent'] = $party_habitual_exporter_letters_of_intent;

        return $this;
    }

    /**
     * Gets phone_home
     *
     * @return string|null
     */
    public function getPhoneHome()
    {
        return $this->container['phone_home'];
    }

    /**
     * Sets phone_home
     *
     * @param string|null $phone_home phone_home
     *
     * @return self
     */
    public function setPhoneHome($phone_home)
    {
        if (is_null($phone_home)) {
            throw new \InvalidArgumentException('non-nullable phone_home cannot be null');
        }
        $this->container['phone_home'] = $phone_home;

        return $this;
    }

    /**
     * Gets primary_contact_id
     *
     * @return string|null
     */
    public function getPrimaryContactId()
    {
        return $this->container['primary_contact_id'];
    }

    /**
     * Sets primary_contact_id
     *
     * @param string|null $primary_contact_id primary_contact_id
     *
     * @return self
     */
    public function setPrimaryContactId($primary_contact_id)
    {
        if (is_null($primary_contact_id)) {
            throw new \InvalidArgumentException('non-nullable primary_contact_id cannot be null');
        }
        $this->container['primary_contact_id'] = $primary_contact_id;

        return $this;
    }

    /**
     * Gets public_page_expiration_date
     *
     * @return int|null
     */
    public function getPublicPageExpirationDate()
    {
        return $this->container['public_page_expiration_date'];
    }

    /**
     * Sets public_page_expiration_date
     *
     * @param int|null $public_page_expiration_date public_page_expiration_date
     *
     * @return self
     */
    public function setPublicPageExpirationDate($public_page_expiration_date)
    {
        if (is_null($public_page_expiration_date)) {
            throw new \InvalidArgumentException('non-nullable public_page_expiration_date cannot be null');
        }
        $this->container['public_page_expiration_date'] = $public_page_expiration_date;

        return $this;
    }

    /**
     * Gets public_page_uuid
     *
     * @return string|null
     */
    public function getPublicPageUuid()
    {
        return $this->container['public_page_uuid'];
    }

    /**
     * Sets public_page_uuid
     *
     * @param string|null $public_page_uuid public_page_uuid
     *
     * @return self
     */
    public function setPublicPageUuid($public_page_uuid)
    {
        if (is_null($public_page_uuid)) {
            throw new \InvalidArgumentException('non-nullable public_page_uuid cannot be null');
        }
        $this->container['public_page_uuid'] = $public_page_uuid;

        return $this;
    }

    /**
     * Gets purchase_email_addresses_id
     *
     * @return string|null
     */
    public function getPurchaseEmailAddressesId()
    {
        return $this->container['purchase_email_addresses_id'];
    }

    /**
     * Sets purchase_email_addresses_id
     *
     * @param string|null $purchase_email_addresses_id purchase_email_addresses_id
     *
     * @return self
     */
    public function setPurchaseEmailAddressesId($purchase_email_addresses_id)
    {
        if (is_null($purchase_email_addresses_id)) {
            throw new \InvalidArgumentException('non-nullable purchase_email_addresses_id cannot be null');
        }
        $this->container['purchase_email_addresses_id'] = $purchase_email_addresses_id;

        return $this;
    }

    /**
     * Gets purchase_via_plafond
     *
     * @return bool|null
     */
    public function getPurchaseViaPlafond()
    {
        return $this->container['purchase_via_plafond'];
    }

    /**
     * Sets purchase_via_plafond
     *
     * @param bool|null $purchase_via_plafond purchase_via_plafond
     *
     * @return self
     */
    public function setPurchaseViaPlafond($purchase_via_plafond)
    {
        if (is_null($purchase_via_plafond)) {
            throw new \InvalidArgumentException('non-nullable purchase_via_plafond cannot be null');
        }
        $this->container['purchase_via_plafond'] = $purchase_via_plafond;

        return $this;
    }

    /**
     * Gets quotation_email_addresses_id
     *
     * @return string|null
     */
    public function getQuotationEmailAddressesId()
    {
        return $this->container['quotation_email_addresses_id'];
    }

    /**
     * Sets quotation_email_addresses_id
     *
     * @param string|null $quotation_email_addresses_id quotation_email_addresses_id
     *
     * @return self
     */
    public function setQuotationEmailAddressesId($quotation_email_addresses_id)
    {
        if (is_null($quotation_email_addresses_id)) {
            throw new \InvalidArgumentException('non-nullable quotation_email_addresses_id cannot be null');
        }
        $this->container['quotation_email_addresses_id'] = $quotation_email_addresses_id;

        return $this;
    }

    /**
     * Gets rating_id
     *
     * @return string|null
     */
    public function getRatingId()
    {
        return $this->container['rating_id'];
    }

    /**
     * Sets rating_id
     *
     * @param string|null $rating_id rating_id
     *
     * @return self
     */
    public function setRatingId($rating_id)
    {
        if (is_null($rating_id)) {
            throw new \InvalidArgumentException('non-nullable rating_id cannot be null');
        }
        $this->container['rating_id'] = $rating_id;

        return $this;
    }

    /**
     * Gets rating_name
     *
     * @return string|null
     * @deprecated
     */
    public function getRatingName()
    {
        return $this->container['rating_name'];
    }

    /**
     * Sets rating_name
     *
     * @param string|null $rating_name rating_name
     *
     * @return self
     * @deprecated
     */
    public function setRatingName($rating_name)
    {
        if (is_null($rating_name)) {
            throw new \InvalidArgumentException('non-nullable rating_name cannot be null');
        }
        $this->container['rating_name'] = $rating_name;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number reference_number
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        if (is_null($reference_number)) {
            throw new \InvalidArgumentException('non-nullable reference_number cannot be null');
        }
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets region_id
     *
     * @return string|null
     */
    public function getRegionId()
    {
        return $this->container['region_id'];
    }

    /**
     * Sets region_id
     *
     * @param string|null $region_id region_id
     *
     * @return self
     */
    public function setRegionId($region_id)
    {
        if (is_null($region_id)) {
            throw new \InvalidArgumentException('non-nullable region_id cannot be null');
        }
        $this->container['region_id'] = $region_id;

        return $this;
    }

    /**
     * Gets responsible_user_id
     *
     * @return string|null
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     *
     * @param string|null $responsible_user_id responsible_user_id
     *
     * @return self
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        if (is_null($responsible_user_id)) {
            throw new \InvalidArgumentException('non-nullable responsible_user_id cannot be null');
        }
        $this->container['responsible_user_id'] = $responsible_user_id;

        return $this;
    }

    /**
     * Gets responsible_user_username
     *
     * @return string|null
     * @deprecated
     */
    public function getResponsibleUserUsername()
    {
        return $this->container['responsible_user_username'];
    }

    /**
     * Sets responsible_user_username
     *
     * @param string|null $responsible_user_username responsible_user_username
     *
     * @return self
     * @deprecated
     */
    public function setResponsibleUserUsername($responsible_user_username)
    {
        if (is_null($responsible_user_username)) {
            throw new \InvalidArgumentException('non-nullable responsible_user_username cannot be null');
        }
        $this->container['responsible_user_username'] = $responsible_user_username;

        return $this;
    }

    /**
     * Gets sales_invoice_email_addresses_id
     *
     * @return string|null
     */
    public function getSalesInvoiceEmailAddressesId()
    {
        return $this->container['sales_invoice_email_addresses_id'];
    }

    /**
     * Sets sales_invoice_email_addresses_id
     *
     * @param string|null $sales_invoice_email_addresses_id sales_invoice_email_addresses_id
     *
     * @return self
     */
    public function setSalesInvoiceEmailAddressesId($sales_invoice_email_addresses_id)
    {
        if (is_null($sales_invoice_email_addresses_id)) {
            throw new \InvalidArgumentException('non-nullable sales_invoice_email_addresses_id cannot be null');
        }
        $this->container['sales_invoice_email_addresses_id'] = $sales_invoice_email_addresses_id;

        return $this;
    }

    /**
     * Gets sales_order_email_addresses_id
     *
     * @return string|null
     */
    public function getSalesOrderEmailAddressesId()
    {
        return $this->container['sales_order_email_addresses_id'];
    }

    /**
     * Sets sales_order_email_addresses_id
     *
     * @param string|null $sales_order_email_addresses_id sales_order_email_addresses_id
     *
     * @return self
     */
    public function setSalesOrderEmailAddressesId($sales_order_email_addresses_id)
    {
        if (is_null($sales_order_email_addresses_id)) {
            throw new \InvalidArgumentException('non-nullable sales_order_email_addresses_id cannot be null');
        }
        $this->container['sales_order_email_addresses_id'] = $sales_order_email_addresses_id;

        return $this;
    }

    /**
     * Gets sales_partner
     *
     * @return bool|null
     */
    public function getSalesPartner()
    {
        return $this->container['sales_partner'];
    }

    /**
     * Sets sales_partner
     *
     * @param bool|null $sales_partner sales_partner
     *
     * @return self
     */
    public function setSalesPartner($sales_partner)
    {
        if (is_null($sales_partner)) {
            throw new \InvalidArgumentException('non-nullable sales_partner cannot be null');
        }
        $this->container['sales_partner'] = $sales_partner;

        return $this;
    }

    /**
     * Gets sales_partner_default_commission_fix
     *
     * @return float|null
     */
    public function getSalesPartnerDefaultCommissionFix()
    {
        return $this->container['sales_partner_default_commission_fix'];
    }

    /**
     * Sets sales_partner_default_commission_fix
     *
     * @param float|null $sales_partner_default_commission_fix sales_partner_default_commission_fix
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionFix($sales_partner_default_commission_fix)
    {
        if (is_null($sales_partner_default_commission_fix)) {
            throw new \InvalidArgumentException('non-nullable sales_partner_default_commission_fix cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($sales_partner_default_commission_fix)))) {
            throw new \InvalidArgumentException("invalid value for \$sales_partner_default_commission_fix when calling Party., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['sales_partner_default_commission_fix'] = $sales_partner_default_commission_fix;

        return $this;
    }

    /**
     * Gets sales_partner_default_commission_percentage
     *
     * @return float|null
     */
    public function getSalesPartnerDefaultCommissionPercentage()
    {
        return $this->container['sales_partner_default_commission_percentage'];
    }

    /**
     * Sets sales_partner_default_commission_percentage
     *
     * @param float|null $sales_partner_default_commission_percentage sales_partner_default_commission_percentage
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionPercentage($sales_partner_default_commission_percentage)
    {
        if (is_null($sales_partner_default_commission_percentage)) {
            throw new \InvalidArgumentException('non-nullable sales_partner_default_commission_percentage cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($sales_partner_default_commission_percentage)))) {
            throw new \InvalidArgumentException("invalid value for \$sales_partner_default_commission_percentage when calling Party., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['sales_partner_default_commission_percentage'] = $sales_partner_default_commission_percentage;

        return $this;
    }

    /**
     * Gets sales_partner_default_commission_type
     *
     * @return \kruegge82\weclapp\Model\CommissionType|null
     */
    public function getSalesPartnerDefaultCommissionType()
    {
        return $this->container['sales_partner_default_commission_type'];
    }

    /**
     * Sets sales_partner_default_commission_type
     *
     * @param \kruegge82\weclapp\Model\CommissionType|null $sales_partner_default_commission_type sales_partner_default_commission_type
     *
     * @return self
     */
    public function setSalesPartnerDefaultCommissionType($sales_partner_default_commission_type)
    {
        if (is_null($sales_partner_default_commission_type)) {
            throw new \InvalidArgumentException('non-nullable sales_partner_default_commission_type cannot be null');
        }
        $this->container['sales_partner_default_commission_type'] = $sales_partner_default_commission_type;

        return $this;
    }

    /**
     * Gets sector_id
     *
     * @return string|null
     */
    public function getSectorId()
    {
        return $this->container['sector_id'];
    }

    /**
     * Sets sector_id
     *
     * @param string|null $sector_id sector_id
     *
     * @return self
     */
    public function setSectorId($sector_id)
    {
        if (is_null($sector_id)) {
            throw new \InvalidArgumentException('non-nullable sector_id cannot be null');
        }
        $this->container['sector_id'] = $sector_id;

        return $this;
    }

    /**
     * Gets sector_name
     *
     * @return string|null
     * @deprecated
     */
    public function getSectorName()
    {
        return $this->container['sector_name'];
    }

    /**
     * Sets sector_name
     *
     * @param string|null $sector_name sector_name
     *
     * @return self
     * @deprecated
     */
    public function setSectorName($sector_name)
    {
        if (is_null($sector_name)) {
            throw new \InvalidArgumentException('non-nullable sector_name cannot be null');
        }
        $this->container['sector_name'] = $sector_name;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return bool|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param bool|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        if (is_null($supplier)) {
            throw new \InvalidArgumentException('non-nullable supplier cannot be null');
        }
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets supplier_creditor_account_id
     *
     * @return string|null
     */
    public function getSupplierCreditorAccountId()
    {
        return $this->container['supplier_creditor_account_id'];
    }

    /**
     * Sets supplier_creditor_account_id
     *
     * @param string|null $supplier_creditor_account_id supplier_creditor_account_id
     *
     * @return self
     */
    public function setSupplierCreditorAccountId($supplier_creditor_account_id)
    {
        if (is_null($supplier_creditor_account_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_creditor_account_id cannot be null');
        }
        $this->container['supplier_creditor_account_id'] = $supplier_creditor_account_id;

        return $this;
    }

    /**
     * Gets supplier_creditor_account_number
     *
     * @return string|null
     * @deprecated
     */
    public function getSupplierCreditorAccountNumber()
    {
        return $this->container['supplier_creditor_account_number'];
    }

    /**
     * Sets supplier_creditor_account_number
     *
     * @param string|null $supplier_creditor_account_number supplier_creditor_account_number
     *
     * @return self
     * @deprecated
     */
    public function setSupplierCreditorAccountNumber($supplier_creditor_account_number)
    {
        if (is_null($supplier_creditor_account_number)) {
            throw new \InvalidArgumentException('non-nullable supplier_creditor_account_number cannot be null');
        }
        $this->container['supplier_creditor_account_number'] = $supplier_creditor_account_number;

        return $this;
    }

    /**
     * Gets supplier_creditor_accounting_code_id
     *
     * @return string|null
     */
    public function getSupplierCreditorAccountingCodeId()
    {
        return $this->container['supplier_creditor_accounting_code_id'];
    }

    /**
     * Sets supplier_creditor_accounting_code_id
     *
     * @param string|null $supplier_creditor_accounting_code_id supplier_creditor_accounting_code_id
     *
     * @return self
     */
    public function setSupplierCreditorAccountingCodeId($supplier_creditor_accounting_code_id)
    {
        if (is_null($supplier_creditor_accounting_code_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_creditor_accounting_code_id cannot be null');
        }
        $this->container['supplier_creditor_accounting_code_id'] = $supplier_creditor_accounting_code_id;

        return $this;
    }

    /**
     * Gets supplier_customer_number_at_supplier
     *
     * @return string|null
     */
    public function getSupplierCustomerNumberAtSupplier()
    {
        return $this->container['supplier_customer_number_at_supplier'];
    }

    /**
     * Sets supplier_customer_number_at_supplier
     *
     * @param string|null $supplier_customer_number_at_supplier supplier_customer_number_at_supplier
     *
     * @return self
     */
    public function setSupplierCustomerNumberAtSupplier($supplier_customer_number_at_supplier)
    {
        if (is_null($supplier_customer_number_at_supplier)) {
            throw new \InvalidArgumentException('non-nullable supplier_customer_number_at_supplier cannot be null');
        }
        $this->container['supplier_customer_number_at_supplier'] = $supplier_customer_number_at_supplier;

        return $this;
    }

    /**
     * Gets supplier_default_shipping_carrier_id
     *
     * @return string|null
     */
    public function getSupplierDefaultShippingCarrierId()
    {
        return $this->container['supplier_default_shipping_carrier_id'];
    }

    /**
     * Sets supplier_default_shipping_carrier_id
     *
     * @param string|null $supplier_default_shipping_carrier_id supplier_default_shipping_carrier_id
     *
     * @return self
     */
    public function setSupplierDefaultShippingCarrierId($supplier_default_shipping_carrier_id)
    {
        if (is_null($supplier_default_shipping_carrier_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_default_shipping_carrier_id cannot be null');
        }
        $this->container['supplier_default_shipping_carrier_id'] = $supplier_default_shipping_carrier_id;

        return $this;
    }

    /**
     * Gets supplier_internal_note
     *
     * @return string|null
     */
    public function getSupplierInternalNote()
    {
        return $this->container['supplier_internal_note'];
    }

    /**
     * Sets supplier_internal_note
     *
     * @param string|null $supplier_internal_note supplier_internal_note
     *
     * @return self
     */
    public function setSupplierInternalNote($supplier_internal_note)
    {
        if (is_null($supplier_internal_note)) {
            throw new \InvalidArgumentException('non-nullable supplier_internal_note cannot be null');
        }
        $this->container['supplier_internal_note'] = $supplier_internal_note;

        return $this;
    }

    /**
     * Gets supplier_minimum_purchase_order_amount
     *
     * @return float|null
     */
    public function getSupplierMinimumPurchaseOrderAmount()
    {
        return $this->container['supplier_minimum_purchase_order_amount'];
    }

    /**
     * Sets supplier_minimum_purchase_order_amount
     *
     * @param float|null $supplier_minimum_purchase_order_amount supplier_minimum_purchase_order_amount
     *
     * @return self
     */
    public function setSupplierMinimumPurchaseOrderAmount($supplier_minimum_purchase_order_amount)
    {
        if (is_null($supplier_minimum_purchase_order_amount)) {
            throw new \InvalidArgumentException('non-nullable supplier_minimum_purchase_order_amount cannot be null');
        }

        if ((!preg_match("/^([0-9]{1,13})([.][0-9]{1,5})?$/", ObjectSerializer::toString($supplier_minimum_purchase_order_amount)))) {
            throw new \InvalidArgumentException("invalid value for \$supplier_minimum_purchase_order_amount when calling Party., must conform to the pattern /^([0-9]{1,13})([.][0-9]{1,5})?$/.");
        }

        $this->container['supplier_minimum_purchase_order_amount'] = $supplier_minimum_purchase_order_amount;

        return $this;
    }

    /**
     * Gets supplier_non_standard_tax_id
     *
     * @return string|null
     */
    public function getSupplierNonStandardTaxId()
    {
        return $this->container['supplier_non_standard_tax_id'];
    }

    /**
     * Sets supplier_non_standard_tax_id
     *
     * @param string|null $supplier_non_standard_tax_id supplier_non_standard_tax_id
     *
     * @return self
     */
    public function setSupplierNonStandardTaxId($supplier_non_standard_tax_id)
    {
        if (is_null($supplier_non_standard_tax_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_non_standard_tax_id cannot be null');
        }
        $this->container['supplier_non_standard_tax_id'] = $supplier_non_standard_tax_id;

        return $this;
    }

    /**
     * Gets supplier_number
     *
     * @return string|null
     */
    public function getSupplierNumber()
    {
        return $this->container['supplier_number'];
    }

    /**
     * Sets supplier_number
     *
     * @param string|null $supplier_number supplier_number
     *
     * @return self
     */
    public function setSupplierNumber($supplier_number)
    {
        if (is_null($supplier_number)) {
            throw new \InvalidArgumentException('non-nullable supplier_number cannot be null');
        }
        $this->container['supplier_number'] = $supplier_number;

        return $this;
    }

    /**
     * Gets supplier_number_old
     *
     * @return string|null
     */
    public function getSupplierNumberOld()
    {
        return $this->container['supplier_number_old'];
    }

    /**
     * Sets supplier_number_old
     *
     * @param string|null $supplier_number_old supplier_number_old
     *
     * @return self
     */
    public function setSupplierNumberOld($supplier_number_old)
    {
        if (is_null($supplier_number_old)) {
            throw new \InvalidArgumentException('non-nullable supplier_number_old cannot be null');
        }
        $this->container['supplier_number_old'] = $supplier_number_old;

        return $this;
    }

    /**
     * Gets supplier_order_block
     *
     * @return bool|null
     */
    public function getSupplierOrderBlock()
    {
        return $this->container['supplier_order_block'];
    }

    /**
     * Sets supplier_order_block
     *
     * @param bool|null $supplier_order_block supplier_order_block
     *
     * @return self
     */
    public function setSupplierOrderBlock($supplier_order_block)
    {
        if (is_null($supplier_order_block)) {
            throw new \InvalidArgumentException('non-nullable supplier_order_block cannot be null');
        }
        $this->container['supplier_order_block'] = $supplier_order_block;

        return $this;
    }

    /**
     * Gets supplier_payment_method_id
     *
     * @return string|null
     */
    public function getSupplierPaymentMethodId()
    {
        return $this->container['supplier_payment_method_id'];
    }

    /**
     * Sets supplier_payment_method_id
     *
     * @param string|null $supplier_payment_method_id supplier_payment_method_id
     *
     * @return self
     */
    public function setSupplierPaymentMethodId($supplier_payment_method_id)
    {
        if (is_null($supplier_payment_method_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_payment_method_id cannot be null');
        }
        $this->container['supplier_payment_method_id'] = $supplier_payment_method_id;

        return $this;
    }

    /**
     * Gets supplier_payment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getSupplierPaymentMethodName()
    {
        return $this->container['supplier_payment_method_name'];
    }

    /**
     * Sets supplier_payment_method_name
     *
     * @param string|null $supplier_payment_method_name supplier_payment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setSupplierPaymentMethodName($supplier_payment_method_name)
    {
        if (is_null($supplier_payment_method_name)) {
            throw new \InvalidArgumentException('non-nullable supplier_payment_method_name cannot be null');
        }
        $this->container['supplier_payment_method_name'] = $supplier_payment_method_name;

        return $this;
    }

    /**
     * Gets supplier_shipment_method_id
     *
     * @return string|null
     */
    public function getSupplierShipmentMethodId()
    {
        return $this->container['supplier_shipment_method_id'];
    }

    /**
     * Sets supplier_shipment_method_id
     *
     * @param string|null $supplier_shipment_method_id supplier_shipment_method_id
     *
     * @return self
     */
    public function setSupplierShipmentMethodId($supplier_shipment_method_id)
    {
        if (is_null($supplier_shipment_method_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_shipment_method_id cannot be null');
        }
        $this->container['supplier_shipment_method_id'] = $supplier_shipment_method_id;

        return $this;
    }

    /**
     * Gets supplier_shipment_method_name
     *
     * @return string|null
     * @deprecated
     */
    public function getSupplierShipmentMethodName()
    {
        return $this->container['supplier_shipment_method_name'];
    }

    /**
     * Sets supplier_shipment_method_name
     *
     * @param string|null $supplier_shipment_method_name supplier_shipment_method_name
     *
     * @return self
     * @deprecated
     */
    public function setSupplierShipmentMethodName($supplier_shipment_method_name)
    {
        if (is_null($supplier_shipment_method_name)) {
            throw new \InvalidArgumentException('non-nullable supplier_shipment_method_name cannot be null');
        }
        $this->container['supplier_shipment_method_name'] = $supplier_shipment_method_name;

        return $this;
    }

    /**
     * Gets supplier_term_of_payment_id
     *
     * @return string|null
     */
    public function getSupplierTermOfPaymentId()
    {
        return $this->container['supplier_term_of_payment_id'];
    }

    /**
     * Sets supplier_term_of_payment_id
     *
     * @param string|null $supplier_term_of_payment_id supplier_term_of_payment_id
     *
     * @return self
     */
    public function setSupplierTermOfPaymentId($supplier_term_of_payment_id)
    {
        if (is_null($supplier_term_of_payment_id)) {
            throw new \InvalidArgumentException('non-nullable supplier_term_of_payment_id cannot be null');
        }
        $this->container['supplier_term_of_payment_id'] = $supplier_term_of_payment_id;

        return $this;
    }

    /**
     * Gets supplier_term_of_payment_name
     *
     * @return string|null
     * @deprecated
     */
    public function getSupplierTermOfPaymentName()
    {
        return $this->container['supplier_term_of_payment_name'];
    }

    /**
     * Sets supplier_term_of_payment_name
     *
     * @param string|null $supplier_term_of_payment_name supplier_term_of_payment_name
     *
     * @return self
     * @deprecated
     */
    public function setSupplierTermOfPaymentName($supplier_term_of_payment_name)
    {
        if (is_null($supplier_term_of_payment_name)) {
            throw new \InvalidArgumentException('non-nullable supplier_term_of_payment_name cannot be null');
        }
        $this->container['supplier_term_of_payment_name'] = $supplier_term_of_payment_name;

        return $this;
    }

    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id tax_id
     *
     * @return self
     */
    public function setTaxId($tax_id)
    {
        if (is_null($tax_id)) {
            throw new \InvalidArgumentException('non-nullable tax_id cannot be null');
        }
        $this->container['tax_id'] = $tax_id;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return \kruegge82\weclapp\Model\Entity[]|null
     * @deprecated
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param \kruegge82\weclapp\Model\Entity[]|null $topics topics
     *
     * @return self
     * @deprecated
     */
    public function setTopics($topics)
    {
        if (is_null($topics)) {
            throw new \InvalidArgumentException('non-nullable topics cannot be null');
        }
        $this->container['topics'] = $topics;

        return $this;
    }

    /**
     * Gets vat_identification_number
     *
     * @return string|null
     */
    public function getVatIdentificationNumber()
    {
        return $this->container['vat_identification_number'];
    }

    /**
     * Sets vat_identification_number
     *
     * @param string|null $vat_identification_number vat_identification_number
     *
     * @return self
     */
    public function setVatIdentificationNumber($vat_identification_number)
    {
        if (is_null($vat_identification_number)) {
            throw new \InvalidArgumentException('non-nullable vat_identification_number cannot be null');
        }
        $this->container['vat_identification_number'] = $vat_identification_number;

        return $this;
    }

    /**
     * Gets x_rechnung_leitweg_id
     *
     * @return string|null
     */
    public function getXRechnungLeitwegId()
    {
        return $this->container['x_rechnung_leitweg_id'];
    }

    /**
     * Sets x_rechnung_leitweg_id
     *
     * @param string|null $x_rechnung_leitweg_id x_rechnung_leitweg_id
     *
     * @return self
     */
    public function setXRechnungLeitwegId($x_rechnung_leitweg_id)
    {
        if (is_null($x_rechnung_leitweg_id)) {
            throw new \InvalidArgumentException('non-nullable x_rechnung_leitweg_id cannot be null');
        }
        $this->container['x_rechnung_leitweg_id'] = $x_rechnung_leitweg_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


