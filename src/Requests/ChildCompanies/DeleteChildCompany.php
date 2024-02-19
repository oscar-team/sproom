<?php

namespace OscarTeam\Sproom\Requests\ChildCompanies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteChildCompany extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private readonly string $childCompanyId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/child-companies/{$this->childCompanyId}";
    }
}
