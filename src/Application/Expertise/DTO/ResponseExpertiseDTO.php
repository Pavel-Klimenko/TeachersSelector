<?php declare(strict_types=1);

namespace App\Application\Expertise\DTO;

final class ResponseExpertiseDTO
{
    public readonly int $id;
    public readonly string $name;
    public readonly string $code;
    public function __construct(
        int $id,
        string $name,
        string $code,
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
    }
}