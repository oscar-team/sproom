<?php

namespace OscarTeam\Sproom\Resources;

use OscarTeam\Sproom\Requests\Webhooks\CreateWebhook;
use OscarTeam\Sproom\Requests\Webhooks\DeleteWebhook;
use OscarTeam\Sproom\Requests\Webhooks\GetWebhook;
use OscarTeam\Sproom\Requests\Webhooks\ListWebhooks;
use OscarTeam\Sproom\Requests\Webhooks\TestWebhook;
use OscarTeam\Sproom\Requests\Webhooks\UpdateWebhook;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Saloon\Http\Response;

class Webhooks extends BaseResource
{
    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function list(): Response
    {
        return $this->connector->send(new ListWebhooks());
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function create(array $requestData): Response
    {
        return $this->connector->send((new CreateWebhook($requestData)));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function get(string $webhookId): Response
    {
        return $this->connector->send(new GetWebhook($webhookId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function update(string $webhookId, array $requestData): Response
    {
        return $this->connector->send(new UpdateWebhook($webhookId, $requestData));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function delete(string $webhookId): Response
    {
        return $this->connector->send(new DeleteWebhook($webhookId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function test(string $webhookId): Response
    {
        return $this->connector->send(new TestWebhook($webhookId));
    }
}
