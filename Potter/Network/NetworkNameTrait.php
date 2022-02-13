<?php

namespace Potter\Network;

use Potter\Throwable\Exception\Runtime\UnexpectedValue\UnexpectedValueException;

trait NetworkNameTrait
{
    private string $networkName;
    
    final public function getNetworkName(): string
    {
        return $this->networkName;
    }
    
    final protected function setNetworkName(string $networkName): void
    {
        if (!$this->validateName($networkName))
            throw new UnexpectedValueException;
        $this->networkName = $networkName;
    }
    
    private function validateName(string $networkName): bool
    {
        $networkName = str_replace(NetworkInterface::NETWORK_NAME_ALLOWED_CHARACTERS, '', $networkName);
        return ctype_alnum($networkName);
    }
}
