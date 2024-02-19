<?php

namespace OscarTeam\Sproom\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetDocumentFormat extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $documentId, private readonly string $format)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/documents/{$this->documentId}/{$this->format}";
    }
}
