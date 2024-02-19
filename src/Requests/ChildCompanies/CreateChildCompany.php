<?php

namespace OscarTeam\Sproom\Requests\ChildCompanies;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class CreateChildCompany extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/child-companies';
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
