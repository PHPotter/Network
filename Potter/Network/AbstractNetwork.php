<?php

namespace Potter\Network;

abstract class AbstractNetwork implements NetworkInterface
{
    abstract  public function addNetworkServiceCapability(string $networkServiceName, string $networkServiceProtocol, int $networkServicePort): void;
    
    abstract public function getNetworkHost(): string;
    
    abstract public function getNetworkName(): string;
    
    abstract public function getNetworkServiceCapabilities(): array;
    
    abstract protected function setNetworkHost(string $networkHost): void;
    
    abstract protected function setNetworkName(string $networkName): void;
}
