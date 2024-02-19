<?php

namespace OscarTeam\Sproom\Requests\Webhooks;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateWebhook extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/webhooks';
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
