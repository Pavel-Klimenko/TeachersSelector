<?php

declare(strict_types=1);

namespace App\Domain\ValueObject\User;
final class IsVerified
{
    public function __construct(
        private bool $isVerified,
    ){}
}
