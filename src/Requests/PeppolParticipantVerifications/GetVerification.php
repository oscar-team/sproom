<?php

namespace OscarTeam\Sproom\Requests\PeppolParticipantVerifications;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetVerification extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $verificationId)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/peppol-participant-verifications/{$this->verificationId}";
    }
}
