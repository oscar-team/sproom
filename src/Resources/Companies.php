<?php

namespace OscarTeam\Sproom\Resources;

use OscarTeam\Sproom\Requests\Companies\SearchCompany;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Saloon\Http\Response;

class Companies extends BaseResource
{
    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function search(string $orgId): Response
    {
        return $this->connector->send(new SearchCompany($orgId));
    }
}
