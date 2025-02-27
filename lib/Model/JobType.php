<?php
/**
 * JobType
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
 * # Getting Started   API Version:     [v1](v1.html)   The weclapp REST API lets you integrate weclapp with other applications or services.  The specification for this version can be downloaded here:  | Format                          | Public                                                                           | |---------------------------------|----------------------------------------------------------------------------------| | swagger JSON                    | <a href=\"swagger.json\" download=\"weclapp-swagger.json\">Download</a> | | OpenApi 3 JSON                  | <a href=\"openapi_v2.json\" download=\"weclapp-openapi.json\">Download</a> | | OpenApi 3 YAML (with user docs) | <a href=\"openapi_v2.yaml\" download=\"weclapp-openapi.yaml\">Download</a> |    ## What should I know before starting?  Our API is continuously being developed and improved, but we are still trying to keep it as stable as possible. We try to only have changes that are backwards compatible: usually the changes are only additions, e.g. new resources are implemented or new properties are added to existing resources. Sometimes breaking changes cannot be avoided, e.g. when a new feature requires an incompatible change to the underlying data model, all those changes will be documented in the change log.  ## Security and Authentication  You must be a verified user to make API requests. You can authorize against the API with an API token. The token is configurable in your weclapp account under **My settings > API**. Authentication is possible in multiple ways: If the request contains the session cookies of a logged in weclapp session then the user and permissions of that session are used. This is useful when testing the API in a web browser, because then requests are “automatically” authenticated if weclapp is used in another tab. But generally the API is not used from a browser or with session cookies, instead there is an API token for each user that can be used to authenticate requests. Each user can find his/her token on the \"My Settings page\". The token should be kept secret like a password. A user can also generate a new token at any time, doing that invalidates all previous tokens. Authenticating using a token is possible in two ways:  * the token can be sent using the AuthenticationToken header `AuthenticationToken: {api_token}` * the standard HTTP Basic authentication can be used: the username needs to be `“*”` and the password is the token  ## Using curl  ```bash curl --compressed -H \"AuthenticationToken:{api_token}\" \"https://<TENANT>.weclapp.com/webapp/api/v2\" ... ```  Examples of how to use curl will be shown in each section of this API.  ## Headers  This is a JSON-only API. You must supply a `Content-Type: application/json` header on PUT and POST operations. You must set a `Accept: application/json` header on all requests. You may get a `text/plain` response in case of error, e.g. in case of a bad request, you should treat this as an error you need to take action on.  To reduce traffic the weclapp API works with [compression](https://developer.mozilla.org/en-US/docs/Web/HTTP/Compression#end-to-end_compression). This means, a client should always submit the header “Accept-Encoding: gzip”. If this header is not set, the API will enforce compression and respond with \"Content-Encoding: gzip\".  Please also make sure to set a `User-Agent` header for all automated requests, as that makes it much easier to identify misbehaving clients.  ## URLs  The base URL for the API is `https://<TENANT>.weclapp.com/webapp/api/v2/` where `<TENANT>.weclapp.com` is the domain of the specific weclapp instance. So each weclapp instance has its own API endpoints which allow accessing data for that particular instance. The API provides access to various resources like customers, sales orders, articles etc.. Each of those resources implements a common set of operations. The URLs and HTTP methods for the different resource operations use the same pattern for all resources:  | Operation                     | HTTP Method | URL pattern                                                           | |-------------------------------|-------------|-----------------------------------------------------------------------| | Query/list instances          | GET         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>`       | | total number of instances     | GET         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/count` | | Get a specific instance by id | GET         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>` | | Create a new instance         | POST        | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>`       | | Update a specific instance    | PUT         | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>` | | Delete a specific instance    | DELETE      | `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>` |  Not all resources support all of those operations. A general description for each operation can be found in API operations by example, and details for each resource are described on the page for that resource.  ## Additional operations  Some resources allow further operations or actions. Those operations can be executed with a POST request, for some operations that only read data it is also possible to use a GET request (this is documented for each operation). For general operations for a resource the URL pattern is `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/<operation>`. Some operations are instance specific, those use the following URL pattern: `https://<TENANT>.weclapp.com/webapp/api/v2/<resource>/id/<id>/<operation>`.      ## JSON  | Type                 | Representation in JSON                                                                                                                                                                                                                                                                                                                                                                         | |----------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | string               | Serialized as JSON string, empty strings (length 0 or only whitespace) are always interpreted as null, it is not possible to have a property with an empty string value.                                                                                                                                                                                                                       | | boolean              | Serialized as `true` / `false`.                                                                                                                                                                                                                                                                                                                                                                | | decimal number       | Most numbers in weclapp are decimal numbers with a fixed precision and scale (e.g. quantities or prices), they are serialized as JSON strings and not as JSON numbers to prevent accidental loss of precision when the JSON is deserialized with a JSON library that uses doubles to represent JSON numbers. The serialized numbers always use a “.” as the decimal mark (if one is required). | | integers             | Integer numbers (that can safely be represented as a double) are serialized as JSON numbers.                                                                                                                                                                                                                                                                                                   | | floats/doubles       | Serialized as JSON numbers.                                                                                                                                                                                                                                                                                                                                                                    | | dates and timestamps | Serialized as the milliseconds since 1970-01-01T00:00:00Z (as a JSON number).                                                                                                                                                                                                                                                                                                                  | | enums                | Sometimes a property value can be one of a fixed number of named options. Those enum properties are serialized as a JSON string with the name of the option.                                                                                                                                                                                                                                   |  The deserialization of data sent to the API is relatively lenient, for example when a string is expected, but a number is given then that number is used as the string and the other way around (if possible). Properties with the value null are not serialized by default and when sending data to the API it is also not necessary to include properties whose value is null: all properties that are missing from the JSON object but are expected are assumed to be `null`. To get all properties including those with the value null the query parameter `serializeNulls` can be added to the request URL, in that case null values are included in the response.    ## Error Responses  Any request on the weclapp API may return an error response, with a structure conforming to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807). See the [API error reference](#errors) section for details.      ## Change Policy  weclapp may modify the attributes and resources available to the API and our policies related to access and use of the API from time to time without advance notice. weclapp will use commercially reasonable efforts to notify you of any modifications to the API or policies through notifications or posts on the weclapp Developer Website. weclapp also tracks deprecation of attributes of the API on its Changelog. Modification of the API may have an adverse effect on weclapp Applications, including but not limited to changing the manner in which weclapp Applications communicate with the API and display or transmit Your Data. weclapp will not be liable to you or any third party for such modifications or any adverse effects resulting from such modifications    # API newsletter  Sign up here for our [API newsletter](https://340d89eb.sibforms.com/serve/MUIEAEREP3buQMWpwPwuVohmsPBikdVQIilNQeZ2DJBE5NZePFYqyp_62WSheCC5t_Q7eJ6SVpZBauqRY93L8L8Iquik5gaH40Bi0uOtPioS7U7k4JvemqVuSdvEV0A3DgygC5LOAv-kjuN4Ij5MUqzm5DSHYbmKvGucHMXpZMFGGA5Lwi5VUv6ZZbROGqZJCrGfYFxGttzVBqc_). We will inform you regularly about planned API changes.   # API operations sample  As mentioned previously all resources implement common operations in the same way. In the following all the common operations are explained for the `customer` resource. The operations work in the same way for all other resources (some resources don’t support all the operations), the differences between the resources are mostly the data and the properties that are required and used.  ## Querying  The most common operation is querying or listing the existing entity instances. This is possible with a `GET` request to the base URL of a resource:    ### `GET /customer`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"primeAddress\": true,           \"street1\": \"Mustergasse 7\",           \"zipcode\": \"80331 \"         }       ],       \"blocked\": false,       \"company\": \"Muster GmbH\",       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"primeAddress\": true,               \"street1\": \"Fasanenweg 15\",               \"zipcode\": \"80331\"             }           ],           \"createdDate\": 1496828882837,           \"email\": \"mustermann@beispiel.de\",           \"firstName\": \"Max\",           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1496828973904,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1006\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496828996212,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  In this case there is one sales order with one order item. By default, all null values are omitted, to include them the query parameter serializeNulls can be used:    ### `GET /customer?serializeNulls`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?serializeNulls\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"4342\",       \"version\": \"1\",       \"addresses\": [         {           \"id\": \"4344\",           \"version\": \"0\",           \"city\": \"München\",           \"company\": null,           \"company2\": null,           \"countryCode\": \"DE\",           \"createdDate\": 1496828973904,           \"deliveryAddress\": false,           \"globalLocationNumber\": null,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496828973903,           \"postOfficeBoxCity\": null,           \"postOfficeBoxNumber\": null,           \"postOfficeBoxZipCode\": null,           \"primeAddress\": true,           \"state\": null,           \"street1\": \"Mustergasse 7\",           \"street2\": null,           \"zipcode\": \"80331 \"         }       ],       \"amountInsured\": null,       \"annualRevenue\": null,       \"birthDate\": null,       \"blockNotice\": null,       \"blocked\": false,       \"commercialLanguageId\": null,       \"company\": \"Muster GmbH\",       \"company2\": null,       \"contacts\": [         {           \"id\": \"4332\",           \"version\": \"1\",           \"addresses\": [             {               \"id\": \"4334\",               \"version\": \"0\",               \"city\": \"München\",               \"company\": null,               \"company2\": null,               \"countryCode\": \"DE\",               \"createdDate\": 1496828882836,               \"deliveryAddress\": false,               \"globalLocationNumber\": null,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1496828882836,               \"postOfficeBoxCity\": null,               \"postOfficeBoxNumber\": null,               \"postOfficeBoxZipCode\": null,               \"primeAddress\": true,               \"state\": null,               \"street1\": \"Fasanenweg 15\",               \"street2\": null,               \"zipcode\": \"80331\"             }           ],           \"birthDate\": null,           \"company\": null,           \"company2\": null,           \"createdDate\": 1496828882837,           \"customAttributes\": null,           \"description\": null,           \"email\": \"mustermann@beispiel.de\",           \"fax\": null,           \"firstName\": \"Max\",           \"fixPhone2\": null,           \"lastModifiedDate\": 1496828996245,           \"lastName\": \"Mustermann\",           \"middleName\": null,           \"mobilePhone1\": null,           \"mobilePhone2\": null,           \"partyType\": \"PERSON\",           \"personCompany\": \"Muster GmbH\",           \"personDepartment\": null,           \"personRole\": null,           \"phone\": null,           \"phoneHome\": null,           \"salutation\": \"MR\",           \"title\": null,           \"website\": null         }       ],       \"createdDate\": 1496828973904,       \"creditLimit\": null,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\",           \"booleanValue\": null,           \"dateValue\": null,           \"numberValue\": null,           \"selectedValueId\": null,           \"selectedValues\": null,           \"stringValue\": null         }       ],       \"customerCategoryId\": null,       \"customerCategoryName\": null,       \"customerNumber\": \"C1006\",       \"customerRating\": null,       \"customerTopics\": [],       \"defaultHeaderDiscount\": null,       \"defaultHeaderSurcharge\": null,       \"deliveryBlock\": false,       \"description\": null,       \"email\": null,       \"fax\": null,       \"firstName\": null,       \"insolvent\": false,       \"insured\": false,       \"invoiceContactId\": null,       \"lastModifiedDate\": 1496828996212,       \"lastName\": null,       \"leadSourceId\": null,       \"leadSourceName\": null,       \"middleName\": null,       \"mobilePhone1\": null,       \"oldCustomerNumber\": null,       \"optIn\": false,       \"parentPartyId\": null,       \"partyType\": \"ORGANIZATION\",       \"paymentMethodId\": null,       \"paymentMethodName\": null,       \"personCompany\": null,       \"personDepartment\": null,       \"personRole\": null,       \"phone\": null,       \"primaryContactId\": null,       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"sales@weclapp.com\",       \"salesChannel\": \"NET1\",       \"salutation\": null,       \"satisfaction\": null,       \"sectorId\": null,       \"sectorName\": null,       \"shipmentMethodId\": null,       \"shipmentMethodName\": null,       \"termOfPaymentId\": null,       \"termOfPaymentName\": null,       \"title\": null,       \"useCustomsTariffNumber\": false,       \"vatRegistrationNumber\": null,       \"website\": null     }   ] } ```  ## Pagination By default the operation will not return all entity instances but only the first 100, this can be changed by using the `pageSize` query parameter with the number of desired results. But `pageSize` cannot be arbitrarily high it is usually limited 1000 (exceptions to the default limits of 100 and 1000 are noted in the documentation for the specific resources). To get further results it is necessary to skip entity instances, this is done using the `page` query parameter. Examples:    ### `GET /customer?pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?pageSize=10\" ```  returns at most 10 instances  ### `GET /customer?page=2&pageSize=10`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?page=2&pageSize=10\" ```  returns the second page of results (the `page` parameter is one based, so `page=1` is the first page, which is also the default). Using those two parameters it is possible to implement pagination.  ## Sorting  It is also possible to change the order of the returned results using the `sort` parameter:  ### `GET /customer?sort=lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?sort=lastModifiedDate\" ```  sort by `lastModifiedDate` (ascending).  ### `GET /customer?sort=-lastModifiedDate`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?sort=-lastModifiedDate\" ```  sort by `lastModifiedDate` descending.  ### `GET /customer?sort=lastModifiedDate,-salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?sort=lastModifiedDate,-salesChannel\" ```  sort by `lastModifiedDate` (ascending) and then `salesChannel` descending.   It is generally possible to sort by most of the simple properties of an entity. It is possible to combine multiple sort orders by combining the property names with a comma. To sort in descending order just prepend a minus to the property name. If an unsupported or unknown property is specified then an error response is returned.  ## Filtering  It is often desired to get just a subset of the data, for example just the orders of a specific customer or created after a specific date. This is possible using filtering query parameters:    ### `GET /customer?salesChannel-eq=NET1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?salesChannel-eq=NET1\" ```  customers for `salesChannel` `NET1`.  ### `GET /customer?createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?createdDate-gt=1398436281262\" ```  customers created after the specified timestamp.  ### `GET /customer?salesChannel-eq=NET1&createdDate-gt=1398436281262`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?salesChannel-eq=NET1&createdDate-gt=1398436281262\" ```  customers for `salesChannel` `NET1` and created after the specified timestamp.  ### `GET /customer?customAttribute4587-eq=NEW`  ```bash curl --compressed -H \"\"\"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?customAttribute4587-eq=NEW\" ```  customers with the value `NEW` for `customAttribute` with id 4587.  ### `GET /customer?customAttribute4587.entityReferences.entityId-eq=1234`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\"   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?customAttribute4587.entityReferences.entityId-eq=1234\" ```  customers with an entity reference to an entity with the id 1234 for the `customAttribute` with the id 4587.  ### `GET /customAttributeDefinitions`  All attributeTypes are supported except `MULTISELECT_LIST`. CustomAttributes of attributeType `LIST` could be filtered by `customAttribute{customAttributeId}.id` or `customAttribute{customAttributeId}.value`.  ### `GET /customer?customAttribute3387.value-eq=OPTION1`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?customAttribute3387.value-eq=OPTION1\" ```  customers with value `OPTION1` for `customAttribute` with id 3387.  A filtering query parameter consists of a property name and a filter operator joined together with a minus. If multiple filtering query parameter are specified then they are combined and the returned results match all of them. Filtering query parameters for unknown properties or properties that don’t support filtering are silently ignored.  The following filtering operators are supported (not all of them work for all property types):  | Operator | Meaning                                                                                                                                                                                     | |----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | eq       | equal                                                                                                                                                                                       | | ne       | not equal                                                                                                                                                                                   | | lt       | less than                                                                                                                                                                                   | | gt       | greater than                                                                                                                                                                                | | le       | less equal                                                                                                                                                                                  | | ge       | greater equal                                                                                                                                                                               | | null     | property is null (the query parameter value is ignored and can be omitted)                                                                                                                  | | notnull  | property is not null (the query parameter value is ignored and can be omitted)                                                                                                              | | like     | like expression (supports `%` and `_` as placeholders, similar to SQL LIKE)                                                                                                                 | | notlike  | not like expression                                                                                                                                                                         | | ilike    | like expression, ignoring case                                                                                                                                                              | | notilike | not like expression, ignoring case                                                                                                                                                          | | in       | the property value is in the specified list of values, the query parameter value must be a JSON array with the values in the correct type, for example `?customerNumber-in=[\"1006\",\"1007\"]` | | notin    | the property value is not in the specified list of values                                                                                                                                   |  ## \"Or\" condition filtering  In addition to the default behavior of linking filter expressions via \"and\" you can also link individual filter expressions via \"or\" by prefixing their parameter name with \"or-\":   ### `GET /customer?or-name-eq=charlie&or-name-eq=chaplin`   ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?or-name-eq=charlie&or-name-eq=chaplin\" ```  The above example is the equivalent of the expression `(name equals \"charlie\") or (name equals \"chaplin\")`   For combining `or` and `and` clauses you may also group `or` expressions by using `or<groupname>-` instead of the plain `or-` prefix:   ### `GET /customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?orGroup1-name-eq=charlie&orGroup1-name-eq=chaplin&orGroup2-responsibleUserUsername-eq=mrtest&orGroup2-referenceNumber=4711&commercialLanguageId-eq=12\" ```  The above example is the equivalent of the expression  ``` ((name equals charlie) or (name equals chaplin)) and ((responsibleUserUsername equals \"mrtest\") or (referenceNumber equals \"4711\")) and (commercialLanguageId equals \"12\") ```  Technically, the default \"or-\" variant is just a special case of this, using the empty String as group name.  ## Filter Expressions  **Warning: This is still a beta feature.**  In addition to individual filter properties it is also possible to specify complex filter expressions that can combine multiple conditions and express relations between properties. Example:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   https://<TENANT>.weclapp.com/webapp/api/v2/party \\   --get \\   --data-urlencode 'filter=(lower(contacts.firstName + \" \" + contacts.lastName) = \"Ertan Özdil\") and (lastModifiedDate >= \"2022-01-01T00:00:00Z\")' ```  * \"filter\" parameters are ANDed with other filter parameters * Property references in filter expressions have exactly the same form and semantics as for the individual filter parameters. * Multiple \"filter\" parameters may be used if needed.  ### Examples  Some more example filter expressions:  ```sql -- enum literals are specified as string literals (salesChannel in [\"NET1\", \"NET4\", \"NET5\"]) and (partyType = \"ORGANIZATION\")  -- normal arithmetic operations are supported. (unitPrice + unitPrice * salesTax) <= 49.99  -- elementary functions length(trim(notes)) <= 140  -- conditions can be combined with logical operators (not (contacts.firstName null)) or (currencyId = 4711) ```  ### Availabe Operations   ### arihmetic  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  addition | + | integer, float, string | integer, float, string | Addition of two numerical values or concatenation of two strings | |  subtraction | - | integer, float | integer, float |  | |  multiplication | * | integer, float | integer, float |  | |  division | / | integer, float | integer, float |  | |  negation | - | --- | integer, float |  |   ### comparison  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  equals | = | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  not equals | != | integer, float, string, boolean, date, enum | integer, float, string, boolean, date, enum |  | |  less than | < | integer, float, date | integer, float, date |  | |  greater than | > | integer, float, date | integer, float, date |  | |  Less than or equals | <= | integer, float, date | integer, float, date |  | |  Greater than or equals | >= | integer, float, date | integer, float, date |  | |  Pattern matching | ~ | string | string | Supports % and _ as placeholders, similar to SQL LIKE | |  Alternatives match | in | integer, float, string, boolean, date, enum | list | Value is one of the given alternatives | |  Property is null | null | integer, float, string, boolean, date, enum | --- |  |   ### logical  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  and | and | boolean | boolean |  | |  or | or | boolean | boolean |  | |  not | not | --- | boolean |  |   ### function  | Operation                | Operator(s)             | Allowed Types (left operand)   | Allowed Types (right operand)   | Notes                 | |--------------------------|-------------------------|--------------------------------|---------------------------------|-----------------------| |  trim | trim | --- | string | Remove whitespace from both ends of a string | |  length | length | --- | string | Get the number of characters in a string | |  lower | lower | --- | string | Convert a string to lower case |   ### Type Coercion  Literals in the expression are interpreted as different types depending on their context:  * An `integer` literal being compared to a `date` property is interpreted as milliseconds since Epoch * A `string` literal being compared to a `date` property is interpreted as [ISO-8601 point in time](https://en.wikipedia.org/wiki/ISO_8601#Combined_date_and_time_representations) with optional milliseconds and required time zone. Examples:   * `2024-10-13T10:39:12+02:00`   * `2024-10-13T10:39:12.443+02:00`   * `2024-10-13T10:39:12Z`   * `2024-10-13T10:39:12+02:00` * A `string` literal being compared to an `enum` property is interpreted as enum constant * ID properties (i.e. properties named `id` or `<something>Id`) can be compared to both integer and string literals  ## Return only specific properties  Sometimes it is desirable to only fetch a subset of all properties, for example to save bandwidth. This is possible by specifying the desired properties using the `properties` query parameter:  ### `GET /customer?properties=id,customerNumber,salesChannel`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?properties=id,customerNumber,salesChannel\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```  It is also possible to specify property paths:  ### `GET /customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer?properties=id,customerNumber,salesChannel,contacts.id,contacts.lastName\" ```  If an unknown property or property path is specified then an error response is returned.  ```json {   \"result\": [     {       \"id\": \"3346\",       \"contacts\": [         {           \"id\": \"3731\",           \"lastName\": \"Mustermann\"         }       ],       \"customerNumber\": \"C1002\",       \"salesChannel\": \"NET1\"     }   ] } ```   ## Combinations  The query parameters for pagination, sorting, filtering and returning only specific properties can be combined to perform queries.   ## Counting  To determine the total number of entity instances the count operation can be used:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/count\" ```  It is possible to use the filtering query parameters from the querying operation with the count operation:  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/count?salesChannel-eq=NET1\" ```  returns the number of customers for `salesChannel` `NET1`.   ## Referenced entities  The API offers the possibility to get the referenced entities for a query result in the same request. This way you can save subsequent requests and get all necessary and referenced data in one request. This feature can be used by simply specifying the parameter `includeReferencedEntities` and the primary key references as comma separated list. The API response will contain an additional object `referencedEntities`.   ### `GET /article?includeReferencedEntities=unitId,articleCategoryId`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/article?includeReferencedEntities=unitId,articleCategoryId&properties=id,name,unitId,articleCategoryId\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3235\",       \"name\": \"Testartikel 1\",       \"unitId\": \"2770\"     },     {       \"id\": \"3236\",       \"name\": \"Testartikel 2\",       \"unitId\": \"2770\"     },     {       \"id\": \"3237\",       \"articleCategoryId\": \"7035\",       \"name\": \"Testartikel 3\",       \"unitId\": \"2770\"     }   ],   \"referencedEntities\": {     \"unit\": [       {         \"id\": \"2770\",         \"version\": \"0\",         \"createdDate\": 1597915605986,         \"description\": \"Stück\",         \"lastModifiedDate\": 1597915605985,         \"name\": \"Stk.\"       }     ],     \"articleCategory\": [       {         \"id\": \"7035\",         \"version\": \"0\",         \"createdDate\": 1619778730348,         \"lastModifiedDate\": 1619778730348,         \"name\": \"Demo-Gruppe\"       }     ]   } } ```  ## Additional properties  In addition to the common properties, there are additional properties that can be optionally queried. These are calculated or complexly determined and must therefore be explicitly queried.  To use this function, only the parameter `additionalProperties` and the names of the additional properties must be specified as a comma-separated list. The response then contains the additional object `additionalProperties` with the property and an array of values. The index of the value object in this list also represents the reference to the respective entity.   ### `GET /article?additionalProperties=currentSalesPrice`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   \"https://<TENANT>.weclapp.com/webapp/api/v2/article?additionalProperties=currentSalesPrice\" ```  **Output:**  ```json {   \"additionalProperties\": {     \"currentSalesPrice\": [       {         \"articleUnitPrice\": \"39.95\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       },       {         \"articleUnitPrice\": \"479.4\",         \"currencyId\": \"256\",         \"quantity\": \"1\",         \"reductionAdditionItems\": []       }     ]   } } ```   ## Dry-Run  Generic `PUT`, `POST` and `DELETE` endpoints support to perform operations in a \"dry-run-mode\". Where possible, business logic is executed and the data submitted by the requester is validated. To use this functionality the requester can set the optional query parameter \"`dryRun`\" (boolean, default: `false`). The return is as far as possible as with a productive execution, except that 200 \"ok\" is returned in case of success. The meta properties (id, version, createdDate, lastModifiedDate) are not included in \"dry-run-responses\".  ### `POST /salesOrder?dryRun=true`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v2/salesOrder?dryRun=true\" \\   -d   '{ \"customerNumber\": \"4799\" }' ```  **Error Output:**  ```json {   \"detail\": \"customer not found\",   \"error\": \"customer not found\",   \"status\": 400,   \"title\": \"entity validation failed\",   \"type\": \"/webapp/view/api/errors.html#!/errors/validation\",   \"validationErrors\": [     {       \"detail\": \"referenced entity not found\",       \"instance\": \"salesOrder\",       \"location\": \"customerId\",       \"title\": \"referenced entity not found\",       \"type\": \"/webapp/view/api/errors.html#!/validation/reference\"     }   ] } ```  The response status will be 400 (Bad Request).  **Successful Output:**  ```json {   \"availability\": \"NOT_CHECKED\",   \"availabilityForAllWarehouses\": \"NOT_CHECKED\",   \"commissionSalesPartners\": [],   \"creatorId\": \"4451\",   \"currencyConversionDate\": 1699375721469,   \"currencyConversionRate\": \"1\",   \"customAttributes\": [],   \"customerId\": \"4799\",   \"customerNumber\": \"10000\",   \"deliveryAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"deliveryEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"disableEmailTemplate\": false,   \"dispatchCountryCode\": \"DE\",   \"factoring\": false,   \"fulfillmentProviderId\": \"3335\",   \"grossAmount\": \"0\",   \"grossAmountInCompanyCurrency\": \"0\",   \"headerDiscount\": \"0\",   \"headerSurcharge\": \"0\",   \"invoiceAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"invoiced\": false,   \"netAmount\": \"0\",   \"netAmountInCompanyCurrency\": \"0\",   \"nonStandardTaxId\": \"3492\",   \"nonStandardTaxName\": \"DE Steuerfrei Drittland (VK)\",   \"onlyServices\": false,   \"orderDate\": 1699311600000,   \"orderItems\": [],   \"paid\": false,   \"plannedShippingDate\": 1699311600000,   \"pricingDate\": 1699311600000,   \"projectMembers\": [],   \"projectModeActive\": false,   \"recordAddress\": {     \"city\": \"Hithausen\",     \"company\": \"Beispiel AG\",     \"countryCode\": \"DE\",     \"street1\": \"Feldstraße 34\",     \"zipcode\": \"54321\"   },   \"recordCurrencyId\": \"256\",   \"recordCurrencyName\": \"EUR\",   \"recordEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"responsibleUserId\": \"4748\",   \"responsibleUserUsername\": \"karsten.kunde@example.com\",   \"salesChannel\": \"NET1\",   \"salesInvoiceEmailAddresses\": {     \"toAddresses\": \"info@beispielag.de\"   },   \"salesOrderPaymentType\": \"STANDARD\",   \"sentToRecipient\": false,   \"servicesFinished\": false,   \"shipped\": false,   \"shippingCostItems\": [],   \"shippingLabelsCount\": 1,   \"status\": \"ORDER_ENTRY_IN_PROGRESS\",   \"statusHistory\": [     {       \"status\": \"ORDER_ENTRY_IN_PROGRESS\",       \"statusDate\": 1699375721472,       \"userId\": \"4451\"     }   ],   \"tags\": [],   \"warehouseId\": \"4191\",   \"warehouseName\": \"Hauptlager\" } ```  The response status will be 200 (OK).   ## Optimistic locking  For the update operation the resources usually also support optimistic locking using the `version` property: if the `version` property is in the request body and it does not match the current `version`, then the request fails with an optimistic lock error. In that case the caller should again get the latest `version`, apply the changes and try the request again.   ## Basic Operations  The following entries will show you how to use the different basic operations (`GET`, `POST`, `PUT`, `DELETE`) and what an exemplary response they will give whether the operation was successful or not.   The following table will show you the HTTP status codes of the basic operations if the operation was successful:  | Operation | HTTP status code | |-----------|------------------| | GET       | 200 (OK)         | | POST      | 201 (Created)    | | PUT       | 200 (OK)         | | DELETE    | 204 (No Content) |  If you are not currently logged in to weclapp, you are using another browser or the AuthenticationToken was wrong you will get a response of `401 (Unauthorized)`. If you have insufficient privileges for the operation you will get a `403 (Forbidden)`. It is possible to disable the optimistic locking check by just omitting the `version` property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Get a specific entity instance  Each entity instance has its own URL where it can be retrieved. The URL is based on the entity id.  Performing a GET request on that URL returns the entity instance:  ### `GET /customer/id/3346`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/3346\" ```  **Output:**  ```json {   \"result\": [     {       \"id\": \"3346\",       \"version\": \"2\",       \"addresses\": [         {           \"id\": \"3348\",           \"version\": \"0\",           \"countryCode\": \"DE\",           \"createdDate\": 1487765943229,           \"deliveryAddress\": false,           \"invoiceAddress\": false,           \"lastModifiedDate\": 1487765943229,           \"primeAddress\": true         },         {           \"id\": \"3976\",           \"version\": \"0\",           \"company\": \"11111\",           \"company2\": \"22222\",           \"countryCode\": \"DE\",           \"createdDate\": 1496040807652,           \"deliveryAddress\": false,           \"globalLocationNumber\": \"gln\",           \"invoiceAddress\": false,           \"lastModifiedDate\": 1496040807648,           \"primeAddress\": false         }       ],       \"blocked\": false,       \"company\": \"Musterdaten GmbH\",       \"contacts\": [         {           \"id\": \"3377\",           \"version\": \"0\",           \"addresses\": [             {               \"id\": \"3379\",               \"version\": \"0\",               \"countryCode\": \"DE\",               \"createdDate\": 1487767121646,               \"deliveryAddress\": false,               \"invoiceAddress\": false,               \"lastModifiedDate\": 1487767121645,               \"primeAddress\": true             }           ],           \"createdDate\": 1487767121649,           \"firstName\": \"Max\",           \"lastModifiedDate\": 1487767121642,           \"lastName\": \"Mustermann\",           \"partyType\": \"PERSON\",           \"personCompany\": \"Musterdaten GmbH\",           \"salutation\": \"MR\"         }       ],       \"createdDate\": 1487765943230,       \"currencyId\": \"248\",       \"currencyName\": \"EUR\",       \"customAttributes\": [         {           \"attributeDefinitionId\": \"4048\"         }       ],       \"customerNumber\": \"C1002\",       \"customerTopics\": [],       \"deliveryBlock\": false,       \"insolvent\": false,       \"insured\": false,       \"lastModifiedDate\": 1496040807672,       \"optIn\": false,       \"partyType\": \"ORGANIZATION\",       \"responsibleUserFixed\": false,       \"responsibleUserId\": \"947\",       \"responsibleUserUsername\": \"@weclapp.com\",       \"salesChannel\": \"NET1\",       \"useCustomsTariffNumber\": false     }   ] } ```  ## Create a new instance  Creating new instances is done by performing a POST request to the base URL of a resource.  The body for that request must have the same structure as the result of the \"get by id\" request, but usually not all properties need to be specified and there are defaults for some properties. Here are some general notes:  * id, version, createdDate and lastModifiedDate can usually not be set by the client, so those values are ignored if they are specified * references to other entities are often represented by two properties (usually id and some other more or less unique property of the referenced entity),   for example customer has currencyId and currencyName to reference the currency, when creating a new customer then it is not necessary   to specify both properties, one of them is usually enough as long as it specifies the referenced entity uniquely, if both are given then they   must not contradict each other * usually some required properties have sensible defaults, so if those are not given or null then the default will be used * boolean properties can be optional (default value would be set) or mandatory   ### `POST /customer`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X POST \"https://<TENANT>.weclapp.com/webapp/api/v2/customer\" \\   -d   '{ \"customerNumber\": \"C1013\", \"partyType\": \"ORGANIZATION\", \"company\": \"Firma\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"Firma\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  The response status will be 201 (Created) and the response will have a `Location` header pointing to the URL of the created instance.   ## Update a specific instance  Updating an instances is done by performing a `PUT` request to the URL of the instance.  A successful response will have the status 200 (OK) and the response body will contain the updated entity.  Some special aspects must be considered when updating:  * the read-only properties like `createdDate` are ignored anyway, so they do not need to be given * `id` and `version` are processed as follows: if the `id` is given it must match the `id` of the updated instance and if the `version` is given then optimistic locking is enabled (see below) * for the references that use two properties it is again possible to specify only one of them, if both are given then they must not contradict each other * for complete entity updates boolean properties are always mandatory and need to be passed  ### Updating the complete entity  When updating it is generally necessary to specify all properties that are not `null`, all unspecified properties will be interpreted as `null`.  Since sometimes new properties are added to entities, it is strongly recommended that an API client always first gets the latest version using `GET/customer/id/{id}`, then modifies that JSON and finally performs the `PUT` request. Doing this ensures that new properties that the client does not know about are not accidentally overwritten with `null`.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/4391\" \\   -d  @- <<JSON {   \"id\": \"4391\",   \"version\": \"0\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496840784270,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } JSON ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```  ### Updating only specific properties  It is also possible to update only specific properties. For this you only have to set the parameter `ignoreMissingProperties=true`. We recommend to always include `version` here as well to activate optimistic locking.  If you want to change lists (add, update or delete an item) stored in the entity, it is sufficient to specify the id for existing item entities.  In this example only the property \"company\" will be updated. All other properties are unchanged.  ### `PUT /customer/id/4391`    ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" \\   -H Content-Type: application/json \\   -X PUT \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/4391?ignoreMissingProperties=true\" \\   -d '{ \"version\": \"0\", \"company\": \"NEUER FIRMENNAME!!!\" }' ```  **Output:**  ```json {   \"id\": \"4391\",   \"version\": \"1\",   \"addresses\": [     {       \"id\": \"4393\",       \"version\": \"0\",       \"countryCode\": \"DE\",       \"createdDate\": 1496840784272,       \"deliveryAddress\": false,       \"invoiceAddress\": false,       \"lastModifiedDate\": 1496840784272,       \"primeAddress\": true     }   ],   \"blocked\": false,   \"company\": \"NEUER FIRMENNAME!!!\",   \"contacts\": [],   \"createdDate\": 1496840784273,   \"currencyId\": \"248\",   \"currencyName\": \"EUR\",   \"customAttributes\": [     {       \"attributeDefinitionId\": \"4048\"     }   ],   \"customerNumber\": \"C1013\",   \"customerTopics\": [],   \"deliveryBlock\": false,   \"insolvent\": false,   \"insured\": false,   \"lastModifiedDate\": 1496842955268,   \"optIn\": false,   \"partyType\": \"ORGANIZATION\",   \"responsibleUserFixed\": false,   \"responsibleUserId\": \"947\",   \"responsibleUserUsername\": \"sales@weclapp.com\",   \"salesChannel\": \"NET1\",   \"useCustomsTariffNumber\": false } ```   ### Optimistic locking   For the update operation the resources usually also support optimistic locking using the version property: if the version property is in the request body and it does not match the current version, then the request fails with an optimistic lock error. In that case the caller should again get the latest version, apply the changes and try the request again. It is possible to disable the optimistic locking check by just omitting the version property, but doing this might accidentally overwrite changes done by another user in the meantime.  ## Delete a specific instance  Deleting an instances is done by performing a `DELETE` request to the URL of the instance.  ### `DELETE /customer/id/{id}`  ```bash curl --compressed -H \"AuthenticationToken:<TOKEN>\" -X DELETE \"https://<TENANT>.weclapp.com/webapp/api/v2/customer/id/4391\" ```  If the deletion is possible it is performed and the response status will be 204 (No Content), otherwise an error response will be returned.  <span id=\"errors\"> </span>  # API error reference  weclapp API errors are basically conformant to [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with some notable differences:  * The migration to the RFC 7807 structure is an ongoing process, so some compatibility mechanisms are in place for now:   * The responses come with \"`Content-Type: application/json`\" instead of \"`Content-Type: application/problem+json`\"   * The \"unstructured\" error responses that have been in use until now are still part of the response JSON, so existing code should work without changes.   * Detail information that _should_ be there according to the new structure may be still missing. This applies especially to all kinds of validation errors. * Two custom fields have been added to the response structure: \"location\" and \"validationErrors\". See the general description below and the individual error descriptions for details on these.  ## Error JSON structure  The error JSON is structured as described in [RFC 7807](https://datatracker.ietf.org/doc/html/rfc7807), with two additional properties:  | Property         | Datatype         | Description                                                                                                                                                                                                                                       | |------------------|------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type             | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.              | | title            | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4).      | | status           | integer          | (RFC7807) The HTTP status code (RFC7231, Section 6) generated by the origin server for this occurrence of the problem.                                                                                                                            | | detail           | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem. This may be missing when the actual detail information either would be security sensitive (e.g. on unexpected errors) or is contained in the validationErrors. | | instance         | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this typically is the URI to the affected entity.                                      | | validationErrors | array of objects | List of found validation errors, with a structure modeled after RFC 7807 as well (see below).                                                                                                                                                     |  Validation errors have a similar structure:  | Property  | Datatype         | Description                                                                                                                                                                                                                                  | |-----------|------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------| | type      | string           | (relative) URI reference that identifies the problem type, pointing to the error description in this document. To technically distinguish individual types of errors it is recommended to only evaluate the part after the last '/'.         | | title     | string           | (RFC7807) A short, human-readable summary of the problem type. It SHOULD NOT change from occurrence to occurrence of the problem, except for purposes of localization (e.g., using proactive content negotiation; see RFC7231, Section 3.4). | | detail    | string           | (RFC7807) A human-readable explanation specific to this occurrence of the problem.                                                                                                                                                           | | errorCode | string           | Unique identifier of the concrete business error                                                                                                                                                                                             | | instance  | string           | (RFC7807) A URI reference that identifies the specific occurrence of the problem. It may or may not yield further information if dereferenced. In weclapp, this is the name of the affected parameter or the URI to the affected entity.     | | location  | string           | The JsonPath location of the affected property.                                                                                                                                                                                              | | allowed   | array of strings | List of allowed values, with semantics dependent on the concrete validation error.                                                                                                                                                           |   ## Error reference   <span id=\"!/errors/context\"></span>  ### \"context\": operation not possible in this context  |            |                                       | |------------|---------------------------------------| | description | The operation is not possible in this context or with the current state of the data                  | | type       | [/webapp/view/api/errors.html#!/errors/context](/webapp/view/api/errors.html#!/errors/context)        | | status     | 409 (Conflict)|  <span id=\"!/errors/conversation\"></span>  ### \"conversation\": existing conversation (parameter 'cid') is not allowed  |            |                                       | |------------|---------------------------------------| | description | The request was sent in the context of a running session, which is not allowed for the (stateless) API                  | | type       | [/webapp/view/api/errors.html#!/errors/conversation](/webapp/view/api/errors.html#!/errors/conversation)        | | status     | 400 (Bad Request)| | detail | human readable information on the conversation |  <span id=\"!/errors/entity_not_found\"></span>  ### \"entity_not_found\": (sub)entity not found  |            |                                       | |------------|---------------------------------------| | description | The specified entity or (more likely) a referenced sub-entity could not be found.                  | | type       | [/webapp/view/api/errors.html#!/errors/entity_not_found](/webapp/view/api/errors.html#!/errors/entity_not_found)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/forbidden\"></span>  ### \"forbidden\": insufficient privileges  |            |                                       | |------------|---------------------------------------| | description | The provided credentials are not sufficient to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/forbidden](/webapp/view/api/errors.html#!/errors/forbidden)        | | status     | 403 (Forbidden)|  <span id=\"!/errors/invalid_json\"></span>  ### \"invalid_json\": invalid json  |            |                                       | |------------|---------------------------------------| | description | The JSON passed in the request body could not be parsed or the body is not JSON at all.                  | | type       | [/webapp/view/api/errors.html#!/errors/invalid_json](/webapp/view/api/errors.html#!/errors/invalid_json)        | | status     | 400 (Bad Request)|  <span id=\"!/errors/not_found\"></span>  ### \"not_found\": resource not found  |            |                                       | |------------|---------------------------------------| | description | The API endpoint / method / entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/errors/not_found](/webapp/view/api/errors.html#!/errors/not_found)        | | status     | 404 (Not Found)|  <span id=\"!/errors/optimistic_lock\"></span>  ### \"optimistic_lock\": optimistic lock error  |            |                                       | |------------|---------------------------------------| | description | Optimistic Lock error. This appears if an entity you tried to modify has been modified by someone else in the meantime. See 'Optimistic Locking' in the 'API operations sample' section of the docs.                  | | type       | [/webapp/view/api/errors.html#!/errors/optimistic_lock](/webapp/view/api/errors.html#!/errors/optimistic_lock)        | | status     | 409 (Conflict)| | instance | URI to affected entity if available |  <span id=\"!/errors/persistence\"></span>  ### \"persistence\": persistence error  |            |                                       | |------------|---------------------------------------| | description | Catchall for persistence related problems that are not covered by more specific errors. In some cases it is sufficient to try again after a short time, but if the problem persists please contact support.                  | | type       | [/webapp/view/api/errors.html#!/errors/persistence](/webapp/view/api/errors.html#!/errors/persistence)        | | status     | 409 (Conflict)|  <span id=\"!/errors/unauthorized\"></span>  ### \"unauthorized\": missing permission  |            |                                       | |------------|---------------------------------------| | description | Authorization or authentication problem                  | | type       | [/webapp/view/api/errors.html#!/errors/unauthorized](/webapp/view/api/errors.html#!/errors/unauthorized)        | | status     | 401 (Unauthorized)|  <span id=\"!/errors/unexpected\"></span>  ### \"unexpected\": unexpected error  |            |                                       | |------------|---------------------------------------| | description | Catchall error for everything that is not covered by more specific errors. This is typically caused by a bug in weclapp.                  | | type       | [/webapp/view/api/errors.html#!/errors/unexpected](/webapp/view/api/errors.html#!/errors/unexpected)        | | status     | 500 (Internal Server Error)|  <span id=\"!/errors/unsupported_mime_type\"></span>  ### \"unsupported_mime_type\": unsupported mime type  |            |                                       | |------------|---------------------------------------| | description | The provided file type is not supported to perform the requested operation                  | | type       | [/webapp/view/api/errors.html#!/errors/unsupported_mime_type](/webapp/view/api/errors.html#!/errors/unsupported_mime_type)        | | status     | 415 (Unsupported Media Type)|  <span id=\"!/errors/validation\"></span>  ### \"validation\": validation failed  |            |                                       | |------------|---------------------------------------| | description | The input (entity properties / URL parameters) is malformed or not allowed in this context                  | | type       | [/webapp/view/api/errors.html#!/errors/validation](/webapp/view/api/errors.html#!/errors/validation)        | | status     | 400 (Bad Request)| | validationErrors | validation errors |  ## Validation error reference   <span id=\"!/validation/authorization\"></span>  ### \"authorization\": no authorization to access property or referenced entity  |            |                                       | |------------|---------------------------------------| | description | The client lacks authorization to access the property or referenced entity                  | | type       | [/webapp/view/api/errors.html#!/validation/authorization](/webapp/view/api/errors.html#!/validation/authorization)        |  <span id=\"!/validation/blocked\"></span>  ### \"blocked\": operation was blocked  |            |                                       | |------------|---------------------------------------| | description | The operation was blocked by referenced entities                  | | type       | [/webapp/view/api/errors.html#!/validation/blocked](/webapp/view/api/errors.html#!/validation/blocked)        |  <span id=\"!/validation/consistency\"></span>  ### \"consistency\": values are inconsistent  |            |                                       | |------------|---------------------------------------| | description | The given values are inconsistent (general, unspecific error)                  | | type       | [/webapp/view/api/errors.html#!/validation/consistency](/webapp/view/api/errors.html#!/validation/consistency)        |  <span id=\"!/validation/digits\"></span>  ### \"digits\": maximum number of digits exceeded  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has more than the allowed maximum number of integer and/or fractional digits                  | | type       | [/webapp/view/api/errors.html#!/validation/digits](/webapp/view/api/errors.html#!/validation/digits)        | | allowed | maximum allowed integer digits, maximum allowed fraction digits |  <span id=\"!/validation/duplicate\"></span>  ### \"duplicate\": entity is a duplicate  |            |                                       | |------------|---------------------------------------| | description | The given (sub-)entity is a duplicate                  | | type       | [/webapp/view/api/errors.html#!/validation/duplicate](/webapp/view/api/errors.html#!/validation/duplicate)        |  <span id=\"!/validation/email\"></span>  ### \"email\": not a well-formed email  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address                  | | type       | [/webapp/view/api/errors.html#!/validation/email](/webapp/view/api/errors.html#!/validation/email)        |  <span id=\"!/validation/email_or_domain\"></span>  ### \"email_or_domain\": not a well-formed email or domain  |            |                                       | |------------|---------------------------------------| | description | The value given is not a well-formed email address or internet domain name                  | | type       | [/webapp/view/api/errors.html#!/validation/email_or_domain](/webapp/view/api/errors.html#!/validation/email_or_domain)        |  <span id=\"!/validation/empty\"></span>  ### \"empty\": value must be empty  |            |                                       | |------------|---------------------------------------| | description | The value given must be left blank in this context, but is present                  | | type       | [/webapp/view/api/errors.html#!/validation/empty](/webapp/view/api/errors.html#!/validation/empty)        |  <span id=\"!/validation/enum\"></span>  ### \"enum\": unsupported enum value  |            |                                       | |------------|---------------------------------------| | description | The given enum value is unknown or unsupported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/enum](/webapp/view/api/errors.html#!/validation/enum)        | | allowed | all known / allowed (enum) values |  <span id=\"!/validation/future\"></span>  ### \"future\": timestamp has to be in the future  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the future but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/future](/webapp/view/api/errors.html#!/validation/future)        |  <span id=\"!/validation/greater_than\"></span>  ### \"greater_than\": value has to be above allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be larger than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/greater_than](/webapp/view/api/errors.html#!/validation/greater_than)        | | allowed | lower limit (excluded) |  <span id=\"!/validation/less_than\"></span>  ### \"less_than\": value has to be below allowed limit  |            |                                       | |------------|---------------------------------------| | description | The numerical value given has to be smaller than the allowed limit                  | | type       | [/webapp/view/api/errors.html#!/validation/less_than](/webapp/view/api/errors.html#!/validation/less_than)        | | allowed | upper limit (excluded) |  <span id=\"!/validation/max\"></span>  ### \"max\": value is above allowed maximum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is larger than the allowed maximum                  | | type       | [/webapp/view/api/errors.html#!/validation/max](/webapp/view/api/errors.html#!/validation/max)        | | allowed | maximum allowed value |  <span id=\"!/validation/min\"></span>  ### \"min\": value is below allowed minimum  |            |                                       | |------------|---------------------------------------| | description | The numerical value given is smaller than the allowed minimum                  | | type       | [/webapp/view/api/errors.html#!/validation/min](/webapp/view/api/errors.html#!/validation/min)        | | allowed | minimum allowed value |  <span id=\"!/validation/not_empty\"></span>  ### \"not_empty\": value must not be empty  |            |                                       | |------------|---------------------------------------| | description | The value given is required, but is missing or blank                  | | type       | [/webapp/view/api/errors.html#!/validation/not_empty](/webapp/view/api/errors.html#!/validation/not_empty)        |  <span id=\"!/validation/past\"></span>  ### \"past\": timestamp has to be in the past  |            |                                       | |------------|---------------------------------------| | description | The given timestamp should be in the past but is not                  | | type       | [/webapp/view/api/errors.html#!/validation/past](/webapp/view/api/errors.html#!/validation/past)        |  <span id=\"!/validation/pattern\"></span>  ### \"pattern\": value has to conform to a specific pattern  |            |                                       | |------------|---------------------------------------| | description | The text given does not conform to the allowed pattern                  | | type       | [/webapp/view/api/errors.html#!/validation/pattern](/webapp/view/api/errors.html#!/validation/pattern)        | | allowed | the pattern (regular expression) |  <span id=\"!/validation/reference\"></span>  ### \"reference\": referenced entity not found  |            |                                       | |------------|---------------------------------------| | description | The referenced entity could not be found                  | | type       | [/webapp/view/api/errors.html#!/validation/reference](/webapp/view/api/errors.html#!/validation/reference)        |  <span id=\"!/validation/size\"></span>  ### \"size\": size is outside allowed range  |            |                                       | |------------|---------------------------------------| | description | The text or collection given has not enough or too many characters or elements                  | | type       | [/webapp/view/api/errors.html#!/validation/size](/webapp/view/api/errors.html#!/validation/size)        | | allowed | minimum size, maximum size |  <span id=\"!/validation/syntax\"></span>  ### \"syntax\": expression cannot be interpreted  |            |                                       | |------------|---------------------------------------| | description | The given expression does not conform to the expression syntax                  | | type       | [/webapp/view/api/errors.html#!/validation/syntax](/webapp/view/api/errors.html#!/validation/syntax)        |  <span id=\"!/validation/type\"></span>  ### \"type\": unexpected data type  |            |                                       | |------------|---------------------------------------| | description | The given value is of a data type that's not supported in this context                  | | type       | [/webapp/view/api/errors.html#!/validation/type](/webapp/view/api/errors.html#!/validation/type)        |
 *
 * The version of the OpenAPI document: 2
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
use \kruegge82\weclapp\ObjectSerializer;

/**
 * JobType Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\weclapp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class JobType
{
    /**
     * Possible values of this enum
     */
    public const ACCOUNTING_DATASTRUCTURE_MIGRATION = 'ACCOUNTING_DATASTRUCTURE_MIGRATION';

    public const ACCOUNTING_EXPORT = 'ACCOUNTING_EXPORT';

    public const ACCOUNT_BALANCES_TRANSFER = 'ACCOUNT_BALANCES_TRANSFER';

    public const ADAPT_SALES_STAGES = 'ADAPT_SALES_STAGES';

    public const AMAZON_ARTICLE_WECLAPP_ARTICLE_FBA_SYNC = 'AMAZON_ARTICLE_WECLAPP_ARTICLE_FBA_SYNC';

    public const AMAZON_ARTICLE_WECLAPP_ARTICLE_SYNC = 'AMAZON_ARTICLE_WECLAPP_ARTICLE_SYNC';

    public const AMAZON_CREATE_REPORTS = 'AMAZON_CREATE_REPORTS';

    public const AMAZON_INVOICE_UPLOAD = 'AMAZON_INVOICE_UPLOAD';

    public const AMAZON_REPORT_SALES_ORDER_FBA_SYNC = 'AMAZON_REPORT_SALES_ORDER_FBA_SYNC';

    public const AMAZON_REPORT_SALES_ORDER_SYNC = 'AMAZON_REPORT_SALES_ORDER_SYNC';

    public const AMAZON_SETTLEMENT_WECLAPP_SYNC = 'AMAZON_SETTLEMENT_WECLAPP_SYNC';

    public const AMAZON_WECLAPP_ARTICLE_FBA_SYNC = 'AMAZON_WECLAPP_ARTICLE_FBA_SYNC';

    public const AMAZON_WECLAPP_ARTICLE_SYNC = 'AMAZON_WECLAPP_ARTICLE_SYNC';

    public const AMAZON_WECLAPP_REPORT_FBA_SYNC = 'AMAZON_WECLAPP_REPORT_FBA_SYNC';

    public const AMAZON_WECLAPP_REPORT_SYNC = 'AMAZON_WECLAPP_REPORT_SYNC';

    public const AMAZON_WECLAPP_SETTLEMENT_SYNC = 'AMAZON_WECLAPP_SETTLEMENT_SYNC';

    public const ARTICLE_DELETION = 'ARTICLE_DELETION';

    public const ARTICLE_KEY_FIGURES_EXPORT = 'ARTICLE_KEY_FIGURES_EXPORT';

    public const ARTICLE_PRICE_TO_AMAZON_REPORT_SYNC = 'ARTICLE_PRICE_TO_AMAZON_REPORT_SYNC';

    public const BREVO_CAMPAIGN_PARTICIPANT_EXPORT = 'BREVO_CAMPAIGN_PARTICIPANT_EXPORT';

    public const BREVO_CONTACT_EXPORT = 'BREVO_CONTACT_EXPORT';

    public const BREVO_CONTACT_IMPORT = 'BREVO_CONTACT_IMPORT';

    public const BREVO_CUSTOMER_EXPORT = 'BREVO_CUSTOMER_EXPORT';

    public const BREVO_LEAD_EXPORT = 'BREVO_LEAD_EXPORT';

    public const CAMPAIGN_EMAIL_SENDING = 'CAMPAIGN_EMAIL_SENDING';

    public const CLEVER_REACH_CAMPAIGN_PARTICIPANT_EXPORT = 'CLEVER_REACH_CAMPAIGN_PARTICIPANT_EXPORT';

    public const CLEVER_REACH_CONTACT_EXPORT = 'CLEVER_REACH_CONTACT_EXPORT';

    public const CLEVER_REACH_CONTACT_IMPORT = 'CLEVER_REACH_CONTACT_IMPORT';

    public const CLEVER_REACH_CUSTOMER_EXPORT = 'CLEVER_REACH_CUSTOMER_EXPORT';

    public const CLEVER_REACH_LEAD_EXPORT = 'CLEVER_REACH_LEAD_EXPORT';

    public const COMMISSION_RUN = 'COMMISSION_RUN';

    public const CONTRACT_BILLING = 'CONTRACT_BILLING';

    public const DATEV_BBS_TRANSMISSION = 'DATEV_BBS_TRANSMISSION';

    public const DATEV_BDS_TRANSMISSION = 'DATEV_BDS_TRANSMISSION';

    public const DATEV_RDS_TRANSMISSION = 'DATEV_RDS_TRANSMISSION';

    public const EBAY_WECLAPP_DELETION_REQUEST_SYNC = 'EBAY_WECLAPP_DELETION_REQUEST_SYNC';

    public const EBAY_WECLAPP_LISTING_SYNC = 'EBAY_WECLAPP_LISTING_SYNC';

    public const EBAY_WECLAPP_ORDER_SYNC = 'EBAY_WECLAPP_ORDER_SYNC';

    public const EBAY_WECLAPP_PAYMENT_SYNC = 'EBAY_WECLAPP_PAYMENT_SYNC';

    public const EBAY_WECLAPP_SELLER_PROFILE_SYNC = 'EBAY_WECLAPP_SELLER_PROFILE_SYNC';

    public const ERIC_CREATE_ACCOUNT_SHEET = 'ERIC_CREATE_ACCOUNT_SHEET';

    public const FATTURAPA_IMPORT = 'FATTURAPA_IMPORT';

    public const FATTURAPA_SALES_INVOICE_XML_CREATION = 'FATTURAPA_SALES_INVOICE_XML_CREATION';

    public const GROUPWARE_CONTACT_CREATION = 'GROUPWARE_CONTACT_CREATION';

    public const IMPORT_VCARD = 'IMPORT_VCARD';

    public const INVENTORY_BOOKING = 'INVENTORY_BOOKING';

    public const INVENTORY_VALUATION = 'INVENTORY_VALUATION';

    public const INVENTORY_VALUTATION_EXPORT = 'INVENTORY_VALUTATION_EXPORT';

    public const ITSCOPE_ARTICLE_PRICE_UPDATE = 'ITSCOPE_ARTICLE_PRICE_UPDATE';

    public const ITSCOPE_WECLAPP_ARTICLE_SYNC = 'ITSCOPE_WECLAPP_ARTICLE_SYNC';

    public const ITSCOPE_WECLAPP_PURCHASE_ORDER_SYNC = 'ITSCOPE_WECLAPP_PURCHASE_ORDER_SYNC';

    public const ITSCOPE_WECLAPP_SALES_ORDER_SYNC = 'ITSCOPE_WECLAPP_SALES_ORDER_SYNC';

    public const IT_SCOPE_QUOTATION_SYNC = 'IT_SCOPE_QUOTATION_SYNC';

    public const KAUFLAND_ARTICLE_UPLOAD_CHECK_SYNC = 'KAUFLAND_ARTICLE_UPLOAD_CHECK_SYNC';

    public const KAUFLAND_INVOICE_UPLOAD = 'KAUFLAND_INVOICE_UPLOAD';

    public const KAUFLAND_WECLAPP_ARTICLE_SYNC = 'KAUFLAND_WECLAPP_ARTICLE_SYNC';

    public const KAUFLAND_WECLAPP_ORDER_SYNC = 'KAUFLAND_WECLAPP_ORDER_SYNC';

    public const LISTING_TO_EBAY_UPDATE_SYNC = 'LISTING_TO_EBAY_UPDATE_SYNC';

    public const MAGENTO2_WECLAPP_ARTICLE_SYNC = 'MAGENTO2_WECLAPP_ARTICLE_SYNC';

    public const MAGENTO2_WECLAPP_CUSTOMER_SYNC = 'MAGENTO2_WECLAPP_CUSTOMER_SYNC';

    public const MAGENTO2_WECLAPP_ORDER_SYNC = 'MAGENTO2_WECLAPP_ORDER_SYNC';

    public const MAGENTO_WECLAPP_ARTICLE_SYNC = 'MAGENTO_WECLAPP_ARTICLE_SYNC';

    public const MAGENTO_WECLAPP_CUSTOMER_SYNC = 'MAGENTO_WECLAPP_CUSTOMER_SYNC';

    public const MAGENTO_WECLAPP_ORDER_SYNC = 'MAGENTO_WECLAPP_ORDER_SYNC';

    public const MAIL_CHIMP_CAMPAIGN_PARTICIPANT_EXPORT = 'MAIL_CHIMP_CAMPAIGN_PARTICIPANT_EXPORT';

    public const MAIL_CHIMP_CONTACT_EXPORT = 'MAIL_CHIMP_CONTACT_EXPORT';

    public const MAIL_CHIMP_CONTACT_IMPORT = 'MAIL_CHIMP_CONTACT_IMPORT';

    public const MAIL_CHIMP_CUSTOMER_EXPORT = 'MAIL_CHIMP_CUSTOMER_EXPORT';

    public const MAIL_CHIMP_LEAD_EXPORT = 'MAIL_CHIMP_LEAD_EXPORT';

    public const MAIL_TO_INVOICE_IMPORT = 'MAIL_TO_INVOICE_IMPORT';

    public const MASS_ACCOUNTING_TRANSACTION_DELETE = 'MASS_ACCOUNTING_TRANSACTION_DELETE';

    public const MASS_ACCOUNTING_TRANSACTION_UPDATE = 'MASS_ACCOUNTING_TRANSACTION_UPDATE';

    public const MASS_ADVANCE_PAYMENT_INVOICE_COMPLETE_WORKFLOW = 'MASS_ADVANCE_PAYMENT_INVOICE_COMPLETE_WORKFLOW';

    public const MASS_ADVANCE_PAYMENT_INVOICE_CREATION = 'MASS_ADVANCE_PAYMENT_INVOICE_CREATION';

    public const MASS_AMAZON_SHIPMENT_CREATION = 'MASS_AMAZON_SHIPMENT_CREATION';

    public const MASS_ARTICLE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_ARTICLE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_ARTICLE_PRINT_DATASHEET = 'MASS_ARTICLE_PRINT_DATASHEET';

    public const MASS_ARTICLE_SUPPLY_SOURCE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_ARTICLE_SUPPLY_SOURCE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_ARTICLE_SUPPLY_SOURCE_DELETION = 'MASS_ARTICLE_SUPPLY_SOURCE_DELETION';

    public const MASS_ARTICLE_SUPPLY_SOURCE_UPDATE = 'MASS_ARTICLE_SUPPLY_SOURCE_UPDATE';

    public const MASS_ARTICLE_UPDATE = 'MASS_ARTICLE_UPDATE';

    public const MASS_BILL_OF_MATERIAL_ITEM_UPDATE = 'MASS_BILL_OF_MATERIAL_ITEM_UPDATE';

    public const MASS_BLANKET_PURCHASE_ORDER_CANCEL = 'MASS_BLANKET_PURCHASE_ORDER_CANCEL';

    public const MASS_BLANKET_PURCHASE_ORDER_COMPLETE = 'MASS_BLANKET_PURCHASE_ORDER_COMPLETE';

    public const MASS_BLANKET_PURCHASE_ORDER_CONFIRM_BY_SUPPLIER = 'MASS_BLANKET_PURCHASE_ORDER_CONFIRM_BY_SUPPLIER';

    public const MASS_BLANKET_PURCHASE_ORDER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_BLANKET_PURCHASE_ORDER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_BLANKET_PURCHASE_ORDER_DELETION = 'MASS_BLANKET_PURCHASE_ORDER_DELETION';

    public const MASS_BLANKET_PURCHASE_ORDER_PRINT = 'MASS_BLANKET_PURCHASE_ORDER_PRINT';

    public const MASS_BLANKET_PURCHASE_ORDER_REOPEN = 'MASS_BLANKET_PURCHASE_ORDER_REOPEN';

    public const MASS_BLANKET_PURCHASE_ORDER_SEND_EMAIL = 'MASS_BLANKET_PURCHASE_ORDER_SEND_EMAIL';

    public const MASS_BLANKET_PURCHASE_ORDER_UPDATE = 'MASS_BLANKET_PURCHASE_ORDER_UPDATE';

    public const MASS_BLANKET_PURCHASE_ORDER_UPDATE_FORM_TEXTS = 'MASS_BLANKET_PURCHASE_ORDER_UPDATE_FORM_TEXTS';

    public const MASS_BUSINESS_TIMES_DAY_OFF_DELETE = 'MASS_BUSINESS_TIMES_DAY_OFF_DELETE';

    public const MASS_CAMPAIGN_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_CAMPAIGN_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_CAMPAIGN_PARTICIPANTS_UPDATE = 'MASS_CAMPAIGN_PARTICIPANTS_UPDATE';

    public const MASS_CAMPAIGN_UPDATE = 'MASS_CAMPAIGN_UPDATE';

    public const MASS_CANCELLATION_SEND_EMAIL = 'MASS_CANCELLATION_SEND_EMAIL';

    public const MASS_CANCEL_TRANSPORTATION_ORDER = 'MASS_CANCEL_TRANSPORTATION_ORDER';

    public const MASS_CLEAR_OPEN_ITEM = 'MASS_CLEAR_OPEN_ITEM';

    public const MASS_CLOSE_SUPPLIER_ORDER = 'MASS_CLOSE_SUPPLIER_ORDER';

    public const MASS_COMPLETE_WORKFLOW_TRANSPORTATION_ORDER = 'MASS_COMPLETE_WORKFLOW_TRANSPORTATION_ORDER';

    public const MASS_CONTRACT_CHARGE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_CONTRACT_CHARGE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_CONTRACT_CHARGE_UPDATE = 'MASS_CONTRACT_CHARGE_UPDATE';

    public const MASS_CONTRACT_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_CONTRACT_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_CONTRACT_DELETION = 'MASS_CONTRACT_DELETION';

    public const MASS_CONTRACT_PRINT_DOCUMENT = 'MASS_CONTRACT_PRINT_DOCUMENT';

    public const MASS_CONTRACT_SEND_EMAIL = 'MASS_CONTRACT_SEND_EMAIL';

    public const MASS_CONTRACT_UPDATE = 'MASS_CONTRACT_UPDATE';

    public const MASS_CONTRACT_UPDATE_FORM_TEXTS = 'MASS_CONTRACT_UPDATE_FORM_TEXTS';

    public const MASS_CREATE_DROPSHIPPING_ORDER = 'MASS_CREATE_DROPSHIPPING_ORDER';

    public const MASS_CREATE_SALES_ORDER_COMMISSION = 'MASS_CREATE_SALES_ORDER_COMMISSION';

    public const MASS_CREATE_TRANSPORTATION_ORDER_FROM_PICKING_BOOKS = 'MASS_CREATE_TRANSPORTATION_ORDER_FROM_PICKING_BOOKS';

    public const MASS_CREDIT_NOTE_COMPLETE_WORKFLOW = 'MASS_CREDIT_NOTE_COMPLETE_WORKFLOW';

    public const MASS_CRM_EVENT_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_CRM_EVENT_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_CRM_EVENT_DELETION = 'MASS_CRM_EVENT_DELETION';

    public const MASS_CRM_EVENT_UPDATE = 'MASS_CRM_EVENT_UPDATE';

    public const MASS_CUSTOMER_RETURN_DELETE = 'MASS_CUSTOMER_RETURN_DELETE';

    public const MASS_DELETE_PICKING_BOOK_RECORD = 'MASS_DELETE_PICKING_BOOK_RECORD';

    public const MASS_DELETION_TRANSPORTATION_ORDER = 'MASS_DELETION_TRANSPORTATION_ORDER';

    public const MASS_DELIVERY_NOTE_SEND_EMAIL = 'MASS_DELIVERY_NOTE_SEND_EMAIL';

    public const MASS_DOWNLOAD_BANK_TRANSACTION = 'MASS_DOWNLOAD_BANK_TRANSACTION';

    public const MASS_DUNNING_RUN_PROCESS_PROPOSALS = 'MASS_DUNNING_RUN_PROCESS_PROPOSALS';

    public const MASS_DUNNING_RUN_SEND_EMAIL_DETAIL = 'MASS_DUNNING_RUN_SEND_EMAIL_DETAIL';

    public const MASS_DUNNING_RUN_SEND_EMAIL_OVERVIEW = 'MASS_DUNNING_RUN_SEND_EMAIL_OVERVIEW';

    public const MASS_EBAY_LISTINGS_DELETE = 'MASS_EBAY_LISTINGS_DELETE';

    public const MASS_EBAY_LISTING_UPDATE = 'MASS_EBAY_LISTING_UPDATE';

    public const MASS_INTERNAL_TRANSPORT_REFERENCE_DELETION = 'MASS_INTERNAL_TRANSPORT_REFERENCE_DELETION';

    public const MASS_INTERNAL_TRANSPORT_REFERENCE_UPDATE = 'MASS_INTERNAL_TRANSPORT_REFERENCE_UPDATE';

    public const MASS_INVOICE_BOOK = 'MASS_INVOICE_BOOK';

    public const MASS_INVOICE_CHECK = 'MASS_INVOICE_CHECK';

    public const MASS_INVOICE_COMPLETE_ENTRY = 'MASS_INVOICE_COMPLETE_ENTRY';

    public const MASS_INVOICE_COMPLETE_WORKFLOW = 'MASS_INVOICE_COMPLETE_WORKFLOW';

    public const MASS_INVOICE_CREATE_OPEN_ITEMS = 'MASS_INVOICE_CREATE_OPEN_ITEMS';

    public const MASS_INVOICE_DOCUMENT_CREATION = 'MASS_INVOICE_DOCUMENT_CREATION';

    public const MASS_INVOICE_SEND_EMAIL = 'MASS_INVOICE_SEND_EMAIL';

    public const MASS_INVOICE_VERIFIED = 'MASS_INVOICE_VERIFIED';

    public const MASS_IT_SCOPE_ARTICLE_CREATION = 'MASS_IT_SCOPE_ARTICLE_CREATION';

    public const MASS_IT_SCOPE_ORDER_SYNC = 'MASS_IT_SCOPE_ORDER_SYNC';

    public const MASS_LEDGER_ACCOUNT_UPDATE = 'MASS_LEDGER_ACCOUNT_UPDATE';

    public const MASS_OFFER_ACCEPT = 'MASS_OFFER_ACCEPT';

    public const MASS_OFFER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_OFFER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_OFFER_DELETE = 'MASS_OFFER_DELETE';

    public const MASS_OFFER_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_OFFER_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_OFFER_ITEM_UPDATE = 'MASS_OFFER_ITEM_UPDATE';

    public const MASS_OFFER_PRINT_DOCUMENT = 'MASS_OFFER_PRINT_DOCUMENT';

    public const MASS_OFFER_RECALCULATE_COSTS = 'MASS_OFFER_RECALCULATE_COSTS';

    public const MASS_OFFER_REJECT = 'MASS_OFFER_REJECT';

    public const MASS_OFFER_RESET_TAXES = 'MASS_OFFER_RESET_TAXES';

    public const MASS_OFFER_SEND_EMAIL = 'MASS_OFFER_SEND_EMAIL';

    public const MASS_OFFER_UPDATE = 'MASS_OFFER_UPDATE';

    public const MASS_OFFER_UPDATE_FORM_TEXTS = 'MASS_OFFER_UPDATE_FORM_TEXTS';

    public const MASS_OPPORTUNITY_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_OPPORTUNITY_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_OPPORTUNITY_DELETION = 'MASS_OPPORTUNITY_DELETION';

    public const MASS_OPPORTUNITY_UPDATE = 'MASS_OPPORTUNITY_UPDATE';

    public const MASS_ORDER_CANCEL = 'MASS_ORDER_CANCEL';

    public const MASS_ORDER_CLOSE = 'MASS_ORDER_CLOSE';

    public const MASS_ORDER_CONFIRMATION_CREATION = 'MASS_ORDER_CONFIRMATION_CREATION';

    public const MASS_ORDER_DELETE = 'MASS_ORDER_DELETE';

    public const MASS_ORDER_RECALCULATE_COSTS = 'MASS_ORDER_RECALCULATE_COSTS';

    public const MASS_ORDER_REOPEN = 'MASS_ORDER_REOPEN';

    public const MASS_ORDER_RESET_TAXES = 'MASS_ORDER_RESET_TAXES';

    public const MASS_ORDER_SHIPPING_LABEL_CREATION = 'MASS_ORDER_SHIPPING_LABEL_CREATION';

    public const MASS_ORDER_SHIPPING_RETURN_LABEL_CREATION = 'MASS_ORDER_SHIPPING_RETURN_LABEL_CREATION';

    public const MASS_ORDER_UPDATE = 'MASS_ORDER_UPDATE';

    public const MASS_ORDER_UPDATE_FORM_TEXTS = 'MASS_ORDER_UPDATE_FORM_TEXTS';

    public const MASS_PARTY_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PARTY_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PARTY_DELETION = 'MASS_PARTY_DELETION';

    public const MASS_PARTY_MERGE = 'MASS_PARTY_MERGE';

    public const MASS_PARTY_SET_PRIMARY_CONTACT = 'MASS_PARTY_SET_PRIMARY_CONTACT';

    public const MASS_PARTY_UPDATE = 'MASS_PARTY_UPDATE';

    public const MASS_PART_PAYMENT_INVOICE_COMPLETE_WORKFLOW = 'MASS_PART_PAYMENT_INVOICE_COMPLETE_WORKFLOW';

    public const MASS_PART_PAYMENT_INVOICE_CREATION = 'MASS_PART_PAYMENT_INVOICE_CREATION';

    public const MASS_PAYMENT_RUN_PROCESS_PROPOSALS = 'MASS_PAYMENT_RUN_PROCESS_PROPOSALS';

    public const MASS_PERFORMANCE_RECORD_COMPLETE_WORKFLOW_FOR_SALES_ORDER = 'MASS_PERFORMANCE_RECORD_COMPLETE_WORKFLOW_FOR_SALES_ORDER';

    public const MASS_PERFORMANCE_RECORD_CREATE_DOCUMENTS = 'MASS_PERFORMANCE_RECORD_CREATE_DOCUMENTS';

    public const MASS_PERFORMANCE_RECORD_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PERFORMANCE_RECORD_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PERFORMANCE_RECORD_DELETE = 'MASS_PERFORMANCE_RECORD_DELETE';

    public const MASS_PERFORMANCE_RECORD_INVOICING = 'MASS_PERFORMANCE_RECORD_INVOICING';

    public const MASS_PERFORMANCE_RECORD_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PERFORMANCE_RECORD_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PERFORMANCE_RECORD_RECORDING = 'MASS_PERFORMANCE_RECORD_RECORDING';

    public const MASS_PERFORMANCE_RECORD_SEND_EMAIL = 'MASS_PERFORMANCE_RECORD_SEND_EMAIL';

    public const MASS_PERFORMANCE_RECORD_UPDATE = 'MASS_PERFORMANCE_RECORD_UPDATE';

    public const MASS_PERFORMANCE_RECORD_UPDATE_FORM_TEXTS = 'MASS_PERFORMANCE_RECORD_UPDATE_FORM_TEXTS';

    public const MASS_PICKING_LIST_CREATION = 'MASS_PICKING_LIST_CREATION';

    public const MASS_PM_REQUIREMENT_ITEM_UPDATE = 'MASS_PM_REQUIREMENT_ITEM_UPDATE';

    public const MASS_PREPAYMENT_INVOICE_CREATION = 'MASS_PREPAYMENT_INVOICE_CREATION';

    public const MASS_PREPAYMENT_INVOICE_WORKFLOW = 'MASS_PREPAYMENT_INVOICE_WORKFLOW';

    public const MASS_PRINT_DROPSHIPPING_ORDER_DELIVERY_NOTE = 'MASS_PRINT_DROPSHIPPING_ORDER_DELIVERY_NOTE';

    public const MASS_PRINT_PRODUCTION_ORDER = 'MASS_PRINT_PRODUCTION_ORDER';

    public const MASS_PRINT_PURCHASE_ORDER_DOCUMENTS = 'MASS_PRINT_PURCHASE_ORDER_DOCUMENTS';

    public const MASS_PRINT_RETURNS_PICKUP_NOTE = 'MASS_PRINT_RETURNS_PICKUP_NOTE';

    public const MASS_PRINT_RETURNS_RETURN_NOTE = 'MASS_PRINT_RETURNS_RETURN_NOTE';

    public const MASS_PRINT_RETURN_DELIVERY_NOTE = 'MASS_PRINT_RETURN_DELIVERY_NOTE';

    public const MASS_PROCESS_DROPSHIPPING_ORDER = 'MASS_PROCESS_DROPSHIPPING_ORDER';

    public const MASS_PRODUCTION_ORDER_CANCELLATION = 'MASS_PRODUCTION_ORDER_CANCELLATION';

    public const MASS_PRODUCTION_ORDER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PRODUCTION_ORDER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PRODUCTION_ORDER_DELETION = 'MASS_PRODUCTION_ORDER_DELETION';

    public const MASS_PRODUCTION_ORDER_ITEM_ARTICLE_EXCHANGE = 'MASS_PRODUCTION_ORDER_ITEM_ARTICLE_EXCHANGE';

    public const MASS_PRODUCTION_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PRODUCTION_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PRODUCTION_ORDER_MATERIAL_ITEMS_UPDATE = 'MASS_PRODUCTION_ORDER_MATERIAL_ITEMS_UPDATE';

    public const MASS_PRODUCTION_ORDER_PICKING_LIST_CREATION = 'MASS_PRODUCTION_ORDER_PICKING_LIST_CREATION';

    public const MASS_PRODUCTION_ORDER_REOPEN = 'MASS_PRODUCTION_ORDER_REOPEN';

    public const MASS_PRODUCTION_ORDER_UPDATE = 'MASS_PRODUCTION_ORDER_UPDATE';

    public const MASS_PRODUCTION_ORDER_UPDATE_FORM_TEXTS = 'MASS_PRODUCTION_ORDER_UPDATE_FORM_TEXTS';

    public const MASS_PROJECT_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PROJECT_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PROJECT_UPDATE = 'MASS_PROJECT_UPDATE';

    public const MASS_PURCHASE_CREDIT_NOTE_COMPLETE_WORKFLOW = 'MASS_PURCHASE_CREDIT_NOTE_COMPLETE_WORKFLOW';

    public const MASS_PURCHASE_INVOICE_BACK_TO_ENTRY = 'MASS_PURCHASE_INVOICE_BACK_TO_ENTRY';

    public const MASS_PURCHASE_INVOICE_BOOK_ACCOUNTING = 'MASS_PURCHASE_INVOICE_BOOK_ACCOUNTING';

    public const MASS_PURCHASE_INVOICE_CANCEL = 'MASS_PURCHASE_INVOICE_CANCEL';

    public const MASS_PURCHASE_INVOICE_COMPLETE_WORKFLOW = 'MASS_PURCHASE_INVOICE_COMPLETE_WORKFLOW';

    public const MASS_PURCHASE_INVOICE_CREATE_CREDIT_NOTE = 'MASS_PURCHASE_INVOICE_CREATE_CREDIT_NOTE';

    public const MASS_PURCHASE_INVOICE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PURCHASE_INVOICE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PURCHASE_INVOICE_DELETE = 'MASS_PURCHASE_INVOICE_DELETE';

    public const MASS_PURCHASE_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PURCHASE_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PURCHASE_INVOICE_ITEM_UPDATE = 'MASS_PURCHASE_INVOICE_ITEM_UPDATE';

    public const MASS_PURCHASE_INVOICE_RESET_TAXES = 'MASS_PURCHASE_INVOICE_RESET_TAXES';

    public const MASS_PURCHASE_INVOICE_SHIPPING_COST_ITEM_UPDATE = 'MASS_PURCHASE_INVOICE_SHIPPING_COST_ITEM_UPDATE';

    public const MASS_PURCHASE_INVOICE_UPDATE = 'MASS_PURCHASE_INVOICE_UPDATE';

    public const MASS_PURCHASE_ORDER_CANCEL = 'MASS_PURCHASE_ORDER_CANCEL';

    public const MASS_PURCHASE_ORDER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PURCHASE_ORDER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PURCHASE_ORDER_DELETION = 'MASS_PURCHASE_ORDER_DELETION';

    public const MASS_PURCHASE_ORDER_INVOICE_COMPLETE_WORKFLOW = 'MASS_PURCHASE_ORDER_INVOICE_COMPLETE_WORKFLOW';

    public const MASS_PURCHASE_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PURCHASE_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PURCHASE_ORDER_ITEM_UPDATE = 'MASS_PURCHASE_ORDER_ITEM_UPDATE';

    public const MASS_PURCHASE_ORDER_REOPEN = 'MASS_PURCHASE_ORDER_REOPEN';

    public const MASS_PURCHASE_ORDER_SEND_EMAIL = 'MASS_PURCHASE_ORDER_SEND_EMAIL';

    public const MASS_PURCHASE_ORDER_UPDATE = 'MASS_PURCHASE_ORDER_UPDATE';

    public const MASS_PURCHASE_ORDER_UPDATE_FORM_TEXTS = 'MASS_PURCHASE_ORDER_UPDATE_FORM_TEXTS';

    public const MASS_PURCHASE_REQUEST_CANCEL = 'MASS_PURCHASE_REQUEST_CANCEL';

    public const MASS_PURCHASE_REQUEST_CLOSE = 'MASS_PURCHASE_REQUEST_CLOSE';

    public const MASS_PURCHASE_REQUEST_CREATE_DOCUMENTS = 'MASS_PURCHASE_REQUEST_CREATE_DOCUMENTS';

    public const MASS_PURCHASE_REQUEST_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_PURCHASE_REQUEST_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_PURCHASE_REQUEST_DELETION = 'MASS_PURCHASE_REQUEST_DELETION';

    public const MASS_PURCHASE_REQUEST_REOPEN = 'MASS_PURCHASE_REQUEST_REOPEN';

    public const MASS_PURCHASE_REQUEST_SEND_EMAIL = 'MASS_PURCHASE_REQUEST_SEND_EMAIL';

    public const MASS_PURCHASE_REQUEST_UPDATE = 'MASS_PURCHASE_REQUEST_UPDATE';

    public const MASS_PURCHASE_REQUEST_UPDATE_FORM_TEXTS = 'MASS_PURCHASE_REQUEST_UPDATE_FORM_TEXTS';

    public const MASS_RECORD_ADDRESS_FROM_CRM_UPDATE = 'MASS_RECORD_ADDRESS_FROM_CRM_UPDATE';

    public const MASS_RECORD_EMAIL_ADDRESS_FROM_CRM_UPDATE = 'MASS_RECORD_EMAIL_ADDRESS_FROM_CRM_UPDATE';

    public const MASS_RECURRING_CREATE_INVOICE = 'MASS_RECURRING_CREATE_INVOICE';

    public const MASS_RECURRING_INVOICE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_RECURRING_INVOICE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_RECURRING_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_RECURRING_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_RECURRING_INVOICE_ITEM_UPDATE = 'MASS_RECURRING_INVOICE_ITEM_UPDATE';

    public const MASS_RECURRING_INVOICE_UPDATE = 'MASS_RECURRING_INVOICE_UPDATE';

    public const MASS_RECURRING_INVOICE_UPDATE_FORM_TEXTS = 'MASS_RECURRING_INVOICE_UPDATE_FORM_TEXTS';

    public const MASS_RECURRING_RECALCULATION_COST = 'MASS_RECURRING_RECALCULATION_COST';

    public const MASS_REGION_UPDATE = 'MASS_REGION_UPDATE';

    public const MASS_REMINDER_DELETION = 'MASS_REMINDER_DELETION';

    public const MASS_REMINDER_UPDATE = 'MASS_REMINDER_UPDATE';

    public const MASS_RESET_CLEAR_OPEN_ITEM = 'MASS_RESET_CLEAR_OPEN_ITEM';

    public const MASS_SALES_BILL_OF_MATERIAL_ITEM_UPDATE = 'MASS_SALES_BILL_OF_MATERIAL_ITEM_UPDATE';

    public const MASS_SALES_INVOICE_BACK_TO_ENTRY = 'MASS_SALES_INVOICE_BACK_TO_ENTRY';

    public const MASS_SALES_INVOICE_BOOK_ACCOUNTING = 'MASS_SALES_INVOICE_BOOK_ACCOUNTING';

    public const MASS_SALES_INVOICE_CANCEL = 'MASS_SALES_INVOICE_CANCEL';

    public const MASS_SALES_INVOICE_CREATE_CREDIT_NOTE = 'MASS_SALES_INVOICE_CREATE_CREDIT_NOTE';

    public const MASS_SALES_INVOICE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SALES_INVOICE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SALES_INVOICE_DELETE = 'MASS_SALES_INVOICE_DELETE';

    public const MASS_SALES_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SALES_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SALES_INVOICE_ITEM_UPDATE = 'MASS_SALES_INVOICE_ITEM_UPDATE';

    public const MASS_SALES_INVOICE_RECALCULATE_COSTS = 'MASS_SALES_INVOICE_RECALCULATE_COSTS';

    public const MASS_SALES_INVOICE_RESET_TAXES = 'MASS_SALES_INVOICE_RESET_TAXES';

    public const MASS_SALES_INVOICE_SHIPPING_COST_ITEM_UPDATE = 'MASS_SALES_INVOICE_SHIPPING_COST_ITEM_UPDATE';

    public const MASS_SALES_INVOICE_UPDATE = 'MASS_SALES_INVOICE_UPDATE';

    public const MASS_SALES_INVOICE_UPDATE_FORM_TEXTS = 'MASS_SALES_INVOICE_UPDATE_FORM_TEXTS';

    public const MASS_SALES_ORDER_CASH_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SALES_ORDER_CASH_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SALES_ORDER_COMPLETE_WORKFLOW = 'MASS_SALES_ORDER_COMPLETE_WORKFLOW';

    public const MASS_SALES_ORDER_CREATE_PERFORMANCE_RECORD = 'MASS_SALES_ORDER_CREATE_PERFORMANCE_RECORD';

    public const MASS_SALES_ORDER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SALES_ORDER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SALES_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SALES_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SALES_ORDER_ITEM_UPDATE = 'MASS_SALES_ORDER_ITEM_UPDATE';

    public const MASS_SALES_ORDER_SEND_EMAIL = 'MASS_SALES_ORDER_SEND_EMAIL';

    public const MASS_SALES_PRICE_ADD_SPECIAL_PRICE = 'MASS_SALES_PRICE_ADD_SPECIAL_PRICE';

    public const MASS_SALES_PRICE_DELETION = 'MASS_SALES_PRICE_DELETION';

    public const MASS_SAVE_ORDER_CONFIRMED = 'MASS_SAVE_ORDER_CONFIRMED';

    public const MASS_SEPA_MAIN_BANK_UPDATE = 'MASS_SEPA_MAIN_BANK_UPDATE';

    public const MASS_SERIALNUMBER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SERIALNUMBER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SET_ORDERS_SHIPPED = 'MASS_SET_ORDERS_SHIPPED';

    public const MASS_SHIPMENT_ARRIVAL_CANCEL = 'MASS_SHIPMENT_ARRIVAL_CANCEL';

    public const MASS_SHIPMENT_ARRIVAL_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SHIPMENT_ARRIVAL_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SHIPMENT_ARRIVAL_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SHIPMENT_ARRIVAL_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SHIPMENT_COMPLETE_WORKFLOW = 'MASS_SHIPMENT_COMPLETE_WORKFLOW';

    public const MASS_SHIPMENT_COMPLETE_WORKFLOW_FOR_SALES_ORDER = 'MASS_SHIPMENT_COMPLETE_WORKFLOW_FOR_SALES_ORDER';

    public const MASS_SHIPMENT_CREATION = 'MASS_SHIPMENT_CREATION';

    public const MASS_SHIPMENT_INCOMING_DELETE = 'MASS_SHIPMENT_INCOMING_DELETE';

    public const MASS_SHIPMENT_INCOMING_REOPEN = 'MASS_SHIPMENT_INCOMING_REOPEN';

    public const MASS_SHIPMENT_INCOMING_UPDATE = 'MASS_SHIPMENT_INCOMING_UPDATE';

    public const MASS_SHIPMENT_INCOMING_UPDATE_FORM_TEXTS = 'MASS_SHIPMENT_INCOMING_UPDATE_FORM_TEXTS';

    public const MASS_SHIPMENT_INVOICE_CREATION = 'MASS_SHIPMENT_INVOICE_CREATION';

    public const MASS_SHIPMENT_OUTGOING_BACK_TO_ENTRY = 'MASS_SHIPMENT_OUTGOING_BACK_TO_ENTRY';

    public const MASS_SHIPMENT_OUTGOING_CANCEL = 'MASS_SHIPMENT_OUTGOING_CANCEL';

    public const MASS_SHIPMENT_OUTGOING_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SHIPMENT_OUTGOING_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SHIPMENT_OUTGOING_DELETE = 'MASS_SHIPMENT_OUTGOING_DELETE';

    public const MASS_SHIPMENT_OUTGOING_ITEM_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_SHIPMENT_OUTGOING_ITEM_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_SHIPMENT_OUTGOING_RETURN_LABEL_CREATION = 'MASS_SHIPMENT_OUTGOING_RETURN_LABEL_CREATION';

    public const MASS_SHIPMENT_OUTGOING_UPDATE = 'MASS_SHIPMENT_OUTGOING_UPDATE';

    public const MASS_SHIPMENT_OUTGOING_UPDATE_FORM_TEXTS = 'MASS_SHIPMENT_OUTGOING_UPDATE_FORM_TEXTS';

    public const MASS_SHIPPING_CARRIER_UPDATE = 'MASS_SHIPPING_CARRIER_UPDATE';

    public const MASS_SHIPPING_CONFIRMATION_OF_ARRIVAL_CREATION = 'MASS_SHIPPING_CONFIRMATION_OF_ARRIVAL_CREATION';

    public const MASS_SHIPPING_CONFIRMATION_OF_ARRIVAL_SEND_EMAIL = 'MASS_SHIPPING_CONFIRMATION_OF_ARRIVAL_SEND_EMAIL';

    public const MASS_SHIPPING_LABEL_CREATION = 'MASS_SHIPPING_LABEL_CREATION';

    public const MASS_SHIPPING_NOTE_CREATION = 'MASS_SHIPPING_NOTE_CREATION';

    public const MASS_SHIPPING_RETURN_LABEL_CREATION = 'MASS_SHIPPING_RETURN_LABEL_CREATION';

    public const MASS_SHIP_IN = 'MASS_SHIP_IN';

    public const MASS_SHIP_OUT = 'MASS_SHIP_OUT';

    public const MASS_STANDARD_INVOICE_CREATION = 'MASS_STANDARD_INVOICE_CREATION';

    public const MASS_STANDARD_INVOICE_WORKFLOW = 'MASS_STANDARD_INVOICE_WORKFLOW';

    public const MASS_START_PRODUCTION_ORDER = 'MASS_START_PRODUCTION_ORDER';

    public const MASS_STOCK_BATCH_NUMBER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_STOCK_BATCH_NUMBER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_STORAGE_PLACE_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_STORAGE_PLACE_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_STORAGE_PLACE_DELETE = 'MASS_STORAGE_PLACE_DELETE';

    public const MASS_STORAGE_PLACE_UPDATE = 'MASS_STORAGE_PLACE_UPDATE';

    public const MASS_SUPPLIER_PRICE_DELETION = 'MASS_SUPPLIER_PRICE_DELETION';

    public const MASS_SUPPLIER_RETURN_DELETE = 'MASS_SUPPLIER_RETURN_DELETE';

    public const MASS_TAG_DELETE = 'MASS_TAG_DELETE';

    public const MASS_TASK_BILLING_DATA_UPDATE = 'MASS_TASK_BILLING_DATA_UPDATE';

    public const MASS_TASK_CREATE_PERFORMANCE_RECORD = 'MASS_TASK_CREATE_PERFORMANCE_RECORD';

    public const MASS_TASK_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE = 'MASS_TASK_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE';

    public const MASS_TASK_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_TASK_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_TASK_DELETION = 'MASS_TASK_DELETION';

    public const MASS_TASK_UPDATE = 'MASS_TASK_UPDATE';

    public const MASS_TAX_DELETE = 'MASS_TAX_DELETE';

    public const MASS_TAX_RESET = 'MASS_TAX_RESET';

    public const MASS_TEAMVIEWER_DOWNLOAD_TIME_ENTRIES = 'MASS_TEAMVIEWER_DOWNLOAD_TIME_ENTRIES';

    public const MASS_TICKET_CATEGORY_UPDATE = 'MASS_TICKET_CATEGORY_UPDATE';

    public const MASS_TICKET_CREATE_PERFORMANCE_RECORD = 'MASS_TICKET_CREATE_PERFORMANCE_RECORD';

    public const MASS_TICKET_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE = 'MASS_TICKET_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE';

    public const MASS_TICKET_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_TICKET_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_TICKET_DELETE = 'MASS_TICKET_DELETE';

    public const MASS_TICKET_FAQ_COPY = 'MASS_TICKET_FAQ_COPY';

    public const MASS_TICKET_FAQ_UPDATE = 'MASS_TICKET_FAQ_UPDATE';

    public const MASS_TICKET_LINK_TO_SALES_ORDER = 'MASS_TICKET_LINK_TO_SALES_ORDER';

    public const MASS_TICKET_MERGE = 'MASS_TICKET_MERGE';

    public const MASS_TICKET_SLA_RECALCULATE = 'MASS_TICKET_SLA_RECALCULATE';

    public const MASS_TICKET_STATUS_UPDATE = 'MASS_TICKET_STATUS_UPDATE';

    public const MASS_TICKET_UPDATE = 'MASS_TICKET_UPDATE';

    public const MASS_TIME_RECORD_CREATE_PERFORMANCE_RECORD = 'MASS_TIME_RECORD_CREATE_PERFORMANCE_RECORD';

    public const MASS_TIME_RECORD_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE = 'MASS_TIME_RECORD_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE';

    public const MASS_TIME_RECORD_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_TIME_RECORD_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_TIME_RECORD_MOVE = 'MASS_TIME_RECORD_MOVE';

    public const MASS_TIME_RECORD_UPDATE = 'MASS_TIME_RECORD_UPDATE';

    public const MASS_TRANSACTION_BOOKING = 'MASS_TRANSACTION_BOOKING';

    public const MASS_TRANSACTION_CLEARING = 'MASS_TRANSACTION_CLEARING';

    public const MASS_TRANSACTION_DELETE = 'MASS_TRANSACTION_DELETE';

    public const MASS_TRANSACTION_PROCESSING = 'MASS_TRANSACTION_PROCESSING';

    public const MASS_TRANSACTION_REMOVE_PAYMENTAPPLICATIONS = 'MASS_TRANSACTION_REMOVE_PAYMENTAPPLICATIONS';

    public const MASS_TRANSACTION_RESET_IGNORE = 'MASS_TRANSACTION_RESET_IGNORE';

    public const MASS_TRANSACTION_SET_IGNORE = 'MASS_TRANSACTION_SET_IGNORE';

    public const MASS_TRANSPORTATION_ORDER_CUSTOM_ATTRIBUTE_UPDATE = 'MASS_TRANSPORTATION_ORDER_CUSTOM_ATTRIBUTE_UPDATE';

    public const MASS_TRANSPORTATION_ORDER_PICKING_LIST_CREATION = 'MASS_TRANSPORTATION_ORDER_PICKING_LIST_CREATION';

    public const MASS_UPDATE_CONTRACT_PRICES = 'MASS_UPDATE_CONTRACT_PRICES';

    public const MASS_UPDATE_OFFER_PRICES = 'MASS_UPDATE_OFFER_PRICES';

    public const MASS_UPDATE_RECURRING_INVOICE_PRICES = 'MASS_UPDATE_RECURRING_INVOICE_PRICES';

    public const MASS_UPDATE_SALES_INVOICE_PRICES = 'MASS_UPDATE_SALES_INVOICE_PRICES';

    public const MASS_UPDATE_SALES_ORDER_PRICES = 'MASS_UPDATE_SALES_ORDER_PRICES';

    public const MASS_VARIANT_ARTICLE_DELETION = 'MASS_VARIANT_ARTICLE_DELETION';

    public const MATERIAL_PLANNING_RUN = 'MATERIAL_PLANNING_RUN';

    public const OCR_PROCESSING = 'OCR_PROCESSING';

    public const OFFER_EXPORT = 'OFFER_EXPORT';

    public const OTTO_ARTICLE_UPLOAD_CHECK_SYNC = 'OTTO_ARTICLE_UPLOAD_CHECK_SYNC';

    public const OTTO_WECLAPP_ARTICLE_SYNC = 'OTTO_WECLAPP_ARTICLE_SYNC';

    public const OTTO_WECLAPP_CREDIT_NOTE_SYNC = 'OTTO_WECLAPP_CREDIT_NOTE_SYNC';

    public const OTTO_WECLAPP_INVOICE_SYNC = 'OTTO_WECLAPP_INVOICE_SYNC';

    public const OTTO_WECLAPP_ORDER_SYNC = 'OTTO_WECLAPP_ORDER_SYNC';

    public const PRESTA_WECLAPP_ARTICLE_SYNC = 'PRESTA_WECLAPP_ARTICLE_SYNC';

    public const PRESTA_WECLAPP_CUSTOMER_SYNC = 'PRESTA_WECLAPP_CUSTOMER_SYNC';

    public const PRESTA_WECLAPP_ORDER_SYNC = 'PRESTA_WECLAPP_ORDER_SYNC';

    public const PRICE_CALCULATION_ARTICLE = 'PRICE_CALCULATION_ARTICLE';

    public const PURCHASE_INVOICE_EXPORT = 'PURCHASE_INVOICE_EXPORT';

    public const PURCHASE_INVOICE_SHIPPING_COST_EXPORT = 'PURCHASE_INVOICE_SHIPPING_COST_EXPORT';

    public const PURCHASE_ORDER_EXPORT = 'PURCHASE_ORDER_EXPORT';

    public const PURCHASE_ORDER_REQUEST_SEND_EMAIL = 'PURCHASE_ORDER_REQUEST_SEND_EMAIL';

    public const RECURRING_INVOICE_INVOICE_CREATION = 'RECURRING_INVOICE_INVOICE_CREATION';

    public const RESET_ACCOUNTING = 'RESET_ACCOUNTING';

    public const RESET_BUSINESS_TRANSACTIONS = 'RESET_BUSINESS_TRANSACTIONS';

    public const SALES_INVOICE_EXPORT = 'SALES_INVOICE_EXPORT';

    public const SALES_INVOICE_SHIPPING_COST_ITEMS_EXPORT = 'SALES_INVOICE_SHIPPING_COST_ITEMS_EXPORT';

    public const SALES_INVOICE_XRECHNUNG_EXPORT = 'SALES_INVOICE_XRECHNUNG_EXPORT';

    public const SALES_ORDER_EXPORT = 'SALES_ORDER_EXPORT';

    public const SHIPMENTIN_EXPORT = 'SHIPMENTIN_EXPORT';

    public const SHIPMENTOUT_EXPORT = 'SHIPMENTOUT_EXPORT';

    public const SHOPIFY_WECLAPP_ARTICLE_SYNC = 'SHOPIFY_WECLAPP_ARTICLE_SYNC';

    public const SHOPIFY_WECLAPP_CUSTOMER_SYNC = 'SHOPIFY_WECLAPP_CUSTOMER_SYNC';

    public const SHOPIFY_WECLAPP_ORDER_SYNC = 'SHOPIFY_WECLAPP_ORDER_SYNC';

    public const SHOPIFY_WECLAPP_PAYMENT_SYNC = 'SHOPIFY_WECLAPP_PAYMENT_SYNC';

    public const SHOPWARE6_WECLAPP_ARTICLE_SYNC = 'SHOPWARE6_WECLAPP_ARTICLE_SYNC';

    public const SHOPWARE6_WECLAPP_CUSTOMER_SYNC = 'SHOPWARE6_WECLAPP_CUSTOMER_SYNC';

    public const SHOPWARE6_WECLAPP_ORDER_SYNC = 'SHOPWARE6_WECLAPP_ORDER_SYNC';

    public const SHOPWARE_WECLAPP_ARTICLE_SYNC = 'SHOPWARE_WECLAPP_ARTICLE_SYNC';

    public const SHOPWARE_WECLAPP_CUSTOMER_SYNC = 'SHOPWARE_WECLAPP_CUSTOMER_SYNC';

    public const SHOPWARE_WECLAPP_ORDER_SYNC = 'SHOPWARE_WECLAPP_ORDER_SYNC';

    public const SYNAXON_WECLAPP_ARTICLE_UPDATE = 'SYNAXON_WECLAPP_ARTICLE_UPDATE';

    public const TRANSUS_SALES_INVOICE_XML_CREATION = 'TRANSUS_SALES_INVOICE_XML_CREATION';

    public const TRANSUS_SHIPMENT_XML_CREATION = 'TRANSUS_SHIPMENT_XML_CREATION';

    public const TRANSUS_WECLAPP_ORDER_SYNC = 'TRANSUS_WECLAPP_ORDER_SYNC';

    public const WECLAPP_AMAZON_OUTBOUND_SHIPMENT_SYNC = 'WECLAPP_AMAZON_OUTBOUND_SHIPMENT_SYNC';

    public const WECLAPP_EBAY_LISTING_STOCK_SYNC = 'WECLAPP_EBAY_LISTING_STOCK_SYNC';

    public const WECLAPP_EBAY_ORDER_SYNC = 'WECLAPP_EBAY_ORDER_SYNC';

    public const WECLAPP_ITSCOPE_ARTICLE_PRICE_UPDATE = 'WECLAPP_ITSCOPE_ARTICLE_PRICE_UPDATE';

    public const WECLAPP_ITSCOPE_ORDER_SYNC = 'WECLAPP_ITSCOPE_ORDER_SYNC';

    public const WECLAPP_KAUFLAND_ARTICLE_SYNC = 'WECLAPP_KAUFLAND_ARTICLE_SYNC';

    public const WECLAPP_KAUFLAND_ORDER_SYNC = 'WECLAPP_KAUFLAND_ORDER_SYNC';

    public const WECLAPP_KAUFLAND_STOCK_SYNC = 'WECLAPP_KAUFLAND_STOCK_SYNC';

    public const WECLAPP_MAGENTO2_ARTICLE_SYNC = 'WECLAPP_MAGENTO2_ARTICLE_SYNC';

    public const WECLAPP_MAGENTO2_ORDER_SYNC = 'WECLAPP_MAGENTO2_ORDER_SYNC';

    public const WECLAPP_MAGENTO2_STOCK_SYNC = 'WECLAPP_MAGENTO2_STOCK_SYNC';

    public const WECLAPP_MAGENTO_ARTICLE_SYNC = 'WECLAPP_MAGENTO_ARTICLE_SYNC';

    public const WECLAPP_MAGENTO_ORDER_SYNC = 'WECLAPP_MAGENTO_ORDER_SYNC';

    public const WECLAPP_MAGENTO_STOCK_SYNC = 'WECLAPP_MAGENTO_STOCK_SYNC';

    public const WECLAPP_OTTO_ARTICLE_SYNC = 'WECLAPP_OTTO_ARTICLE_SYNC';

    public const WECLAPP_OTTO_ORDER_SYNC = 'WECLAPP_OTTO_ORDER_SYNC';

    public const WECLAPP_OTTO_STOCK_SYNC = 'WECLAPP_OTTO_STOCK_SYNC';

    public const WECLAPP_PRESTA_ARTICLE_SYNC = 'WECLAPP_PRESTA_ARTICLE_SYNC';

    public const WECLAPP_PRESTA_CUSTOMER_SYNC = 'WECLAPP_PRESTA_CUSTOMER_SYNC';

    public const WECLAPP_PRESTA_ORDER_SYNC = 'WECLAPP_PRESTA_ORDER_SYNC';

    public const WECLAPP_PRESTA_STOCK_SYNC = 'WECLAPP_PRESTA_STOCK_SYNC';

    public const WECLAPP_SALES_ORDER_AMAZON_REPORT_SYNC = 'WECLAPP_SALES_ORDER_AMAZON_REPORT_SYNC';

    public const WECLAPP_SHOPIFY_ARTICLE_SYNC = 'WECLAPP_SHOPIFY_ARTICLE_SYNC';

    public const WECLAPP_SHOPIFY_ORDER_SYNC = 'WECLAPP_SHOPIFY_ORDER_SYNC';

    public const WECLAPP_SHOPIFY_STOCK_SYNC = 'WECLAPP_SHOPIFY_STOCK_SYNC';

    public const WECLAPP_SHOPWARE6_ARTICLE_SYNC = 'WECLAPP_SHOPWARE6_ARTICLE_SYNC';

    public const WECLAPP_SHOPWARE6_ORDER_SYNC = 'WECLAPP_SHOPWARE6_ORDER_SYNC';

    public const WECLAPP_SHOPWARE6_STOCK_SYNC = 'WECLAPP_SHOPWARE6_STOCK_SYNC';

    public const WECLAPP_SHOPWARE_ARTICLE_SYNC = 'WECLAPP_SHOPWARE_ARTICLE_SYNC';

    public const WECLAPP_SHOPWARE_CUSTOMER_SYNC = 'WECLAPP_SHOPWARE_CUSTOMER_SYNC';

    public const WECLAPP_SHOPWARE_ORDER_SYNC = 'WECLAPP_SHOPWARE_ORDER_SYNC';

    public const WECLAPP_SHOPWARE_STOCK_SYNC = 'WECLAPP_SHOPWARE_STOCK_SYNC';

    public const WECLAPP_TO_AMAZON_ARTICLE_REPORT_SYNC = 'WECLAPP_TO_AMAZON_ARTICLE_REPORT_SYNC';

    public const WECLAPP_TO_AMAZON_REPORT_SYNC = 'WECLAPP_TO_AMAZON_REPORT_SYNC';

    public const WECLAPP_TO_SHOPIFY_CUSTOMER_SYNC = 'WECLAPP_TO_SHOPIFY_CUSTOMER_SYNC';

    public const WECLAPP_TO_SHOPWARE6_CUSTOMER_SYNC = 'WECLAPP_TO_SHOPWARE6_CUSTOMER_SYNC';

    public const WECLAPP_TO_WECLAPP_ARTICLE_PUSH = 'WECLAPP_TO_WECLAPP_ARTICLE_PUSH';

    public const WECLAPP_TO_WECLAPP_CUSTOM_ATTRIBUTES_PULL = 'WECLAPP_TO_WECLAPP_CUSTOM_ATTRIBUTES_PULL';

    public const WECLAPP_TO_WECLAPP_DELETION = 'WECLAPP_TO_WECLAPP_DELETION';

    public const WECLAPP_TO_WECLAPP_OFFER_PULL = 'WECLAPP_TO_WECLAPP_OFFER_PULL';

    public const WECLAPP_TO_WECLAPP_OTHER_DATA_PUSH = 'WECLAPP_TO_WECLAPP_OTHER_DATA_PUSH';

    public const WECLAPP_TO_WECLAPP_PARTY_PULL = 'WECLAPP_TO_WECLAPP_PARTY_PULL';

    public const WECLAPP_TO_WECLAPP_PARTY_PUSH = 'WECLAPP_TO_WECLAPP_PARTY_PUSH';

    public const WECLAPP_TO_WECLAPP_PURCHASE_ORDERS_AS_SALES_ORDERS_PULL = 'WECLAPP_TO_WECLAPP_PURCHASE_ORDERS_AS_SALES_ORDERS_PULL';

    public const WECLAPP_TO_WECLAPP_PURCHASE_ORDER_PUSH = 'WECLAPP_TO_WECLAPP_PURCHASE_ORDER_PUSH';

    public const WECLAPP_TO_WECLAPP_SALES_ORDER_PULL = 'WECLAPP_TO_WECLAPP_SALES_ORDER_PULL';

    public const WECLAPP_TO_WECLAPP_STORE_PUSH = 'WECLAPP_TO_WECLAPP_STORE_PUSH';

    public const WECLAPP_TO_WECLAPP_SUPPLIER_STOCK_SYNC = 'WECLAPP_TO_WECLAPP_SUPPLIER_STOCK_SYNC';

    public const WECLAPP_TO_WECLAPP_TICKET_PULL = 'WECLAPP_TO_WECLAPP_TICKET_PULL';

    public const WECLAPP_TO_WECLAPP_USER_PULL = 'WECLAPP_TO_WECLAPP_USER_PULL';

    public const WECLAPP_WOOCOMMERCE_ARTICLE_SYNC = 'WECLAPP_WOOCOMMERCE_ARTICLE_SYNC';

    public const WECLAPP_WOOCOMMERCE_ORDER_SYNC = 'WECLAPP_WOOCOMMERCE_ORDER_SYNC';

    public const WECLAPP_WOOCOMMERCE_STOCK_SYNC = 'WECLAPP_WOOCOMMERCE_STOCK_SYNC';

    public const WOOCOMMERCE_WECLAPP_ARTICLE_SYNC = 'WOOCOMMERCE_WECLAPP_ARTICLE_SYNC';

    public const WOOCOMMERCE_WECLAPP_CUSTOMER_SYNC = 'WOOCOMMERCE_WECLAPP_CUSTOMER_SYNC';

    public const WOOCOMMERCE_WECLAPP_ORDER_SYNC = 'WOOCOMMERCE_WECLAPP_ORDER_SYNC';

    public const XT_WECLAPP_ARTICLE_SYNC = 'XT_WECLAPP_ARTICLE_SYNC';

    public const XT_WECLAPP_ORDER_SYNC = 'XT_WECLAPP_ORDER_SYNC';

    public const ZUGFERD_IMPORT = 'ZUGFERD_IMPORT';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNTING_DATASTRUCTURE_MIGRATION,
            self::ACCOUNTING_EXPORT,
            self::ACCOUNT_BALANCES_TRANSFER,
            self::ADAPT_SALES_STAGES,
            self::AMAZON_ARTICLE_WECLAPP_ARTICLE_FBA_SYNC,
            self::AMAZON_ARTICLE_WECLAPP_ARTICLE_SYNC,
            self::AMAZON_CREATE_REPORTS,
            self::AMAZON_INVOICE_UPLOAD,
            self::AMAZON_REPORT_SALES_ORDER_FBA_SYNC,
            self::AMAZON_REPORT_SALES_ORDER_SYNC,
            self::AMAZON_SETTLEMENT_WECLAPP_SYNC,
            self::AMAZON_WECLAPP_ARTICLE_FBA_SYNC,
            self::AMAZON_WECLAPP_ARTICLE_SYNC,
            self::AMAZON_WECLAPP_REPORT_FBA_SYNC,
            self::AMAZON_WECLAPP_REPORT_SYNC,
            self::AMAZON_WECLAPP_SETTLEMENT_SYNC,
            self::ARTICLE_DELETION,
            self::ARTICLE_KEY_FIGURES_EXPORT,
            self::ARTICLE_PRICE_TO_AMAZON_REPORT_SYNC,
            self::BREVO_CAMPAIGN_PARTICIPANT_EXPORT,
            self::BREVO_CONTACT_EXPORT,
            self::BREVO_CONTACT_IMPORT,
            self::BREVO_CUSTOMER_EXPORT,
            self::BREVO_LEAD_EXPORT,
            self::CAMPAIGN_EMAIL_SENDING,
            self::CLEVER_REACH_CAMPAIGN_PARTICIPANT_EXPORT,
            self::CLEVER_REACH_CONTACT_EXPORT,
            self::CLEVER_REACH_CONTACT_IMPORT,
            self::CLEVER_REACH_CUSTOMER_EXPORT,
            self::CLEVER_REACH_LEAD_EXPORT,
            self::COMMISSION_RUN,
            self::CONTRACT_BILLING,
            self::DATEV_BBS_TRANSMISSION,
            self::DATEV_BDS_TRANSMISSION,
            self::DATEV_RDS_TRANSMISSION,
            self::EBAY_WECLAPP_DELETION_REQUEST_SYNC,
            self::EBAY_WECLAPP_LISTING_SYNC,
            self::EBAY_WECLAPP_ORDER_SYNC,
            self::EBAY_WECLAPP_PAYMENT_SYNC,
            self::EBAY_WECLAPP_SELLER_PROFILE_SYNC,
            self::ERIC_CREATE_ACCOUNT_SHEET,
            self::FATTURAPA_IMPORT,
            self::FATTURAPA_SALES_INVOICE_XML_CREATION,
            self::GROUPWARE_CONTACT_CREATION,
            self::IMPORT_VCARD,
            self::INVENTORY_BOOKING,
            self::INVENTORY_VALUATION,
            self::INVENTORY_VALUTATION_EXPORT,
            self::ITSCOPE_ARTICLE_PRICE_UPDATE,
            self::ITSCOPE_WECLAPP_ARTICLE_SYNC,
            self::ITSCOPE_WECLAPP_PURCHASE_ORDER_SYNC,
            self::ITSCOPE_WECLAPP_SALES_ORDER_SYNC,
            self::IT_SCOPE_QUOTATION_SYNC,
            self::KAUFLAND_ARTICLE_UPLOAD_CHECK_SYNC,
            self::KAUFLAND_INVOICE_UPLOAD,
            self::KAUFLAND_WECLAPP_ARTICLE_SYNC,
            self::KAUFLAND_WECLAPP_ORDER_SYNC,
            self::LISTING_TO_EBAY_UPDATE_SYNC,
            self::MAGENTO2_WECLAPP_ARTICLE_SYNC,
            self::MAGENTO2_WECLAPP_CUSTOMER_SYNC,
            self::MAGENTO2_WECLAPP_ORDER_SYNC,
            self::MAGENTO_WECLAPP_ARTICLE_SYNC,
            self::MAGENTO_WECLAPP_CUSTOMER_SYNC,
            self::MAGENTO_WECLAPP_ORDER_SYNC,
            self::MAIL_CHIMP_CAMPAIGN_PARTICIPANT_EXPORT,
            self::MAIL_CHIMP_CONTACT_EXPORT,
            self::MAIL_CHIMP_CONTACT_IMPORT,
            self::MAIL_CHIMP_CUSTOMER_EXPORT,
            self::MAIL_CHIMP_LEAD_EXPORT,
            self::MAIL_TO_INVOICE_IMPORT,
            self::MASS_ACCOUNTING_TRANSACTION_DELETE,
            self::MASS_ACCOUNTING_TRANSACTION_UPDATE,
            self::MASS_ADVANCE_PAYMENT_INVOICE_COMPLETE_WORKFLOW,
            self::MASS_ADVANCE_PAYMENT_INVOICE_CREATION,
            self::MASS_AMAZON_SHIPMENT_CREATION,
            self::MASS_ARTICLE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_ARTICLE_PRINT_DATASHEET,
            self::MASS_ARTICLE_SUPPLY_SOURCE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_ARTICLE_SUPPLY_SOURCE_DELETION,
            self::MASS_ARTICLE_SUPPLY_SOURCE_UPDATE,
            self::MASS_ARTICLE_UPDATE,
            self::MASS_BILL_OF_MATERIAL_ITEM_UPDATE,
            self::MASS_BLANKET_PURCHASE_ORDER_CANCEL,
            self::MASS_BLANKET_PURCHASE_ORDER_COMPLETE,
            self::MASS_BLANKET_PURCHASE_ORDER_CONFIRM_BY_SUPPLIER,
            self::MASS_BLANKET_PURCHASE_ORDER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_BLANKET_PURCHASE_ORDER_DELETION,
            self::MASS_BLANKET_PURCHASE_ORDER_PRINT,
            self::MASS_BLANKET_PURCHASE_ORDER_REOPEN,
            self::MASS_BLANKET_PURCHASE_ORDER_SEND_EMAIL,
            self::MASS_BLANKET_PURCHASE_ORDER_UPDATE,
            self::MASS_BLANKET_PURCHASE_ORDER_UPDATE_FORM_TEXTS,
            self::MASS_BUSINESS_TIMES_DAY_OFF_DELETE,
            self::MASS_CAMPAIGN_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_CAMPAIGN_PARTICIPANTS_UPDATE,
            self::MASS_CAMPAIGN_UPDATE,
            self::MASS_CANCELLATION_SEND_EMAIL,
            self::MASS_CANCEL_TRANSPORTATION_ORDER,
            self::MASS_CLEAR_OPEN_ITEM,
            self::MASS_CLOSE_SUPPLIER_ORDER,
            self::MASS_COMPLETE_WORKFLOW_TRANSPORTATION_ORDER,
            self::MASS_CONTRACT_CHARGE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_CONTRACT_CHARGE_UPDATE,
            self::MASS_CONTRACT_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_CONTRACT_DELETION,
            self::MASS_CONTRACT_PRINT_DOCUMENT,
            self::MASS_CONTRACT_SEND_EMAIL,
            self::MASS_CONTRACT_UPDATE,
            self::MASS_CONTRACT_UPDATE_FORM_TEXTS,
            self::MASS_CREATE_DROPSHIPPING_ORDER,
            self::MASS_CREATE_SALES_ORDER_COMMISSION,
            self::MASS_CREATE_TRANSPORTATION_ORDER_FROM_PICKING_BOOKS,
            self::MASS_CREDIT_NOTE_COMPLETE_WORKFLOW,
            self::MASS_CRM_EVENT_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_CRM_EVENT_DELETION,
            self::MASS_CRM_EVENT_UPDATE,
            self::MASS_CUSTOMER_RETURN_DELETE,
            self::MASS_DELETE_PICKING_BOOK_RECORD,
            self::MASS_DELETION_TRANSPORTATION_ORDER,
            self::MASS_DELIVERY_NOTE_SEND_EMAIL,
            self::MASS_DOWNLOAD_BANK_TRANSACTION,
            self::MASS_DUNNING_RUN_PROCESS_PROPOSALS,
            self::MASS_DUNNING_RUN_SEND_EMAIL_DETAIL,
            self::MASS_DUNNING_RUN_SEND_EMAIL_OVERVIEW,
            self::MASS_EBAY_LISTINGS_DELETE,
            self::MASS_EBAY_LISTING_UPDATE,
            self::MASS_INTERNAL_TRANSPORT_REFERENCE_DELETION,
            self::MASS_INTERNAL_TRANSPORT_REFERENCE_UPDATE,
            self::MASS_INVOICE_BOOK,
            self::MASS_INVOICE_CHECK,
            self::MASS_INVOICE_COMPLETE_ENTRY,
            self::MASS_INVOICE_COMPLETE_WORKFLOW,
            self::MASS_INVOICE_CREATE_OPEN_ITEMS,
            self::MASS_INVOICE_DOCUMENT_CREATION,
            self::MASS_INVOICE_SEND_EMAIL,
            self::MASS_INVOICE_VERIFIED,
            self::MASS_IT_SCOPE_ARTICLE_CREATION,
            self::MASS_IT_SCOPE_ORDER_SYNC,
            self::MASS_LEDGER_ACCOUNT_UPDATE,
            self::MASS_OFFER_ACCEPT,
            self::MASS_OFFER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_OFFER_DELETE,
            self::MASS_OFFER_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_OFFER_ITEM_UPDATE,
            self::MASS_OFFER_PRINT_DOCUMENT,
            self::MASS_OFFER_RECALCULATE_COSTS,
            self::MASS_OFFER_REJECT,
            self::MASS_OFFER_RESET_TAXES,
            self::MASS_OFFER_SEND_EMAIL,
            self::MASS_OFFER_UPDATE,
            self::MASS_OFFER_UPDATE_FORM_TEXTS,
            self::MASS_OPPORTUNITY_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_OPPORTUNITY_DELETION,
            self::MASS_OPPORTUNITY_UPDATE,
            self::MASS_ORDER_CANCEL,
            self::MASS_ORDER_CLOSE,
            self::MASS_ORDER_CONFIRMATION_CREATION,
            self::MASS_ORDER_DELETE,
            self::MASS_ORDER_RECALCULATE_COSTS,
            self::MASS_ORDER_REOPEN,
            self::MASS_ORDER_RESET_TAXES,
            self::MASS_ORDER_SHIPPING_LABEL_CREATION,
            self::MASS_ORDER_SHIPPING_RETURN_LABEL_CREATION,
            self::MASS_ORDER_UPDATE,
            self::MASS_ORDER_UPDATE_FORM_TEXTS,
            self::MASS_PARTY_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PARTY_DELETION,
            self::MASS_PARTY_MERGE,
            self::MASS_PARTY_SET_PRIMARY_CONTACT,
            self::MASS_PARTY_UPDATE,
            self::MASS_PART_PAYMENT_INVOICE_COMPLETE_WORKFLOW,
            self::MASS_PART_PAYMENT_INVOICE_CREATION,
            self::MASS_PAYMENT_RUN_PROCESS_PROPOSALS,
            self::MASS_PERFORMANCE_RECORD_COMPLETE_WORKFLOW_FOR_SALES_ORDER,
            self::MASS_PERFORMANCE_RECORD_CREATE_DOCUMENTS,
            self::MASS_PERFORMANCE_RECORD_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PERFORMANCE_RECORD_DELETE,
            self::MASS_PERFORMANCE_RECORD_INVOICING,
            self::MASS_PERFORMANCE_RECORD_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PERFORMANCE_RECORD_RECORDING,
            self::MASS_PERFORMANCE_RECORD_SEND_EMAIL,
            self::MASS_PERFORMANCE_RECORD_UPDATE,
            self::MASS_PERFORMANCE_RECORD_UPDATE_FORM_TEXTS,
            self::MASS_PICKING_LIST_CREATION,
            self::MASS_PM_REQUIREMENT_ITEM_UPDATE,
            self::MASS_PREPAYMENT_INVOICE_CREATION,
            self::MASS_PREPAYMENT_INVOICE_WORKFLOW,
            self::MASS_PRINT_DROPSHIPPING_ORDER_DELIVERY_NOTE,
            self::MASS_PRINT_PRODUCTION_ORDER,
            self::MASS_PRINT_PURCHASE_ORDER_DOCUMENTS,
            self::MASS_PRINT_RETURNS_PICKUP_NOTE,
            self::MASS_PRINT_RETURNS_RETURN_NOTE,
            self::MASS_PRINT_RETURN_DELIVERY_NOTE,
            self::MASS_PROCESS_DROPSHIPPING_ORDER,
            self::MASS_PRODUCTION_ORDER_CANCELLATION,
            self::MASS_PRODUCTION_ORDER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PRODUCTION_ORDER_DELETION,
            self::MASS_PRODUCTION_ORDER_ITEM_ARTICLE_EXCHANGE,
            self::MASS_PRODUCTION_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PRODUCTION_ORDER_MATERIAL_ITEMS_UPDATE,
            self::MASS_PRODUCTION_ORDER_PICKING_LIST_CREATION,
            self::MASS_PRODUCTION_ORDER_REOPEN,
            self::MASS_PRODUCTION_ORDER_UPDATE,
            self::MASS_PRODUCTION_ORDER_UPDATE_FORM_TEXTS,
            self::MASS_PROJECT_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PROJECT_UPDATE,
            self::MASS_PURCHASE_CREDIT_NOTE_COMPLETE_WORKFLOW,
            self::MASS_PURCHASE_INVOICE_BACK_TO_ENTRY,
            self::MASS_PURCHASE_INVOICE_BOOK_ACCOUNTING,
            self::MASS_PURCHASE_INVOICE_CANCEL,
            self::MASS_PURCHASE_INVOICE_COMPLETE_WORKFLOW,
            self::MASS_PURCHASE_INVOICE_CREATE_CREDIT_NOTE,
            self::MASS_PURCHASE_INVOICE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PURCHASE_INVOICE_DELETE,
            self::MASS_PURCHASE_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PURCHASE_INVOICE_ITEM_UPDATE,
            self::MASS_PURCHASE_INVOICE_RESET_TAXES,
            self::MASS_PURCHASE_INVOICE_SHIPPING_COST_ITEM_UPDATE,
            self::MASS_PURCHASE_INVOICE_UPDATE,
            self::MASS_PURCHASE_ORDER_CANCEL,
            self::MASS_PURCHASE_ORDER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PURCHASE_ORDER_DELETION,
            self::MASS_PURCHASE_ORDER_INVOICE_COMPLETE_WORKFLOW,
            self::MASS_PURCHASE_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PURCHASE_ORDER_ITEM_UPDATE,
            self::MASS_PURCHASE_ORDER_REOPEN,
            self::MASS_PURCHASE_ORDER_SEND_EMAIL,
            self::MASS_PURCHASE_ORDER_UPDATE,
            self::MASS_PURCHASE_ORDER_UPDATE_FORM_TEXTS,
            self::MASS_PURCHASE_REQUEST_CANCEL,
            self::MASS_PURCHASE_REQUEST_CLOSE,
            self::MASS_PURCHASE_REQUEST_CREATE_DOCUMENTS,
            self::MASS_PURCHASE_REQUEST_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_PURCHASE_REQUEST_DELETION,
            self::MASS_PURCHASE_REQUEST_REOPEN,
            self::MASS_PURCHASE_REQUEST_SEND_EMAIL,
            self::MASS_PURCHASE_REQUEST_UPDATE,
            self::MASS_PURCHASE_REQUEST_UPDATE_FORM_TEXTS,
            self::MASS_RECORD_ADDRESS_FROM_CRM_UPDATE,
            self::MASS_RECORD_EMAIL_ADDRESS_FROM_CRM_UPDATE,
            self::MASS_RECURRING_CREATE_INVOICE,
            self::MASS_RECURRING_INVOICE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_RECURRING_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_RECURRING_INVOICE_ITEM_UPDATE,
            self::MASS_RECURRING_INVOICE_UPDATE,
            self::MASS_RECURRING_INVOICE_UPDATE_FORM_TEXTS,
            self::MASS_RECURRING_RECALCULATION_COST,
            self::MASS_REGION_UPDATE,
            self::MASS_REMINDER_DELETION,
            self::MASS_REMINDER_UPDATE,
            self::MASS_RESET_CLEAR_OPEN_ITEM,
            self::MASS_SALES_BILL_OF_MATERIAL_ITEM_UPDATE,
            self::MASS_SALES_INVOICE_BACK_TO_ENTRY,
            self::MASS_SALES_INVOICE_BOOK_ACCOUNTING,
            self::MASS_SALES_INVOICE_CANCEL,
            self::MASS_SALES_INVOICE_CREATE_CREDIT_NOTE,
            self::MASS_SALES_INVOICE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SALES_INVOICE_DELETE,
            self::MASS_SALES_INVOICE_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SALES_INVOICE_ITEM_UPDATE,
            self::MASS_SALES_INVOICE_RECALCULATE_COSTS,
            self::MASS_SALES_INVOICE_RESET_TAXES,
            self::MASS_SALES_INVOICE_SHIPPING_COST_ITEM_UPDATE,
            self::MASS_SALES_INVOICE_UPDATE,
            self::MASS_SALES_INVOICE_UPDATE_FORM_TEXTS,
            self::MASS_SALES_ORDER_CASH_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SALES_ORDER_COMPLETE_WORKFLOW,
            self::MASS_SALES_ORDER_CREATE_PERFORMANCE_RECORD,
            self::MASS_SALES_ORDER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SALES_ORDER_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SALES_ORDER_ITEM_UPDATE,
            self::MASS_SALES_ORDER_SEND_EMAIL,
            self::MASS_SALES_PRICE_ADD_SPECIAL_PRICE,
            self::MASS_SALES_PRICE_DELETION,
            self::MASS_SAVE_ORDER_CONFIRMED,
            self::MASS_SEPA_MAIN_BANK_UPDATE,
            self::MASS_SERIALNUMBER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SET_ORDERS_SHIPPED,
            self::MASS_SHIPMENT_ARRIVAL_CANCEL,
            self::MASS_SHIPMENT_ARRIVAL_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SHIPMENT_ARRIVAL_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SHIPMENT_COMPLETE_WORKFLOW,
            self::MASS_SHIPMENT_COMPLETE_WORKFLOW_FOR_SALES_ORDER,
            self::MASS_SHIPMENT_CREATION,
            self::MASS_SHIPMENT_INCOMING_DELETE,
            self::MASS_SHIPMENT_INCOMING_REOPEN,
            self::MASS_SHIPMENT_INCOMING_UPDATE,
            self::MASS_SHIPMENT_INCOMING_UPDATE_FORM_TEXTS,
            self::MASS_SHIPMENT_INVOICE_CREATION,
            self::MASS_SHIPMENT_OUTGOING_BACK_TO_ENTRY,
            self::MASS_SHIPMENT_OUTGOING_CANCEL,
            self::MASS_SHIPMENT_OUTGOING_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SHIPMENT_OUTGOING_DELETE,
            self::MASS_SHIPMENT_OUTGOING_ITEM_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_SHIPMENT_OUTGOING_RETURN_LABEL_CREATION,
            self::MASS_SHIPMENT_OUTGOING_UPDATE,
            self::MASS_SHIPMENT_OUTGOING_UPDATE_FORM_TEXTS,
            self::MASS_SHIPPING_CARRIER_UPDATE,
            self::MASS_SHIPPING_CONFIRMATION_OF_ARRIVAL_CREATION,
            self::MASS_SHIPPING_CONFIRMATION_OF_ARRIVAL_SEND_EMAIL,
            self::MASS_SHIPPING_LABEL_CREATION,
            self::MASS_SHIPPING_NOTE_CREATION,
            self::MASS_SHIPPING_RETURN_LABEL_CREATION,
            self::MASS_SHIP_IN,
            self::MASS_SHIP_OUT,
            self::MASS_STANDARD_INVOICE_CREATION,
            self::MASS_STANDARD_INVOICE_WORKFLOW,
            self::MASS_START_PRODUCTION_ORDER,
            self::MASS_STOCK_BATCH_NUMBER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_STORAGE_PLACE_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_STORAGE_PLACE_DELETE,
            self::MASS_STORAGE_PLACE_UPDATE,
            self::MASS_SUPPLIER_PRICE_DELETION,
            self::MASS_SUPPLIER_RETURN_DELETE,
            self::MASS_TAG_DELETE,
            self::MASS_TASK_BILLING_DATA_UPDATE,
            self::MASS_TASK_CREATE_PERFORMANCE_RECORD,
            self::MASS_TASK_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE,
            self::MASS_TASK_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_TASK_DELETION,
            self::MASS_TASK_UPDATE,
            self::MASS_TAX_DELETE,
            self::MASS_TAX_RESET,
            self::MASS_TEAMVIEWER_DOWNLOAD_TIME_ENTRIES,
            self::MASS_TICKET_CATEGORY_UPDATE,
            self::MASS_TICKET_CREATE_PERFORMANCE_RECORD,
            self::MASS_TICKET_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE,
            self::MASS_TICKET_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_TICKET_DELETE,
            self::MASS_TICKET_FAQ_COPY,
            self::MASS_TICKET_FAQ_UPDATE,
            self::MASS_TICKET_LINK_TO_SALES_ORDER,
            self::MASS_TICKET_MERGE,
            self::MASS_TICKET_SLA_RECALCULATE,
            self::MASS_TICKET_STATUS_UPDATE,
            self::MASS_TICKET_UPDATE,
            self::MASS_TIME_RECORD_CREATE_PERFORMANCE_RECORD,
            self::MASS_TIME_RECORD_CREATE_PERFORMANCE_RECORD_DOCUMENT_AND_INVOICE,
            self::MASS_TIME_RECORD_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_TIME_RECORD_MOVE,
            self::MASS_TIME_RECORD_UPDATE,
            self::MASS_TRANSACTION_BOOKING,
            self::MASS_TRANSACTION_CLEARING,
            self::MASS_TRANSACTION_DELETE,
            self::MASS_TRANSACTION_PROCESSING,
            self::MASS_TRANSACTION_REMOVE_PAYMENTAPPLICATIONS,
            self::MASS_TRANSACTION_RESET_IGNORE,
            self::MASS_TRANSACTION_SET_IGNORE,
            self::MASS_TRANSPORTATION_ORDER_CUSTOM_ATTRIBUTE_UPDATE,
            self::MASS_TRANSPORTATION_ORDER_PICKING_LIST_CREATION,
            self::MASS_UPDATE_CONTRACT_PRICES,
            self::MASS_UPDATE_OFFER_PRICES,
            self::MASS_UPDATE_RECURRING_INVOICE_PRICES,
            self::MASS_UPDATE_SALES_INVOICE_PRICES,
            self::MASS_UPDATE_SALES_ORDER_PRICES,
            self::MASS_VARIANT_ARTICLE_DELETION,
            self::MATERIAL_PLANNING_RUN,
            self::OCR_PROCESSING,
            self::OFFER_EXPORT,
            self::OTTO_ARTICLE_UPLOAD_CHECK_SYNC,
            self::OTTO_WECLAPP_ARTICLE_SYNC,
            self::OTTO_WECLAPP_CREDIT_NOTE_SYNC,
            self::OTTO_WECLAPP_INVOICE_SYNC,
            self::OTTO_WECLAPP_ORDER_SYNC,
            self::PRESTA_WECLAPP_ARTICLE_SYNC,
            self::PRESTA_WECLAPP_CUSTOMER_SYNC,
            self::PRESTA_WECLAPP_ORDER_SYNC,
            self::PRICE_CALCULATION_ARTICLE,
            self::PURCHASE_INVOICE_EXPORT,
            self::PURCHASE_INVOICE_SHIPPING_COST_EXPORT,
            self::PURCHASE_ORDER_EXPORT,
            self::PURCHASE_ORDER_REQUEST_SEND_EMAIL,
            self::RECURRING_INVOICE_INVOICE_CREATION,
            self::RESET_ACCOUNTING,
            self::RESET_BUSINESS_TRANSACTIONS,
            self::SALES_INVOICE_EXPORT,
            self::SALES_INVOICE_SHIPPING_COST_ITEMS_EXPORT,
            self::SALES_INVOICE_XRECHNUNG_EXPORT,
            self::SALES_ORDER_EXPORT,
            self::SHIPMENTIN_EXPORT,
            self::SHIPMENTOUT_EXPORT,
            self::SHOPIFY_WECLAPP_ARTICLE_SYNC,
            self::SHOPIFY_WECLAPP_CUSTOMER_SYNC,
            self::SHOPIFY_WECLAPP_ORDER_SYNC,
            self::SHOPIFY_WECLAPP_PAYMENT_SYNC,
            self::SHOPWARE6_WECLAPP_ARTICLE_SYNC,
            self::SHOPWARE6_WECLAPP_CUSTOMER_SYNC,
            self::SHOPWARE6_WECLAPP_ORDER_SYNC,
            self::SHOPWARE_WECLAPP_ARTICLE_SYNC,
            self::SHOPWARE_WECLAPP_CUSTOMER_SYNC,
            self::SHOPWARE_WECLAPP_ORDER_SYNC,
            self::SYNAXON_WECLAPP_ARTICLE_UPDATE,
            self::TRANSUS_SALES_INVOICE_XML_CREATION,
            self::TRANSUS_SHIPMENT_XML_CREATION,
            self::TRANSUS_WECLAPP_ORDER_SYNC,
            self::WECLAPP_AMAZON_OUTBOUND_SHIPMENT_SYNC,
            self::WECLAPP_EBAY_LISTING_STOCK_SYNC,
            self::WECLAPP_EBAY_ORDER_SYNC,
            self::WECLAPP_ITSCOPE_ARTICLE_PRICE_UPDATE,
            self::WECLAPP_ITSCOPE_ORDER_SYNC,
            self::WECLAPP_KAUFLAND_ARTICLE_SYNC,
            self::WECLAPP_KAUFLAND_ORDER_SYNC,
            self::WECLAPP_KAUFLAND_STOCK_SYNC,
            self::WECLAPP_MAGENTO2_ARTICLE_SYNC,
            self::WECLAPP_MAGENTO2_ORDER_SYNC,
            self::WECLAPP_MAGENTO2_STOCK_SYNC,
            self::WECLAPP_MAGENTO_ARTICLE_SYNC,
            self::WECLAPP_MAGENTO_ORDER_SYNC,
            self::WECLAPP_MAGENTO_STOCK_SYNC,
            self::WECLAPP_OTTO_ARTICLE_SYNC,
            self::WECLAPP_OTTO_ORDER_SYNC,
            self::WECLAPP_OTTO_STOCK_SYNC,
            self::WECLAPP_PRESTA_ARTICLE_SYNC,
            self::WECLAPP_PRESTA_CUSTOMER_SYNC,
            self::WECLAPP_PRESTA_ORDER_SYNC,
            self::WECLAPP_PRESTA_STOCK_SYNC,
            self::WECLAPP_SALES_ORDER_AMAZON_REPORT_SYNC,
            self::WECLAPP_SHOPIFY_ARTICLE_SYNC,
            self::WECLAPP_SHOPIFY_ORDER_SYNC,
            self::WECLAPP_SHOPIFY_STOCK_SYNC,
            self::WECLAPP_SHOPWARE6_ARTICLE_SYNC,
            self::WECLAPP_SHOPWARE6_ORDER_SYNC,
            self::WECLAPP_SHOPWARE6_STOCK_SYNC,
            self::WECLAPP_SHOPWARE_ARTICLE_SYNC,
            self::WECLAPP_SHOPWARE_CUSTOMER_SYNC,
            self::WECLAPP_SHOPWARE_ORDER_SYNC,
            self::WECLAPP_SHOPWARE_STOCK_SYNC,
            self::WECLAPP_TO_AMAZON_ARTICLE_REPORT_SYNC,
            self::WECLAPP_TO_AMAZON_REPORT_SYNC,
            self::WECLAPP_TO_SHOPIFY_CUSTOMER_SYNC,
            self::WECLAPP_TO_SHOPWARE6_CUSTOMER_SYNC,
            self::WECLAPP_TO_WECLAPP_ARTICLE_PUSH,
            self::WECLAPP_TO_WECLAPP_CUSTOM_ATTRIBUTES_PULL,
            self::WECLAPP_TO_WECLAPP_DELETION,
            self::WECLAPP_TO_WECLAPP_OFFER_PULL,
            self::WECLAPP_TO_WECLAPP_OTHER_DATA_PUSH,
            self::WECLAPP_TO_WECLAPP_PARTY_PULL,
            self::WECLAPP_TO_WECLAPP_PARTY_PUSH,
            self::WECLAPP_TO_WECLAPP_PURCHASE_ORDERS_AS_SALES_ORDERS_PULL,
            self::WECLAPP_TO_WECLAPP_PURCHASE_ORDER_PUSH,
            self::WECLAPP_TO_WECLAPP_SALES_ORDER_PULL,
            self::WECLAPP_TO_WECLAPP_STORE_PUSH,
            self::WECLAPP_TO_WECLAPP_SUPPLIER_STOCK_SYNC,
            self::WECLAPP_TO_WECLAPP_TICKET_PULL,
            self::WECLAPP_TO_WECLAPP_USER_PULL,
            self::WECLAPP_WOOCOMMERCE_ARTICLE_SYNC,
            self::WECLAPP_WOOCOMMERCE_ORDER_SYNC,
            self::WECLAPP_WOOCOMMERCE_STOCK_SYNC,
            self::WOOCOMMERCE_WECLAPP_ARTICLE_SYNC,
            self::WOOCOMMERCE_WECLAPP_CUSTOMER_SYNC,
            self::WOOCOMMERCE_WECLAPP_ORDER_SYNC,
            self::XT_WECLAPP_ARTICLE_SYNC,
            self::XT_WECLAPP_ORDER_SYNC,
            self::ZUGFERD_IMPORT
        ];
    }
}


