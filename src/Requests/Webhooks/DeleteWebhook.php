<?php

namespace OscarTeam\Sproom\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteWebhook extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private readonly string $webhookId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }
}
