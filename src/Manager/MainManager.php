<?php

namespace App\Manager;

use App\Repository\ServiceDashboardEntityRepository;

class MainManager
{
    private $serviceDashboardEntityRepository;

    public function __construct(ServiceDashboardEntityRepository $serviceDashboardEntityRepository)
    {
        $this->serviceDashboardEntityRepository = $serviceDashboardEntityRepository;
    }

    public function checkBackendHealth(): array
    {
        return $this->serviceDashboardEntityRepository->getAllServices();
    }
}
