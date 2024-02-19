<?php

namespace OscarTeam\Sproom\Resources;

use OscarTeam\Sproom\Requests\PeppolParticipantVerifications\DownloadVerificationDocument;
use OscarTeam\Sproom\Requests\PeppolParticipantVerifications\GetVerification;
use OscarTeam\Sproom\Requests\PeppolParticipantVerifications\InitiateVerification;
use OscarTeam\Sproom\Requests\PeppolParticipantVerifications\ListVerifications;
use OscarTeam\Sproom\Requests\PeppolParticipantVerifications\PreviewVerificationDocument;
use OscarTeam\Sproom\Requests\PeppolParticipantVerifications\RevokeVerification;
use Saloon\Exceptions\InvalidResponseClassException;
use Saloon\Exceptions\PendingRequestException;
use Saloon\Http\Response;

class PeppolParticipantVerification extends BaseResource
{
    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function list(): Response
    {
        return $this->connector->send((new ListVerifications()));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function initiate(array $requestData): Response
    {
        return $this->connector->send(new InitiateVerification($requestData));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function get(string $verificationId): Response
    {
        return $this->connector->send(new GetVerification($verificationId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function revoke(string $verificationId): Response
    {
        return $this->connector->send(new RevokeVerification($verificationId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function downloadDocument(string $verificationId): Response
    {
        return $this->connector->send(new DownloadVerificationDocument($verificationId));
    }

    /**
     * @throws InvalidResponseClassException
     * @throws \Throwable
     * @throws \ReflectionException
     * @throws PendingRequestException
     */
    public function previewDocument(array $requestData): Response
    {
        return $this->connector->send(new PreviewVerificationDocument($requestData));
    }
}
