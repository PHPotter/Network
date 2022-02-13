<?php

namespace Potter\Network;

interface NetworkInterface
{
    public const NETWORK_NAME_ALLOWED_CHARACTERS = [' ', '.', '-'];
    
    public function addNetworkServiceCapability(string $networkServiceName, string $networkServiceProtocol, int $networkServicePort): void;
            
    public function getNetworkHost(): string;
    
    public function getNetworkName(): string;
    
    public function getNetworkServiceCapabilities(): array;
}
