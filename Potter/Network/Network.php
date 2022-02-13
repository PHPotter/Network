<?php

namespace Potter\Network;

class Network extends AbstractNetwork
{
    use NetworkHostTrait, NetworkNameTrait, NetworkServiceCapabilityTrait;
    
    public function __construct(string $networkName, string $networkHost)
    {
        $this->setNetworkName($networkName);
        $this->setNetworkHost($networkHost);
    }
}
