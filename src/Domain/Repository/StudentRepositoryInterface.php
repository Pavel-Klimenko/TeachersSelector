<?php declare(strict_types=1);

namespace App\Domain\Repository;

interface StudentRepositoryInterface
{
    public function getAmount(): int;
}