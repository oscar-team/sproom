<?php

namespace OscarTeam\Sproom\Requests\Recipients;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class CheckRecipient extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $orgId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/recipients/{$this->orgId}";
    }
}
