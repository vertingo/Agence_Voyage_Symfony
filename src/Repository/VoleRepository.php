<?php

namespace App\Repository;

use App\Entity\Vole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vole|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vole|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vole[]    findAll()
 * @method Vole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vole::class);
    }
}
