<?php

namespace OscarTeam\Sproom\Requests\Documents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class SetDocumentState extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private readonly string $documentId, private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/documents/{$this->documentId}/state";
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
