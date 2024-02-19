<?php

namespace OscarTeam\Sproom\Requests\ChildCompanies;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListChildCompanies extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/child-companies';
    }
}
