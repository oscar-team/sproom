<?php

namespace OscarTeam\Sproom\Resources;

use OscarTeam\Sproom\Requests\Recipients\BulkCheckRecipient;
use OscarTeam\Sproom\Requests\Recipients\CheckRecipient;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Saloon\Http\Response;

class Recipients extends BaseResource
{
    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function check(string $orgId): Response
    {
        return $this->connector->send(new CheckRecipient($orgId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function bulkCheck(array $requestData): Response
    {
        return $this->connector->send(new BulkCheckRecipient($requestData));
    }
}
