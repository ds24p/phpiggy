<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class InRule implements RuleInterface
{
    public function validate(array $data, string $filed, array $params): bool
    {
        return in_array($data[$filed], $params);
    }
    public function getMessage(array $data, string $filed, array $params): string
    {
        return "Invalid selection";
    }
}
