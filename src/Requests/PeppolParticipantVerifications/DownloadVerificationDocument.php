<?php

namespace OscarTeam\Sproom\Requests\PeppolParticipantVerifications;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DownloadVerificationDocument extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private readonly string $verificationId)
    {
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/octet-stream',
            'Content-Type' => 'application/json',
        ];
    }


    public function resolveEndpoint(): string
    {
        return "/peppol-participant-verifications/{$this->verificationId}/document";
    }
}
