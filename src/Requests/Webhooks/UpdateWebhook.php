<?php

namespace OscarTeam\Sproom\Requests\Webhooks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateWebhook extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PUT;

    public function __construct(private readonly string $webhookId, private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/webhooks/{$this->webhookId}";
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
