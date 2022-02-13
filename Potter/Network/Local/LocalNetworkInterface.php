<?php

namespace Potter\Network\Local;

use Potter\Network\NetworkInterface;

interface LocalNetworkInterface extends NetworkInterface
{
    public const LOCAL_NETWORK_HOST = 'localhost.localdomain';
    public const LOCAL_NETWORK_NAME = 'Local Network';
}
