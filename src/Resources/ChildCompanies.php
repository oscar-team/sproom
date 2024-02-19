<?php

namespace OscarTeam\Sproom\Resources;

use OscarTeam\Sproom\Requests\ChildCompanies\CreateChildCompany;
use OscarTeam\Sproom\Requests\ChildCompanies\DeleteChildCompany;
use OscarTeam\Sproom\Requests\ChildCompanies\EnrollChildCompany;
use OscarTeam\Sproom\Requests\ChildCompanies\GetChildCompany;
use OscarTeam\Sproom\Requests\ChildCompanies\GetChildCompanyToken;
use OscarTeam\Sproom\Requests\ChildCompanies\ListChildCompanies;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Saloon\Http\Response;

class ChildCompanies extends BaseResource
{
    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function list(): Response
    {
        return $this->connector->send(new ListChildCompanies());
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function create(array $requestData): Response
    {
        return $this->connector->send((new CreateChildCompany($requestData)));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function get(string $childCompanyId): Response
    {
        return $this->connector->send(new GetChildCompany($childCompanyId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function delete(string $childCompanyId): Response
    {
        return $this->connector->send(new DeleteChildCompany($childCompanyId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function enroll(array $requestData): Response
    {
        return $this->connector->send(new EnrollChildCompany($requestData));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function getToken(string $childCompanyId): Response
    {
        return $this->connector->send(new GetChildCompanyToken($childCompanyId));
    }
}
