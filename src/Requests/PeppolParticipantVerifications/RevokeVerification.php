<?php

namespace OscarTeam\Sproom\Requests\PeppolParticipantVerifications;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class RevokeVerification extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private readonly string $verificationId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/peppol-participant-verifications/{$this->verificationId}";
    }
}
