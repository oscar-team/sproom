<?php

namespace OscarTeam\Sproom\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListWebhooks extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/webhooks';
    }
}
