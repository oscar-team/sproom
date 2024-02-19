<?php

namespace OscarTeam\Sproom\Requests\Companies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class SearchCompany extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $orgId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/companies/{$this->orgId}";
    }
}
