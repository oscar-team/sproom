<?php

namespace OscarTeam\Sproom\Requests\Recipients;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class BulkCheckRecipient extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::GET;

    public function __construct(private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/recipients/bulk";
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
