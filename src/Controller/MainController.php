<?php

namespace App\Controller;

use App\Service\MainService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class MainController extends BaseController
{
    private $mainService;

    public function __construct(SerializerInterface $serializer, MainService $mainService)
    {
        parent::__construct($serializer);
        $this->mainService = $mainService;
    }

    #[Route(path: 'checkbackendhealth', name: 'checkBackendHealth', methods: 'GET')]
    public function checkBackendHealth(): JsonResponse
    {
        $result = $this->mainService->checkBackendHealth();

        return $this->response($result, self::FETCH);
    }
}
