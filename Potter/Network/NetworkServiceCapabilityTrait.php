<?php

namespace Potter\Network;

trait NetworkServiceCapabilityTrait 
{
    private array $networkServiceCapabilities = [];
    
    final public function addNetworkServiceCapability(string $networkServiceName, string $networkServiceProtocol, int $networkServicePort): void
    {
        $this->networkServiceCapabilities[$networkServiceName] = [$networkServiceProtocol, $networkServicePort];
    }
    
    final public function getNetworkServiceCapabilities(): array
    {
        return $this->networkServiceCapabilities;
    }
}
