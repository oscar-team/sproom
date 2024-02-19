<?php

namespace OscarTeam\Sproom\Requests\Documents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateDocument extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(private readonly string $documentId, private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/documents/{$this->documentId}";
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
