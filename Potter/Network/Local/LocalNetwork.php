<?php

namespace Potter\Network\Local;

use Potter\Network\Network;

final class LocalNetwork extends Network implements LocalNetworkInterface
{
    public function __construct()
    {
        parent::__construct(
            networkName: self::LOCAL_NETWORK_NAME,
            networkHost: self::LOCAL_NETWORK_HOST
        );
    }
}
