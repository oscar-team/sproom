<?php

namespace OscarTeam\Sproom\Requests\Documents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListDocuments extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $filters = '')
    {
    }

    public function resolveEndpoint(): string
    {
        return "documents/{$this->filters}";
    }
}
