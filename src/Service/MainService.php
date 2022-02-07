<?php

namespace App\Service;

use App\AutoMapping;
use App\Manager\MainManager;
use App\Response\CheckBackendHealthGetResponse;

class MainService
{
    private $autoMapping;
    private $mainManager;

    public function __construct(AutoMapping $autoMapping, MainManager $mainManager)
    {
        $this->autoMapping = $autoMapping;
        $this->mainManager = $mainManager;
    }

    public function checkBackendHealth()
    {
        $response = [];

        $response['result'] = 'Heart is beating';

        $response['availableServices'] = $this->mainManager->checkBackendHealth();

        return $this->autoMapping->map('array', CheckBackendHealthGetResponse::class, $response);
    }
}
