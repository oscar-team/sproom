# Sproom PHP Integration

This is a PHP library for integrating [Sproom](https://www.sproom.net/) apis

## Installation

Use the package manager [composer](https://getcomposer.org/) to install.

```bash
composer require oscar-team/sproom
```

## Usage

```php
require __DIR__ . '/vendor/autoload.php';

$client = new \OscarTeam\Sproom\SproomClient(token: 'token', environment: 'test');
```


### Note: Please refer to [offical](https://sproom.net/swagger/index.html) documentation to check the paramets for the api's.


### [ChildCompany Apis](https://sproom.net/swagger/index.html?url=/swagger/v1/swagger.json#/ChildCompany)

```php

// Get the list of child companies
$client->childCompanies()->list();

// Create new child company
$client->childCompanies()->create($requestData);

// Delete child company
$client->childCompanies()->delete($childCompanyId);

// Enroll child company
$client->childCompanies()->enroll($requestData);

// Get child company
$client->childCompanies()->get($childCompanyId);

// Get child company token
$client->childCompanies()->getToken($childCompanyId);

```

### [Company Apis](https://sproom.net/swagger/index.html?url=/swagger/v1/swagger.json#/Company)

```php

// Search for a company in sproom
$client->childCompanies()->search('DK:CVR:1234');

```

### [Document Apis](https://sproom.net/swagger/index.html?url=/swagger/v1/swagger.json#/Document)

```php

// List all the documents
$client->documents()->list();

// Send document to sproom
$client->documents()->send($filePath);

// Update already sent document
$client->documents()->update($documentId, []);

// Get sent document format
$client->documents()->getFormat($documentId, $format);

// Set response for the document
$client->documents()->setResponse($documentId, []);

// Get response for the document
$client->documents()->getResponse($documentId);

// Set state of the document
$client->documents()->setState($documentId, []);

// Get state of the document
$client->documents()->getState($documentId);

```

### [PeppolParticipantVerificarion Apis](https://sproom.net/swagger/index.html?url=/swagger/v1/swagger.json#/PeppolParticipantVerification)

```php

// List all the verifications
$client->peppolParticipantVerifications()->list();

// Initiate the verification
$client->peppolParticipantVerifications()->initiate([]);

// Get the verification
$client->peppolParticipantVerifications()->get($verificationId);

// Revoke the verification
$client->peppolParticipantVerifications()->revoke($verificationId);

// Download the verification document
$client->peppolParticipantVerifications()->downloadDocument($verificationId, []);

// Preview the verification document
$client->peppolParticipantVerifications()->previewDocument([]);

```

### [Recipients Apis](https://sproom.net/swagger/index.html?url=/swagger/v1/swagger.json#/Recipients)

```php

// Check if the recipients can reveie the document
$client->recipients()->check('DK:CVR:123');

// Bulk check
$client->recipients()->bulkCheck([
  'DK:CVR:123'
]);

```

### [Webhook Apis](https://sproom.net/swagger/index.html?url=/swagger/v1/swagger.json#/Webhook)

```php

// List all the webhooks
$client->webhooks()->list();

// Create new webhook
$client->webhooks()->create($requestData);

// Delete webhook
$client->webhooks()->delete($webhookId);

// Update webhook
$client->webhooks()->update($requestData);

// Get webhook
$client->webhooks()->get($webhookId);

// Test webhook
$client->webhooks()->test($webhookId);

```

### Response: 
All the apis will return the Saloon response class ```use Saloon\Http\Response;```. Please refer to the [offical](https://docs.saloon.dev/the-basics/responses) documentation of saloon for more details.


## Contributing

Pull requests are welcome. For major changes, please open an issue first
to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)

