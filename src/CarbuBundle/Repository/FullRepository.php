<?php

namespace CarbuBundle\Repository;
use CarbuBundle\Entity\Vehicle;

/**
 * FullRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FullRepository extends \Doctrine\ORM\EntityRepository
{
    public function findPrevious(\DateTime $date, Vehicle $vehicle)
    {
        $qb = $this->_em->createQueryBuilder()
            ->select('f')->from('CarbuBundle:Full', 'f')
            ->innerJoin('f.vehicle', 'v')->addSelect('v')
            ->where('v.id = :vehicleId')
            ->andWhere('f.date < :date')
            ->setParameter('vehicleId', $vehicle->getId())
            ->setParameter('date', $date);

        $qb->orderBy('f.date', 'DESC');

        return $qb->getQuery()->getOneOrNullResult();
    }
}
