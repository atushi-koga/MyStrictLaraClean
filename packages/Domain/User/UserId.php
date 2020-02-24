<?php
declare(strict_types=1);

namespace Package\Domain\User;

class UserId
{
    private const NULL_VALUE = 0;

    /**
     * @var int
     */
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public static function nullObject(): self
    {
        return new self(self::NULL_VALUE);
    }

    public function value(): int
    {
        return $this->value;
    }
}
