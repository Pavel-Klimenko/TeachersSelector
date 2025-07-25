<?php declare(strict_types=1);

namespace App\Domain\ValueObject\Country;

final class Name
{
    public function __construct(
        private string $name,
    )
    {}

    public function getName():string
    {
        return $this->name;
    }

}
