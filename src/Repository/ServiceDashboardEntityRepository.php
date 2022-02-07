<?php

namespace App\Repository;

use App\Entity\ServiceDashboardEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ServiceDashboardEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServiceDashboardEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServiceDashboardEntity[]    findAll()
 * @method ServiceDashboardEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServiceDashboardEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ServiceDashboardEntity::class);
    }

    public function getAllServices()
    {
        return $this->createQueryBuilder('serviceDashboardEntity')
            ->select('serviceDashboardEntity.id', 'serviceDashboardEntity.serviceCode', 'serviceDashboardEntity.serviceName', 'serviceDashboardEntity.serviceStatus')

            ->getQuery()
            ->getResult();
    }
}
