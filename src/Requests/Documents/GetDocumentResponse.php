<?php

namespace OscarTeam\Sproom\Requests\Documents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class GetDocumentResponse extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $documentId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/documents/{$this->documentId}/responses";
    }
}
