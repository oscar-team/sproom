<?php

namespace OscarTeam\Sproom\Resources;

use Saloon\Http\Connector;

class BaseResource
{
    public function __construct(protected Connector $connector)
    {
    }
}
