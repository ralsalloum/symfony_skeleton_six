<?php

namespace App\Entity;

use App\Repository\ServiceDashboardEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceDashboardEntityRepository::class)]
class ServiceDashboardEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $serviceName;

    #[ORM\Column(type: 'string', length: 10)]
    private $serviceCode;

    #[ORM\Column(type: 'string', length: 10)]
    private $serviceStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    public function setServiceCode(string $serviceCode): self
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    public function getServiceStatus(): ?string
    {
        return $this->serviceStatus;
    }

    public function setServiceStatus(string $serviceStatus): self
    {
        $this->serviceStatus = $serviceStatus;

        return $this;
    }
}
