<?php

namespace Potter\Network;

use Potter\Throwable\Exception\Runtime\UnexpectedValue\UnexpectedValueException;

trait NetworkHostTrait
{
    private string $networkName;
    
    final public function getNetworkHost(): string
    {
        return $this->networkHost;
    }
    
    final protected function setNetworkHost(string $networkHost): void
    {
        if (!$this->validateHost($networkHost))
            throw new UnexpectedValueException;
        $this->networkHost = $networkHost;
    }
    
    private function validateHost(string $networkHost): bool
    {
        return filter_var($networkHost, FILTER_VALIDATE_DOMAIN, FILTER_FLAG_HOSTNAME) === $networkHost;
    }
}
