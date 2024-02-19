<?php

namespace OscarTeam\Sproom\Requests\PeppolParticipantVerifications;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListVerifications extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/peppol-participant-verifications';
    }
}
