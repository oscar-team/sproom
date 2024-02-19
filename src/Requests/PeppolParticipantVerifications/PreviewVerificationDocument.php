<?php

namespace OscarTeam\Sproom\Requests\PeppolParticipantVerifications;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasFormBody;

class PreviewVerificationDocument extends Request implements HasBody
{
    use HasFormBody;

    protected Method $method = Method::GET;

    public function __construct(private readonly array $requestData)
    {
    }

    public function resolveEndpoint(): string
    {
        return "/peppol-participant-verifications/document-preview";
    }

    protected function defaultBody(): array
    {
        return $this->requestData;
    }
}
