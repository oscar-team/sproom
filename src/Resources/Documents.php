<?php

namespace OscarTeam\Sproom\Resources;

use OscarTeam\Sproom\Requests\Documents\GetDocumentFormat;
use OscarTeam\Sproom\Requests\Documents\GetDocumentResponse;
use OscarTeam\Sproom\Requests\Documents\GetDocumentState;
use OscarTeam\Sproom\Requests\Documents\ListDocuments;
use OscarTeam\Sproom\Requests\Documents\SendDocument;
use OscarTeam\Sproom\Requests\Documents\SetDocumentResponse;
use OscarTeam\Sproom\Requests\Documents\SetDocumentState;
use OscarTeam\Sproom\Requests\Documents\UpdateDocument;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Saloon\Http\Response;

class Documents extends BaseResource
{
    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function list(string $filters = ''): Response
    {
        return $this->connector->send(new ListDocuments($filters));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function send(string $file): Response
    {
        return $this->connector->send(new SendDocument($file));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function update(string $documentId, array $requestData): Response
    {
        return $this->connector->send(new UpdateDocument($documentId, $requestData));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function getFormat(string $documentId, string $format): Response
    {
        return $this->connector->send(new GetDocumentFormat($documentId, $format));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
        public function setResponse(string $documentId, array $requestData): Response
    {
        return $this->connector->send(new SetDocumentResponse($documentId, $requestData));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function getResponse(string $documentId): Response
    {
        return $this->connector->send(new GetDocumentResponse($documentId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function setState(string $documentId, array $requestData): Response
    {
        return $this->connector->send(new SetDocumentState($documentId, $requestData));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function getState(string $documentId): Response
    {
        return $this->connector->send(new GetDocumentState($documentId));
    }
}
