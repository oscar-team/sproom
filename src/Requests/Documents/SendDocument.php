<?php

namespace OscarTeam\Sproom\Requests\Documents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasStreamBody;

class SendDocument extends Request implements HasBody
{
    use HasStreamBody;

    protected Method $method = Method::POST;

    public function __construct(private readonly string $file)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/documents';
    }

    public function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/plain',
        ];
    }

    protected function defaultBody(): mixed
    {
        return fopen($this->file, 'r');
    }
}
