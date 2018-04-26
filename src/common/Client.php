<?php

namespace unapi\fns\common;

class Client extends \GuzzleHttp\Client
{
    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $config['base_uri'] = 'https://nalog.ru';
        $config['cookies'] = true;
        $config['verify'] = false;

        parent::__construct($config);
    }
}