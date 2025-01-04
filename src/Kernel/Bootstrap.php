<?php

namespace BuyMeACoffee\Kernel;

use Symfony\Component\Dotenv\Dotenv;

final class Bootstrap
{
    public function __construct()
    {
        $dotent = new Dotenv();
        $this->loadEnviromentVariables($dotent);
        echo $_ENV['ADMIN_EMAIL'];
    }

    private function initialize()
    {
    }

    private function loadEnviromentVariables(Dotenv $dotenv): void
    {
        $dotenv->load(__DIR__ . '/.env');
    }
}
