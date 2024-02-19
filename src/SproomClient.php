<?php

namespace OscarTeam\Sproom;

use OscarTeam\Sproom\Resources\ChildCompanies;
use OscarTeam\Sproom\Resources\Companies;
use OscarTeam\Sproom\Resources\Documents;
use OscarTeam\Sproom\Resources\PeppolParticipantVerification;
use OscarTeam\Sproom\Resources\Recipients;
use OscarTeam\Sproom\Resources\Webhooks;
use Saloon\Http\Connector;

class SproomClient extends Connector
{
    public function __construct(protected string $token, protected string $environment = 'prod')
    {
        $this->withTokenAuth($token);
    }

    public function resolveBaseUrl(): string
    {
        return $this->getBaseUrl();
    }

    private function getBaseUrl(): string
    {
        if ($this->environment === 'prod') {
            return 'https://sproom.net/api';
        }

        return 'https://staging.sproom.net/api';
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function childCompanies(): ChildCompanies
    {
        return new ChildCompanies($this);
    }

    public function companies(): Companies
    {
        return new Companies($this);
    }

    public function documents(): Documents
    {
        return new Documents($this);
    }

    public function recipients(): Recipients
    {
        return new Recipients($this);
    }

    public function webhooks(): Webhooks
    {
        return new Webhooks($this);
    }

    public function peppolParticipantVerifications(): PeppolParticipantVerification
    {
        return new PeppolParticipantVerification($this);
    }
}
